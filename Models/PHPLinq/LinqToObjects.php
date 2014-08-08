<?php
/**
 * PHPLinq
 *
 * Copyright (c) 2008 PHPLinq
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPLinq
 * @package    PHPLinq
 * @copyright  Copyright (c) 2008 PHPLinq (http://www.codeplex.com/PHPLinq)
 * @license    http://www.gnu.org/licenses/lgpl.txt	LGPL
 * @version    0.2.0, 2008-02-29
 */


/** PHPLinq */
require_once(MODEL_PATH.'PHPLinq.php');

/** PHPLinq_ILinqProvider */
require_once(MODEL_PATH.'PHPLinq/ILinqProvider.php');

/** PHPLinq_Expression */
require_once(MODEL_PATH.'PHPLinq/Expression.php');

/** PHPLinq_OrderByExpression */
require_once(MODEL_PATH.'PHPLinq/OrderByExpression.php');

/** PHPLinq_Initiator */
require_once(MODEL_PATH.'PHPLinq/Initiator.php');

/** Register ILinqProvider */
PHPLinq_Initiator::registerProvider(MODEL_PATH.'PHPLinq_LinqToObjects');


/**
 * PHPLinq_LinqToObjects
 *
 * @category   PHPLinq
 * @package    PHPLinq
 * @copyright  Copyright (c) 2008 PHPLinq (http://www.codeplex.com/PHPLinq)
 */
class PHPLinq_LinqToObjects implements PHPLinq_ILinqProvider {
	/**
	 * Default variable name
	 *
	 * @var string
	 */
	private $_from = '';
	
	/**
	 * Data source
	 *
	 * @var mixed
	 */
	private $_data = null;
	
	/**
	 * Where expression
	 *
	 * @var PHPLinq_Expression
	 */
	private $_where = null;
	
	/**
	 * Take n elements
	 *
	 * @var int?
	 */
	private $_take = null;
	
	/**
	 * Skip n elements
	 *
	 * @var int?
	 */
	private $_skip = null;
	
	/**
	 * Take while expression is true
	 *
	 * @var PHPLinq_Expression
	 */
	private $_takeWhile = null;
	
	/**
	 * Skip while expression is true
	 *
	 * @var PHPLinq_Expression
	 */
	private $_skipWhile = null;
	
	/**
	 * OrderBy expressions
	 *
	 * @var PHPLinq_Expression[]
	 */
	private $_orderBy = array();
	
	/**
	 * Distinct expression
	 *
	 * @var PHPLinq_Expression
	 */
	private $_distinct = null;
	
	/**
	 * OfType expression
	 *
	 * @var PHPLinq_Expression
	 */
	private $_ofType = null;
	
	/**
	 * Can this provider type handle data in $source?
	 *
	 * @param mixed $source
	 * @return bool
	 */
	public static function handles($source) {
		return is_array($source);
	}
	
	/**
	 * Create a new class instance
	 *
	 * @param string $name
	 * @return PHPLinq_ILinqProvider
	 */
	public function __construct($name) {
		$this->_from = $name;
		return $this;
	}
	
	/**
	 * Set source of data
	 *
	 * @param mixed $source
	 * @return PHPLinq_ILinqProvider
	 */
	public function in($source) {
		$this->_data = $source;
		return $this;
	}
	
