<?php
namespace NIT\NitKundenstimmen\Domain\Model;

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
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package nit_kundenstimmen
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Kundenstimmen extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * company
	 *
	 * @var \string
	 */
	protected $company;

	/**
	 * customeropinion
	 *
	 * @var \string
	 */
	protected $customeropinion;

	/**
	 * customer
	 *
	 * @var \string
	 */
	protected $customer;

	/**
	 * teaser
	 *
	 * @var \string
	 */
	protected $teaser;

	/**
	 * Returns the company
	 *
	 * @return \string $company
	 */
	public function getCompany() {
		return $this->company;
	}

	/**
	 * Sets the company
	 *
	 * @param \string $company
	 * @return void
	 */
	public function setCompany($company) {
		$this->company = $company;
	}

	/**
	 * Returns the customeropinion
	 *
	 * @return \string $customeropinion
	 */
	public function getCustomeropinion() {
		return $this->customeropinion;
	}

	/**
	 * Sets the customeropinion
	 *
	 * @param \string $customeropinion
	 * @return void
	 */
	public function setCustomeropinion($customeropinion) {
		$this->customeropinion = $customeropinion;
	}

	/**
	 * Returns the customer
	 *
	 * @return \string $customer
	 */
	public function getCustomer() {
		return $this->customer;
	}

	/**
	 * Sets the customer
	 *
	 * @param \string $customer
	 * @return void
	 */
	public function setCustomer($customer) {
		$this->customer = $customer;
	}

	/**
	 * Returns the teaser
	 *
	 * @return \string $teaser
	 */
	public function getTeaser() {
		return $this->teaser;
	}

	/**
	 * Sets the teaser
	 *
	 * @param \string $teaser
	 * @return void
	 */
	public function setTeaser($teaser) {
		$this->teaser = $teaser;
	}

}
?>