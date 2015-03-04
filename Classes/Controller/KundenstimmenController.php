<?php
namespace NIT\NitKundenstimmen\Controller;

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
class KundenstimmenController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * kundenstimmenRepository
	 *
	 * @var \NIT\NitKundenstimmen\Domain\Repository\KundenstimmenRepository
	 * @inject
	 */
	protected $kundenstimmenRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$kundenstimmens = $this->kundenstimmenRepository->findAll();
		$this->view->assign('kundenstimmens', $kundenstimmens);
	}

	/**
	 * action show
	 *
	 * 
	 * @return void
	 */
	public function showAction() {
    $kundenstimme = $this->kundenstimmenRepository->findRandom();
		$this->view->assign('kundenstimme', $kundenstimme);
	}

  	/**
	 * action tease
	 *
	 * 
	 * @return void
	 */
	public function teaseAction() {
    $kundenstimme = $this->kundenstimmenRepository->findRandom();
		$this->view->assign('kundenstimme', $kundenstimme);
	}
}
?>