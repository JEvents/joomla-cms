<?php
/**
 * @package    Joomla.UnitTest
 * @copyright  Copyright (C) 2005 - 2018 Open Source Matters. All rights reserved.
 * @license    GNU General Public License
 */

/**
 * Mock class for JModel.
 *
 * @package  Joomla.UnitTest
 * @since    3.0.0
 */
class JModelMock
{
	/**
	 * Creates and instance of the mock JModel object.
	 *
	 * @param   object  $test  A test object.
	 *
	 * @return  object
	 *
	 * @since   3.0.0
	 */
	public static function create($test)
	{
		// Collect all the relevant methods in JModel.
		$methods = array(
			'getState',
			'loadState',
			'setState',
		);

		// Build the mock object.
		$mockObject = $test->getMockBuilder('JModel')
					->setMethods($methods)
					->setConstructorArgs(array())
					->setMockClassName('')
					->disableOriginalConstructor()
					->getMock();

		return $mockObject;
	}
}
