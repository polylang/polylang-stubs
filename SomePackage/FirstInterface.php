<?php

namespace WP_Syntex\SomePackage;

interface FirstInterface
{
	/**
	 * @return SecondInterface
	 */
	public function get(): \WP_Syntex\SomePackage\SecondInterface;
}