	/**
	 * Select
	 *
	 * @param  string	$expression	Expression which creates a resulting element
	 * @return mixed
	 */
	public function select($expression = null) {
		// Returnvalue
		$returnValue = array();
			
		// Expression set?
		if (is_null($expression) || $expression == '') {
			$expression = $this->_from . ' => ' . $this->_from;
		}
		
		// OrderBy set?
		if (is_array($this->_orderBy) && count($this->_orderBy) > 0) {
			// Create sorter
			$sorter = '';
			
			// Is there only one OrderBy expression?
			if (count($this->_orderBy) == 1) {
				// First sorter
				$sorter = $this->_orderBy[0]->getFunctionReference();
			} else {
				// Create OrderBy expression
				$compareCode = '';
				
				// Compile comparer function
				$compareCode = "
					\$result = null;
				";
				for ($i = 0; $i < count($this->_orderBy); $i++) {
					
					$f = substr($this->_orderBy[$i]->getFunctionReference(), 1); 
					$compareCode .= "
					\$result = call_user_func_array(chr(0).'$f', array({$this->_from}A, {$this->_from}B));
					if (\$result != 0) {
						return \$result;
					}
					";
					
				}
				$compareCode .= "return \$result;";
				$sorter = create_function($this->_from . 'A, ' . $this->_from . 'B', $compareCode);
			}
			
			// Sort!
			usort($this->_data, $sorter);
		}
		
		// Distinct values storage
		$distinctValues = array();
		
		// Create selector expression
		$selector = new PHPLinq_Expression($expression, $this->_from);
		
		// Count elements
		$elementCount = 0;
		
		// Loop trough data source
		foreach ($this->_data as $value) {
			// Is it a valid element?
			$isValid = true;
			
			// OfType expresion set? Evaluate it!
			if ($isValid && !is_null($this->_ofType)) {
				$isValid = $this->_ofType->execute($value);
			}
			
			// Where expresion set? Evaluate it!
			if ($isValid && !is_null($this->_where)) {
				$isValid = $this->_where->execute($value);
			}
			
			// Distinct expression set? Evaluate it!
			if ($isValid && !is_null($this->_distinct)) {
				$distinctKey = $this->_distinct->execute($value);
				if (isset($distinctValues[$distinctKey])) {
					$isValid = false;
				} else {
					$distinctValues[$distinctKey] = 1; 
				}
			}
			
			// The element is valid, check if it is our selection range
			if ($isValid) {
					
				// Skip element?
				if (!is_null($this->_skipWhile) && $this->_skipWhile->execute($value)) {
					$isValid = false;
				}
				if (!is_null($this->_skip) && $elementCount < $this->_skip) {
					$isValid = false;
				}
				
				// Take element?
				if (!is_null($this->_takeWhile) && !$this->_takeWhile->execute($value)) {
					$isValid = false;
					break;
				}
				if (!is_null($this->_take) && count($returnValue) >= $this->_take) {
					$isValid = false;
					break;
				}

				// Next element
				$elementCount++;
				
				// Add the element to the return value if it is a valid element
				if ($isValid) {
					$returnValue[] = $selector->execute($value);
				}
			}
		}
		
		// Return value
		return $returnValue;
	}
	
	/**
	 * Where
	 *
	 * @param  string	$expression	Expression checking if an element should be contained
	 * @return PHPLinq_ILinqProvider
	 */
	public function where($expression) {
		$this->_where = new PHPLinq_Expression($expression, $this->_from);
		return $this;
	}
	
	/**
	 * Take $n elements
	 *
	 * @param int $n
	 * @return PHPLinq_ILinqProvider
	 */
	public function take($n) {
		$this->_take = $n;
		return $this;
	}
	
	/**
	 * Skip $n elements
	 *
	 * @param int $n
	 * @return PHPLinq_ILinqProvider
	 */
	public function skip($n) {
		$this->_skip = $n;
		return $this;
	}
	
	/**
	 * Take elements while $expression evaluates to true
	 *
	 * @param  string	$expression	Expression to evaluate
	 * @return PHPLinq_ILinqProvider
	 */
	public function takeWhile($expression) {
		$this->_takeWhile = new PHPLinq_Expression($expression, $this->_from);
		return $this;
	}
	
	/**
	 * Skip elements while $expression evaluates to true
	 *
	 * @param  string	$expression	Expression to evaluate
	 * @return PHPLinq_ILinqProvider
	 */
	public function skipWhile($expression) {
		$this->_skipWhile = new PHPLinq_Expression($expression, $this->_from);
		return $this;
	}
	
	/**
	 * OrderBy
	 *
	 * @param  string	$expression	Expression to order elements by
	 * @param  string	$comparer	Comparer function (taking 2 arguments, returning -1, 0, 1)
	 * @return PHPLinq_ILinqProvider
	 */
	public function orderBy($expression, $comparer = null) {
		$this->_orderBy[0] = new PHPLinq_OrderByExpression($expression, $this->_from, false, $comparer);
		return $this;
	}
	
	/**
	 * OrderByDescending
	 *
	 * @param  string	$expression	Expression to order elements by
	 * @param  string	$comparer	Comparer function (taking 2 arguments, returning -1, 0, 1)
	 * @return PHPLinq_ILinqProvider
	 */
	public function orderByDescending($expression, $comparer = null) {
		$this->_orderBy[0] = new PHPLinq_OrderByExpression($expression, $this->_from, true, $comparer);
		return $this;
	}
	
	/**
	 * ThenBy
	 *
	 * @param  string	$expression	Expression to order elements by
	 * @param  string	$comparer	Comparer function (taking 2 arguments, returning -1, 0, 1)
	 * @return PHPLinq_ILinqProvider
	 */
	public function thenBy($expression, $comparer = null) {
		$this->_orderBy[] = new PHPLinq_OrderByExpression($expression, $this->_from, false, $comparer);
		return $this;
	}
	
	/**
	 * ThenByDescending
	 *
	 * @param  string	$expression	Expression to order elements by
	 * @param  string	$comparer	Comparer function (taking 2 arguments, returning -1, 0, 1)
	 * @return PHPLinq_ILinqProvider
	 */
	public function thenByDescending($expression, $comparer = null) {
		$this->_orderBy[] = new PHPLinq_OrderByExpression($expression, $this->_from, true, $comparer);
		return $this;
	}
	
