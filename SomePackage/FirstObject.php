<?php

namespace WP_Syntex\SomePackage;

class FirstObject implements \WP_Syntex\SomePackage\FirstInterface
{
	private SecondObject $second;

	public function __construct( SecondObject $second ) {
		$this->second = $second;
	}

	/**
	 * @return SecondObject
	 */
	public function get(): \WP_Syntex\SomePackage\SecondObject {
		return $this->second;
	}
}
