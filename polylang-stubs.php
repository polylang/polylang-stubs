<?php

/**
 * @package Polylang-Pro
 */
/**
 * A class to manage the Polylang Pro text domain and license key
 * and load all modules and integrations.
 *
 * @since 2.6
 */
class PLL_Pro
{
    /**
     * Constructor.
     * Manages the compatibility with some plugins.
     * It is loaded as soon as possible as we may need to act before other plugins are loaded.
     *
     * @since 2.6
     */
    public function __construct()
    {
    }
    /**
     * Manages the Polylang Pro translations and license key.
     * Loads the modules.
     *
     * @since 2.8
     *
     * @param object $polylang Polylang object.
     * @return void
     */
    public function init(&$polylang)
    {
    }
    /**
     * Hack to download Polylang languages packs
     *
     * @since 1.9
     *
     * @param array  $args HTTP request args.
     * @param string $url  The url of the request.
     * @return array
     */
    public function http_request_args($args, $url)
    {
    }
    /**
     * Remove Polylang from the list of plugins to update if it is not installed
     *
     * @since 2.1.1
     *
     * @param stdClass $value The value stored in the update_plugins site transient.
     * @return stdClass
     */
    public function pre_set_site_transient_update_plugins($value)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Manages the ability to enable or disable a language
 *
 * @since 1.9
 */
class PLL_Active_Languages
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Current Language.
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Constructor
     *
     * @since 1.9
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Adds class inactive / active class
     *
     * @since 1.9
     *
     * @param string[]     $classes  CSS classes applied to a row in the languages list table.
     * @param PLL_Language $language The language.
     * @return string[] Modified list of classes.
     */
    public function row_classes($classes, $language)
    {
    }
    /**
     * Remove the default lang action for disabled languages
     *
     * @since 1.9
     *
     * @param string       $action   HTML markup of the action to define the default language.
     * @param PLL_Language $language The Language.
     * @return string Modified row action.
     */
    public function remove_default_lang_action($action, $language)
    {
    }
    /**
     * Adds disable/enable links to row actions in the languages list table
     *
     * @since 1.9
     *
     * @param string[]     $actions  The list of the HTML markup of row actions.
     * @param PLL_Language $language The language.
     * @return string[] Modified list of row actions.
     */
    public function row_actions($actions, $language)
    {
    }
    /**
     * Enables or disables a language
     *
     * @since 1.9
     *
     * @param int  $lang_id The language term id.
     * @param bool $enable  True to enable, false to disable.
     * @return void
     */
    public function _enable($lang_id, $enable)
    {
    }
    /**
     * Enables a language
     *
     * @since 1.9
     *
     * @return void
     */
    public function enable()
    {
    }
    /**
     * Disables a language
     *
     * @since 1.9
     *
     * @return void
     */
    public function disable()
    {
    }
    /**
     * Sets error 404 if the requested language is not active.
     *
     * @since 1.9
     *
     * @return void
     */
    public function maybe_set_404()
    {
    }
    /**
     * Styles the border
     *
     * @since 1.9
     *
     * @return void
     */
    public function print_css()
    {
    }
    /**
     * Removes inactive languages from the list of languages for users who can't edit posts
     *
     * @since 1.9
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Removes inactive languages from the list of languages.
     *
     * @since 1.9.3
     *
     * @param PLL_Language[] $languages Array of PLL_Language objects.
     * @return PLL_Language[]
     */
    public function remove_inactive_languages($languages)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Loads the correct class depending on the context.
 *
 * @since 2.8
 */
class PLL_Admin_Loader
{
    /**
     * Reference to the Polylang object.
     *
     * @var object
     */
    protected $polylang;
    /**
     * Name of the property to create.
     *
     * @var string
     */
    protected $property;
    /**
     * Constructor
     *
     * @since 2.8
     *
     * @param object $polylang Polylang object.
     * @param string $property Name of the property to add to $polylang.
     */
    public function __construct(&$polylang, $property)
    {
    }
    /**
     * Finds out if the block editor is in use and loads the correct class accordingly.
     *
     * @since 2.8
     *
     * @return void
     */
    public function load()
    {
    }
    /**
     * Loads the correct class, depending on the editor in use.
     *
     * We must make sure to instantiate the class only once, as the function may be called from a filter,
     *
     * @since 2.8
     *
     * @param bool $is_block_editor Whether to use the block editor or not.
     * @return bool
     */
    public function _load($is_block_editor)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Abstract class for language switcher block.
 *
 * @since 3.2
 */
abstract class PLL_Abstract_Language_Switcher_Block
{
    /**
     * @var PLL_Links
     */
    protected $links;
    /**
     * @var PLL_Model
     */
    protected $model;
    /**
     * Current lang to render the language switcher block in an admin context.
     *
     * @since 2.8
     *
     * @var string|null
     */
    protected $admin_current_lang;
    /**
     * Is the context block editor?
     *
     * @since 2.8
     *
     * @var bool
     */
    protected $is_block_editor = \false;
    /**
     * Constructor
     *
     * @since 2.8
     *
     * @param PLL_Base $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Adds the required hooks.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Returns the block name with the Polylang's namespace.
     *
     * @since 3.2
     *
     * @return string The block name.
     */
    protected abstract function get_block_name();
    /**
     * Renders the Polylang's block on server.
     *
     * @since 3.2
     * @since 3.3 Accepts two new parameters, $content and $block.
     *
     * @param array    $attributes The block attributes.
     * @param string   $content    The saved content.
     * @param WP_Block $block      The parsed block.
     * @return string The HTML string output to serve.
     */
    public abstract function render($attributes, $content, $block);
    /**
     * Returns the supported pieces of inherited context for the block, by default none are supported..
     *
     * @since 3.3
     *
     * @return array An array with context subject, default to empty.
     */
    protected function get_context()
    {
    }
    /**
     * Registers the Polylang's block.
     *
     * @since 2.8
     * @since 3.2 Renamed and now handle any type of block registration based on a dynamic name.
     *
     * @return void
     */
    public function register()
    {
    }
    /**
     * Returns REST parameters for language switcher block.
     * Used to be in the PLL_Block_Editor_Switcher_Block class.
     *
     * @see WP_REST_Server::dispatch()
     *
     * @since 2.8
     *
     * @param mixed           $result  Response to replace the requested version with. Can be anything
     *                                 a normal endpoint can return, or null to not hijack the request.
     * @param WP_REST_Server  $server  Server instance.
     * @param WP_REST_Request $request Request used to generate the response.
     * @return mixed
     */
    public function get_rest_query_params($result, $server, $request)
    {
    }
    /**
     * Adds the attributes to render the block correctly in the block editor.
     * Also specifies not to echo the switcher in any case.
     *
     * @since 3.2
     *
     * @param array $attributes The attributes of the currently rendered block.
     * @return array The modified attributes if rendered in the block editor.
     */
    protected function set_attributes_for_block($attributes)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Setup the block editor plugin
 *
 * @since 2.6
 */
class PLL_Block_Editor_Plugin
{
    /**
     * @var PLL_Model
     */
    protected $model;
    /**
     * @var PLL_CRUD_Posts
     */
    protected $posts;
    /**
     * @var array
     */
    protected $options;
    /**
     * @var PLL_Language|false
     */
    protected $curlang;
    /**
     * Constructor
     *
     * @since 2.6
     *
     * @param PLL_Frontend|PLL_Admin|PLL_Settings|PLL_REST_Request $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Filters preload paths based on the context (block editor for posts, site editor or widget editor for instance).
     *
     * @since 3.4
     *
     * @param array                   $preload_paths Preload paths.
     * @param WP_Block_Editor_Context $context       Editor context.
     * @return array Filtered preload paths.
     */
    public function filter_preload_paths($preload_paths, $context)
    {
    }
    /**
     * Enqueue scripts for the block editor plugin.
     *
     * @since 2.6
     *
     * @return void
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Method that allow legacy widgets in widget block editor previously removed by WP and hide legacy Polylang widget.
     *
     * @since 3.2
     *
     * @param array $widget_ids An array of hidden widget ids.
     * @return array
     */
    public function filter_legacy_widgets($widget_ids)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Filters widgets by language on frontend
 *
 * @since 3.1
 */
class PLL_Frontend_Filters_Widgets
{
    /**
     * Internal non persistent cache object.
     *
     * @var PLL_Cache
     */
    public $cache;
    /**
     * Current language.
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Constructor: setups filters and actions
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Remove widgets from sidebars if they are not visible in the current language
     * Needed to allow is_active_sidebar() to return false if all widgets are not for the current language. See #54
     *
     * @since 2.1
     * @since 2.4 The result is cached as the function can be very expensive in case there are a lot of widgets
     *
     * @param array $sidebars_widgets An associative array of sidebars and their widgets
     * @return array
     */
    public function sidebars_widgets($sidebars_widgets)
    {
    }
    /**
     * Method that handles the removal of widgets in the sidebars depending on their display language.
     *
     * @since 3.1
     *
     * @param array  $widget_data      An array containing the widget data
     * @param array  $sidebars_widgets An associative array of sidebars and their widgets
     * @param string $sidebar          Sidebar name
     * @param int    $key              Widget number
     * @return array                   An associative array of sidebars and their widgets
     */
    public function handle_widget_in_sidebar_callback($widget_data, $sidebars_widgets, $sidebar, $key)
    {
    }
    /**
     * Browse the widgets sidebars and sort the ones that should be displayed or not.
     *
     * @since 3.1
     *
     * @param  array $sidebars_widgets       An associative array of sidebars and their widgets
     * @param  array $wp_registered_widgets  Array of all registered widgets.
     * @return array                         An associative array of sidebars and their widgets
     */
    public function filter_widgets_sidebars($sidebars_widgets, $wp_registered_widgets)
    {
    }
    /**
     * Test if the widget is an object.
     *
     * @since 3.1
     *
     * @param  array  $wp_registered_widgets Array of all registered widgets.
     * @param  string $widget                String that identifies the widget.
     * @return bool                          True if object, false otherwise.
     */
    protected function is_widget_object($wp_registered_widgets, $widget)
    {
    }
    /**
     * Get widgets settings and number.
     *
     * @since 3.1
     *
     * @param array  $wp_registered_widgets Array of all registered widgets.
     * @param string $widget                String that identifies the widget.
     * @return array An array containing the widget settings and number.
     */
    protected function get_widget_data($wp_registered_widgets, $widget)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Filters widgets blocks by language on frontend
 *
 * @since 3.1
 */
class PLL_Frontend_Filters_Widgets_Blocks extends \PLL_Frontend_Filters_Widgets
{
    /**
     * Method that handles the removal of widgets in the sidebars depending on their display language.
     *
     * @since 3.1
     *
     * @param array  $widget_data      An array containing the widget data
     * @param array  $sidebars_widgets An associative array of sidebars and their widgets
     * @param string $sidebar          Sidebar name
     * @param int    $key              Widget number
     * @return array                   An associative array of sidebars and their widgets
     */
    public function handle_widget_in_sidebar_callback($widget_data, $sidebars_widgets, $sidebar, $key)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Language switcher block.
 *
 * @since 2.8
 * @since 3.2 Extends now the PLL_Abstract_Language_Switcher_Block abstract class.
 */
class PLL_Language_Switcher_Block extends \PLL_Abstract_Language_Switcher_Block
{
    /**
     * Returns the language switcher block name with the Polylang's namespace.
     *
     * @since 3.2
     *
     * @return string The block name.
     */
    protected function get_block_name()
    {
    }
    /**
     * Renders the `polylang/language-switcher` block on server.
     *
     * @since 2.8
     * @since 3.2 Renamed according to its parent abstract class.
     * @since 3.3 Accepts two new parameters, $content and $block.
     *
     * @param array    $attributes The block attributes.
     * @param string   $content The saved content. Unused.
     * @param WP_Block $block The parsed block. Unused.
     * @return string Returns the language switcher.
     */
    public function render($attributes, $content, $block)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Language switcher block for navigation.
 *
 * @since 3.2
 */
class PLL_Navigation_Language_Switcher_Block extends \PLL_Abstract_Language_Switcher_Block
{
    /**
     * Adds the required hooks specific to the navigation langague switcher.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Returns the navigation language switcher block name with the Polylang's namespace.
     *
     * @since 3.2
     *
     * @return string The block name.
     */
    protected function get_block_name()
    {
    }
    /**
     * Returns the supported pieces of context for the 'polylang/navigation-language-switcher' block.
     * This context will be inherited from the 'core/navigation' block.
     *
     * @since 3.3
     *
     * @return string[]
     */
    protected function get_context()
    {
    }
    /**
     * Renders the `polylang/navigation-language-switcher` block on server.
     *
     * @since 3.1
     * @since 3.3 Accepts two new parameters, $content and $block.
     *
     * @param array    $attributes The block attributes.
     * @param string   $content The saved content. Unused.
     * @param WP_Block $block The parsed block.
     * @return string The HTML string output to serve.
     */
    public function render($attributes, $content, $block)
    {
    }
    /**
     * Register switcher menu item meta options as a REST API field.
     *
     * @since 3.2
     *
     * @return void
     */
    public function register_switcher_menu_item_options_meta_rest_field()
    {
    }
    /**
     * Renders language switcher in dropdown mode for navigation block. Applies recursively for dropdown.
     * Partial copy of the WordPress functions render_block_core_navigation_link() and render_block_core_navigation_submenu().
     * See: https://github.com/WordPress/wordpress-develop/blob/5.9.0/src/wp-includes/blocks/navigation-link.php#L116-L125 and https://github.com/WordPress/wordpress-develop/blob/5.9.0/src/wp-includes/blocks/navigation-submenu.php#L116-L125
     *
     * @since 3.2
     *
     * @param array    $switcher_item Raw element of a language switcher.
     * @param array    $attributes    The attributes of the language switcher.
     * @param string[] $context       The pieces of context inherited from the 'core/navigation' block.
     * @param array    $inner_items   Elements of the submenu, used for dropdown. Default to empty array.
     * @return string The rendered switcher.
     */
    protected function render_link_item($switcher_item, $attributes, $context = array(), $inner_items = array())
    {
    }
    /**
     * Returns the current language item from the switcher elements.
     *
     * @since 3.2
     *
     * @param array $switcher_items An array of raw switcher items.
     * @return array|false The item in the current language if found, false otherwise.
     */
    protected function find_current_lang_item($switcher_items)
    {
    }
    /**
     * Formats a language item title based on attributes.
     *
     * @since 3.3
     *
     * @param array $item       A raw language switcher item.
     * @param array $attributes The language switcher attributes.
     * @return string Formatted menu item title
     */
    protected function get_item_title($item, $attributes)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Widget editor language attribute.
 *
 * @since 3.1
 */
class PLL_Widget_Editor_Language_Attribute
{
    /**
     * Constructor.
     *
     * Adds filters.
     *
     * @since 3.1
     */
    public function __construct()
    {
    }
    /**
     *
     * Adds the 'pll_lang' attribute to an existing block.
     * Do not add the 'pll_lang' attribute if the block is a legacy widget.
     *
     * @since 3.1
     *
     * @param array $block_properties Array of parameters for registering a block type.
     *                                Each of them becomes a property of the block type object.
     * @return array Array of modified parameters for registering a block type.
     */
    public function add_block_attribute($block_properties)
    {
    }
    /**
     * Whether the block is a dynamic one or not.
     *
     * Copied from {@see https://github.com/WordPress/wordpress-develop/blob/2382765afa36e10bf3c74420024ad4e85763a47c/src/wp-includes/class-wp-block-type.php#L261 WP_Block_Type::is_dynamic()}.
     *
     * Explanation: 'register_block_type_args' filter only passes the WP_Block_Type::name property, so the WP_Block_Type::is_dynamic() method is inaccessible in a callback function, {@see https://github.com/WordPress/WordPress/blob/5.7/wp-includes/class-wp-block-type.php#L330 }.
     * We could not use the WP_Block_Type_Registry to get the block object neither, because the WP_Block_Type instance is added to the registry only after the use of the 'register_block_type_args' filter ( done in WP_Block_Type::set_props itself done in the WP_Block_Type constructor ):
     *   - {@see https://github.com/WordPress/WordPress/blob/5.7/wp-includes/class-wp-block-type.php#L223}
     *   - {@see https://github.com/WordPress/WordPress/blob/5.7/wp-includes/class-wp-block-type.php#L312}
     *   - {@see https://github.com/WordPress/WordPress/blob/058f9903676a7efaee534a682df0a2a8b87574d8/wp-includes/class-wp-block-type-registry.php#L80-L84}
     *
     * @since 3.1
     *
     * @param array $block_properties Associative array mimicking the structure of a {@see https://github.com/WordPress/wordpress-develop/blob/2382765afa36e10bf3c74420024ad4e85763a47c/src/wp-includes/class-wp-block-parser.php#L15 WP_Block_Parser_Block}.
     *
     * @return bool
     */
    public function is_block_dynamic($block_properties)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Define a Bulk_Translate option
 *
 * Should be registered using the pll_bulk_action_options
 *
 * @see PLL_Bulk_Translate
 *
 * @since 2.7
 */
abstract class PLL_Bulk_Translate_Option
{
    /**
     * A reference to the current PLL_Model
     *
     * @since 2.7
     *
     * @var PLL_Model
     */
    protected $model;
    /**
     * The name by which the option is referred to in forms
     *
     * @since 2.7
     *
     * @var string
     */
    protected $name;
    /**
     * A short sentence to explicit what this option does
     *
     * @since 2.7
     *
     * @var string
     */
    protected $description;
    /**
     * Determines the order in which the options should be displayed.
     *
     * Lower priority options are displayed before higher priority options.
     *
     * @since 2.7
     *
     * @var int
     */
    protected $priority;
    /**
     * Once the action executed, its results are stored in this array
     *
     * @since 2.7
     *
     * @var array
     */
    protected $results = array();
    /**
     * Every notices raised during bulk action execution will be stored here
     *
     * @since 2.7
     *
     * @var array {
     *     PLL_Bulk_Translate::ERROR   array
     *     PLL_Bulk_Trasnlate::WARNING array
     *     PLL_Bulk_Translate::UPDATED array
     * }
     */
    protected $notices = array(\PLL_Bulk_Translate::ERROR => array(), \PLL_Bulk_Translate::WARNING => array(), \PLL_Bulk_Translate::UPDATED => array());
    /**
     * Constructor
     *
     * @since 2.7
     *
     * @param array     $args {
     *     string $name        The name of the option.
     *     string $description A short sentence too describe what this option does. Please use i18n functions.
     *     int    $priority    Determines the order of displaying th options. Default 10.
     * }.
     * @param PLL_Model $model An instance to the current instance of PLL_Model.
     */
    public function __construct($args, $model)
    {
    }
    /**
     * Getter
     *
     * @since 2.7
     *
     * @return string
     */
    public function get_name()
    {
    }
    /**
     * Getter
     *
     * @since 2.7
     *
     * @return string
     */
    public function get_description()
    {
    }
    /**
     * Getter.
     *
     * @since 2.7
     *
     * @return int
     */
    public function get_priority()
    {
    }
    /**
     * Checks whether the option should be selectable by the user.
     *
     * @since 2.7
     *
     * @return bool
     */
    public abstract function is_available();
    /**
     * Decides whether or not an object should be translated.
     *
     * @since 2.7
     *
     * @param int    $id   Identify a post, media, term...
     * @param string $lang A language locale.
     * @return bool|int
     */
    public function filter($id, $lang)
    {
    }
    /**
     * Triggers the correct functions for creating a translation of the selected content in a selected language.
     *
     * Has to be overridden.
     *
     * @since 2.7
     *
     * @param int    $object_id Identifies the post, term, media, etc. to be translated.
     * @param string $lang      A language locale.
     * @return void
     */
    public abstract function translate($object_id, $lang);
    /**
     * The actual effect of the bulk translate action
     *
     * @since 2.7
     *
     * @param int[]    $object_ids An array of the id of the WordPress objects to translate.
     * @param string[] $languages  An array of the locales of the languages in which to translate.
     *
     * @return array {
     *     array PLL_Bulk_Translate::UPDATED Info notices to be displayed to the user.
     *     array PLL_Bulk_Translate::WARNING Warning notices to be displayed to the user.
     * }
     */
    public function do_bulk_action($object_ids, $languages)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * A class to bulk translate posts.
 *
 * @since 2.4
 */
class PLL_Bulk_Translate
{
    const RESULTS = 'data';
    const ERROR = 'error';
    const WARNING = 'notice-warning';
    const UPDATED = 'updated';
    /**
     * @var PLL_Model
     */
    protected $model;
    /**
     * Reference to the current WP_Screen object.
     *
     * @since 2.7
     *
     * @var WP_Screen|null
     */
    protected $current_screen;
    /**
     * Stores the results of the bulk action when it's done.
     *
     * @since 2.7
     *
     * @var array|null
     */
    protected $results;
    /**
     * References the options for the bulk action.
     *
     * @since 2.7
     *
     * @var PLL_Bulk_Translate_Option[]
     */
    protected $options = array();
    /**
     * PLL_Bulk_Translate constructor.
     *
     * @since 2.4
     *
     * @param PLL_Model $model Shared instance of the current PLL_Model.
     */
    public function __construct($model)
    {
    }
    /**
     * Enqueues script and style.
     *
     * @since 2.8
     *
     * @return void
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Registers options of the Translate bulk action.
     *
     * @since 2.7
     *
     * @param PLL_Bulk_Translate_Option[] $options An array of {@see PLL_Bulk_Translate_Option} to register.
     * @return void
     */
    public function register_options($options)
    {
    }
    /**
     * Add actions and filters.
     *
     * Verifies the post type is allowed for translation and that the post status isn't 'trashed'.
     *
     * @since 2.4
     * @since 2.7 hooked on 'current_screen' and takes the screen as parameter.
     *
     * @param WP_Screen $current_screen Instance of the current WP_Screen.
     * @return void
     */
    public function init($current_screen)
    {
    }
    /**
     * Retrieves the needed data in the request body and sanitize it.
     *
     * @since 2.7
     *
     * @param array $request {
     *   Parameters from the HTTP Request.
     *
     *   @type int[]    $post               The list of post ids to bulk translate. Must be set if `$post` is not.
     *   @type int[]    $media              The list of media ids to bulk translate.  Must be set if `$media` is not.
     *   @type string   $translate          The translation action ('pll_copy_post' for copy, 'pll_sync_post' for synchronization).
     *   @type string[] $pll-translate-lang The list of language slugs to translate to.
     * }
     * @return array {
     *   @type string[] $error              Error messages.
     *   @type int[]    $item_ids           The sanitized list of post (or media) ids to translate.
     *   @type string   $translate          The sanitized translation action.
     *   @type string[] $pll-translate-lang The sanitized list of language slugs to translate to.
     * }
     */
    protected function parse_request($request)
    {
    }
    /**
     * Handle the Translate bulk action.
     *
     * @since 2.4
     * @since 2.7 Use a transient to store notices.
     *
     * @param string $sendback The URL to redirect to, with parameters.
     * @param string $action   Name of the requested bulk action.
     *
     * @return string The URL to redirect to.
     */
    public function handle_bulk_action($sendback, $action)
    {
    }
    /**
     * Add a bulk action
     *
     * @since 2.4
     *
     * @param array $actions List of bulk actions.
     *
     * @return array
     */
    public function add_bulk_action($actions)
    {
    }
    /**
     * Displays the Bulk translate form.
     *
     * @since 2.4
     *
     * @return void
     */
    public function display_form()
    {
    }
    /**
     * Displays the notices if some have been registered.
     *
     * Because WordPress triggers a {@see wp_redirect()}, these notices are stored in a transient.
     *
     * @since 2.7
     *
     * @return void
     */
    public function display_notices()
    {
    }
    /**
     * Fixes the case when no post is selected and a redirect is fired before we can handle the bulk action.
     *
     * @since 2.7
     *
     * @param string $sendback The destination URL.
     *
     * @return string Unmodified $sendback.
     */
    public function parse_request_before_redirect($sendback)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * A trait to implement the duplicate action.
 *
 * @since 2.8
 */
trait PLL_Duplicate_Trait
{
    /**
     * Reference to the plugin options.
     *
     * @var array
     */
    protected $options;
    /**
     * Reference to the PLL_Sync_Content instance.
     *
     * @var PLL_Sync_Content
     */
    protected $sync_content;
    /**
     * Tells whether the button is active or not
     *
     * @since 2.1
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Saves the button state
     *
     * @since 2.1
     *
     * @param string $post_type Current post type.
     * @param bool   $active    New requested button state.
     * @return bool Whether the new button state is accepted or not.
     */
    protected function toggle_option($post_type, $active)
    {
    }
    /**
     * Fires the content copy
     *
     * @since 2.5
     * @since 3.1 Add $is_block_editor param as the method is now hooked to the filter use_block_editor_for_post.
     *
     * @param bool $is_block_editor Whether the post can be edited or not.
     * @return bool
     */
    public function new_post_translation($is_block_editor)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Copy the title, content and excerpt from the source when creating a new post translation
 * in the block editor.
 * Exposes the pll_duplicate_content user meta in the REST API.
 *
 * @since 2.6
 */
class PLL_Duplicate_REST
{
    use \PLL_Duplicate_Trait;
    /**
     * Constructor
     *
     * @since 2.6
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Get the duplicate content user meta value.
     *
     * @since 2.6
     *
     * @return bool[]
     */
    public function get_duplicate_content_meta()
    {
    }
    /**
     * Update the duplicate content user meta.
     *
     * @since 2.6
     *
     * @param bool[]  $options An array with post type as key and boolean as value.
     * @param WP_User $user    An instance of WP_User.
     * @return bool
     */
    public function udpate_duplicate_content_meta($options, $user)
    {
    }
    /**
     * Avoids that the post template overwrites our duplicated content.
     *
     * @since 3.2
     *
     * @param array                   $editor_settings      Default editor settings.
     * @param WP_Block_Editor_Context $block_editor_context The current block editor context.
     * @return array
     */
    public function remove_template($editor_settings, $block_editor_context)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Abstract class for features needing a button in the language metabox.
 *
 * @since 2.1
 */
abstract class PLL_Metabox_Button
{
    /**
     * Id used for the css class.
     *
     * @var string
     */
    public $id;
    /**
     * Arguments used to create the button.
     *
     * @var array
     */
    public $args;
    /**
     * Constructor
     *
     * @since 2.1
     *
     * Parameters must be provided by the child class.
     *
     * @param string $id   Id used for the css class.
     * @param array  $args {
     *  Arguments used to create the button.
     *
     *  @type string $position   Defines the position of the button. Accepted values are
     *                           'before_post_translations' and 'before_post_translation_{$language_code}'.
     *  @type string $activate   Text displayed to activate the button.
     *  @type string $deactivate Text displayed to deactivate the button.
     *  @type string $class      Classes defining the icon to display.
     *  @type string $before     Optional html markup placed before the button.
     *  @type string $after      Optional html markup placed after the button.
     * }
     */
    public function __construct($id, $args)
    {
    }
    /**
     * Tells whether the button is active or not.
     *
     * @since 2.1
     *
     * @return bool
     */
    public abstract function is_active();
    /**
     * Saves the button state.
     *
     * @since 2.1
     *
     * @param string $post_type Current post type.
     * @param bool   $active    New requested button state.
     * @return bool Whether the new button state is accepted or not.
     */
    protected function toggle_option($post_type, $active)
    {
    }
    /**
     * Displays the button.
     *
     * @since 2.1
     *
     * @param string $post_type The current post type.
     * @return void
     */
    public function add_icon($post_type)
    {
    }
    /**
     * Ajax response to a clic on the button.
     *
     * @since 2.1
     *
     * @return void
     */
    public function toggle()
    {
    }
    /**
     * Get the text for the button title depending on its state.
     *
     * @since 2.1
     *
     * @param bool $is_active Whether the button is already active or not.
     * @return string
     */
    protected function get_text($is_active)
    {
    }
    /**
     * Returns the html to display the button.
     *
     * @since 2.1
     *
     * @param bool $is_active Whether the button is already active or not.
     * @return string
     */
    protected function get_html($is_active)
    {
    }
    /**
     * Enqueues script and style.
     *
     * @since 2.8
     *
     * @return void
     */
    public function admin_enqueue_scripts()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Copy the title, content and excerpt from the source when creating a new post translation
 * in the classic editor.
 *
 * @since 1.9
 */
class PLL_Duplicate extends \PLL_Metabox_Button
{
    use \PLL_Duplicate_Trait;
    /**
     * Constructor
     *
     * @since 1.9
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
}
/**
 * Abstract class for FSE modules.
 *
 * @since 3.2
 */
abstract class PLL_FSE_Abstract_Module
{
    /**
     * Instance of `PLL_Model`.
     *
     * @var PLL_Model
     */
    protected $model;
    /**
     * Plugin's options.
     *
     * @var array
     */
    protected $options;
    /**
     * Constructor.
     *
     * @since 3.2
     *
     * @param  PLL_Base $polylang Instance of the main Polylang object, passed by reference.
     * @return void
     */
    public function __construct(\PLL_Base &$polylang)
    {
    }
    /**
     * Returns the list of the slugs of enabled languages.
     *
     * @since 1.0
     *
     * @return string[]
     */
    protected function get_languages_slugs()
    {
    }
}
/**
 * An abstract class allowing to bulk edit template slugs.
 *
 * @since 3.2
 */
abstract class PLL_FSE_Abstract_Bulk_Edit_Template_Slugs_Module extends \PLL_FSE_Abstract_Module
{
    /**
     * Adds a language suffix to the slugs belonging to templates in the given language.
     *
     * @since 3.2
     *
     * @param PLL_Language $lang          The language to use to find the templates to suffix.
     * @param string|null  $new_lang_slug Optionnal. The new lang slug to use. Default is `$lang`'s slug.
     * @return int Number of posts updated.
     */
    protected function update_language_suffix_in_post_names(\PLL_Language $lang, $new_lang_slug = \null)
    {
    }
    /**
     * Removes the language suffix from the slugs belonging to templates in the given language.
     *
     * @since 3.2
     *
     * @param PLL_Language $lang The language to use to find the templates to unsuffix.
     * @return int Number of posts updated.
     */
    protected function remove_language_suffix_from_post_names(\PLL_Language $lang)
    {
    }
    /**
     * Returns a list of template posts associated with the given language.
     *
     * @since 3.2
     *
     * @param PLL_Language $lang The language.
     * @return stdClass[] {
     *     An array of objects with the following properties.
     *
     *     @type int    $ID        A post ID.
     *     @type string $post_name A post slug.
     * }
     */
    protected function get_template_posts_from_language(\PLL_Language $lang)
    {
    }
    /**
     * Updates the slug of the given post.
     *
     * @since 3.2
     *
     * @global wpdb $wpdb
     *
     * @param stdClass[] $posts {
     *     An array of objects with the following properties.
     *
     *     @type int    $ID        A post ID.
     *     @type string $post_name The new post slug.
     * }
     * @return int Number of posts updated.
     */
    protected function update_template_post_slugs(array $posts)
    {
    }
}
/**
 * Interface to use for modules.
 *
 * @since 3.2
 */
interface PLL_Module_Interface
{
    /**
     * Returns the module's name.
     *
     * @since 3.2
     *
     * @return string
     */
    public static function get_name();
    /**
     * Module init.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init();
}
/**
 * Class that changes the template slugs when the default language changes.
 *
 * @since 3.2
 */
class PLL_FSE_Default_Language_Change extends \PLL_FSE_Abstract_Bulk_Edit_Template_Slugs_Module implements \PLL_Module_Interface
{
    /**
     * Returns the module's name.
     *
     * @since 3.2
     *
     * @return string
     */
    public static function get_name()
    {
    }
    /**
     * Plugin init.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Suffixes or unsuffixes the template slugs when changing the default language.
     * More precisely:
     * - Adds a language suffix to the slugs belonging to templates in the old default language.
     * - Removes the language suffix from the slugs belonging to templates in the new default language.
     *
     * @since 3.2
     *
     * @param  string $new_def_lang_slug Slug of the new default language.
     *                                   At this point, the default language has not been changed in PLL's settings yet.
     * @return void
     */
    public function change_template_slugs($new_def_lang_slug)
    {
    }
}
/**
 * A class that filters blocks in a Site Editor context.
 *
 * @since 3.2.2
 */
class PLL_FSE_Filter_Block_Types extends \PLL_FSE_Abstract_Module implements \PLL_Module_Interface
{
    /**
     * Returns the module's name.
     *
     * @since 3.2.2
     *
     * @return string
     */
    public static function get_name()
    {
    }
    /**
     * Sub-module init.
     *
     * @since 3.2.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Filters out template part instances from block `core/template-part` variations.
     * This avoids to display all translations of templates parts in the block selection list,
     * otherwhise the confusing UI could allow a user to insert a template part in a wrong language.
     *
     * @since 3.2.2
     *
     * @param array $settings Array of determined settings for registering a block type.
     * @param array $metadata Metadata provided for registering a block type..
     * @return array Filtered array of settings with removed template part instances variations.
     */
    public function remove_template_part_instance_variations($settings, $metadata)
    {
    }
}
/**
 * Class that changes the template slugs when a language slug changes.
 *
 * @since 3.2
 */
class PLL_FSE_Language_Slug_Change extends \PLL_FSE_Abstract_Bulk_Edit_Template_Slugs_Module implements \PLL_Module_Interface
{
    /**
     * Returns the module's name.
     *
     * @since 3.2
     *
     * @return string
     */
    public static function get_name()
    {
    }
    /**
     * Sub-module init.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Modifies template slugs when a language slug changes.
     *
     * @since 3.2
     *
     * @param array        $args {
     *     Arguments used to modify the language. @see PLL_Admin_Model::update_language().
     *
     *     @type string $name           Language name (used only for display).
     *     @type string $slug           Language code (ideally 2-letters ISO 639-1 language code).
     *     @type string $locale         WordPress locale.
     *     @type int    $rtl            1 if rtl language, 0 otherwise.
     *     @type int    $term_group     Language order when displayed.
     *     @type string $no_default_cat Optional, if set, no default category has been created for this language.
     *     @type string $flag           Optional, country code, @see flags.php.
     * }
     * @param PLL_Language $lang Previous value of the language beeing edited.
     * @return void
     */
    public function change_template_slugs($args, $lang)
    {
    }
}
/**
 * Class that defines PLL's current language in the site editor's screen.
 *
 * @since 3.2
 */
class PLL_FSE_Language extends \PLL_FSE_Abstract_Module implements \PLL_Module_Interface
{
    /**
     * Returns the module's name.
     *
     * @since 3.2
     *
     * @return string
     */
    public static function get_name()
    {
    }
    /**
     * Sub-module init.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Defines the current language in the site editor.
     *
     * @since 3.2
     *
     * @param  PLL_Language|false|null $curlang  Instance of the current language.
     * @param  PLL_Admin_Base          $polylang Instance of the main Polylang's object.
     * @return PLL_Language|false|null
     */
    public function define_current_language_in_site_editor($curlang, $polylang)
    {
    }
}
/**
 * A class that adds the template (part) post type to the list of translatable ones.
 *
 * @since 3.2
 */
class PLL_FSE_Post_Types implements \PLL_Module_Interface
{
    /**
     * Returns the module's name.
     *
     * @since 3.2
     *
     * @return string
     */
    public static function get_name()
    {
    }
    /**
     * Sub-module init.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Adds the template part post type to the list of translated post types.
     *
     * @since 3.2
     *
     * @param string[] $post_types  List of post type names.
     * @param bool     $is_settings True when displaying the list of custom post types in Polylang settings.
     * @return string[]
     */
    public function add_post_types($post_types = array(), $is_settings = \false)
    {
    }
    /**
     * Removes the translated template post type from the post types handled in `PLL_REST_Post`.
     *
     * @since 3.2
     *
     * @param array[] $post_types An array of arrays with post types as keys and options as values.
     * @return array[] The post types without the translated template post type.
     */
    public function remove_post_types_from_post_rest_api($post_types)
    {
    }
}
/**
 * A class that filters the queries to retrieve the templates in the right language.
 *
 * @since 3.2
 */
class PLL_FSE_Query_Filters extends \PLL_FSE_Abstract_Module implements \PLL_Module_Interface
{
    /**
     * Returns the module's name.
     *
     * @since 3.2
     *
     * @return string
     */
    public static function get_name()
    {
    }
    /**
     * Sub-module init.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Filters the query to allow the use of translated template parts.
     *
     * @since 3.2
     *
     * @param  WP_Query $query Reference to the WP_Query object.
     * @return void
     */
    public function translate_template_query(&$query)
    {
    }
}
/**
 * A class that re-assigns to templates a language that has just been re-created.
 * When a language is deleted, the language suffix is not removed from the template slugs (see
 * `PLL_FSE_Template_Slug_Sync->modify_template_slug_on_lang_assigning()`). When this language is re-created later
 * (deleted by mistake?), it is re-assigned to the templates (as long as it uses the same slug than before its
 * deletion).
 *
 * @since 3.2
 */
class PLL_FSE_Recreate_Language extends \PLL_FSE_Abstract_Module implements \PLL_Module_Interface
{
    /**
     * Instance of `PLL_Admin_Model`.
     *
     * @var PLL_Admin_Model
     */
    protected $model;
    /**
     * Returns the module's name.
     *
     * @since 3.2
     *
     * @return string
     */
    public static function get_name()
    {
    }
    /**
     * Sub-module init.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Re-assigns a language to templates upon its re-creation.
     *
     * @since  3.2
     * @global wpdb $wpdb
     *
     * @param array $args {
     *     Arguments used to create the language.
     *
     *     @type string $name           Language name (used only for display).
     *     @type string $slug           Language code (ideally 2-letters ISO 639-1 language code).
     *     @type string $locale         WordPress locale.
     *     @type int    $rtl            1 if rtl language, 0 otherwise.
     *     @type int    $term_group     Language order when displayed.
     *     @type string $no_default_cat Optional, if set, no default category will be created for this language.
     *     @type string $flag           Optional, country code, @see flags.php.
     * }
     * @return void
     *
     * @phpstan-param array{name:string,slug:string,locale:string,rtl:int<0,1>,term_group:positive-int,no_default_cat?:string,flag?:string} $args
     */
    public function reassign_language($args)
    {
    }
}
/**
 * Class handling the translation of template content during its creation.
 *
 * @since 3.2
 */
class PLL_FSE_REST_Duplicate_Template extends \PLL_FSE_Abstract_Module implements \PLL_Module_Interface
{
    /**
     * Instance of `PLL_FSE_Template_Model`.
     *
     * @var PLL_FSE_Template_Model
     */
    protected $template_model;
    /**
     * Constructor.
     *
     * @since 3.2
     *
     * @param PLL_Base $polylang Instance of the main Polylang object, passed by reference.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Returns the module's name.
     *
     * @since 3.2
     *
     * @return string
     */
    public static function get_name()
    {
    }
    /**
     * Sub-module init.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Translates template part content on translation creation.
     *
     * @since 3.2
     *
     * @param WP_Post         $template The inserted or updated template part.
     * @param WP_REST_Request $request  The current request.
     * @param bool            $creating True when creating a template part, false when updating.
     * @return void
     */
    public function translate_content($template, $request, $creating)
    {
    }
    /**
     * Recursively translate blocks.
     *
     * @since 3.2
     *
     * @param array[] $blocks {
     *     An array of blocks arrays.
     *
     *     @type string $blockName    Name of block.
     *     @type array  $attrs        List of block attributes.
     *     @type array  $innerBlocks  List of inner blocks.
     *     @type string $innerHTML    Resultant HTML from inside block comment delimiters after removing inner blocks.
     *     @type array  $innerContent List of string fragments and null markers where inner blocks were found.
     * }
     * @param string  $language Slug language of the target post.
     * @return array Array of translated blocks.
     */
    public function translate_blocks($blocks, $language)
    {
    }
    /**
     * Returns the slug of the template part translation.
     * Creates the translation if it does not exist.
     *
     * @since 3.2
     *
     * @param string[] $attrs    {
     *     string $slug  Template part slug.
     *     string $theme Template part theme slug.
     * }
     * @param string   $language Slug language of the target post.
     * @return string Slug of the translated template part.
     */
    public function translate_template_part($attrs, $language)
    {
    }
}
/**
 * A class that makes sure that a template in default language exists when a template in non-default-language is
 * created.
 *
 * @since 3.2
 */
class PLL_FSE_REST_Enforce_Default_Template extends \PLL_FSE_Abstract_Module implements \PLL_Module_Interface
{
    /**
     * Instance of `PLL_FSE_Template_Model`.
     *
     * @var PLL_FSE_Template_Model
     */
    protected $template_model;
    /**
     * Constructor.
     *
     * @since 3.2
     *
     * @param  PLL_Base $polylang Instance of the main Polylang object, passed by reference.
     * @return void
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Returns the module's name.
     *
     * @since 3.2
     *
     * @return string
     */
    public static function get_name()
    {
    }
    /**
     * Sub-module init.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Duplicates the template in default language. Either by creating it or updating its content.
     * As WordPress creates empty template right away, we have to look after the first insertion of the content
     * to duplicate it into the default language.
     *
     * @since 3.2
     *
     * @param  WP_Post         $post     Inserted or updated post object.
     * @param  WP_REST_Request $request  Request object.
     * @param  bool            $creating True when creating a post, false when updating.
     * @return void
     */
    public function maybe_duplicate_template($post, $request, $creating)
    {
    }
    /**
     * Creates a template in default language.
     *
     * @since 3.2
     *
     * @param  WP_Post $post Inserted post object.
     * @return void
     */
    protected function maybe_create_default_template($post)
    {
    }
    /**
     * Updates default language template content by duplicating from a secondary language.
     *
     * @since 3.2
     *
     * @param  WP_Post      $post Updated post object.
     * @param  PLL_Language $lang The requested language object.
     * @return void
     */
    protected function maybe_update_default_template_content($post, $lang)
    {
    }
}
/**
 * A class to work with REST routes for templates.
 *
 * @since 3.2
 */
class PLL_FSE_REST_Route
{
    /**
     * Constructor.
     *
     * @since 3.2
     *
     * @param  string $route A REST route.
     * @return void
     */
    public function __construct($route)
    {
    }
    /**
     * Returns the route.
     *
     * @since 3.2
     *
     * @return string
     */
    public function get()
    {
    }
    /**
     * Tells if the REST route is a template's route.
     *
     * @since 3.2
     *
     * @return bool
     */
    public function is_template_route()
    {
    }
    /**
     * Returns the template post ID.
     *
     * @since 3.2
     *
     * @return int|null The template post ID, null if not found in the route.
     */
    public function get_post_id()
    {
    }
    /**
     * Returns the template post type.
     *
     * @since 3.2
     *
     * @return string|null The template post type, null if the route doesn't match a template route.
     */
    public function get_post_type()
    {
    }
    /**
     * Returns the REST base related to the template post type.
     *
     * @since 3.2
     *
     * @return string|null The REST base, null if the route doesn't match a template route.
     */
    public function get_rest_base()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Abstract class to allow to filter posts, terms or comments in the REST API
 *
 * @since 2.6.9
 */
abstract class PLL_REST_Filtered_Object
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Object type, typically 'post' or 'term', defined by the child class
     *
     * @var string
     */
    protected $type;
    /**
     * Array of arrays with post types or taxonomies as keys and options as values
     * See constructor
     *
     * @var array
     */
    protected $content_types;
    /**
     * REST request stored for internal usage.
     *
     * @var WP_REST_Request|null
     */
    protected $request;
    /**
     * Constructor
     *
     * @since 2.6.9
     *
     * @param object $rest_api      Instance of PLL_REST_API
     * @param array  $content_types Array of arrays with content type as keys and options as values
     *                              The possible options are:
     *                              filters:      whether to filter queries, defaults to true
     */
    public function __construct(&$rest_api, $content_types)
    {
    }
    /**
     * Get the rest field type for a content type
     *
     * @since 2.3.11
     *
     * @param string $type Post type or taxonomy name
     * @return string REST API field type
     */
    protected function get_rest_field_type($type)
    {
    }
    /**
     * Stores the request to use, for example, parameters when filtering queries.
     *
     * @since 3.2
     *
     * @param mixed           $null    Not used, generally null.
     * @param WP_REST_Request $request Request used to generate the response.
     * @return mixed
     */
    public function save_request($null, $request)
    {
    }
    /**
     * Exposes the 'lang' param for posts and terms
     *
     * @since 2.2
     *
     * @param array $query_params JSON Schema-formatted collection parameters.
     * @return array
     */
    public function collection_params($query_params)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Abstract class to expose posts (or terms) language and translations in the REST API
 *
 * @since 2.2
 */
abstract class PLL_REST_Translated_Object extends \PLL_REST_Filtered_Object
{
    /**
     * @var PLL_Admin_Links
     */
    public $links;
    /**
     * How is named the object id, typically 'ID' for posts and 'term_id' for terms.
     * Mainly used in the object to save it in the database.
     * Must be defined by the child class.
     *
     * @since 3.2 Property renamed from id.
     *
     * @var string
     */
    protected $setter_id_name;
    /**
     * How is named the object id in the returned array from the REST API, typically 'id' for posts and terms and 'wp_id' for template and template parts.
     * Must be defined by the child class if different of the default 'id' value.
     *
     * @since 3.2
     *
     * @var string
     */
    protected $getter_id_name = 'id';
    /**
     * Constructor
     *
     * @since 2.2
     * @since 2.2.1 $content_types is an array of arrays
     * @since 2.6   The first parameter is an instance of PLL_REST_API instead of PLL_Model
     *
     * @param object $rest_api      Instance of PLL_REST_API
     * @param array  $content_types Array of arrays with post types or taxonomies as keys and options as values
     *                              The possible options are:
     *                              filters:      whether to filter queries, defaults to true
     *                              lang:         whether to return the language in the response, defaults to true
     *                              translations: whether to return the translations in the response, defaults to true
     */
    public function __construct(&$rest_api, $content_types)
    {
    }
    /**
     * Returns the object language.
     *
     * @since 2.2
     *
     * @param array $object Post or Term array.
     * @return string|false Language slug. False if no language is assigned to the object.
     */
    public function get_language($object)
    {
    }
    /**
     * Sets the object language
     *
     * @since 2.2
     *
     * @param string $lang   Language code
     * @param object $object Instance of WP_Post or WP_Term
     * @return bool
     */
    public function set_language($lang, $object)
    {
    }
    /**
     * Returns the object translations
     *
     * @since 2.2
     *
     * @param array $object Post or Term array
     * @return array
     */
    public function get_translations($object)
    {
    }
    /**
     * Save translations
     *
     * @since 2.2
     *
     * @param array  $translations Array of translations with language codes as keys and object ids as values
     * @param object $object       Instance of WP_Post or WP_Term
     * @return bool
     */
    public function save_translations($translations, $object)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Expose terms language and translations in the REST API
 *
 * @since 2.2
 */
class PLL_REST_Post extends \PLL_REST_Translated_Object
{
    /**
     * @var PLL_Filters_Sanitization
     */
    public $filters_sanitization;
    /**
     * Constructor
     *
     * @since 2.2
     *
     * @param PLL_REST_API $rest_api      Instance of PLL_REST_API
     * @param array        $content_types Array of arrays with post types as keys and options as values
     */
    public function __construct(&$rest_api, $content_types)
    {
    }
    /**
     * Filters the query per language according to the 'lang' parameter
     *
     * @since 2.6.9
     *
     * @param WP_Query $query WP_Query object.
     * @return void
     */
    public function parse_query($query)
    {
    }
    /**
     * Whether or not the given query is filterable by language.
     *
     * @since 3.2
     *
     * @param WP_Query $query The query to check.
     * @return boolean
     */
    protected function can_filter_query($query)
    {
    }
    /**
     * Allows to share the post slug across languages.
     * Modifies the REST response accordingly.
     *
     * @since 2.3
     *
     * @param WP_REST_Response $response The response object.
     * @param WP_Post          $post     Post object.
     * @param WP_REST_Request  $request  Request object.
     * @return WP_REST_Response
     */
    public function prepare_response($response, $post, $request)
    {
    }
    /**
     * Sets language and saves translations during REST requests.
     *
     * @since 3.4
     *
     * @param mixed           $result  Response to replace the requested version with.
     * @param WP_REST_Server  $server  Server instance.
     * @param WP_REST_Request $request Request used to generate the response.
     * @return mixed
     */
    public function save_language_and_translations($result, $server, $request)
    {
    }
    /**
     * Registers the `translations_table` REST field only for block editor requests.
     *
     * @since 3.4
     *
     * @param mixed           $result  Response to replace the requested version with.
     * @param WP_REST_Server  $server  Server instance.
     * @param WP_REST_Request $request Request used to generate the response.
     * @return mixed
     */
    public function register_rest_translation_table_field($result, $server, $request)
    {
    }
    /**
     * Initialize sanitization filters with the correct language locale.
     *
     * @see WP_REST_Server::dispatch()
     *
     * @since 2.9
     *
     * @param mixed           $result  Response to replace the requested version with. Can be anything
     *                                 a normal endpoint can return, or null to not hijack the request.
     * @param WP_REST_Server  $server  Server instance.
     * @param WP_REST_Request $request Request used to generate the response.
     * @return mixed
     */
    public function set_filters_sanitization($result, $server, $request)
    {
    }
    /**
     * Check if the request is a REST API post type request for saving
     *
     * @since 2.7.3
     * @since 3.4 $post_id parameter removed.
     *
     * @param WP_REST_Request $request Request used to generate the response.
     * @return bool True if the request saves a post.
     */
    public function is_save_post_request($request)
    {
    }
    /**
     * Returns the post translations table
     *
     * @since 2.6
     *
     * @param array $object Post array
     * @return array
     */
    public function get_translations_table($object)
    {
    }
    /**
     * Generates links, language information and translated posts for a given language into a translation table.
     *
     * @since 3.2
     *
     * @param int          $id               The id of the existing post to get datas for the translations table element.
     * @param int          $tr_id            The id of the translated post for the given language if exists.
     * @param PLL_Language $language         The given language object.
     * @return array The translation data of the given language.
     */
    public function get_translation_table_data($id, $tr_id, $language)
    {
    }
    /**
     * Returns the post id of the post that we come from to create a translation.
     *
     * @since 3.2
     *
     * @return int The post id of the original post.
     */
    public function get_from_post_id()
    {
    }
    /**
     * Assigns the language to the edited media.
     *
     * When a media is edited in the block image, a new media is created and we need to set the language from the original one.
     *
     * @see https://make.wordpress.org/core/2020/07/20/editing-images-in-the-block-editor/ the new WordPress 5.5 feature: Editing Images in the Block Editor.
     *
     * @since 2.8
     *
     * @param int $post_id Post id.
     * @return void
     */
    public function set_media_language($post_id)
    {
    }
}
/**
 * Expose terms language and translations in the REST API for templates in particular by filtering the queries.
 *
 * @since 3.2
 */
class PLL_FSE_REST_Template extends \PLL_REST_Post
{
    /**
     * Value to indicate the template add link can be used.
     *
     * @var string
     */
    const CAN_CREATE_TEMPLATE = 'CAN_CREATE_TEMPLATE';
    /**
     * Value to indicate the template delete link can be used.
     *
     * @var string
     */
    const CAN_DELETE_TEMPLATE = 'CAN_DELETE_TEMPLATE';
    /**
     * Constructor
     *
     * @since 3.2
     *
     * @param PLL_REST_API $rest_api      Instance of PLL_REST_API.
     * @param string[]     $content_types Array with post types as keys and values.
     * @return void
     */
    public function __construct(\PLL_REST_API &$rest_api, array $content_types)
    {
    }
    /**
     * Adds the corresponding hooks.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Returns the post id of the post that we come from to create a translation.
     *
     * Override the parent method because template translation is done with a REST API call instead of post-new.php like for the other post types.
     *
     * @since 3.2
     *
     * @return int The post id of the original post.
     */
    public function get_from_post_id()
    {
    }
    /**
     * Overloads parent's method to add the delete link and default language into a translation table data for template post types.
     * See PLL_REST_Post::generate_translation_data.
     *
     * @since 3.2
     *
     * @param int          $id               The id of the existing post to get datas for the translations table element.
     * @param int          $tr_id            The id of the translated post for the given language if exists.
     * @param PLL_Language $language         The given language object.
     * @return array The translation data of the given language.
     */
    public function get_translation_table_data($id, $tr_id, $language)
    {
    }
    /**
     * Overrides the edit link from WordPress for template parts.
     * By default it is "https://example.com/wp-admin/post.php?post=X&action=edit", which is not pointing to the Site Editor.
     * Returns "https://example.com/wp-admin/site-editor.php?postId=theme-slug//template-slug&postType=wp_template_part" instead.
     *
     * @since 3.2
     *
     * @param string $link    The edit link.
     * @param int    $post_id Post ID.
     * @param string $context The link context. If set to 'display' then ampersands
     *                        are encoded.
     * @return string The overriden edit link.
     */
    public function override_edit_post_link($link, $post_id, $context)
    {
    }
    /**
     * Returns the slug of the language assigned to the given post.
     * Overrides the parent method.
     *
     * @since 3.2
     *
     * @param array $object Post array.
     * @return string|false Template's language slug. Default language slug if no language
     *                      is assigned to the template yet. False on failure.
     */
    public function get_language($object)
    {
    }
    /**
     * Filters templates by language.
     *
     * @since 3.2
     *
     * @param WP_Query $query WP_Query object.
     * @return void
     */
    public function parse_query($query)
    {
    }
    /**
     * Returns the current post type from the REST route
     *
     * @since 3.2
     *
     * @param mixed           $result  Response to replace the requested version with. Can be anything a normal
     *                                 endpoint can return, or null to not hijack the request.
     * @param WP_REST_Request $request Request used to generate the response.
     * @return mixed                   Unchanged value.
     */
    public function get_current_post_type_from_route($result, $request)
    {
    }
    /**
     * Filters template part list according to the REST request parameters.
     * Filtering by language is already done on a `WP_Query` level, see {`self::parse_query()`}.
     *
     * @since 3.3.2
     *
     * @param WP_Block_Template[] $templates     Array of found block templates.
     * @param array               $query         Arguments to retrieve templates.
     * @param string              $template_type 'wp_template' or 'wp_template_part'.
     * @return WP_Block_Template[] Array of filtered block templates.
     */
    public function filter_template_part_list($templates, $query, $template_type)
    {
    }
}
/**
 * Class that regroups actions focused on template deletions.
 *
 * @since 3.2
 */
class PLL_FSE_Template_Deletion extends \PLL_FSE_Abstract_Module implements \PLL_Module_Interface
{
    /**
     * Returns the module's name.
     *
     * @since 3.2
     *
     * @return string
     */
    public static function get_name()
    {
    }
    /**
     * Sub-module init.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * When a template in the default language is deleted, also delete its translations.
     *
     * @since 3.2
     *
     * @param  int     $post_id Post ID.
     * @param  WP_Post $post    Post object.
     * @return void
     */
    public function delete_translation_posts($post_id, $post)
    {
    }
}
/**
 * Model for templates.
 *
 * @since 3.2
 */
class PLL_FSE_Template_Model extends \PLL_FSE_Abstract_Module implements \PLL_Module_Interface
{
    /**
     * Used to translate template content on the fly.
     *
     * @var PLL_Sync_Content
     */
    protected $sync_content;
    /**
     * Constructor.
     *
     * @since 3.2
     *
     * @param PLL_Base $polylang Instance of the main Polylang object, passed by reference.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Returns the module's name.
     *
     * @since 3.2
     *
     * @return string
     */
    public static function get_name()
    {
    }
    /**
     * Sub-module init.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Creates a template translation.
     *
     * @since 3.2
     *
     * @param  WP_Post      $post      Instance of the source template.
     * @param  PLL_Language $language  Instance of the new translation language.
     * @return int                     ID of the new template. 0 on failure.
     */
    public function create_template_translation(\WP_Post $post, \PLL_Language $language)
    {
    }
    /**
     * Translates the content of the given template.
     *
     * @since 3.2
     *
     * @param  WP_Post      $target_template  The template to translate.
     * @param  int          $from_template_id The source template post ID.
     * @param  PLL_Language $target_language  The target language object.
     * @return int          The post ID on success. The value 0 on failure.
     */
    public function translate_template_content(\WP_Post $target_template, $from_template_id, \PLL_Language $target_language)
    {
    }
}
/**
 * A class that modifies the template slugs according to their language, and sync them among their translations.
 * - The slug of a template in the default language in not suffixed.
 * - The slug of a template in a non-default language is suffixed with `___{language-code}` (see the class
 *   `PLL_FSE_Template_Slug`).
 * - The slug of the template in the default language is used as "base slug" (the part before `___{language-code}`) for
 *   the templates in non-default languages within a translation group. This part is synchronized among the group.
 *
 * TLDR; template slugs are suffixed and synchronized:
 * - Default language: `header`.
 * - Non-default languages: `header___es`, `header___it`, etc.
 *
 * If the slug of a template in the default language changes, the slug of the template in other languages are modified
 * accordingly.
 * If the slug of a template in a non-default language changes, it is modified (or reverted) to fit the slug of the
 * template in the default language.
 *
 * @since 3.2
 */
class PLL_FSE_Template_Slug_Sync extends \PLL_FSE_Abstract_Module implements \PLL_Module_Interface
{
    /**
     * Returns the module's name.
     *
     * @since 3.2
     *
     * @return string
     */
    public static function get_name()
    {
    }
    /**
     * Sub-module init.
     *
     * @since 3.2
     *
     * @return self
     */
    public function init()
    {
    }
    /**
     * Modifies the template's slug when the template's language changes.
     *
     * @since 3.2
     *
     * @see wp_set_object_terms()
     *
     * @param  int            $object_id Object ID.
     * @param  (int|string)[] $terms     An array of object term IDs or slugs, provided as argument to `wp_set_object_terms()`.
     * @param  int[]          $tt_ids    An array of term taxonomy IDs.
     * @param  string         $taxonomy  Taxonomy slug.
     * @return void
     */
    public function modify_template_slug_on_lang_assigning($object_id, $terms, $tt_ids, $taxonomy)
    {
    }
    /**
     * Synchronizes the template slugs among translations after translations have been set or updated.
     *
     * @since 3.2
     *
     * @param int $term_id Term ID.
     * @return void
     */
    public function sync_template_slugs_on_translations_save($term_id)
    {
    }
    /**
     * Modifies the template's slug after `wp_filter_wp_template_unique_post_slug()` for existing templates.
     *
     * @since 3.2
     *
     * @param string $override_slug The filtered value of the slug (starts as `null` from `apply_filters()`).
     * @param string $desired_slug  The desired slug (post_name).
     * @param int    $post_ID       Post ID.
     * @param string $post_status   Post status.
     * @param string $post_type     Post type.
     * @return string The original or desired slug.
     */
    public function unique_template_slug($override_slug, $desired_slug, $post_ID, $post_status, $post_type)
    {
    }
    /**
     * Synchronizes template slugs among translations after a template update.
     *
     * @since 3.2
     *
     * @param int     $post_ID       Post ID.
     * @param WP_Post $template_post Post object after being updated.
     * @return void
     */
    public function sync_template_slugs_on_post_update($post_ID, $template_post)
    {
    }
}
/**
 * A class to work with template slugs (and their language suffix).
 *
 * @since 3.2
 */
class PLL_FSE_Template_Slug
{
    /**
     * Separator used for the language suffix.
     *
     * @var string
     */
    const SEPARATOR = '___';
    /**
     * Constructor.
     *
     * @since 3.2
     *
     * @param string   $slug       A template slug.
     * @param string[] $lang_slugs List of language slugs to use.
     * @return void
     */
    public function __construct($slug, array $lang_slugs = array())
    {
    }
    /**
     * Returns the template slug.
     *
     * @since 3.2
     *
     * @return string
     */
    public function get()
    {
    }
    /**
     * Get the template slug without its language suffix.
     *
     * @since 3.2
     *
     * @return string
     */
    public function get_template_slug()
    {
    }
    /**
     * Get the language slug from the template slug.
     *
     * @since 3.2
     *
     * @return string
     */
    public function get_language()
    {
    }
    /**
     * Tells if the template slug has a language suffix already.
     *
     * @since 3.2
     *
     * @return bool
     */
    public function has_language()
    {
    }
    /**
     * Adds a language suffix to the template slug.
     *
     * @since 3.2
     *
     * @param string $language_slug A language slug.
     * @return string The template slug with its new language suffix.
     */
    public function update_language($language_slug)
    {
    }
    /**
     * Removes the language suffix from a shared slug.
     *
     * @since 3.2
     *
     * @return string The template slug without the language suffix.
     */
    public function remove_language()
    {
    }
}
/**
 * Main class that handles the translation of the templates in full site editing.
 *
 * @since 3.2
 */
class PLL_FSE_Tools
{
    /**
     * Returns the name of the template post types that are translated by Polylang.
     *
     * @since 3.2
     *
     * @return string[] Array keys and array values are identical.
     */
    public static function get_post_types()
    {
    }
    /**
     * Tells if the given post type is a template post type that is translated by Polylang.
     *
     * @since 3.2
     *
     * @param string $post_type A post type name.
     * @return bool
     */
    public static function is_template_post_type($post_type)
    {
    }
    /**
     * Tells if the query is a template request that is translated by Polylang.
     *
     * @since 3.2
     *
     * @param WP_Query $query Instance of `WP_Query`.
     * @return bool
     */
    public static function is_template_query(\WP_Query $query)
    {
    }
    /**
     * Returns the template post object currently being edited.
     *
     * @since 3.2
     *
     * @global WP_Post $post
     *
     * @return WP_Post|null
     */
    public static function get_template_post()
    {
    }
    /**
     * Returns a post associated with the given template ID from the database.
     *
     * @since 3.2
     *
     * @param string $template_id   Template ID, in the form of `{themeSlug}//{templateSlug}`.
     * @param string $template_type Template type, either 'wp_template' or 'wp_template_part'.
     * @return WP_Post|null
     */
    public static function get_post_from_template_id($template_id, $template_type)
    {
    }
    /**
     * Converts a template ID into an array containing the theme name and the template name.
     *
     * @since 3.2
     *
     * @param string $template_id Template ID, in the form of `{themeSlug}//{templateSlug}`.
     * @return string[] {
     *     An array containing the theme name and the template name. An empty array if the template ID is invalid.
     *
     *     @type string $theme The theme name (slug).
     *     @type string $name  The template name (slug).
     * }
     */
    public static function get_template_id_components($template_id)
    {
    }
    /**
     * Returns a template post from the database.
     *
     * @since 3.2
     *
     * @param string $post_name  Post name (slug).
     * @param string $theme_name Theme name (slug).
     * @param string $post_type  Post type, either 'wp_template' or 'wp_template_part'.
     * @return WP_Post|null
     */
    public static function query_template_post($post_name, $theme_name, $post_type)
    {
    }
    /**
     * Tells if we're in the site editor.
     *
     * @since 3.2
     *
     * @global string $pagenow
     *
     * @return bool
     */
    public static function is_site_editor()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_DOM_Document
 *
 * Extends the PHP's {@see DOMDocument} to include safe instantiation through its factory function.
 * Adds internal error management for each instance.
 *
 * @since 3.1
 */
class PLL_DOM_Document extends \DOMDocument
{
    /**
     * Creates a PLL_DOM_Document instance from a XML string.
     *
     * @since 3.1
     * @since 3.3 Added parameter $flags.
     *
     * @param string $xml      A XML valid string.
     * @param string $version  Optional. XML version to use. Default is '1.0'.
     * @param string $encoding Optional. Encoding to use. Default is 'UTF-8'.
     * @param int    $flags    Optional. A series of libxml flags to parameterize the loading. Default is 0.
     *                         {@link https://www.php.net/manual/en/libxml.constants.php}.
     * @return PLL_DOM_Document
     */
    public static function from_xml($xml, $version = '1.0', $encoding = 'UTF-8', $flags = 0)
    {
    }
    /**
     * Creates a PLL_DOM_Document instance from a HTML string.
     *
     * @since 3.1
     * @since 3.3 Added parameters $version, $encoding, and $flags.
     * @since 3.3 Doesn't format the output anymore.
     * @since 3.3 Doesn't add the `<html>` and `<body>` tags by default anymore.
     *
     * Doctype declaration is disallowed for security reasons (XEE vulnerability).
     *
     * @param string $html     A HTML valid string.
     * @param string $version  Optional. XML version to use. Default is '1.0'.
     * @param string $encoding Optional. Encoding to use. Default is 'UTF-8'.
     * @param int    $flags    Optional. A series of libxml flags to parameterize the loading.
     *                         Default is `LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD`.
     *                         {@link https://www.php.net/manual/en/libxml.constants.php}.
     * @return PLL_DOM_Document
     */
    public static function from_html($html, $version = '1.0', $encoding = 'UTF-8', $flags = 0)
    {
    }
    /**
     * Verifies that the document contains only nodes of allowed types.
     *
     * @since 3.1
     *
     * @see https://www.php.net/manual/en/dom.constants.php.
     *
     * @return bool
     */
    public function contains_not_allowed_node()
    {
    }
    /**
     * Returns the first level HTML nodes of the document.
     *
     * @since 3.1
     *
     * Note: DOMDocument automatically wraps the loaded nodes in a <body> element.
     *
     * @return DOMNodeList
     */
    public function get_first_level_html_nodes()
    {
    }
    /**
     * Whether the document contains errors or not
     *
     * @since 3.1
     *
     * @return bool
     */
    public function has_errors()
    {
    }
    /**
     * Returns the document's errors.
     *
     * @since 3.3
     *
     * @return LibXMLError[]
     */
    public function get_errors()
    {
    }
}
/**
 * Export actions class file
 *
 * @package Polylang-Pro
 */
/**
 * A class that handles export actions
 *
 * @file
 *
 * @since 3.3
 */
class PLL_Export_Bulk_Option extends \PLL_Bulk_Translate_Option
{
    /**
     * Represents the current file or multiple files to export.
     *
     * @var PLL_Export_Multi_Files
     */
    protected $export;
    /**
     * Allows to add post data to exported file.
     *
     * @var PLL_Export_Post
     */
    protected $post;
    /**
     * Allows to add term data to exported file.
     *
     * @var PLL_Export_Terms
     */
    protected $term;
    /**
     * PLL_Export_Bulk_Option constructor.
     *
     * @since 3.3
     *
     * @param PLL_Model $model Used to query languages and post translations.
     */
    public function __construct($model)
    {
    }
    /**
     * Defines wether the export Bulk Translate option is available given the admin panel and user logged.
     * Do not add the 'export' bulk translate option if LIBXML extension is not loaded, no matter the screen.
     *
     * @since 3.3
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     *
     * Export post content for converter.
     *
     * @since 3.3
     *
     * @param int[]    $post_ids         The ids of the posts selected for export.
     * @param string[] $target_languages The target languages.
     *
     * @throws Exception Exception.
     *
     * @return void|array {
     *     array PLL_Bulk_Translate::ERROR Error notices to be displayed to the user when something wrong occurs when exporting.
     * }
     *
     * @phpstan-param non-empty-array<int<1,max>> $post_ids
     * @phpstan-param non-empty-array<string> $target_languages
     * @phpstan-return void|array{
     *     error: non-empty-array<0,string>
     * }
     */
    public function do_bulk_action($post_ids, $target_languages)
    {
    }
    /**
     * Exports the posts with their related items and creates the files before redirecting.
     *
     * @since 3.3
     *
     * @param PLL_Export_Download_Zip $downloader       Handles the creation of a zip file containing the export.
     * @param WP_Post[][]             $posts_by_lang    An array, keyed with lang slugs, and containing arrays of `WP_Post` objects.
     * @param array                   $args             {
     *     Optional. A list of optional arguments.
     *
     *     @type bool $include_translated_items Tells if items that are already translated in the target languages must
     *                                          also be exported. This applies only to linked items (like assigned
     *                                          terms, items from reusable blocks, etc). Default is false.
     * }
     * @return void
     *
     * @phpstan-param array{include_translated_items?:bool} $args
     */
    protected function export(\PLL_Export_Download_Zip $downloader, array $posts_by_lang, array $args = array())
    {
    }
    /**
     * Get post data from id
     *
     * @since 3.3
     *
     * @param int    $post_id         The ID of the post to export.
     * @param string $target_language Targeted languages.
     *
     * @throws Exception Exception.
     */
    public function translate($post_id, $target_language)
    {
    }
    /**
     * Groups `WP_Post` objects by their source language.
     *
     * @since 3.4
     *
     * @param WP_Post[] $posts An array of `WP_Post` objects to translate.
     * @return WP_Post[][]     An array, keyed with lang slugs, and containing arrays of `WP_Post` objects.
     *
     * @phpstan-return array<non-empty-string, non-empty-list<WP_Post>>
     */
    protected function get_posts_by_language(array $posts)
    {
    }
    /**
     * Groups `WP_Post` objects by their target language.
     *
     * @since 3.4
     *
     * @param WP_Post[][] $posts            An array of `WP_Post` objects to translate.
     * @param string[]    $target_languages The target language slugs for translation.
     * @return WP_Post[][]                  An array, keyed with lang slugs, and containing arrays of `WP_Post` objects.
     *
     * @phpstan-return array<non-empty-string, non-empty-list<WP_Post>>
     */
    protected function get_posts_by_target_language(array $posts, array $target_languages)
    {
    }
    /**
     * Checks there is no ambiguity in the selected posts to export.
     * Ambiguity happens when 2 posts that are translations of each other are selected to be translated.
     *
     * @since 3.3
     * @since 3.4 Parameter changed from int[] to WP_Post[]
     *
     * @param WP_Post[] $posts The posts selected for export.
     * @return WP_Error|false An error if an ambiguity is found, false otherwise. The error message should not be
     *                        escaped: it contains `<br>` tags and the texts are already escaped.
     */
    protected function is_ambiguous(array $posts)
    {
    }
    /**
     * Find duplicate translations among the given list of post IDs.
     *
     * @since 3.3
     *
     * @param int[] $post_ids The ids of the posts selected for export.
     * @return int[][] A list of arrays of post IDs.
     *
     * @phpstan-param array<int<1,max>> $post_ids
     * @phpstan-return array<non-empty-array<int<1,max>>>
     */
    protected function find_duplicate_translations(array $post_ids)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Handles file download.
 *
 * @since 2.7
 */
class PLL_Export_Download_Zip
{
    /**
     * Creates a new zip containing several files
     *
     * @since 2.7
     *
     * @see https://www.php.net/manual/class.ziparchive.php PHP ZipArchive library
     *
     * @param PLL_Export_Multi_Files $export A collection of files to be exported as zip.
     * @return bool true if file have been created.
     */
    public function create($export)
    {
    }
    /**
     * Wrapper for {@see PLL_Export_Download_Zip::send_headers()} and {@see PLL_Export_Download_Zip::download()}
     * Also exits the current script.
     *
     * @since 2.7
     *
     * @return void
     */
    public function send_response()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * The export interface file which implement the interface.
 *
 * Each class implementing this interface shall be the representation of a single file to be exported
 *
 * @since 3.2
 */
interface PLL_Export_File_Interface
{
    /**
     * @since 3.1
     *
     * @return string
     */
    public function get_extension();
    /**
     * @since 3.1
     *
     * @return string
     */
    public function get_source_language();
    /**
     *
     * Set source language to export
     *
     * @since 2.7
     *
     * @param string $source_language Locale.
     * @return void
     */
    public function set_source_language($source_language);
    /**
     * @since 3.1
     *
     * @return string
     */
    public function get_target_language();
    /**
     *
     * Set target languages to export
     *
     * @since 2.7
     *
     * @param string $target_language Target language.
     * @return void
     */
    public function set_target_language($target_language);
    /**
     *
     * Add a translation source and target to the current translation file.
     *
     * @since 2.7
     *
     * @param string $type   Describe what does this data corresponds to, such as a post title, a meta reference etc...
     * @param string $source The source to be translated.
     * @param string $target Optional, a preexisting translation, if any.
     * @param array  $args   Optional, an array of additional arguments, like an identifier for the string, its context, comments for translators, etc.
     * @return void
     */
    public function add_translation_entry($type, $source, $target = '', $args = array());
    /**
     * Adds a reference to a source of translations entries.
     *
     * @since 2.7
     *
     * @param string $type Type of data to be exported.
     * @param string $id   Optional, a unique identifier to retrieve the data in the database.
     * @return void
     */
    public function set_source_reference($type, $id = '');
    /**
     * Returns the content of the file
     *
     * @since 2.7
     *
     * @return string
     */
    public function export();
    /**
     * Returns the name of the file to export.
     *
     * @since 3.1
     *
     * @return string
     */
    public function get_filename();
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Export_File
 *
 * @since 3.1
 */
abstract class PLL_Export_File implements \PLL_Export_File_Interface
{
    /**
     * Returns the name of the file to export.
     *
     * @since 2.7
     *
     * @return string
     */
    public function get_filename()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Abstract class to manage the export of metas.
 *
 * @since 3.3
 */
abstract class PLL_Export_Metas
{
    /**
     * Meta type. Typically 'post' or 'term' and must be filled by the child class.
     *
     * @var string
     */
    protected $meta_type;
    /**
     * Import/Export meta type. {@see PLL_Import_Export::POST_META} or {@see PLL_Import_Export::POST_META} and must be filled by the child class.
     *
     * @var string
     */
    protected $import_export_meta_type;
    /**
     * Get the meta names to export.
     *
     * @since 3.3
     *
     * @param int $from ID of the source object.
     * @param int $to   ID of the target object.
     * @return array List of custom fields names.
     */
    protected function get_meta_names_to_export($from, $to)
    {
    }
    /**
     * Export metas to translate, along their translated values if possible.
     *
     * @since 3.3
     *
     * @param PLL_Export_Multi_Files $export The export file.
     * @param int                    $from   ID of the source object.
     * @param int                    $to     ID of the target object.
     * @return PLL_Export_Multi_Files Export file with corresponding metas added.
     */
    public function export($export, $from, $to = 0)
    {
    }
    /**
     * Maybe exports metas sub fields recursively if the given meta values is contained in the fields to export.
     *
     * @since 3.3
     *
     * @param array                  $fields_to_export  A recursive array containing nested meta sub keys to translate.
     *     @example array(
     *        'sub_key_to_translate_1' => 1,
     *        'sub_key_to_translate_2' => array(
     *             'sub_sub_key_to_translate_1' => 1,
     *         ),
     *      ),
     *    )
     * @param string                 $parent_key_string A string containing parent keys separated with pipes. Each pipe
     *                                                  in key should be escaped to avoid conflicts.
     * @param int                    $index             Index of the current meta value. Usefull when a meta has several
     *                                                  values.
     * @param array|string           $source_metas      The source post metas.
     * @param array|string           $tr_metas          The translated post metas.
     * @param PLL_Export_Multi_Files $export            Represents the export file.
     * @return bool True if the meta value has been exported, false otherwise.
     */
    protected function maybe_export_metas_sub_fields(array $fields_to_export, $parent_key_string, $index, $source_metas, $tr_metas, \PLL_Export_Multi_Files $export)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Handles the logic for generating translations files and assigning values to those.
 *
 * @since 2.7
 */
class PLL_Export_Multi_Files implements \Iterator
{
    /**
     * Constructor.
     *
     * @since 2.7
     *
     * @param PLL_Export_File_Interface $base_instance An instance of the class that defines an individual export file.
     */
    public function __construct($base_instance)
    {
    }
    /**
     * Set the current file source language
     *
     * @since 2.7
     *
     * @param string $source_language A language locale formatted string.
     * @return void
     */
    public function set_source_language($source_language)
    {
    }
    /**
     * Set the target language for the current file
     *
     * If an export with a matching target language already exists, use this export instead.
     *
     * @since 2.7
     *
     * @param string $target_language A language locale formatted string.
     * @return void
     */
    public function set_target_language($target_language)
    {
    }
    /**
     * Add a translation source and target to the current translation file.
     *
     * @since 2.7
     *
     * @param string $type   Describe what does this data corresponds to, such as a post title, a meta reference etc...
     * @param string $source The source to be translated.
     * @param string $target Optional, a preexisting translation, if any.
     * @param array  $args   Optional, an array of additional arguments, like an identifier for the string, its context, comments for translators, etc.
     * @return void
     */
    public function add_translation_entry($type, $source, $target = '', $args = array())
    {
    }
    /**
     * Adds a reference to a source of translations entries.
     *
     * @since 2.7
     *
     * @param string $type Type of data to be exported.
     * @param string $id   Optional, a unique identifier to retrieve the data in the database.
     * @return void
     */
    public function set_source_reference($type, $id = '')
    {
    }
    /**
     * Returns the content of the file
     *
     * @since 2.7
     *
     * @return string
     */
    public function export()
    {
    }
    /**
     * From {@see Iterator}. Returns the current instance of the export file abstraction.
     *
     * @since 2.7
     *
     * @return PLL_Export_File_Interface
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
    }
    /**
     *
     * From {@see Iterator}.
     *
     * @since 2.7
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function next()
    {
    }
    /**
     *
     * From {@see Iterator}.
     *
     * @since 2.7
     *
     * @return string
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
    }
    /**
     * From {@see Iterator}.
     *
     * @since 2.7
     *
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function valid()
    {
    }
    /**
     * From {@see Iterator}
     *
     * @since 2.7
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function rewind()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Export_Post_Meta
 *
 * @since 3.3
 */
class PLL_Export_Post_Metas extends \PLL_Export_Metas
{
    /**
     * Constructor.
     *
     * @since 3.3
     */
    public function __construct()
    {
    }
    /**
     * Get the meta names to export.
     *
     * @since 3.3
     *
     * @param int $from ID of the source object.
     * @param int $to   ID of the target object.
     * @return string[] List of custom fields names.
     */
    protected function get_meta_names_to_export($from, $to)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Export_Post
 *
 * @since 3.3
 */
class PLL_Export_Post
{
    /**
     * Allows to add post metas to export file.
     *
     * @var PLL_Export_Post_Metas
     */
    protected $post_meta;
    /**
     * A reference to the current PLL_Model.
     *
     * @var PLL_Model
     */
    protected $model;
    /**
     * PLL_Export_Post constructor.
     *
     * @since 3.3
     *
     * @param PLL_Model $model A reference to the current PLL_Model.
     */
    public function __construct($model)
    {
    }
    /**
     * Yield all the piece of information required for the translation
     * and add them to the export file.
     *
     * @since 3.3
     *
     * @param PLL_Export_Multi_Files $export          The export file.
     * @param int                    $post_id         The post id.
     * @param string                 $target_language Targeted languages.
     * @return PLL_Export_Multi_Files The given export file with added data.
     */
    public function export($export, $post_id, $target_language)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Handles the admin action of exporting strings translations.
 *
 * @since 2.7
 * @since 3.1 Renamed from 'PLL_Export_Strings_Translation'
 */
class PLL_Export_Strings_Translations
{
    /**
     * Used to set the action's name in forms.
     *
     * @var string
     */
    const ACTION_NAME = 'pll_translate';
    /**
     * Used to create nonces for the action.
     *
     * @var string
     */
    const NONCE_NAME = '_pll_translate_nonce';
    /**
     * PLL_Export_Strings_Translation constructor.
     *
     * @since 2.7
     *
     * @param string    $file_extension The file's extension, {@see PLL_File_Format_Factory::from_extension()}.
     * @param PLL_Model $model          Polylang model.
     * @return void
     */
    public function __construct($file_extension, $model)
    {
    }
    /**
     * Prepare and export the selected strings translations.
     *
     * @since 2.7
     *
     * @param PLL_Language[] $target_languages Array of PLL_Language.
     * @param string         $group            String translation context to export.
     * @return void
     */
    public function send_strings_translation_to_export($target_languages, $group)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Export_Term_Metas
 *
 * @since 3.3
 */
class PLL_Export_Term_Metas extends \PLL_Export_Metas
{
    /**
     * Constructor.
     *
     * @since 3.3
     */
    public function __construct()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 *
 * Class that send the taxonomies that will be exported.
 *
 * @since 3.3
 */
class PLL_Export_Terms
{
    /**
     * Constructor.
     *
     * @since 3.3
     *
     * @param PLL_Model $model Needed to access the translated taxonomies list.
     */
    public function __construct($model)
    {
    }
    /**
     *
     * Export taxonomy terms.
     *
     * @since 3.3
     *
     * @param PLL_Export_Multi_Files $export          Represent export file.
     * @param WP_Term[]              $terms           A list of term objects.
     * @param PLL_Language           $target_language Language of the translated post.
     * @return PLL_Export_Multi_Files
     */
    public function export(\PLL_Export_Multi_Files $export, array $terms, \PLL_Language $target_language)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_File_Format_Factory
 *
 * @since 3.1
 *
 * Generates file formats to use for the import / export feature.
 */
class PLL_File_Format_Factory
{
    /**
     * Names of child classes of {@see PLL_File_Format}.
     *
     * @var string[]
     *
     * @phpstan-var array<class-string<PLL_File_Format>>
     */
    protected $base_formats = array(\PLL_PO_Format::class, \PLL_Xliff_Format::class);
    /**
     * Cache the supported file formats.
     *
     * @var PLL_File_Format[]
     */
    protected $supported_formats = array();
    /**
     * Returns all the formats supported by the environment.
     *
     * @since 3.1
     *
     * @return PLL_File_Format[]
     */
    public function get_supported_formats()
    {
    }
    /**
     * Get the format that matches the given extension.
     *
     * @since 3.1
     *
     * @param string $extension The extension of the file format to retrieve.
     * @return PLL_File_Format|WP_Error
     */
    public function from_extension($extension)
    {
    }
    /**
     * Get the format that matches the given mime type.
     *
     * @since 3.1
     *
     * @param string $mime_type The mime type of the file format to retrieve.
     * @return PLL_File_Format|WP_Error
     */
    public function from_mime_type($mime_type)
    {
    }
    /**
     * Matches a supported format given a filter callback. Internal use.
     *
     * @since 3.2
     *
     * @param callable $filter A function used to search a format among supported formats.
     * @return PLL_File_Format|WP_Error
     */
    protected function get_format($filter)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Interface PLL_Import_Export_File_Format
 *
 * @since 3.1
 *
 * Represents a supported format for the import / export feature.
 */
abstract class PLL_File_Format
{
    /**
     * @var string
     */
    public $extension;
    /**
     * @var string[]
     */
    public $mime_type;
    /**
     * Whether the file format is supported by the current environment or not.
     *
     * @since 3.1
     *
     * @return true|WP_Error
     */
    public abstract function is_supported();
    /**
     * Returns the associated import class.
     *
     * @since 3.1
     *
     * @return PLL_Import_File_Interface
     */
    public abstract function get_import();
    /**
     * Returns the associated export class.
     *
     * @since 3.1
     *
     * @return PLL_Export_File_Interface
     */
    public abstract function get_export();
}
/**
 * @package Polylang-Pro
 */
/**
 * Initialize the Xliff Exporter Module
 *
 * @since 2.7
 */
class PLL_Import_Export
{
    const TYPE_POST = 'post';
    const TYPE_TERM = 'term';
    const TERM_NAME = 'name';
    const TERM_DESCRIPTION = 'description';
    const TERM_META = 'termmeta';
    const POST_TITLE = 'post_title';
    const POST_CONTENT = 'post_content';
    const POST_EXCERPT = 'post_excerpt';
    const POST_META = 'postmeta';
    const STRINGS_TRANSLATIONS = 'strings-translations';
    /**
     * Name of the app that generates the export files.
     *
     * @var string
     */
    const APP_NAME = 'Polylang';
    /**
     * Constructor
     * Registers the hooks
     *
     * @since 2.7
     *
     * @param PLL_Base $polylang Current instance of the Polylang context.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Adds 'export' bulk option in Translate bulk action {@see PLL_Bulk_Translate::register_options()}
     *
     * @since 2.7
     *
     * @return void
     */
    public function add_bulk_export()
    {
    }
    /**
     * Add Metaboxes, shown only if there is more than one language registered.
     *
     * @since 2.7
     *
     * @return void
     */
    public function add_meta_boxes()
    {
    }
    /**
     * Metabox export strings.
     *
     * @since 2.7
     *
     * @return void
     */
    public function metabox_export_strings()
    {
    }
    /**
     * Metabox import translations.
     *
     * @since 2.7
     *
     * @return void
     */
    public function metabox_import_translation()
    {
    }
    /**
     * Launch the import action.
     *
     * @since 2.7
     *
     * @return void
     */
    public function import_action()
    {
    }
    /**
     * Handles the triggering of the import class.
     *
     * @since 2.7
     *
     * @return void
     */
    protected function trigger_import()
    {
    }
    /**
     * Launch the strings translation export.
     *
     * @since 2.7
     * @since 3.1 Renamed from 'export_string_translation'
     *
     * @return void
     */
    public function export_strings_translations()
    {
    }
    /**
     * Enqueue stylesheet for import/export on admin side.
     *
     * @since 3.1
     *
     * @return void
     */
    public function admin_enqueue_style()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * A class that handle the import action.
 *
 * @since 2.7
 *
 * Class PLL_Import_Action
 */
class PLL_Import_Action
{
    /**
     * Used to set import action name in forms.
     *
     * @var string
     */
    const ACTION_NAME = 'pll_import';
    /**
     * Used to create nonce for this action.
     *
     * @var string
     */
    const NONCE_NAME = '_pll_import_nonce';
    /**
     * PLL_Import_Action constructor.
     *
     * @since 2.7
     * @since 3.3 Add $imports parameter to handle the various import types.
     *
     * @param PLL_Model                     $model   Instance of PLL_Model.
     * @param PLL_Import_Object_Interface[] $imports The import types.
     */
    public function __construct($model, $imports)
    {
    }
    /**
     * Processes the import and redirects.
     *
     * @since 2.7
     *
     * @return void
     */
    public function import()
    {
    }
    /**
     * Processes the imported objects retrieved in an import file.
     *
     * @since 2.7
     *
     * @return WP_Error
     */
    protected function _import()
    {
    }
    /**
     * Check if the current site corresponding on the targeted one in the import file.
     *
     * @since 3.3
     *
     * @param PLL_Import_File_Interface $import Import file.
     * @return true|WP_Error
     */
    public function is_valid_site($import)
    {
    }
    /**
     * Check if the import file has been generated by Polylang Pro.
     *
     * @since 3.3
     *
     * @param PLL_Import_File_Interface $import Import file.
     * @return true|WP_Error
     */
    public function is_valid_generator($import)
    {
    }
    /**
     * Check if the targeted language is valid for the import.
     *
     * @since 3.3
     *
     * @param PLL_Import_File_Interface $import Import file.
     * @return PLL_Language|WP_Error
     */
    public function get_target_language($import)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Interface PLL_Import_File_Interface
 *
 * Each class implementing this interface shall be the representation of a single file to be imported
 *
 * @since 3.2
 */
interface PLL_Import_File_Interface
{
    /**
     * Import the translations from a file.
     *
     * @since 2.7
     *
     * @param string $filepath The path on the filesystem where the import file is located.
     * @return WP_Error|true
     */
    public function import_from_file($filepath);
    /**
     * Get the target language
     *
     * @since 2.7
     *
     * @return string|false
     */
    public function get_target_language();
    /**
     * Get the next content to import.
     *
     * @since 2.7
     *
     * @return array
     */
    public function get_next_entry();
    /**
     * Get the site reference
     *
     * @since 2.7
     *
     * @return string|false
     */
    public function get_site_reference();
    /**
     * Returns the name of the application that generated the file.
     *
     * @since 3.3
     *
     * @return string The application name. An empty string if it couldn't be found.
     */
    public function get_generator_name();
    /**
     * Returns the version of the application that generated the file.
     *
     * @since 3.3
     *
     * @return string The application version. An empty string if it couldn't be found or the name of the application.
     *                couldn't be found.
     */
    public function get_generator_version();
}
/**
 * @package Polylang-Pro
 */
/**
 * Interface for the import strategy.
 *
 * @since 3.3
 */
interface PLL_Import_Object_Interface
{
    /**
     * Handles the import of a content type.
     *
     * @since 3.3
     *
     * @param array        $entry {
     *     @type string       $type Either 'post', 'term' or 'string_translations'
     *     @type int          $id   Id of the object in the database (if applicable)
     *     @type Translations $data Objects holding all the retrieved Translations
     * }
     *
     * @param PLL_Language $target_language The targeted language for import.
     * @return void
     */
    public function translate($entry, $target_language);
    /**
     * Get update notices to display.
     *
     * @since 3.3
     *
     * @return WP_Error
     */
    public function get_updated_notice();
    /**
     * Get warnings notices to display.
     *
     * @since 3.3
     *
     * @return WP_Error
     */
    public function get_warning_notice();
    /**
     * Returns the object type.
     *
     * @since 3.3
     *
     * @return string
     */
    public function get_type();
    /**
     * Returns the imported object ids.
     *
     * @since 3.3
     *
     * @return array
     */
    public function get_imported_object_ids();
}
/**
 * @package Polylang-Pro
 */
/**
 * A class to handle posts import.
 *
 * @since 3.3
 */
class PLL_Import_Posts implements \PLL_Import_Object_Interface
{
    /**
     * Handle translation of posts
     *
     * @var PLL_Translation_Post_Model
     */
    protected $translation_post_model;
    /**
     * The success counter.
     *
     * @var int
     */
    protected $success;
    /**
     * The non existing post ids for the warning.
     *
     * @var int[]
     */
    protected $non_existing_post_ids = array();
    /**
     * The imported source post ids.
     *
     * @var int[]
     */
    protected $post_ids = array();
    /**
     * Constructor
     *
     * @since 3.3
     *
     * @param PLL_Translation_Post_Model $translation_post_model The PLL_Translation_Post_Model object.
     */
    public function __construct($translation_post_model)
    {
    }
    /**
     * Handles the import of posts.
     *
     * @since 3.3
     *
     * @param array        $entry           The current entry to import.
     * @param PLL_Language $target_language The targeted language for import.
     */
    public function translate($entry, $target_language)
    {
    }
    /**
     * Performs actions on imported posts.
     * Translates posts parent.
     *
     * @since 3.3
     *
     * @param PLL_Language $target_language The targeted language for import.
     * @param int[]        $post_ids        The imported post ids of the import.
     * @return void
     */
    public function process_translated_post($target_language, $post_ids)
    {
    }
    /**
     * Retrieves the status for the imported posts in the HTTP request.
     *
     * @since 3.3
     *
     * @return string The post status, publish or draft.
     */
    protected function get_post_status()
    {
    }
    /**
     * Get update notices to display.
     *
     * @since 3.3
     *
     * @return WP_Error
     */
    public function get_updated_notice()
    {
    }
    /**
     * Get warnings notices to display.
     *
     * @since 3.3
     *
     * @return WP_Error
     */
    public function get_warning_notice()
    {
    }
    /**
     * Returns the object type.
     *
     * @since 3.3
     *
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Returns the imported post ids.
     *
     * @since 3.3
     *
     * @return int[]
     */
    public function get_imported_object_ids()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * A class to handle strings translations import.
 *
 * @since 3.3
 */
class PLL_Import_Strings implements \PLL_Import_Object_Interface
{
    /**
     * The success counter.
     *
     * @var int
     */
    protected $success;
    /**
     * The imported source string.
     *
     * @var string[]
     */
    protected $imported_strings = array();
    /**
     * Handles the import of strings translations.
     *
     * @since 3.3
     *
     * @param array        $entry {
     *     An array containing the translations data.
     *     @type string       $type Either 'post', 'term' or 'string_translations'.
     *     @type int          $id   Id of the object in the database (if applicable).
     *     @type Translations $data Objects holding all the retrieved Translation_Entry objects.
     * }
     * @param PLL_Language $target_language The targeted language for import.
     */
    public function translate($entry, $target_language)
    {
    }
    /**
     * Gets update notices to display.
     *
     * @since 3.3
     *
     * @return WP_Error
     */
    public function get_updated_notice()
    {
    }
    /**
     * Gets warnings notices to display.
     *
     * @since 3.3
     *
     * @return WP_Error
     */
    public function get_warning_notice()
    {
    }
    /**
     * Returns the object type.
     *
     * @since 3.3
     *
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Returns the imported source strings as ids.
     *
     * @since 3.3
     *
     * @return string[]
     */
    public function get_imported_object_ids()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * A class to handle terms import.
 *
 * @since 3.3
 */
class PLL_Import_Terms implements \PLL_Import_Object_Interface
{
    /**
     * The success counter.
     *
     * @var int
     */
    protected $success;
    /**
     * The imported source term ids.
     *
     * @var int[]
     */
    protected $term_ids = array();
    /**
     * Constructor.
     *
     * @since 3.3
     *
     * @param PLL_Translation_Term_Model $translation_term_model The PLL_Translation_Term_Model object.
     */
    public function __construct($translation_term_model)
    {
    }
    /**
     * Handles the import of terms.
     *
     * @since 3.3
     *
     * @param array        $entry           The current entry to import.
     * @param PLL_Language $target_language The targeted language for import.
     */
    public function translate($entry, $target_language)
    {
    }
    /**
     * Performs actions on imported terms.
     * Translates terms parent.
     *
     * @since 3.3
     *
     * @param PLL_Language $target_language The targeted language for import.
     * @param int[]        $term_ids        The imported term ids of the import.
     * @return void
     */
    public function process_translated_terms($target_language, $term_ids)
    {
    }
    /**
     * Get update notices to display.
     *
     * @since 3.3
     *
     * @return WP_Error
     */
    public function get_updated_notice()
    {
    }
    /**
     * Get warnings notices to display.
     *
     * @since 3.3
     *
     * @return WP_Error
     */
    public function get_warning_notice()
    {
    }
    /**
     * Returns the object type.
     *
     * @since 3.3
     *
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Returns the imported term ids.
     *
     * @since 3.3
     *
     * @return int[]
     */
    public function get_imported_object_ids()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Handles file verifications.
 * Instantiates the right import classes according to the file type.
 *
 * @since 2.7
 * @since 3.1 Renamed from PLL_Import_File
 */
class PLL_Import_Uploader
{
    /**
     * PLL_Import_Uploader constructor.
     */
    public function __construct()
    {
    }
    /**
     * Deletes the file when no longer needed.
     *
     * @since 2.7
     */
    public function __destruct()
    {
    }
    /**
     * Handles uploading a file.
     * Returns an import class instance according to the upload file type.
     *
     * @since 2.7
     *
     * @param string[] $file Reference to a single element contained in $_FILE superglobal, passed to {@see wp_handle_upload()}.
     * @return PLL_Import_File_Interface|WP_Error
     */
    public function load($file)
    {
    }
    /**
     * Adds translation files formats to the list of allowed mime types
     *
     * @since 2.7
     *
     * @param array $mimes List of allowed mime types.
     * @return array Modified list of allowed mime types.
     */
    public function allowed_mimes($mimes)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * PO file, generated from exporting Polylang translations
 *
 * Handles the construction of a PO files.
 *
 * @since 2.7
 */
class PLL_PO_Export extends \PLL_Export_File
{
    /**
     * The registered target language.
     *
     * @var string
     */
    protected $target_language = '';
    /**
     * The registered source language.
     *
     * @var string
     */
    protected $source_language = '';
    /**
     * The registered site reference.
     *
     * @var string
     */
    protected $site_reference = '';
    /**
     * PLL_Export_Interface constructor.
     * Creates a PO object.
     *
     * @since 2.7
     */
    public function __construct()
    {
    }
    /**
     * @since 3.1
     *
     * @return string
     */
    public function get_source_language()
    {
    }
    /**
     * Set a source language to the export
     *
     * @since 2.7
     *
     * @param string $source_language Locale.
     * @return void
     */
    public function set_source_language($source_language)
    {
    }
    /**
     * @since 3.1
     *
     * @return string
     */
    public function get_target_language()
    {
    }
    /**
     * Set a target language to the export
     *
     * @since 2.7
     *
     * @param string $target_language Target language.
     * @return void
     */
    public function set_target_language($target_language)
    {
    }
    /**
     * Add a translation source and target to the current translation file
     *
     * @since 2.7
     *
     * @param string $type   Describe what does this data corresponds to, such as a post title, a meta reference etc...
     * @param string $source The source to be translated.
     * @param string $target Optional, preexisting translation, if any.
     * @param array  $args   Optional, an array containing the name and the context of the string.
     * @return void
     */
    public function add_translation_entry($type, $source, $target = '', $args = array())
    {
    }
    /**
     * Assign a reference to the PO file.
     *
     * @since 2.7
     * @since 3.3.1 Remove unused source reference header.
     *
     * @param string $type Type of data to be exported.
     * @param string $id   Optional, unique identifier to retrieve the data in the database.
     * @return void
     */
    public function set_source_reference($type, $id = '')
    {
    }
    /**
     * Writes the file in the output buffer
     *
     * @since 2.7
     *
     * @return string
     */
    public function export()
    {
    }
    /**
     * Assigns the necessary headers to the PO file.
     *
     * @see https://www.gnu.org/software/trans-coord/manual/gnun/html_node/PO-Header.html
     *
     * @since 2.7
     * @since 3.3   Add a reference to the application that generated the export file (name + version).
     * @since 3.3.1 Replace non-official "Language-Target" header to the official Language.
     *              Use the Poedit header "X-Source-Language" instead of non official "Language-source".
     *              Replace non official 'Site-Reference" header by "X-Polylang-Site-Reference".
     * @return void
     */
    protected function set_file_headers()
    {
    }
    /**
     *
     * Get the necessary text comment to add to the PO file.
     *
     * @return string
     */
    protected function get_comment_before_headers()
    {
    }
    /**
     * @since 3.1
     *
     * @return string
     */
    public function get_extension()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_PO_Format
 *
 * @since 3.1
 *
 * Manages the support for Po format for Polylang Import / Export feature.
 */
class PLL_PO_Format extends \PLL_File_Format
{
    /**
     * @var string
     */
    public $extension = 'po';
    /**
     * @var string[]
     */
    public $mime_type = array('po' => 'text/x-po');
    /**
     * Po format is always supported.
     *
     * @since 3.1
     *
     * @return true
     */
    public function is_supported()
    {
    }
    /**
     * Returns the associated import class.
     *
     * @since 3.1
     *
     * @return PLL_PO_Import
     */
    public function get_import()
    {
    }
    /**
     * Returns the associated export class.
     *
     * @since 3.1
     *
     * @return PLL_PO_Export
     */
    public function get_export()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * PO file, generated from importing translations
 *
 * Handles the reading of a PO file.
 *
 * @since 2.7
 */
class PLL_PO_Import implements \PLL_Import_File_Interface
{
    /**
     * Constructor.
     *
     * Creates a PO object from an imported file.
     *
     * @since 2.7
     */
    public function __construct()
    {
    }
    /**
     * Import the translations from a file.
     *
     * Relies on {@see PO::import_from_file()}
     *
     * @since 2.7
     *
     * @param string $filepath The path on the filesystem where the import file is located.
     * @return WP_Error|true
     */
    public function import_from_file($filepath)
    {
    }
    /**
     * Get the target language
     *
     * @since 2.7
     * @since 3.3.1 Change the target language header label. We're now using the official "Language" header
     *              and add a backward condition to accept the old header.
     *
     * @return string|false
     */
    public function get_target_language()
    {
    }
    /**
     * Get the site reference.
     *
     * @since 2.7
     * @since 3.3.1 Change the site reference header label.
     *
     * @return string|false
     */
    public function get_site_reference()
    {
    }
    /**
     * Returns the reference to the name of the application that generated the file.
     *
     * @since 3.3
     *
     * @return string The application name. An empty string if it couldn't be found.
     */
    public function get_generator_name()
    {
    }
    /**
     * Returns the reference to the version of the application that generated the file.
     *
     * @since 3.3
     *
     * @return string The application version. An empty string if it couldn't be found or the name of the application.
     *                couldn't be found.
     */
    public function get_generator_version()
    {
    }
    /**
     * Get the next string translation to import.
     *
     * @since 2.7
     *
     * @return array
     */
    public function get_next_entry()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * A Service to collect linked post ids.
 *
 * @since 3.3
 */
class PLL_Collect_Linked_Posts
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    protected $options;
    /**
     * PLL_Collect_Linked_Posts constructor.
     *
     * @since 3.3
     *
     * @param array $options The plugin options.
     */
    public function __construct($options)
    {
    }
    /**
     * Gets all the post ids linked to a set of posts.
     *
     * @since 3.3
     * @since 3.4 Parameter changed from int[] to WP_Post[].
     *
     * @param WP_Post[] $posts An array of posts.
     * @return int[] An array of linked post ids.
     */
    public function get_linked_post_ids($posts)
    {
    }
    /**
     * Gets the post ids from a post, wether it's classic or block edited.
     *
     * @since 3.3
     *
     * @param WP_Post $post A given WP_Post object.
     * @return int[] An array of post ids.
     */
    protected function get_post_ids_from_post($post)
    {
    }
    /**
     * Gets the post ids from block type content.
     *
     * @since 3.3
     *
     * @param string $post_content The content of the post.
     * @return int[] An array of post ids.
     */
    protected function get_post_ids_from_block_content($post_content)
    {
    }
    /**
     * Gets the post ids from blocks.
     *
     * @since 3.3
     *
     * @param array $blocks An array of blocks.
     * @return int[] An array of post ids.
     */
    protected function get_post_ids_from_blocks_deep($blocks)
    {
    }
    /**
     * Gets the media ids from a block.
     *
     * @since 3.3
     *
     * @param array $block A representative array of a block.
     * @return int[] An array of media ids, empty if none found.
     */
    protected function get_media_ids_from_block($block)
    {
    }
    /**
     * Gets the media ids from classic type content.
     *
     * @since 3.3
     *
     * @param string $post_content The content of the post.
     * @return int[]
     */
    protected function get_medias_from_html_content($post_content)
    {
    }
    /**
     * Gets media ids from shortcodes.
     *
     * @since 3.3
     *
     * @param string $post_content The content of the required post.
     * @return int[] The media ids.
     */
    protected function get_medias_from_shortcodes($post_content)
    {
    }
    /**
     * Gets media ids from img tags
     *
     * @since 3.3
     *
     * @param string $post_content The content of the post to search from.
     * @return int[] An array of media ids (empty if no media is found).
     */
    protected function get_medias_from_img_tags($post_content)
    {
    }
    /**
     * Gets id from a reusable block.
     * Also recursively get contained reusable block ids.
     *
     * @since 3.3
     *
     * @param array $block An array containing block data.
     * @return int[] An array of reusable block ids, empty if none found.
     */
    protected function get_reusable_block_ids($block)
    {
    }
    /**
     * Returns the ID from a navigation block.
     *
     * @since 3.3
     *
     * @param array $block An array containing block data.
     * @return int[] An array of navigation post IDs, empty if none found.
     */
    protected function get_navigation_block_ids($block)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * A Service to collect linked terms.
 *
 * @since 3.3
 */
class PLL_Collect_Linked_Terms
{
    /**
     * Stores the ID's of the posts that have been parsed already.
     * The idea is to prevent processing the same posts several times via the reusable block, or worse, infinite loops.
     *
     * @var int[]
     * @phpstan-var array<int, int>
     */
    protected $processed_posts = array();
    /**
     * Gets all the term objects linked to a set of posts.
     *
     * @since 3.3
     *
     * @param  WP_Post[] $posts      An array of post objects.
     * @param  string[]  $taxonomies Optional. Terms will be limited to the given taxonomies.
     * @return WP_Term[]             An array of linked term objects.
     */
    public function get_linked_terms(array $posts, array $taxonomies = array())
    {
    }
    /**
     * Returns all the term IDs linked in a post.
     *
     * @since 3.3
     *
     * @param WP_Post $post A given WP_Post object.
     * @return int[] An array of term IDs.
     * @phpstan-return array<int<0, max>, positive-int>
     */
    protected function get_term_ids_from_post(\WP_Post $post)
    {
    }
    /**
     * Returns the term IDs from block type content.
     *
     * @since 3.3
     *
     * @param string $post_content The content of the post.
     * @return int[] An array of term IDs.
     *
     * @phpstan-return array<int<0, max>, positive-int>
     */
    protected function get_term_ids_from_block_content($post_content)
    {
    }
    /**
     * Returns the term IDs from blocks.
     *
     * @since 3.3
     *
     * @param array[] $blocks An array of blocks.
     * @return int[] An array of term IDs.
     *
     * @phpstan-return array<int<0, max>, positive-int>
     */
    protected function get_term_ids_from_blocks(array $blocks)
    {
    }
    /**
     * Returns the term IDs from a block.
     *
     * @since 3.3
     *
     * @param array $block A representative array of a block.
     * @return int[] An array of term IDs.
     *
     * @phpstan-return array<int<0, max>, positive-int>
     */
    protected function get_term_ids_from_block(array $block)
    {
    }
    /**
     * Returns the term IDs from a reusable block.
     *
     * @since 3.3
     *
     * @param array $block A representative array of a block.
     * @return int[] An array of term IDs.
     *
     * @phpstan-return array<int<0, max>, positive-int>
     */
    protected function get_term_ids_from_reusable_block(array $block)
    {
    }
    /**
     * Returns the term IDs from a latest posts block.
     *
     * @since 3.3
     *
     * @param array $block A representative array of a block.
     * @return int[] An array of term IDs.
     *
     * @phpstan-return array<int<0, max>, positive-int>
     */
    protected function get_term_ids_from_latest_posts_block(array $block)
    {
    }
    /**
     * Returns the term IDs from a query block.
     *
     * @since 3.3
     *
     * @param array $block A representative array of a block.
     * @return int[] An array of term IDs.
     *
     * @phpstan-return array<int<0, max>, positive-int>
     */
    protected function get_term_ids_from_query_block(array $block)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * A Service to manage current user capabilities.
 *
 * @since 3.3
 */
class PLL_Manage_User_Capabilities
{
    /**
     * Removes the 'unfiltered_html' capability from the current user.
     *
     * @since 3.3
     *
     * @param WP_Post $source_post The source post about to be translated.
     * @return void
     */
    public function forbid_unfiltered_html($source_post)
    {
    }
    /**
     * Sets 'unfiltered_html' capability to default for users.
     *
     * @since 3.3
     *
     * @return void
     */
    public function allow_unfiltered_html()
    {
    }
    /**
     * Disallows 'unfiltered_html' capability.
     *
     * @since 3.3
     *
     * @param string[] $caps Primitive capabilities required of the user.
     * @param string   $cap  Capability being checked.
     * @return string[] Filtered primitive capabilities.
     */
    public function remove_unfiltered_html_cap($caps, $cap)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Provides a few tools to manipulate content by using `DOMDocument`.
 *
 * @since 3.3
 */
class PLL_DOM_Content
{
    /**
     * Constructor.
     *
     * @since 3.3
     *
     * @param string $content The content to work with.
     */
    public function __construct($content)
    {
    }
    /**
     * Extracts strings from content, given a list of parsing rules.
     *
     * @since 3.3
     *
     * @uses DOMXPath
     *
     * @param string[] $rules Parsing rules. Ex: `[ '//figure/img/@alt' ]`.
     * @return string[] Path to matching nodes as array keys, extracted strings as array values.
     *                  Ex: `[ '/figure/img[1]/@alt' => 'Image alt text.' ]`.
     *
     * @phpstan-return array<string,string>
     */
    public function get_strings(array $rules)
    {
    }
    /**
     * Replaces strings in the content, given a list of parsing rules.
     *
     * @since 3.3
     *
     * @uses DOMXPath
     *
     * @param string[] $new_strings Path to matching nodes as array keys, new strings as array values.
     *                              Ex: `[ '/figure/img[1]/@alt' => 'New image alt text.' ]`.
     * @return string Content with replaced strings.
     *
     * @phpstan-param array<string,string> $new_strings
     */
    public function replace_content(array $new_strings)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Holds the rules defining which part of a block should be "translated".
 * Translated may mean different actions, like exporting it into a translation file, or updating the database...
 *
 * @since 3.3
 */
class PLL_Translation_Block_Parsing_Rules
{
    /**
     * Only keeps the rules matching a certain block type.
     *
     * @since 3.3
     *
     * @param string $block_type {@see WP_Block_Parser_Block::$blockName}.
     * @return PLL_Translation_Block_Parsing_Rules $this This object with its $rules property updated.
     */
    public function set_block_name($block_type)
    {
    }
    /**
     * Extracts translatable parts from the block content.
     * Returns an empty array if the parsing rules are not defined.
     *
     * @since 3.3
     *
     * @param string $content {@see WP_Block_Parser_Block::$innerContent}.
     * @return string[] Parsing rules as array keys, strings to translate as array values.
     *
     * @phpstan-return array<string,string>
     */
    public function parse($content)
    {
    }
    /**
     * Tells if a block should be parsed using Xpath rules.
     *
     * @since 3.3
     *
     * @param array $block An array mimicking a {@see WP_Block_Parser_Block}.
     * @return bool
     */
    public function has_parsing_rules($block)
    {
    }
    /**
     * Tells if a block needs to be parsed, because it contains contents to be translated.
     * Though, even if not, it may contain blocks that need to be parsed.
     *
     * @since 3.3
     *
     * @param array $block An array mimicking a {@see WP_Block_Parser_Block}.
     * @return bool
     */
    public function should_be_parsed($block)
    {
    }
    /**
     * Checks if a block has translatable attributes (or not) and returns them.
     *
     * @since 3.3
     *
     * @param array $block An array mimicking a {@see WP_Block_Parser_Block}.
     * @return string[] An array with attributes to translate or an empty array.
     *
     * @phpstan-return array<string,string>
     */
    public function get_attributes_to_translate($block)
    {
    }
}
/**
 * Class PLL_Translation_Content
 *
 * @package Polylang-Pro
 */
/**
 * Translates content.
 *
 * @since 3.3
 */
class PLL_Translation_Content
{
    /**
     * Setter
     *
     * @since 3.3
     *
     * @param Translations $translations Used to translate the content.
     * @return void
     */
    public function set_translations($translations)
    {
    }
    /**
     * Translates the original's post title.
     *
     * @since 3.3
     *
     * @param string $from_post The post_content field of the original WP_Post.
     * @return string
     */
    public function translate_title($from_post)
    {
    }
    /**
     * Uses a {@see PLL_Translation_Walker_Interface} subclass to iterate over each translatable part of the passed content, and applies a transformation callback to it. Then returns the transformed content.
     *
     * @since 3.3
     *
     * @param string $content The post_content field of the original WP_Post.
     * @return string
     */
    public function translate_content($content)
    {
    }
    /**
     * Translates the original post's excerpt.
     *
     * @since 3.3
     *
     * @param string $post_excerpt The post_excerpt field of the original WP_Post.
     * @return string
     */
    public function translate_excerpt($post_excerpt)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Translation_Entry_Identified
 *
 * Extends Translation_Entry to allow the identification of the entry through the 'id' property.
 */
class PLL_Translation_Entry_Identified extends \Translation_Entry
{
    /**
     * Uniquely identifies the translation, whether its string has changed or not.
     *
     * @var string $id
     */
    protected $id;
    /**
     * PLL_Translation_Entry_Identified constructor.
     * Identify the translation entry automatically.
     *
     * @see https://developer.wordpress.org/reference/classes/translation_entry/
     *
     * @since 3.3
     *
     * @param array $entry A translation entry arguments. Default: empty array.
     */
    public function __construct($entry = array())
    {
    }
    /**
     * Returns the identifier of the entry.
     *
     * @since 3.3
     *
     * @return string
     */
    public function get_id()
    {
    }
}
/**
 * Class PLL_Translation_Metas
 *
 * @package Polylang-Pro
 */
/**
 * Abstract class to manage the import of metas.
 *
 * @since 3.3
 */
abstract class PLL_Translation_Metas
{
    /**
     * Meta type. Typically 'post' or 'term' and must be filled by the child class.
     *
     * @var string
     */
    protected $meta_type;
    /**
     * The context to translate entry.
     *
     * @var string
     */
    protected $context;
    /**
     * Translations set where to look for the post metas translations.
     *
     * @var PLL_Translations_Identified
     */
    protected $translations;
    /**
     * Object to manage copied metas during import.
     *
     * @var PLL_Sync_Metas
     */
    protected $sync_metas;
    /**
     * Array containing meta keys to translate.
     *
     * @var array[] {
     *     A list of arrays described as follow:
     *
     *     @type string   $meta_key       The name of the meta.
     *     @type string[] $meta_sub_keys  The meta sub-fields to translate.
     *     @type int      $value_position The position of the value in case of multiple values.
     * }
     * @phpstan-var array<int, array{meta_key: string, meta_sub_keys: array<int, string>, value_position: int}>
     */
    protected $metas_to_translate;
    /**
     * Constructor.
     *
     * @since 3.3
     *
     * @param PLL_Sync_Metas $sync_metas Object to manage copied metas during import.
     */
    public function __construct(\PLL_Sync_Metas $sync_metas)
    {
    }
    /**
     * Translates the metas from a given object, whether it's a copy or a real translation.
     *
     * @since 3.3
     *
     * @param int          $src_object_id   Source object to get the metas from.
     * @param int          $tr_object_id    Translated object to translate the metas from.
     * @param PLL_Language $target_language Target language object.
     * @param bool         $copy            Whether to copy source metas. For instance, if the translation is updated, there is no need to copy source metas.
     * @return void
     */
    public function translate($src_object_id, $tr_object_id, \PLL_Language $target_language, $copy)
    {
    }
    /**
     * Setter for translations.
     * Translations of the matching context are sanitized.
     *
     * @since 3.3
     *
     * @param PLL_Translations_Identified $translations A set of translations to search the metas translations in.
     * @return void
     */
    public function set_translations(\PLL_Translations_Identified $translations)
    {
    }
    /**
     * Removes meta keys to translate from an array of meta to copy.
     *
     * @since 3.3
     *
     * @param string[] $meta_keys Meta keys to copy.
     * @return string[] Filtered array of meta to copy.
     */
    public function remove_metas_to_translate($meta_keys)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Translation_Post_Metas
 *
 * @since 3.3
 *
 * Translate post metas from a set of translation entries.
 */
class PLL_Translation_Post_Metas extends \PLL_Translation_Metas
{
    /**
     * The PLL_Translation_Post_Metas constructor that allows to define the meta type.
     *
     * @since 3.3
     *
     * @param PLL_Sync_Post_Metas $sync_metas Object to manage copied post metas during import.
     */
    public function __construct(\PLL_Sync_Post_Metas $sync_metas)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Manages posts translations.
 *
 * @since 3.3
 */
class PLL_Translation_Post_Model
{
    /**
     * @var PLL_Translation_Content
     */
    protected $translate_content;
    /**
     * @var PLL_Translation_Post_Metas
     */
    protected $translate_post_metas;
    /**
     * @var PLL_Sync_Content
     */
    protected $sync_content;
    /**
     * Used to query languages and translations.
     *
     * @var PLL_Model
     */
    protected $model;
    /**
     * @var PLL_Sync
     */
    protected $sync;
    /**
     * @var PLL_Sync_Post_Model
     */
    protected $sync_post_model;
    /**
     * Service to manage user capabilities, espcecially 'unfiltered_html'.
     *
     * @var PLL_Manage_User_Capabilities
     */
    protected $user_capabilities_manager;
    /**
     * Constructor.
     *
     * @since 3.3
     *
     * @param PLL_Settings|PLL_Admin $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Translates a post in a given language.
     *
     * @since 3.3
     *
     * @param  array        $entry           Properties array of an entry.
     * @param  PLL_Language $target_language A language to translate into.
     * @return int The translated post ID, 0 on failure.
     */
    public function translate_post($entry, $target_language)
    {
    }
    /**
     * Creates a new post translation.
     *
     * @since 3.3
     *
     * @param array        $data_import {
     *    Import options.
     *    string $post_status The post status of the imported posts.
     * }.
     * @param WP_Post      $source_post     The source post object.
     * @param PLL_Language $target_language The language to translate into.
     * @return int The translated post ID, 0 on failure.
     */
    protected function create_post_translation($data_import, $source_post, $target_language)
    {
    }
    /**
     * Saves the translations group.
     *
     * @since 3.3
     *
     * @param int    $from_id The post source id.
     * @param int    $tr_id   The translated post id.
     * @param string $lang    The language slug of the translated post.
     * @return void
     */
    protected function save_translations_group($from_id, $tr_id, $lang)
    {
    }
    /**
     * Updates an existing post translation.
     *
     * @since 3.3
     *
     * @param WP_Post      $source_post     The source post object.
     * @param WP_Post      $tr_post         The translated post object.
     * @param PLL_Language $target_language The language to translate into.
     * @return int The translated post ID, 0 on failure.
     */
    protected function update_post_translation($source_post, $tr_post, $target_language)
    {
    }
    /**
     * Translates all content type of a post (i.e. title, excerpt and content).
     *
     * @since 3.3
     *
     * @param WP_Post      $source_post     The source post object.
     * @param WP_Post      $tr_post         The translated post object.
     * @param PLL_Language $target_language The language to translate into.
     * @return WP_Post|int The translated post object populated with new data. 0 otherwise.
     */
    protected function translate_content($source_post, $tr_post, $target_language)
    {
    }
    /**
     * Copy the source post data in the translated post.
     *
     * @since 3.3
     * @since 3.4 Renamed from `clone_source_post` and added second parameter `$tr_post`.
     *
     * @param WP_Post $source_post The Source Post.
     * @param WP_Post $tr_post     The translated Post.
     * @return WP_Post The translated post.
     */
    protected function copy_source_post($source_post, $tr_post)
    {
    }
    /**
     * Translates post parent if there is one.
     *
     * @since 3.3
     *
     * @param int[]        $post_ids Array of source post ids.
     * @param PLL_Language $language The target language.
     * @return void
     */
    public function translate_parent_for_posts(array $post_ids, \PLL_Language $language)
    {
    }
    /**
     * Filters default query arguments when checking if a term exists.
     * In `term_exists()`, WP 6.0 uses `get_terms()`, which is filtered by language by Polylang.
     * This filter prevents `term_exists()` to be filtered by language.
     * Copied from PLL_Filters::term_exists_default_query_args
     *
     * @since 3.3
     *
     * @param array      $defaults An array of arguments passed to get_terms().
     * @param int|string $term     The term to check. Accepts term ID, slug, or name.
     * @param string     $taxonomy The taxonomy name to use. An empty string indicates the search is against all taxonomies.
     * @return array
     */
    public function term_exists_default_query_args($defaults, $term, $taxonomy)
    {
    }
    /**
     * Unsynchronizes translated post from the source.
     *
     * @since 3.3
     *
     * @param int          $source_post_id  Source post ID.
     * @param int          $target_post_id  Translated post ID.
     * @param PLL_Language $target_language Translated post language object.
     * @return void
     */
    protected function maybe_unsync_posts($source_post_id, $target_post_id, $target_language)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Translation_Term_Metas
 *
 * @since 3.3
 *
 * Translate term metas from a set of translation entries.
 */
class PLL_Translation_Term_Metas extends \PLL_Translation_Metas
{
    /**
     * The PLL_Translation_Term_Metas constructor that allows to define the meta type.
     *
     * @since 3.3
     *
     * @param PLL_Sync_Term_Metas $sync_metas Object to manage copied term metas during import.
     */
    public function __construct(\PLL_Sync_Term_Metas $sync_metas)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Translate post taxonomies from a set of translation entries.
 *
 * @since 3.3
 */
class PLL_Translation_Term_Model
{
    /**
     * PLL_Translation_Term_Model constructor.
     *
     * @since 3.3
     *
     * @param PLL_Settings|PLL_Admin $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Setter for translations.
     *
     * @since 3.3
     *
     * @param PLL_Translations_Identified $translations A set of translations to search the metas translations in.
     * @return void
     */
    public function set_translations($translations)
    {
    }
    /**
     * Translates a term.
     *
     * @since 3.3
     *
     * @param array        $entry    Properties array of an entry.
     * @param PLL_Language $language The target language.
     * @return int The translated term id, 0 on failure.
     */
    public function translate_term($entry, $language)
    {
    }
    /**
     * Translates term parent if there is one.
     *
     * @since 3.3
     *
     * @param int[]        $term_ids Array of source term ids.
     * @param PLL_Language $language The target language.
     * @return void
     */
    public function translate_parent_for_terms(array $term_ids, \PLL_Language $language)
    {
    }
    /**
     * Filters the currently inserted term language
     * to allow sharing the same slug or to suffix it.
     *
     * @since 3.3
     *
     * @param PLL_Language|null $language Already found language object, null in none was found.
     * @param string            $taxonomy Currently inserted term taxonomy.
     * @return PLL_Language|null Overridden language object.
     */
    public function set_language_for_term_slug($language, $taxonomy)
    {
    }
    /**
     * Filters the inserted term ID parent during translation.
     *
     * @since 3.3
     *
     * @return int Term parent ID.
     */
    public function get_inserted_term_parent()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Translation_Walker_Interface
 *
 * Define interface for classes that iterate over content.
 *
 * @since 3.3
 */
interface PLL_Translation_Walker_Interface
{
    /**
     * Iterates over each translatable part of a content and applies a callback function on each part.
     *
     * @since 3.3
     *
     * @param callable $callback A callback function.
     * @return string The content (potentially) modified by the callback.
     */
    public function walk($callback);
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Content_Walker_Blocks
 *
 * @since 3.3
 *
 * Walk a block composed content to apply a translation callback on every translatable parts.
 */
class PLL_Translation_Walker_Blocks implements \PLL_Translation_Walker_Interface
{
    /**
     * Placeholder for inner blocks, used in exported contents.
     *
     * @var string
     */
    const BLOCK_PLACEHOLDER = '<pre>Polylang placeholder do not modify</pre>';
    /**
     * PLL_Content_Walker_Blocks constructor.
     *
     * @since 3.3
     *
     * @param string $content An original (post?) content.
     */
    public function __construct($content)
    {
    }
    /**
     * Walks through the blocks and nested blocks to apply a callback on every one of them.
     *
     * @since 3.3
     *
     * @param callable $callback A callable to be applied on each block.
     * @return string The walked content, eventually transformed by the callback.
     */
    public function walk($callback)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Translation_Walker_Classic
 *
 * @since 3.3
 *
 * Applies a callback over an HTML formatted string.
 */
class PLL_Translation_Walker_Classic implements \PLL_Translation_Walker_Interface
{
    /**
     * PLL_Content_Walker_Classic constructor.
     *
     * @since 3.3
     *
     * @param string   $content                   Classic editor HTML content.
     * @param string[] $non_translatable_contents List of contents that are not translatable, like placeholders.
     */
    public function __construct($content, array $non_translatable_contents = array())
    {
    }
    /**
     * Applies the defined callback on the content, and then returns a transformed content.
     *
     * @since 3.3
     *
     * @param callable $callback A transformation to apply to the content, whether it is for export or import.
     * @return string
     */
    public function walk($callback)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Translation_Walker_Factory
 *
 * A factory to create a translation walker with a given content.
 *
 * @since 3.3
 */
class PLL_Translation_Walker_Factory
{
    /**
     * Generates the correct walker class for the content to be walked.
     *
     * @since 3.3
     *
     * @param string $content A content to iterate over.
     * @return PLL_Translation_Walker_Interface
     */
    public static function create_from($content)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Translations_Identified
 *
 * Extends a Translations object, and allows to add entries with the PLL_Translation_Entry_Identified class.
 *
 * @since 3.3
 */
class PLL_Translations_Identified extends \Translations
{
    /**
     * Clone the parent method and use PLL_Translation_Entry_Identified instead of Translation_Entry.
     *
     * @see https://github.com/WordPress/WordPress/blob/6.0/wp-includes/pomo/translations.php#L24
     *
     * @since 3.3
     *
     * @param array|PLL_Translation_Entry_Identified $entry An entry (or an array with entry's data)
     *                                                      to add to the set of translations entries.
     * @return bool true on success, false if the entry doesn't have a key
     */
    public function add_entry($entry)
    {
    }
    /**
     * Clone the parent method and use PLL_Translation_Entry_Identified instead of Translation_Entry.
     *
     * @see https://github.com/WordPress/WordPress/blob/6.0/wp-includes/pomo/translations.php#L40
     *
     * @since 3.3
     *
     * @param array|PLL_Translation_Entry_Identified $entry An entry (or an array with entry's data)
     *                                                      to add to the set of translations entries.
     * @return bool
     */
    public function add_entry_or_merge($entry)
    {
    }
}
/**
 * @package Polylang-Pro
 *
 * @since 3.1
 */
/**
 * Class PLL_Import_Xliff_Iterator
 *
 * @since 3.1
 */
class PLL_Import_Xliff_Iterator implements \RecursiveIterator
{
    /**
     * PLL_Import_Xliff_Iterator constructor.
     *
     * @since 3.1
     *
     * @param DOMNodeList $nodes Nodes.
     */
    public function __construct($nodes)
    {
    }
    /**
     * Replace the cursor at position 0.
     *
     * @since 3.1
     *
     * @return int|void offset.
     */
    #[\ReturnTypeWillChange]
    public function rewind()
    {
    }
    /**
     * Get the current element.
     *
     * @since 3.1
     *
     * @return DOMNode|null
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
    }
    /**
     * Get the key.
     *
     * @since 3.1
     *
     * @return mixed|string
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
    }
    /**
     * Place the cursor to the next element.
     *
     * @since 3.1
     *
     * @return int|void
     */
    #[\ReturnTypeWillChange]
    public function next()
    {
    }
    /**
     * Check the node validity.
     *
     * @since 3.1
     *
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function valid()
    {
    }
    /**
     * Check if the node has children.
     *
     * @since 3.1
     *
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function hasChildren()
    {
    }
    /**
     * Get the node's children
     *
     * @since 3.1
     *
     * @return RecursiveIterator
     */
    #[\ReturnTypeWillChange]
    public function getChildren()
    {
    }
}
/**
 * @package Polylang-Pro
 *
 * @since 3.1
 */
/**
 * Xliff file, generated from exporting Polylang translations
 *
 * Use set_source_reference before settings adding translations entries for that reference
 *
 * @since 2.7
 */
class PLL_Xliff_Export extends \PLL_Export_File
{
    /**
     * @var DOMAttr
     */
    protected $source_language;
    /**
     * @var DOMAttr
     */
    protected $target_language;
    /**
     * Declares xml version
     *
     * @since 3.1
     *
     * Creates the root element for the document
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Set a source language to the file
     *
     * @since 3.1
     *
     * @param string $source_language A valid W3C locale.
     */
    public function set_source_language($source_language)
    {
    }
    /**
     * Retrieves the file's source language
     *
     * @since 3.1
     *
     * @return string A language locale.
     */
    public function get_source_language()
    {
    }
    /**
     * Set one target languages to the file
     *
     * @since 3.1
     *
     * @param string $target_language A valid W3C locale.
     */
    public function set_target_language($target_language)
    {
    }
    /**
     * Retrieves the file's target language
     *
     * @since 3.1
     *
     * @return string A language locales.
     */
    public function get_target_language()
    {
    }
    /**
     * Add a translation unit to the current translation group
     *
     * @since 3.1
     *
     * First verifies that the passed parameter are correct.
     *
     * @throws LogicException If no source object is referenced before hand, @see PLL_Xliff_Export::set_source_reference() .
     * @throws InvalidArgumentException If no source data is passed to the function, it cannot translate anything.
     * @param string $type Additional info to help the translation.
     * @param string $source Translation source.
     * @param string $target Translation target.
     * @param array  $args Extra data for the context.
     * @return DOMElement The trans-unit node created
     */
    public function add_translation_entry($type, $source, $target = '', $args = array())
    {
    }
    /**
     * Assign a reference to the resource used to create the translation group
     *
     * @since 3.1
     *
     * A new translation group is then created each time this function is called
     *
     * @throws InvalidArgumentException Exception.
     * @param string $type The type of WordPress objects used.
     * @param string $id (optional) An id used to identify the object / row in database.
     * @return void
     */
    public function set_source_reference($type, $id = '')
    {
    }
    /**
     * Writes the document into a file
     *
     * @since 3.1
     *
     * @throws Exception When no document has previously been created, throws an exception.
     * @return string|false An XML formatted string.
     */
    public function export()
    {
    }
    /**
     * @since 3.1
     *
     * @return string
     */
    public function get_extension()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Xliff_Format
 *
 * @since 3.1
 *
 * Manage support for the xliff file format
 */
class PLL_Xliff_Format extends \PLL_File_Format
{
    /**
     * @var string
     */
    public $extension = 'xliff';
    /**
     * @var string[]
     */
    public $mime_type = array('xlf|xliff' => 'text/xml');
    /**
     * PLL_Xliff_Format constructor.
     *
     * @since 3.1
     */
    public function __construct()
    {
    }
    /**
     * Whether the xliff format is supported or not by the current environment.
     *
     * @since 3.1
     *
     * @return true|WP_Error
     */
    public function is_supported()
    {
    }
    /**
     * Returns the associated import class.
     *
     * @since 3.1
     *
     * @return PLL_Xliff_Import
     */
    public function get_import()
    {
    }
    /**
     * Returns the associated export class.
     *
     * @since 3.1
     *
     * @return PLL_Xliff_Export
     */
    public function get_export()
    {
    }
}
/**
 * @package Polylang-Pro
 *
 * @since 3.1
 */
/**
 * Class PLL_Xliff_Import
 *
 * @since 3.1
 *
 * This class uses PHP built in DOMDocument.
 *
 * @link https://www.php.net/manual/en/book.dom.php
 * @uses libxml
 */
class PLL_Xliff_Import implements \PLL_Import_File_Interface
{
    /**
     * The imported file name.
     *
     * @var string
     */
    protected $filename;
    /**
     * Imports translations from a file.
     *
     * @since 3.1
     *
     * @param string $filename The file's name.
     *
     * @return WP_Error|true True if no problem occurs during file import.
     */
    public function import_from_file($filename)
    {
    }
    /**
     * Get target language
     *
     * @since 3.1
     *
     * @return string|false
     */
    public function get_target_language()
    {
    }
    /**
     * Get site reference
     *
     * @since 3.1
     *
     * @return string|false
     */
    public function get_site_reference()
    {
    }
    /**
     * Returns the reference to the name of the application that generated the file.
     *
     * @since 3.3
     *
     * @return string The application name. An empty string if it couldn't be found.
     */
    public function get_generator_name()
    {
    }
    /**
     * Returns the reference to the version of the application that generated the file.
     *
     * @since 3.3
     *
     * @return string The application version. An empty string if it couldn't be found or the name of the application.
     *                couldn't be found.
     */
    public function get_generator_version()
    {
    }
    /**
     * Get the next term, post or string translations to import.
     *
     * @since 3.1
     *
     * @return array {
     *     string       $type Either 'post', 'term' or 'string_translations'
     *     int          $id   Id of the object in the database (if applicable)
     *     Translations $data Objects holding all the retrieved Translations
     * }
     */
    public function get_next_entry()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Allows to load a fallback translation file if a translation doesn't exist in the current locale.
 *
 * @since 2.9
 */
class PLL_Locale_Fallback
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Setups actions and filters
     *
     * @since 2.9
     *
     * @param object $polylang Polylang object.
     * @return void
     */
    public function init(&$polylang)
    {
    }
    /**
     * Adds the locale fallbacks to the language data.
     *
     * @since 3.4
     *
     * @param mixed[] $add_data Data to add.
     * @param mixed[] $args     {
     *     Arguments used to create the language.
     *
     *     @type string $name       Language name (used only for display).
     *     @type string $slug       Language code (ideally 2-letters ISO 639-1 language code).
     *     @type string $locale     WordPress locale. If something wrong is used for the locale, the .mo files will
     *                              not be loaded...
     *     @type int    $rtl        1 if rtl language, 0 otherwise.
     *     @type int    $term_group Language order when displayed.
     *     @type int    $lang_id    Optional, ID of the language to modify. An empty value means the language is
     *                              being created.
     *     @type string $flag       Optional, country code, {@see settings/flags.php}.
     * }
     * @return mixed[]
     */
    public function add_locale_fallback_to_language_metas($add_data, $args)
    {
    }
    /**
     * Attempts to load the translation in the fallback locale if it doesn't exist in the current locale.
     *
     * @since 2.9
     *
     * @param  string|false $file Translation file name.
     * @return string|false
     */
    public function load_file($file)
    {
    }
    /**
     * Outputs the locale fallbacks when editing a language.
     *
     * @since 2.9
     *
     * @param PLL_Language $edit_lang Language being edited.
     * @return void
     */
    public function edit_language_form_fields($edit_lang)
    {
    }
    /**
     * Outputs an empty locale fallbacks field when adding a language.
     *
     * @since 2.9
     *
     * @return void
     */
    public function add_language_form_fields()
    {
    }
    /**
     * Allows to update translations files for plugins and themes.
     *
     * @since 2.9
     *
     * @param string[] $locales List of locales to update.
     * @return string[]
     */
    public function update_check_locales($locales)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Advanced media functionalities
 *
 * @since 1.9
 */
class PLL_Admin_Advanced_Media
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * @var PLL_CRUD_Posts
     */
    public $posts;
    /**
     * Constructor: setups filters and actions
     *
     * @since 1.9
     * @since 2.7 Now registers an option for the Translate bulk action.
     *
     * @param PLL_Admin $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Disables the duplication if we are uploading a plugin or theme.
     *
     * @since 3.0
     *
     * @param array $data    An array of slashed, sanitized, and processed attachment post data, unused.
     * @param array $postarr An array of slashed and sanitized attachment post data, but not processed.
     * @return array Unmodified $data.
     */
    public function attachment_data($data, $postarr)
    {
    }
    /**
     * Creates media translations each time a new media is uploaded
     *
     * @since 1.9
     *
     * @param int $post_id The id of the attachment to duplicate.
     * @return void
     */
    public function duplicate_media($post_id)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Duplicates medias in Bulk Translate actions
 *
 * @since 2.7
 */
class PLL_Media_Bulk_Option extends \PLL_Bulk_Translate_Option
{
    /**
     * PLL_Media_Bulk_Action constructor.
     *
     * @since 2.7
     *
     * @param array          $args {
     *     string $name
     *     string $description
     * }.
     * @param PLL_Model      $model An instance to the current PLL_Model.
     * @param PLL_CRUD_Posts $posts Used to create translations.
     */
    public function __construct($args, $model, $posts)
    {
    }
    /**
     * Checks whether the option should be selectable by the user.
     *
     * @since 2.7
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Duplicates a media object
     *
     * @since 2.7
     *
     * @param int    $object_id The media id.
     * @param string $lang A language locale.
     * @return void
     */
    public function translate($object_id, $lang)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Base class for all settings
 *
 * @since 1.8
 */
class PLL_Settings_Module
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Model
     */
    public $links_model;
    /**
     * Stores if the module is active.
     *
     * @var bool
     */
    public $active_option;
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 100;
    /**
     * Stores the module name.
     * It must be unique.
     *
     * @var string|null
     */
    public $module;
    /**
     * Stores the module title.
     *
     * @var string
     */
    public $title;
    /**
     * Stores the module description.
     *
     * @var string
     */
    public $description;
    /**
     * Stores the settings actions.
     *
     * @var array
     */
    protected $action_links;
    /**
     * Stores html fragment for the buttons.
     *
     * @var array
     */
    protected $buttons;
    /**
     * Stores html form when provided by a child class.
     *
     * @var string|false
     */
    protected $form = \false;
    /**
     * Constructor
     *
     * @since 1.8
     *
     * @param object $polylang Polylang object
     * @param array  $args
     */
    public function __construct(&$polylang, $args)
    {
    }
    /**
     * Tells if the module is active
     *
     * @since 1.8
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Activates the module
     *
     * @since 1.8
     *
     * @return void
     */
    public function activate()
    {
    }
    /**
     * Deactivates the module
     *
     * @since 1.8
     *
     * @return void
     */
    public function deactivate()
    {
    }
    /**
     * Protected method to display a configuration form
     *
     * @since 1.8
     *
     * @return void
     */
    protected function form()
    {
    }
    /**
     * Public method returning the form if any
     *
     * @since 1.8
     *
     * @return string
     */
    public function get_form()
    {
    }
    /**
     * Allows child classes to validate their options before saving
     *
     * @since 1.8
     *
     * @param array $options Raw options
     * @return array Options
     */
    protected function update($options)
    {
    }
    /**
     * Ajax method to save the options
     *
     * @since 1.8
     *
     * @return void
     */
    public function save_options()
    {
    }
    /**
     * Get the row actions.
     *
     * @since 1.8
     *
     * @return string[]
     */
    protected function get_actions()
    {
    }
    /**
     * Get the actions links.
     *
     * @since 1.8
     *
     * @return string[] Action links.
     */
    public function get_action_links()
    {
    }
    /**
     * Default upgrade message ( to Pro version )
     *
     * @since 1.9
     *
     * @return string
     */
    protected function default_upgrade_message()
    {
    }
    /**
     * Allows child classes to display an upgrade message
     *
     * @since 1.9
     *
     * @return string
     */
    public function get_upgrade_message()
    {
    }
    /**
     * Get the buttons.
     *
     * @since 1.9
     *
     * @return string[] An array of html fragment for the buttons.
     */
    public function get_buttons()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Settings class for media language and translation management
 * Advanced version
 *
 * @since 1.9
 */
class PLL_Settings_Advanced_Media extends \PLL_Settings_Module
{
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 30;
    /**
     * Constructor
     *
     * @since 1.9
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Displays the settings form
     *
     * @since 1.9
     *
     * @return void
     */
    protected function form()
    {
    }
    /**
     * Sanitizes the settings before saving
     *
     * @since 1.9
     *
     * @param array $options Raw options to save.
     * @return array Sanitized options.
     */
    protected function update($options)
    {
    }
    /**
     * Get the row actions
     *
     * @since 1.9
     *
     * @return string[]
     */
    protected function get_actions()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Setup the REST API endpoints and filters
 *
 * @since 2.2
 */
class PLL_REST_API
{
    /**
     * @var PLL_REST_Post
     */
    public $post;
    /**
     * @var PLL_REST_Term
     */
    public $term;
    /**
     * @var PLL_FSE_REST_Template|null
     */
    public $template;
    /**
     * @var PLL_REST_Comment
     */
    public $comment;
    /**
     * @var PLL_Admin_Links
     */
    public $links;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * List of translatable post types.
     *
     * @var array
     */
    protected $post_types;
    /**
     * Constructor
     *
     * @since 2.2
     *
     * @param object $polylang Instance of PLL_REST_Request
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Init filters and new endpoints
     *
     * @since 2.2
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Retrieves the query params for the untranslated posts collection.
     *
     * @since 2.6.0
     *
     * @return array Collection parameters.
     */
    public function get_untranslated_posts_collection_params()
    {
    }
    /**
     * Returns a list of posts not translated in a language
     *
     * @since 2.6.0
     *
     * @param WP_REST_Request $request REST API request
     * @return array
     */
    public function get_untranslated_posts(\WP_REST_Request $request)
    {
    }
    /**
     * Returns the list of available languages specifying the default language.
     *
     * @since 3.2
     *
     * @return array[] List of PLL_Language objects
     * @phpstan-return array<int, array<string, mixed>>
     */
    public function get_languages_list()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Filters comments in the REST API.
 *
 * @since 2.6.9
 */
class PLL_REST_Comment extends \PLL_REST_Filtered_Object
{
    /**
     * Constructor.
     *
     * @since 2.6.9
     *
     * @param PLL_REST_API $rest_api Instance of PLL_REST_API.
     */
    public function __construct(&$rest_api)
    {
    }
    /**
     * Filters the query per language according to the 'lang' parameter.
     *
     * @since 2.6.9
     *
     * @param WP_Comment_Query $query Comment query.
     * @return void
     */
    public function parse_comment_query($query)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Expose terms language and translations in the REST API
 *
 * @since 2.2
 */
class PLL_REST_Term extends \PLL_REST_Translated_Object
{
    /**
     * Constructor
     *
     * @since 2.2
     *
     * @param object $rest_api      Instance of PLL_REST_API
     * @param array  $content_types Array of arrays with taxonomies as keys and options as values
     */
    public function __construct(&$rest_api, $content_types)
    {
    }
    /**
     * Filters the query per language according to the 'lang' parameter
     *
     * @since 2.6.9
     *
     * @param array $args WP_Term_Query arguments.
     * @return array
     */
    public function get_terms_args($args)
    {
    }
    /**
     * Get the rest field type for a content type
     *
     * @since 2.3.11
     *
     * @param string $type Taxonomy name
     * @return string REST API field type
     */
    protected function get_rest_field_type($type)
    {
    }
    /**
     * Creates the term slug in case the term already exists in another language
     * to allow it to share the same slugs as terms in other languages.
     *
     * @since 3.2
     *
     * @param string $slug     The inputed slug of the term being saved, may be empty.
     * @param string $taxonomy The term taxonomy.
     * @return string
     */
    public function pre_term_slug($slug, $taxonomy)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to advertize the Share slugs module.
 *
 * @since 1.9
 * @since 3.1 Renamed from PLL_Settings_Share_Slug.
 */
class PLL_Settings_Preview_Share_Slug extends \PLL_Settings_Module
{
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 70;
    /**
     * Constructor.
     *
     * @since 1.9
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Returns the module description.
     *
     * @since 3.1
     *
     * @return string
     */
    protected function get_description()
    {
    }
    /**
     * Tells if the module is active.
     *
     * @since 1.9
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Displays an upgrade message.
     *
     * @since 1.9
     *
     * @return string
     */
    public function get_upgrade_message()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Settings class to display information for the Share slugs module.
 *
 * @since 3.1
 */
class PLL_Settings_Share_Slug extends \PLL_Settings_Preview_Share_Slug
{
    /**
     * Constructor.
     *
     * @since 3.1
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Returns the module description.
     *
     * @since 3.1
     *
     * @return string
     */
    protected function get_description()
    {
    }
    /**
     * Tells if the module is active.
     *
     * @since 1.9
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Avoid displaying the upgrade message.
     *
     * @since 1.9
     *
     * @return string
     */
    public function get_upgrade_message()
    {
    }
    /**
     * Displays the javascript to handle dynamically the change in url modifications
     * as sharing slugs is not possible when the language is set from the content
     *
     * @since 1.9
     *
     * @return void
     */
    public function print_js()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Base class to manage shared slugs for posts
 *
 * @since 1.9
 */
class PLL_Share_Post_Slug
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * @var PLL_Links_Model
     */
    public $links_model;
    /**
     * The current language.
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Constructor
     *
     * @since 1.9
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Modifies the query object when a page is queried by slug and language
     * This must be the first function hooked to 'parse_query' to run so that others get the right queried page
     *
     * @since 1.9
     *
     * @param WP_Query $query Reference to a WP_Query object.
     * @return void
     */
    public function parse_query($query)
    {
    }
    /**
     * Retrieves a page given its path.
     * This is the same function as WP get_page_by_path()
     * Rewritten to make it language dependent
     *
     * @since 1.9
     *
     * @param string          $page_path Page path.
     * @param string          $lang      Language slug.
     * @param string          $output    Optional. Output type. Accepts OBJECT, ARRAY_N, or ARRAY_A. Default OBJECT.
     * @param string|string[] $post_type Optional. Post type or array of post types. Default 'page'.
     * @return WP_Post|mixed[]|null WP_Post on success or null on failure.
     *
     * @phpstan-param non-empty-string $lang
     * @phpstan-return array<int|string, mixed>|WP_Post|null
     */
    protected function get_page_by_path($page_path, $lang, $output = \OBJECT, $post_type = 'page')
    {
    }
    /**
     * Adds our join clause to sql query.
     * Useful when querying a post by name.
     *
     * @since 1.9
     *
     * @param string   $join  Original join clause.
     * @param WP_Query $query The WP_Query object.
     * @return string Modified join clause.
     */
    public function posts_join($join, $query)
    {
    }
    /**
     * Adds our where clause to sql query.
     * Useful when querying a post by name.
     *
     * @since 1.9
     *
     * @param string   $where Original where clause.
     * @param WP_Query $query The WP_Query object.
     * @return string Modified where clause.
     */
    public function posts_where($where, $query)
    {
    }
    /**
     * Checks if the query must be filtered or not
     *
     * @since 1.9
     *
     * @param WP_Query $query The WP_Query object.
     * @return PLL_Language|false The language to use for the filter, false if the query should be kept unfiltered.
     */
    protected function get_language_for_filter($query)
    {
    }
    /**
     * Checks if the slug is unique within language.
     * Thanks to @AndyDeGroo for https://wordpress.org/support/topic/plugin-polylang-identical-page-names-in-different-languages?replies=8#post-2669927
     * Thanks to Ulrich Pogson for https://github.com/grappler/polylang-slug/blob/master/polylang-slug.php
     *
     * @since 1.9
     *
     * @param string $slug          The slug defined by wp_unique_post_slug in WP
     * @param int    $post_ID       The post id.
     * @param string $post_status   Not used.
     * @param string $post_type     The Post type.
     * @param int    $post_parent   The id of the post parent.
     * @param string $original_slug The original slug before it is modified by wp_unique_post_slug in WP.
     * @return string Original slug if it is unique in the language or the modified slug otherwise.
     */
    public function wp_unique_post_slug($slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug)
    {
    }
    /**
     * Updates the attachment slug when creating a translation to allow to share slugs
     * This second step is needed because wp_unique_post_slug is called before the language is set
     *
     * @since 1.9
     *
     * @param int $post_id Original attachment id.
     * @param int $tr_id   Translated attachment id.
     * @return void
     */
    public function pll_translate_media($post_id, $tr_id)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Base class for managing shared slugs for taxonomy terms
 *
 * @since 1.9
 */
class PLL_Share_Term_Slug
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Model
     */
    public $links_model;
    /**
     * Used to trick WordPress by setting
     * a transitory unique term slug.
     *
     * @var string
     */
    const TERM_SLUG_SEPARATOR = '___';
    /**
     * Constructor
     *
     * @since 1.9
     *
     * @param PLL_Base $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Will make slug unique per language and taxonomy
     * Mostly taken from wp_unique_term_slug
     *
     * @since 1.9
     *
     * @param string  $slug The string that will be tried for a unique slug.
     * @param string  $lang Language slug.
     * @param WP_Term $term The term object that the $slug will belong too.
     * @return string Will return a true unique slug.
     */
    protected function unique_term_slug($slug, $lang, $term)
    {
    }
    /**
     * Ugly hack to enable the same slug in several languages
     *
     * @since 1.9
     *
     * @param int    $term_id  The term id of a saved term.
     * @param int    $tt_id    The term taxononomy id.
     * @param string $taxonomy The term taxonomy.
     * @return void
     */
    public function save_term($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     * Stores the term name to use in 'pre_term_slug'.
     *
     * @since 3.3
     *
     * @param string $name Term name.
     * @return string      Unmodified term name.
     */
    public function set_pre_term_name($name)
    {
    }
    /**
     * Appends language slug to the term slug if needed.
     *
     * @since 3.3
     *
     * @param string $slug     Term slug.
     * @param string $taxonomy Term taxonomy.
     * @return string Slug with a language suffix if found.
     */
    public function set_pre_term_slug($slug, $taxonomy)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Duplicate or Synchronize post in Bulk Translate action.
 *
 * @since 2.7
 */
class PLL_Sync_Post_Bulk_Option extends \PLL_Bulk_Translate_Option
{
    /**
     * Constructor.
     *
     * @since 2.7
     *
     * @param array               $args       An array of options, mainly for synchronizing the post.
     * @param PLL_Model           $model      An instance the current Polylang Model.
     * @param PLL_Sync_Post_Model $sync_model Used to perform synchronization operations.
     */
    public function __construct($args, $model, $sync_model)
    {
    }
    /**
     * Checks whether the option should be selectable by the user.
     *
     * @since 2.7
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Duplicates or Synchronize the given post, depending on the value of {@see PLL_Sync_Post_Bulk_Action::$synchronize}
     *
     * @since 2.7
     *
     * @param int    $object_id Identifies a post to duplicate or synchronize.
     * @param string $lang      A language locale.
     */
    public function translate($object_id, $lang)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Buttons for posts synchronization
 *
 * @since 2.1
 */
class PLL_Sync_Post_Button extends \PLL_Metabox_Button
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * @var PLL_Sync_Post_Model
     */
    protected $sync_model;
    /**
     * The language corresponding to the button.
     *
     * @var PLL_Language
     */
    protected $language;
    /**
     * Constructor
     *
     * @since 2.1
     *
     * @param PLL_Sync_Post_Model $sync_model An instance of PLL_Sync_Post_Model.
     * @param PLL_Language        $language   The language.
     */
    public function __construct($sync_model, $language)
    {
    }
    /**
     * Displays the button
     *
     * @since 2.6
     *
     * @param string $post_type The current post type.
     * @return void
     */
    public function add_icon($post_type)
    {
    }
    /**
     * Tells whether the button is active or not
     *
     * @since 2.1
     *
     * @return bool
     */
    public function is_active()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Model for synchronizing posts
 *
 * @since 2.6
 */
class PLL_Sync_Post_Model
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * @var PLL_Sync
     */
    public $sync;
    /**
     * @var PLL_Sync_Content
     */
    public $sync_content;
    /**
     * Stores temporary a synchronization information.
     *
     * @var array
     */
    protected $temp_synchronized;
    /**
     * Constructor
     *
     * @since 2.6
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Copies all taxonomies.
     *
     * @since 2.1
     *
     * @param string[] $taxonomies List of taxonomy names.
     * @param bool     $sync       True for a synchronization, false for a simple copy.
     * @param int      $from       Source post id.
     * @param int      $to         Target post id.
     * @return string[]
     */
    public function copy_taxonomies($taxonomies, $sync, $from, $to)
    {
    }
    /**
     * Copies all custom fields.
     *
     * @since 2.1
     *
     * @param string[] $keys List of custom fields names.
     * @param bool     $sync True if it is synchronization, false if it is a copy.
     * @param int      $from Id of the post from which we copy the information.
     * @param int      $to   Id of the post to which we paste the information.
     * @return string[]
     */
    public function copy_post_metas($keys, $sync, $from, $to)
    {
    }
    /**
     * Checks if the synchronized post is included in bulk trashing or restoring posts
     *
     * @since 2.1.2
     *
     * @param int $post_id Id of the target post.
     * @return bool
     */
    protected function doing_bulk_trash($post_id)
    {
    }
    /**
     * Duplicates the post to one language and optionally saves the synchronization group
     *
     * @since 2.2
     *
     * @param int    $post_id    Post id of the source post.
     * @param string $lang       Target language slug.
     * @param bool   $save_group True to update the synchronization group, false otherwise.
     * @return int Id of the target post, 0 on failure.
     */
    public function copy_post($post_id, $lang, $save_group = \true)
    {
    }
    /**
     * Saves the synchronization group
     * This is stored as an array beside the translations in the post_translations term description
     *
     * @since 2.1
     *
     * @param int   $post_id   Id of the post currently being saved
     * @param array $sync_post Array of languages to sync with this post.
     * @return void
     */
    public function save_group($post_id, $sync_post)
    {
    }
    /**
     * Get all posts synchronized with a given post
     *
     * @since 2.1
     *
     * @param int $post_id The id of the post.
     * @return array An associative array of arrays with language code as key and post id as value.
     */
    public function get($post_id)
    {
    }
    /**
     * Checks whether two posts are synchronized
     *
     * @since 2.1
     *
     * @param int $post_id  The id of a first post to compare.
     * @param int $other_id The id of the other post to compare.
     * @return bool
     */
    public function are_synchronized($post_id, $other_id)
    {
    }
    /**
     * Check if the current user can synchronize a post in other language
     *
     * @since 2.6
     *
     * @param int    $post_id Post to synchronize.
     * @param string $lang    Language code.
     * @return bool
     */
    public function current_user_can_synchronize($post_id, $lang)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Manages the synchronization of posts across languages through the REST API
 *
 * @since 2.6
 */
class PLL_Sync_Post_REST
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * @var PLL_Sync_Post_Model
     */
    public $sync_model;
    /**
     * Constructor
     *
     * @since 2.6
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Register the 'pll_sync_post' REST field
     *
     * @since 2.6
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Returns the object synchronizations
     *
     * @since 2.4
     *
     * @param array $object Arry of post properties.
     * @return array
     */
    public function get_synchronizations($object)
    {
    }
    /**
     * Update the post synchronization group
     *
     * @since 2.6
     *
     * @param array  $sync_post Array of synchronizations with language code as key and 'true' as value.
     * @param object $object    The WP_Post object.
     * @return bool
     */
    public function sync_posts($sync_post, $object)
    {
    }
    /**
     * Synchronize posts
     *
     * @since 2.6
     *
     * @param WP_Post $post Inserted or updated post object.
     *
     * @return void
     */
    public function after_insert_post($post)
    {
    }
    /**
     * Add information to the translations_table field
     * to check if the user can synchronize the current post.
     *
     * @since 2.6
     *
     * @param array        $datas    Translations table row datas.
     * @param int          $post_id  Post to synchronize.
     * @param PLL_Language $language Language to synchronize.
     * @return array
     */
    public function translations_table($datas, $post_id, $language)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Manages the synchronization of posts across languages
 *
 * @since 2.1
 */
class PLL_Sync_Post
{
    /**
     * @var PLL_Sync_Post_Model
     */
    public $sync_model;
    /**
     * Stores all synchronization buttons.
     *
     * @var PLL_Sync_Post_Button[]
     */
    public $buttons;
    /**
     * Constructor
     *
     * @since 2.1
     * @since 2.7 Registers twos option for the Translate bulk action.
     *
     * @param PLL_Frontend|PLL_Admin|PLL_Settings $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Duplicates the post and saves the synchronization group
     *
     * @since 2.1
     *
     * @param int $post_id The post id.
     * @return void
     */
    public function sync_posts($post_id)
    {
    }
    /**
     *
     * Unsynchronize a post from the post translations group.
     *
     * @since 3.2
     *
     * @param (int|string[])[] $tr       {
     *     List of translations with lang codes as array keys and IDs as array values.
     *     Also in this array:
     *
     *     @type string[] $sync List of synchronized translations with lang codes as array keys and array values.
     * }
     * @param string           $old_slug The old language slug.
     * @param string           $new_slug The new language slug.
     * @return (int|string[])[]
     */
    public function unsync_post($tr, $old_slug, $new_slug)
    {
    }
    /**
     * Some backward compatibility with Polylang < 2.6
     * allows for example to call PLL()->sync_post->are_synchronized() used in Polylang for WooCommerce
     *
     * @since 2.6
     *
     * @param string $func Function name.
     * @param array  $args Function arguments.
     * @return mixed|void
     */
    public function __call($func, $args)
    {
    }
    /**
     * Filter the sticky status of a post.
     *
     * @since 3.2
     *
     * @param bool $is_sticky Whether or not the source post is sticky.
     * @return bool
     */
    public function handle_sticky_post($is_sticky)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Smart copy of post content
 *
 * @since 2.6
 */
class PLL_Sync_Content
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    protected $options;
    /**
     * @var PLL_Model
     */
    protected $model;
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Model
     */
    protected $links_model;
    /**
     * @var PLL_CRUD_Posts
     */
    protected $posts;
    /**
     * The post object to fill with translated data.
     *
     * @var WP_Post
     */
    protected $target_post;
    /**
     * Language of the target post.
     *
     * @var PLL_Language
     */
    protected $target_language;
    /**
     * Language of the source post.
     *
     * @var PLL_Language
     */
    protected $from_language;
    /**
     * Constructor
     *
     * @since 1.9
     *
     * @param PLL_Frontend|PLL_Admin|PLL_Settings|PLL_REST_Request $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Copy the content from one post to the other
     *
     * @since 1.9
     *
     * @param WP_Post             $from_post       The post to copy from.
     * @param WP_Post             $target_post     The post to copy to.
     * @param PLL_Language|string $target_language The language of the post to copy to.
     * @return WP_Post|void
     */
    public function copy_content($from_post, $target_post, $target_language)
    {
    }
    /**
     * Translate shortcodes and <img> attributes in a given text
     *
     * @since 1.9
     * @since 3.3 Requires $target_post, $from_language and $target_language parameters.
     * @global array $shortcode_tags
     *
     * @param string       $content         Text to translate.
     * @param WP_Post      $target_post     The post object to populate with translated content.
     * @param PLL_Language $from_language   The source language .
     * @param PLL_Language $target_language The language to translate to.
     * @return string Translated text
     */
    public function translate_content($content, $target_post, \PLL_Language $from_language, \PLL_Language $target_language)
    {
    }
    /**
     * Duplicates the feature image if the translation does not exist yet.
     *
     * @since 2.3
     *
     * @param int    $id   Thumbnail id.
     * @param string $key  Meta key.
     * @param string $lang Language code.
     * @return int
     */
    public function duplicate_thumbnail($id, $key, $lang)
    {
    }
    /**
     * Duplicates a term if the translation does not exist yet.
     *
     * @since 2.3
     *
     * @param int    $tr_term_id Translated term id.
     * @param int    $term_id    Source term id.
     * @param string $lang       Language slug.
     * @return int The translated term id. O on failure.
     */
    public function duplicate_term($tr_term_id, $term_id, $lang)
    {
    }
    /**
     * Get the media translation id
     * Create the translation if it does not exist
     * Attach the media to the parent post
     *
     * @since 1.9
     *
     * @param int $id Media id
     * @return int Translated media id
     */
    protected function translate_media($id)
    {
    }
    /**
     * Translates the 'gallery' and 'playlist' shortcodes
     *
     * @since 1.9
     *
     * @param array  $attr Shortcode attributes.
     * @param null   $null Shortcode content, not used.
     * @param string $tag  Shortcode tag (either 'gallery' or 'playlist').
     * @return string Translated shortcode.
     */
    public function ids_list_shortcode($attr, $null, $tag)
    {
    }
    /**
     * Translates the caption shortcode
     * Compatible only with the new style introduced in WP 3.4
     *
     * @since 1.9
     *
     * @param array  $attr    Shortcode attrbute
     * @param string $content Shortcode content
     * @param string $tag     Shortcode tag (either 'caption' or 'wp-caption')
     * @return string Translated shortcode
     */
    public function caption_shortcode($attr, $content, $tag)
    {
    }
    /**
     * Translate images and caption in inner html
     *
     * Since 2.5
     *
     * @param string $content HTML string
     * @return string
     */
    protected function translate_html($content)
    {
    }
    /**
     * Translates <img> 'class' and 'alt' attributes
     *
     * @since 1.9
     * @since 2.5 The html is passed by reference and the return value is the image id
     *
     * @param string $text Reference to <img> html with attributes
     * @return null|int Translated image id if exist
     */
    protected function translate_img(&$text)
    {
    }
    /**
     * Recursively translate blocks
     *
     * @since 2.5
     *
     * @param array[] $blocks An array of blocks arrays
     * @return array
     */
    protected function translate_blocks($blocks)
    {
    }
    /**
     * Translates media ids in blocks.
     *
     * @since 3.3
     *
     * @param array $block A representative array of a block.
     * @return array The translated block.
     */
    protected function translate_media_block($block)
    {
    }
    /**
     * Updates the block properties with a translation if it is found.
     *
     * @since 2.9
     *
     * @param array $block An array mimicking the structure of {@see https://github.com/WordPress/WordPress/blob/5.5.1/wp-includes/class-wp-block-parser.php WP_Block_Parser_Block}.
     * @return array The updated array formatted block.
     */
    protected function translate_block_content($block)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Class PLL_Sync_Navigation
 *
 * @since 3.2
 */
class PLL_Sync_Navigation
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     *
     * Reference to the PLL_Sync_Content instance.
     *
     * @var PLL_Sync_Content
     */
    public $sync_content;
    /**
     * Constructor.
     * Setup filters.
     *
     * @since 3.2
     *
     * @param PLL_Frontend|PLL_Admin|PLL_Settings|PLL_REST_Request $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Adds the wp_navigation post type to the list of translatable post types.
     *
     * @since 3.2
     *
     * @param string[] $post_types  List of post types.
     * @param bool     $is_settings True when displaying the list of custom post types in Polylang settings
     * @return string[]
     */
    public function add_post_type($post_types, $is_settings = \false)
    {
    }
    /**
     * Recursively translate blocks
     *
     * @since 3.2
     *
     * @param array[] $blocks        An array of blocks arrays
     * @param string  $language      Slug language of the target post.
     * @param string  $from_language Slug language of the source post.
     * @return array Array of translated blocks.
     */
    public function translate_blocks($blocks, $language, $from_language)
    {
    }
    /**
     * Get the navigation link id.
     *
     * @since 3.2
     *
     * @param int    $id       Navigation link id.
     * @param string $kind     Link type (post-type or taxonomy).
     * @param string $language Slug language of the target post.
     * @return array An array with the untranslated id if the navigation link post type isn't translated, or an array
     *               with the translated id, label and url.
     */
    public function translate_navigation_link($id, $kind, $language)
    {
    }
    /**
     * Get the navigation block translation id.
     * Create the translation if it does not exist.
     *
     * @since 3.2
     *
     * @param int    $id            Navigation block id.
     * @param string $language      Slug language of the target post.
     * @param string $from_language Slug language of the source post.
     * @return false|int|WP_Error   Id of the translated navigation block.
     */
    public function translate_navigation_block($id, $language, $from_language)
    {
    }
    /**
     * Creates a navigation block translation.
     *
     * @since 3.2
     *
     * @param int    $id            The source navigation block ID.
     * @param string $lang          New translation language slug.
     * @param string $from_language Slug language of the source post.
     * @return int|WP_Error ID of the translated navigation block.
     */
    public function create_navigation_block_translation($id, $lang, $from_language)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Modifies links on both frontend and admin side
 *
 * @since 1.9
 */
class PLL_Translate_Slugs
{
    /**
     * @var PLL_Translate_Slugs_Model
     */
    public $slugs_model;
    /**
     * Current language.
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Constructor
     *
     * @since 1.9
     *
     * @param PLL_Translate_Slugs_Model $slugs_model An instance of PLL_Translate_Slugs_Model.
     * @param PLL_Language              $curlang     The Current language.
     */
    public function __construct(&$slugs_model, &$curlang)
    {
    }
    /**
     * Modifies custom post type links.
     *
     * @since 1.9
     *
     * @param string       $url  The post link.
     * @param PLL_Language $lang The post language.
     * @param WP_Post      $post The post object.
     * @return string
     */
    public function pll_post_type_link($url, $lang, $post)
    {
    }
    /**
     * Modifies term links.
     *
     * @since 1.9
     *
     * @param string       $url  The term link.
     * @param PLL_Language $lang The term language.
     * @param WP_Term      $term The term object.
     * @return string
     */
    public function pll_term_link($url, $lang, $term)
    {
    }
    /**
     * Translate the slugs
     *
     * The filter was originally only on frontend but is needed on admin too for
     * compatibility with the archive link of the ACF link field since ACF 5.4.0
     *
     * @since 1.9
     *
     * @param string $link      The link in which we want to translate a slug.
     * @param string $post_type Optional, Post type.
     * @return string Modified link
     */
    public function translate_slug($link, $post_type = '')
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Modifies links on frontend
 *
 * @since 1.9
 */
class PLL_Frontend_Translate_Slugs extends \PLL_Translate_Slugs
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Model
     */
    public $links_model;
    /**
     * Constructor.
     *
     * @since 1.9
     *
     * @param PLL_Translate_Slugs_Model $slugs_model An instance of PLL_Translate_Slugs_Model.
     * @param PLL_Language              $curlang     Current language.
     */
    public function __construct(&$slugs_model, &$curlang)
    {
    }
    /**
     * Translate the slugs in archive urls
     *
     * @since 1.9
     *
     * @param string       $url      The archive url in which want to translat a slug.
     * @param PLL_Language $language The language.
     * @return string Modified url.
     */
    public function pll_get_archive_url($url, $language)
    {
    }
    /**
     * Modifies the canonical url with the translated slugs.
     *
     * @since 1.9
     *
     * @param string       $redirect_url The canonical url to redirect to as evaluated in Polylang.
     * @param PLL_Language $language     The language.
     * @return string Modified canonical url.
     */
    public function pll_check_canonical_url($redirect_url, $language)
    {
    }
    /**
     * Hack rewrite bases of $wp_rewrite
     * Especially important for the pagination base to avoid WP canonical url breaking
     *
     * @since 1.9
     *
     * @return void
     */
    public function fix_wp_rewrite()
    {
    }
    /**
     * If the paged slug is translated, PLL_Links_Model::remove_paged_from_link does not work
     * so here is a replacement
     *
     * @since 1.9
     *
     * @param string $_link Url to modify.
     * @param string $link  Original url to modify.
     * @return string Modified link.
     */
    public function remove_paged_from_link($_link, $link)
    {
    }
    /**
     * Returns the link to the paged page when translating the 'page' slug
     *
     * @since 2.0.6
     *
     * @param string $_url Url to modify.
     * @param string $url  Original url to modify.
     * @param int    $page The page number.
     * @return string Modified url.
     */
    public function add_paged_to_link($_url, $url, $page)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Class to advertize the Translate slugs module.
 *
 * @since 1.9
 * @since 3.1 Renamed from PLL_Settings_Translate_Slugs.
 */
class PLL_Settings_Preview_Translate_Slugs extends \PLL_Settings_Module
{
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 80;
    /**
     * Constructor.
     *
     * @since 1.9
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Returns the module description.
     *
     * @since 3.1
     *
     * @return string
     */
    protected function get_description()
    {
    }
    /**
     * Tells if the module is active.
     *
     * @since 1.9
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Displays an upgrade message.
     *
     * @since 1.9
     *
     * @return string
     */
    public function get_upgrade_message()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Settings class to display information for the Translate slugs module.
 *
 * @since 3.1
 */
class PLL_Settings_Translate_Slugs extends \PLL_Settings_Preview_Translate_Slugs
{
    /**
     * Returns the module description.
     *
     * @since 3.1
     *
     * @return string
     */
    protected function get_description()
    {
    }
    /**
     * Tells if the module is active.
     *
     * @since 1.9
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Avoid displaying the upgrade message.
     *
     * @since 1.9
     *
     * @return string
     */
    public function get_upgrade_message()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Links Model for translating slugs
 *
 * @since 1.9
 */
class PLL_Translate_Slugs_Model
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Permalinks
     */
    public $links_model;
    /**
     * Stores the informations on translatable slugs.
     *
     * @var array
     */
    public $translated_slugs;
    /**
     * Constructor
     *
     * @since 1.9
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Updates the list of slugs to translate when switching blog
     *
     * @since 1.9
     *
     * @param int $new_blog The blog id we switch to.
     * @param int $old_blog The blog id we switch from.
     * @return void
     */
    public function switch_blog($new_blog, $old_blog)
    {
    }
    /**
     * Initializes the list of translated slugs
     * Need to wait for all post types and taxonomies to be registered
     *
     * @since 1.9
     *
     * @return void
     */
    public function init_translated_slugs()
    {
    }
    /**
     * Translates a slug in a permalink ( from original slug ).
     *
     * @since 1.9
     *
     * @param string       $link The url to modify.
     * @param PLL_Language $lang The language.
     * @param string       $type The type of slug to translate.
     * @return string Modified url.
     */
    public function translate_slug($link, $lang, $type)
    {
    }
    /**
     * Translates a slug in a permalink ( from an already translated slug ).
     *
     * @since 1.9
     *
     * @param string       $link The url to modify.
     * @param PLL_Language $lang The language.
     * @param string       $type The type of slug to translate.
     * @return string Modified url.
     */
    public function switch_translated_slug($link, $lang, $type)
    {
    }
    /**
     * Returns informations on translatable slugs
     * and stores them in a transient
     *
     * @since 1.9
     *
     * @return array
     */
    public function get_translatable_slugs()
    {
    }
    /**
     * Prepares rewrite rules filters to translate slugs
     *
     * @since 1.9
     *
     * @param string[] $pre Not used.
     * @return string[] Unmodified $pre.
     */
    public function prepare_rewrite_rules($pre)
    {
    }
    /**
     * Flush rewrite rules when saving strings translations
     *
     * @since 1.9
     *
     * @return void
     */
    public function flush_rewrite_rules()
    {
    }
    /**
     * Returns the rewrite rule pattern for the new slug
     *
     * @since 1.9
     * @since 2.2 Add the $capture parameter
     *
     * @param string $type    The type of slug.
     * @param bool   $capture Whether the slugs must be captured, defaults to false.
     * @return string The pattern.
     */
    protected function get_translated_slugs_pattern($type, $capture = \false)
    {
    }
    /**
     * Translates a slug in rewrite rules
     *
     * @since 1.9
     *
     * @param string[] $rules Rewrite rules.
     * @param string   $type  The type of slug to translate.
     * @return string[] Modified rewrite rules.
     */
    protected function translate_rule($rules, $type)
    {
    }
    /**
     * Translates the post format slug in rewrite rules
     *
     * @since 1.9
     *
     * @param string[] $rules Rewrite rules.
     * @return string[] Modified rewrite rules.
     */
    protected function translate_post_format_rule($rules)
    {
    }
    /**
     * Translates the post type archive in rewrite rules
     *
     * @since 1.9
     *
     * @param string[] $rules Rewrite rules.
     * @return string[] Modified rewrite rules.
     */
    protected function translate_post_type_archive_rule($rules)
    {
    }
    /**
     * Translates the page slug in rewrite rules
     *
     * @since 1.9
     *
     * @param string[] $rules Rewrite rules.
     * @return string[] Modified rewrite rules.
     */
    protected function translate_paged_rule($rules)
    {
    }
    /**
     * Modifies rewrite rules to translate post types and taxonomies slugs
     *
     * @since 1.9
     *
     * @param string[] $rules Rewrite rules.
     * @return string[] Modified rewrite rules.
     */
    public function rewrite_translated_slug($rules)
    {
    }
    /**
     * Register strings for translated slugs
     *
     * @since 1.9
     *
     * @return void
     */
    public function register_slugs()
    {
    }
    /**
     * Performs the sanitization ( before saving in DB ) of slugs translations
     *
     * @since 1.9
     *
     * @param string $translation Translation to sanitize.
     * @param string $name        Unique name for the string, not used.
     * @return string
     */
    public function sanitize_string_translation($translation, $name)
    {
    }
    /**
     * Deletes the transient when adding or modifying a language
     *
     * @since 1.9
     *
     * @return void
     */
    public function clean_cache()
    {
    }
    /**
     * Get the translated slug.
     *
     * Encoding the paged slug is necessary to prevent the WordPress redirect_canonical
     * function to wrongly redirect to a 404 page
     *
     * @since 2.2
     *
     * @param string $type The type of slug to translate.
     * @param string $lang The language slug.
     * @return string
     */
    public function get_translated_slug($type, $lang)
    {
    }
    /**
     * Recursively rawurlencode an array of slugs while preserving forward slashes
     *
     * @since 2.6
     *
     * @param mixed $slug The slug or the array of slug to encode.
     * @return mixed
     */
    public function encode_deep($slug)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Main class for Polylang Pro wizard.
 *
 * @since 2.7
 */
class PLL_Wizard_Pro
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * @var PLL_Sync_Post_Model
     */
    protected $sync_model;
    /**
     * Constructor
     *
     * @since 2.7
     *
     * @param object $polylang Reference to Polylang options array.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Replace function to apply to process the home page transations creation.
     *
     * @since 2.7
     *
     * @return callable
     */
    public function replace_create_home_page_translations()
    {
    }
    /**
     * Create home page translations for each language defined with duplicating content.
     *
     * @since 2.7
     *
     * @param string $default_language       slug of the default language; null if no default language is defined.
     * @param int    $home_page              post_id of the home page if it's defined, false otherwise.
     * @param string $home_page_title        home page title if it's defined, 'Homepage' otherwise.
     * @param string $home_page_language     slug of the home page if it's defined, false otherwise.
     * @param array  $untranslated_languages array of languages which needs to have a home page translated.
     * @return void
     */
    public function create_home_page_translations($default_language, $home_page, $home_page_title, $home_page_language, $untranslated_languages)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * An abstract class to handle cross domain data and single sign on
 * Inspired by https://github.com/humanmade/Mercator/
 *
 * @since 2.0
 */
abstract class PLL_Xdata_Base
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * @var PLL_Links_Model
     */
    public $links_model;
    /**
     * Constructor
     *
     * @since 2.0
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Get the time-dependent variable for nonce creation.
     * Same as wp_nonce_tick() with a specific filter.
     *
     * @since 2.1.2
     *
     * @return float
     */
    protected function nonce_tick()
    {
    }
    /**
     * Creates a user independent nonce
     *
     * @since 2.0
     *
     * @param string $action Context of the nonce.
     * @return string The nonce value.
     */
    public function create_nonce($action)
    {
    }
    /**
     * Verifies a user independent nonce
     *
     * @since 2.0
     *
     * @param string $nonce  The nonce value.
     * @param string $action Context of the nonce.
     * @return bool True if the nonce value is correct, false otherwise.
     */
    public function verify_nonce($nonce, $action)
    {
    }
    /**
     * Builds an ajax request url to the domain defined by a language
     *
     * @since 2.0
     *
     * @param string              $lang The language slug.
     * @param (string|int|bool)[] $args Existing url parameters.
     * @return string The ajax url.
     */
    public function ajax_url($lang, $args)
    {
    }
    /**
     * Stores data to transfer in a user session
     *
     * @param string $redirect Url to redirect to.
     * @param bool   $nologin  True if we shoul not attempt to login.
     * @return string Session key.
     */
    protected function create_data_session($redirect, $nologin)
    {
    }
    /**
     * Get javascript for the cross domain request when the language has just switched
     *
     * @since 2.0
     *
     * @param string $redirect Redirect url.
     * @param string $lang     New language slug.
     * @return string Javascript code.
     */
    protected function maybe_get_xdomain_js($redirect, $lang)
    {
    }
    /**
     * Response to pll_xdata_get request
     * Writes cross domain data in a user session
     *
     * @since 2.0
     *
     * @return void
     */
    public function xdata_get()
    {
    }
    /**
     * Response to pll_xdata_set request
     * Final step in the cross domain data
     * Login the user on the current domain
     * Redirect to the url requested by the usee
     *
     * @since 2.0
     *
     * @return void
     */
    public function xdata_set()
    {
    }
    /**
     * Saves the user session when a user logs in, for use in login_redirect
     *
     * @since 2.0
     *
     * @param string $auth_cookie Authentication cookie.
     * @param int    $expire      Login grace period in seconds. Default 43,200 seconds, or 12 hours.
     * @param int    $expiration  Duration in seconds the authentication cookie should be valid.
     * @param int    $user_id     User ID.
     * @param string $scheme      Authentication scheme. Values include 'auth', 'secure_auth', or 'logged_in'.
     * @return void
     */
    public function set_auth_cookie($auth_cookie, $expire, $expiration, $user_id, $scheme)
    {
    }
    /**
     * Saves info on the current user session and redirects to the main domain
     *
     * @since 2.0
     *
     * @param string           $redirect_to           The redirect destination URL.
     * @param string           $requested_redirect_to The requested redirect destination URL passed as a parameter.
     * @param WP_User|WP_Error $user                  WP_User object if login was successful, WP_Error object otherwise.
     * @return string
     */
    public function _login_redirect($redirect_to, $requested_redirect_to, $user)
    {
    }
    /**
     * Forces the admin on the main domain
     *
     * @since 2.0
     *
     * @param string $url An admin url.
     * @return string
     */
    public function admin_url($url)
    {
    }
    /**
     * Allows all our domains for cross domain requests in the customizer
     *
     * @since 2.0
     *
     * @param string[] $urls List of allowed urls.
     * @return string[] Modified list of urls.
     */
    public function customize_allowed_urls($urls)
    {
    }
    /**
     * Allows all our domains as origins ( for customizer cross domain requests )
     *
     * @since 2.0
     *
     * @param string[] $origins List of allowed urls.
     * @return string[] Modified list of urls.
     */
    public function allowed_http_origins($origins)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * A class to handle cross domain data and single sign on for multiple domains
 *
 * @since 2.0
 */
class PLL_Xdata_Domain extends \PLL_Xdata_Base
{
    /**
     * @var PLL_Choose_Lang_Domain
     */
    public $choose_lang;
    /**
     * Constructor
     *
     * @since 2.0
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Set language cookie
     *
     * @since 2.0
     *
     * @param string $lang Language code.
     * @return void
     */
    protected function maybe_set_cookie($lang)
    {
    }
    /**
     * Allow to use the correct domain for preview links
     * as we force them to be on the main domain when not using the Xdata module
     *
     * @since 2.0
     *
     * @param object $polylang Polylang object.
     * @return void
     */
    public function pll_init($polylang)
    {
    }
    /**
     * Set the cookie to main domain when visiting the admin
     * This is necessary to avoid 404 when previewing a post on non default domain
     * Make sure the cookie is set on admin and not on ajax request to avoid infinite redirect loop
     *
     * @since 2.0
     *
     * @return void
     */
    public function admin_init()
    {
    }
    /**
     * Outputs the link to the javascript request to main domain
     *
     * @since 2.0
     *
     * @return void
     */
    public function check_request()
    {
    }
    /**
     * Response to pll_xdata_check request
     * Redirects to the preferred language home page at first visit
     * Sets the language cookie on main domain
     * Initiates a cross domain data transfer if the language has just changed
     *
     * @since 2.0
     *
     * @return void
     */
    public function xdata_check()
    {
    }
    /**
     * Saves info on the current user session and redirects to the main domain
     *
     * @since 2.0
     *
     * @param string           $redirect_to           The redirect destination URL.
     * @param string           $requested_redirect_to The requested redirect destination URL passed as a parameter.
     * @param WP_User|WP_Error $user                  WP_User object if login was successful, WP_Error object otherwise.
     * @return string The modified redirect destination URL.
     */
    public function login_redirect($redirect_to, $requested_redirect_to, $user)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * A class to store cross domain data
 *
 * @since 2.0
 */
class PLL_Xdata_Session_Manager
{
    /**
     * Writes cross domain data to the session
     *
     * @since 2.0
     *
     * @param string $key     A unique hash key.
     * @param array  $data    Data to store in the session.
     * @param int    $user_id Optional, user id.
     * @return void
     */
    public function set($key, $data, $user_id = 0)
    {
    }
    /**
     * Reads cross domain data in the session
     * And deletes the session to avoid a replay
     *
     * @since 2.0
     *
     * @param string $key The session key.
     * @return array
     */
    public function get($key)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * A class to handle cross domain data and single sign on for subdomains
 *
 * @since 2.0
 */
class PLL_Xdata_Subdomain extends \PLL_Xdata_Base
{
    /**
     * Constructor
     *
     * @since 2.0
     *
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Builds an ajax request url to the domain defined by a language
     * Overrides the parent method to take care of inactive languages
     *
     * @since 2.0
     *
     * @param string   $lang The language slug.
     * @param string[] $args Existing url parameters.
     * @return string The ajax url.
     */
    public function ajax_url($lang, $args)
    {
    }
    /**
     * Outputs the javascript to create the cross domain request when the language just switched
     *
     * @since 2.0
     *
     * @return void
     */
    public function maybe_language_switched()
    {
    }
    /**
     * Saves info on the current user session and redirects to the main domain
     *
     * @since 2.0
     *
     * @param string           $redirect_to           The redirect destination URL.
     * @param string           $requested_redirect_to The requested redirect destination URL passed as a parameter.
     * @param WP_User|WP_Error $user                  WP_User object if login was successful, WP_Error object otherwise.
     * @return string
     */
    public function login_redirect($redirect_to, $requested_redirect_to, $user)
    {
    }
    /**
     * Returns the correct site url ( mainly to get the correct login form )
     *
     * @since 2.0
     *
     * @param string $url The main site url.
     * @return string
     */
    public function site_url($url)
    {
    }
    /**
     * Prevents changing the language cookie when the page is redirected
     * to avoid failed login when previewing a page
     *
     * @since 2.1
     *
     * @param string $location Redirect url.
     * @return string
     */
    public function fix_cookie_in_redirect($location)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Base class for both admin and frontend
 *
 * @since 1.2
 */
#[\AllowDynamicProperties]
abstract class PLL_Base
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Model
     */
    public $links_model;
    /**
     * Registers hooks on insert / update post related actions and filters.
     *
     * @var PLL_CRUD_Posts|null
     */
    public $posts;
    /**
     * Registers hooks on insert / update term related action and filters.
     *
     * @var PLL_CRUD_Terms|null
     */
    public $terms;
    /**
     * Constructor.
     *
     * @since 1.2
     *
     * @param PLL_Links_Model $links_model Links Model.
     */
    public function __construct(&$links_model)
    {
    }
    /**
     * Instantiates classes reacting to CRUD operations on posts and terms,
     * only when at least one language is defined.
     *
     * @since 2.6
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Registers our widgets
     *
     * @since 0.1
     *
     * @return void
     */
    public function widgets_init()
    {
    }
    /**
     * Loads user defined strings translations
     *
     * @since 1.2
     * @since 2.1.3 $locale parameter added.
     *
     * @param string $locale Locale. Defaults to current locale.
     * @return void
     */
    public function load_strings_translations($locale = '')
    {
    }
    /**
     * Resets some variables when the blog is switched.
     * Applied only if Polylang is active on the new blog.
     *
     * @since 1.5.1
     *
     * @param int $new_blog_id  New blog ID.
     * @param int $prev_blog_id Previous blog ID.
     * @return void
     */
    public function switch_blog($new_blog_id, $prev_blog_id)
    {
    }
    /**
     * Checks if Polylang is active on the new blog when the blog is switched.
     *
     * @since 3.0
     *
     * @param int $new_blog_id  New blog ID.
     * @param int $prev_blog_id Previous blog ID.
     * @return bool
     */
    protected function is_active_on_new_blog($new_blog_id, $prev_blog_id)
    {
    }
    /**
     * Check if the customize menu should be removed or not.
     *
     * @since 3.2
     *
     * @return bool True if it should be removed, false otherwise.
     */
    public function should_customize_menu_be_removed()
    {
    }
    /**
     * Tells whether or not Polylang or third party callbacks are hooked to `customize_register`.
     *
     * @since 3.4.3
     *
     * @global $wp_filter
     *
     * @return bool True if Polylang's callbacks are hooked, false otherwise.
     */
    protected function is_customize_register_hooked()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Setup features available on all admin pages.
 *
 * @since 1.8
 */
abstract class PLL_Admin_Base extends \PLL_Base
{
    /**
     * Current language (used to filter the content).
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Language selected in the admin language filter.
     *
     * @var PLL_Language|null
     */
    public $filter_lang;
    /**
     * Preferred language to assign to new contents.
     *
     * @var PLL_Language|null
     */
    public $pref_lang;
    /**
     * @var PLL_Filters_Links|null
     */
    public $filters_links;
    /**
     * @var PLL_Admin_Links|null
     */
    public $links;
    /**
     * @var PLL_Admin_Notices|null
     */
    public $notices;
    /**
     * @var PLL_Admin_Static_Pages|null
     */
    public $static_pages;
    /**
     * @var PLL_Admin_Default_Term|null
     */
    public $default_term;
    /**
     * Setups actions needed on all admin pages.
     *
     * @since 1.8
     *
     * @param PLL_Links_Model $links_model Reference to the links model.
     */
    public function __construct(&$links_model)
    {
    }
    /**
     * Setups filters and action needed on all admin pages and on plugins page
     * Loads the settings pages or the filters base on the request
     *
     * @since 1.2
     */
    public function init()
    {
    }
    /**
     * Adds the link to the languages panel in the WordPress admin menu
     *
     * @since 0.1
     *
     * @return void
     */
    public function add_menus()
    {
    }
    /**
     * Setup js scripts & css styles ( only on the relevant pages )
     *
     * @since 0.6
     *
     * @return void
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Tells whether or not the given screen is block editor kind.
     * e.g. widget, site or post editor.
     *
     * @since 3.3
     *
     * @param WP_Screen $screen Screen object.
     * @return bool True if the screen is a block editor, false otherwise.
     */
    protected function is_block_editor($screen)
    {
    }
    /**
     * Enqueue scripts to the WP Customizer.
     *
     * @since 2.4.0
     *
     * @return void
     */
    public function customize_controls_enqueue_scripts()
    {
    }
    /**
     * Sets pll_ajax_backend on all backend ajax request
     * The final goal is to detect if an ajax request is made on admin or frontend
     *
     * Takes care to various situations:
     * when the ajax request has no options.data thanks to ScreenfeedFr
     * see: https://wordpress.org/support/topic/ajaxprefilter-may-not-work-as-expected
     * when options.data is a json string
     * see: https://wordpress.org/support/topic/polylang-breaking-third-party-ajax-requests-on-admin-panels
     * when options.data is an empty string (GET request with the method 'load')
     * see: https://wordpress.org/support/topic/invalid-url-during-wordpress-new-dashboard-widget-operation
     *
     * @since 1.4
     *
     * @return void
     */
    public function admin_print_footer_scripts()
    {
    }
    /**
     * Sets the admin current language, used to filter the content
     *
     * @since 2.0
     *
     * @return void
     */
    public function set_current_language()
    {
    }
    /**
     * Defines the backend language and the admin language filter based on user preferences
     *
     * @since 1.2.3
     *
     * @return void
     */
    public function init_user()
    {
    }
    /**
     * Avoids parsing a tax query when all languages are requested
     * Fixes https://wordpress.org/support/topic/notice-undefined-offset-0-in-wp-includesqueryphp-on-line-3877 introduced in WP 4.1
     *
     * @see https://core.trac.wordpress.org/ticket/31246 the suggestion of @boonebgorges.
     *
     * @since 1.6.5
     *
     * @param array $qvars
     * @return array
     */
    public function request($qvars)
    {
    }
    /**
     * Adds the languages list in admin bar for the admin languages filter.
     *
     * @since 0.9
     *
     * @param WP_Admin_Bar $wp_admin_bar WP_Admin_Bar global object.
     * @return void
     */
    public function admin_bar_menu($wp_admin_bar)
    {
    }
    /**
     * Remove the customize submenu when using a block theme.
     *
     * WordPress removes the Customizer menu if a block theme is activated and no other plugins interact with it.
     * As Polylang interacts with the Customizer, we have to delete this menu ourselves in the case of a block theme,
     * unless another plugin than Polylang interacts with the Customizer.
     *
     * @since 3.2
     *
     * @return void
     */
    public function remove_customize_submenu()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages filters and actions related to the block editor
 *
 * @since 2.5
 */
class PLL_Admin_Block_Editor
{
    /**
     * @var PLL_Model
     */
    protected $model;
    /**
     * Preferred language to assign to a new post.
     *
     * @var PLL_Language|null
     */
    protected $pref_lang;
    /**
     * Constructor: setups filters and actions
     *
     * @since 2.5
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Filters the preload REST requests by the current language of the post.
     * Necessary otherwise subsequent REST requests, all filtered by the language,
     * would not hit the preloaded requests.
     *
     * @since 2.5
     *
     * @param (string|string[])[]     $preload_paths Array of paths to preload.
     * @param WP_Block_Editor_Context $context       Block editor context.
     * @return (string|string[])[]
     */
    public function preload_paths($preload_paths, $context)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages filters and actions related to the classic editor
 *
 * @since 2.4
 */
class PLL_Admin_Classic_Editor
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * @var PLL_Admin_Links|null
     */
    public $links;
    /**
     * Current language (used to filter the content).
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Preferred language to assign to new contents.
     *
     * @var PLL_Language|null
     */
    public $pref_lang;
    /**
     * Constructor: setups filters and actions
     *
     * @since 2.4
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Adds the Language box in the 'Edit Post' and 'Edit Page' panels ( as well as in custom post types panels )
     *
     * @since 0.1
     *
     * @param string $post_type Current post type
     * @return void
     */
    public function add_meta_boxes($post_type)
    {
    }
    /**
     * Displays the Languages metabox in the 'Edit Post' and 'Edit Page' panels
     *
     * @since 0.1
     *
     * @return void
     */
    public function post_language()
    {
    }
    /**
     * Ajax response for changing the language in the post metabox
     *
     * @since 0.2
     *
     * @return void
     */
    public function post_lang_choice()
    {
    }
    /**
     * Ajax response for input in translation autocomplete input box
     *
     * @since 1.5
     *
     * @return void
     */
    public function ajax_posts_not_translated()
    {
    }
    /**
     * Filters the pages by language in the parent dropdown list in the page attributes metabox.
     *
     * @since 0.6
     *
     * @param array   $dropdown_args Arguments passed to wp_dropdown_pages().
     * @param WP_Post $post          The page being edited.
     * @return array Modified arguments.
     */
    public function page_attributes_dropdown_pages_args($dropdown_args, $post)
    {
    }
    /**
     * Displays a notice if the user has not sufficient rights to overwrite synchronized taxonomies and metas.
     *
     * @since 2.6
     *
     * @param WP_Post $post the post currently being edited.
     * @return void
     */
    public function edit_form_top($post)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages filters and actions related to default terms.
 *
 * @since 3.1
 */
class PLL_Admin_Default_Term
{
    /**
     * A reference to the PLL_Model instance.
     *
     * @var PLL_Model
     */
    protected $model;
    /**
     * Preferred language to assign to new contents.
     *
     * @var PLL_Language|null
     */
    protected $pref_lang;
    /**
     * Array of registered taxonomy names for which Polylang manages languages and translations.
     *
     * @var string[]
     */
    protected $taxonomies;
    /**
     * Constructor: setups properties.
     *
     * @since 3.1
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Setups filters and actions needed.
     *
     * @since 3.1
     *
     * @return void
     */
    public function add_hooks()
    {
    }
    /**
     * Filters the default term in note below the term list table and in settings->writing dropdown
     *
     * @since 1.2
     *
     * @param  int $taxonomy_term_id The taxonomy term id.
     * @return int                   A taxonomy term id.
     */
    public function option_default_term($taxonomy_term_id)
    {
    }
    /**
     * Checks if the new default term is translated in all languages
     * If not, create the translations
     *
     * @since 1.7
     *
     * @param  int $old_value The old option value.
     * @param  int $value     The new option value.
     * @return void
     */
    public function update_option_default_term($old_value, $value)
    {
    }
    /**
     * Create a default term for a language
     *
     * @since 1.2
     *
     * @param object|string|int $lang     language
     * @param string            $taxonomy The current taxonomy
     * @return void
     */
    public function create_default_term($lang, $taxonomy)
    {
    }
    /**
     * Manages the default term when new languages are created.
     *
     * @since 3.1
     *
     * @param  array $args Argument used to create the language. @see PLL_Admin_Model::add_language().
     * @return void
     */
    public function handle_default_term_on_create_language($args)
    {
    }
    /**
     * Identify the default term in the terms list table to disable the language dropdown in js.
     *
     * @since 3.1
     *
     * @param  string $out     The output.
     * @param  string $column  The custom column's name.
     * @param  int    $term_id The term id.
     * @return string          The HTML string.
     */
    public function term_column($out, $column, $term_id)
    {
    }
    /**
     * Returns the first language column in the posts, pages and media library tables
     *
     * @since 0.9
     *
     * @return string first language column name
     */
    protected function get_first_language_column()
    {
    }
    /**
     * Prevents deleting all the translations of the default term
     *
     * @since 2.1
     *
     * @param  array  $caps    The user's actual capabilities.
     * @param  string $cap     Capability name.
     * @param  int    $user_id The user ID.
     * @param  array  $args    Adds the context to the cap. The term id.
     * @return array
     */
    public function fix_delete_default_term($caps, $cap, $user_id, $args)
    {
    }
    /**
     * Check if the term is the default term.
     *
     * @since 3.1
     *
     * @param  int $term_id The term id.
     * @return bool         True if the term is the default term, false otherwise.
     */
    public function is_default_term($term_id)
    {
    }
    /**
     * Updates the default term language.
     *
     * @since 3.1
     *
     * @param  string $slug Language slug.
     * @return void
     */
    public function update_default_term_language($slug)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Adds the language column in posts and terms list tables
 * Manages quick edit and bulk edit as well
 *
 * @since 1.2
 */
class PLL_Admin_Filters_Columns
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * @var PLL_Admin_Links|null
     */
    public $links;
    /**
     * Language selected in the admin language filter.
     *
     * @var PLL_Language|null
     */
    public $filter_lang;
    /**
     * Constructor: setups filters and actions
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Adds languages and translations columns in posts, pages, media, categories and tags tables.
     *
     * @since 0.8.2
     *
     * @param string[] $columns List of table columns.
     * @param string   $before  The column before which we want to add our languages.
     * @return string[] Modified list of columns.
     */
    protected function add_column($columns, $before)
    {
    }
    /**
     * Returns the first language column in the posts, pages and media library tables
     *
     * @since 0.9
     *
     * @return string first language column name
     */
    protected function get_first_language_column()
    {
    }
    /**
     * Hides the column for the filtered language.
     *
     * @since 2.7
     *
     * @param string[] $hidden Array of hidden columns.
     * @return string[]
     */
    public function hidden_columns($hidden)
    {
    }
    /**
     * Adds the language and translations columns ( before the comments column ) in the posts, pages and media library tables.
     *
     * @since 0.1
     *
     * @param string[] $columns List of posts table columns.
     * @return string[] Modified list of columns.
     */
    public function add_post_column($columns)
    {
    }
    /**
     * Fills the language and translations columns in the posts, pages and media library tables
     * take care that when doing ajax inline edit, the post may not be updated in database yet
     *
     * @since 0.1
     *
     * @param string $column  Column name
     * @param int    $post_id
     * @return void
     */
    public function post_column($column, $post_id)
    {
    }
    /**
     * Quick edit & bulk edit
     *
     * @since 0.9
     *
     * @param string $column column name
     * @return string unmodified $column
     */
    public function quick_edit_custom_box($column)
    {
    }
    /**
     * Adds the language column ( before the posts column ) in the 'Categories' or 'Post Tags' table.
     *
     * @since 0.1
     *
     * @param string[] $columns List of terms table columns.
     * @return string[] modified List of columns.
     */
    public function add_term_column($columns)
    {
    }
    /**
     * Fills the language column in the 'Categories' or 'Post Tags' table
     *
     * @since 0.1
     *
     * @param string $out
     * @param string $column  Column name
     * @param int    $term_id
     * @return string
     */
    public function term_column($out, $column, $term_id)
    {
    }
    /**
     * Update rows of translated posts when the language is modified in quick edit
     *
     * @since 1.7
     *
     * @return void
     */
    public function ajax_update_post_rows()
    {
    }
    /**
     * Update rows of translated terms when adding / deleting a translation or when the language is modified in quick edit
     *
     * @since 1.7
     *
     * @return void
     */
    public function ajax_update_term_rows()
    {
    }
    /**
     * Returns the language flag or teh language slug if there is no flag.
     *
     * @since 2.8
     *
     * @param PLL_Language $language PLL_Language object.
     * @return string
     */
    protected function get_flag_html($language)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Some common code for PLL_Admin_Filters_Post and PLL_Admin_Filters_Media
 *
 * @since 1.5
 */
abstract class PLL_Admin_Filters_Post_Base
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * @var PLL_Links|null
     */
    public $links;
    /**
     * Language selected in the admin language filter.
     *
     * @var PLL_Language|null
     */
    public $filter_lang;
    /**
     * Preferred language to assign to new contents.
     *
     * @var PLL_Language|null
     */
    public $pref_lang;
    /**
     * Constructor: setups filters and actions
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Save translations from the languages metabox.
     *
     * @since 1.5
     *
     * @param int   $post_id Post id of the post being saved.
     * @param int[] $arr     An array with language codes as key and post id as value.
     * @return int[] The array of translated post ids.
     */
    protected function save_translations($post_id, $arr)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages filters and actions related to media on admin side
 * Capability to edit / create media is checked before loading this class
 *
 * @since 1.2
 */
class PLL_Admin_Filters_Media extends \PLL_Admin_Filters_Post_Base
{
    /**
     * @var PLL_CRUD_Posts|null
     */
    public $posts;
    /**
     * Constructor: setups filters and actions
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Adds the language field and translations tables in the 'Edit Media' panel.
     * Needs WP 3.5+
     *
     * @since 0.9
     *
     * @param array   $fields List of form fields.
     * @param WP_Post $post   The attachment being edited.
     * @return array Modified list of form fields.
     */
    public function attachment_fields_to_edit($fields, $post)
    {
    }
    /**
     * Creates a media translation
     *
     * @since 0.9
     *
     * @return void
     */
    public function translate_media()
    {
    }
    /**
     * Called when a media is saved
     * Saves language and translations
     *
     * @since 0.9
     *
     * @param array $post
     * @param array $attachment
     * @return array unmodified $post
     */
    public function save_media($post, $attachment)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages filters and actions related to posts on admin side
 *
 * @since 1.2
 */
class PLL_Admin_Filters_Post extends \PLL_Admin_Filters_Post_Base
{
    /**
     * Current language (used to filter the content).
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Constructor: setups filters and actions
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Outputs a javascript list of terms ordered by language and hierarchical taxonomies
     * to filter the category checklist per post language in quick edit
     * Outputs a javascript list of pages ordered by language
     * to filter the parent dropdown per post language in quick edit
     *
     * @since 1.7
     *
     * @return void
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Filters posts, pages and media by language.
     *
     * @since 0.1
     *
     * @param WP_Query $query WP_Query object.
     * @return void
     */
    public function parse_query($query)
    {
    }
    /**
     * Save language and translation when editing a post (post.php)
     *
     * @since 2.3
     *
     * @return void
     */
    public function edit_post()
    {
    }
    /**
     * Save language when bulk editing a post
     *
     * @since 2.3
     *
     * @return void
     */
    public function bulk_edit_posts()
    {
    }
    /**
     * Save language when inline editing a post
     *
     * @since 2.3
     *
     * @return void
     */
    public function inline_edit_post()
    {
    }
    /**
     * Sets the language attribute and text direction for Tiny MCE
     *
     * @since 2.2
     *
     * @param array $mce_init TinyMCE config
     * @return array
     */
    public function tiny_mce_before_init($mce_init)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages filters and actions related to terms on admin side
 *
 * @since 1.2
 */
class PLL_Admin_Filters_Term
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * @var PLL_Admin_Links|null
     */
    public $links;
    /**
     * Language selected in the admin language filter.
     *
     * @var PLL_Language|null
     */
    public $filter_lang;
    /**
     * Preferred language to assign to the new terms.
     *
     * @var PLL_Language|null
     */
    public $pref_lang;
    /**
     * Stores the current post_id when bulk editing posts.
     *
     * @var int
     */
    protected $post_id = 0;
    /**
     * A reference to the PLL_Admin_Default_Term instance.
     *
     * @since 2.8
     *
     * @var PLL_Admin_Default_Term|null
     */
    protected $default_term;
    /**
     * Constructor: setups filters and actions
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Adds the language field in the 'Categories' and 'Post Tags' panels
     *
     * @since 0.1
     *
     * @return void
     */
    public function add_term_form()
    {
    }
    /**
     * Adds the language field and translations tables in the 'Edit Category' and 'Edit Tag' panels.
     *
     * @since 0.1
     *
     * @param WP_Term $tag The term being edited.
     * @return void
     */
    public function edit_term_form($tag)
    {
    }
    /**
     * Translates term parent if exists when using "Add new" ( translation )
     *
     * @since 0.7
     *
     * @param string $output html markup for dropdown list of categories
     * @return string modified html
     */
    public function wp_dropdown_cats($output)
    {
    }
    /**
     * Stores the current post_id when bulk editing posts for use in save_language and get_inserted_term_language.
     *
     * @since 1.7
     *
     * @param int $post_id
     * @return void
     */
    public function pre_post_update($post_id)
    {
    }
    /**
     * Saves language
     *
     * @since 1.5
     *
     * @param int    $term_id
     * @param string $taxonomy
     * @return void
     */
    protected function save_language($term_id, $taxonomy)
    {
    }
    /**
     * Save translations from our form.
     *
     * @since 1.5
     *
     * @param int $term_id The term id of teh term being saved.
     * @return int[] The array of translated term ids.
     */
    protected function save_translations($term_id)
    {
    }
    /**
     * Called when a category or post tag is created or edited
     * Saves language and translations
     *
     * @since 0.1
     *
     * @param int    $term_id
     * @param int    $tt_id    term taxonomy id
     * @param string $taxonomy
     * @return void
     */
    public function save_term($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     * Ajax response for edit term form
     *
     * @since 0.2
     *
     * @return void
     */
    public function term_lang_choice()
    {
    }
    /**
     * Ajax response for input in translation autocomplete input box
     *
     * @since 1.5
     *
     * @return void
     */
    public function ajax_terms_not_translated()
    {
    }
    /**
     * Updates the translations term ids when splitting a shared term
     * Splits translations if these are shared terms too
     *
     * @since 1.7
     *
     * @param int    $term_id          Shared term_id
     * @param int    $new_term_id
     * @param int    $term_taxonomy_id
     * @param string $taxonomy
     * @return void
     */
    public function split_shared_term($term_id, $new_term_id, $term_taxonomy_id, $taxonomy)
    {
    }
    /**
     * Returns the language for subsequently inserted term in admin.
     *
     * @since 3.3
     *
     * @param PLL_Language|null $lang     Term language object if found, null otherwise.
     * @return PLL_Language|null Language object, null if none found.
     */
    public function get_inserted_term_language($lang)
    {
    }
    /**
     * Filters the subsequently inserted term parent in admin.
     *
     * @since 3.3
     *
     * @param int    $parent   Parent term ID, 0 if none found.
     * @param string $taxonomy Term taxonomy.
     * @return int Parent term ID if found, 0 otherwise.
     */
    public function get_inserted_term_parent($parent, $taxonomy)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Class PLL_Widgets_Filters
 *
 * @since 3.0
 *
 * Add new options to {@see https://developer.wordpress.org/reference/classes/wp_widget/ WP_Widget} and saves them.
 */
class PLL_Filters_Widgets_Options
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * PLL_Widgets_Filters constructor.
     *
     * @since 3.0 Moved actions from PLL_Admin_Filters.
     *
     * @param PLL_Base $polylang
     * @return void
     */
    public function __construct($polylang)
    {
    }
    /**
     * Add the language filter field to the widgets options form.
     *
     * @since 3.0 Moved PLL_Admin_Filters.
     * @since 3.1 Rename lang_choice field name and id to pll_lang as the widget setting.
     *
     * @param WP_Widget $widget
     * @param null      $return
     * @param array     $instance
     * @return void
     */
    public function in_widget_form($widget, $return, $instance)
    {
    }
    /**
     * Called when widget options are saved.
     * Saves the language associated to the widget.
     *
     * @since 0.3
     * @since 3.0 Moved from PLL_Admin_Filters.
     * @since 3.1 Remove unused $old_instance and $widget parameters.
     *
     * @param array $instance The current Widget's options.
     * @param array $new_instance The new Widget's options.
     * @return array Widget options.
     */
    public function widget_update_callback($instance, $new_instance)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Class PLL_Widgets_Filters
 *
 * @since 3.0
 *
 * Adds new options to {@see https://developer.wordpress.org/reference/classes/wp_widget/ WP_Widget} and saves them.
 */
class PLL_Admin_Filters_Widgets_Options extends \PLL_Filters_Widgets_Options
{
    /**
     * Modifies the widgets forms to add our language dropdown list.
     *
     * @since 0.3
     * @since 3.0 Moved from PLL_Admin_Filters
     *
     * @param WP_Widget $widget Widget instance.
     * @param null      $return Not used.
     * @param array     $instance Widget settings.
     * @return void
     */
    public function in_widget_form($widget, $return, $instance)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Setup filters common to admin and frontend
 *
 * @since 1.4
 */
class PLL_Filters
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Model
     */
    public $links_model;
    /**
     * Current language.
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Constructor: setups filters
     *
     * @since 1.4
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Deletes the cache for multilingual sticky posts.
     *
     * @since 2.8.4
     *
     * @return void
     */
    public function delete_sticky_posts_cache()
    {
    }
    /**
     * Get the language to filter a comments query.
     *
     * @since 2.0
     * @since 3.1 Always returns an array. Renamed from get_comments_queried_language().
     *
     * @param WP_Comment_Query $query WP_Comment_Query object.
     * @return PLL_Language[] The languages to use in the filter.
     */
    protected function get_comments_queried_languages($query)
    {
    }
    /**
     * Adds a language dependent cache domain when querying comments.
     * Useful as the 'lang' parameter is not included in cache key by WordPress.
     * Needed since WP 4.6 as comments have been added to persistent cache. See #36906, #37419.
     *
     * @since 2.0
     *
     * @param WP_Comment_Query $query WP_Comment_Query object.
     * @return void
     */
    public function parse_comment_query($query)
    {
    }
    /**
     * Filters the comments according to the current language.
     * Used by the recent comments widget and admin language filter.
     *
     * @since 0.2
     *
     * @param string[]         $clauses SQL clauses.
     * @param WP_Comment_Query $query   WP_Comment_Query object.
     * @return string[] Modified $clauses.
     */
    public function comments_clauses($clauses, $query)
    {
    }
    /**
     * Filters get_pages() per language.
     *
     * @since 1.4
     *
     * @param WP_Post[] $pages An array of pages already queried.
     * @param array     $args  Array of get_pages() arguments.
     * @return WP_Post[] Modified list of pages.
     */
    public function get_pages($pages, $args)
    {
    }
    /**
     * Filters the WP_Query in get_pages() per language.
     *
     * @since 3.4.3
     *
     * @param array $query_args  Array of arguments passed to WP_Query.
     * @param array $parsed_args Array of get_pages() arguments.
     * @return array Array of arguments passed to WP_Query with the language.
     */
    public function get_pages_query_args($query_args, $parsed_args)
    {
    }
    /**
     * Get page ids related to a get_pages() in or not in a given language.
     *
     * @since 3.2
     *
     * @param PLL_Language $language The language to use in the relationship
     * @param string       $relation 'IN' or 'NOT IN'.
     * @param array        $args     Array of get_pages() arguments.
     * @return int[]
     */
    protected function get_related_page_ids($language, $relation, $args)
    {
    }
    /**
     * Modifies the sql request for get_adjacent_post to filter by the current language.
     *
     * @since 0.1
     *
     * @param string  $sql            The JOIN clause in the SQL.
     * @param bool    $in_same_term   Whether post should be in a same taxonomy term.
     * @param int[]   $excluded_terms Array of excluded term IDs.
     * @param string  $taxonomy       Taxonomy. Used to identify the term used when `$in_same_term` is true.
     * @param WP_Post $post           WP_Post object.
     * @return string Modified JOIN clause.
     */
    public function posts_join($sql, $in_same_term, $excluded_terms, $taxonomy, $post)
    {
    }
    /**
     * Modifies the sql request for wp_get_archives and get_adjacent_post to filter by the current language.
     *
     * @since 0.1
     *
     * @param string  $sql            The WHERE clause in the SQL.
     * @param bool    $in_same_term   Whether post should be in a same taxonomy term.
     * @param int[]   $excluded_terms Array of excluded term IDs.
     * @param string  $taxonomy       Taxonomy. Used to identify the term used when `$in_same_term` is true.
     * @param WP_Post $post           WP_Post object.
     * @return string Modified WHERE clause.
     */
    public function posts_where($sql, $in_same_term, $excluded_terms, $taxonomy, $post)
    {
    }
    /**
     * Converts WordPress locale to valid W3 locale in html language attributes
     *
     * @since 1.8
     *
     * @param string $output language attributes
     * @return string
     */
    public function language_attributes($output)
    {
    }
    /**
     * Translates the site title in emails sent to the user (change email, reset password)
     * It is necessary to filter the email because WP evaluates the site title before calling switch_to_locale()
     *
     * @since 2.1.3
     *
     * @param string[] $email Email contents.
     * @return string[] Translated email contents.
     */
    public function translate_user_email($email)
    {
    }
    /**
     * Translates the privacy policy page, on both frontend and admin
     *
     * @since 2.3.6
     *
     * @param int $id Privacy policy page id
     * @return int
     */
    public function translate_page_for_privacy_policy($id)
    {
    }
    /**
     * Prevents edit and delete links for the translations of the privacy policy page for non admin
     *
     * @since 2.3.7
     *
     * @param array  $caps    The user's actual capabilities.
     * @param string $cap     Capability name.
     * @param int    $user_id The user ID.
     * @param array  $args    Adds the context to the cap. The category id.
     * @return array
     */
    public function fix_privacy_policy_page_editing($caps, $cap, $user_id, $args)
    {
    }
    /**
     * Register our personal data exporter
     *
     * @since 2.3.6
     *
     * @param array $exporters Personal data exporters
     * @return array
     */
    public function register_personal_data_exporter($exporters)
    {
    }
    /**
     * Export translated user description as WP exports only the description in the default language
     *
     * @since 2.3.6
     *
     * @param string $email_address User email address
     * @return array Personal data
     */
    public function user_data_exporter($email_address)
    {
    }
    /**
     * Filters default query arguments for checking if a term exists.
     * In `term_exists()`, WP 6.0 uses `get_terms()`, which is filtered by language by Polylang.
     * This filter prevents `term_exists()` to be filtered by language.
     *
     * @since 3.2
     *
     * @param  array      $defaults An array of arguments passed to get_terms().
     * @param  int|string $term     The term to check. Accepts term ID, slug, or name.
     * @param  string     $taxonomy The taxonomy name to use. An empty string indicates the search is against all taxonomies.
     * @return array
     */
    public function term_exists_default_query_args($defaults, $term, $taxonomy)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Setup miscellaneous admin filters as well as filters common to admin and frontend
 *
 * @since 1.2
 */
class PLL_Admin_Filters extends \PLL_Filters
{
    /**
     * Constructor: setups filters and actions
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Updates language user preference set in user profile
     *
     * @since 0.4
     *
     * @param int $user_id
     * @return void
     */
    public function personal_options_update($user_id)
    {
    }
    /**
     * Outputs hidden information to modify the biography form with js.
     *
     * @since 0.4
     *
     * @param WP_User $profileuser The current WP_User object.
     * @return void
     */
    public function personal_options($profileuser)
    {
    }
    /**
     * Allows to update translations files for plugins and themes.
     *
     * @since 1.6
     *
     * @param string[] $locales List of locales to update for plugins and themes.
     * @return string[]
     */
    public function update_check_locales($locales)
    {
    }
    /**
     * Adds custom classes to the body
     *
     * @since 2.2 Adds a text direction dependent class to the body.
     * @since 3.4 Adds a language dependent class to the body.
     *
     * @param string $classes Space-separated list of CSS classes.
     * @return string
     */
    public function admin_body_class($classes)
    {
    }
    /**
     * Adds post state for translations of the privacy policy page.
     *
     * @since 2.7
     *
     * @param string[] $post_states An array of post display states.
     * @param WP_Post  $post        The current post object.
     * @return string[]
     */
    public function display_post_states($post_states, $post)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages links related functions
 *
 * @since 1.2
 */
class PLL_Links
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Model
     */
    public $links_model;
    /**
     * Current language (used to filter the content).
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Returns the home url in the requested language.
     *
     * @since 1.3
     *
     * @param PLL_Language|string $language  The language.
     * @param bool                $is_search Optional, whether we need the home url for a search form, defaults to false.
     * @return string
     */
    public function get_home_url($language, $is_search = \false)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages links related functions.
 *
 * @since 1.8
 */
class PLL_Admin_Links extends \PLL_Links
{
    /**
     * Returns the html markup for a new translation link.
     *
     * @since 2.6
     *
     * @param string       $link     The new translation link.
     * @param PLL_Language $language The language of the new translation.
     * @return string
     */
    protected function new_translation_link($link, $language)
    {
    }
    /**
     * Returns the html markup for a translation link.
     *
     * @since 2.6
     *
     * @param string       $link     The translation link.
     * @param PLL_Language $language The language of the translation.
     * @return string
     */
    public function edit_translation_link($link, $language)
    {
    }
    /**
     * Get the link to create a new post translation.
     *
     * @since 1.5
     *
     * @param int          $post_id  The source post id.
     * @param PLL_Language $language The language of the new translation.
     * @param string       $context  Optional. Defaults to 'display' which encodes '&' to '&amp;'.
     *                               Otherwise, preserves '&'.
     * @return string
     */
    public function get_new_post_translation_link($post_id, $language, $context = 'display')
    {
    }
    /**
     * Returns the html markup for a new post translation link.
     *
     * @since 1.8
     *
     * @param int          $post_id  The source post id.
     * @param PLL_Language $language The language of the new translation.
     * @return string
     */
    public function new_post_translation_link($post_id, $language)
    {
    }
    /**
     * Returns the html markup for a post translation link.
     *
     * @since 1.4
     *
     * @param int $post_id The translation post id.
     * @return string
     */
    public function edit_post_translation_link($post_id)
    {
    }
    /**
     * Get the link to create a new term translation.
     *
     * @since 1.5
     *
     * @param int          $term_id   Source term id.
     * @param string       $taxonomy  Taxonomy name.
     * @param string       $post_type Post type name.
     * @param PLL_Language $language  The language of the new translation.
     * @return string
     */
    public function get_new_term_translation_link($term_id, $taxonomy, $post_type, $language)
    {
    }
    /**
     * Returns the html markup for a new term translation.
     *
     * @since 1.8
     *
     * @param int          $term_id   Source term id.
     * @param string       $taxonomy  Taxonomy name.
     * @param string       $post_type Post type name.
     * @param PLL_Language $language  The language of the new translation.
     * @return string
     */
    public function new_term_translation_link($term_id, $taxonomy, $post_type, $language)
    {
    }
    /**
     * Returns the html markup for a term translation link.
     *
     * @since 1.4
     *
     * @param int    $term_id   Translation term id.
     * @param string $taxonomy  Taxonomy name.
     * @param string $post_type Post type name.
     * @return string
     */
    public function edit_term_translation_link($term_id, $taxonomy, $post_type)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Setups the language and translations model based on WordPress taxonomies
 *
 * @since 1.2
 */
class PLL_Model
{
    /**
     * Internal non persistent cache object.
     *
     * @var PLL_Cache
     */
    public $cache;
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * Translatable objects registry.
     *
     * @since 3.4
     *
     * @var PLL_Translatable_Objects
     */
    public $translatable_objects;
    /**
     * Translated post model.
     *
     * @var PLL_Translated_Post
     */
    public $post;
    /**
     * Translated term model.
     *
     * @var PLL_Translated_Term
     */
    public $term;
    /**
     * Constructor.
     * Setups translated objects sub models.
     * Setups filters and actions.
     *
     * @since 1.2
     *
     * @param array $options Polylang options.
     */
    public function __construct(&$options)
    {
    }
    /**
     * Checks if there are languages or not.
     *
     * @since 3.3
     *
     * @return bool True if there are, false otherwise.
     */
    public function has_languages()
    {
    }
    /**
     * Returns the list of available languages.
     * - Stores the list in a db transient (except flags), unless `PLL_CACHE_LANGUAGES` is set to false.
     * - Caches the list (with flags) in a `PLL_Cache` object.
     *
     * @since 0.1
     *
     * @param array $args {
     *   @type bool   $hide_empty   Hides languages with no posts if set to `true` (defaults to `false`).
     *   @type bool   $hide_default Hides default language from the list (default to `false`).
     *   @type string $fields       Returns only that field if set; {@see PLL_Language} for a list of fields.
     * }
     * @return array List of PLL_Language objects or PLL_Language object properties.
     */
    public function get_languages_list($args = array())
    {
    }
    /**
     * Tells if {@see PLL_Model::get_languages_list()} can be used.
     *
     * @since 3.4
     *
     * @return bool
     */
    public function are_languages_ready()
    {
    }
    /**
     * Sets the internal property `$languages_ready` to `true`, telling that {@see PLL_Model::get_languages_list()} can be used.
     *
     * @since 3.4
     *
     * @return void
     */
    public function set_languages_ready()
    {
    }
    /**
     * Cleans language cache
     * can be called directly with no parameter
     * called by the 'edited_term_taxonomy' filter with 2 parameters when count needs to be updated
     *
     * @since 1.2
     *
     * @param int    $term     not used
     * @param string $taxonomy taxonomy name
     * @return void
     */
    public function clean_languages_cache($term = 0, $taxonomy = \null)
    {
    }
    /**
     * Don't query term metas when only our taxonomies are queried
     *
     * @since 2.3
     *
     * @param array $args WP_Term_Query arguments
     * @return array
     */
    public function get_terms_args($args)
    {
    }
    /**
     * Returns the language by its term_id, tl_term_id, slug or locale.
     *
     * @since 0.1
     * @since 3.4 Allow to get a language by `term_taxonomy_id`.
     *
     * @param mixed $value `term_id`, `term_taxonomy_id`, `slug`, `locale`, or `w3c` of the queried language.
     *                     `term_id` and `term_taxonomy_id` can be fetched for any language taxonomy.
     *                     /!\ For the `term_taxonomy_id`, prefix the ID by `tt:` (ex: `"tt:{$tt_id}"`),
     *                     this is to prevent confusion between `term_id` and `term_taxonomy_id`.
     * @return PLL_Language|false Language object, false if no language found.
     */
    public function get_language($value)
    {
    }
    /**
     * Returns the default language.
     *
     * @since 3.4
     *
     * @return PLL_Language|false Default language object, `false` if no language found.
     */
    public function get_default_language()
    {
    }
    /**
     * Adds terms clauses to the term query to filter them by languages.
     *
     * @since 1.2
     *
     * @param string[]           $clauses The list of sql clauses in terms query.
     * @param PLL_Language|false $lang    PLL_Language object.
     * @return string[]                   Modified list of clauses.
     */
    public function terms_clauses($clauses, $lang)
    {
    }
    /**
     * Returns post types that need to be translated.
     * The post types list is cached for better better performance.
     * The method waits for 'after_setup_theme' to apply the cache
     * to allow themes adding the filter in functions.php.
     *
     * @since 1.2
     *
     * @param bool $filter True if we should return only valid registered post types.
     * @return string[] Post type names for which Polylang manages languages and translations.
     */
    public function get_translated_post_types($filter = \true)
    {
    }
    /**
     * Returns true if Polylang manages languages and translations for this post type.
     *
     * @since 1.2
     *
     * @param string|string[] $post_type Post type name or array of post type names.
     * @return bool
     */
    public function is_translated_post_type($post_type)
    {
    }
    /**
     * Returns taxonomies that need to be translated.
     * The taxonomies list is cached for better better performance.
     * The method waits for 'after_setup_theme' to apply the cache
     * to allow themes adding the filter in functions.php.
     *
     * @since 1.2
     *
     * @param bool $filter True if we should return only valid registered taxonomies.
     * @return string[] Array of registered taxonomy names for which Polylang manages languages and translations.
     */
    public function get_translated_taxonomies($filter = \true)
    {
    }
    /**
     * Returns true if Polylang manages languages and translations for this taxonomy.
     *
     * @since 1.2
     *
     * @param string|string[] $tax Taxonomy name or array of taxonomy names.
     * @return bool
     */
    public function is_translated_taxonomy($tax)
    {
    }
    /**
     * Return taxonomies that need to be filtered (post_format like).
     *
     * @since 1.7
     *
     * @param bool $filter True if we should return only valid registered taxonomies.
     * @return string[] Array of registered taxonomy names.
     */
    public function get_filtered_taxonomies($filter = \true)
    {
    }
    /**
     * Returns true if Polylang filters this taxonomy per language.
     *
     * @since 1.7
     *
     * @param string|string[] $tax Taxonomy name or array of taxonomy names.
     * @return bool
     */
    public function is_filtered_taxonomy($tax)
    {
    }
    /**
     * Returns the query vars of all filtered taxonomies.
     *
     * @since 1.7
     *
     * @return string[]
     */
    public function get_filtered_taxonomies_query_vars()
    {
    }
    /**
     * It is possible to have several terms with the same name in the same taxonomy ( one per language )
     * but the native term_exists() will return true even if only one exists.
     * So here the function adds the language parameter.
     *
     * @since 1.4
     *
     * @param string              $term_name The term name.
     * @param string              $taxonomy  Taxonomy name.
     * @param int                 $parent    Parent term id.
     * @param string|PLL_Language $language  The language slug or object.
     * @return int The `term_id` of the found term. 0 otherwise.
     */
    public function term_exists($term_name, $taxonomy, $parent, $language)
    {
    }
    /**
     * Checks if a term slug exists in a given language, taxonomy, hierarchy.
     *
     * @since 1.9
     * @since 2.8 Moved from PLL_Share_Term_Slug::term_exists() to PLL_Model::term_exists_by_slug().
     *
     * @param string              $slug     The term slug to test.
     * @param string|PLL_Language $language The language slug or object.
     * @param string              $taxonomy Optional taxonomy name.
     * @param int                 $parent   Optional parent term id.
     * @return int The `term_id` of the found term. 0 otherwise.
     */
    public function term_exists_by_slug($slug, $language, $taxonomy = '', $parent = 0)
    {
    }
    /**
     * Returns the number of posts per language in a date, author or post type archive.
     *
     * @since 1.2
     *
     * @param PLL_Language $lang PLL_Language instance.
     * @param array        $q    {
     *   WP_Query arguments:
     *
     *   @type string|string[] $post_type   Post type or array of post types.
     *   @type int             $m           Combination YearMonth. Accepts any four-digit year and month.
     *   @type int             $year        Four-digit year.
     *   @type int             $monthnum    Two-digit month.
     *   @type int             $day         Day of the month.
     *   @type int             $author      Author id.
     *   @type string          $author_name User 'user_nicename'.
     *   @type string          $post_format Post format.
     *   @type string          $post_status Post status.
     * }
     * @return int
     *
     * @phpstan-param array{
     *     post_type?: non-falsy-string|array<non-falsy-string>,
     *     post_status?: non-falsy-string,
     *     m?: numeric-string,
     *     year?: positive-int,
     *     monthnum?: int<1, 12>,
     *     day?: int<1, 31>,
     *     author?: int<1, max>,
     *     author_name?: non-falsy-string,
     *     post_format?: non-falsy-string
     * } $q
     * @phpstan-return int<0, max>
     */
    public function count_posts($lang, $q = array())
    {
    }
    /**
     * Setup the links model based on options.
     *
     * @since 1.2
     *
     * @return PLL_Links_Model
     */
    public function get_links_model()
    {
    }
    /**
     * Returns a list of object IDs without language (used in settings and wizard).
     *
     * @since 0.9
     * @since 2.2.6 Added the `$limit` parameter.
     * @since 3.4 Added the `$types` parameter.
     *
     * @param int      $limit Optional. Max number of IDs to return. Defaults to -1 (no limit).
     * @param string[] $types Optional. Types to handle (@see PLL_Translatable_Object::get_type()). Defaults to
     *                        an empty array (all types).
     * @return int[][]|false {
     *     IDs of objects without language.
     *
     *     @type int[] $posts Array of post ids.
     *     @type int[] $terms Array of term ids.
     * }
     *
     * @phpstan-param -1|positive-int $limit
     */
    public function get_objects_with_no_lang($limit = -1, array $types = array())
    {
    }
    /**
     * Returns ids of post without language.
     *
     * @since 3.1
     *
     * @param string|string[] $post_types A translated post type or an array of translated post types.
     * @param int             $limit      Max number of objects to return. `-1` to return all of them.
     * @return int[]
     *
     * @phpstan-param -1|positive-int $limit
     * @phpstan-return list<positive-int>
     */
    public function get_posts_with_no_lang($post_types, $limit)
    {
    }
    /**
     * Returns ids of terms without language.
     *
     * @since 3.1
     *
     * @param string|string[] $taxonomies A translated taxonomy or an array of taxonomies post types.
     * @param int             $limit      Max number of objects to return. `-1` to return all of them.
     * @return int[]
     *
     * @phpstan-param -1|positive-int $limit
     * @phpstan-return list<positive-int>
     */
    public function get_terms_with_no_lang($taxonomies, $limit)
    {
    }
    /**
     * Assigns the default language to objects in mass.
     *
     * @since 1.2
     * @since 3.4 Moved from PLL_Admin_Model class.
     *            Removed `$limit` parameter, added `$lang` and `$types` parameters.
     *
     * @param PLL_Language|null $lang  Optional. The language to assign to objects. Defaults to `null` (default language).
     * @param string[]          $types Optional. Types to handle (@see PLL_Translatable_Object::get_type()). Defaults
     *                                 to an empty array (all types).
     * @return void
     */
    public function set_language_in_mass($lang = \null, array $types = array())
    {
    }
    /**
     * Filters the ORDERBY clause of the languages query.
     *
     * This allows to order languages terms by `taxonomy` first then by `term_group` and `term_id`.
     * Ordering terms by taxonomy allows not to mix terms between all language taxomonomies.
     * Having the "language' taxonomy first is important for {@see PLL_Admin_Model:delete_language()}.
     *
     * @since 3.2.3
     *
     * @param  string   $orderby    `ORDERBY` clause of the terms query.
     * @param  array    $args       An array of term query arguments.
     * @param  string[] $taxonomies An array of taxonomy names.
     * @return string
     */
    public function filter_language_terms_orderby($orderby, $args, $taxonomies)
    {
    }
    /**
     * Maybe adds the missing language terms for 3rd party language taxonomies.
     *
     * @since 3.4
     *
     * @return void
     */
    public function maybe_create_language_terms()
    {
    }
    /**
     * Updates or adds new terms for a secondary language taxonomy (aka not 'language').
     *
     * @since 3.4
     *
     * @param string            $slug       Language term slug (with or without the `pll_` prefix).
     * @param string            $name       Language name (label).
     * @param PLL_Language|null $language   Optional. A language object. Required to update the existing terms.
     * @param string[]          $taxonomies Optional. List of language taxonomies to deal with. An empty value means
     *                                      all of them. Defauls to all taxonomies.
     * @return void
     *
     * @phpstan-param non-empty-string $slug
     * @phpstan-param non-empty-string $name
     * @phpstan-param array<non-empty-string> $taxonomies
     */
    protected function update_secondary_language_terms($slug, $name, \PLL_Language $language = \null, array $taxonomies = array())
    {
    }
    /**
     * Returns the list of available languages, based on the language taxonomy terms.
     * Stores the list in a db transient and in a `PLL_Cache` object.
     *
     * @since 3.4
     *
     * @return PLL_Language[] An array of `PLL_Language` objects, array keys are the type.
     *
     * @phpstan-return list<PLL_Language>
     */
    protected function get_languages_from_taxonomies()
    {
    }
    /**
     * Returns the list of existing language terms.
     * - Returns all terms, that are or not assigned to posts.
     * - Terms are ordered by `term_group` and `term_id` (see `PLL_Model->filter_language_terms_orderby()`).
     *
     * @since 3.2.3
     *
     * @return WP_Term[]
     */
    protected function get_language_terms()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Extends the PLL_Model class with methods needed only in Polylang settings pages.
 *
 * @since 1.2
 */
class PLL_Admin_Model extends \PLL_Model
{
    /**
     * Adds a new language
     * and creates a default category for this language.
     *
     * @since 1.2
     *
     * @param array $args {
     *   @type string $name           Language name (used only for display).
     *   @type string $slug           Language code (ideally 2-letters ISO 639-1 language code).
     *   @type string $locale         WordPress locale. If something wrong is used for the locale, the .mo files will
     *                                not be loaded...
     *   @type int    $rtl            1 if rtl language, 0 otherwise.
     *   @type int    $term_group     Language order when displayed.
     *   @type string $no_default_cat Optional, if set, no default category will be created for this language.
     *   @type string $flag           Optional, country code, {@see settings/flags.php}.
     * }
     * @return WP_Error|true true if success / WP_Error if failed.
     */
    public function add_language($args)
    {
    }
    /**
     * Delete a language.
     *
     * @since 1.2
     *
     * @param int $lang_id Language term_id.
     * @return bool
     */
    public function delete_language($lang_id)
    {
    }
    /**
     * Updates language properties.
     *
     * @since 1.2
     *
     * @param array $args {
     *   @type int    $lang_id        Id of the language to modify.
     *   @type string $name           Language name ( used only for display ).
     *   @type string $slug           Language code ( ideally 2-letters ISO 639-1 language code ).
     *   @type string $locale         WordPress locale. If something wrong is used for the locale, the .mo files will not be loaded...
     *   @type int    $rtl            1 if rtl language, 0 otherwise.
     *   @type int    $term_group     Language order when displayed.
     *   @type string $flag           Optional, country code, @see flags.php.
     * }
     * @return WP_Error|true true if success / WP_Error if failed.
     */
    public function update_language($args)
    {
    }
    /**
     * Builds the language metas into an array and serializes it, to be stored in the term description.
     *
     * @since 3.4
     *
     * @param array $args {
     *   @type string $name       Language name (used only for display).
     *   @type string $slug       Language code (ideally 2-letters ISO 639-1 language code).
     *   @type string $locale     WordPress locale. If something wrong is used for the locale, the .mo files will not be
     *                            loaded...
     *   @type int    $rtl        1 if rtl language, 0 otherwise.
     *   @type int    $term_group Language order when displayed.
     *   @type int    $lang_id    Optional, ID of the language to modify. An empty value means the language is being
     *                            created.
     *   @type string $flag       Optional, country code, {@see settings/flags.php}.
     * }
     * @return string The serialized description array updated.
     */
    protected function build_language_metas(array $args)
    {
    }
    /**
     * Validates data entered when creating or updating a language.
     *
     * @see PLL_Admin_Model::add_language().
     *
     * @since 0.4
     *
     * @param array             $args Parameters of {@see PLL_Admin_Model::add_language() or @see PLL_Admin_Model::update_language()}.
     * @param PLL_Language|null $lang Optional the language currently updated, the language is created if not set.
     * @return WP_Error
     */
    protected function validate_lang($args, $lang = \null)
    {
    }
    /**
     * Updates the translations when a language slug has been modified in settings
     * or deletes them when a language is removed.
     *
     * @since 0.5
     *
     * @param string $old_slug The old language slug.
     * @param string $new_slug Optional, the new language slug, if not set it means that the language has been deleted.
     * @return void
     */
    public function update_translations($old_slug, $new_slug = '')
    {
    }
    /**
     * Updates the default language
     * taking care to update the default category & the nav menu locations.
     *
     * @since 1.8
     *
     * @param string $slug New language slug.
     * @return void
     */
    public function update_default_lang($slug)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages custom menus translations
 * Common to admin and frontend for the customizer
 *
 * @since 1.7.7
 */
class PLL_Nav_Menu
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Theme name.
     *
     * @var string
     */
    protected $theme;
    /**
     * Array of menu ids in a given language used when auto add pages to menus.
     *
     * @var int[]
     */
    protected $auto_add_menus = array();
    /**
     * Constructor: setups filters and actions
     *
     * @since 1.7.7
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Assigns the title and label to the language switcher menu items
     *
     * @since 2.6
     *
     * @param stdClass $item Menu item.
     * @return stdClass
     */
    public function wp_setup_nav_menu_item($item)
    {
    }
    /**
     * Create temporary nav menu locations ( one per location and per language ) for all non-default language
     * to do only one time
     *
     * @since 1.2
     *
     * @return void
     */
    public function create_nav_menu_locations()
    {
    }
    /**
     * Creates a temporary nav menu location from a location and a language
     *
     * @since 1.8
     *
     * @param string       $loc  Nav menu location.
     * @param PLL_Language $lang Language object.
     * @return string
     */
    public function combine_location($loc, $lang)
    {
    }
    /**
     * Get nav menu locations and language from a temporary location.
     *
     * @since 1.8
     *
     * @param string $loc Temporary location.
     * @return string[] {
     *   @type string $location Nav menu location.
     *   @type string $lang     Language code.
     * }
     */
    public function explode_location($loc)
    {
    }
    /**
     * Filters the option nav_menu_options for auto added pages to menu
     *
     * @since 0.9.4
     *
     * @param array $options
     * @return array Modified options
     */
    public function nav_menu_options($options)
    {
    }
    /**
     * Filters _wp_auto_add_pages_to_menu by language.
     *
     * @since 0.9.4
     *
     * @param string  $new_status Transition to this post status.
     * @param string  $old_status Previous post status.
     * @param WP_Post $post       Post object.
     * @return void
     */
    public function auto_add_pages_to_menu($new_status, $old_status, $post)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages custom menus translations as well as the language switcher menu item on admin side
 *
 * @since 1.2
 */
class PLL_Admin_Nav_Menu extends \PLL_Nav_Menu
{
    /**
     * Constructor: setups filters and actions
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Setups filters and terms
     * adds the language switcher metabox and create new nav menu locations
     *
     * @since 1.1
     *
     * @return void
     */
    public function admin_init()
    {
    }
    /**
     * Language switcher metabox
     * The checkbox and all hidden fields are important
     * Thanks to John Morris for his very interesting post http://www.johnmorrisonline.com/how-to-add-a-fully-functional-custom-meta-box-to-wordpress-navigation-menus/
     *
     * @since 1.1
     *
     * @return void
     */
    public function lang_switch()
    {
    }
    /**
     * Prepares javascript to modify the language switcher menu item
     *
     * @since 1.1
     *
     * @return void
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Save our menu item options
     *
     * @since 1.1
     *
     * @param int $menu_id not used
     * @param int $menu_item_db_id
     * @return void
     */
    public function wp_update_nav_menu_item($menu_id = 0, $menu_item_db_id = 0)
    {
    }
    /**
     * Assign menu languages and translations based on ( temporary ) locations
     *
     * @since 1.8
     *
     * @param array $locations nav menu locations
     * @return array
     */
    public function update_nav_menu_locations($locations)
    {
    }
    /**
     * Assign menu languages and translations based on ( temporary ) locations.
     *
     * @since 1.1
     *
     * @param mixed $mods Theme mods.
     * @return mixed
     */
    public function pre_update_option_theme_mods($mods)
    {
    }
    /**
     * Fills temporary menu locations based on menus translations
     *
     * @since 1.2
     *
     * @param bool|array $menus
     * @return bool|array modified list of menu locations
     */
    public function theme_mod_nav_menu_locations($menus)
    {
    }
    /**
     * Removes the nav menu term_id from the locations stored in Polylang options when a nav menu is deleted
     *
     * @since 1.7.3
     *
     * @param int $term_id nav menu id
     * @return void
     */
    public function delete_nav_menu($term_id)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to manage admin notices
 * displayed only to admin, based on 'manage_options' capability
 * and only on dashboard, plugins and Polylang admin pages
 *
 * @since 2.3.9
 * @since 2.7 Dismissed notices are stored in an option instead of a user meta
 */
class PLL_Admin_Notices
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    protected $options;
    /**
     * Constructor
     * Setup actions
     *
     * @since 2.3.9
     *
     * @param object $polylang
     */
    public function __construct($polylang)
    {
    }
    /**
     * Add a custom notice
     *
     * @since 2.3.9
     *
     * @param string $name Notice name
     * @param string $html Content of the notice
     * @return void
     */
    public static function add_notice($name, $html)
    {
    }
    /**
     * Get custom notices.
     *
     * @since 2.3.9
     *
     * @return string[]
     */
    public static function get_notices()
    {
    }
    /**
     * Has a notice been dismissed?
     *
     * @since 2.3.9
     *
     * @param string $notice Notice name
     * @return bool
     */
    public static function is_dismissed($notice)
    {
    }
    /**
     * Should we display notices on this screen?
     *
     * @since 2.3.9
     *
     * @param  string $notice The notice name.
     * @return bool
     */
    protected function can_display_notice($notice)
    {
    }
    /**
     * Stores a dismissed notice in database
     *
     * @since 2.3.9
     *
     * @param string $notice
     * @return void
     */
    public static function dismiss($notice)
    {
    }
    /**
     * Handle a click on the dismiss button
     *
     * @since 2.3.9
     *
     * @return void
     */
    public function hide_notice()
    {
    }
    /**
     * Displays notices
     *
     * @since 2.3.9
     *
     * @return void
     */
    public function display_notices()
    {
    }
    /**
     * Displays a dismiss button
     *
     * @since 2.3.9
     *
     * @param string $name Notice name
     * @return void
     */
    public function dismiss_button($name)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Base class to manage the static front page and the page for posts.
 *
 * @since 1.8
 */
class PLL_Static_Pages
{
    /**
     * Id of the page on front.
     *
     * @var int
     */
    public $page_on_front = 0;
    /**
     * Id of the page for posts.
     *
     * @var int
     */
    public $page_for_posts = 0;
    /**
     * @var PLL_Model
     */
    protected $model;
    /**
     * Current language.
     *
     * @var PLL_Language|null
     */
    protected $curlang;
    /**
     * Constructor: setups filters and actions.
     *
     * @since 1.8
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Stores the page on front and page for posts ids.
     *
     * @since 1.8
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Returns the ID of the static page translation.
     *
     * @since 3.4
     *
     * @param string $static_page Static page option name; `page_on_front` or `page_for_posts`.
     * @param array  $language    Language data.
     * @return int
     */
    protected function get_translation($static_page, $language)
    {
    }
    /**
     * Adds `page_on_front` and `page_for_posts` properties to language data before the object is created.
     *
     * @since 3.4
     *
     * @param array $additional_data Array of language additional data.
     * @param array $language        Language data.
     * @return array Language data with additional `page_on_front` and `page_for_posts` options added.
     */
    public function set_static_pages($additional_data, $language)
    {
    }
    /**
     * Cleans the language cache and resets the internal properties when options are updated.
     *
     * @since 3.4
     *
     * @return void
     */
    public function clean_cache()
    {
    }
    /**
     * Init the hooks that filter the "page on front" and "page for posts" options.
     *
     * @since 3.3
     *
     * @return void
     */
    public function pll_language_defined()
    {
    }
    /**
     * Translates the page on front option.
     *
     * @since 1.8
     * @since 3.3 Was previously defined in PLL_Frontend_Static_Pages.
     *
     * @param  int $page_id ID of the page on front.
     * @return int
     */
    public function translate_page_on_front($page_id)
    {
    }
    /**
     * Translates the page for posts option.
     *
     * @since 1.8
     *
     * @param  int $page_id ID of the page for posts.
     * @return int
     */
    public function translate_page_for_posts($page_id)
    {
    }
    /**
     * Modifies the page link in case the front page is not in the default language.
     *
     * @since 0.7.2
     *
     * @param string $link The link to the page.
     * @param int    $id   The post ID of the page.
     * @return string Modified link.
     */
    public function page_link($link, $id)
    {
    }
    /**
     * Fixes the oembed for the translated static front page
     * when the language page is redirected to the front page.
     *
     * @since 2.6
     *
     * @param int    $post_id The post ID.
     * @param string $url     The requested URL.
     * @return int
     */
    public function oembed_request_post_id($post_id, $url)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages the static front page and the page for posts on admin side
 *
 * @since 1.8
 */
class PLL_Admin_Static_Pages extends \PLL_Static_Pages
{
    /**
     * @var PLL_Admin_Links|null
     */
    protected $links;
    /**
     * Constructor: setups filters and actions
     *
     * @since 1.8
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Adds post state for translations of the front page and posts page.
     *
     * @since 1.8
     *
     * @param string[] $post_states An array of post display states.
     * @param WP_Post  $post        The current post object.
     * @return string[]
     */
    public function display_post_states($post_states, $post)
    {
    }
    /**
     * Refreshes the language cache when a static front page or page for for posts has been translated.
     *
     * @since 1.8
     *
     * @param int     $post_id      Not used.
     * @param WP_Post $post         Not used.
     * @param int[]   $translations Translations of the post being saved.
     * @return void
     */
    public function pll_save_post($post_id, $post, $translations)
    {
    }
    /**
     * Prevents WP resetting the option if the admin language filter is active for a language with no pages
     *
     * @since 1.9.3
     *
     * @param string $value
     * @param string $old_value
     * @return string
     */
    public function update_show_on_front($value, $old_value)
    {
    }
    /**
     * Add a notice to translate the static front page if it is not translated in all languages
     * This is especially useful after a new language is created.
     * The notice is not dismissible and displayed on the Languages pages and the list of pages.
     *
     * @since 2.6
     *
     * @return void
     */
    public function notice_must_translate()
    {
    }
    /**
     * Returns the message asking to translate the static front page in all languages.
     *
     * @since 2.8
     *
     * @return string
     */
    public function get_must_translate_message()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A fully static class to manage strings translations on admin side
 *
 * @since 1.6
 */
class PLL_Admin_Strings
{
    /**
     * Stores the strings to translate.
     *
     * @var array {
     *   @type string $name      A unique name for the string.
     *   @type string $string    The actual string to translate.
     *   @type string $context   The group in which the string is registered.
     *   @type bool   $multiline Whether the string table should display a multiline textarea or a single line input.
     * }
     */
    protected static $strings = array();
    /**
     * The strings to register by default.
     *
     * @var string[]|null
     */
    protected static $default_strings;
    /**
     * Add filters
     *
     * @since 1.6
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Register strings for translation making sure it is not duplicate or empty
     *
     * @since 0.6
     *
     * @param string $name      A unique name for the string
     * @param string $string    The string to register
     * @param string $context   Optional, the group in which the string is registered, defaults to 'polylang'
     * @param bool   $multiline Optional, whether the string table should display a multiline textarea or a single line input, defaults to single line
     * @return void
     */
    public static function register_string($name, $string, $context = 'Polylang', $multiline = \false)
    {
    }
    /**
     * Get registered strings
     *
     * @since 0.6.1
     *
     * @return array list of all registered strings
     */
    public static function &get_strings()
    {
    }
    /**
     * Performs the sanitization ( before saving in DB ) of default strings translations
     *
     * @since 1.6
     *
     * @param string $translation translation to sanitize
     * @param string $name        unique name for the string
     * @return string
     */
    public static function sanitize_string_translation($translation, $name)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Main Polylang class for admin (except Polylang pages), accessible from @see PLL().
 *
 * @since 1.2
 */
class PLL_Admin extends \PLL_Admin_Base
{
    /**
     * @var PLL_Admin_Filters|null
     */
    public $filters;
    /**
     * @var PLL_Admin_Filters_Columns|null
     */
    public $filters_columns;
    /**
     * @var PLL_Admin_Filters_Post|null
     */
    public $filters_post;
    /**
     * @var PLL_Admin_Filters_Term|null
     */
    public $filters_term;
    /**
     * @var PLL_Admin_Filters_Media|null
     */
    public $filters_media;
    /**
     * @since 2.9
     *
     * @var PLL_Filters_Sanitization|null
     */
    public $filters_sanitization;
    /**
     * @var PLL_Admin_Block_Editor|null
     */
    public $block_editor;
    /**
     * @var PLL_Admin_Classic_Editor|null
     */
    public $classic_editor;
    /**
     * @var PLL_Admin_Nav_Menu|null
     */
    public $nav_menu;
    /**
     * @var PLL_Admin_Filters_Widgets_Options|null
     */
    public $filters_widgets_options;
    /**
     * Setups filters and action needed on all admin pages and on plugins page.
     *
     * @since 1.2
     *
     * @param PLL_Links_Model $links_model Reference to the links model.
     */
    public function __construct(&$links_model)
    {
    }
    /**
     * Setups filters and action needed on all admin pages and on plugins page
     * Loads the settings pages or the filters base on the request
     *
     * @since 1.2
     */
    public function init()
    {
    }
    /**
     * Adds a 'settings' link for our plugin in the plugins list table.
     *
     * @since 0.1
     *
     * @param string[] $links List of links associated to the plugin.
     * @return string[] Modified list of links.
     */
    public function plugin_action_links($links)
    {
    }
    /**
     * Adds the upgrade notice in plugins table
     *
     * @since 1.1.6
     *
     * @param array  $plugin_data Not used
     * @param object $r           Plugin update data
     * @return void
     */
    public function plugin_update_message($plugin_data, $r)
    {
    }
    /**
     * Setup filters for admin pages
     *
     * @since 1.2
     * @since 2.7 instantiate a PLL_Bulk_Translate instance.
     * @return void
     */
    public function add_filters()
    {
    }
    /**
     * Retrieve the locale according to the current language instead of the language
     * of the admin interface.
     *
     * @since 2.0
     *
     * @return string
     */
    public function get_locale_for_sanitization()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Class Accept_Language.
 *
 * Represents an Accept-Language HTTP Header, as defined in RFC 2616 Section 14.4 {@see https://tools.ietf.org/html/rfc2616.html#section-14.4}.
 *
 * @since 3.0
 */
class PLL_Accept_Language
{
    const SUBTAG_PATTERNS = array('language' => '(\\b[a-z]{2,3}|[a-z]{4}|[a-z]{5-8}\\b)', 'language-extension' => '(?:-(\\b[a-z]{3}){1,3}\\b)?', 'script' => '(?:-(\\b[a-z]{4})\\b)?', 'region' => '(?:-(\\b[a-z]{2}|[0-9]{3})\\b)?', 'variant' => '(?:-(\\b[0-9][a-z]{1,3}|[a-z][a-z0-9]{4,7})\\b)?', 'extension' => '(?:-(\\b[a-wy-z]-[a-z0-9]{2,8})\\b)?', 'private-use' => '(?:-(\\bx-[a-z0-9]{1,8})\\b)?');
    /**
     * @var string[] {
     *  @type string $language           Usually 2 or three letters (ISO 639).
     *  @type string $language-extension Up to three groups of 3 letters.
     *  @type string $script             Four letters.
     *  @type string $region             Either two letters of three digits.
     *  @type string $variant            Either one digit followed by 1 to 3 letters, or a letter followed by 2 to 7 alphanumerical characters.
     *  @type string $extension          One letter that cannot be an 'x', followed by 2 to 8 alphanumerical characters.
     *  @type string $private-use        Starts by 'x-', followed by 1 to 8 alphanumerical characters.
     * }
     */
    protected $subtags;
    /**
     * @var float
     */
    protected $quality;
    /**
     * PLL_Accept_Language constructor.
     *
     * @since 3.0
     *
     * @param string[] $subtags With subtag name as keys and subtag values as names.
     * @param mixed    $quality Floating point value from 0.0 to 1.0. Higher values indicates a user's preference.
     */
    public function __construct($subtags, $quality = 1.0)
    {
    }
    /**
     * Creates a new instance from an array resulting of a PHP {@see preg_match()} or {@see preg_match_all()} call.
     *
     * @since 3.0
     *
     * @param string[] $matches Expects first entry to be full match, following entries to be subtags and last entry to be quality factor.
     * @return PLL_Accept_Language
     */
    public static function from_array($matches)
    {
    }
    /**
     * Returns the full language tag.
     *
     * @since 3.0
     *
     * @return string
     */
    public function __toString()
    {
    }
    /**
     * Returns the quality factor as negotiated by the browser agent.
     *
     * @since 3.0
     *
     * @return float
     */
    public function get_quality()
    {
    }
    /**
     * Returns a subtag from the language tag.
     *
     * @since 3.0
     *
     * @param string $name A valid subtag name, {@see PLL_Accept_Language::SUBTAG_PATTERNS} for available subtag names.
     * @return string
     */
    public function get_subtag($name)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Class PLL_Accept_Languages_Collection.
 *
 * Represents a collection of values parsed from an Accept-Language HTTP header.
 *
 * @since 3.0
 */
class PLL_Accept_Languages_Collection
{
    /**
     * @var PLL_Accept_Language[]
     */
    protected $accept_languages = array();
    /**
     * Parse Accept-Language HTTP header according to IETF BCP 47.
     *
     * @since 3.0
     *
     * @param string $http_header Value of the Accept-Language HTTP Header. Formatted as stated BCP 47 for language tags {@see https://tools.ietf.org/html/bcp47}.
     * @return PLL_Accept_Languages_Collection
     */
    public static function from_accept_language_header($http_header)
    {
    }
    /**
     * PLL_Accept_Languages_Collection constructor.
     *
     * @since 3.0
     *
     * @param PLL_Accept_Language[] $accept_languages
     */
    public function __construct($accept_languages = array())
    {
    }
    /**
     * Bubble sort ( need a stable sort for Android, so can't use a PHP sort function ).
     *
     * @since 3.0
     *
     * @return void
     */
    public function bubble_sort()
    {
    }
    /**
     * Looks through sorted list and use first one that matches our language list.
     *
     * @since 3.0
     *
     * @param PLL_Language[] $languages
     * @return string|false A language slug if there's a match, false otherwise.
     */
    public function find_best_match($languages = array())
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages canonical redirect on frontend.
 *
 * @since 3.3
 */
class PLL_Canonical
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    protected $options;
    /**
     * @var PLL_Model
     */
    protected $model;
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Model
     */
    protected $links_model;
    /**
     * Current language.
     *
     * @var PLL_Language
     */
    protected $curlang;
    /**
     * Constructor.
     *
     * @since 3.3
     *
     * @param object $polylang Main Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * If the language code is not in agreement with the language of the content,
     * redirects incoming links to the proper URL to avoid duplicate content.
     *
     * @since 0.9.6
     *
     * @global WP_Query $wp_query WordPress Query object.
     * @global bool     $is_IIS
     *
     * @param string $requested_url Optional, defaults to requested url.
     * @param bool   $do_redirect   Optional, whether to perform the redirect or not.
     * @return string|void Returns if redirect is not performed.
     */
    public function check_canonical_url($requested_url = '', $do_redirect = \true)
    {
    }
    /**
     * Returns the term_id of the requested term.
     *
     * @since 2.9
     *
     * @param WP_Tax_Query $tax_query An instance of WP_Tax_Query.
     * @return int
     */
    protected function get_queried_term_id($tax_query)
    {
    }
    /**
     * Find the taxonomy being queried.
     *
     * @since 2.9
     *
     * @param WP_Tax_Query $tax_query An instance of WP_Tax_Query.
     * @return string A taxonomy slug
     */
    protected function get_queried_taxonomy($tax_query)
    {
    }
    /**
     * Evaluates the canonical redirect url through the deidcated WP function.
     *
     * @since 3.3
     *
     * @global WP_Query $wp_query WordPress Query object.
     *
     * @param string       $url      Requested url.
     * @param PLL_Language $language Language of the queried object.
     * @return string
     */
    protected function redirect_canonical($url, $language)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Base class to choose the language
 *
 * @since 1.2
 */
abstract class PLL_Choose_Lang
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Model
     */
    public $links_model;
    /**
     * Current language.
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Sets the language for ajax requests
     * and setup actions
     * Any child class must call this method if it overrides it
     *
     * @since 1.8
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Sets the current language
     * and fires the action 'pll_language_defined'.
     *
     * @since 1.2
     *
     * @param PLL_Language $curlang Current language.
     * @return void
     */
    protected function set_language($curlang)
    {
    }
    /**
     * Set a cookie to remember the language.
     * Setting PLL_COOKIE to false will disable cookie although it will break some functionalities
     *
     * @since 1.5
     *
     * @return void
     */
    public function maybe_setcookie()
    {
    }
    /**
     * Get the preferred language according to the browser preferences.
     *
     * @since 1.8
     *
     * @return string|bool The preferred language slug or false.
     */
    public function get_preferred_browser_language()
    {
    }
    /**
     * Returns the preferred language
     * either from the cookie if it's a returning visit
     * or according to browser preference
     * or the default language
     *
     * @since 0.1
     *
     * @return object browser preferred language or default language
     */
    public function get_preferred_language()
    {
    }
    /**
     * Sets the language when home page is requested
     *
     * @since 1.2
     *
     * @return void
     */
    protected function home_language()
    {
    }
    /**
     * To call when the home page has been requested
     * Make sure to call this after 'setup_theme' has been fired as we need $wp_query
     * Performs a redirection to the home page in the current language if needed
     *
     * @since 0.9
     *
     * @return void
     */
    public function home_requested()
    {
    }
    /**
     * Set the language when posting a comment
     *
     * @since 0.8.4
     *
     * @param int $post_id the post being commented
     * @return void
     */
    public function pre_comment_on_post($post_id)
    {
    }
    /**
     * Modifies some main query vars for the home page and the page for posts
     * to enable one home page (and one page for posts) per language.
     *
     * @since 1.2
     *
     * @param WP_Query $query Instance of WP_Query.
     * @return void
     */
    public function parse_main_query($query)
    {
    }
    /**
     * Filters the option show_on_front when the current front page displays posts.
     *
     * This is useful when a static front page is not translated in all languages.
     *
     * @return string
     */
    public function filter_option_show_on_front()
    {
    }
    /**
     * Sets the current language in the query.
     *
     * @since 2.2
     *
     * @param WP_Query $query Instance of WP_Query.
     * @return void
     */
    protected function set_curlang_in_query(&$query)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Choose the language when it is set from content
 * The language is set either in parse_query with priority 2 or in wp with priority 5
 *
 * @since 1.2
 */
class PLL_Choose_Lang_Content extends \PLL_Choose_Lang
{
    /**
     * Defers the language choice to the 'wp' action (when the content is known)
     *
     * @since 1.8
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Overwrites parent::set_language to remove the 'wp' action if the language is set before.
     *
     * @since 1.2
     *
     * @param PLL_Language $curlang Current language.
     * @return void
     */
    protected function set_language($curlang)
    {
    }
    /**
     * Returns the language based on the queried content
     *
     * @since 1.2
     *
     * @return object|bool detected language, false if none was found
     */
    protected function get_language_from_content()
    {
    }
    /**
     * Sets the language for the home page.
     * Adds the lang query var when querying archives with no language code.
     *
     * @since 1.2
     *
     * @param WP_Query $query Instance of WP_Query.
     * @return void
     */
    public function parse_main_query($query)
    {
    }
    /**
     * Sets the language from content
     *
     * @since 1.2
     *
     * @return void
     */
    public function wp()
    {
    }
    /**
     * If no language is found by {@see PLL_Choose_Lang_Content::get_language_from_content()}, returns the preferred one.
     *
     * @since 0.9
     *
     * @param PLL_Language|false $lang Language found by {@see PLL_Choose_Lang_Content::get_language_from_content()}.
     * @return PLL_Language
     */
    public function pll_get_current_language($lang)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Choose the language when the language code is added to all urls
 * The language is set in plugins_loaded with priority 1 as done by WPML
 * Some actions have to be delayed to wait for $wp_rewrite availability
 *
 * @since 1.2
 */
class PLL_Choose_Lang_Url extends \PLL_Choose_Lang
{
    /**
     * The name of the index file which is the entry point to all requests.
     * We need this before the global $wp_rewrite is created.
     * Also hardcoded in WP_Rewrite.
     *
     * @var string
     */
    protected $index = 'index.php';
    /**
     * Sets the language
     *
     * @since 1.8
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Finds the language according to information found in the url
     *
     * @since 1.2
     *
     * @return void
     */
    public function set_language_from_url()
    {
    }
    /**
     * Adds the current language in query vars
     * useful for subdomains and multiple domains
     *
     * @since 1.8
     *
     * @param array $qv main request query vars
     * @return array modified query vars
     */
    public function request($qv)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Choose the language when the language is managed by different domains
 *
 * @since 1.5
 */
class PLL_Choose_Lang_Domain extends \PLL_Choose_Lang_Url
{
    /**
     * Don't set any language cookie
     *
     * @since 1.5
     *
     * @return void
     */
    public function maybe_setcookie()
    {
    }
    /**
     * Don't redirect according to browser preferences
     *
     * @since 1.5
     *
     * @return PLL_Language
     */
    public function get_preferred_language()
    {
    }
    /**
     * Adds query vars to query for home pages in all languages
     *
     * @since 1.5
     *
     * @return void
     */
    public function home_requested()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Auto translates the posts and terms ids
 * Useful for example for themes querying a specific cat
 *
 * @since 1.1
 */
class PLL_Frontend_Auto_Translate
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Current language.
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Constructor
     *
     * @since 1.1
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Helper function to get the translated post in the current language
     *
     * @since 1.8
     *
     * @param int $post_id
     * @return int
     *
     * @phpstan-return int<0, max>
     */
    protected function get_post($post_id)
    {
    }
    /**
     * Helper function to get the translated term in the current language
     *
     * @since 1.8
     *
     * @param int $term_id
     * @return int
     *
     * @phpstan-return int<0, max>
     */
    protected function get_term($term_id)
    {
    }
    /**
     * Filters posts query to automatically translate included ids
     *
     * @since 1.1
     *
     * @param WP_Query $query WP_Query object
     * @return void
     */
    public function pre_get_posts($query)
    {
    }
    /**
     * Filters terms query to automatically translate included ids
     *
     * @since 1.1.1
     *
     * @param array $args
     * @param array $taxonomies
     * @return array modified $args
     */
    public function get_terms_args($args, $taxonomies)
    {
    }
    /**
     * Translates tax queries
     * Compatible with nested tax queries introduced in WP 4.1
     *
     * @since 1.7
     *
     * @param array $tax_queries
     * @return array translated tax queries
     */
    protected function translate_tax_query_recursive($tax_queries)
    {
    }
    /**
     * Translates a term given one field.
     *
     * @since 2.3.3
     *
     * @param string     $field    Either 'slug', 'name', 'term_id', or 'term_taxonomy_id'
     * @param string|int $term     Search for this term value
     * @param string     $taxonomy Taxonomy name.
     * @return string|int Translated term slug, name, term_id or term_taxonomy_id
     */
    protected function get_translated_term_by($field, $term, $taxonomy)
    {
    }
    /**
     * Translates a list of term slugs provided either as an array or a string
     * with slugs separated by a comma or a '+'.
     *
     * @since 3.2.8
     *
     * @param string|string[] $query_var The list of term slugs.
     * @param string          $taxonomy  The taxonomy for terms.
     * @return string|string[] The translated list.
     */
    protected function translate_terms_list($query_var, $taxonomy)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages links filters needed on both frontend and admin
 *
 * @since 1.8
 */
class PLL_Filters_Links
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Model
     */
    public $links_model;
    /**
     * @var PLL_Links|null
     */
    public $links;
    /**
     * Current language.
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Constructor
     *
     * @since 1.8
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Modifies page links
     *
     * @since 1.7
     *
     * @param string $link    post link
     * @param int    $post_id post ID
     * @return string modified post link
     */
    public function _get_page_link($link, $post_id)
    {
    }
    /**
     * Modifies attachment links
     *
     * @since 1.6.2
     *
     * @param string $link    attachment link
     * @param int    $post_id attachment link
     * @return string modified attachment link
     */
    public function attachment_link($link, $post_id)
    {
    }
    /**
     * Modifies custom posts links.
     *
     * @since 1.6
     *
     * @param string  $link Post link.
     * @param WP_Post $post Post object.
     * @return string Modified post link.
     */
    public function post_type_link($link, $post)
    {
    }
    /**
     * Modifies term links.
     *
     * @since 0.7
     *
     * @param string  $link Term link.
     * @param WP_Term $term Term object.
     * @param string  $tax  Taxonomy name;
     * @return string Modified term link.
     */
    public function term_link($link, $term, $tax)
    {
    }
    /**
     * Keeps the preview post link on default domain when using multiple domains
     *
     * @since 1.6.1
     *
     * @param string $url
     * @return string modified url
     */
    public function preview_post_link($url)
    {
    }
    /**
     * Modifies the post type archive links to add the language parameter
     * only if the post type is translated.
     *
     * The filter was originally only on frontend but is needed on admin too for
     * compatibility with the archive link of the ACF link field since ACF 5.4.0.
     *
     * @since 1.7.6
     *
     * @param string $link      The post type archive permalink.
     * @param string $post_type Post type name.
     * @return string
     */
    public function post_type_archive_link($link, $post_type)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages links filters on frontend
 *
 * @since 1.8
 */
class PLL_Frontend_Filters_Links extends \PLL_Filters_Links
{
    /**
     * @var PLL_Frontend_Links|null
     */
    public $links;
    /**
     * Our internal non persistent cache object
     *
     * @var PLL_Cache
     */
    public $cache;
    /**
     * Constructor
     * Adds filters once the language is defined
     * Low priority on links filters to come after any other modification
     *
     * @since 1.8
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Modifies the author and date links to add the language parameter ( as well as feed link )
     *
     * @since 0.4
     *
     * @param string $link
     * @return string modified link
     */
    public function archive_link($link)
    {
    }
    /**
     * Modifies page links
     * and caches the result
     *
     * @since 1.7
     *
     * @param string $link    post link
     * @param int    $post_id post ID
     * @return string modified post link
     */
    public function _get_page_link($link, $post_id)
    {
    }
    /**
     * Modifies attachment links
     * and caches the result
     *
     * @since 1.6.2
     *
     * @param string $link    attachment link
     * @param int    $post_id attachment link
     * @return string modified attachment link
     */
    public function attachment_link($link, $post_id)
    {
    }
    /**
     * Modifies custom posts links
     * and caches the result.
     *
     * @since 1.6
     *
     * @param string  $link Post link.
     * @param WP_Post $post Post object.
     * @return string Modified post link.
     */
    public function post_type_link($link, $post)
    {
    }
    /**
     * Modifies filtered taxonomies ( post format like ) and translated taxonomies links
     * and caches the result.
     *
     * @since 0.7
     *
     * @param string  $link Term link.
     * @param WP_Term $term Term object.
     * @param string  $tax  Taxonomy name.
     * @return string Modified link.
     */
    public function term_link($link, $term, $tax)
    {
    }
    /**
     * Modifies the post short link when using one domain or subdomain per language.
     *
     * @since 2.6.9
     *
     * @param string $link    Post permalink.
     * @param int    $post_id Post id.
     * @return string Post permalink with the correct domain.
     */
    public function shortlink($link, $post_id)
    {
    }
    /**
     * Outputs references to translated pages ( if exists ) in the html head section
     *
     * @since 0.1
     *
     * @return void
     */
    public function wp_head()
    {
    }
    /**
     * Filters the home url to get the right language
     *
     * @since 0.4
     *
     * @param string $url
     * @param string $path
     * @return string
     */
    public function home_url($url, $path)
    {
    }
    /**
     * Rewrites ajax url when using domains or subdomains
     *
     * @since 1.5
     *
     * @param string $url  admin url with path evaluated by WordPress
     * @param string $path admin path
     * @return string
     */
    public function admin_url($url, $path)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Filters search forms when using permalinks
 *
 * @since 1.2
 */
class PLL_Frontend_Filters_Search
{
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Model
     */
    public $links_model;
    /**
     * Current language.
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Adds the language information in the search form.
     *
     * Does not work if searchform.php ( prior to WP 3.6 ) is used or if the search form is hardcoded in another template file
     *
     * @since 0.1
     *
     * @param string $form The search form HTML.
     * @return string Modified search form.
     */
    public function get_search_form($form)
    {
    }
    /**
     * Adds the language information in admin bar search form
     *
     * @since 1.2
     *
     * @return void
     */
    public function add_admin_bar_menus()
    {
    }
    /**
     * Rewrites the admin bar search form to pass our get_search_form filter. See #21342.
     * Code last checked: WP 5.4.1.
     *
     * @since 0.9
     *
     * @param WP_Admin_Bar $wp_admin_bar
     * @return void
     */
    public function admin_bar_search_menu($wp_admin_bar)
    {
    }
    /**
     * Allows modifying the search form if it does not pass get_search_form
     *
     * @since 0.1
     *
     * @return void
     */
    public function wp_print_footer_scripts()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Filters content by language on frontend
 *
 * @since 1.2
 */
class PLL_Frontend_Filters extends \PLL_Filters
{
    /**
     * Constructor: setups filters and actions
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Returns the locale based on current language
     *
     * @since 0.1
     *
     * @return string
     */
    public function get_locale()
    {
    }
    /**
     * Filters sticky posts by current language.
     *
     * @since 0.8
     *
     * @param int[] $posts List of sticky posts ids.
     * @return int[] Modified list of sticky posts ids
     */
    public function option_sticky_posts($posts)
    {
    }
    /**
     * Modifies the sql request for wp_get_archives to filter by the current language
     *
     * @since 1.9
     *
     * @param string $sql JOIN clause
     * @param array  $r   wp_get_archives arguments
     * @return string modified JOIN clause
     */
    public function getarchives_join($sql, $r)
    {
    }
    /**
     * Modifies the sql request for wp_get_archives to filter by the current language
     *
     * @since 1.9
     *
     * @param string $sql WHERE clause
     * @param array  $r   wp_get_archives arguments
     * @return string modified WHERE clause
     */
    public function getarchives_where($sql, $r)
    {
    }
    /**
     * Filters the widgets according to the current language
     * Don't display if a language filter is set and this is not the current one
     * Needed for {@see https://developer.wordpress.org/reference/functions/the_widget/ the_widget()}.
     *
     * @since 0.3
     *
     * @param array $instance Widget settings
     * @return bool|array false if we hide the widget, unmodified $instance otherwise
     */
    public function widget_display_callback($instance)
    {
    }
    /**
     * Translates media in media widgets
     *
     * @since 2.1.5
     *
     * @param array $instance Widget instance data
     * @return array
     */
    public function widget_media_instance($instance)
    {
    }
    /**
     * Translates biography
     *
     * @since 0.9
     *
     * @param null   $null
     * @param int    $id       User id
     * @param string $meta_key
     * @param bool   $single   Whether to return only the first value of the specified $meta_key
     * @return null|string
     */
    public function get_user_metadata($null, $id, $meta_key, $single)
    {
    }
    /**
     * Filters the translation files to load when doing ajax on front
     * This is needed because WP the language files associated to the user locale when a user is logged in
     *
     * @since 2.2.6
     *
     * @param string $mofile Translation file name
     * @return string
     */
    public function load_textdomain_mofile($mofile)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages links filters and url of translations on frontend
 *
 * @since 1.2
 */
class PLL_Frontend_Links extends \PLL_Links
{
    /**
     * Internal non persistent cache object.
     *
     * @var PLL_Cache
     */
    public $cache;
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Returns the url of the translation (if it exists) of the current page.
     *
     * @since 0.1
     *
     * @param PLL_Language $language Language object.
     * @return string
     */
    public function get_translation_url($language)
    {
    }
    /**
     * Get the translation of the current archive url
     * used also for search
     *
     * @since 1.2
     *
     * @param object $language
     * @return string
     */
    public function get_archive_url($language)
    {
    }
    /**
     * Returns the home url in the right language.
     *
     * @since 0.1
     *
     * @param PLL_Language|string $language  Optional, defaults to current language.
     * @param bool                $is_search Optional, whether we need the home url for a search form, defaults to false.
     */
    public function get_home_url($language = '', $is_search = \false)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages custom menus translations as well as the language switcher menu item on frontend
 *
 * @since 1.2
 */
class PLL_Frontend_Nav_Menu extends \PLL_Nav_Menu
{
    /**
     * Current language.
     *
     * @var PLL_Language|null|false
     */
    public $curlang;
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Sorts menu items by menu order.
     *
     * @since 1.7.9
     *
     * @param stdClass $a The first object to compare.
     * @param stdClass $b The second object to compare.
     * @return int -1 or 1 if $a is considered to be respectively less than or greater than $b.
     */
    protected function usort_menu_items($a, $b)
    {
    }
    /**
     * Format a language switcher menu item title based on options
     *
     * @since 2.2.6
     *
     * @param string $flag    Formatted flag
     * @param string $name    Language name
     * @param array  $options Language switcher options
     * @return string Formatted menu item title
     */
    protected function get_item_title($flag, $name, $options)
    {
    }
    /**
     * Splits the one language switcher menu item of backend in several menu items on frontend.
     * Takes care to menu_order as it is used later in wp_nav_menu().
     *
     * @since 1.1.1
     *
     * @param stdClass[] $items Menu items.
     * @return stdClass[] Modified menu items.
     */
    public function wp_get_nav_menu_items($items)
    {
    }
    /**
     * Returns the ancestors of a menu item.
     *
     * @since 1.1.1
     *
     * @param stdClass $item Menu item.
     * @return int[] Ancestors ids.
     */
    public function get_ancestors($item)
    {
    }
    /**
     * Removes current-menu and current-menu-ancestor classes to lang switcher when not on the home page.
     *
     * @since 1.1.1
     *
     * @param stdClass[] $items An array of menu items.
     * @return stdClass[]
     */
    public function wp_nav_menu_objects($items)
    {
    }
    /**
     * Adds hreflang attribute for the language switcher menu items.
     * available since WP 3.6.
     *
     * @since 1.1
     *
     * @param string[] $atts HTML attributes applied to the menu item's `<a>` element.
     * @param stdClass $item Menu item.
     * @return string[] Modified attributes.
     */
    public function nav_menu_link_attributes($atts, $item)
    {
    }
    /**
     * Fills the theme nav menus locations with the right menu in the right language
     * Needs to wait for the language to be defined
     *
     * @since 1.2
     *
     * @param array|bool $menus list of nav menus locations, false if menu locations have not been filled yet
     * @return array|bool modified list of nav menus locations
     */
    public function nav_menu_locations($menus)
    {
    }
    /**
     * Attempt to translate the nav menu when it is hardcoded or when no location is defined in wp_nav_menu
     *
     * @since 1.7.10
     *
     * @param array $args
     * @return array modified $args
     */
    public function wp_nav_menu_args($args)
    {
    }
    /**
     * Filters the nav menu location before the customizer so that it matches the temporary location in the customizer
     *
     * @since 1.8
     *
     * @param array $args wp_nav_menu $args
     * @return array modified $args
     */
    public function filter_args_before_customizer($args)
    {
    }
    /**
     * Filters the nav menu location after the customizer to get back the true nav menu location for the theme
     *
     * @since 1.8
     *
     * @param array $args wp_nav_menu $args
     * @return array modified $args
     */
    public function filter_args_after_customizer($args)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages the static front page and the page for posts on frontend
 *
 * @since 1.8
 */
class PLL_Frontend_Static_Pages extends \PLL_Static_Pages
{
    /**
     * Instance of a child class of PLL_Links_Model.
     *
     * @var PLL_Links_Model
     */
    protected $links_model;
    /**
     * @var PLL_Frontend_Links|null
     */
    protected $links;
    /**
     * Stores plugin's options.
     *
     * @var array
     */
    protected $options;
    /**
     * Constructor: setups filters and actions.
     *
     * @since 1.8
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Translates the page_id query var when the site root page is requested
     *
     * @since 1.8
     *
     * @return void
     */
    public function pll_home_requested()
    {
    }
    /**
     * Manages canonical redirection of the homepage when using page on front
     *
     * @since 0.1
     *
     * @param string $redirect_url
     * @return bool|string modified url, false if redirection is canceled
     */
    public function redirect_canonical($redirect_url)
    {
    }
    /**
     * Translates the url of the page on front and page for posts.
     *
     * @since 1.8
     *
     * @param string       $url               Empty string or the url of the translation of the current page.
     * @param PLL_Language $language          Language of the translation.
     * @param int          $queried_object_id Queried object ID.
     * @return string The translation url.
     */
    public function pll_pre_translation_url($url, $language, $queried_object_id)
    {
    }
    /**
     * Prevents canonical redirection if we are on a static front page
     *
     * @since 1.8
     *
     * @param string $redirect_url
     * @return bool|string
     */
    public function pll_check_canonical_url($redirect_url)
    {
    }
    /**
     * Is the query for a the static front page (redirected from the language page)?
     *
     * @since 2.3
     *
     * @param WP_Query $query The WP_Query object.
     * @return bool
     */
    protected function is_front_page($query)
    {
    }
    /**
     * Setups query vars when requesting a static front page
     *
     * @since 1.8
     *
     * @param PLL_Language|false $lang  The current language, false if it is not set yet.
     * @param WP_Query           $query The main WP query.
     * @return PLL_Language|false
     */
    public function page_on_front_query($lang, $query)
    {
    }
    /**
     * Setups query vars when requesting a posts page
     *
     * @since 1.8
     *
     * @param PLL_Language|false $lang  The current language, false if it is not set yet.
     * @param WP_Query           $query The main WP query.
     * @return PLL_Language|false
     */
    public function page_for_posts_query($lang, $query)
    {
    }
    /**
     * Get the queried page_id (if it exists ).
     *
     * If permalinks are used, WordPress does set and use `$query->queried_object_id` and sets `$query->query_vars['page_id']` to 0,
     * and does set and use `$query->query_vars['page_id']` if permalinks are not used :(.
     *
     * @since 1.5
     *
     * @param WP_Query $query Instance of WP_Query.
     * @return int The page_id.
     */
    protected function get_page_id($query)
    {
    }
    /**
     * Adds support for the theme customizer.
     *
     * @since 3.4.2
     *
     * @return void
     */
    public function filter_customizer()
    {
    }
    /**
     * Translates the page ID when customized.
     *
     * @since 3.4.2
     *
     * @param int|false $pre A page ID if the setting is customized, false otherwise.
     * @return int|false
     */
    public function customize_page($pre)
    {
    }
    /**
     * Fixes the translation URL if the option 'show_on_front' is customized.
     *
     * @since 3.4.2
     *
     * @param string       $url      An empty string or the URL of the translation of the current page.
     * @param PLL_Language $language The language of the translation.
     * @return string
     */
    public function customize_translation_url($url, $language)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Main Polylang class when on frontend, accessible from @see PLL().
 *
 * @since 1.2
 */
class PLL_Frontend extends \PLL_Base
{
    /**
     * Current language.
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * @var PLL_Frontend_Auto_Translate|null
     */
    public $auto_translate;
    /**
     * The class selecting the current language.
     *
     * @var PLL_Choose_Lang|null
     */
    public $choose_lang;
    /**
     * @var PLL_Frontend_Filters|null
     */
    public $filters;
    /**
     * @var PLL_Frontend_Filters_Links|null
     */
    public $filters_links;
    /**
     * @var PLL_Frontend_Filters_Search|null
     */
    public $filters_search;
    /**
     * @var PLL_Frontend_Links|null
     */
    public $links;
    /**
     * @var PLL_Frontend_Nav_Menu|null
     */
    public $nav_menu;
    /**
     * @var PLL_Frontend_Static_Pages|null
     */
    public $static_pages;
    /**
     * @var PLL_Frontend_Filters_Widgets|null
     */
    public $filters_widgets;
    /**
     * Constructor.
     *
     * @since 1.2
     *
     * @param PLL_Links_Model $links_model Reference to the links model.
     */
    public function __construct(&$links_model)
    {
    }
    /**
     * Setups the language chooser based on options
     *
     * @since 1.2
     */
    public function init()
    {
    }
    /**
     * Setups filters and nav menus once the language has been defined
     *
     * @since 1.2
     *
     * @return void
     */
    public function pll_language_defined()
    {
    }
    /**
     * When querying multiple taxonomies, makes sure that the language is not the queried object.
     *
     * @since 1.8
     *
     * @param WP_Query $query WP_Query object.
     * @return void
     */
    public function parse_tax_query($query)
    {
    }
    /**
     * Modifies some query vars to "hide" that the language is a taxonomy and avoid conflicts.
     *
     * @since 1.2
     *
     * @param WP_Query $query WP_Query object.
     * @return void
     */
    public function parse_query($query)
    {
    }
    /**
     * Auto translate posts and terms ids
     *
     * @since 1.2
     *
     * @return void
     */
    public function auto_translate()
    {
    }
    /**
     * Resets some variables when the blog is switched.
     * Overrides the parent method.
     *
     * @since 1.5.1
     *
     * @param int $new_blog_id  New blog ID.
     * @param int $prev_blog_id Previous blog ID.
     * @return void
     */
    public function switch_blog($new_blog_id, $prev_blog_id)
    {
    }
    /**
     * Remove the customize admin bar on front-end when using a block theme.
     *
     * WordPress removes the Customizer menu if a block theme is activated and no other plugins interact with it.
     * As Polylang interacts with the Customizer, we have to delete this menu ourselves in the case of a block theme,
     * unless another plugin than Polylang interacts with the Customizer.
     *
     * @since 3.2
     *
     * @return void
     */
    public function remove_customize_admin_bar()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * An extremely simple non persistent cache system
 * not as fast as using directly an array but more readable
 *
 * @since 1.7
 */
class PLL_Cache
{
    /**
     * Current site id.
     *
     * @var int
     */
    protected $blog_id;
    /**
     * The cache container.
     *
     * @var array
     */
    protected $cache = array();
    /**
     * Constructor
     *
     * @since 1.7
     */
    public function __construct()
    {
    }
    /**
     * Called when switching blog
     *
     * @since 1.7
     *
     * @param int $new_blog
     * @return void
     */
    public function switch_blog($new_blog)
    {
    }
    /**
     * Add a value in cache
     *
     * @since 1.7
     *
     * @param string $key
     * @param mixed  $data
     * @return void
     */
    public function set($key, $data)
    {
    }
    /**
     * Get value from cache
     *
     * @since 1.7
     *
     * @param string $key
     * @return mixed $data
     */
    public function get($key)
    {
    }
    /**
     * Clean the cache (for this blog only)
     *
     * @since 1.7
     *
     * @param string $key
     * @return void
     */
    public function clean($key = '')
    {
    }
}
/**
 * Controls the plugin, as well as activation, and deactivation
 *
 * @since 0.1
 */
class Polylang
{
    /**
     * Constructor
     *
     * @since 0.1
     */
    public function __construct()
    {
    }
    /**
     * Tells whether the current request is an ajax request on frontend or not
     *
     * @since 2.2
     *
     * @return bool
     */
    public static function is_ajax_on_front()
    {
    }
    /**
     * Is the current request a REST API request?
     * Inspired by WP::parse_request()
     * Needed because at this point, the constant REST_REQUEST is not defined yet
     *
     * @since 2.4.1
     *
     * @return bool
     */
    public static function is_rest_request()
    {
    }
    /**
     * Tells if we are in the wizard process.
     *
     * @since 2.7
     *
     * @return bool
     */
    public static function is_wizard()
    {
    }
    /**
     * Defines constants
     * May be overridden by a plugin if set before plugins_loaded, 1
     *
     * @since 1.6
     *
     * @return void
     */
    public static function define_constants()
    {
    }
    /**
     * Polylang initialization
     * setups models and separate admin and frontend
     *
     * @since 1.2
     *
     * @return void
     */
    public function init()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to manage manage the language cookie
 *
 * @since 2.9
 */
class PLL_Cookie
{
    /**
     * Parses the cookie parameters.
     *
     * @since 2.9
     *
     * @param array $args {@see PLL_Cookie::set()}
     * @return array
     */
    protected static function parse_args($args)
    {
    }
    /**
     * Sets the cookie.
     *
     * @since 2.9
     *
     * @param string $lang Language cookie value.
     * @param array  $args {
     *   Optional. Array of arguments for setting the cookie.
     *
     *   @type string $path     Cookie path, defaults to COOKIEPATH.
     *   @type string $domain   Cookie domain, defaults to COOKIE_DOMAIN
     *   @type bool   $secure   Should the cookie be sent only over https?
     *   @type bool   $httponly Should the cookie accessed only over http protocol? Defaults to false.
     *   @type string $samesite Either 'Strict', 'Lax' or 'None', defaults to 'Lax'.
     * }
     * @return void
     */
    public static function set($lang, $args = array())
    {
    }
    /**
     * Returns the language cookie value.
     *
     * @since 2.9
     *
     * @return string
     */
    public static function get()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Adds actions and filters related to languages when creating, updating or deleting posts.
 * Actions and filters triggered when reading posts are handled separately.
 *
 * @since 2.4
 */
class PLL_CRUD_Posts
{
    /**
     * @var PLL_Model
     */
    protected $model;
    /**
     * Preferred language to assign to a new post.
     *
     * @var PLL_Language|null
     */
    protected $pref_lang;
    /**
     * Current language.
     *
     * @var PLL_Language|null
     */
    protected $curlang;
    /**
     * Constructor
     *
     * @since 2.4
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Allows to set a language by default for posts if it has no language yet
     *
     * @since 1.5
     *
     * @param int $post_id
     * @return void
     */
    public function set_default_language($post_id)
    {
    }
    /**
     * Called when a post ( or page ) is saved, published or updated.
     *
     * @since 0.1
     * @since 2.3 Does not save the language and translations anymore, unless the post has no language yet.
     *
     * @param int     $post_id Post id of the post being saved.
     * @param WP_Post $post    The post being saved.
     * @return void
     */
    public function save_post($post_id, $post)
    {
    }
    /**
     * Makes sure that saved terms are in the right language (especially tags with same name in different languages).
     *
     * @since 2.3
     *
     * @param int            $object_id Object ID.
     * @param int[]|string[] $terms     An array of object term IDs or slugs.
     * @param int[]          $tt_ids    An array of term taxonomy IDs.
     * @param string         $taxonomy  Taxonomy slug.
     * @return void
     */
    public function set_object_terms($object_id, $terms, $tt_ids, $taxonomy)
    {
    }
    /**
     * Make sure that the post parent is in the correct language.
     *
     * @since 1.8
     *
     * @param int $post_parent Post parent ID.
     * @param int $post_id     Post ID.
     * @return int
     */
    public function wp_insert_post_parent($post_parent, $post_id)
    {
    }
    /**
     * Called when a post, page or media is deleted
     * Don't delete translations if this is a post revision thanks to AndyDeGroo who catched this bug
     * http://wordpress.org/support/topic/plugin-polylang-quick-edit-still-breaks-translation-linking-of-pages-in-072
     *
     * @since 0.1
     *
     * @param int $post_id
     * @return void
     */
    public function delete_post($post_id)
    {
    }
    /**
     * Prevents WP deleting files when there are still media using them.
     *
     * @since 0.9
     *
     * @param string $file Path to the file to delete.
     * @return string Empty or unmodified path.
     */
    public function wp_delete_file($file)
    {
    }
    /**
     * Creates a media translation
     *
     * @since 1.8
     *
     * @param int           $post_id Original attachment id.
     * @param string|object $lang    New translation language.
     * @return int Attachment id of the translated media.
     */
    public function create_media_translation($post_id, $lang)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Adds actions and filters related to languages when creating, reading, updating or deleting posts
 * Acts both on frontend and backend
 *
 * @since 2.4
 */
class PLL_CRUD_Terms
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Current language (used to filter the content).
     *
     * @var PLL_Language|null
     */
    public $curlang;
    /**
     * Language selected in the admin language filter.
     *
     * @var PLL_Language|null
     */
    public $filter_lang;
    /**
     * Preferred language to assign to new contents.
     *
     * @var PLL_Language|null
     */
    public $pref_lang;
    /**
     * Constructor
     *
     * @since 2.4
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Allows to set a language by default for terms if it has no language yet
     *
     * @since 1.5.4
     *
     * @param int    $term_id
     * @param string $taxonomy
     * @return void
     */
    protected function set_default_language($term_id, $taxonomy)
    {
    }
    /**
     * Called when a category or post tag is created or edited.
     * Does nothing except on taxonomies which are filterable.
     *
     * @since 0.1
     *
     * @param int    $term_id  Term id of the term being saved.
     * @param int    $tt_id    Term taxonomy id.
     * @param string $taxonomy Taxonomy name.
     * @return void
     */
    public function save_term($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     * Get the language(s) to filter WP_Term_Query.
     *
     * @since 1.7.6
     *
     * @param string[] $taxonomies Queried taxonomies.
     * @param array    $args       WP_Term_Query arguments.
     * @return PLL_Language|string|false The language(s) to use in the filter, false otherwise.
     */
    protected function get_queried_language($taxonomies, $args)
    {
    }
    /**
     * Adds language dependent cache domain when querying terms.
     * Useful as the 'lang' parameter is not included in cache key by WordPress.
     *
     * @since 1.3
     *
     * @param array    $args       WP_Term_Query arguments.
     * @param string[] $taxonomies Queried taxonomies.
     * @return array Modified arguments.
     */
    public function get_terms_args($args, $taxonomies)
    {
    }
    /**
     * Filters categories and post tags by language(s) when needed on admin side
     *
     * @since 0.2
     *
     * @param string[] $clauses    List of sql clauses.
     * @param string[] $taxonomies List of taxonomies.
     * @param array    $args       WP_Term_Query arguments.
     * @return string[] Modified sql clauses.
     */
    public function terms_clauses($clauses, $taxonomies, $args)
    {
    }
    /**
     * Sets the WP_Term_Query language when doing a WP_Query.
     * Needed since WP 4.9.
     *
     * @since 2.3.2
     *
     * @param WP_Query $query WP_Query object.
     * @return void
     */
    public function set_tax_query_lang($query)
    {
    }
    /**
     * Removes the WP_Term_Query language filter for WP_Query.
     * Needed since WP 4.9.
     *
     * @since 2.3.2
     *
     * @return void
     */
    public function unset_tax_query_lang()
    {
    }
    /**
     * Called when a category or post tag is deleted
     * Deletes language and translations
     *
     * @since 0.1
     *
     * @param int    $term_id  Id of the term to delete.
     * @param string $taxonomy Name of the taxonomy.
     * @return void
     */
    public function delete_term($term_id, $taxonomy)
    {
    }
    /**
     * Stores the term name for use in pre_term_slug
     *
     * @since 0.9.5
     *
     * @param string $name term name
     * @return string unmodified term name
     */
    public function set_pre_term_name($name)
    {
    }
    /**
     * Appends language slug to the term slug if needed.
     *
     * @since 3.3
     *
     * @param string $slug     Term slug.
     * @param string $taxonomy Term taxonomy.
     * @return string Slug with a language suffix if found.
     */
    public function set_pre_term_slug($slug, $taxonomy)
    {
    }
}
/**
 * Small set of tools to work with the database.
 *
 * @since 3.2
 */
class PLL_Db_Tools
{
    /**
     * Changes an array of values into a comma separated list, ready to be used in a `IN ()` clause.
     * Only string and integers and supported for now.
     *
     * @since 3.2
     *
     * @param (int|string)[] $values An array of values.
     * @return string A comma separated list of values.
     */
    public static function prepare_values_list($values)
    {
    }
    /**
     * Wraps a value in escaped double quotes or casts as an integer.
     * Only string and integers and supported for now.
     *
     * @since 3.2
     *
     * @global wpdb $wpdb
     *
     * @param int|string $value A value.
     * @return int|string
     */
    public static function prepare_value($value)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Setup specific filters useful for sanitization.
 *
 * Extract from PLL_Admin_Filters to be able to use in a REST API context.
 *
 * @since 2.9
 */
class PLL_Filters_Sanitization
{
    /**
     * Language used for the sanitization depending on the context.
     *
     * @var string $locale
     */
    public $locale;
    /**
     * Constructor: setups filters and actions.
     *
     * @since 2.9
     *
     * @param string $locale Locale code of the language.
     */
    public function __construct($locale)
    {
    }
    /**
     * Retrieve the locale code of the language.
     *
     * @since 2.0
     *
     * @return string
     */
    public function get_locale()
    {
    }
    /**
     * Maybe fix the result of sanitize_title() in case the languages include German or Danish
     * Without this filter, if language of the title being sanitized is different from the language
     * used for the admin interface and if one this language is German or Danish, some specific
     * characters such as ä, ö, ü, ß are incorrectly sanitized.
     *
     * All the process is done by the remove_accents() WordPress function based on the locale value
     *
     * @link https://github.com/WordPress/WordPress/blob/5.5.1/wp-includes/formatting.php#L1920-L1944
     *
     * @since 2.0
     *
     * @param string $title     Sanitized title.
     * @param string $raw_title The title prior to sanitization.
     * @param string $context   The context for which the title is being sanitized.
     * @return string
     */
    public function sanitize_title($title, $raw_title, $context)
    {
    }
    /**
     * Maybe fix the result of sanitize_user() in case the languages include German or Danish
     *
     * All the process is done by the remove_accents() WordPress function based on the locale value
     *
     * @link https://github.com/WordPress/WordPress/blob/5.5-branch/wp-includes/formatting.php#L1920-L1944
     *
     * @since 2.0
     *
     * @param string $username     Sanitized username.
     * @param string $raw_username The username prior to sanitization.
     * @param bool   $strict       Whether to limit the sanitization to specific characters. Default false.
     * @return string
     */
    public function sanitize_user($username, $raw_username, $strict)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Holds everything related to deprecated properties of `PLL_Language`.
 *
 * @since 3.4
 */
abstract class PLL_Language_Deprecated
{
    /**
     * List of deprecated term properties and related arguments to use with `get_tax_prop()`.
     *
     * @private
     *
     * @var string[][]
     */
    const DEPRECATED_TERM_PROPERTIES = array('term_taxonomy_id' => array('language', 'term_taxonomy_id'), 'count' => array('language', 'count'), 'tl_term_id' => array('term_language', 'term_id'), 'tl_term_taxonomy_id' => array('term_language', 'term_taxonomy_id'), 'tl_count' => array('term_language', 'count'));
    /**
     * List of deprecated URL properties and related getter to use.
     *
     * @private
     *
     * @var string[]
     */
    const DEPRECATED_URL_PROPERTIES = array('home_url' => 'get_home_url', 'search_url' => 'get_search_url');
    /**
     * Returns a language term property value (term ID, term taxonomy ID, or count).
     *
     * @since 3.4
     *
     * @param string $taxonomy_name Name of the taxonomy.
     * @param string $prop_name     Name of the property: 'term_taxonomy_id', 'term_id', 'count'.
     * @return int
     *
     * @phpstan-param non-empty-string $taxonomy_name
     * @phpstan-param 'term_taxonomy_id'|'term_id'|'count' $prop_name
     * @phpstan-return int<0, max>
     */
    public abstract function get_tax_prop($taxonomy_name, $prop_name);
    /**
     * Returns language's home URL. Takes care to render it dynamically if no cache is allowed.
     *
     * @since 3.4
     *
     * @return string Language home URL.
     *
     * @phpstan-return non-empty-string
     */
    public abstract function get_home_url();
    /**
     * Returns language's search URL. Takes care to render it dynamically if no cache is allowed.
     *
     * @since 3.4
     *
     * @return string Language search URL.
     *
     * @phpstan-return non-empty-string
     */
    public abstract function get_search_url();
    /**
     * Throws a depreciation notice if someone tries to get one of the following properties:
     * `term_taxonomy_id`, `count`, `tl_term_id`, `tl_term_taxonomy_id` or `tl_count`.
     *
     * Backward compatibility with Polylang < 3.4.
     *
     * @since 3.4
     *
     * @param string $property Property to get.
     * @return mixed Required property value.
     */
    public function __get($property)
    {
    }
    /**
     * Checks for a deprecated property.
     * Is triggered by calling `isset()` or `empty()` on inaccessible (protected or private) or non-existing properties.
     *
     * Backward compatibility with Polylang < 3.4.
     *
     * @since 3.4
     *
     * @param string $property A property name.
     * @return bool
     */
    public function __isset($property)
    {
    }
    /**
     * Tells if the given term property is deprecated.
     *
     * @since 3.4
     * @see PLL_Language::DEPRECATED_TERM_PROPERTIES for the list of deprecated properties.
     *
     * @param string $property A property name.
     * @return bool
     *
     * @phpstan-assert-if-true key-of<PLL_Language::DEPRECATED_TERM_PROPERTIES> $property
     */
    protected function is_deprecated_term_property($property)
    {
    }
    /**
     * Returns a deprecated term property's value.
     *
     * @since 3.4
     * @see PLL_Language::DEPRECATED_TERM_PROPERTIES for the list of deprecated properties.
     *
     * @param string $property A property name.
     * @return int
     *
     * @phpstan-param key-of<PLL_Language::DEPRECATED_TERM_PROPERTIES> $property
     * @phpstan-return int<0, max>
     */
    protected function get_deprecated_term_property($property)
    {
    }
    /**
     * Tells if the given URL property is deprecated.
     *
     * @since 3.4
     * @see PLL_Language::DEPRECATED_URL_PROPERTIES for the list of deprecated properties.
     *
     * @param string $property A property name.
     * @return bool
     *
     * @phpstan-assert-if-true key-of<PLL_Language::DEPRECATED_URL_PROPERTIES> $property
     */
    protected function is_deprecated_url_property($property)
    {
    }
    /**
     * Returns a deprecated URL property's value.
     *
     * @since 3.4
     * @see PLL_Language::DEPRECATED_URL_PROPERTIES for the list of deprecated properties.
     *
     * @param string $property A property name.
     * @return string
     *
     * @phpstan-param key-of<PLL_Language::DEPRECATED_URL_PROPERTIES> $property
     * @phpstan-return non-empty-string
     */
    protected function get_deprecated_url_property($property)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * PLL_Language factory.
 *
 * @since 3.4
 *
 * @phpstan-import-type LanguageData from PLL_Language
 */
class PLL_Language_Factory
{
    /**
     * Constructor.
     *
     * @since 3.4
     *
     * @param array $options Array of Poylang's options passed by reference.
     * @return void
     */
    public function __construct(&$options)
    {
    }
    /**
     * Returns a language object matching the given data, looking up in cached transient.
     *
     * @since 3.4
     *
     * @param array $language_data Language object properties stored as an array. See `PLL_Language::__construct()`
     *                             for information on accepted properties.
     *
     * @return PLL_Language A language object if given data pass sanitization.
     *
     * @phpstan-param LanguageData $language_data
     */
    public function get($language_data)
    {
    }
    /**
     * Returns a language object based on terms.
     *
     * @since 3.4
     *
     * @param WP_Term[] $terms List of language terms, with the language taxonomy names as array keys.
     *                         `language` is a mandatory key for the object to be created,
     *                         `term_language` should be too in a fully operational environment.
     * @return PLL_Language|null Language object on success, `null` on failure.
     *
     * @phpstan-param array{language?:WP_Term}&array<string, WP_Term> $terms
     */
    public function get_from_terms(array $terms)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A language object is made of two terms in 'language' and 'term_language' taxonomies.
 * Manipulating only one object per language instead of two terms should make things easier.
 *
 * @since 1.2
 * @immutable
 *
 * @phpstan-type LanguagePropData array{
 *     term_id: positive-int,
 *     term_taxonomy_id: positive-int,
 *     count: int<0, max>
 * }
 * @phpstan-type LanguageData array{
 *     term_props: array{
 *         language: LanguagePropData,
 *     }&array<non-empty-string, LanguagePropData>,
 *     name: non-empty-string,
 *     slug: non-empty-string,
 *     locale: non-empty-string,
 *     w3c: non-empty-string,
 *     flag_code: non-empty-string,
 *     term_group: int,
 *     is_rtl: int<0, 1>,
 *     facebook?: string,
 *     home_url: non-empty-string,
 *     search_url: non-empty-string,
 *     host: non-empty-string,
 *     flag_url: non-empty-string,
 *     flag: non-empty-string,
 *     custom_flag_url?: string,
 *     custom_flag?: string,
 *     page_on_front: int<0, max>,
 *     page_for_posts: int<0, max>,
 *     active: bool,
 *     fallbacks?: array<non-empty-string>,
 *     is_default: bool
 * }
 */
class PLL_Language extends \PLL_Language_Deprecated
{
    /**
     * Language name. Ex: English.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    public $name;
    /**
     * Language code used in URL. Ex: en.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    public $slug;
    /**
     * Order of the language when displayed in a list of languages.
     *
     * @var int
     */
    public $term_group;
    /**
     * ID of the term in 'language' taxonomy.
     * Duplicated from `$this->term_props['language']['term_id'],
     * but kept to facilitate the use of it.
     *
     * @var int
     *
     * @phpstan-var int<1, max>
     */
    public $term_id;
    /**
     * WordPress language locale. Ex: en_US.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    public $locale;
    /**
     * 1 if the language is rtl, 0 otherwise.
     *
     * @var int
     *
     * @phpstan-var int<0, 1>
     */
    public $is_rtl;
    /**
     * W3C locale.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    public $w3c;
    /**
     * Facebook locale.
     *
     * @var string
     */
    public $facebook = '';
    /**
     * Host corresponding to this language.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    public $host;
    /**
     * ID of the page on front in this language (set from pll_additional_language_data filter).
     *
     * @var int
     *
     * @phpstan-var int<0, max>
     */
    public $page_on_front = 0;
    /**
     * ID of the page for posts in this language (set from pll_additional_language_data filter).
     *
     * @var int
     *
     * @phpstan-var int<0, max>
     */
    public $page_for_posts = 0;
    /**
     * Code of the flag.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    public $flag_code;
    /**
     * URL of the flag. Always set to the main domain.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    public $flag_url;
    /**
     * HTML markup of the flag.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    public $flag;
    /**
     * URL of the custom flag if it exists. Always set to the main domain.
     *
     * @var string
     */
    public $custom_flag_url = '';
    /**
     * HTML markup of the custom flag if it exists.
     *
     * @var string
     */
    public $custom_flag = '';
    /**
     * Whether or not the language is active. Default `true`.
     *
     * @var bool
     */
    public $active = \true;
    /**
     * List of WordPress language locales. Ex: array( 'en_GB' ).
     *
     * @var string[]
     *
     * @phpstan-var list<non-empty-string>
     */
    public $fallbacks = array();
    /**
     * Whether the language is the default one.
     *
     * @var bool
     */
    public $is_default;
    /**
     * Stores language term properties (like term IDs and counts) for each language taxonomy (`language`,
     * `term_language`, etc).
     * This stores the values of the properties `$term_id` + `$term_taxonomy_id` + `$count` (`language`), `$tl_term_id`
     * + `$tl_term_taxonomy_id` + `$tl_count` (`term_language`), and the `term_id` + `term_taxonomy_id` + `count` for
     * other language taxonomies.
     *
     * @var array[] Array keys are language term names.
     *
     * @exemple array(
     *     'language'       => array(
     *         'term_id'          => 7,
     *         'term_taxonomy_id' => 8,
     *         'count'            => 11,
     *     ),
     *     'term_language' => array(
     *         'term_id'          => 11,
     *         'term_taxonomy_id' => 12,
     *         'count'            => 6,
     *     ),
     *     'foo_language'  => array(
     *         'term_id'          => 33,
     *         'term_taxonomy_id' => 34,
     *         'count'            => 0,
     *     ),
     * )
     *
     * @phpstan-var array{
     *         language: LanguagePropData,
     *     }
     *     &array<non-empty-string, LanguagePropData>
     */
    protected $term_props;
    /**
     * Constructor: builds a language object given the corresponding data.
     *
     * @since 1.2
     * @since 3.4 Only accepts one argument.
     *
     * @param array $language_data {
     *     Language object properties stored as an array.
     *
     *     @type array[]  $term_props      An array of language term properties. Array keys are language taxonomy names
     *                                     (`language` and `term_language` are mandatory), array values are arrays of
     *                                     language term properties (`term_id`, `term_taxonomy_id`, and `count`).
     *     @type string   $name            Language name. Ex: English.
     *     @type string   $slug            Language code used in URL. Ex: en.
     *     @type string   $locale          WordPress language locale. Ex: en_US.
     *     @type string   $w3c             W3C locale.
     *     @type string   $flag_code       Code of the flag.
     *     @type int      $term_group      Order of the language when displayed in a list of languages.
     *     @type int      $is_rtl          `1` if the language is rtl, `0` otherwise.
     *     @type string   $facebook        Optional. Facebook locale.
     *     @type string   $home_url        Home URL in this language.
     *     @type string   $search_url      Home URL to use in search forms.
     *     @type string   $host            Host corresponding to this language.
     *     @type string   $flag_url        URL of the flag.
     *     @type string   $flag            HTML markup of the flag.
     *     @type string   $custom_flag_url Optional. URL of the custom flag if it exists.
     *     @type string   $custom_flag     Optional. HTML markup of the custom flag if it exists.
     *     @type int      $page_on_front   Optional. ID of the page on front in this language.
     *     @type int      $page_for_posts  Optional. ID of the page for posts in this language.
     *     @type bool     $active          Whether or not the language is active. Default `true`.
     *     @type string[] $fallbacks       List of WordPress language locales. Ex: array( 'en_GB' ).
     *     @type bool     $is_default      Whether or not the language is the default one.
     * }
     *
     * @phpstan-param LanguageData $language_data
     */
    public function __construct(array $language_data)
    {
    }
    /**
     * Returns a language term property value (term ID, term taxonomy ID, or count).
     *
     * @since 3.4
     *
     * @param string $taxonomy_name Name of the taxonomy.
     * @param string $prop_name     Name of the property: 'term_taxonomy_id', 'term_id', 'count'.
     * @return int
     *
     * @phpstan-param non-empty-string $taxonomy_name
     * @phpstan-param 'term_taxonomy_id'|'term_id'|'count' $prop_name
     * @phpstan-return int<0, max>
     */
    public function get_tax_prop($taxonomy_name, $prop_name)
    {
    }
    /**
     * Returns the language term props for all content types.
     *
     * @since 3.4
     *
     * @param string $property Name of the field to return. An empty string to return them all.
     * @return (int[]|int)[] Array keys are taxonomy names, array values depend of `$property`.
     *
     * @phpstan-param 'term_taxonomy_id'|'term_id'|'count'|'' $property
     * @phpstan-return array<non-empty-string, (
     *     $property is non-empty-string ?
     *     (
     *         $property is 'count' ?
     *         int<0, max> :
     *         positive-int
     *     ) :
     *     LanguagePropData
     * )>
     */
    public function get_tax_props($property = '')
    {
    }
    /**
     * Returns the flag informations.
     *
     * @since 2.6
     *
     * @param string $code Flag code.
     * @return array {
     *   Flag informations.
     *
     *   @type string $url    Flag url.
     *   @type string $src    Optional, src attribute value if different of the url, for example if base64 encoded.
     *   @type int    $width  Optional, flag width in pixels.
     *   @type int    $height Optional, flag height in pixels.
     * }
     *
     * @phpstan-return array{
     *     url: string,
     *     src: string,
     *     width?: positive-int,
     *     height?: positive-int
     * }
     */
    public static function get_flag_informations($code)
    {
    }
    /**
     * Returns HTML code for flag.
     *
     * @since 2.7
     *
     * @param array  $flag  Flag properties: src, width and height.
     * @param string $title Optional title attribute.
     * @param string $alt   Optional alt attribute.
     * @return string
     *
     * @phpstan-param array{
     *     src: string,
     *     width?: int|numeric-string,
     *     height?: int|numeric-string
     * } $flag
     */
    public static function get_flag_html($flag, $title = '', $alt = '')
    {
    }
    /**
     * Returns the html of the custom flag if any, or the default flag otherwise.
     *
     * @since 2.8
     *
     * @return string
     */
    public function get_display_flag()
    {
    }
    /**
     * Returns the url of the custom flag if any, or the default flag otherwise.
     *
     * @since 2.8
     *
     * @return string
     */
    public function get_display_flag_url()
    {
    }
    /**
     * Updates post and term count.
     *
     * @since 1.2
     *
     * @return void
     */
    public function update_count()
    {
    }
    /**
     * Returns the language locale.
     * Converts WP locales to W3C valid locales for display.
     *
     * @since 1.8
     *
     * @param string $filter Either 'display' or 'raw', defaults to raw.
     * @return string
     *
     * @phpstan-param 'display'|'raw' $filter
     * @phpstan-return non-empty-string
     */
    public function get_locale($filter = 'raw')
    {
    }
    /**
     * Returns the values of this instance's properties, which can be filtered if required.
     *
     * @since 3.4
     *
     * @param string $context Whether or not properties should be filtered. Accepts `db` or `display`.
     *                        Default to `display` which filters some properties.
     *
     * @return array Array of language object properties.
     *
     * @phpstan-return LanguageData
     */
    public function to_array($context = 'display')
    {
    }
    /**
     * Converts current `PLL_language` into a `stdClass` object. Mostly used to allow dynamic properties.
     *
     * @since 3.4
     *
     * @return stdClass Converted `PLL_Language` object.
     */
    public function to_std_class()
    {
    }
    /**
     * Returns a predefined HTML flag.
     *
     * @since 3.4
     *
     * @param string $flag_code Flag code to render.
     * @return string HTML code for the flag.
     */
    public static function get_predefined_flag($flag_code)
    {
    }
    /**
     * Returns language's home URL. Takes care to render it dynamically if no cache is allowed.
     *
     * @since 3.4
     *
     * @return string Language home URL.
     *
     * @phpstan-return non-empty-string
     */
    public function get_home_url()
    {
    }
    /**
     * Returns language's search URL. Takes care to render it dynamically if no cache is allowed.
     *
     * @since 3.4
     *
     * @return string Language search URL.
     *
     * @phpstan-return non-empty-string
     */
    public function get_search_url()
    {
    }
    /**
     * Returns the value of a language property.
     * This is handy to get a property's value without worrying about triggering a deprecation warning or anything.
     *
     * @since 3.4
     *
     * @param string $property A property name. A composite value can be used for language term property values, in the
     *                         form of `{language_taxonomy_name}:{property_name}` (see {@see PLL_Language::get_tax_prop()}
     *                         for the possible values). Ex: `term_language:term_taxonomy_id`.
     * @return string|int|bool|string[] The requested property for the language, `false` if the property doesn't exist.
     *
     * @phpstan-return (
     *     $property is 'slug' ? non-empty-string : string|int|bool|list<non-empty-string>
     * )
     */
    public function get_prop($property)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to easily manage licenses for Polylang Pro and addons
 *
 * @since 1.9
 */
class PLL_License
{
    /**
     * Sanitized plugin name.
     *
     * @var string
     */
    public $id;
    /**
     * Plugin name.
     *
     * @var string
     */
    public $name;
    /**
     * License key.
     *
     * @var string
     */
    public $license_key;
    /**
     * License data, obtained from the API request.
     *
     * @var stdClass|null
     */
    public $license_data;
    /**
     * Constructor
     *
     * @since 1.9
     *
     * @param string $file
     * @param string $item_name
     * @param string $version
     * @param string $author
     * @param string $api_url optional
     */
    public function __construct($file, $item_name, $version, $author, $api_url = \null)
    {
    }
    /**
     * Auto updater
     *
     * @since 1.9
     *
     * @return void
     */
    public function auto_updater()
    {
    }
    /**
     * Registers the licence in the Settings
     *
     * @since 1.9
     *
     * @param array $items
     * @return  array
     */
    public function settings($items)
    {
    }
    /**
     * Activates the license key.
     *
     * @since 1.9
     *
     * @param string $license_key Activation key.
     * @return PLL_License Updated PLL_License object.
     */
    public function activate_license($license_key)
    {
    }
    /**
     * Deactivates the license key.
     *
     * @since 1.9
     *
     * @return PLL_License Updated PLL_License object.
     */
    public function deactivate_license()
    {
    }
    /**
     * Checks if the license key is valid.
     *
     * @since 1.9
     *
     * @return void
     */
    public function check_license()
    {
    }
    /**
     * Get the html form field in a table row (one per license key) for display
     *
     * @since 2.7
     *
     * @return string
     */
    public function get_form_field()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Links model abstract class.
 *
 * @since 1.5
 */
abstract class PLL_Links_Model
{
    /**
     * True if the child class uses pretty permalinks, false otherwise.
     *
     * @var bool
     */
    public $using_permalinks;
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Stores the home url before it is filtered.
     *
     * @var string
     */
    public $home;
    /**
     * Constructor.
     *
     * @since 1.5
     *
     * @param PLL_Model $model PLL_Model instance.
     */
    public function __construct(&$model)
    {
    }
    /**
     * Adds the language code in url.
     *
     * @since 1.2
     * @since 3.4 Accepts now a language slug.
     *
     * @param string                    $url  The url to modify.
     * @param PLL_Language|string|false $lang Language object or slug.
     * @return string The modified url.
     */
    public abstract function add_language_to_link($url, $lang);
    /**
     * Returns the url without language code.
     *
     * @since 1.2
     *
     * @param string $url The url to modify.
     * @return string The modified url.
     */
    public abstract function remove_language_from_link($url);
    /**
     * Returns the link to the first page.
     *
     * @since 1.2
     *
     * @param string $url The url to modify.
     * @return string The modified url.
     */
    public abstract function remove_paged_from_link($url);
    /**
     * Returns the link to a paged page.
     *
     * @since 1.5
     *
     * @param string $url  The url to modify.
     * @param int    $page The page number.
     * @return string The modified url.
     */
    public abstract function add_paged_to_link($url, $page);
    /**
     * Returns the language based on the language code in the url.
     *
     * @since 1.2
     * @since 2.0 Add the $url argument.
     *
     * @param string $url Optional, defaults to the current url.
     * @return string The language slug.
     */
    public abstract function get_language_from_url($url = '');
    /**
     * Returns the static front page url in a given language.
     *
     * @since 1.8
     * @since 3.4 Accepts now an array of language properties.
     *
     * @param PLL_Language|array $language Language object or array of language properties.
     * @return string The static front page url.
     */
    public abstract function front_page_url($language);
    /**
     * Changes the language code in url.
     *
     * @since 1.5
     *
     * @param string       $url  The url to modify.
     * @param PLL_Language $lang The language object.
     * @return string The modified url.
     */
    public function switch_language_in_link($url, $lang)
    {
    }
    /**
     * Get the hosts managed on the website.
     *
     * @since 1.5
     *
     * @return string[] The list of hosts.
     */
    public function get_hosts()
    {
    }
    /**
     * Returns the home url in a given language.
     *
     * @since 1.3.1
     * @since 3.4 Accepts now a language slug.
     *
     * @param PLL_Language|string $language Language object or slug.
     * @return string
     */
    public function home_url($language)
    {
    }
    /**
     * Adds home and search URLs to language data before the object is created.
     *
     * @since 3.4
     *
     * @param array $additional_data Array of language additional data.
     * @param array $language        Language data.
     * @return array Language data with home and search URLs added.
     */
    public function set_language_home_urls($additional_data, $language)
    {
    }
    /**
     * Adds our domains or subdomains to allowed hosts for safe redirect.
     *
     * @since 1.4.3
     *
     * @param string[] $hosts Allowed hosts.
     * @return string[] Modified list of allowed hosts.
     */
    public function allowed_redirect_hosts($hosts)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Links model base class when using pretty permalinks.
 *
 * @since 1.6
 */
abstract class PLL_Links_Permalinks extends \PLL_Links_Model
{
    /**
     * Tells this child class of PLL_Links_Model is for pretty permalinks.
     *
     * @var bool
     */
    public $using_permalinks = \true;
    /**
     * The name of the index file which is the entry point to all requests.
     * We need this before the global $wp_rewrite is created.
     * Also hardcoded in WP_Rewrite.
     *
     * @var string
     */
    protected $index = 'index.php';
    /**
     * The prefix for all permalink structures.
     *
     * @var string
     */
    protected $root;
    /**
     * Whether to add trailing slashes.
     *
     * @var bool
     */
    protected $use_trailing_slashes;
    /**
     * The name of the rewrite rules to always modify.
     *
     * @var string[]
     */
    protected $always_rewrite = array('date', 'root', 'comments', 'search', 'author');
    /**
     * Constructor.
     *
     * @since 1.8
     *
     * @param PLL_Model $model PLL_Model instance.
     */
    public function __construct(&$model)
    {
    }
    /**
     * Returns the link to the first page when using pretty permalinks.
     *
     * @since 1.2
     *
     * @param string $url The url to modify.
     * @return string The modified url.
     */
    public function remove_paged_from_link($url)
    {
    }
    /**
     * Returns the link to the paged page when using pretty permalinks.
     *
     * @since 1.5
     *
     * @param string $url  The url to modify.
     * @param int    $page The page number.
     * @return string The modified url.
     */
    public function add_paged_to_link($url, $page)
    {
    }
    /**
     * Returns the home url in a given language.
     *
     * @since 1.3.1
     * @since 3.4 Accepts now a language slug.
     *
     * @param PLL_Language|string $language Language object or slug.
     * @return string
     */
    public function home_url($language)
    {
    }
    /**
     * Returns the static front page url.
     *
     * @since 1.8
     * @since 3.4 Accepts now an array of language properties.
     *
     * @param PLL_Language|array $language Language object or array of language properties.
     * @return string The static front page url.
     */
    public function front_page_url($language)
    {
    }
    /**
     * Prepares rewrite rules filters.
     *
     * @since 1.6
     *
     * @return string[]
     */
    public function get_rewrite_rules_filters()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Links model for use when using one domain or subdomain per language.
 *
 * @since 2.0
 */
abstract class PLL_Links_Abstract_Domain extends \PLL_Links_Permalinks
{
    /**
     * Constructor.
     *
     * @since 2.0
     *
     * @param PLL_Model $model Instance of PLL_Model.
     */
    public function __construct(&$model)
    {
    }
    /**
     * Returns the language based on the language code in url.
     *
     * @since 1.2
     * @since 2.0 Add the $url argument.
     *
     * @param string $url Optional, defaults to the current url.
     * @return string Language slug.
     */
    public function get_language_from_url($url = '')
    {
    }
    /**
     * Modifies an url to use the domain associated to the current language.
     *
     * @since 1.8
     *
     * @param string $url The url to modify.
     * @return string The modified url.
     */
    public function site_url($url)
    {
    }
    /**
     * Fixes the domain for the upload directory.
     *
     * @since 2.0.6
     *
     * @param array $uploads Array of information about the upload directory. @see wp_upload_dir().
     * @return array
     */
    public function upload_dir($uploads)
    {
    }
    /**
     * Adds home and search URLs to language data before the object is created.
     *
     * @since 3.4.1
     *
     * @param array $additional_data Array of language additional data.
     * @param array $language        Language data.
     * @return array Language data with home and search URLs added.
     */
    public function set_language_home_urls($additional_data, $language)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Links model for the default permalinks
 * for example mysite.com/?somevar=something&lang=en.
 *
 * @since 1.2
 */
class PLL_Links_Default extends \PLL_Links_Model
{
    /**
     * Tells this child class of PLL_Links_Model does not use pretty permalinks.
     *
     * @var bool
     */
    public $using_permalinks = \false;
    /**
     * Adds the language code in a url.
     *
     * @since 1.2
     * @since 3.4 Accepts now a language slug.
     *
     * @param string                    $url      The url to modify.
     * @param PLL_Language|string|false $language Language object or slug.
     * @return string The modified url.
     */
    public function add_language_to_link($url, $language)
    {
    }
    /**
     * Removes the language information from an url.
     *
     * @since 1.2
     *
     * @param string $url The url to modify.
     * @return string The modified url.
     */
    public function remove_language_from_link($url)
    {
    }
    /**
     * Returns the link to the first page.
     *
     * @since 1.2
     *
     * @param string $url The url to modify.
     * @return string The modified url.
     */
    public function remove_paged_from_link($url)
    {
    }
    /**
     * Returns the link to the paged page.
     *
     * @since 1.5
     *
     * @param string $url  The url to modify.
     * @param int    $page The page number.
     * @return string The modified url.
     */
    public function add_paged_to_link($url, $page)
    {
    }
    /**
     * Gets the language slug from the url if present.
     *
     * @since 1.2
     * @since 2.0 Add the $url argument.
     *
     * @param string $url Optional, defaults to the current url.
     * @return string Language slug.
     */
    public function get_language_from_url($url = '')
    {
    }
    /**
     * Returns the static front page url in the given language.
     *
     * @since 1.8
     * @since 3.4 Accepts now an array of language properties.
     *
     * @param PLL_Language|array $language Language object or array of language properties.
     * @return string The static front page url.
     */
    public function front_page_url($language)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Links model for use when the language code is added in the url as a directory
 * for example mysite.com/en/something.
 *
 * @since 1.2
 */
class PLL_Links_Directory extends \PLL_Links_Permalinks
{
    /**
     * Relative path to the home url.
     *
     * @var string
     */
    protected $home_relative;
    /**
     * Constructor.
     *
     * @since 1.2
     *
     * @param PLL_Model $model PLL_Model instance.
     */
    public function __construct(&$model)
    {
    }
    /**
     * Called only at first object creation to avoid duplicating filters when switching blog.
     *
     * @since 1.6
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Adds the language code in a url.
     *
     * @since 1.2
     * @since 3.4 Accepts now a language slug.
     *
     * @param string                    $url      The url to modify.
     * @param PLL_Language|string|false $language Language object or slug.
     * @return string The modified url.
     */
    public function add_language_to_link($url, $language)
    {
    }
    /**
     * Returns the url without the language code.
     *
     * @since 1.2
     *
     * @param string $url The url to modify.
     * @return string The modified url.
     */
    public function remove_language_from_link($url)
    {
    }
    /**
     * Returns the language based on the language code in the url.
     *
     * @since 1.2
     * @since 2.0 Add the $url argument.
     *
     * @param string $url Optional, defaults to the current url.
     * @return string The language slug.
     */
    public function get_language_from_url($url = '')
    {
    }
    /**
     * Returns the home url in a given language.
     *
     * @since 1.3.1
     * @since 3.4 Accepts now a language slug.
     *
     * @param PLL_Language|string $language Language object or slug.
     * @return string
     */
    public function home_url($language)
    {
    }
    /**
     * Optionally removes 'language' in permalinks so that we get http://www.myblog/en/ instead of http://www.myblog/language/en/.
     *
     * @since 1.2
     *
     * @return void
     */
    public function add_permastruct()
    {
    }
    /**
     * Prepares the rewrite rules filters.
     *
     * @since 0.8.1
     *
     * @param mixed $pre Not used as the filter is used as an action.
     * @return mixed
     */
    public function prepare_rewrite_rules($pre)
    {
    }
    /**
     * The rewrite rules !
     *
     * Always make sure that the default language is at the end in case the language information is hidden for default language.
     * Thanks to brbrbr http://wordpress.org/support/topic/plugin-polylang-rewrite-rules-not-correct.
     *
     * @since 0.8.1
     *
     * @param string[] $rules Rewrite rules.
     * @return string[] Modified rewrite rules.
     */
    public function rewrite_rules($rules)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Links model for use when using one domain per language
 * for example mysite.com/something and mysite.fr/quelquechose.
 *
 * @since 1.2
 */
class PLL_Links_Domain extends \PLL_Links_Abstract_Domain
{
    /**
     * An array with language code as keys and the host as values.
     *
     * @var string[]
     */
    protected $hosts;
    /**
     * Constructor.
     *
     * @since 1.8
     *
     * @param object $model PLL_Model instance.
     */
    public function __construct(&$model)
    {
    }
    /**
     * Switches the primary domain to a secondary domain in the url.
     *
     * @since 1.2
     * @since 3.4 Accepts now a language slug.
     *
     * @param string                    $url      The url to modify.
     * @param PLL_Language|string|false $language Language object or slug.
     * @return string The modified url.
     */
    public function add_language_to_link($url, $language)
    {
    }
    /**
     * Returns the url with the primary domain.
     *
     * @since 1.2
     *
     * @param string $url The url to modify.
     * @return string The modified url.
     */
    public function remove_language_from_link($url)
    {
    }
    /**
     * Returns the home url in a given language.
     *
     * @since 1.3.1
     * @since 3.4 Accepts now a language slug.
     *
     * @param PLL_Language|string $language Language object or slug.
     * @return string
     */
    public function home_url($language)
    {
    }
    /**
     * Get the hosts managed on the website.
     *
     * @since 1.5
     *
     * @return string[] List of hosts.
     */
    public function get_hosts()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Links model for use when the language code is added in the url as a subdomain
 * for example en.mysite.com/something.
 *
 * @since 1.2
 */
class PLL_Links_Subdomain extends \PLL_Links_Abstract_Domain
{
    /**
     * Stores whether the home url includes www. or not.
     * Either '://' or '://www.'.
     *
     * @var string
     */
    protected $www;
    /**
     * Constructor.
     *
     * @since 1.7.4
     *
     * @param PLL_Model $model Instance of PLL_Model.
     */
    public function __construct(&$model)
    {
    }
    /**
     * Adds the language code in a url.
     *
     * @since 1.2
     * @since 3.4 Accepts now a language slug.
     *
     * @param string                    $url      The url to modify.
     * @param PLL_Language|string|false $language Language object or slug.
     * @return string The modified url.
     */
    public function add_language_to_link($url, $language)
    {
    }
    /**
     * Returns the url without the language code.
     *
     * @since 1.2
     *
     * @param string $url The url to modify.
     * @return string The modified url.
     */
    public function remove_language_from_link($url)
    {
    }
    /**
     * Get the hosts managed on the website.
     *
     * @since 1.5
     *
     * @return string[] The list of hosts.
     */
    public function get_hosts()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages strings translations storage
 *
 * @since 1.2
 * @since 2.1 Stores the strings in a post meta instead of post content to avoid unserialize issues (See #63)
 * @since 3.4 Stores the strings into language taxonomy term meta instead of a post meta.
 */
class PLL_MO extends \MO
{
    /**
     * Writes the strings into a term meta.
     *
     * @since 1.2
     *
     * @param PLL_Language $lang The language in which we want to export strings.
     * @return void
     */
    public function export_to_db($lang)
    {
    }
    /**
     * Reads a PLL_MO object from the term meta.
     *
     * @since 1.2
     * @since 3.4 Reads a PLL_MO from the term meta.
     *
     * @param PLL_Language $lang The language in which we want to get strings.
     * @return void
     */
    public function import_from_db($lang)
    {
    }
    /**
     * Deletes a string
     *
     * @since 2.9
     *
     * @param string $string The source string to remove from the translations.
     * @return void
     */
    public function delete_entry($string)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * It is best practice that plugins do nothing before plugins_loaded is fired
 * so it is what Polylang intends to do
 * but some plugins load their text domain as soon as loaded, thus before plugins_loaded is fired
 * this class differs text domain loading until the language is defined
 * either in a plugins_loaded action or in a wp action ( when the language is set from content on frontend )
 *
 * @since 1.2
 */
class PLL_OLT_Manager
{
    /**
     * Singleton instance
     *
     * @var PLL_OLT_Manager|null
     */
    protected static $instance;
    /**
     * Stores the default site locale before it is modified.
     *
     * @var string|null
     */
    protected $default_locale;
    /**
     * Stores all loaded text domains and mo files.
     *
     * @var string[][]
     */
    protected $list_textdomains = array();
    /**
     * Stores post types an taxonomies labels to translate.
     *
     * @var string[][]
     */
    public $labels = array();
    /**
     * Constructor: setups relevant filters
     *
     * @since 1.2
     */
    public function __construct()
    {
    }
    /**
     * Access to the single instance of the class
     *
     * @since 1.7
     *
     * @return PLL_OLT_Manager
     */
    public static function instance()
    {
    }
    /**
     * Loads text domains
     *
     * @since 0.1
     *
     * @return void
     */
    public function load_textdomains()
    {
    }
    /**
     * Saves all text domains in a table for later usage.
     * It replaces the 'override_load_textdomain' filter previously used.
     *
     * @since 2.0.4
     *
     * @param string $mofile The translation file name.
     * @param string $domain The text domain name.
     * @return string
     */
    public function load_textdomain_mofile($mofile, $domain)
    {
    }
    /**
     * Saves post types and taxonomies labels for a later usage
     *
     * @since 0.9
     *
     * @param string $translation not used
     * @param string $text        string to translate
     * @param string $domain      text domain
     * @return string unmodified $translation
     */
    public function gettext($translation, $text, $domain)
    {
    }
    /**
     * Saves post types and taxonomies labels for a later usage
     *
     * @since 0.9
     *
     * @param string $translation not used
     * @param string $text        string to translate
     * @param string $context     some comment to describe the context of string to translate
     * @param string $domain      text domain
     * @return string unmodified $translation
     */
    public function gettext_with_context($translation, $text, $context, $domain)
    {
    }
    /**
     * Translates post types and taxonomies labels once the language is known.
     *
     * @since 0.9
     *
     * @param WP_Post_Type|WP_Taxonomy $type Either a post type or a taxonomy.
     * @return void
     */
    public function translate_labels($type)
    {
    }
    /**
     * Allows Polylang to be the first plugin loaded ;-).
     *
     * @since 1.2
     *
     * @param string[] $plugins List of active plugins.
     * @return string[] List of active plugins.
     */
    public function make_polylang_first($plugins)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to manipulate the language query var in WP_Query
 *
 * @since 2.2
 */
class PLL_Query
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * @var WP_Query
     */
    public $query;
    /**
     * Constructor
     *
     * @since 2.2
     *
     * @param WP_Query  $query Reference to the WP_Query object.
     * @param PLL_Model $model Instance of PLL_Model.
     */
    public function __construct(&$query, &$model)
    {
    }
    /**
     * Checks if the query already includes a language taxonomy.
     *
     * @since 3.0
     *
     * @param array $qvars WP_Query query vars.
     * @return bool
     */
    protected function is_already_filtered($qvars)
    {
    }
    /**
     * Check if translated taxonomy is queried
     * Compatible with nested queries introduced in WP 4.1
     *
     * @see https://wordpress.org/support/topic/tax_query-bug
     *
     * @since 1.7
     *
     * @param array $tax_queries
     * @return bool
     */
    protected function have_translated_taxonomy($tax_queries)
    {
    }
    /**
     * Get queried taxonomies
     *
     * @since 2.2
     *
     * @return array queried taxonomies
     */
    public function get_queried_taxonomies()
    {
    }
    /**
     * Sets the language in query.
     * Optimized for (and requires) WP 3.5+.
     *
     * @since 2.2
     * @since 3.3 Accepts now an array of languages.
     *
     * @param PLL_Language|PLL_Language[] $languages Language object(s).
     * @return void
     */
    public function set_language($languages)
    {
    }
    /**
     * Adds the language in the query after it has checked that it won't conflict with other query vars.
     *
     * @since 2.2
     *
     * @param PLL_Language|false $lang Language.
     * @return void
     */
    public function filter_query($lang)
    {
    }
    /**
     * Sets the language correctly if the current query is a 'OR' relation,
     * since WordPress merges the language with the other query vars when the relation is OR.
     *
     * @since 3.3
     *
     * @return void
     */
    protected function maybe_set_language_for_or_relation()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Main Polylang class for REST API requrests, accessible from @see PLL().
 *
 * @since 2.6
 */
class PLL_REST_Request extends \PLL_Base
{
    /**
     * @var PLL_Language|false|null A `PLL_Language` when defined, `false` otherwise. `null` until the language
     *                              definition process runs.
     */
    public $curlang;
    /**
     * @var PLL_Filters|null
     */
    public $filters;
    /**
     * @var PLL_Filters_Links|null
     */
    public $filters_links;
    /**
     * @var PLL_Admin_Links|null
     */
    public $links;
    /**
     * @var PLL_Nav_Menu|null
     */
    public $nav_menu;
    /**
     * @var PLL_Static_Pages|null
     */
    public $static_pages;
    /**
     * @var PLL_Filters_Widgets_Options|null
     */
    public $filters_widgets_options;
    /**
     * Constructor.
     *
     * @since 3.4
     *
     * @param PLL_Links_Model $links_model Reference to the links model.
     */
    public function __construct(&$links_model)
    {
    }
    /**
     * Setup filters.
     *
     * @since 2.6
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Sets the current language during a REST request if sent.
     *
     * @since 3.3
     *
     * @param mixed           $result  Response to replace the requested version with. Remains untouched.
     * @param WP_REST_Server  $server  Server instance.
     * @param WP_REST_Request $request Request used to generate the response.
     * @return mixed Untouched $result.
     *
     * @phpstan-param WP_REST_Request<array{lang?: string}> $request
     */
    public function set_language($result, $server, $request)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to display a language switcher on frontend
 *
 * @since 1.2
 */
class PLL_Switcher
{
    const DEFAULTS = array(
        'dropdown' => 0,
        // Display as list and not as dropdown.
        'echo' => 1,
        // Echoes the list.
        'hide_if_empty' => 1,
        // Hides languages with no posts (or pages).
        'show_flags' => 0,
        // Don't show flags.
        'show_names' => 1,
        // Show language names.
        'display_names_as' => 'name',
        // Display the language name.
        'force_home' => 0,
        // Tries to find a translation.
        'hide_if_no_translation' => 0,
        // Don't hide the link if there is no translation.
        'hide_current' => 0,
        // Don't hide the current language.
        'post_id' => \null,
        // Link to the translations of the current page.
        'raw' => 0,
        // Build the language switcher.
        'item_spacing' => 'preserve',
        // Preserve whitespace between list items.
        'admin_render' => 0,
        // Make the switcher in a frontend context.
        'admin_current_lang' => \null,
    );
    /**
     * @var PLL_Links|null
     */
    protected $links;
    /**
     * Returns options available for the language switcher - menu or widget
     * either strings to display the options or default values
     *
     * @since 0.7
     *
     * @param string $type optional either 'menu', 'widget' or 'block', defaults to 'widget'
     * @param string $key  optional either 'string' or 'default', defaults to 'string'
     * @return array list of switcher options strings or default values
     */
    public static function get_switcher_options($type = 'widget', $key = 'string')
    {
    }
    /**
     * Returns the current language code.
     *
     * @since 3.0
     *
     * @param array $args Arguments passed to {@see PLL_Switcher::the_languages()}.
     * @return string
     */
    protected function get_current_language($args)
    {
    }
    /**
     * Returns the link for a given language.
     *
     * @since 3.0
     *
     * @param PLL_Language $language Language.
     * @param array        $args     Arguments passed to {@see PLL_Switcher::the_languages()}.
     * @return string|null
     */
    protected function get_link($language, $args)
    {
    }
    /**
     * Get the language elements for use in a walker
     *
     * @since 1.2
     *
     * @param array $args  Arguments passed to {@see PLL_Switcher::the_languages()}.
     * @return array Language switcher elements.
     */
    protected function get_elements($args)
    {
    }
    /**
     * Displays a language switcher
     * or returns the raw elements to build a custom language switcher.
     *
     * @since 0.1
     *
     * @param PLL_Links $links Instance of PLL_Links.
     * @param array     $args {
     *   Optional array of arguments.
     *
     *   @type int      $dropdown               The list is displayed as dropdown if set, defaults to 0.
     *   @type int      $echo                   Echoes the list if set to 1, defaults to 1.
     *   @type int      $hide_if_empty          Hides languages with no posts ( or pages ) if set to 1, defaults to 1.
     *   @type int      $show_flags             Displays flags if set to 1, defaults to 0.
     *   @type int      $show_names             Shows language names if set to 1, defaults to 1.
     *   @type string   $display_names_as       Whether to display the language name or its slug, valid options are 'slug' and 'name', defaults to name.
     *   @type int      $force_home             Will always link to home in translated language if set to 1, defaults to 0.
     *   @type int      $hide_if_no_translation Hides the link if there is no translation if set to 1, defaults to 0.
     *   @type int      $hide_current           Hides the current language if set to 1, defaults to 0.
     *   @type int      $post_id                Returns links to the translations of the post defined by post_id if set, defaults not set.
     *   @type int      $raw                    Return a raw array instead of html markup if set to 1, defaults to 0.
     *   @type string   $item_spacing           Whether to preserve or discard whitespace between list items, valid options are 'preserve' and 'discard', defaults to 'preserve'.
     *   @type int      $admin_render           Allows to force the current language code in an admin context if set, default to 0. Need to set the admin_current_lang argument below.
     *   @type string   $admin_current_lang     The current language code in an admin context. Need to set the admin_render to 1, defaults not set.
     *   @type string[] $classes                A list of CSS classes to set to each elements outputted.
     *   @type string[] $link_classes           A list of CSS classes to set to each link outputted.
     * }
     * @return string|array either the html markup of the switcher or the raw elements to build a custom language switcher
     */
    public function the_languages($links, $args = array())
    {
    }
}
/**
 * Interface to use for objects that can have one or more types.
 *
 * @since 3.4
 *
 * @phpstan-type DBInfoWithType array{
 *     table: non-empty-string,
 *     id_column: non-empty-string,
 *     type_column: non-empty-string,
 *     default_alias: non-empty-string
 * }
 */
interface PLL_Translatable_Object_With_Types_Interface
{
    /**
     * Returns object types that need to be translated.
     *
     * @since 3.4
     *
     * @param bool $filter True if we should return only valid registered object types.
     * @return string[] Object type names for which Polylang manages languages.
     *
     * @phpstan-return array<non-empty-string, non-empty-string>
     */
    public function get_translated_object_types($filter = \true);
    /**
     * Returns true if Polylang manages languages for this object type.
     *
     * @since 3.4
     *
     * @param string|string[] $object_type Object type name or array of object type names.
     * @return bool
     *
     * @phpstan-param non-empty-string|non-empty-string[] $object_type
     */
    public function is_translated_object_type($object_type);
}
/**
 * Trait to use for objects that can have one or more types.
 * This must be used with {@see PLL_Translatable_Object_With_Types_Interface}.
 *
 * @since 3.4
 */
trait PLL_Translatable_Object_With_Types_Trait
{
    /**
     * Returns SQL query that fetches the IDs of the objects without language.
     *
     * @since 3.4
     *
     * @param int[] $language_ids List of language `term_taxonomy_id`.
     * @param int   $limit        Max number of objects to return. `-1` to return all of them.
     * @param array $args         An array of translated object types.
     * @return string
     *
     * @phpstan-param array<positive-int> $language_ids
     * @phpstan-param -1|positive-int $limit
     * @phpstan-param array<string> $args
     */
    protected function get_objects_with_no_lang_sql(array $language_ids, $limit, array $args = array())
    {
    }
    /**
     * Returns true if Polylang manages languages for this object type.
     *
     * @since 3.4
     *
     * @param string|string[] $object_type Object type (taxonomy name) name or array of object type names.
     * @return bool
     *
     * @phpstan-param non-empty-string|non-empty-string[] $object_type
     */
    public function is_translated_object_type($object_type)
    {
    }
}
/**
 * Abstract class to use for object types that support at least one language.
 *
 * @since 3.4
 *
 * @phpstan-type DBInfo array{
 *     table: non-empty-string,
 *     id_column: non-empty-string,
 *     default_alias: non-empty-string
 * }
 */
abstract class PLL_Translatable_Object
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * List of taxonomies to cache.
     *
     * @var string[]
     * @see PLL_Translatable_Object::get_object_term()
     *
     * @phpstan-var list<non-empty-string>
     */
    protected $tax_to_cache = array();
    /**
     * Taxonomy name for the languages.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $tax_language;
    /**
     * Identifier that must be unique for each type of content.
     * Also used when checking capabilities.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $type;
    /**
     * Identifier for each type of content to used for cache type.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $cache_type;
    /**
     * Object type to use when registering the taxonomy.
     * Left empty for posts.
     *
     * @var string|null
     *
     * @phpstan-var non-empty-string|null
     */
    protected $object_type = \null;
    /**
     * Constructor.
     *
     * @since 3.4
     *
     * @param PLL_Model $model Instance of `PLL_Model`, passed by reference.
     */
    public function __construct(\PLL_Model &$model)
    {
    }
    /**
     * Returns the language taxonomy name.
     *
     * @since 3.4
     *
     * @return string
     *
     * @phpstan-return non-empty-string
     */
    public function get_tax_language()
    {
    }
    /**
     * Returns the type of object.
     *
     * @since 3.4
     *
     * @return string
     *
     * @phpstan-return non-empty-string
     */
    public function get_type()
    {
    }
    /**
     * Adds hooks.
     *
     * @since 3.4
     *
     * @return static
     */
    public function init()
    {
    }
    /**
     * Stores the object's language into the database.
     *
     * @since 3.4
     *
     * @param int                     $id   Object ID.
     * @param PLL_Language|string|int $lang Language (object, slug, or term ID).
     * @return bool True when successfully assigned. False otherwise (or if the given language is already assigned to
     *              the object).
     */
    public function set_language($id, $lang)
    {
    }
    /**
     * Returns the language of an object.
     *
     * @since 0.1
     * @since 3.4 Renamed the parameter $post_id into $id.
     *
     * @param int $id Object ID.
     * @return PLL_Language|false A `PLL_Language` object. `false` if no language is associated to that object or if the
     *                            ID is invalid.
     */
    public function get_language($id)
    {
    }
    /**
     * Removes the term language from the database.
     *
     * @since 3.4
     *
     * @param int $id Term ID.
     * @return void
     */
    public function delete_language($id)
    {
    }
    /**
     * Wraps `wp_get_object_terms()` to cache it and return only one object.
     * Inspired by the WordPress function `get_the_terms()`.
     *
     * @since 1.2
     *
     * @param int    $id       Object ID.
     * @param string $taxonomy Polylang taxonomy depending if we are looking for a post (or term, or else) language.
     * @return WP_Term|false The term associated to the object in the requested taxonomy if it exists, `false` otherwise.
     */
    public function get_object_term($id, $taxonomy)
    {
    }
    /**
     * A JOIN clause to add to sql queries when filtering by language is needed directly in query.
     *
     * @since 3.4
     *
     * @param string $alias Optional alias for object table.
     * @return string The JOIN clause.
     *
     * @phpstan-return non-empty-string
     */
    public function join_clause($alias = '')
    {
    }
    /**
     * A WHERE clause to add to sql queries when filtering by language is needed directly in query.
     *
     * @since 1.2
     *
     * @param PLL_Language|PLL_Language[]|string|string[] $lang A `PLL_Language` object, or a comma separated list of language slugs, or an array of language slugs or objects.
     * @return string The WHERE clause.
     *
     * @phpstan-param PLL_Language|PLL_Language[]|non-empty-string|non-empty-string[] $lang
     */
    public function where_clause($lang)
    {
    }
    /**
     * Returns the IDs of the objects without language.
     *
     * @since 3.4
     *
     * @param int   $limit  Max number of objects to return. `-1` to return all of them.
     * @param array $args   The object args.
     * @return int[] Array of object IDs.
     *
     * @phpstan-param -1|positive-int $limit
     * @phpstan-return list<positive-int>
     */
    public function get_objects_with_no_lang($limit, array $args = array())
    {
    }
    /**
     * Returns object IDs without language given a specific SQL query.
     * Can be overriden by child classes in case queried object doesn't use
     * `wp_cache_set_last_changed()` or another cache system.
     *
     * @since 3.4
     *
     * @param string $sql A prepared SQL query for object IDs with no language.
     * @return string[] An array of numeric object IDs.
     */
    protected function query_objects_with_no_lang($sql)
    {
    }
    /**
     * Sanitizes an ID as positive integer.
     * Kind of similar to `absint()`, but rejects negetive integers instead of making them positive.
     *
     * @since 3.2
     *
     * @param mixed $id A supposedly numeric ID.
     * @return int A positive integer. `0` for non numeric values and negative integers.
     *
     * @phpstan-return int<0,max>
     */
    public function sanitize_int_id($id)
    {
    }
    /**
     * Sanitizes an array of IDs as positive integers.
     * `0` values are removed.
     *
     * @since 3.2
     *
     * @param mixed $ids An array of numeric IDs.
     * @return int[]
     *
     * @phpstan-return array<positive-int>
     */
    public function sanitize_int_ids_list($ids)
    {
    }
    /**
     * Returns SQL query that fetches the IDs of the objects without language.
     *
     * @since 3.4
     *
     * @param int[] $language_ids List of language `term_taxonomy_id`.
     * @param int   $limit        Max number of objects to return. `-1` to return all of them.
     * @param array $args         The object args.
     * @return string
     *
     * @phpstan-param array<positive-int> $language_ids
     * @phpstan-param -1|positive-int $limit
     * @phpstan-param array<empty> $args
     */
    protected function get_objects_with_no_lang_sql(array $language_ids, $limit, array $args = array())
    {
    }
    /**
     * Assigns a language to object in mass.
     *
     * @since 1.2
     * @since 3.4 Moved from PLL_Admin_Model class.
     *
     * @param int[]        $ids  Array of post ids or term ids.
     * @param PLL_Language $lang Language to assign to the posts or terms.
     * @return void
     */
    public function set_language_in_mass($ids, $lang)
    {
    }
    /**
     * Returns database-related informations that can be used in some of this class methods.
     * These are specific to the table containing the objects.
     *
     * @see PLL_Translatable_Object::join_clause()
     * @see PLL_Translatable_Object::get_objects_with_no_lang_sql()
     *
     * @since 3.4.3
     *
     * @return string[] {
     *     @type string $table         Name of the table.
     *     @type string $id_column     Name of the column containing the object's ID.
     *     @type string $default_alias Default alias corresponding to the object's table.
     * }
     * @phpstan-return DBInfo
     */
    protected abstract function get_db_infos();
}
/**
 * @package Polylang
 */
/**
 * Registry for all translatable objects.
 *
 * @since 3.4
 *
 * @phpstan-implements IteratorAggregate<non-empty-string, PLL_Translatable_Object>
 * @phpstan-type TranslatedObjectWithTypes PLL_Translated_Object&PLL_Translatable_Object_With_Types_Interface
 * @phpstan-type TranslatableObjectWithTypes PLL_Translatable_Object&PLL_Translatable_Object_With_Types_Interface
 */
class PLL_Translatable_Objects implements \IteratorAggregate
{
    /**
     * Registers a translatable object.
     *
     * @since 3.4
     *
     * @param PLL_Translatable_Object $object The translatable object to register.
     * @return PLL_Translatable_Object
     */
    public function register(\PLL_Translatable_Object $object)
    {
    }
    /**
     * Returns all registered translatable objects.
     *
     * @since 3.4
     *
     * @return ArrayIterator Iterator on $objects array property. Keys are the type of translated content (post, term, etc).
     *
     * @phpstan-return ArrayIterator<string, PLL_Translatable_Object>
     */
    #[\ReturnTypeWillChange]
    public function getIterator()
    {
    }
    /**
     * Returns a translatable object, given an object type.
     *
     * @since 3.4
     *
     * @param string $object_type The object type.
     * @return PLL_Translatable_Object|null
     *
     * @phpstan-return (
     *     $object_type is 'post' ? TranslatedObjectWithTypes : (
     *         $object_type is 'term' ? TranslatedObjectWithTypes : (
     *             TranslatedObjectWithTypes|TranslatableObjectWithTypes|PLL_Translated_Object|PLL_Translatable_Object|null
     *         )
     *     )
     * )
     */
    public function get($object_type)
    {
    }
    /**
     * Returns all translatable objects except post one.
     *
     * @since 3.4
     *
     * @return PLL_Translatable_Object[] An array of secondary translatable objects. Array keys are the type of translated content (post, term, etc).
     *
     * @phpstan-return array<non-empty-string, PLL_Translatable_Object>
     */
    public function get_secondary_translatable_objects()
    {
    }
    /**
     * Returns taxonomy names to manage language and translations.
     *
     * @since 3.4
     *
     * @param string[] $filter An array on value to filter taxonomy names to return.
     * @return string[] Taxonomy names.
     *
     * @phpstan-param array<'language'|'translations'> $filter
     * @phpstan-return list<non-empty-string>
     */
    public function get_taxonomy_names($filter = array('language', 'translations'))
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Registers and translates strings in an option.
 * When a string is updated in an original option, the translations of the old string are assigned to the new original string.
 *
 * @since 2.9
 */
class PLL_Translate_Option
{
    /**
     * Constructor
     *
     * @since 2.9
     *
     * @param string $name Option name.
     * @param array  $keys Recursive array of option keys to translate in the form:
     *    @example array(
     *      'option_key_to_translate_1' => 1,
     *      'option_key_to_translate_2' => 1,
     *      'my_group' => array(
     *        'sub_key_to_translate_1' => 1,
     *        'sub_key_to_translate_2' => 1,
     *      ),
     *    )
     *
     *    Note: only keys are interpreted. Any scalar can be used as values.
     * @param array  $args {
     *    Optional. Array of arguments for registering the option.
     *
     *    @type string $context           The group in which the strings will be registered.
     *    @type string $sanitize_callback A callback function that sanitizes the option's value.
     * }
     */
    public function __construct($name, $keys = array(), $args = array())
    {
    }
    /**
     * Translates the strings registered for an option.
     *
     * @since 1.0
     *
     * @param mixed $value Either a string to translate or a list of strings to translate.
     * @return mixed Translated string(s).
     */
    public function translate($value)
    {
    }
    /**
     * Recursively translates the strings registered for an option.
     *
     * @since 1.0
     *
     * @param mixed      $values Either a string to translate or a list of strings to translate.
     * @param array|bool $key    Array of option keys to translate.
     * @return array|string Translated string(s)
     */
    protected function translate_string_recursive($values, $key)
    {
    }
    /**
     * Recursively registers strings for an option.
     *
     * @since 1.0
     * @since 2.7 Signature modified
     *
     * @param string     $context The group in which the strings will be registered.
     * @param string     $option  Option name.
     * @param mixed      $values  Option value.
     * @param array|bool $key     Array of option keys to translate.
     * @return void
     */
    protected function register_string_recursive($context, $option, $values, $key)
    {
    }
    /**
     * Returns the raw value of an option (without this class' filter).
     *
     * A static property is used to make sure that the option is not filtered
     * whatever the number of instances of this class filtering the option.
     *
     * @since 3.3
     *
     * @param string $option_name Option name.
     * @return mixed
     */
    protected function get_raw_option($option_name)
    {
    }
    /**
     * Filters an option before it is updated.
     *
     * This is the step 1 in the update process, in which we prevent the update of
     * strings to their translations by filtering them out, and we store the updated strings
     * for the next step.
     *
     * @since 2.9
     *
     * @param mixed  $value     The new, unserialized option value.
     * @param mixed  $old_value The old (filtered) option value.
     * @param string $name      Option name.
     * @return mixed
     */
    public function pre_update_option($value, $old_value, $name)
    {
    }
    /**
     * Updates the string translations to keep the same translated value when updating the original option.
     *
     * This is the step 2 in the update process. Knowing all strings that have been updated,
     * we remove the old strings from the strings translations and replace them by
     * the new strings with the old translations.
     *
     * @since 2.9
     *
     * @return void
     */
    public function update_option()
    {
    }
    /**
     * Recursively compares the updated strings to the translation of the old string.
     *
     * This is the heart of the update process. If an updated string is found to be
     * the same as the translation of the old string, we restore the old string to
     * prevent the update in {@see PLL_Translate_Option::pre_update_option()}, otherwise
     * the updated string is stored in {@see PLL_Translate_Option::updated_strings} to be able to
     * later assign the translations to the new value in {@see PLL_Translate_Option::update_option()}.
     *
     * @since 2.9
     *
     * @param mixed      $old_values The old option value.
     * @param mixed      $values     The new option value..
     * @param array|bool $key        Array of option keys to translate.
     * @return mixed
     */
    protected function check_value_recursive($old_values, $values, $key)
    {
    }
    /**
     * Sanitizes the option value.
     *
     * @since 2.9
     *
     * @param string $value The unsanitised value.
     * @param string $name  The name of the option.
     * @return string Sanitized value.
     */
    public function sanitize_option($value, $name)
    {
    }
}
/**
 * Abstract class to use for object types that support translations.
 *
 * @since 1.8
 */
abstract class PLL_Translated_Object extends \PLL_Translatable_Object
{
    /**
     * Taxonomy name for the translation groups.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $tax_translations;
    /**
     * Constructor.
     *
     * @since 1.8
     *
     * @param PLL_Model $model Instance of `PLL_Model`.
     */
    public function __construct(\PLL_Model &$model)
    {
    }
    /**
     * Returns the translations group taxonomy name.
     *
     * @since 3.4
     *
     * @return string
     *
     * @phpstan-return non-empty-string
     */
    public function get_tax_translations()
    {
    }
    /**
     * Assigns a language to an object, taking care of the translations group.
     *
     * @since 3.4
     *
     * @param int                     $id   Object ID.
     * @param PLL_Language|string|int $lang Language to assign to the object.
     * @return bool True when successfully assigned. False otherwise (or if the given language is already assigned to
     *              the object).
     */
    public function set_language($id, $lang)
    {
    }
    /**
     * Returns a list of object translations, given a `tax_translations` term ID.
     *
     * @since 3.2
     *
     * @param int $term_id A `tax_translations` term ID.
     * @return int[] An associative array of translations with language code as key and translation ID as value.
     *
     * @phpstan-return array<non-empty-string, positive-int>
     */
    public function get_translations_from_term_id($term_id)
    {
    }
    /**
     * Saves the object's translations.
     *
     * @since 0.5
     *
     * @param int   $id           Object ID.
     * @param int[] $translations An associative array of translations with language code as key and translation ID as value.
     * @return int[] An associative array with language codes as key and object IDs as values.
     *
     * @phpstan-return array<non-empty-string, positive-int>
     */
    public function save_translations($id, array $translations = array())
    {
    }
    /**
     * Deletes a translation of an object.
     *
     * @since 0.5
     *
     * @param int $id Object ID.
     * @return void
     */
    public function delete_translation($id)
    {
    }
    /**
     * Returns an array of valid translations of an object.
     *
     * @since 0.5
     *
     * @param int $id Object ID.
     * @return int[] An associative array of translations with language code as key and translation ID as value.
     *
     * @phpstan-return array<non-empty-string, positive-int>
     */
    public function get_translations($id)
    {
    }
    /**
     * Returns an unvalidated array of translations of an object.
     * It is generally preferable to use `get_translations()`.
     *
     * @since 3.4
     *
     * @param int $id Object ID.
     * @return int[] An associative array of translations with language code as key and translation ID as value.
     *
     * @phpstan-return array<non-empty-string, positive-int>
     */
    public function get_raw_translations($id)
    {
    }
    /**
     * Returns the ID of the translation of an object.
     *
     * @since 0.5
     *
     * @param int                 $id   Object ID.
     * @param PLL_Language|string $lang Language (slug or object).
     * @return int|false Object ID of the translation, `false` if there is none.
     *
     * @phpstan-return positive-int|false
     */
    public function get_translation($id, $lang)
    {
    }
    /**
     * Among the object and its translations, returns the ID of the object which is in `$lang`.
     *
     * @since 0.1
     * @since 3.4 Returns 0 instead of false.
     *
     * @param int                     $id   Object ID.
     * @param PLL_Language|string|int $lang Language (object, slug, or term ID).
     * @return int The translation object ID if exists, otherwise the passed ID. `0` if the passed object has no language.
     *
     * @phpstan-return int<0, max>
     */
    public function get($id, $lang)
    {
    }
    /**
     * Checks if a user can synchronize translations.
     *
     * @since 2.6
     *
     * @param int $id Object ID.
     * @return bool
     */
    public function current_user_can_synchronize($id)
    {
    }
    /**
     * Tells whether a translation term must be updated.
     *
     * @since 2.3
     *
     * @param int   $id           Object ID.
     * @param int[] $translations An associative array of translations with language code as key and translation ID as
     *                            value. Make sure to sanitize this.
     * @return bool
     *
     * @phpstan-param array<non-empty-string, positive-int> $translations
     */
    protected function should_update_translation_group($id, $translations)
    {
    }
    /**
     * Validates and sanitizes translations.
     * This will:
     * - Make sure to return only translations in existing languages (and only translations).
     * - Sanitize the values.
     * - Make sure the provided translation (`$id`) is in the list.
     * - Check that the translated objects are in the right language, if `$context` is set to 'save'.
     *
     * @since 3.1
     * @since 3.2 Doesn't return `0` ID values.
     * @since 3.2 Added parameters `$id` and `$context`.
     *
     * @param int[]  $translations An associative array of translations with language code as key and translation ID as
     *                             value.
     * @param int    $id           Optional. The object ID for which the translations are validated. When provided, the
     *                             process makes sure it is added to the list. Default 0.
     * @param string $context      Optional. The operation for which the translations are validated. When set to
     *                             'save', a check is done to verify that the IDs and langs correspond.
     *                             'display' should be used otherwise. Default 'save'.
     * @return int[]
     *
     * @phpstan-param non-empty-string $context
     * @phpstan-return array<non-empty-string, positive-int>
     */
    protected function validate_translations($translations, $id = 0, $context = 'save')
    {
    }
    /**
     * Creates translations groups in mass.
     *
     * @since 1.6.3
     * @since 3.4 Moved from PLL_Admin_Model class.
     *
     * @param int[][] $translations Array of translations arrays.
     * @return void
     *
     * @phpstan-param array<array<string,int>> $translations
     */
    public function set_translation_in_mass($translations)
    {
    }
}
/**
 * Sets the posts languages and translations model up.
 *
 * @since 1.8
 *
 * @phpstan-import-type DBInfoWithType from PLL_Translatable_Object_With_Types_Interface
 */
class PLL_Translated_Post extends \PLL_Translated_Object implements \PLL_Translatable_Object_With_Types_Interface
{
    use \PLL_Translatable_Object_With_Types_Trait;
    /**
     * Taxonomy name for the languages.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $tax_language = 'language';
    /**
     * Identifier that must be unique for each type of content.
     * Also used when checking capabilities.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $type = 'post';
    /**
     * Identifier for each type of content to used for cache type.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $cache_type = 'posts';
    /**
     * Taxonomy name for the translation groups.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $tax_translations = 'post_translations';
    /**
     * Constructor.
     *
     * @since 1.8
     *
     * @param PLL_Model $model Instance of `PLL_Model`.
     */
    public function __construct(\PLL_Model &$model)
    {
    }
    /**
     * Adds hooks.
     *
     * @since 3.4
     *
     * @return static
     */
    public function init()
    {
    }
    /**
     * Deletes a translation of a post.
     *
     * @since 0.5
     *
     * @param int $id Post ID.
     * @return void
     */
    public function delete_translation($id)
    {
    }
    /**
     * Returns object types (post types) that need to be translated.
     * The post types list is cached for better performance.
     * The method waits for 'after_setup_theme' to apply the cache to allow themes adding the filter in functions.php.
     *
     * @since 3.4
     *
     * @param bool $filter True if we should return only valid registered object types.
     * @return string[] Object type names for which Polylang manages languages.
     *
     * @phpstan-return array<non-empty-string, non-empty-string>
     */
    public function get_translated_object_types($filter = \true)
    {
    }
    /**
     * Returns true if Polylang manages languages for this object type.
     *
     * @since 3.4
     *
     * @param string|string[] $object_type Object type (post type) name or array of object type names.
     * @return bool
     *
     * @phpstan-param non-empty-string|non-empty-string[] $object_type
     */
    public function is_translated_object_type($object_type)
    {
    }
    /**
     * Registers the language taxonomy.
     *
     * @since 1.2
     *
     * @return void
     */
    public function register_taxonomy()
    {
    }
    /**
     * Checks if registered post type must be translated.
     *
     * @since 1.2
     *
     * @param string $post_type Post type name.
     * @return void
     *
     * @phpstan-param non-empty-string $post_type
     */
    public function registered_post_type($post_type)
    {
    }
    /**
     * Forces calling 'update_object_term_cache' when querying posts or pages.
     * This is especially useful for nav menus with a lot of pages as, without doing this,
     * we would have one query per page in the menu to get the page language for the permalink.
     *
     * @since 1.8
     *
     * @param WP_Query $query Reference to the query object.
     * @return void
     */
    public function pre_get_posts($query)
    {
    }
    /**
     * Checks if the current user can read the post.
     *
     * @since 1.5
     * @since 3.4 Renamed the parameter $post_id into $id.
     *
     * @param int    $id Post ID
     * @param string $context Optional, 'edit' or 'view'. Defaults to 'view'.
     * @return bool
     *
     * @phpstan-param non-empty-string $context
     */
    public function current_user_can_read($id, $context = 'view')
    {
    }
    /**
     * Returns a list of posts in a language ($lang) not translated in another language ($untranslated_in).
     *
     * @since 2.6
     *
     * @param string       $type            Post type.
     * @param PLL_Language $untranslated_in The language the posts must not be translated in.
     * @param PLL_Language $lang            Language of the searched posts.
     * @param string       $search          Limit the results to the posts matching this string.
     * @return WP_Post[] Array of posts.
     */
    public function get_untranslated($type, \PLL_Language $untranslated_in, \PLL_Language $lang, $search = '')
    {
    }
    /**
     * Returns database-related informations that can be used in some of this class methods.
     * These are specific to the table containing the objects.
     *
     * @see PLL_Translatable_Object::join_clause()
     * @see PLL_Translatable_Object::get_objects_with_no_lang_sql()
     *
     * @since 3.4.3
     *
     * @return string[] {
     *     @type string $table         Name of the table.
     *     @type string $id_column     Name of the column containing the object's ID.
     *     @type string $type_column   Name of the column containing the object's type.
     *     @type string $default_alias Default alias corresponding to the object's table.
     * }
     * @phpstan-return DBInfoWithType
     */
    protected function get_db_infos()
    {
    }
}
/**
 * Sets the taxonomies languages and translations model up.
 *
 * @since 1.8
 *
 * @phpstan-import-type DBInfoWithType from PLL_Translatable_Object_With_Types_Interface
 */
class PLL_Translated_Term extends \PLL_Translated_Object implements \PLL_Translatable_Object_With_Types_Interface
{
    use \PLL_Translatable_Object_With_Types_Trait;
    /**
     * Taxonomy name for the languages.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $tax_language = 'term_language';
    /**
     * Object type to use when registering the taxonomy.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $object_type = 'term';
    /**
     * Identifier that must be unique for each type of content.
     * Also used when checking capabilities.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $type = 'term';
    /**
     * Identifier for each type of content to used for cache type.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $cache_type = 'terms';
    /**
     * Taxonomy name for the translation groups.
     *
     * @var string
     *
     * @phpstan-var non-empty-string
     */
    protected $tax_translations = 'term_translations';
    /**
     * Constructor.
     *
     * @since 1.8
     *
     * @param PLL_Model $model Instance of `PLL_Model`.
     */
    public function __construct(\PLL_Model &$model)
    {
    }
    /**
     * Adds hooks.
     *
     * @since 3.4
     *
     * @return static
     */
    public function init()
    {
    }
    /**
     * Stores the term's language into the database.
     *
     * @since 0.6
     * @since 3.4 Renamed the parameter $term_id into $id.
     *
     * @param int                     $id   Term ID.
     * @param PLL_Language|string|int $lang Language (object, slug, or term ID).
     * @return bool True when successfully assigned. False otherwise (or if the given language is already assigned to
     *              the object).
     */
    public function set_language($id, $lang)
    {
    }
    /**
     * Returns the language of a term.
     *
     * @since 0.1
     * @since 3.4 Renamed the parameter $value into $id.
     * @since 3.4 Deprecated to retrieve the language by term slug + taxonomy anymore.
     *
     * @param int $id Term ID.
     * @return PLL_Language|false A `PLL_Language` object. `false` if no language is associated to that term or if the
     *                            ID is invalid.
     */
    public function get_language($id)
    {
    }
    /**
     * Deletes a translation of a term.
     *
     * @since 0.5
     *
     * @param int $id Term ID.
     * @return void
     */
    public function delete_translation($id)
    {
    }
    /**
     * Returns object types (taxonomy names) that need to be translated.
     * The taxonomies list is cached for better performance.
     * The method waits for 'after_setup_theme' to apply the cache to allow themes adding the filter in functions.php.
     *
     * @since 3.4
     *
     * @param bool $filter True if we should return only valid registered object types.
     * @return string[] Object type names for which Polylang manages languages.
     *
     * @phpstan-return array<non-empty-string, non-empty-string>
     */
    public function get_translated_object_types($filter = \true)
    {
    }
    /**
     * Caches the language and translations when terms are queried by get_terms().
     *
     * @since 1.2
     *
     * @param WP_Term[]|int[] $terms      Queried terms.
     * @param string[]        $taxonomies Queried taxonomies.
     * @return WP_Term[]|int[] Unmodified $terms.
     *
     * @phpstan-param array<WP_Term|positive-int> $terms
     * @phpstan-param array<non-empty-string> $taxonomies
     * @phpstan-return array<WP_Term|positive-int>
     */
    public function _prime_terms_cache($terms, $taxonomies)
    {
    }
    /**
     * When the term cache is cleaned, cleans the object term cache too.
     *
     * @since 2.0
     *
     * @param int[] $ids An array of term IDs.
     * @return void
     *
     * @phpstan-param array<positive-int> $ids
     */
    public function clean_term_cache($ids)
    {
    }
    /**
     * Tells whether a translation term must be updated.
     *
     * @since 2.3
     *
     * @param int   $id           Term ID.
     * @param int[] $translations An associative array of translations with language code as key and translation ID as
     *                            value. Make sure to sanitize this.
     * @return bool
     *
     * @phpstan-param array<non-empty-string, positive-int> $translations
     */
    protected function should_update_translation_group($id, $translations)
    {
    }
    /**
     * Assigns a language to terms in mass.
     *
     * @since 1.2
     * @since 3.4 Moved from PLL_Admin_Model class.
     *
     * @param int[]        $ids  Array of post ids or term ids.
     * @param PLL_Language $lang Language to assign to the posts or terms.
     * @return void
     */
    public function set_language_in_mass($ids, $lang)
    {
    }
    /**
     * Returns database-related informations that can be used in some of this class methods.
     * These are specific to the table containing the objects.
     *
     * @see PLL_Translatable_Object::join_clause()
     * @see PLL_Translatable_Object::get_objects_with_no_lang_sql()
     *
     * @since 3.4.3
     *
     * @return string[] {
     *     @type string $table         Name of the table.
     *     @type string $id_column     Name of the column containing the object's ID.
     *     @type string $type_column   Name of the column containing the object's type.
     *     @type string $default_alias Default alias corresponding to the object's table.
     * }
     * @phpstan-return DBInfoWithType
     */
    protected function get_db_infos()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class for displaying various tree-like language structures.
 *
 * Extend the `PLL_Walker` class to use it, and implement some of the methods from `Walker`.
 * See: {https://developer.wordpress.org/reference/classes/walker/#methods}.
 *
 * @since 3.4
 */
class PLL_Walker extends \Walker
{
    /**
     * Database fields to use.
     *
     * @see https://developer.wordpress.org/reference/classes/walker/#properties Walker::$db_fields.
     *
     * @var string[]
     */
    public $db_fields = array('parent' => 'parent', 'id' => 'id');
    /**
     * Overrides Walker::display_element as it expects an object with a parent property.
     *
     * @since 1.2
     * @since 3.4 Refactored and moved in `PLL_Walker`.
     *
     * @param PLL_Language|stdClass $element           Data object. `PLL_language` in our case.
     * @param array                 $children_elements List of elements to continue traversing.
     * @param int                   $max_depth         Max depth to traverse.
     * @param int                   $depth             Depth of current element.
     * @param array                 $args              An array of arguments.
     * @param string                $output            Passed by reference. Used to append additional content.
     * @return void
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
    {
    }
    /**
     * Sets `PLL_Walker::walk()` arguments as it should
     * and triggers an error in case of misuse of them.
     *
     * @since 3.4
     *
     * @param array|int $max_depth The maximum hierarchical depth. Passed by reference.
     * @param array     $args      Additional arguments. Passed by reference.
     * @return void
     */
    protected function maybe_fix_walk_args(&$max_depth, &$args)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Displays languages in a dropdown list
 *
 * @since 1.2
 * @since 3.4 Extends `PLL_Walker` now.
 */
class PLL_Walker_Dropdown extends \PLL_Walker
{
    /**
     * Database fields to use.
     *
     * @see https://developer.wordpress.org/reference/classes/walker/#properties Walker::$db_fields.
     *
     * @var string[]
     */
    public $db_fields = array('parent' => 'parent', 'id' => 'id');
    /**
     * Outputs one element.
     *
     * @since 1.2
     *
     * @param string   $output            Passed by reference. Used to append additional content.
     * @param stdClass $element           The data object.
     * @param int      $depth             Depth of the item.
     * @param array    $args              An array of additional arguments.
     * @param int      $current_object_id ID of the current item.
     * @return void
     */
    public function start_el(&$output, $element, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
    /**
     * Starts the output of the dropdown list
     *
     * @since 1.2
     * @since 2.6.7 Use $max_depth and ...$args parameters to follow the move of WP 5.3
     *
     * List of parameters accepted in $args:
     *
     * flag     => display the selected language flag in front of the dropdown if set to 1, defaults to 0
     * value    => the language field to use as value attribute, defaults to 'slug'
     * selected => the selected value, mandatory
     * name     => the select name attribute, defaults to 'lang_choice'
     * id       => the select id attribute, defaults to $args['name']
     * class    => the class attribute
     * disabled => disables the dropdown if set to 1
     *
     * @param array $elements  An array of `PLL_language` or `stdClass` elements.
     * @param int   $max_depth The maximum hierarchical depth.
     * @param mixed ...$args   Additional arguments.
     * @return string The hierarchical item output.
     *
     * @phpstan-param array<PLL_Language|stdClass> $elements
     */
    public function walk($elements, $max_depth, ...$args)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Displays a language list
 *
 * @since 1.2
 * @since 3.4 Extends `PLL_Walker` now.
 */
class PLL_Walker_List extends \PLL_Walker
{
    /**
     * Database fields to use.
     *
     * @see https://developer.wordpress.org/reference/classes/walker/#properties Walker::$db_fields.
     *
     * @var string[]
     */
    public $db_fields = array('parent' => 'parent', 'id' => 'id');
    /**
     * Outputs one element
     *
     * @since 1.2
     *
     * @param string   $output            Passed by reference. Used to append additional content.
     * @param stdClass $element           The data object.
     * @param int      $depth             Depth of the item.
     * @param array    $args              An array of additional arguments.
     * @param int      $current_object_id ID of the current item.
     * @return void
     */
    public function start_el(&$output, $element, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
    /**
     * Overrides Walker:walk to set depth argument
     *
     * @since 1.2
     * @since 2.6.7 Use $max_depth and ...$args parameters to follow the move of WP 5.3
     *
     * @param array $elements  An array of elements.
     * @param int   $max_depth The maximum hierarchical depth.
     * @param mixed ...$args   Additional arguments.
     * @return string The hierarchical item output.
     */
    public function walk($elements, $max_depth, ...$args)
    {
    }
}
/**
 * This classes rewrite the whole Calendar widget functionality as there is no filter on sql queries and only a filter on final output.
 * Code last checked: WP 5.5.
 *
 * A request to add filters on sql queries exists: http://core.trac.wordpress.org/ticket/15202.
 * Method used in 0.4.x: use of the get_calendar filter and overwrite the output of get_calendar function -> not very efficient (add 4 to 5 sql queries).
 * Method used since 0.5: remove the WP widget and replace it by our own -> our language filter will not work if get_calendar is called directly by a theme.
 *
 * @since 0.5
 */
class PLL_Widget_Calendar extends \WP_Widget_Calendar
{
    protected static $pll_instance = 0;
    // Can't use $instance of WP_Widget_Calendar as it's private :/.
    /**
     * Outputs the content for the current Calendar widget instance.
     * Modified version of the parent function to call our own get_calendar() method.
     *
     * @since 0.5
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance The settings for the particular instance of the widget.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Modified version of the WP get_calendar() function to filter the queries.
     *
     * @since 0.5
     *
     * @param bool $initial Optional, default is true. Use initial calendar names.
     * @param bool $display Optional, default is true. Set to false for return.
     * @return void|string Void if `$display` argument is true, calendar HTML if `$display` is false.
     */
    public static function get_calendar($initial = \true, $display = \true)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * The language switcher widget
 *
 * @since 0.1
 */
class PLL_Widget_Languages extends \WP_Widget
{
    /**
     * Constructor
     *
     * @since 0.1
     */
    public function __construct()
    {
    }
    /**
     * Displays the widget
     *
     * @since 0.1
     *
     * @param array $args     Display arguments including before_title, after_title, before_widget, and after_widget.
     * @param array $instance The settings for the particular instance of the widget
     * @return void
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Updates the widget options
     *
     * @since 0.4
     *
     * @param array $new_instance New settings for this instance as input by the user via form()
     * @param array $old_instance Old settings for this instance
     * @return array Settings to save or bool false to cancel saving
     */
    public function update($new_instance, $old_instance)
    {
    }
    /**
     * Displays the widget form.
     *
     * @since 0.4
     *
     * @param array $instance Current settings.
     * @return string
     */
    public function form($instance)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A generic activation / de-activation class compatble with multisite
 *
 * @since 1.7
 */
class PLL_Install_Base
{
    /**
     * The plugin basename.
     *
     * @var string
     */
    protected $plugin_basename;
    /**
     * Constructor
     *
     * @since 1.7
     *
     * @param string $plugin_basename Plugin basename
     */
    public function __construct($plugin_basename)
    {
    }
    /**
     * Allows to detect plugin deactivation
     *
     * @since 1.7
     *
     * @return bool true if the plugin is currently beeing deactivated
     */
    public function is_deactivation()
    {
    }
    /**
     * Activation or deactivation for all blogs
     *
     * @since 1.2
     *
     * @param string $what        Either 'activate' or 'deactivate'
     * @param bool   $networkwide
     * @return void
     */
    protected function do_for_all_blogs($what, $networkwide)
    {
    }
    /**
     * Plugin activation for multisite
     *
     * @since 1.7
     *
     * @param bool $networkwide
     * @return void
     */
    public function activate($networkwide)
    {
    }
    /**
     * Plugin activation
     *
     * @since 0.5
     *
     * @return void
     */
    protected function _activate()
    {
    }
    /**
     * Plugin deactivation for multisite
     *
     * @since 0.1
     *
     * @param bool $networkwide
     * @return void
     */
    public function deactivate($networkwide)
    {
    }
    /**
     * Plugin deactivation
     *
     * @since 0.5
     *
     * @return void
     */
    protected function _deactivate()
    {
    }
    /**
     * Site creation on multisite ( to set default options )
     *
     * @since 2.6.8
     *
     * @param WP_Site $new_site New site object.
     * @return void
     */
    public function new_site($new_site)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Polylang activation / de-activation class
 *
 * @since 1.7
 */
class PLL_Install extends \PLL_Install_Base
{
    /**
     * Checks min PHP and WP version, displays a notice if a requirement is not met.
     *
     * @since 2.6.7
     *
     * @return bool
     */
    public function can_activate()
    {
    }
    /**
     * Displays a notice if PHP min version is not met.
     *
     * @since 2.6.7
     *
     * @return void
     */
    public function php_version_notice()
    {
    }
    /**
     * Displays a notice if WP min version is not met.
     *
     * @since 2.6.7
     *
     * @return void
     */
    public function wp_version_notice()
    {
    }
    /**
     * Get default Polylang options.
     *
     * @since 1.8
     *
     * @return array
     */
    public static function get_default_options()
    {
    }
    /**
     * Plugin activation
     *
     * @since 0.5
     *
     * @return void
     */
    protected function _activate()
    {
    }
    /**
     * Plugin deactivation
     *
     * @since 0.5
     *
     * @return void
     */
    protected function _deactivate()
    {
    }
}
/**
 * Allows plugins to use their own update API.
 * Modified version with 'polylang' text domain and missing comments for translators.
 *
 * @author Easy Digital Downloads
 * @version 1.9.1
 */
class PLL_Plugin_Updater
{
    /**
     * Class constructor.
     *
     * @uses plugin_basename()
     * @uses hook()
     *
     * @param string  $_api_url     The URL pointing to the custom API endpoint.
     * @param string  $_plugin_file Path to the plugin file.
     * @param array   $_api_data    Optional data to send with API calls.
     */
    public function __construct($_api_url, $_plugin_file, $_api_data = \null)
    {
    }
    /**
     * Set up WordPress filters to hook into WP's update process.
     *
     * @uses add_filter()
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Check for Updates at the defined API endpoint and modify the update array.
     *
     * This function dives into the update API just when WordPress creates its update array,
     * then adds a custom API call and injects the custom plugin data retrieved from the API.
     * It is reassembled from parts of the native WordPress plugin update code.
     * See wp-includes/update.php line 121 for the original wp_update_plugins() function.
     *
     * @uses api_request()
     *
     * @param array   $_transient_data Update array build by WordPress.
     * @return array Modified update array with custom plugin data.
     */
    public function check_update($_transient_data)
    {
    }
    /**
     * Get repo API data from store.
     * Save to cache.
     *
     * @return \stdClass
     */
    public function get_repo_api_data()
    {
    }
    /**
     * Show the update notification on multisite subsites.
     *
     * @param string  $file
     * @param array   $plugin
     */
    public function show_update_notification($file, $plugin)
    {
    }
    /**
     * Updates information on the "View version x.x details" page with custom data.
     *
     * @uses api_request()
     *
     * @param mixed   $_data
     * @param string  $_action
     * @param object  $_args
     * @return object $_data
     */
    public function plugins_api_filter($_data, $_action = '', $_args = \null)
    {
    }
    /**
     * Disable SSL verification in order to prevent download update failures
     *
     * @param array   $args
     * @param string  $url
     * @return object $array
     */
    public function http_request_args($args, $url)
    {
    }
    /**
     * If available, show the changelog for sites in a multisite install.
     */
    public function show_changelog()
    {
    }
    /**
     * Get the version info from the cache, if it exists.
     *
     * @param string $cache_key
     * @return object
     */
    public function get_cached_version_info($cache_key = '')
    {
    }
    /**
     * Adds the plugin version information to the database.
     *
     * @param string $value
     * @param string $cache_key
     */
    public function set_version_info_cache($value = '', $cache_key = '')
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Allows to download translations from TranslationsPress
 * This is a modified version of the library available at https://github.com/WP-Translations/t15s-registry
 * This version aims to be compatible with PHP 5.2, and supports only plugins.
 *
 * @since 2.6
 */
class PLL_T15S
{
    /**
     * Transient key
     *
     * @var string
     */
    const TRANSIENT_KEY_PLUGIN = 't15s-registry-plugins';
    /**
     * Adds a new project to load translations for.
     *
     * @since 2.6
     *
     * @param string $slug    Project directory slug.
     * @param string $api_url Full GlotPress API URL for the project.
     */
    public function __construct($slug, $api_url)
    {
    }
    /**
     * Short-circuits translations API requests for private projects.
     *
     * @since 2.6
     *
     * @param bool|array $result         The result object. Default false.
     * @param string     $requested_type The type of translations being requested.
     * @param object     $args           Translation API arguments.
     * @return bool|array
     */
    public function translations_api($result, $requested_type, $args)
    {
    }
    /**
     * Filters the translations transients to include the private plugin or theme.
     *
     * @see wp_get_translation_updates()
     *
     * @since 2.6
     *
     * @param bool|array $value The transient value.
     * @return bool|array
     */
    public function site_transient_update_plugins($value)
    {
    }
    /**
     * Registers actions for clearing translation caches.
     *
     * @since 2.6
     *
     * @return void
     */
    public static function register_clean_translations_cache()
    {
    }
    /**
     * Clears existing translation cache.
     *
     * @since 2.6
     *
     * @return void
     */
    public static function clean_translations_cache()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages Polylang upgrades
 *
 * @since 1.2
 */
class PLL_Upgrade
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param array $options Polylang options
     */
    public function __construct(&$options)
    {
    }
    /**
     * Check if upgrade is possible otherwise die to avoid activation
     *
     * @since 1.2
     *
     * @return void
     */
    public function can_activate()
    {
    }
    /**
     * Upgrades if possible otherwise returns false to stop Polylang loading
     *
     * @since 1.2
     *
     * @return bool true if upgrade is possible, false otherwise
     */
    public function upgrade()
    {
    }
    /**
     * Check if we the previous version is not too old
     * Upgrades if OK
     * /!\ never start any upgrade before admin_init as it is likely to conflict with some other plugins
     *
     * @since 1.2
     *
     * @return bool true if upgrade is possible, false otherwise
     */
    public function can_upgrade()
    {
    }
    /**
     * Displays a notice when ugrading from a too old version
     *
     * @since 1.0
     *
     * @return void
     */
    public function admin_notices()
    {
    }
    /**
     * Upgrades the plugin depending on the previous version
     *
     * @since 1.2
     *
     * @return void
     */
    public function _upgrade()
    {
    }
    /**
     * Upgrades if the previous version is < 2.0.8
     * Changes the user meta 'user_lang' to 'locale' to match WP 4.7 choice
     *
     * @since 2.0.8
     *
     * @return void
     */
    protected function upgrade_2_0_8()
    {
    }
    /**
     * Upgrades if the previous version is < 2.1.
     * Moves strings translations from polylang_mo post_content to post meta _pll_strings_translations.
     *
     * @since 2.1
     *
     * @return void
     */
    protected function upgrade_2_1()
    {
    }
    /**
     * Upgrades if the previous version is < 2.7
     * Replace numeric keys by hashes in WPML registered strings
     * Dismiss the wizard notice for existing sites
     *
     * @since 2.7
     *
     * @return void
     */
    protected function upgrade_2_7()
    {
    }
    /**
     * Upgrades if the previous version is < 3.4.0.
     *
     * @since 3.4
     *
     * @return void
     */
    protected function upgrade_3_4()
    {
    }
    /**
     * Moves strings translations from post meta to term meta _pll_strings_translations.
     *
     * @since 3.4
     *
     * @return void
     */
    protected function migrate_strings_translations()
    {
    }
    /**
     * Migrate locale fallback to language term description.
     *
     * @since 3.4
     *
     * @return void
     */
    protected function migrate_locale_fallback_to_language_description()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Class PLL_Admin_Site_Health to add debug info in WP Site Health.
 *
 * @see https://make.wordpress.org/core/2019/04/25/site-health-check-in-5-2/ since WordPress 5.2
 *
 * @since 2.8
 */
class PLL_Admin_Site_Health
{
    /**
     * A reference to the PLL_Model instance.
     *
     * @since 2.8
     *
     * @var PLL_Model
     */
    protected $model;
    /**
     * A reference to the PLL_Admin_Static_Pages instance.
     *
     * @since 2.8
     *
     * @var PLL_Admin_Static_Pages|null
     */
    protected $static_pages;
    /**
     * PLL_Admin_Site_Health constructor.
     *
     * @since 2.8
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Returns a list of keys to exclude from the site health information.
     *
     * @since 2.8
     *
     * @return string[] List of option keys to ignore.
     */
    protected function exclude_options_keys()
    {
    }
    /**
     * Returns a list of keys to exclude from the site health information.
     *
     * @since 2.8
     *
     * @return string[] List of language keys to ignore.
     */
    protected function exclude_language_keys()
    {
    }
    /**
     * Formats an array to display in options information.
     *
     * @since 2.8
     *
     * @param array $array An array of formatted data.
     * @return string
     */
    protected function format_array($array)
    {
    }
    /**
     * Transforms the option value to readable human sentence.
     *
     * @since 3.3
     *
     * @param string $key   Option name.
     * @param mixed  $value Option value.
     * @return mixed Option value.
     */
    public function format_value($key, $value)
    {
    }
    /**
     * Add Polylang Options to Site Health Informations tab.
     *
     * @since 2.8
     *
     * @param array $debug_info The debug information to be added to the core information page.
     * @return array
     */
    public function info_options($debug_info)
    {
    }
    /**
     * Adds Polylang Languages settings to Site Health Information tab.
     *
     * @since 2.8
     *
     * @param array $debug_info The debug information to be added to the core information page.
     * @return array
     */
    public function info_languages($debug_info)
    {
    }
    /**
     * Adds term props data to the info languages array.
     *
     * @since 3.4
     *
     * @param array $value The term props data.
     * @return array The term props data formatted for the info languages tab.
     */
    protected function get_info_term_props($value)
    {
    }
    /**
     * Returns the flag used in the language switcher.
     *
     * @since 2.8
     *
     * @param PLL_Language $language Language object.
     * @return string
     */
    protected function get_flag($language)
    {
    }
    /**
     * Add a Site Health test on homepage translation.
     *
     * @since 2.8
     *
     * @param array $tests Array with tests declaration data.
     * @return array
     */
    public function status_tests($tests)
    {
    }
    /**
     * Test if the home page is translated or not.
     *
     * @since 2.8
     *
     * @return array $result Array with test results.
     */
    public function homepage_test()
    {
    }
    /**
     * Add Polylang Warnings to Site Health Informations tab.
     *
     * @since 3.1
     *
     * @param array $debug_info The debug information to be added to the core information page.
     * @return array
     */
    public function info($debug_info)
    {
    }
    /**
     * Get an array with post_type as key and post ids as value.
     *
     * @since 3.1
     *
     * @param int $limit Max number of posts to show per post type. `-1` to return all of them. Default is 5.
     * @return int[][] Array containing an array of post ids.
     *
     * @phpstan-param -1|positive-int $limit
     */
    public function get_post_ids_without_lang($limit = 5)
    {
    }
    /**
     * Get an array with taxonomy as key and term ids as value.
     *
     * @since 3.1
     *
     * @param int $limit Max number of terms to show per post type. `-1` to return all of them. Default is 5.
     * @return int[][] Array containing an array of term ids.
     *
     * @phpstan-param -1|positive-int $limit
     */
    public function get_term_ids_without_lang($limit = 5)
    {
    }
    /**
     * Requires the simplexml PHP module when a wpml-config.xml has been found.
     *
     * @since 3.1
     * @since 3.2 Moved from PLL_WPML_Config
     *
     * @param array $modules An associative array of modules to test for.
     * @return array
     */
    public function site_status_test_php_modules($modules)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Common class for handling the core sitemaps.
 *
 * The child classes must called the init() method.
 *
 * @since 3.0
 */
abstract class PLL_Abstract_Sitemaps
{
    /**
     * Setups actions and filters.
     *
     * @since 2.8
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Whitelists the home url filter for the sitemaps.
     *
     * @since 2.8
     *
     * @param array $whitelist White list.
     * @return array;
     */
    public function home_url_white_list($whitelist)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Decorator to add multilingual capability to sitemaps providers
 *
 * @since 2.8
 */
class PLL_Multilingual_Sitemaps_Provider extends \WP_Sitemaps_Provider
{
    /**
     * The decorated sitemaps provider.
     *
     * @since 2.8
     *
     * @var WP_Sitemaps_Provider
     */
    protected $provider;
    /**
     * The PLL_Links_Model instance.
     *
     * @since 2.8
     *
     * @var PLL_Links_Model
     */
    protected $links_model;
    /**
     * The PLL_Model instance.
     *
     * @since 2.8
     *
     * @var PLL_Model
     */
    protected $model;
    /**
     * Constructor.
     *
     * @since 2.8
     *
     * @param WP_Sitemaps_Provider $provider    An instance of a WP_Sitemaps_Provider child class.
     * @param PLL_Links_Model      $links_model The PLL_Links_Model instance.
     */
    public function __construct($provider, &$links_model)
    {
    }
    /**
     * Gets a URL list for a sitemap.
     *
     * @since 2.8
     *
     * @param int    $page_num       Page of results.
     * @param string $object_subtype Optional. Object subtype name. Default empty.
     * @return array Array of URLs for a sitemap.
     */
    public function get_url_list($page_num, $object_subtype = '')
    {
    }
    /**
     * Gets the max number of pages available for the object type.
     *
     * @since 2.8
     *
     * @param string $object_subtype Optional. Object subtype. Default empty.
     * @return int Total number of pages.
     */
    public function get_max_num_pages($object_subtype = '')
    {
    }
    /**
     * Filters the query arguments to add the language.
     *
     * @since 2.8
     *
     * @param array $args Sitemap provider WP_Query or WP_Term_Query arguments.
     * @return array
     */
    public static function query_args($args)
    {
    }
    /**
     * Gets data for a given sitemap type.
     *
     * @since 2.8
     *
     * @param string $object_subtype_name Object subtype name if any.
     * @param string $lang                Optionnal language name.
     * @return array
     */
    protected function get_sitemap_data($object_subtype_name, $lang = '')
    {
    }
    /**
     * Gets data about each sitemap type.
     *
     * @since 2.8
     *
     * @return array[] Array of sitemap types including object subtype name and number of pages.
     */
    public function get_sitemap_type_data()
    {
    }
    /**
     * Gets the URL of a sitemap entry.
     *
     * @since 2.8
     *
     * @param string $name The name of the sitemap.
     * @param int    $page The page of the sitemap.
     * @return string The composed URL for a sitemap entry.
     */
    public function get_sitemap_url($name, $page)
    {
    }
    /**
     * Returns the list of supported object subtypes exposed by the provider.
     *
     * @since 2.8
     *
     * @return array List of object subtypes objects keyed by their name.
     */
    public function get_object_subtypes()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Handles the core sitemaps for subdomains and multiple domains.
 *
 * @since 3.0
 */
class PLL_Sitemaps_Domain extends \PLL_Abstract_Sitemaps
{
    /**
     * @var PLL_Links_Abstract_Domain
     */
    protected $links_model;
    /**
     * Constructor.
     *
     * @since 3.0
     *
     * @param object $polylang Main Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Setups actions and filters.
     *
     * @since 3.0
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Filters the sitemap index entries for subdomains and multiple domains.
     *
     * @since 2.8
     *
     * @param array $sitemap_entry Sitemap entry for the post.
     * @return array
     */
    public function index_entry($sitemap_entry)
    {
    }
    /**
     * Makes sure that the sitemap urls are always evaluated on the current domain.
     *
     * @since 2.8.4
     *
     * @param string $url A sitemap url.
     * @return string
     */
    public function sitemap_url($url)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Handles the core sitemaps for sites using a single domain.
 *
 * @since 2.8
 */
class PLL_Sitemaps extends \PLL_Abstract_Sitemaps
{
    /**
     * @var PLL_Links_Model
     */
    protected $links_model;
    /**
     * @var PLL_Model
     */
    protected $model;
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    protected $options;
    /**
     * Constructor.
     *
     * @since 2.8
     *
     * @param object $polylang Main Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Setups actions and filters.
     *
     * @since 2.8
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Assigns the current language to the default language when the sitemap url
     * doesn't include any language.
     *
     * @since 2.8
     *
     * @param string|bool $lang  Current language code, false if not set yet.
     * @param WP_Query    $query Main WP query object.
     * @return string|bool
     */
    public function set_language_from_query($lang, $query)
    {
    }
    /**
     * Filters the sitemaps rewrite rules to take the languages into account.
     *
     * @since 2.8
     *
     * @param string[] $rules Rewrite rules.
     * @return string[] Modified rewrite rules.
     */
    public function rewrite_rules($rules)
    {
    }
    /**
     * Replaces a sitemap provider by our decorator.
     *
     * @since 2.8
     *
     * @param WP_Sitemaps_Provider $provider Instance of a WP_Sitemaps_Provider.
     * @return WP_Sitemaps_Provider
     */
    public function replace_provider($provider)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages copy and synchronization of terms and post metas on front
 *
 * @since 2.4
 */
class PLL_Sync
{
    /**
     * @var PLL_Sync_Tax
     */
    public $taxonomies;
    /**
     * @var PLL_Sync_Post_Metas
     */
    public $post_metas;
    /**
     * @var PLL_Sync_Term_Metas
     */
    public $term_metas;
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    protected $options;
    /**
     * @var PLL_Model
     */
    protected $model;
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Get post fields to synchronize.
     *
     * @since 2.4
     *
     * @param WP_Post $post Post object.
     * @return array
     */
    protected function get_fields_to_sync($post)
    {
    }
    /**
     * Prevents synchronized post parent modification if the current user hasn't enough rights
     *
     * @since 2.6
     *
     * @param int   $post_parent Post parent ID
     * @param int   $post_id     Post ID, unused
     * @param array $postarr     Array of parsed post data
     * @return int
     */
    public function can_sync_post_parent($post_parent, $post_id, $postarr)
    {
    }
    /**
     * Prevents synchronized post data modification if the current user hasn't enough rights
     *
     * @since 2.6
     *
     * @param array $data    An array of slashed post data.
     * @param array $postarr An array of sanitized, but otherwise unmodified post data.
     * @return array
     */
    public function can_sync_post_data($data, $postarr)
    {
    }
    /**
     * Synchronizes post fields in translations.
     *
     * @since 2.4
     *
     * @param int     $post_id      Post id.
     * @param WP_Post $post         Post object.
     * @param int[]   $translations Post translations.
     * @return void
     */
    public function pll_save_post($post_id, $post, $translations)
    {
    }
    /**
     * Synchronize term parent in translations
     * Calling clean_term_cache *after* this is mandatory otherwise the $taxonomy_children option is not correctly updated
     *
     * @since 2.3
     *
     * @param int    $term_id  Term id.
     * @param int    $tt_id    Term taxonomy id, not used.
     * @param string $taxonomy Taxonomy name.
     * @return void
     */
    public function sync_term_parent($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     * Synchronizes terms and metas in translations for media
     *
     * @since 1.8
     *
     * @param int $post_id post id
     * @return void
     */
    public function edit_attachment($post_id)
    {
    }
    /**
     * Synchronize sticky posts.
     *
     * @since 2.3
     *
     * @param int[] $value     New option value.
     * @param int[] $old_value Old option value.
     * @return int[]
     */
    public function sync_sticky_posts($value, $old_value)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages copy and synchronization of terms and post metas
 *
 * @since 1.2
 */
class PLL_Admin_Sync extends \PLL_Sync
{
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Translate post parent if exists when using "Add new" ( translation )
     *
     * @since 0.6
     *
     * @param int   $post_parent Post parent ID
     * @param int   $post_id     Post ID, unused
     * @param array $postarr     Array of parsed post data
     * @return int
     */
    public function wp_insert_post_parent($post_parent, $post_id, $postarr)
    {
    }
    /**
     * Copy menu order, comment, ping status and optionally the date when creating a new tanslation
     *
     * @since 2.5
     *
     * @param array $data An array of slashed post data.
     * @return array
     */
    public function wp_insert_post_data($data)
    {
    }
    /**
     * Copy post metas, and taxonomies when using "Add new" ( translation )
     *
     * @since 2.5
     * @since 3.1 Use of use_block_editor_for_post filter instead of rest_api_init which is triggered too early in WP 5.8.
     *
     * @param bool $is_block_editor Whether the post can be edited or not.
     * @return bool
     */
    public function new_post_translation($is_block_editor)
    {
    }
    /**
     * Get post fields to synchronize.
     *
     * @since 2.4
     *
     * @param WP_Post $post Post object.
     * @return array Fields to synchronize.
     */
    protected function get_fields_to_sync($post)
    {
    }
    /**
     * Synchronizes post fields in translations.
     *
     * @since 1.2
     *
     * @param int     $post_id      Post id.
     * @param WP_Post $post         Post object.
     * @param int[]   $translations Post translations.
     */
    public function pll_save_post($post_id, $post, $translations)
    {
    }
    /**
     * Some backward compatibility with Polylang < 2.3
     * allows to call PLL()->sync->copy_post_metas() and PLL()->sync->copy_taxonomies()
     * used for example in Polylang for WooCommerce
     * the compatibility is however only partial as the 4th argument $sync is lost
     *
     * @since 2.3
     *
     * @param string $func Function name
     * @param array  $args Function arguments
     * @return mixed|void
     */
    public function __call($func, $args)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Settings class for synchronization settings management
 *
 * @since 1.8
 */
class PLL_Settings_Sync extends \PLL_Settings_Module
{
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 50;
    /**
     * Constructor
     *
     * @since 1.8
     *
     * @param object $polylang polylang object
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Deactivates the module
     *
     * @since 1.8
     */
    public function deactivate()
    {
    }
    /**
     * Displays the settings form
     *
     * @since 1.8
     */
    protected function form()
    {
    }
    /**
     * Sanitizes the settings before saving
     *
     * @since 1.8
     *
     * @param array $options
     */
    protected function update($options)
    {
    }
    /**
     * Get the row actions.
     *
     * @since 1.8
     *
     * @return string[] Row actions.
     */
    protected function get_actions()
    {
    }
    /**
     * Get the list of synchronization settings.
     *
     * @since 1.0
     *
     * @return string[] Array synchronization options.
     */
    public static function list_metas_to_sync()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Abstract class to manage the copy and synchronization of metas
 *
 * @since 2.3
 */
abstract class PLL_Sync_Metas
{
    /**
     * @var PLL_Model
     */
    public $model;
    /**
     * Meta type. Typically 'post' or 'term'.
     *
     * @var string
     */
    protected $meta_type;
    /**
     * Stores the previous values when updating a meta.
     *
     * @var array
     */
    protected $prev_value = array();
    /**
     * Stores the metas to synchronize before deleting them.
     *
     * @var array
     */
    protected $to_copy = array();
    /**
     * Constructor
     *
     * @since 2.3
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Removes "added_{$this->meta_type}_meta" action
     *
     * @since 2.3
     *
     * @return void
     */
    protected function remove_add_meta_action()
    {
    }
    /**
     * Removes all meta synchronization actions and filters
     *
     * @since 2.3
     *
     * @return void
     */
    protected function remove_all_meta_actions()
    {
    }
    /**
     * Adds "added_{$this->meta_type}_meta" action
     *
     * @since 2.3
     *
     * @return void
     */
    protected function restore_add_meta_action()
    {
    }
    /**
     * Adds meta synchronization actions and filters
     *
     * @since 2.3
     *
     * @return void
     */
    protected function add_all_meta_actions()
    {
    }
    /**
     * Maybe modify ("translate") a meta value when it is copied or synchronized
     *
     * @since 2.3
     *
     * @param mixed  $value Meta value
     * @param string $key   Meta key
     * @param int    $from  Id of the source
     * @param int    $to    Id of the target
     * @param string $lang  Language of target
     * @return mixed
     */
    protected function maybe_translate_value($value, $key, $from, $to, $lang)
    {
    }
    /**
     * Get the custom fields to copy or synchronize.
     *
     * @since 2.3
     *
     * @param int    $from Id of the post from which we copy informations.
     * @param int    $to   Id of the post to which we paste informations.
     * @param string $lang Language slug.
     * @param bool   $sync True if it is synchronization, false if it is a copy.
     * @return string[] List of meta keys.
     */
    protected function get_metas_to_copy($from, $to, $lang, $sync = \false)
    {
    }
    /**
     * Disallow modifying synchronized meta if the current user can not modify translations
     *
     * @since 2.6
     *
     * @param null|bool $check    Whether to allow adding/updating/deleting metadata.
     * @param int       $id       Object ID.
     * @param string    $meta_key Meta key.
     * @return null|bool
     */
    public function can_synchronize_metadata($check, $id, $meta_key)
    {
    }
    /**
     * Synchronize added metas across translations
     *
     * @since 2.3
     *
     * @param int    $mid        Meta id.
     * @param int    $id         Object ID.
     * @param string $meta_key   Meta key.
     * @param mixed  $meta_value Meta value. Must be serializable if non-scalar.
     * @return void
     */
    public function add_meta($mid, $id, $meta_key, $meta_value)
    {
    }
    /**
     * Stores the previous value when updating metas
     *
     * @since 2.3
     *
     * @param null|bool $r          Not used
     * @param int       $id         Object ID.
     * @param string    $meta_key   Meta key.
     * @param mixed     $meta_value Meta value. Must be serializable if non-scalar.
     * @param mixed     $prev_value If specified, only update existing metadata entries with the specified value.
     * @return null|bool Unchanged
     */
    public function update_metadata($r, $id, $meta_key, $meta_value, $prev_value)
    {
    }
    /**
     * Synchronize updated metas across translations
     *
     * @since 2.3
     *
     * @param int    $mid        Meta id.
     * @param int    $id         Object ID.
     * @param string $meta_key   Meta key.
     * @param mixed  $meta_value Meta value. Must be serializable if non-scalar.
     * @return void
     */
    public function update_meta($mid, $id, $meta_key, $meta_value)
    {
    }
    /**
     * Store metas to synchronize before deleting them.
     *
     * @since 2.3
     *
     * @param int[] $mids  Not used.
     * @param int   $id    Object ID.
     * @return void
     */
    public function store_metas_to_sync($mids, $id)
    {
    }
    /**
     * Synchronizes deleted meta across translations.
     *
     * @since 2.3
     *
     * @param int[]  $mids  Not used.
     * @param int    $id    Object ID.
     * @param string $key   Meta key.
     * @param mixed  $value Meta value.
     * @return void
     */
    public function delete_meta($mids, $id, $key, $value)
    {
    }
    /**
     * Copy or synchronize metas
     *
     * @since 2.3
     *
     * @param int    $from Id of the source object
     * @param int    $to   Id of the target object
     * @param string $lang Language code of the target object
     * @param bool   $sync Optional, defaults to true. True if it is synchronization, false if it is a copy
     * @return void
     */
    public function copy($from, $to, $lang, $sync = \false)
    {
    }
    /**
     * If synchronized custom fields were previously not synchronized, it is expected
     * that saving a post (or term) will synchronize them.
     *
     * @since 2.3
     *
     * @param int    $object_id    Id of the object being saved.
     * @param object $obj          Not used.
     * @param int[]  $translations The list of translations object ids.
     * @return void
     */
    public function save_object($object_id, $obj, $translations)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to manage copy and synchronization of post metas
 *
 * @since 2.3
 */
class PLL_Sync_Post_Metas extends \PLL_Sync_Metas
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * Constructor
     *
     * @since 2.3
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Get the custom fields to copy or synchronize.
     *
     * @since 2.3
     *
     * @param int    $from Id of the post from which we copy informations.
     * @param int    $to   Id of the post to which we paste informations.
     * @param string $lang Language slug.
     * @param bool   $sync True if it is synchronization, false if it is a copy.
     * @return string[] List of meta keys.
     */
    protected function get_metas_to_copy($from, $to, $lang, $sync = \false)
    {
    }
    /**
     * Translates the thumbnail id
     *
     * @since 2.3
     *
     * @param int    $value Thumbnail id
     * @param string $key   Meta key
     * @param string $lang  Language code
     * @return int
     */
    public function translate_thumbnail_id($value, $key, $lang)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to manage the sychronization of taxonomy terms across posts translations
 *
 * @since 2.3
 */
class PLL_Sync_Tax
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    protected $options;
    /**
     * @var PLL_Model
     */
    protected $model;
    /**
     * Constructor
     *
     * @since 2.3
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Get the list of taxonomies to copy or to synchronize.
     *
     * @since 1.7
     * @since 2.1 The `$from`, `$to`, `$lang` parameters were added.
     * @since 3.2 Changed visibility from protected to public.
     *
     * @param bool   $sync True if it is synchronization, false if it is a copy.
     * @param int    $from Id of the post from which we copy informations, optional, defaults to null.
     * @param int    $to   Id of the post to which we paste informations, optional, defaults to null.
     * @param string $lang Language slug, optional, defaults to null.
     * @return string[] List of taxonomy names.
     */
    public function get_taxonomies_to_copy($sync, $from = \null, $to = \null, $lang = \null)
    {
    }
    /**
     * When copying or synchronizing terms, translate terms in translatable taxonomies
     *
     * @since 2.3
     *
     * @param int    $object_id Object ID.
     * @param int[]  $terms     List of terms ids assigned to the source post.
     * @param string $taxonomy  Taxonomy name.
     * @param string $lang      Language slug.
     * @return int[] List of terms ids to assign to the target post.
     */
    protected function maybe_translate_terms($object_id, $terms, $taxonomy, $lang)
    {
    }
    /**
     * Maybe copy taxonomy terms from one post to the other.
     *
     * @since 2.6
     *
     * @param int    $object_id Source object ID.
     * @param int    $tr_id     Target object ID.
     * @param string $lang      Target language.
     * @param array  $terms     An array of object terms.
     * @param string $taxonomy  Taxonomy slug.
     * @param bool   $append    Whether to append new terms to the old terms.
     * @return void
     */
    protected function copy_object_terms($object_id, $tr_id, $lang, $terms, $taxonomy, $append)
    {
    }
    /**
     * When assigning terms to a post, assign translated terms to the translated posts (synchronisation).
     *
     * @since 2.3
     *
     * @param int    $object_id Object ID.
     * @param array  $terms     An array of object terms.
     * @param int[]  $tt_ids    An array of term taxonomy IDs.
     * @param string $taxonomy  Taxonomy slug.
     * @param bool   $append    Whether to append new terms to the old terms.
     * @return void
     */
    public function set_object_terms($object_id, $terms, $tt_ids, $taxonomy, $append)
    {
    }
    /**
     * Copy terms fron one post to a translation, does not sync
     *
     * @since 2.3
     *
     * @param int    $from  Id of the source post
     * @param int    $to    Id of the target post
     * @param string $lang  Language slug
     * @return void
     */
    public function copy($from, $to, $lang)
    {
    }
    /**
     * When creating a new term, associate it to posts having translations associated to the translated terms.
     *
     * @since 2.3
     *
     * @param int    $term_id      Id of the created term.
     * @param string $taxonomy     Taxonomy.
     * @param int[]  $translations Ids of the translations of the created term.
     * @return void
     */
    public function create_term($term_id, $taxonomy, $translations)
    {
    }
    /**
     * Deactivate the synchronization of terms before deleting a term
     * to avoid translated terms to be removed from translated posts
     *
     * @since 2.3.2
     *
     * @return void
     */
    public function pre_delete_term()
    {
    }
    /**
     * Re-activate the synchronization of terms after a term is deleted
     *
     * @since 2.3.2
     *
     * @return void
     */
    public function delete_term()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to manage copy and synchronization of term metas
 *
 * @since 2.3
 */
class PLL_Sync_Term_Metas extends \PLL_Sync_Metas
{
    /**
     * Constructor
     *
     * @since 2.3
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Main class for Polylang wizard.
 *
 * @since 2.7
 */
class PLL_Wizard
{
    /**
     * Reference to the model object
     *
     * @var PLL_Admin_Model
     */
    protected $model;
    /**
     * Reference to the Polylang options array.
     *
     * @var array
     */
    protected $options;
    /**
     * List of steps.
     *
     * @var array $steps {
     *     @type string   $name    I18n string which names the step.
     *     @type callable $view    The callback function use to display the step content.
     *     @type callable $handler The callback function use to process the step after it is submitted.
     *     @type array    $scripts List of scripts handle needed by the step.
     *     @type array    $styles  The list of styles handle needed by the step.
     * }
     */
    protected $steps = array();
    /**
     * The current step.
     *
     * @var string|null
     */
    protected $step;
    /**
     * List of WordPress CSS file handles.
     *
     * @var string[]
     */
    protected $styles = array();
    /**
     * Constructor
     *
     * @param object $polylang Reference to Polylang global object.
     * @since 2.7
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Save an activation transient when Polylang is activating to redirect to the wizard
     *
     * @since 2.7
     *
     * @param bool $network_wide if activated for all sites in the network.
     * @return void
     */
    public static function start_wizard($network_wide)
    {
    }
    /**
     * Redirect to the wizard depending on the context
     *
     * @since 2.7
     *
     * @return void
     */
    public function redirect_to_wizard()
    {
    }
    /**
     * Add an admin Polylang submenu to access the wizard
     *
     * @since 2.7
     *
     * @param string[] $tabs Submenus list.
     * @return string[] Submenus list updated.
     */
    public function settings_tabs($tabs)
    {
    }
    /**
     * Returns true if the media step is displayable, false otherwise.
     *
     * @since 2.7
     *
     * @param PLL_Language[] $languages List of language objects.
     * @return bool
     */
    public function is_media_step_displayable($languages)
    {
    }
    /**
     * Check if the licenses step is displayable
     *
     * @since 2.7
     *
     * @return bool
     */
    public function is_licenses_step_displayable()
    {
    }
    /**
     * Setup the wizard page
     *
     * @since 2.7
     *
     * @return void
     */
    public function setup_wizard_page()
    {
    }
    /**
     * Adds some admin screens where to display the wizard notice
     *
     * @since 2.7
     *
     * @param bool   $can_display_notice Whether the notice can be displayed.
     * @param string $notice             The notice name.
     * @return bool
     */
    public function can_display_notice($can_display_notice, $notice)
    {
    }
    /**
     * Return html code of the wizard notice
     *
     * @since 2.7
     *
     * @return string
     */
    public function wizard_notice()
    {
    }
    /**
     * Display the wizard page
     *
     * @since 2.7
     *
     * @return void
     */
    public function display_wizard_page()
    {
    }
    /**
     * Enqueue scripts and styles for the wizard
     *
     * @since 2.7
     *
     * @return void
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Get the suffix to enqueue non minified files in a Debug context
     *
     * @since 2.7
     *
     * @return string Empty when SCRIPT_DEBUG equal to true
     *                otherwise .min
     */
    public function get_suffix()
    {
    }
    /**
     * Get the URL for the step's screen.
     *
     * @since 2.7
     *
     * @param string $step  slug (default: current step).
     * @return string       URL for the step if it exists.
     *                      Empty string on failure.
     */
    public function get_step_link($step = '')
    {
    }
    /**
     * Get the URL for the next step's screen.
     *
     * @since 2.7
     *
     * @param string $step  slug (default: current step).
     * @return string       URL for next step if a next step exists.
     *                      Admin URL if it's the last step.
     *                      Empty string on failure.
     */
    public function get_next_step_link($step = '')
    {
    }
    /**
     * Add licenses step to the wizard
     *
     * @since 2.7
     *
     * @param array $steps List of steps.
     * @return array List of steps updated.
     */
    public function add_step_licenses($steps)
    {
    }
    /**
     * Display the languages step form
     *
     * @since 2.7
     *
     * @return void
     */
    public function display_step_licenses()
    {
    }
    /**
     * Execute the languages step
     *
     * @since 2.7
     *
     * @return void
     */
    public function save_step_licenses()
    {
    }
    /**
     * Ajax method to deactivate a license
     *
     * @since 2.7
     *
     * @return void
     */
    public function deactivate_license()
    {
    }
    /**
     * Add languages step to the wizard
     *
     * @since 2.7
     *
     * @param array $steps List of steps.
     * @return array List of steps updated.
     */
    public function add_step_languages($steps)
    {
    }
    /**
     * Display the languages step form
     *
     * @since 2.7
     *
     * @return void
     */
    public function display_step_languages()
    {
    }
    /**
     * Execute the languages step
     *
     * @since 2.7
     *
     * @return void
     */
    public function save_step_languages()
    {
    }
    /**
     * Add the media step to the wizard.
     *
     * @since 2.7
     *
     * @param array $steps List of steps.
     * @return array List of steps updated.
     */
    public function add_step_media($steps)
    {
    }
    /**
     * Display the media step form
     *
     * @since 2.7
     *
     * @return void
     */
    public function display_step_media()
    {
    }
    /**
     * Execute the media step
     *
     * @since 2.7
     *
     * @return void
     */
    public function save_step_media()
    {
    }
    /**
     * Add untranslated contents step to the wizard
     *
     * @since 2.7
     *
     * @param array $steps List of steps.
     * @return array List of steps updated.
     */
    public function add_step_untranslated_contents($steps)
    {
    }
    /**
     * Display the untranslated contents step form
     *
     * @since 2.7
     *
     * @return void
     */
    public function display_step_untranslated_contents()
    {
    }
    /**
     * Execute the untranslated contents step
     *
     * @since 2.7
     *
     * @return void
     */
    public function save_step_untranslated_contents()
    {
    }
    /**
     * Add home page step to the wizard
     *
     * @since 2.7
     *
     * @param array $steps List of steps.
     * @return array List of steps updated.
     */
    public function add_step_home_page($steps)
    {
    }
    /**
     * Display the home page step form
     *
     * @since 2.7
     *
     * @return void
     */
    public function display_step_home_page()
    {
    }
    /**
     * Execute the home page step
     *
     * @since 2.7
     *
     * @return void
     */
    public function save_step_home_page()
    {
    }
    /**
     * Create home page translations for each language defined.
     *
     * @since 2.7
     *
     * @param string   $default_language       Slug of the default language; null if no default language is defined.
     * @param int      $home_page              Post ID of the home page if it's defined, false otherwise.
     * @param string   $home_page_title        Home page title if it's defined, 'Homepage' otherwise.
     * @param string   $home_page_language     Slug of the home page if it's defined, false otherwise.
     * @param string[] $untranslated_languages Array of languages which needs to have a home page translated.
     * @return void
     */
    public function create_home_page_translations($default_language, $home_page, $home_page_title, $home_page_language, $untranslated_languages)
    {
    }
    /**
     * Add last step to the wizard
     *
     * @since 2.7
     *
     * @param array $steps List of steps.
     * @return array List of steps updated.
     */
    public function add_step_last($steps)
    {
    }
    /**
     * Display the last step form
     *
     * @since 2.7
     *
     * @return void
     */
    public function display_step_last()
    {
    }
    /**
     * Execute the last step
     *
     * @since 2.7
     *
     * @return void
     */
    public function save_step_last()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to handle the WPML API based on hooks, introduced since WPML 3.2.
 * It partly relies on the legacy API.
 *
 * @see https://wpml.org/documentation/support/wpml-coding-api/wpml-hooks-reference/
 *
 * @since 2.0
 */
class PLL_WPML_API
{
    /**
     * Constructor.
     *
     * @since 2.0
     */
    public function __construct()
    {
    }
    /**
     * Get a list of the languages enabled for a site.
     *
     * @since 2.0
     *
     * @param mixed         $null Not used.
     * @param array| string $args See arguments of icl_get_languages().
     * @return array Array of arrays per language.
     */
    public function wpml_active_languages($null, $args = '')
    {
    }
    /**
     * In WPML, get a language's native and translated name for display in a custom language switcher
     * Since Polylang does not implement the translated name, always returns only the native name,
     * so the 3rd, 4th and 5th parameters are not used.
     *
     * @since 2.2
     *
     * @param mixed  $null        Not used.
     * @param string $native_name The language native name.
     * @return string
     */
    public function wpml_display_language_names($null, $native_name)
    {
    }
    /**
     * Returns an HTML hidden input field with name=”lang” and as value the current language.
     *
     * @since 2.0
     *
     * @return void
     */
    public function wpml_add_language_form_field()
    {
    }
    /**
     * Find out if a specific language is enabled for the site.
     *
     * @since 2.0
     *
     * @param mixed  $null Not used.
     * @param string $slug Language code.
     * @return bool
     */
    public function wpml_language_is_active($null, $slug)
    {
    }
    /**
     * Find out whether the current language text direction is RTL or not.
     *
     * @since 2.0
     *
     * @return bool
     */
    public function wpml_is_rtl()
    {
    }
    /**
     * Returns the id of the translation group of a translated element.
     *
     * @since 3.4
     *
     * @param mixed  $empty_value  Not used.
     * @param int    $element_id   The id of the item, post id for posts, term_taxonomy_id for terms.
     * @param string $element_type Optional. The type of an element.
     * @return int
     */
    public function wpml_element_trid($empty_value, $element_id, $element_type = 'post_post')
    {
    }
    /**
     * Returns the element translations info using the ID of the translation group.
     *
     * @since 3.4
     *
     * @param mixed  $empty_value  Not used.
     * @param int    $trid         The ID of the translation group.
     * @param string $element_type Optional. The type of an element.
     * @return stdClass[]
     */
    public function wpml_get_element_translations($empty_value, $trid, $element_type = 'post_post')
    {
    }
    /**
     * Switches whole site to the given language or restores the language that was set when first calling this function.
     * Unlike the WPML original action, it is not possible to set the current language and the cookie to different values.
     *
     * @since 2.7
     *
     * @param null|string $lang   Language code to switch into, restores the original language if null.
     * @param bool|string $cookie Optionally also switches the cookie.
     * @return void
     */
    public static function wpml_switch_language($lang = \null, $cookie = \false)
    {
    }
    /**
     * Get the language code for a translatable element.
     *
     * @since 2.0
     *
     * @param mixed $language_code A 2-letter language code.
     * @param array $args          An array with two keys element_id => post_id or term_taxonomy_id, element_type => post type or taxonomy
     * @return string|null
     */
    public function wpml_element_language_code($language_code, $args)
    {
    }
    /**
     * Translates a string.
     *
     * @since 2.0
     *
     * @param string      $string  The string's original value.
     * @param string      $context The string's registered context.
     * @param string      $name    The string's registered name.
     * @param null|string $lang    Optional, return the translation in this language, defaults to current language.
     * @return string The translated string.
     */
    public function wpml_translate_single_string($string, $context, $name, $lang = \null)
    {
    }
    /**
     * Converts a permalink to a language specific permalink.
     *
     * @since 2.2
     *
     * @param string      $url  The url to filter.
     * @param null|string $lang Langage code, optional, defaults to the current language.
     * @return string
     */
    public function wpml_permalink($url, $lang = '')
    {
    }
    /**
     * Translates a post type slug.
     *
     * @since 2.2
     *
     * @param string $slug      Post type slug.
     * @param string $post_type Post type name.
     * @param string $lang      Optional language code (defaults to current language).
     * @return string
     */
    public function wpml_get_translated_slug($slug, $post_type, $lang = \null)
    {
    }
    /**
     * Find out whether a post type or a taxonomy term is translated.
     *
     * @since 2.0
     *
     * @param mixed  $null Not used.
     * @param int    $id   The post_id or term_id.
     * @param string $type The post type or taxonomy.
     * @return bool
     */
    public function wpml_element_has_translations($null, $id, $type)
    {
    }
    /**
     * Returns true if languages and translations are managed for this post type.
     *
     * @since 3.4
     *
     * @param mixed  $value     Not used.
     * @param string $post_type The post type name.
     * @return bool
     */
    public function wpml_is_translated_post_type($value, $post_type)
    {
    }
    /**
     * Returns true if languages and translations are managed for this taxonomy.
     *
     * @since 3.4
     *
     * @param mixed  $value    Not used.
     * @param string $taxonomy The taxonomy name.
     * @return bool
     */
    public function wpml_is_translated_taxonomy($value, $taxonomy)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * WPML Compatibility class
 * Defines some WPML constants
 * Registers strings in a persistent way as done by WPML
 *
 * @since 1.0.2
 */
class PLL_WPML_Compat
{
    /**
     * Singleton instance
     *
     * @var PLL_WPML_Compat|null
     */
    protected static $instance;
    /**
     * Stores the strings registered with the WPML API.
     *
     * @var array
     */
    protected static $strings = array();
    /**
     * @var PLL_WPML_API
     */
    public $api;
    /**
     * Constructor
     *
     * @since 1.0.2
     */
    protected function __construct()
    {
    }
    /**
     * Access to the single instance of the class
     *
     * @since 1.7
     *
     * @return PLL_WPML_Compat
     */
    public static function instance()
    {
    }
    /**
     * Defines two WPML constants once the language has been defined
     * The compatibility with WPML is not perfect on admin side as the constants are defined
     * in 'setup_theme' by Polylang ( based on user info ) and 'plugins_loaded' by WPML ( based on cookie )
     *
     * @since 0.9.5
     *
     * @return void
     */
    public function define_constants()
    {
    }
    /**
     * Unlike pll_register_string, icl_register_string stores the string in database
     * so we need to do the same as some plugins or themes may expect this
     * we use a serialized option to do this
     *
     * @since 1.0.2
     *
     * @param string $context The group in which the string is registered.
     * @param string $name    A unique name for the string.
     * @param string $string  The string to register.
     * @return void
     */
    public function register_string($context, $name, $string)
    {
    }
    /**
     * Removes a string from the registered strings list
     *
     * @since 1.0.2
     *
     * @param string $context The group in which the string is registered.
     * @param string $name    A unique name for the string.
     * @return void
     */
    public function unregister_string($context, $name)
    {
    }
    /**
     * Adds strings registered by icl_register_string to those registered by pll_register_string
     *
     * @since 1.0.2
     *
     * @param array $strings existing registered strings
     * @return array registered strings with added strings through WPML API
     */
    public function get_strings($strings)
    {
    }
    /**
     * Get a registered string by its context and name
     *
     * @since 2.0
     *
     * @param string $context The group in which the string is registered.
     * @param string $name    A unique name for the string.
     * @return bool|string The registered string, false if none was found.
     */
    public function get_string_by_context_and_name($context, $name)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Reads and interprets the file wpml-config.xml
 * See http://wpml.org/documentation/support/language-configuration-files/
 * The language switcher configuration is not interpreted
 *
 * @since 1.0
 */
class PLL_WPML_Config
{
    /**
     * Singleton instance
     *
     * @var PLL_WPML_Config|null
     */
    protected static $instance;
    /**
     * The content of all read xml files.
     *
     * @var SimpleXMLElement[]
     */
    protected $xmls = array();
    /**
     * The list of xml file paths.
     *
     * @var string[]|null
     *
     * @phpstan-var array<string, string>|null
     */
    protected $files;
    /**
     * List of rules to extract strings to translate from blocks.
     *
     * @var string[][][]|null
     */
    protected $parsing_rules = \null;
    /**
     * Constructor
     *
     * @since 1.0
     */
    public function __construct()
    {
    }
    /**
     * Access to the single instance of the class
     *
     * @since 1.7
     *
     * @return PLL_WPML_Config
     */
    public static function instance()
    {
    }
    /**
     * Finds the wpml-config.xml files to parse and setup filters
     *
     * @since 1.0
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Returns all wpml-config.xml files in MU plugins, plugins, theme, child theme, and Polylang custom directory.
     *
     * @since 3.1
     *
     * @return string[] A context identifier as array key, a file path as array value.
     *
     * @phpstan-return array<string, string>
     */
    public function get_files()
    {
    }
    /**
     * Adds custom fields to the list of metas to copy when creating a new translation.
     *
     * @since 1.0
     *
     * @param string[] $metas The list of custom fields to copy or synchronize.
     * @param bool     $sync  True for sync, false for copy.
     * @return string[] The list of custom fields to copy or synchronize.
     */
    public function copy_post_metas($metas, $sync)
    {
    }
    /**
     * Adds term metas to the list of metas to copy when creating a new translation.
     *
     * @since 2.6
     *
     * @param string[] $metas The list of term metas to copy or synchronize.
     * @param bool     $sync  True for sync, false for copy.
     * @return string[] The list of term metas to copy or synchronize.
     */
    public function copy_term_metas($metas, $sync)
    {
    }
    /**
     * Adds post meta keys to export.
     *
     * @since 3.3
     * @see   PLL_Export_Metas
     *
     * @param  array $keys {
     *     A recursive array containing nested meta sub-keys to translate.
     *     Ex: array(
     *      'meta_to_translate_1' => 1,
     *      'meta_to_translate_2' => 1,
     *      'meta_to_translate_3' => array(
     *        'sub_key_to_translate_1' => 1,
     *        'sub_key_to_translate_2' => array(
     *             'sub_sub_key_to_translate_1' => 1,
     *         ),
     *      ),
     *    )
     * }
     * @return array
     *
     * @phpstan-param array<string, mixed> $keys
     * @phpstan-return array<string, mixed>
     */
    public function post_metas_to_export($keys)
    {
    }
    /**
     * Adds term meta keys to export.
     * Note: sub-key translations are not currently supported by WPML.
     *
     * @since 3.3
     * @see   PLL_Export_Metas
     *
     * @param  array $keys {
     *     An array containing meta keys to translate.
     *     Ex: array(
     *      'meta_to_translate_1' => 1,
     *      'meta_to_translate_2' => 1,
     *      'meta_to_translate_3' => 1,
     *    )
     * }
     * @return array
     *
     * @phpstan-param array<string, mixed> $keys
     * @phpstan-return array<string, mixed>
     */
    public function term_metas_to_export($keys)
    {
    }
    /**
     * Language and translation management for custom post types.
     *
     * @since 1.0
     *
     * @param string[] $types The list of post type names for which Polylang manages language and translations.
     * @param bool     $hide  True when displaying the list in Polylang settings.
     * @return string[] The list of post type names for which Polylang manages language and translations.
     */
    public function translate_types($types, $hide)
    {
    }
    /**
     * Language and translation management for custom taxonomies.
     *
     * @since 1.0
     *
     * @param string[] $taxonomies The list of taxonomy names for which Polylang manages language and translations.
     * @param bool     $hide       True when displaying the list in Polylang settings.
     * @return string[] The list of taxonomy names for which Polylang manages language and translations.
     */
    public function translate_taxonomies($taxonomies, $hide)
    {
    }
    /**
     * Translation management for strings in blocks content.
     *
     * @since 3.3
     *
     * @param string[][] $parsing_rules Rules as Xpath expressions to evaluate in the blocks content.
     * @return string[][] Rules completed with ones from wpml-config file.
     *
     * @phpstan-param array<string,array<string>> $parsing_rules
     * @phpstan-return array<string,array<string>>
     */
    public function translate_blocks($parsing_rules)
    {
    }
    /**
     * Translation management for blocks attributes.
     *
     * @since 3.3
     *
     * @param string[][] $parsing_rules Rules for blocks attributes to translate.
     * @return string[][] Rules completed with ones from wpml-config file.
     *
     * @phpstan-param array<string,array<string>> $parsing_rules
     * @phpstan-return array<string,array<string>>
     */
    public function translate_blocks_attributes($parsing_rules)
    {
    }
    /**
     * Returns rules to extract translatable strings from blocks.
     *
     * @since 3.3
     *
     * @param string $rule_tag Tag name to extract.
     * @return string[][] The rules.
     */
    protected function get_blocks_parsing_rules($rule_tag)
    {
    }
    /**
     * Extract all rules from WPML config file to translate strings for blocks.
     *
     * @since 3.3
     *
     * @return string[][][] Rules completed with ones from wpml-config file.
     */
    protected function extract_blocks_parsing_rules()
    {
    }
    /**
     * Registers or translates the strings for an option
     *
     * @since 2.8
     *
     * @param string           $context The group in which the strings will be registered.
     * @param string           $name    Option name.
     * @param SimpleXMLElement $key     XML node.
     * @return void
     */
    protected function register_or_translate_option($context, $name, $key)
    {
    }
    /**
     * Recursively transforms xml nodes to an array, ready for PLL_Translate_Option.
     *
     * @since 2.9
     * @since 3.3 Type-hinted the parameters `$key` and `$arr`.
     * @since 3.3 `$arr` is not passed by reference anymore.
     * @since 3.3 Added the parameter `$fill_value`.
     *
     * @param SimpleXMLElement $key        XML node.
     * @param array            $arr        Array of option keys to translate.
     * @param mixed            $fill_value Value to use when filling entries. Default is true.
     * @return array
     */
    protected function xml_to_array(\SimpleXMLElement $key, array $arr = array(), $fill_value = \true)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Settings class for browser language preference detection
 *
 * @since 1.8
 */
class PLL_Settings_Browser extends \PLL_Settings_Module
{
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 20;
    /**
     * Constructor
     *
     * @since 1.8
     *
     * @param object $polylang polylang object
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Tells if the option is available
     *
     * @since 2.0
     *
     * @return bool
     */
    protected function is_available()
    {
    }
    /**
     * Tells if the module is active
     *
     * @since 1.8
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Displays the javascript to handle dynamically the change in url modifications
     * as the preferred browser language is not used when the language is set from different domains
     *
     * @since 1.8
     *
     * @return void
     */
    public function print_js()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Settings class for custom post types and taxonomies language and translation management
 *
 * @since 1.8
 */
class PLL_Settings_CPT extends \PLL_Settings_Module
{
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 40;
    /**
     * Constructor
     *
     * @since 1.8
     *
     * @param object $polylang polylang object
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Tells if the module is active
     *
     * @since 1.8
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Displays the settings form
     *
     * @since 1.8
     */
    protected function form()
    {
    }
    /**
     * Sanitizes the settings before saving
     *
     * @since 1.8
     *
     * @param array $options
     */
    protected function update($options)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Settings class for licenses
 *
 * @since 1.9
 */
class PLL_Settings_Licenses extends \PLL_Settings_Module
{
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 100;
    /**
     * Stores an array of objects allowing to manage a license.
     *
     * @var PLL_License[]
     */
    protected $items;
    /**
     * Constructor
     *
     * @since 1.9
     *
     * @param object $polylang polylang object
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Tells if the module is active
     *
     * @since 1.9
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Displays the settings form
     *
     * @since 1.9
     */
    protected function form()
    {
    }
    /**
     * Get the html for a row (one per license key) for display.
     *
     * @since 1.9
     *
     * @param PLL_License $item Object allowing to manage a license.
     * @return string
     */
    protected function get_row($item)
    {
    }
    /**
     * Ajax method to save the license keys and activate the licenses at the same time
     * Overrides parent's method
     *
     * @since 1.9
     */
    public function save_options()
    {
    }
    /**
     * Ajax method to deactivate a license
     *
     * @since 1.9
     *
     * @return void
     */
    public function deactivate_license()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Settings class for media language and translation management
 *
 * @since 1.8
 */
class PLL_Settings_Media extends \PLL_Settings_Module
{
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 30;
    /**
     * Constructor
     *
     * @since 1.8
     *
     * @param object $polylang polylang object
     */
    public function __construct(&$polylang)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to manage URL modifications settings
 *
 * @since 1.8
 */
class PLL_Settings_Url extends \PLL_Settings_Module
{
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 10;
    /**
     * The page id of the static front page.
     *
     * @var int|null
     */
    protected $page_on_front;
    /**
     * Constructor
     *
     * @since 1.8
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Displays the fieldset to choose how the language is set
     *
     * @since 1.8
     *
     * @return void
     */
    protected function force_lang()
    {
    }
    /**
     * Displays the fieldset to choose to hide the default language information in url
     *
     * @since 1.8
     *
     * @return void
     */
    protected function hide_default()
    {
    }
    /**
     * Displays the fieldset to choose to hide /language/ in url
     *
     * @since 1.8
     *
     * @return void
     */
    protected function rewrite()
    {
    }
    /**
     * Displays the fieldset to choose to redirect the home page to language page
     *
     * @since 1.8
     *
     * @return void
     */
    protected function redirect_lang()
    {
    }
    /**
     * Displays the settings
     *
     * @since 1.8
     *
     * @return void
     */
    public function form()
    {
    }
    /**
     * Sanitizes the settings before saving
     *
     * @since 1.8
     *
     * @param array $options
     * @return array
     */
    protected function update($options)
    {
    }
    /**
     * Check if subdomains or domains are accessible
     *
     * @since 1.8
     *
     * @param array $options new set of options to test
     * @return void
     */
    protected function check_domains($options)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class for the Polylang settings pages, accessible from @see PLL().
 *
 * @since 1.2
 */
class PLL_Settings extends \PLL_Admin_Base
{
    /**
     * @var PLL_Admin_Model
     */
    public $model;
    /**
     * Name of the active module.
     *
     * @var string|null
     */
    protected $active_tab;
    /**
     * Array of modules classes.
     *
     * @var PLL_Settings_Module[]|null
     */
    protected $modules;
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param PLL_Links_Model $links_model Reference to the links model.
     */
    public function __construct(&$links_model)
    {
    }
    /**
     * Initializes the modules
     *
     * @since 1.8
     *
     * @return void
     */
    public function register_settings_modules()
    {
    }
    /**
     * Loads the about metabox
     *
     * @since 0.8
     *
     * @return void
     */
    public function metabox_about()
    {
    }
    /**
     * Adds screen options and the about box in the languages admin panel
     *
     * @since 0.9.5
     *
     * @return void
     */
    public function load_page()
    {
    }
    /**
     * Adds screen options in the strings translations admin panel
     *
     * @since 2.1
     *
     * @return void
     */
    public function load_page_strings()
    {
    }
    /**
     * Save the "Views/Uploads per page" option set by this user
     *
     * @since 0.9.5
     *
     * @param mixed  $status false or value returned by previous filter
     * @param string $option Name of the option being changed
     * @param string $value  Value of the option
     *
     * @return string New value if this is our option, otherwise nothing
     */
    public function set_screen_option($status, $option, $value)
    {
    }
    /**
     * Manages the user input for the languages pages
     *
     * @since 1.9
     *
     * @param string $action
     * @return void
     */
    public function handle_actions($action)
    {
    }
    /**
     * Displays the 3 tabs pages: languages, strings translations, settings
     * Also manages user input for these pages
     *
     * @since 0.1
     *
     * @return void
     */
    public function languages_page()
    {
    }
    /**
     * Enqueues scripts and styles
     *
     * @return void
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Displays a notice when there are objects with no language assigned
     *
     * @since 1.8
     *
     * @return void
     */
    public function notice_objects_with_no_lang()
    {
    }
    /**
     * Redirects to language page ( current active tab )
     * saves error messages in a transient for reuse in redirected page
     *
     * @since 1.5
     *
     * @param array $args query arguments to add to the url
     * @return void
     */
    public static function redirect($args = array())
    {
    }
    /**
     * Get the list of predefined languages
     *
     * @since 2.3
     *
     * @return string[] {
     *   @type string $code     ISO 639-1 language code.
     *   @type string $locale   WordPress locale.
     *   @type string $name     Native language name.
     *   @type string $dir      Text direction: 'ltr' or 'rtl'.
     *   @type string $flag     Flag code, generally the country code.
     *   @type string $w3c      W3C locale.
     *   @type string $facebook Facebook locale.
     * }
     */
    public static function get_predefined_languages()
    {
    }
}
/**
 * A class to create the languages table in Polylang settings
 * Thanks to Matt Van Andel ( http://www.mattvanandel.com ) for its plugin "Custom List Table Example" !
 *
 * @since 0.1
 */
class PLL_Table_Languages extends \WP_List_Table
{
    /**
     * Constructor
     *
     * @since 0.1
     */
    public function __construct()
    {
    }
    /**
     * Generates content for a single row of the table.
     *
     * @since 1.8
     *
     * @param PLL_Language $item The language item.
     * @return void
     */
    public function single_row($item)
    {
    }
    /**
     * Displays the item information in a column ( default case ).
     *
     * @since 0.1
     *
     * @param PLL_Language $item        The language item.
     * @param string       $column_name The column name.
     * @return string|int
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Displays the item information in the column 'name'
     * Displays the edit and delete action links
     *
     * @since 0.1
     *
     * @param PLL_Language $item The language item.
     * @return string
     */
    public function column_name($item)
    {
    }
    /**
     * Displays the item information in the default language
     * Displays the 'make default' action link
     *
     * @since 1.8
     *
     * @param PLL_Language $item The language item.
     * @return string
     */
    public function column_default_lang($item)
    {
    }
    /**
     * Gets the list of columns
     *
     * @since 0.1
     *
     * @return string[] The list of column titles.
     */
    public function get_columns()
    {
    }
    /**
     * Gets the list of sortable columns
     *
     * @since 0.1
     *
     * @return array
     */
    public function get_sortable_columns()
    {
    }
    /**
     * Gets the name of the default primary column.
     *
     * @since 2.1
     *
     * @return string Name of the default primary column, in this case, 'name'.
     */
    protected function get_default_primary_column_name()
    {
    }
    /**
     * Generates and display row actions links for the list table.
     *
     * @since 1.8
     *
     * @param PLL_Language $item        The language item being acted upon.
     * @param string       $column_name Current column name.
     * @param string       $primary     Primary column name.
     * @return string The row actions output.
     */
    protected function handle_row_actions($item, $column_name, $primary)
    {
    }
    /**
     * Sorts language items.
     *
     * @since 0.1
     *
     * @param PLL_Language $a The first language to compare.
     * @param PLL_Language $b The second language to compare.
     * @return int -1 or 1 if $a is considered to be respectively less than or greater than $b.
     */
    protected function usort_reorder($a, $b)
    {
    }
    /**
     * Prepares the list of languages for display.
     *
     * @since 0.1
     *
     * @param PLL_Language[] $data The list of languages.
     * @return void
     */
    public function prepare_items($data = array())
    {
    }
}
/**
 * A class to create a table to list all settings modules
 *
 * @since 1.8
 */
class PLL_Table_Settings extends \WP_List_Table
{
    /**
     * Constructor
     *
     * @since 1.8
     */
    public function __construct()
    {
    }
    /**
     * Get the table classes for styling
     *
     * @since 1.8
     */
    protected function get_table_classes()
    {
    }
    /**
     * Displays a single row.
     *
     * @since 1.8
     *
     * @param PLL_Settings_Module $item Settings module item.
     * @return void
     */
    public function single_row($item)
    {
    }
    /**
     * Generates the columns for a single row of the table.
     *
     * @since 1.8
     *
     * @param PLL_Settings_Module $item Settings module item.
     * @return void
     */
    protected function single_row_columns($item)
    {
    }
    /**
     * Displays the item information in a column (default case).
     *
     * @since 1.8
     *
     * @param PLL_Settings_Module $item        Settings module item.
     * @param string              $column_name Column name.
     * @return string The column name.
     */
    protected function column_default($item, $column_name)
    {
    }
    /**
     * Gets the list of columns.
     *
     * @since 1.8
     *
     * @return string[] The list of column titles.
     */
    public function get_columns()
    {
    }
    /**
     * Gets the name of the primary column.
     *
     * @since 1.8
     *
     * @return string The name of the primary column.
     */
    protected function get_primary_column_name()
    {
    }
    /**
     * Prepares the list of items for displaying
     *
     * @since 1.8
     *
     * @param PLL_Settings_Module[] $items Array of settings module items.
     * @return void
     */
    public function prepare_items($items = array())
    {
    }
    /**
     * Avoids displaying an empty tablenav
     *
     * @since 2.1
     *
     * @param string $which 'top' or 'bottom'
     * @return void
     */
    protected function display_tablenav($which)
    {
    }
    // phpcs:ignore VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable
}
/**
 * A class to create the strings translations table
 * Thanks to Matt Van Andel ( http://www.mattvanandel.com ) for its plugin "Custom List Table Example" !
 *
 * @since 0.6
 */
class PLL_Table_String extends \WP_List_Table
{
    /**
     * The list of languages.
     *
     * @var PLL_Language[]
     */
    protected $languages;
    /**
     * Registered strings.
     *
     * @var array
     */
    protected $strings;
    /**
     * The string groups.
     *
     * @var string[]
     */
    protected $groups;
    /**
     * The selected string group or -1 if none is selected.
     *
     * @var string|int
     */
    protected $selected_group;
    /**
     * Constructor.
     *
     * @since 0.6
     *
     * @param PLL_Language[] $languages List of languages.
     */
    public function __construct($languages)
    {
    }
    /**
     * Displays the item information in a column ( default case )
     *
     * @since 0.6
     *
     * @param array  $item
     * @param string $column_name
     * @return string
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Displays the checkbox in first column
     *
     * @since 1.1
     *
     * @param array $item
     * @return string
     */
    public function column_cb($item)
    {
    }
    /**
     * Displays the string to translate
     *
     * @since 1.0
     *
     * @param array $item
     * @return string
     */
    public function column_string($item)
    {
    }
    /**
     * Displays the translations to edit
     *
     * @since 0.6
     *
     * @param array $item
     * @return string
     */
    public function column_translations($item)
    {
    }
    /**
     * Gets the list of columns.
     *
     * @since 0.6
     *
     * @return string[] The list of column titles.
     */
    public function get_columns()
    {
    }
    /**
     * Gets the list of sortable columns
     *
     * @since 0.6
     *
     * @return array
     */
    public function get_sortable_columns()
    {
    }
    /**
     * Gets the name of the default primary column.
     *
     * @since 2.1
     *
     * @return string Name of the default primary column, in this case, 'string'.
     */
    protected function get_default_primary_column_name()
    {
    }
    /**
     * Search for a string in translations. Case insensitive.
     *
     * @since 2.6
     *
     * @param PLL_MO[] $mos An array of PLL_MO objects.
     * @param string   $s   Searched string.
     * @return string[] Found strings.
     */
    protected function search_in_translations($mos, $s)
    {
    }
    /**
     * Sorts registered string items.
     *
     * @since 0.6
     *
     * @param array $a The first item to compare.
     * @param array $b The second item to compare.
     * @return int -1 or 1 if $a is considered to be respectively less than or greater than $b.
     */
    protected function usort_reorder($a, $b)
    {
    }
    /**
     * Prepares the list of registered strings for display.
     *
     * @since 0.6
     *
     * @return void
     */
    public function prepare_items()
    {
    }
    /**
     * Get the list of possible bulk actions.
     *
     * @since 1.1
     *
     * @return string[] Array of bulk actions.
     */
    public function get_bulk_actions()
    {
    }
    /**
     * Get the current action selected from the bulk actions dropdown.
     * overrides parent function to avoid submit button to trigger bulk actions
     *
     * @since 1.8
     *
     * @return string|false The action name or False if no action was selected
     */
    public function current_action()
    {
    }
    /**
     * Displays the dropdown list to filter strings per group
     *
     * @since 1.1
     *
     * @param string $which only 'top' is supported
     * @return void
     */
    public function extra_tablenav($which)
    {
    }
    /**
     * Saves the strings translations in DB
     * Optionaly clean the DB
     *
     * @since 1.9
     *
     * @return void
     */
    public function save_translations()
    {
    }
}
/**
 * The Polylang public API.
 *
 * @package Polylang
 */
/**
 * Template tag: displays the language switcher.
 * The function does nothing if used outside the frontend.
 *
 * @api
 * @since 0.5
 *
 * @param array $args {
 *   Optional array of arguments.
 *
 *   @type int    $dropdown               The list is displayed as dropdown if set to 1, defaults to 0.
 *   @type int    $echo                   Echoes the list if set to 1, defaults to 1.
 *   @type int    $hide_if_empty          Hides languages with no posts ( or pages ) if set to 1, defaults to 1.
 *   @type int    $show_flags             Displays flags if set to 1, defaults to 0.
 *   @type int    $show_names             Shows language names if set to 1, defaults to 1.
 *   @type string $display_names_as       Whether to display the language name or its slug, valid options are 'slug' and 'name', defaults to name.
 *   @type int    $force_home             Will always link to the homepage in the translated language if set to 1, defaults to 0.
 *   @type int    $hide_if_no_translation Hides the link if there is no translation if set to 1, defaults to 0.
 *   @type int    $hide_current           Hides the current language if set to 1, defaults to 0.
 *   @type int    $post_id                Returns links to the translations of the post defined by post_id if set, defaults to not set.
 *   @type int    $raw                    Return a raw array instead of html markup if set to 1, defaults to 0.
 *   @type string $item_spacing           Whether to preserve or discard whitespace between list items, valid options are 'preserve' and 'discard', defaults to 'preserve'.
 * }
 * @return string|array Either the html markup of the switcher or the raw elements to build a custom language switcher.
 */
function pll_the_languages($args = array())
{
}
/**
 * Returns the current language on frontend.
 * Returns the language set in admin language filter on backend (false if set to all languages).
 *
 * @api
 * @since 0.8.1
 * @since 3.4 Accepts composite values.
 *
 * @param string $field Optional, the language field to return (@see PLL_Language), defaults to `'slug'`.
 *                      Pass `\OBJECT` constant to get the language object. A composite value can be used for language
 *                      term property values, in the form of `{language_taxonomy_name}:{property_name}` (see
 *                      {@see PLL_Language::get_tax_prop()} for the possible values). Ex: `term_language:term_taxonomy_id`.
 * @return string|int|bool|string[]|PLL_Language The requested field or object for the current language, `false` if the field isn't set or if current language doesn't exist yet.
 *
 * @phpstan-return (
 *     $field is \OBJECT ? PLL_Language : (
 *         $field is 'slug' ? non-empty-string : string|int|bool|list<non-empty-string>
 *     )
 * )|false
 */
function pll_current_language($field = 'slug')
{
}
/**
 * Returns the default language.
 *
 * @api
 * @since 1.0
 * @since 3.4 Accepts composite values.
 *
 * @param string $field Optional, the language field to return (@see PLL_Language), defaults to `'slug'`.
 *                      Pass `\OBJECT` constant to get the language object. A composite value can be used for language
 *                      term property values, in the form of `{language_taxonomy_name}:{property_name}` (see
 *                      {@see PLL_Language::get_tax_prop()} for the possible values). Ex: `term_language:term_taxonomy_id`.
 * @return string|int|bool|string[]|PLL_Language The requested field or object for the default language, `false` if the field isn't set or if default language doesn't exist yet.
 *
 * @phpstan-return (
 *     $field is \OBJECT ? PLL_Language : (
 *         $field is 'slug' ? non-empty-string : string|int|bool|list<non-empty-string>
 *     )
 * )|false
 */
function pll_default_language($field = 'slug')
{
}
/**
 * Among the post and its translations, returns the ID of the post which is in the language represented by $lang.
 *
 * @api
 * @since 0.5
 * @since 3.4 Returns 0 instead of false.
 * @since 3.4 $lang accepts PLL_Language or string.
 *
 * @param int                 $post_id Post ID.
 * @param PLL_Language|string $lang    Optional language (object or slug), defaults to the current language.
 * @return int|false The translation post ID if exists, otherwise the passed ID. False if the passed object has no language or if the language doesn't exist.
 *
 * @phpstan-return int<0, max>|false
 */
function pll_get_post($post_id, $lang = '')
{
}
/**
 * Among the term and its translations, returns the ID of the term which is in the language represented by $lang.
 *
 * @api
 * @since 0.5
 * @since 3.4 Returns 0 instead of false.
 * @since 3.4 $lang accepts PLL_Language or string.
 *
 * @param int                 $term_id Term ID.
 * @param PLL_Language|string $lang    Optional language (object or slug), defaults to the current language.
 * @return int|false The translation term ID if exists, otherwise the passed ID. False if the passed object has no language or if the language doesn't exist.
 *
 * @phpstan-return int<0, max>|false
 */
function pll_get_term($term_id, $lang = \null)
{
}
/**
 * Returns the home url in a language.
 *
 * @api
 * @since 0.8
 *
 * @param string $lang Optional language code, defaults to the current language.
 * @return string
 */
function pll_home_url($lang = '')
{
}
/**
 * Registers a string for translation in the "strings translation" panel.
 *
 * @api
 * @since 0.6
 *
 * @param string $name      A unique name for the string.
 * @param string $string    The string to register.
 * @param string $context   Optional, the group in which the string is registered, defaults to 'polylang'.
 * @param bool   $multiline Optional, true if the string table should display a multiline textarea,
 *                          false if should display a single line input, defaults to false.
 * @return void
 */
function pll_register_string($name, $string, $context = 'Polylang', $multiline = \false)
{
}
/**
 * Translates a string ( previously registered with pll_register_string ).
 *
 * @api
 * @since 0.6
 *
 * @param string $string The string to translate.
 * @return string The string translated in the current language.
 */
function pll__($string)
{
}
/**
 * Translates a string ( previously registered with pll_register_string ) and escapes it for safe use in HTML output.
 *
 * @api
 * @since 2.1
 *
 * @param string $string The string to translate.
 * @return string The string translated in the current language.
 */
function pll_esc_html__($string)
{
}
/**
 * Translates a string ( previously registered with pll_register_string ) and escapes it for safe use in HTML attributes.
 *
 * @api
 * @since 2.1
 *
 * @param string $string The string to translate.
 * @return string The string translated in the current language.
 */
function pll_esc_attr__($string)
{
}
/**
 * Echoes a translated string ( previously registered with pll_register_string )
 * It is an equivalent of _e() and is not escaped.
 *
 * @api
 * @since 0.6
 *
 * @param string $string The string to translate.
 * @return void
 */
function pll_e($string)
{
}
/**
 * Echoes a translated string ( previously registered with pll_register_string ) and escapes it for safe use in HTML output.
 *
 * @api
 * @since 2.1
 *
 * @param string $string The string to translate.
 * @return void
 */
function pll_esc_html_e($string)
{
}
/**
 * Echoes a translated a string ( previously registered with pll_register_string ) and escapes it for safe use in HTML attributes.
 *
 * @api
 * @since 2.1
 *
 * @param string $string The string to translate.
 * @return void
 */
function pll_esc_attr_e($string)
{
}
/**
 * Translates a string ( previously registered with pll_register_string ).
 *
 * @api
 * @since 1.5.4
 *
 * @param string $string The string to translate.
 * @param string $lang   Language code.
 * @return string The string translated in the requested language.
 */
function pll_translate_string($string, $lang)
{
}
/**
 * Returns true if Polylang manages languages and translations for this post type.
 *
 * @api
 * @since 1.0.1
 *
 * @param string $post_type Post type name.
 * @return bool
 */
function pll_is_translated_post_type($post_type)
{
}
/**
 * Returns true if Polylang manages languages and translations for this taxonomy.
 *
 * @api
 * @since 1.0.1
 *
 * @param string $tax Taxonomy name.
 * @return bool
 */
function pll_is_translated_taxonomy($tax)
{
}
/**
 * Returns the list of available languages.
 *
 * @api
 * @since 1.5
 *
 * @param array $args {
 *   Optional array of arguments.
 *
 *   @type bool   $hide_empty Hides languages with no posts if set to true ( defaults to false ).
 *   @type string $fields     Return only that field if set ( @see PLL_Language for a list of fields ), defaults to 'slug'.
 * }
 * @return string[]
 */
function pll_languages_list($args = array())
{
}
/**
 * Sets the post language.
 *
 * @api
 * @since 1.5
 * @since 3.4 $lang accepts PLL_Language or string.
 * @since 3.4 Returns a boolean.
 *
 * @param int                 $id   Post ID.
 * @param PLL_Language|string $lang Language (object or slug).
 * @return bool True when successfully assigned. False otherwise (or if the given language is already assigned to
 *              the post).
 */
function pll_set_post_language($id, $lang)
{
}
/**
 * Sets the term language.
 *
 * @api
 * @since 1.5
 * @since 3.4 $lang accepts PLL_Language or string.
 * @since 3.4 Returns a boolean.
 *
 * @param int                 $id   Term ID.
 * @param PLL_Language|string $lang Language (object or slug).
 * @return bool True when successfully assigned. False otherwise (or if the given language is already assigned to
 *              the term).
 */
function pll_set_term_language($id, $lang)
{
}
/**
 * Save posts translations.
 *
 * @api
 * @since 1.5
 * @since 3.4 Returns an associative array of translations.
 *
 * @param int[] $arr An associative array of translations with language code as key and post ID as value.
 * @return int[] An associative array with language codes as key and post IDs as values.
 *
 * @phpstan-return array<non-empty-string, positive-int>
 */
function pll_save_post_translations($arr)
{
}
/**
 * Save terms translations
 *
 * @api
 * @since 1.5
 * @since 3.4 Returns an associative array of translations.
 *
 * @param int[] $arr An associative array of translations with language code as key and term ID as value.
 * @return int[] An associative array with language codes as key and term IDs as values.
 *
 * @phpstan-return array<non-empty-string, positive-int>
 */
function pll_save_term_translations($arr)
{
}
/**
 * Returns the post language.
 *
 * @api
 * @since 1.5.4
 * @since 3.4 Accepts composite values for `$field`.
 *
 * @param int    $post_id Post ID.
 * @param string $field Optional, the language field to return (@see PLL_Language), defaults to `'slug'`.
 *                      Pass `\OBJECT` constant to get the language object. A composite value can be used for language
 *                      term property values, in the form of `{language_taxonomy_name}:{property_name}` (see
 *                      {@see PLL_Language::get_tax_prop()} for the possible values). Ex: `term_language:term_taxonomy_id`.
 * @return string|int|bool|string[]|PLL_Language The requested field or object for the post language, `false` if no language is associated to that post.
 *
 * @phpstan-return (
 *     $field is \OBJECT ? PLL_Language : (
 *         $field is 'slug' ? non-empty-string : string|int|bool|list<non-empty-string>
 *     )
 * )|false
 */
function pll_get_post_language($post_id, $field = 'slug')
{
}
/**
 * Returns the term language.
 *
 * @api
 * @since 1.5.4
 * @since 3.4 Accepts composite values for `$field`.
 *
 * @param int    $term_id Term ID.
 * @param string $field Optional, the language field to return (@see PLL_Language), defaults to `'slug'`.
 *                      Pass `\OBJECT` constant to get the language object. A composite value can be used for language
 *                      term property values, in the form of `{language_taxonomy_name}:{property_name}` (see
 *                      {@see PLL_Language::get_tax_prop()} for the possible values). Ex: `term_language:term_taxonomy_id`.
 * @return string|int|bool|string[]|PLL_Language The requested field or object for the post language, `false` if no language is associated to that term.
 *
 * @phpstan-return (
 *     $field is \OBJECT ? PLL_Language : (
 *         $field is 'slug' ? non-empty-string : string|int|bool|list<non-empty-string>
 *     )
 * )|false
 */
function pll_get_term_language($term_id, $field = 'slug')
{
}
/**
 * Returns an array of translations of a post.
 *
 * @api
 * @since 1.8
 *
 * @param int $post_id Post ID.
 * @return int[] An associative array of translations with language code as key and translation post ID as value.
 *
 * @phpstan-return array<non-empty-string, positive-int>
 */
function pll_get_post_translations($post_id)
{
}
/**
 * Returns an array of translations of a term.
 *
 * @api
 * @since 1.8
 *
 * @param int $term_id Term ID.
 * @return int[] An associative array of translations with language code as key and translation term ID as value.
 *
 * @phpstan-return array<non-empty-string, positive-int>
 */
function pll_get_term_translations($term_id)
{
}
/**
 * Counts posts in a language.
 *
 * @api
 * @since 1.5
 *
 * @param string $lang Language code.
 * @param array  $args {
 *   Optional array of arguments.
 *
 *   @type string $post_type   Post type.
 *   @type int    $m           YearMonth ( ex: 201307 ).
 *   @type int    $year        4 digit year.
 *   @type int    $monthnum    Month number (from 1 to 12).
 *   @type int    $day         Day of the month (from 1 to 31).
 *   @type int    $author      Author id.
 *   @type string $author_name Author nicename.
 *   @type string $post_format Post format.
 *   @type string $post_status Post status.
 * }
 * @return int Posts count.
 */
function pll_count_posts($lang, $args = array())
{
}
/**
 * Allows to access the Polylang instance.
 * However, it is always preferable to use API functions
 * as internal methods may be changed without prior notice.
 *
 * @since 1.8
 *
 * @return PLL_Frontend|PLL_Admin|PLL_Settings|PLL_REST_Request
 */
function PLL()
{
}
/**
 * Retrieves a page given its path.
 *
 * @since 2.8.3
 *
 * @param string       $page_path Page path.
 * @param string       $output    Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which correspond to
 *                                a WP_Post object, an associative array, or a numeric array, respectively. Default OBJECT.
 * @param string|array $post_type Optional. Post type or array of post types. Default 'page'.
 * @return WP_Post|array|null WP_Post (or array) on success, or null on failure.
 */
function wpcom_vip_get_page_by_path($page_path, $output = \OBJECT, $post_type = 'page')
{
}
/**
 * Determines whether we should load the cache compatibility
 *
 * @since 2.3.8
 *
 * @return bool True if the cache compatibility must be loaded
 */
function pll_is_cache_active()
{
}
/**
 * Get the the current requested url
 *
 * @since 2.6
 *
 * @return string Requested url
 */
function pll_get_requested_url()
{
}
/**
 * Determines whether we should load the block editor plugin or the legacy languages metabox.
 *
 * @since 2.6.0
 *
 * @return bool True to use the block editor plugin.
 */
function pll_use_block_editor_plugin()
{
}
/**
 * Link to the home page in the active language
 *
 * @since 0.9.4
 *
 * @return string
 */
function icl_get_home_url()
{
}
/**
 * Used for building custom language selectors
 * available only on frontend
 *
 * List of paramaters accepted in $args:
 *
 * skip_missing  => whether to skip missing translation or not, 0 or 1, defaults to 0
 * orderby       => 'id', 'code', 'name', defaults to 'id'
 * order         => 'ASC' or 'DESC', defaults to 'ASC'
 * link_empty_to => link to use when the translation is missing {$lang} is replaced by the language code
 *
 * List of parameters returned per language:
 *
 * id               => the language id
 * active           => whether this is the active language or no, 0 or 1
 * native_name      => the language name
 * missing          => whether the translation is missing or not, 0 or 1
 * translated_name  => empty, does not exist in Polylang
 * language_code    => the language code ( slug )
 * country_flag_url => the url of the flag
 * url              => the url of the translation
 *
 * @since 1.0
 *
 * @param string|array $args optional
 * @return array array of arrays per language
 */
function icl_get_languages($args = '')
{
}
/**
 * Used for creating language dependent links in themes
 *
 * @since 1.0
 * @since 2.0 add support for arguments 6 and 7
 *
 * @param int    $id                         object id
 * @param string $type                       optional, post type or taxonomy name of the object, defaults to 'post'
 * @param string $text                       optional, the link text. If not specified will produce the name of the element in the current language
 * @param array  $args                       optional, an array of arguments to add to the link, defaults to empty
 * @param string $anchor                     optional, the anchor to add to the link, defaults to empty
 * @param bool   $echo                       optional, whether to echo the link, defaults to true
 * @param bool   $return_original_if_missing optional, whether to return a value if the translation is missing
 * @return string a language dependent link
 */
function icl_link_to_element($id, $type = 'post', $text = '', $args = array(), $anchor = '', $echo = \true, $return_original_if_missing = \true)
{
}
/**
 * Returns an element’s ID in the current language or in another specified language.
 *
 * @since 0.9.5
 *
 * @param int         $element_id                 Object id.
 * @param string      $element_type               Optional, post type or taxonomy name of the object, defaults to 'post'.
 * @param bool        $return_original_if_missing Optional, true if Polylang should return the original id if the translation is missing, defaults to false.
 * @param string|null $ulanguage_code             Optional, language code, defaults to the current language.
 * @return int|null The object id of the translation, null if the translation is missing and $return_original_if_missing set to false.
 */
function icl_object_id($element_id, $element_type = 'post', $return_original_if_missing = \false, $ulanguage_code = \null)
{
}
/**
 * Undocumented alias of `icl_object_id` introduced in WPML 3.2, used by Yith WooCommerce compare
 *
 * @since 2.2.4
 *
 * @param int    $id                         object id
 * @param string $type                       optional, post type or taxonomy name of the object, defaults to 'post'
 * @param bool   $return_original_if_missing optional, true if Polylang should return the original id if the translation is missing, defaults to false
 * @param string $lang                       optional, language code, defaults to current language
 * @return int|null the object id of the translation, null if the translation is missing and $return_original_if_missing set to false
 */
function wpml_object_id_filter($id, $type = 'post', $return_original_if_missing = \false, $lang = \null)
{
}
/**
 * Undocumented function used by the theme Maya
 * returns the post language
 *
 * @see https://wpml.org/forums/topic/canonical-urls-for-wpml-duplicated-posts/#post-52198 for the original WPML code
 *
 * @since 1.8
 *
 * @param null $empty   optional, not used
 * @param int  $post_id optional, post id, defaults to current post
 * @return array
 */
function wpml_get_language_information($empty = \null, $post_id = \null)
{
}
/**
 * Registers a string for translation in the "strings translation" panel
 *
 * The 4th and 5th parameters $allow_empty_value and $source_lang are not used by Polylang.
 *
 * @since 0.9.3
 *
 * @param string $context           the group in which the string is registered, defaults to 'polylang'
 * @param string $name              a unique name for the string
 * @param string $string            the string to register
 * @return void
 */
function icl_register_string($context, $name, $string)
{
}
/**
 * Removes a string from the "strings translation" panel
 *
 * @since 1.0.2
 *
 * @param string $context the group in which the string is registered, defaults to 'polylang'
 * @param string $name    a unique name for the string
 * @return void
 */
function icl_unregister_string($context, $name)
{
}
/**
 * Gets the translated value of a string ( previously registered with icl_register_string or pll_register_string )
 *
 * @since 0.9.3
 * @since 1.9.2 argument 3 is optional
 * @since 2.0   add support for arguments 4 to 6
 *
 * @param string      $context         the group in which the string is registered
 * @param string      $name            a unique name for the string
 * @param string      $string          the string to translate, optional for strings registered with icl_register_string
 * @param bool|null   $has_translation optional, not supported in Polylang
 * @param bool        $bool            optional, not used
 * @param string|null $lang            optional, return the translation in this language, defaults to current language
 * @return string the translated string
 */
function icl_t($context, $name, $string = '', &$has_translation = \null, $bool = \false, $lang = \null)
{
}
/**
 * Undocumented function used by NextGen Gallery
 * used in PLL_Plugins_Compat for Jetpack with only 3 arguments
 *
 * @since 1.0.2
 * @since 2.0   add support for arguments 5 and 6, strings are no more automatically registered
 *
 * @param string      $context         the group in which the string is registered
 * @param string      $name            a unique name for the string
 * @param string      $string          the string to translate, optional for strings registered with icl_register_string
 * @param bool        $bool            optional, not used
 * @param bool|null   $has_translation optional, not supported in Polylang
 * @param string|null $lang            optional, return the translation in this language, defaults to current language
 * @return string the translated string
 */
function icl_translate($context, $name, $string = '', $bool = \false, &$has_translation = \null, $lang = \null)
{
}
/**
 * Undocumented function used by Types
 * FIXME: tested only with Types
 * probably incomplete as Types locks the custom fields for a new post, but not when edited
 * This is probably linked to the fact that WPML has always an original post in the default language and not Polylang :)
 *
 * @since 1.1.2
 *
 * @return array
 */
function wpml_get_copied_fields_for_post_edit()
{
}
/**
 * Undocumented function used by Warp 6 by Yootheme
 *
 * @since 1.0.5
 *
 * @return string default language code
 */
function icl_get_default_language()
{
}
/**
 * Undocumented function reported to be used by Table Rate Shipping for WooCommerce
 *
 * @see https://wordpress.org/support/topic/add-wpml-compatibility-function
 *
 * @since 1.8.2
 *
 * @return string default language code
 */
function wpml_get_default_language()
{
}
/**
 * Undocumented function used by Ultimate Member
 *
 * @since 2.2.4
 *
 * @return string Current language code
 */
function icl_get_current_language()
{
}