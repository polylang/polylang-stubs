<?php

// Declare functions we don't want to be included in stubs.
function sanitize_locale_name(){}

// Generate stubs.
return \StubsGenerator\Finder::create()
	->in(
		[
			'polylang-pro/src',
			'polylang-pro/dependencies',
			'polylang-pro/vendor/wpsyntex/polylang/src',
		]
	)
	->notPath( 'polylang-pro/src/functions.php' )
	->sortByName();
