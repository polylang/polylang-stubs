<?php

// Declare functions we don't want to be included in stubs.
function sanitize_locale_name(){}

// Generate stubs.
return \StubsGenerator\Finder::create()
	->in( 'polylang-pro/src' )
	->exclude( 'integrations' )
	->in(
		[
			'polylang-pro/dependencies',
			'polylang-pro/vendor/wpsyntex/polylang/src',
		]
	)
	->sortByName();
