<?php

namespace WP_Syntex\SomePackage;

class SecondObject implements \WP_Syntex\SomePackage\SecondInterface
{
	private int $id;

	public function __construct( int $id ) {
		$this->id = $id;
	}

	public function getId(): int {
		return $this->id;
	}
}
