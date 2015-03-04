<?php

namespace NIT\NitKundenstimmen\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Daniel Nowak <daniel@nowak-it.com>, NIT
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \NIT\NitKundenstimmen\Domain\Model\Kundenstimmen.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage nit_kundenstimmen
 *
 * @author Daniel Nowak <daniel@nowak-it.com>
 */
class KundenstimmenTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \NIT\NitKundenstimmen\Domain\Model\Kundenstimmen
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \NIT\NitKundenstimmen\Domain\Model\Kundenstimmen();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getCompanyReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCompanyForStringSetsCompany() { 
		$this->fixture->setCompany('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCompany()
		);
	}
	
	/**
	 * @test
	 */
	public function getCustomeropinionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCustomeropinionForStringSetsCustomeropinion() { 
		$this->fixture->setCustomeropinion('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCustomeropinion()
		);
	}
	
	/**
	 * @test
	 */
	public function getCustomerReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCustomerForStringSetsCustomer() { 
		$this->fixture->setCustomer('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCustomer()
		);
	}
	
	/**
	 * @test
	 */
	public function getTeaserReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTeaserForStringSetsTeaser() { 
		$this->fixture->setTeaser('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTeaser()
		);
	}
	
}
?>