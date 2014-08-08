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


/**
 * PHPLinq_ILinqProvider
 *
 * @category   PHPLinq
 * @package    PHPLinq
 * @copyright  Copyright (c) 2008 PHPLinq (http://www.codeplex.com/PHPLinq)
 */
interface PHPLinq_ILinqProvider {
	/**
	 * Can this provider type handle data in $source?
	 *
	 * @param mixed $source
	 * @return bool
	 */
	public static function handles($source);
	
	/**
	 * Create a new class instance
	 *
	 * @param string $name
	 * @return PHPLinq_ILinqProvider
	 */
	public function __construct($name);
	
	/**
	 * Set source of data
	 *
	 * @param mixed $source
	 * @return PHPLinq_ILinqProvider
	 */
	public function in($source);
	
	/**
	 * Select
	 *
	 * @param  string	$expression	Expression which creates a resulting element
	 * @return mixed
	 */
	public function select($expression = null);
	
	/*
	public function selectMany();
	*/
	
	/**
	 * Where
	 *
	 * @param  string	$expression	Expression checking if an element should be contained
	 * @return PHPLinq_ILinqProvider
	 */
	public function where($expression);
	
	/*
	public function join();
	public function groupJoin();
	*/
	
	/**
	 * Take $n elements
	 *
	 * @param int $n
	 * @return PHPLinq_ILinqProvider
	 */
	public function take($n);
	
	/**
	 * Take elements while $expression evaluates to true
	 *
	 * @param  string	$expression	Expression to evaluate
	 * @return PHPLinq_ILinqProvider
	 */
	public function takeWhile($expression);
	
	/**
	 * Skip $n elements
	 *
	 * @param int $n
	 * @return PHPLinq_ILinqProvider
	 */
	public function skip($n);
	
	/**
	 * Skip elements while $expression evaluates to true
	 *
	 * @param  string	$expression	Expression to evaluate
	 * @return PHPLinq_ILinqProvider
	 */
	public function skipWhile($expression);
	
	/**
	 * Select the elements of a certain type
	 *
	 * @param string $type	Type name
	 */
	public function ofType($type);
	
	/**
	 * Concatenate data
	 *
	 * @param mixed $source
	 * @return PHPLinq_ILinqProvider
	 */
	public function concat($source);
	
	/**
	 * OrderBy
	 *
	 * @param  string	$expression	Expression to order elements by
	 * @param  string	$comparer	Comparer function (taking 2 arguments, returning -1, 0, 1)
	 * @return PHPLinq_ILinqProvider
	 */
	public function orderBy($expression, $comparer = null);
	
	/**
	 * OrderByDescending
	 *
	 * @param  string	$expression	Expression to order elements by
	 * @param  string	$comparer	Comparer function (taking 2 arguments, returning -1, 0, 1)
	 * @return PHPLinq_ILinqProvider
	 */
	public function orderByDescending($expression, $comparer = null);
	
	/**
	 * ThenBy
	 *
	 * @param  string	$expression	Expression to order elements by
	 * @param  string	$comparer	Comparer function (taking 2 arguments, returning -1, 0, 1)
	 * @return PHPLinq_ILinqProvider
	 */
	public function thenBy($expression, $comparer = null);
	
	/**
	 * ThenByDescending
	 *
	 * @param  string	$expression	Expression to order elements by
	 * @param  string	$comparer	Comparer function (taking 2 arguments, returning -1, 0, 1)
	 * @return PHPLinq_ILinqProvider
	 */
	public function thenByDescending($expression, $comparer = null);
	
	/**
	 * Reverse elements
	 *
	 * @param bool $preserveKeys Preserve keys?
	 * @return PHPLinq_ILinqProvider
	 */
	public function reverse($preserveKeys = null);
	
	/*
	public function groupBy(); 
	*/
	
	/**
	 * Distinct
	 *
	 * @param  string	$expression	Expression to retrieve the key value. 
	 * @return PHPLinq_ILinqProvider
	 */
	public function distinct($expression); 
	
	/*
	public function union();
	public function intersect();
	public function except(); 
	public function equalAll();
	*/
	
	/**
	 * First
	 *
	 * @param  string	$expression	Expression which creates a resulting element
	 * @return mixed
	 */
	public function first($expression = null);
	
	/**
	 * FirstOrDefault 
	 *
	 * @param  string	$expression	Expression which creates a resulting element
	 * @param  mixed	$defaultValue Default value to return if nothing is found
	 * @return mixed
	 */
	public function firstOrDefault ($expression = null, $defaultValue = null);
	
	/**
	 * Last
	 *
	 * @param  string	$expression	Expression which creates a resulting element
	 * @return mixed
	 */
	public function last($expression = null);
	
	/**
	 * LastOrDefault 
	 *
	 * @param  string	$expression	Expression which creates a resulting element
	 * @param  mixed	$defaultValue Default value to return if nothing is found
	 * @return mixed
	 */
	public function lastOrDefault ($expression = null, $defaultValue = null);
	
	/*
	public function single();
	*/
	
	/**
	 * Element at index
	 *
	 * @param mixed $index Index
	 * @return mixed Element at $index
	 */
	public function elementAt($index = null);
	
	/**
	 * Element at index or default
	 *
	 * @param mixed $index Index
	 * @param  mixed $defaultValue Default value to return if nothing is found
	 * @return mixed Element at $index
	 */
	public function elementAtOrDefault($index = null, $defaultValue = null);
	
	/**
	 * Any
	 *
	 * @param  string	$expression	Expression checking if an element is contained
	 * @return boolean
	 */
	public function any($expression);
	
	/**
	 * All
	 *
	 * @param  string	$expression	Expression checking if an all elements are contained
	 * @return boolean
	 */
	public function all($expression);

	/**
	 * Contains
	 *
	 * @param mixed $element Is the $element contained?
	 * @return boolean
	 */
	public function contains($element);
	
	/**
	 * Count elements
	 *
	 * @return int Element count
	 */
	public function count();
	
	/*
	public function sum();
	public function min();
	public function max();
	public function average();
	public function aggregate();
	*/
}
