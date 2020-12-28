<?php

return \StubsGenerator\Finder::create()
	->in(
		[
			'polylang-pro/modules',
			'polylang-pro/vendor/wpsyntex/polylang/admin',
			'polylang-pro/vendor/wpsyntex/polylang/frontend',
			'polylang-pro/vendor/wpsyntex/polylang/include',
			'polylang-pro/vendor/wpsyntex/polylang/install',
			'polylang-pro/vendor/wpsyntex/polylang/modules',
			'polylang-pro/vendor/wpsyntex/polylang/settings',
		]
	)
	->append(
		\StubsGenerator\Finder::create()
			->in( ['polylang-pro/include'] )
			->notPath( 'functions.php' )
	)
	->sortByName();