	/**
	 * Distinct
	 *
	 * @param  string	$expression	Expression to retrieve the key value. 
	 * @return PHPLinq_ILinqProvider
	 */
	public function distinct($expression) {
		$this->_distinct = new PHPLinq_Expression($expression, $this->_from);
		return $this;
	}
	
	/**
	 * Select the elements of a certain type
	 *
	 * @param string $type	Type name
	 */
	public function ofType($type) {
		// Create a new expression
		$expression = $this->_from . ' => ';
		
		// Evaluate type
		switch (strtolower($type)) {
			case 'array':
			case 'bool':
			case 'double':
			case 'float':
			case 'int':
			case 'integer':
			case 'long':
			case 'null':
			case 'numeric':
			case 'object':
			case 'real':
			case 'scalar':
			case 'string':
				$expression .= 'is_' . strtolower($type) . '(' . $this->_from . ')';
				break;
			default:
				$expression .= 'is_a(' . $this->_from . ', "' . $type . '")';
				break;
		}
		
		// Assign expression
		$this->_ofType = new PHPLinq_Expression($expression, $this->_from);
		return $this;
	}
	
	/**
	 * Any
	 *
	 * @param  string	$expression	Expression checking if an element is contained
	 * @return boolean
	 */
	public function any($expression) {
		$result = $this->where($expression)->select($this->_from);
		return count($result) > 0;
	}
	
	/**
	 * All
	 *
	 * @param  string	$expression	Expression checking if an all elements are contained
	 * @return boolean
	 */
	public function all($expression) {
		$result = $this->where($expression)->select($this->_from);
		return count($result) == count($this->_data);
	}

	/**
	 * Contains
	 *
	 * @param mixed $element Is the $element contained?
	 * @return boolean
	 */
	public function contains($element) {
		return in_array($element, $this->_data);
	}
	
	/**
	 * Reverse elements
	 * 
	 * @param bool $preserveKeys Preserve keys?
	 * @return PHPLinq_ILinqProvider
	 */
	public function reverse($preserveKeys = null) {
		$this->_data = array_reverse($this->_data, $preserveKeys);
		return $this;
	}
	
	/**
	 * Element at index
	 *
	 * @param mixed $index Index
	 * @return mixed Element at $index
	 */
	public function elementAt($index = null) {
		return isset($this->_data[$index]) ? $this->_data[$index] : null;
	}
	
	/**
	 * Element at index or default
	 *
	 * @param mixed $index Index
	 * @param  mixed $defaultValue Default value to return if nothing is found
	 * @return mixed Element at $index
	 */
	public function elementAtOrDefault($index = null, $defaultValue = null) {
		$returnValue = $this->elementAt($index);
		if (!is_null($returnValue)) {
			return $returnValue;
		} else {
			return $defaultValue;
		}
	}
	
	/**
	 * Count elements
	 *
	 * @return int Element count
	 */
	public function count() {
		return count($this->_data);
	}
	
	/**
	 * Concatenate data
	 *
	 * @param mixed $source
	 * @return PHPLinq_ILinqProvider
	 */
	public function concat($source) {
		$temporaryData = array_merge($this->_data, $source);
		$this->_data = $temporaryData;
		return $this;
	}
	
	/**
	 * First
	 *
	 * @param  string	$expression	Expression which creates a resulting element
	 * @return mixed
	 */
	public function first($expression = null) {
		$linqCommand = clone $this;
		$result = $linqCommand->skip(0)->take(1)->select($expression);
		if (count($result) > 0) {
			return array_shift($result);
		}
		return null;
	}
	
	/**
	 * FirstOrDefault 
	 *
	 * @param  string	$expression	Expression which creates a resulting element
	 * @param  mixed	$defaultValue Default value to return if nothing is found
	 * @return mixed
	 */
	public function firstOrDefault ($expression = null, $defaultValue = null) {
		$returnValue = $this->first($expression);
		if (!is_null($returnValue)) {
			return $returnValue;
		} else {
			return $defaultValue;
		}
	}
	
	/**
	 * Last
	 *
	 * @param  string	$expression	Expression which creates a resulting element
	 * @return mixed
	 */
	public function last($expression = null) {
		$linqCommand = clone $this;
		$result = $linqCommand->reverse()->skip(0)->take(1)->select($expression);
		if (count($result) > 0) {
			return array_shift($result);
		}
		return null;
	}
	
	/**
	 * LastOrDefault 
	 *
	 * @param  string	$expression	Expression which creates a resulting element
	 * @param  mixed	$defaultValue Default value to return if nothing is found
	 * @return mixed
	 */
	public function lastOrDefault ($expression = null, $defaultValue = null) {
		$returnValue = $this->last($expression);
		if (!is_null($returnValue)) {
			return $returnValue;
		} else {
			return $defaultValue;
		}
	}
}
