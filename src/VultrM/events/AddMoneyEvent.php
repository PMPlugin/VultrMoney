<?php

namespace VultrM\event;

use VultrM\Main;

class AddMoneyEvents {
	private $owner, $amount, $name, $target;
	public function __construct(Main $owner, $name, $amount) {
		parent::__construct ( $owner);
		$this->name = $name;
		$this->amount = $amount;
	}
	public function getPlayerName() {
		return $this->name;
	}
	public function getAmount() {
		return $this->amount;
	}
}