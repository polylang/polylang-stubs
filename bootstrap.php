<?php

include_once 'polylang-stubs.php';

// WordPress constants not defined by szepeviktor/phpstan-wordpress.
define( 'COOKIEHASH', '' );
define( 'WP_LANG_DIR', './languages' );

// Polylang constants.
define( 'POLYLANG_VERSION', '0.0' ); // Must also be defined as dynamic in phpstan.neon.dist.
define( 'PLL_COOKIE', 'pll_language' );
