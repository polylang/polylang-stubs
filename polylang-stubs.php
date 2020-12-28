<?php

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
     * @var PLL_Language
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
     * @param array  $classes  CSS classes applied to a row in the languages list table.
     * @param object $language The language.
     * @return array Modified list of classes.
     */
    public function row_classes($classes, $language)
    {
    }
    /**
     * Remove the default lang action for disabled languages
     *
     * @since 1.9
     *
     * @param string $action   HTML markup of the action to define the default language.
     * @param object $language The Language.
     * @return array Modified row action.
     */
    public function remove_default_lang_action($action, $language)
    {
    }
    /**
     * Adds disable/enable links to row actions in the languages list table
     *
     * @since 1.9
     *
     * @param array  $actions  The list of the HTML markup of row actions.
     * @param object $language The language.
     * @return array Modified list of row actions.
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
     */
    public function _enable($lang_id, $enable)
    {
    }
    /**
     * Enables a language
     *
     * @since 1.9
     */
    public function enable()
    {
    }
    /**
     * Disables a language
     *
     * @since 1.9
     */
    public function disable()
    {
    }
    /**
     * Sets error 404 if the requested language is not active
     *
     * @since 1.9
     */
    public function maybe_set_404()
    {
    }
    /**
     * Styles the border
     *
     * @since 1.9
     */
    public function print_css()
    {
    }
    /**
     * Removes inactive languages from the list of languages for users who can't edit posts
     *
     * @since 1.9
     */
    public function init()
    {
    }
    /**
     * Removes inactive languages from the list of languages
     *
     * @since 1.9.3
     *
     * @param array $languages Array of PLL_Language objects.
     * @return array
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
     * Constructor
     *
     * @since 2.6
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Filters the preload REST requests by the current language of the post
     * Necessary otherwise subsequent REST requests filtered by the language
     * would not hit the preloaded requests
     *
     * @since 2.6
     *
     * @param array  $preload_paths Array of paths to preload.
     * @param object $post          The post resource data.
     * @return array
     */
    public function preload_paths($preload_paths, $post)
    {
    }
    /**
     * Enqueue scripts for the block editor plugin.
     *
     * @since 2.6
     */
    public function admin_enqueue_scripts()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Language switcher block
 *
 * @since 2.8
 */
class PLL_Block_Editor_Switcher_Block
{
    /**
     * @var PLL_Admin_Links
     */
    protected $links;
    /**
     * @var PLL_Model
     */
    protected $model;
    /**
     * Current lang to render the language switcher block in an admin context
     *
     * @since 2.8
     *
     * @var string
     */
    public $admin_current_lang;
    /**
     * Is the context block editor?
     *
     * @since 2.8
     *
     * @var bool
     */
    public $is_block_editor = \false;
    /**
     * Constructor
     *
     * @since 2.8
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Renders the `polylang/language-switcher` block on server.
     *
     * @since 2.8
     *
     * @param array $attributes The block attributes.
     * @return string Returns the language switcher.
     */
    public function render_block_polylang_language_switcher($attributes = array())
    {
    }
    /**
     * Registers the `polylang/language-switcher` block.
     *
     * @since 2.8
     */
    public function register_block_polylang_language_switcher()
    {
    }
    /**
     * Get REST parameters for language switcher block
     *
     * @see WP_REST_Server::dispatch()
     *
     * @since 2.8
     *
     * @param mixed           $result  Response to replace the requested version with. Can be anything
     *                                 a normal endpoint can return, or null to not hijack the request.
     * @param WP_REST_Server  $server  Server instance.
     * @param WP_REST_Request $request Request used to generate the response.
     */
    public function get_rest_query_params($result, $server, $request)
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
     * Holds a reference to a {@see PLL_Model_Admin} instance.
     *
     * @since 2.4
     *
     * @var PLL_Admin_Model
     */
    protected $model;
    /**
     * Reference to the current WP_Screen object.
     *
     * @since 2.7
     *
     * @var WP_Screen
     */
    protected $current_screen;
    /**
     * Stores the results of the bulk action when it's done.
     *
     * @since 2.7
     *
     * @var array
     */
    protected $results;
    /**
     * References the options for the bulk action.
     *
     * @since 2.7
     *
     * @var array PLL_Bulk_Translate_Option[]
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
     */
    public function init($current_screen)
    {
    }
    /**
     * Retrieves the needed data in the request body and sanitize it.
     *
     * @since 2.7
     *
     * @param array $request Parameters from the HTTP Request.
     *
     * @return array
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
     * @return string
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
     */
    public function new_post_translation()
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Copy the title, content and excerpt from the source when creating a new post translation
 * in the classic editor.
 * Exposes pll_duplicate_content user meta in the REST API
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
     * @return array
     */
    public function get_duplicate_content_meta()
    {
    }
    /**
     * Update the duplicate content user meta.
     *
     * @since 2.6
     *
     * @param array   $options An array with post type as key and boolean as value.
     * @param WP_User $user    An instance of WP_User.
     * @return bool
     */
    public function udpate_duplicate_content_meta($options, $user)
    {
    }
    /**
     * Fires the content copy by hooking to the filter 'block_editor_preload_paths'.
     *
     * @since 2.9
     *
     * @param array $preload_paths Array of paths to preload, not used.
     * @return array
     */
    public function block_editor_preload_paths($preload_paths)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Abstract class for features needing a button in the language metabox
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
     * Parameters passed to the constructor.
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
     * @param array  $args List of accepted parameters:
     *                     activate   => string displayed to activate the button
     *                     deactivate => string displayed to deactivate the button
     *                     class      => classes to display the icon
     */
    public function __construct($id, $args)
    {
    }
    /**
     * Tells whether the button is active or not
     *
     * @since 2.1
     *
     * @return bool
     */
    public abstract function is_active();
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
     * Displays the button
     *
     * @since 2.1
     *
     * @param string $post_type The current post type.
     */
    public function add_icon($post_type)
    {
    }
    /**
     * Ajax response to a clic on the button
     *
     * @since 2.1
     */
    public function toggle()
    {
    }
    /**
     * Get the text for the button title depending on its state
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
     * Returns the html to display the button
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
     * Name of the zipped file.
     *
     * @var string
     */
    private $zip_name;
    /**
     * Size of the zipped file.
     *
     * @var int
     */
    private $zip_size;
    /**
     * The file path.
     *
     * @var string
     */
    private $filepath;
    /**
     * Creates a new zip containing several files
     *
     * @see https://www.php.net/manual/class.ziparchive.php PHP ZipArchive library
     *
     * @param PLL_Export_File_Interface $export An instance representing a file, or a collection of files to be exported as zip.
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
     */
    public function send_response()
    {
    }
    /**
     * Set correct headers for downloading a file in the browser.
     *
     * @since 2.7
     */
    private function send_headers()
    {
    }
    /**
     * Outputs in the buffer the zipped file and delete the local zip.
     *
     * @since 2.7
     */
    private function download()
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
 * @since 2.7
 */
interface PLL_Export_File_Interface
{
    /**
     *
     * Set source language to export
     *
     * @since 2.7
     *
     * @param string $source_language Locale.
     */
    public function set_source_language($source_language);
    /**
     *
     * Set target languages to export
     *
     * @since 2.7
     * @param string $target_language Target language.
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
     */
    public function add_translation_entry($type, $source, $target = '', $args = array());
    /**
     * Adds a reference to a source of translations entries.
     *
     * @since 2.7
     *
     * @param string $type Type of data to be exported.
     * @param string $id   Optional, a unique identifier to retrieve the data in the database.
     */
    public function set_source_reference($type, $id = '');
    /**
     * Adds a reference to the site from which the file has been exported.
     *
     * @since 2.7
     *
     * @param string $url Absolute URL of the current site exporting content.
     */
    public function set_site_reference($url);
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
     * @since 2.7
     *
     * @return string
     */
    public function get_filename();
}
/**
 * @package Polylang-Pro
 */
/**
 * Handles the logic for generating translations files and assigning values to those.
 *
 * @since 2.7
 */
class PLL_Export_Multi_Files implements \PLL_Export_File_Interface, \Iterator
{
    /**
     * Contains all the different files to export
     *
     * Each file is referenced with a key composed of its source and target languages
     *
     * @var array Associative array of PLL_Export_File_Interface
     */
    private $export_files = array();
    /**
     * Contains the names of the different files to export.
     *
     * FIXME: This only serves to know if a file for a certain source and target language pair exists. This could if we choose to name export files for any reason.
     *
     * @var string[]
     */
    private $export_filenames;
    /**
     * Index of the PLL_Export_File_Interface instance being currently processed. This instanc is stored in {@see PLL_Export_Multi_Files::$export_files}.
     *
     * @var int
     */
    private $current_index;
    /**
     * The export file currently in use to add translations into.
     *
     * @var PLL_Export_File_Interface
     */
    private $current_file;
    /**
     * The selected language to be the source for the translation.
     *
     * @var string
     */
    private $source_language;
    /**
     * An instance of the class defining an individual export file.
     *
     * FIXME: At this point, only the class matters, as a new instance will be generated for each new target language, {@see PLL_Export_Multi_Files::set_target_language()}.
     *
     * @var PLL_Export_File_Interface
     */
    private $base_instance;
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
     * Returns the name of the current file to export.
     *
     * @since 2.7
     *
     * @return string
     */
    public function get_filename()
    {
    }
    /**
     * From {@see Iterator}. Returns the current instance of the export file abstraction.
     *
     * @since 2.7
     *
     * @return PLL_Export_File_Interface
     */
    public function current()
    {
    }
    /**
     *
     * From {@see Iterator}.
     *
     * @since 2.7
     */
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
    public function valid()
    {
    }
    /**
     * From {@see Iterator}
     *
     * @since 2.7
     */
    public function rewind()
    {
    }
    /**
     * Adds a reference to the site from which the file has been exported.
     *
     * @since 2.7
     *
     * @param string $url Absolute URL of the current site exporting content.
     */
    public function set_site_reference($url)
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
 */
class PLL_Export_Strings_Translation
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
     * A class to handle file download.
     *
     * @var PLL_Export_Download_Zip
     */
    private $downloader;
    /**
     * Represents an export file.
     *
     * @var PLL_Export_File_Interface
     */
    private $export;
    /**
     * Holds the strings registered for translation.
     * Formatted by {@see PLL_Admin_Strings::get_strings()}.
     *
     * @var array
     */
    private $strings;
    /**
     * Used to query languages and translations.
     *
     * @var PLL_Model
     */
    private $model;
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    private $options;
    /**
     * PLL_Export_Strings_Translation constructor.
     *
     * @since 2.7
     *
     * @param PLL_Model $model            Polylang model.
     * @param array     $polylang_options Polylang options.
     */
    public function __construct($model, $polylang_options)
    {
    }
    /**
     * Prepare and export the selected strings translations.
     *
     * @since 2.7
     *
     * @param array  $target_languages Array of languages slugs.
     * @param string $group            String translation context to export.
     */
    public function send_strings_translation_to_export($target_languages, $group)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Initialize the XLIFF Exporter Module
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
    const STRINGS_TRANSLATION = 'strings-translations';
    /**
     * Reference to the instance of PLL_Admin_Model
     *
     * @since 2.7
     *
     * @var PLL_Admin_Model
     */
    private $model;
    /**
     * Reference to Polylang options array
     *
     * @since 2.7
     *
     * @var array
     */
    private $options;
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
     * Add Metaboxes, shown only if there is more than one language registered.
     *
     * @since 2.7
     */
    public function add_meta_boxes()
    {
    }
    /**
     * Metabox export strings.
     *
     * @since 2.7
     */
    public function metabox_export_strings()
    {
    }
    /**
     * Metabox import translations.
     *
     * @since 2.7
     */
    public function metabox_import_translation()
    {
    }
    /**
     * Launch the import action.
     *
     * @since 2.7
     */
    public function import_action()
    {
    }
    /**
     * Handles the triggering of the import class.
     *
     * @since 2.7
     */
    protected function trigger_import()
    {
    }
    /**
     * Launch the strings translation export.
     *
     * @since 2.7
     */
    public function export_strings_translation()
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
     * Used to query languages and translations.
     *
     * @var PLL_Model
     */
    private $model;
    /**
     * Instance of PLL_Import_File_Interface.
     *
     * @var PLL_Import_File_Interface
     */
    private $import_factory;
    /**
     * PLL_Import_Action constructor.
     *
     * @since 2.7
     *
     * @param PLL_Model $model Polylang model, used to query languages and translations.
     */
    public function __construct($model)
    {
    }
    /**
     * Processes the import and redirects.
     *
     * @since 2.7
     */
    public function import()
    {
    }
    /**
     * Processes the imported objects retrieved in an import file.
     *
     * @since 2.7
     */
    protected function _import()
    {
    }
    /**
     * Check the data's validity for the import.
     *
     * @since 2.7
     *
     * @param PLL_Import_File_Interface $import Import file.
     * @return bool|WP_Error
     */
    public function is_data_valid_for_import($import)
    {
    }
    /**
     * Handles the strings translations saving in the database.
     *
     * @since 2.7
     *
     * @param PO           $translations Contains all translations entries.
     * @param PLL_Language $language     Target Language.
     * @return int The number of updated strings.
     */
    public function create_string_translations_on_import($translations, $language)
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
 * @since 2.7
 */
interface PLL_Import_File_Interface
{
    /**
     * PLL_Import_File_Interface constructor.
     *
     * @since 2.7
     */
    public function __construct();
    /**
     * Import the translations from a file.
     *
     * @since 2.7
     *
     * @param string $filepath The path on the filesystem where the import file is located.
     * @return bool|WP_Error
     */
    public function import_from_file($filepath);
    /**
     *
     * Get the language of the source
     *
     * @since 2.7
     *
     * @return string
     */
    public function get_source_lang();
    /**
     * Get the target language
     *
     * @since 2.7
     *
     * @return string
     */
    public function get_target_language();
    /**
     * Get the next content to import.
     *
     * @since 2.7
     *
     * @return Translations
     */
    public function get_next_entry();
    /**
     * Get the site reference
     *
     * @since 2.7
     *
     * @return string
     */
    public function get_site_reference();
}
/**
 * @package Polylang-Pro
 */
/**
 * Handles file verifications.
 * Instantiates the right import classes according to the file type.
 *
 * @since 2.7
 */
class PLL_Import_File
{
    /**
     * Used to set supported file formats.
     *
     * @var string
     */
    const SUPPORTED_FORMATS = array('po' => 'text/x-po');
    /**
     * Stores the properties of the uploaded file
     *
     * @since 2.7
     *
     * @var array {
     *   string $file Path to the current location of the file.
     *   string $type MIME type of the uploaded file.
     *   string $error Message for errors having occurred during file upload.
     * }
     */
    private $upload;
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
     * @param string $filepath Path to the current location of the uploaded file.
     * @return PLL_Import_File_Interface|WP_Error
     */
    public function load($filepath)
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
 * @package polylang-pro
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
     */
    public function init(&$polylang)
    {
    }
    /**
     * Adds the fallback locale to each language object.
     *
     * @since 2.9
     *
     * @param array $languages The list of language objects.
     */
    public static function pll_languages_list($languages)
    {
    }
    /**
     * Attempts to load the translation in the fallback locale if it doesn't exist in the current locale.
     *
     * @since 2.9
     *
     * @param string $file Translation file name.
     * @return string
     */
    public function load_file($file)
    {
    }
    /**
     * Outputs the locale fallbacks when editing a language.
     *
     * @since 2.9
     *
     * @param PLL_Language $edit_lang
     */
    public function edit_language_form_fields($edit_lang)
    {
    }
    /**
     * Outputs an empty locale fallbacks field when adding a language.
     *
     * @since 2.9
     */
    public function add_language_form_fields()
    {
    }
    /**
     * Saves the language fallback.
     *
     * @since 2.9
     *
     * @param array $args Arguments used to create or edit the language.
     */
    public function save_language($args)
    {
    }
    /**
     * Allows to update translations files for plugins and themes.
     *
     * @since 2.9
     *
     * @param array $locales List of locales to update.
     * @return array
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
     * @param object $polylang Polylang object.
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Creates media translations each time a new media is uploaded
     *
     * @since 1.9
     *
     * @param int $post_id The id of the attachment to duplicate.
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
     * The post CRUD to create translations.
     *
     * @since 2.7
     *
     * @var PLL_CRUD_Posts
     */
    private $posts;
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
     * Instance of PLL_Model.
     *
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
     * @var string
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
     * @var bool|string
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
     */
    public function activate()
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
     * Protected method to display a configuration form
     *
     * @since 1.8
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
     */
    public function save_options()
    {
    }
    /**
     * Get the row actions
     *
     * @since 1.8
     *
     * @return array
     */
    protected function get_actions()
    {
    }
    /**
     * Get the actions links
     *
     * @since 1.8
     *
     * @return array
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
     * Get the buttons
     *
     * @since 1.9
     *
     * @return array
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
     * @return array
     */
    protected function get_actions()
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
class PLL_PO_Export implements \PLL_Export_File_Interface
{
    /**
     * Po object.
     *
     * @var PO
     */
    private $po;
    /**
     * The registered source_language
     *
     * @var string
     */
    private $source_language;
    /**
     * The registered target languages
     *
     * @var string
     */
    private $target_language;
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
     *
     * Set a source language to the export
     *
     * @since 2.7
     *
     * @param string $source_language Locale.
     */
    public function set_source_language($source_language)
    {
    }
    /**
     * Set a target language to the export
     *
     * @param string $target_language Target language.
     *
     * @since 2.7
     */
    public function set_target_language($target_language)
    {
    }
    /**
     * Set the site reference to the export.
     *
     * @since 2.7
     *
     * @param string $url Absolute url of the current site.
     */
    public function set_site_reference($url)
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
     */
    public function add_translation_entry($type, $source, $target = '', $args = array())
    {
    }
    /**
     * Assign a reference to the PO file.
     *
     * @since 2.7
     *
     * @param string $type Type of data to be exported, @see PLL_Export_File_Interface .
     * @param string $id   Optional, unique identifier to retrieve the data in the database.
     */
    public function set_source_reference($type, $id = '')
    {
    }
    /**
     * Writes the file in the output buffer
     *
     * @since 2.7
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
 * PO file, generated from importing translations
 *
 * Handles the reading of a PO file.
 *
 * @since 2.7
 */
class PLL_PO_Import implements \PLL_Import_File_Interface
{
    /**
     * Po object.
     *
     * @var PO $po.
     */
    private $po;
    /**
     * PLL_Import_File_Interface constructor.
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
     * @return bool|WP_Error
     */
    public function import_from_file($filepath)
    {
    }
    /**
     * Get the source language
     *
     * @since 2.7
     *
     * @return string
     */
    public function get_source_lang()
    {
    }
    /**
     * Get the target language
     *
     * @since 2.7
     *
     * @return string
     */
    public function get_target_language()
    {
    }
    /**
     * Get the site reference.
     *
     * @since 2.7
     *
     * @return bool|string
     */
    public function get_site_reference()
    {
    }
    /**
     * Get the next string translation to import.
     *
     * @since 2.7
     *
     * @return array|bool
     */
    public function get_next_entry()
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
     * REST request parameters stored for internal usage.
     *
     * @var array
     */
    protected $params;
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
     * Stores the request parameters to use, for example when filtering queries.
     *
     * @since 2.6.9
     *
     * @param mixed           $null    Not used, generally null.
     * @param WP_REST_Request $request Request used to generate the response.
     * @return mixed
     */
    public function get_params($null, $request)
    {
    }
    /**
     * Reset the params
     *
     * @since 2.6.9
     *
     * @param object $response Result to send to the client. Usually a WP_REST_Response or WP_Error.
     * @return object
     */
    public function reset_params($response)
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
 * Filters comments in the REST API.
 *
 * @since 2.6.9
 */
class PLL_REST_Comment extends \PLL_REST_Filtered_Object
{
    /**
     * Constructor
     *
     * @since 2.6.9
     *
     * @param object $rest_api Instance of PLL_REST_API
     */
    public function __construct(&$rest_api)
    {
    }
    /**
     * Filters the query per language according to the 'lang' parameter
     *
     * @since 2.6.9
     *
     * @param object $query Comment query.
     */
    public function parse_comment_query($query)
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
     * @var PLL_Links
     */
    public $links;
    /**
     * How is named the object id, typically 'ID' for posts and 'term_id' for terms
     * defined by the child class
     *
     * @var string
     */
    protected $id;
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
     * Returns the object language
     *
     * @since 2.2
     *
     * @param array $object Post or Term array
     * @return string
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
     * @param object $rest_api      Instance of PLL_REST_API
     * @param array  $content_types Array of arrays with post types as keys and options as values
     */
    public function __construct(&$rest_api, $content_types)
    {
    }
    /**
     * Filters the query per language according to the 'lang' parameter
     *
     * @since 2.6.9
     *
     * @param object $query WP_Query object.
     */
    public function parse_query($query)
    {
    }
    /**
     * Allows to share the post slug across languages
     * Modifies the REST response accordingly
     *
     * @since 2.3
     *
     * @param object $response The response object.
     * @param object $post     Post object.
     * @param object $request  Request object.
     */
    public function prepare_response($response, $post, $request)
    {
    }
    /**
     * Add the translations_table REST field only when the request is called for the block editor
     *
     * @see WP_REST_Server::dispatch()
     *
     * @since 2.6
     *
     * @param mixed           $result  Response to replace the requested version with. Can be anything
     *                                 a normal endpoint can return, or null to not hijack the request.
     * @param WP_REST_Server  $server  Server instance.
     * @param WP_REST_Request $request Request used to generate the response.
     */
    public function get_rest_query_params($result, $server, $request)
    {
    }
    /**
     * Initialize correctly sanitization filters with the correct language locale.
     *
     * @see WP_REST_Server::dispatch()
     *
     * @since 2.9
     *
     * @param mixed           $result  Response to replace the requested version with. Can be anything
     *                                 a normal endpoint can return, or null to not hijack the request.
     * @param WP_REST_Server  $server  Server instance.
     * @param WP_REST_Request $request Request used to generate the response.
     */
    public function set_filters_sanitization($result, $server, $request)
    {
    }
    /**
     * Check if the request is a REST API post type request for saving
     *
     * @since 2.7.3
     *
     * @param string          $post_id The post id.
     * @param WP_REST_Request $request Request used to generate the response.
     * @return boolean True if the request saves a post.
     */
    public function is_save_post_request($post_id, $request)
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
     * Set the language to the edited media
     *
     * When a media is edited in the block image, a new media is created and we need to set the language from the original one.
     *
     * @see https://make.wordpress.org/core/2020/07/20/editing-images-in-the-block-editor/ the new WordPress 5.5 feature: Editing Images in the Block Editor.
     * @since 2.8
     *
     * @param int $post_id
     */
    public function set_media_language($post_id)
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
     * to allow it to share the same slugs as terms in other languages
     *
     * @since 2.3
     *
     * @param object $prepared_term Term object.
     * @param object $request       Request object.
     */
    public function pre_insert_term($prepared_term, $request)
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
     * Will make slug unique per language and taxonomy
     * Mostly taken from wp_unique_term_slug
     *
     * @since 1.9
     *
     * @param string $slug The string that will be tried for a unique slug.
     * @param string $lang Language slug.
     * @param object $term The term object that the $slug will belong too.
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
     */
    public function save_term($term_id, $tt_id, $taxonomy)
    {
    }
}
/**
 * @package Polylang-Pro
 */
/**
 * Manages shared slugs for taxonomy terms on admin side
 *
 * @since 1.9
 */
class PLL_Admin_Share_Term_Slug extends \PLL_Share_Term_Slug
{
    /**
     * Stores the name of a term being saved.
     *
     * @var string
     */
    protected $pre_term_name;
    /**
     * The id of the current post being updated.
     *
     * @var int
     */
    protected $post_id;
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
     * Stores the name of a term being saved, for use in the filter pre_term_slug
     *
     * @since 1.9
     *
     * @param string $name The term name to store.
     * @return string Unmodified term name.
     */
    public function pre_term_name($name)
    {
    }
    /**
     * Stores the current post_id when bulk editing posts for use in save_language and pre_term_slug
     *
     * @since 1.9
     *
     * @param int $post_id The id of the current post being updated.
     */
    public function pre_post_update($post_id)
    {
    }
    /**
     * Creates the term slug in case the term already exists in another language
     *
     * @since 1.9
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
     * @var PLL_Language
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
     * @param object $query Reference to a WP_Query object.
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
     * @param string       $page_path Page path.
     * @param string       $lang      Language slug.
     * @param string       $output    Optional. Output type. Accepts OBJECT, ARRAY_N, or ARRAY_A. Default OBJECT.
     * @param string|array $post_type Optional. Post type or array of post types. Default 'page'.
     * @return WP_Post|null WP_Post on success or null on failure.
     */
    protected function get_page_by_path($page_path, $lang, $output = \OBJECT, $post_type = 'page')
    {
    }
    /**
     * Adds our join clause to sql query
     * Useful when querying a post by name
     *
     * @since 1.9
     *
     * @param string $join  Original join clause.
     * @param object $query The WP_Query object.
     * @return string Modified join clause.
     */
    public function posts_join($join, $query)
    {
    }
    /**
     * Adds our where clause to sql query
     * Useful when querying a post by name
     *
     * @since 1.9
     *
     * @param string $where Original where clause.
     * @param object $query The WP_Query object.
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
     * @param object $query The WP_Query object.
     * @return bool| PLL_Language The language to use for the filter, false if the query should be kept unfiltered.
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
     */
    public function pll_translate_media($post_id, $tr_id)
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
     * The object used to synchronize posts
     *
     * @since 2.7
     *
     * @var PLL_Sync_Post_Model
     */
    private $sync_model;
    /**
     * Whether the post should be synchronized or not.
     *
     * @since 2.7
     *
     * @var array
     */
    private $do_synchronize;
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
     * @param object $sync_model An instance of PLL_Sync_Post_Model.
     * @param object $language   The language.
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
     * Copies all taxonomies
     *
     * @since 2.1
     *
     * @param array $taxonomies List of taxonomy names.
     * @param bool  $sync       True for a synchronization, false for a simple copy.
     * @param int   $from       Source post id.
     * @param int   $to         Target post id.
     * @return array
     */
    public function copy_taxonomies($taxonomies, $sync, $from, $to)
    {
    }
    /**
     * Copies all custom fields
     *
     * @since 2.1
     *
     * @param array $keys List of custom fields names.
     * @param bool  $sync True if it is synchronization, false if it is a copy.
     * @param int   $from Id of the post from which we copy the information.
     * @param int   $to   Id of the post to which we paste the information.
     * @return array
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
     * @return int Id of the target post.
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
     */
    public function after_insert_post($post)
    {
    }
    /**
     * Add information to the translations_table field
     * to check if the user can synchronize the current post
     *
     * @since 2.6
     *
     * @param array  $datas    Translations table row datas.
     * @param int    $post_id  Post to synchronize.
     * @param object $language Language to synchronize.
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
     * @since 2.7 Registers two option for the Translate bulk action.
     *
     * @param object $polylang Polylang object.
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
     */
    public function sync_posts($post_id)
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
     */
    public function __call($func, $args)
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
     * @var PLL_CRUD_Posts
     */
    public $posts;
    /**
     * Id of the target post.
     *
     * @var int
     */
    public $post_id;
    /**
     * Language of the target post.
     *
     * @var int
     */
    public $language;
    /**
     * Constructor
     *
     * @since 1.9
     *
     * @param object $polylang
     */
    public function __construct(&$polylang)
    {
    }
    /**
     * Duplicates the feature image if the translation does not exist yet
     *
     * @since 2.3
     *
     * @param int    $id   Thumbnail id
     * @param string $key  Meta key
     * @param string $lang Language code
     * @return int
     */
    public function duplicate_thumbnail($id, $key, $lang)
    {
    }
    /**
     * Duplicates a term if the translation does not exist yet
     *
     * @since 2.3
     *
     * @param int    $tr_term Translated term id
     * @param int    $term    Source term id
     * @param string $lang    Language slug
     * @return int
     */
    public function duplicate_term($tr_term, $term, $lang)
    {
    }
    /**
     * Copy the content from one post to the other
     *
     * @since 1.9
     *
     * @param object        $from_post The post to copy from
     * @param object        $post      The post to copy to
     * @param object|string $language  The language of the post to copy to
     */
    public function copy_content($from_post, $post, $language)
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
    public function translate_media($id)
    {
    }
    /**
     * Translates the 'gallery' and 'playlist' shortcodes
     *
     * @since 1.9
     *
     * @param array  $attr Shortcode attribute
     * @param null   $null
     * @param string $tag  Shortcode tag (either 'gallery' or 'playlist')
     * @return string Translated shortcode
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
    public function translate_html($content)
    {
    }
    /**
     * Translate shortcodes and <img> attributes in a given text
     *
     * @since 1.9
     *
     * @param string $content Text to translate
     * @return string Translated text
     */
    public function translate_content($content)
    {
    }
    /**
     * Translates <img> 'class' and 'alt' attributes
     *
     * @since 1.9
     * @since 2.5 The html is passed by reference and the return value is the image id
     *
     * @param string $text Reference to <img> html with attributes
     * @return bool|int Translated image id if exist
     */
    public function translate_img(&$text)
    {
    }
    /**
     * Recursively translate blocks
     *
     * @since 2.5
     *
     * @param array $blocks An array of blocks arrays
     * @return array
     */
    public function translate_blocks($blocks)
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
    public function translate_block_content($block)
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
     * @var PLL_Language
     */
    public $curlang;
    /**
     * Constructor
     *
     * @since 1.9
     *
     * @param object $slugs_model An instance of PLL_Translate_Slugs_Model.
     * @param object $curlang     The Current language.
     */
    public function __construct(&$slugs_model, &$curlang)
    {
    }
    /**
     * Modifies custom post type links
     *
     * @since 1.9
     *
     * @param string $url  The post link.
     * @param object $lang The post language.
     * @param object $post The post object.
     * @return string
     */
    public function pll_post_type_link($url, $lang, $post)
    {
    }
    /**
     * Modifies term links
     *
     * @since 1.9
     *
     * @param string $url  The term link.
     * @param object $lang The term language.
     * @param object $term The term object.
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
     * Constructor
     *
     * @since 1.9
     *
     * @param object $slugs_model An instance of PLL_Translate_Slugs_Model.
     * @param object $curlang     Current language
     */
    public function __construct(&$slugs_model, &$curlang)
    {
    }
    /**
     * Translate the slugs in archive urls
     *
     * @since 1.9
     *
     * @param string $url      The archive url in which want to translat a slug.
     * @param object $language The language.
     * @return string Modified url.
     */
    public function pll_get_archive_url($url, $language)
    {
    }
    /**
     * Modifies the canonical url with the translated slugs
     *
     * @since 1.9
     *
     * @param string $redirect_url The canonical url to redirect to as evaluated in Polylang.
     * @param object $language     The language.
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
     * @var PLL_Links_Model
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
     */
    public function switch_blog($new_blog, $old_blog)
    {
    }
    /**
     * Initializes the list of translated slugs
     * Need to wait for all post types and taxonomies to be registered
     *
     * @since 1.9
     */
    public function init_translated_slugs()
    {
    }
    /**
     * Translates a slug in a permalink ( from original slug )
     *
     * @since 1.9
     *
     * @param string $link The url to modify.
     * @param object $lang The language.
     * @param string $type The type of slug to translate.
     * @return string Modified url.
     */
    public function translate_slug($link, $lang, $type)
    {
    }
    /**
     * Translates a slug in a permalink ( from an already translated slug )
     *
     * @since 1.9
     *
     * @param string $link The url to modify.
     * @param object $lang The language.
     * @param string $type The type of slug to translate.
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
     * @param array $pre Not used.
     * @return array Unmodified $pre.
     */
    public function prepare_rewrite_rules($pre)
    {
    }
    /**
     * Flush rewrite rules when saving strings translations
     *
     * @since 1.9
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
     * @param array  $rules Rewrite rules.
     * @param string $type  The type of slug to translate.
     * @return array Modified rewrite rules.
     */
    protected function translate_rule($rules, $type)
    {
    }
    /**
     * Translates the post format slug in rewrite rules
     *
     * @since 1.9
     *
     * @param array $rules Rewrite rules.
     * @return array Modified rewrite rules.
     */
    protected function translate_post_format_rule($rules)
    {
    }
    /**
     * Translates the post type archive in rewrite rules
     *
     * @since 1.9
     *
     * @param array $rules Rewrite rules.
     * @return array Modified rewrite rules.
     */
    protected function translate_post_type_archive_rule($rules)
    {
    }
    /**
     * Translates the page slug in rewrite rules
     *
     * @since 1.9
     *
     * @param array $rules Rewrite rules.
     * @return array Modified rewrite rules.
     */
    protected function translate_paged_rule($rules)
    {
    }
    /**
     * Modifies rewrite rules to translate post types and taxonomies slugs
     *
     * @since 1.9
     *
     * @param array $rules Rewrite rules.
     * @return array Modified rewrite rules.
     */
    public function rewrite_translated_slug($rules)
    {
    }
    /**
     * Register strings for translated slugs
     *
     * @since 1.9
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
     * Session token.
     *
     * @var string
     */
    private $token;
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
     * @param string $lang The language slug.
     * @param array  $args Existing url parameters.
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
     * @param array $urls List of allowed urls.
     * @return array Modified list of urls.
     */
    public function customize_allowed_urls($urls)
    {
    }
    /**
     * Allows all our domains as origins ( for customizer cross domain requests )
     *
     * @since 2.0
     *
     * @param array $origins List of allowed urls.
     * @return array Modified list of urls.
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
     */
    public function admin_init()
    {
    }
    /**
     * Outputs the link to the javascript request to main domain
     *
     * @since 2.0
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
     * Current language (defined by its slug).
     *
     * @var string
     */
    private $curlang;
    /**
     * The list of ajax endpoints for each subdomain.
     *
     * @var array
     */
    private $ajax_urls;
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
     * @param string $lang The language slug.
     * @param array  $args Existing url parameters.
     * @return string The ajax url.
     */
    public function ajax_url($lang, $args)
    {
    }
    /**
     * Outputs the javascript to create the cross domain request when the language just switched
     *
     * @since 2.0
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
abstract class PLL_Base
{
    /**
     * Stores the plugin options.
     *
     * @var array
     */
    public $options;
    /**
     * Instance of PLL_Model.
     *
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
     * @var PLL_CRUD_Posts
     */
    public $posts;
    /**
     * Registers hooks on insert / update term related action and filters.
     *
     * @var PLL_CRUD_Terms
     */
    public $terms;
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param object $links_model
     */
    public function __construct(&$links_model)
    {
    }
    /**
     * Instantiates classes reacting to CRUD operations on posts and terms,
     * only when at least one language is defined.
     *
     * @since 2.6
     */
    public function init()
    {
    }
    /**
     * Registers our widgets
     *
     * @since 0.1
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
     */
    public function load_strings_translations($locale = '')
    {
    }
    /**
     * Resets some variables when switching blog
     * Applies only if Polylang is active on the new blog
     *
     * @since 1.5.1
     *
     * @param int $new_blog
     * @param int $old_blog
     * @return bool not used by WP but by child class
     */
    public function switch_blog($new_blog, $old_blog)
    {
    }
    /**
     * Some backward compatibility with Polylang < 1.2
     * Allows for example to call $polylang->get_languages_list() instead of $polylang->model->get_languages_list()
     * This works but should be slower than the direct call, thus an error is triggered in debug mode
     *
     * @since 1.2
     *
     * @param string $func function name
     * @param array  $args function arguments
     */
    public function __call($func, $args)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Base class for both admin
 *
 * @since 1.8
 */
class PLL_Admin_Base extends \PLL_Base
{
    public $filter_lang, $curlang, $pref_lang;
    /**
     * Loads the polylang text domain
     * Setups actions needed on all admin pages
     *
     * @since 1.8
     *
     * @param object $links_model
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
     */
    public function add_menus()
    {
    }
    /**
     * Setup js scripts & css styles ( only on the relevant pages )
     *
     * @since 0.6
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Enqueue scripts to the WP Customizer.
     *
     * @since 2.4.0
     */
    public function customize_controls_enqueue_scripts()
    {
    }
    /**
     * Localize scripts.
     *
     * @since 2.4.0
     */
    public function localize_scripts()
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
     */
    public function admin_print_footer_scripts()
    {
    }
    /**
     * Sets the admin current language, used to filter the content
     *
     * @since 2.0
     */
    public function set_current_language()
    {
    }
    /**
     * Defines the backend language and the admin language filter based on user preferences
     *
     * @since 1.2.3
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
     * Adds the languages list in admin bar for the admin languages filter
     *
     * @since 0.9
     *
     * @param object $wp_admin_bar
     */
    public function admin_bar_menu($wp_admin_bar)
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
    public $model;
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
     * Filter the preload REST requests by the current language of the post
     * Necessary otherwise subsequent REST requests all filtered by the language
     * would not hit the preloaded requests
     *
     * @since 2.5
     *
     * @param array  $preload_paths Array of paths to preload.
     * @param object $post          The post resource data.
     * @return array
     */
    public function preload_paths($preload_paths, $post)
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
    public $model, $links, $curlang, $pref_lang;
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
     */
    public function add_meta_boxes($post_type)
    {
    }
    /**
     * Displays the Languages metabox in the 'Edit Post' and 'Edit Page' panels
     *
     * @since 0.1
     */
    public function post_language()
    {
    }
    /**
     * Ajax response for changing the language in the post metabox
     *
     * @since 0.2
     */
    public function post_lang_choice()
    {
    }
    /**
     * Ajax response for input in translation autocomplete input box
     *
     * @since 1.5
     */
    public function ajax_posts_not_translated()
    {
    }
    /**
     * Filters the pages by language in the parent dropdown list in the page attributes metabox
     *
     * @since 0.6
     *
     * @param array  $dropdown_args Arguments passed to wp_dropdown_pages
     * @param object $post
     * @return array Modified arguments
     */
    public function page_attributes_dropdown_pages_args($dropdown_args, $post)
    {
    }
    /**
     * Displays a notice if the user has not sufficient rights to overwrite synchronized taxonomies and metas
     *
     * @since 2.6
     *
     * @param object $post Post currently being edited
     */
    public function edit_form_top($post)
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
    public $links, $model, $filter_lang;
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
     * Adds languages and translations columns in posts, pages, media, categories and tags tables
     *
     * @since 0.8.2
     *
     * @param array  $columns List of table columns
     * @param string $before  The column before which we want to add our languages
     * @return array modified list of columns
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
     * Hide the column for the filtered language
     *
     * @since 2.7
     *
     * @param array $hidden Array of hidden columns
     * @return array
     */
    public function hidden_columns($hidden)
    {
    }
    /**
     * Adds the language and translations columns ( before the comments column ) in the posts, pages and media library tables
     *
     * @since 0.1
     *
     * @param array $columns list of posts table columns
     * @return array modified list of columns
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
     * Adds the language column ( before the posts column ) in the 'Categories' or 'Post Tags' table
     *
     * @since 0.1
     *
     * @param array $columns list of terms table columns
     * @return array modified list of columns
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
     */
    public function term_column($out, $column, $term_id)
    {
    }
    /**
     * Update rows of translated posts when the language is modified in quick edit
     *
     * @since 1.7
     */
    public function ajax_update_post_rows()
    {
    }
    /**
     * Update rows of translated terms when adding / deleting a translation or when the language is modified in quick edit
     *
     * @since 1.7
     */
    public function ajax_update_term_rows()
    {
    }
    /**
     * Returns the language flag or teh language slug if there is no flag.
     *
     * @since 2.8
     *
     * @param object $language PLL_Language object.
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
    public $links, $model, $pref_lang;
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
     * Save translations from language metabox
     *
     * @since 1.5
     *
     * @param int   $post_id
     * @param array $arr
     * @return array
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
     * Adds the language field and translations tables in the 'Edit Media' panel
     * Needs WP 3.5+
     *
     * @since 0.9
     *
     * @param array  $fields list of form fields
     * @param object $post
     * @return array modified list of form fields
     */
    public function attachment_fields_to_edit($fields, $post)
    {
    }
    /**
     * Creates a media translation
     *
     * @since 0.9
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
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Filters posts, pages and media by language
     *
     * @since 0.1
     *
     * @param object $query a WP_Query object
     */
    public function parse_query($query)
    {
    }
    /**
     * Save language and translation when editing a post (post.php)
     *
     * @since 2.3
     */
    public function edit_post()
    {
    }
    /**
     * Save language when inline editing or bulk editing a post
     * Fix translations if necessary
     *
     * @since 2.3
     *
     * @param int    $post_id Post ID
     * @param object $lang    Language
     */
    protected function inline_save_language($post_id, $lang)
    {
    }
    /**
     * Save language when bulk editing a post
     *
     * @since 2.3
     */
    public function bulk_edit_posts()
    {
    }
    /**
     * Save language when inline editing a post
     *
     * @since 2.3
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
    public $links, $model, $options, $pref_lang;
    protected $pre_term_name;
    // Used to store the term name before creating a slug if needed
    protected $post_id;
    // Used to store the current post_id when bulk editing posts
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
     */
    public function add_term_form()
    {
    }
    /**
     * Adds the language field and translations tables in the 'Edit Category' and 'Edit Tag' panels
     *
     * @since 0.1
     *
     * @param object $tag
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
     * Stores the current post_id when bulk editing posts for use in save_language and pre_term_slug
     *
     * @since 1.7
     *
     * @param int $post_id
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
     */
    protected function save_language($term_id, $taxonomy)
    {
    }
    /**
     * Save translations from our form
     *
     * @since 1.5
     *
     * @param int $term_id
     * @return array
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
     */
    public function save_term($term_id, $tt_id, $taxonomy)
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
    public function pre_term_name($name)
    {
    }
    /**
     * Creates the term slug in case the term already exists in another language
     *
     * @since 0.9.5
     *
     * @param string $slug
     * @param string $taxonomy
     * @return string
     */
    public function pre_term_slug($slug, $taxonomy)
    {
    }
    /**
     * Ajax response for edit term form
     *
     * @since 0.2
     */
    public function term_lang_choice()
    {
    }
    /**
     * Ajax response for input in translation autocomplete input box
     *
     * @since 1.5
     */
    public function ajax_terms_not_translated()
    {
    }
    /**
     * Filters the default category in note below the category list table and in settings->writing dropdown
     *
     * @since 1.2
     *
     * @param int $value
     * @return int
     */
    public function option_default_category($value)
    {
    }
    /**
     * Checks if the new default category is translated in all languages
     * If not, create the translations
     *
     * @since 1.7
     *
     * @param int $old_value
     * @param int $value
     */
    public function update_option_default_category($old_value, $value)
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
     */
    public function split_shared_term($term_id, $new_term_id, $term_taxonomy_id, $taxonomy)
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
    public $links_model, $model, $options, $curlang;
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
     */
    public function delete_sticky_posts_cache()
    {
    }
    /**
     * Get the language to filter a comments query
     *
     * @since 2.0
     *
     * @param object $query
     * @return object|bool the language(s) to use in the filter, false otherwise
     */
    protected function get_comments_queried_language($query)
    {
    }
    /**
     * Adds language dependent cache domain when querying comments
     * Useful as the 'lang' parameter is not included in cache key by WordPress
     * Needed since WP 4.6 as comments have been added to persistent cache. See #36906, #37419
     *
     * @since 2.0
     *
     * @param object $query
     */
    public function parse_comment_query($query)
    {
    }
    /**
     * Filters the comments according to the current language
     * Used by the recent comments widget and admin language filter
     *
     * @since 0.2
     *
     * @param array  $clauses sql clauses
     * @param object $query   WP_Comment_Query object
     * @return array modified $clauses
     */
    public function comments_clauses($clauses, $query)
    {
    }
    /**
     * Filters get_pages per language
     *
     * @since 1.4
     *
     * @param array $pages an array of pages already queried
     * @param array $args  get_pages arguments
     * @return array modified list of pages
     */
    public function get_pages($pages, $args)
    {
    }
    /**
     * Modifies the sql request for get_adjacent_post to filter by the current language
     *
     * @since 0.1
     *
     * @param string  $sql            The JOIN clause in the SQL.
     * @param bool    $in_same_term   Whether post should be in a same taxonomy term.
     * @param array   $excluded_terms Array of excluded term IDs.
     * @param string  $taxonomy       Taxonomy. Used to identify the term used when `$in_same_term` is true.
     * @param WP_Post $post           WP_Post object.
     * @return string modified JOIN clause
     */
    public function posts_join($sql, $in_same_term, $excluded_terms, $taxonomy = '', $post = \null)
    {
    }
    /**
     * Modifies the sql request for wp_get_archives and get_adjacent_post to filter by the current language
     *
     * @since 0.1
     *
     * @param string  $sql            The WHERE clause in the SQL.
     * @param bool    $in_same_term   Whether post should be in a same taxonomy term.
     * @param array   $excluded_terms Array of excluded term IDs.
     * @param string  $taxonomy       Taxonomy. Used to identify the term used when `$in_same_term` is true.
     * @param WP_Post $post           WP_Post object.
     * @return string modified WHERE clause
     */
    public function posts_where($sql, $in_same_term, $excluded_terms, $taxonomy = '', $post = \null)
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
     * Prevents deleting all the translations of the default category
     *
     * @since 2.1
     *
     * @param array  $caps    The user's actual capabilities.
     * @param string $cap     Capability name.
     * @param int    $user_id The user ID.
     * @param array  $args    Adds the context to the cap. The category id.
     * @return array
     */
    public function fix_delete_default_category($caps, $cap, $user_id, $args)
    {
    }
    /**
     * Translates the site title in emails sent to the user (change email, reset password)
     * It is necessary to filter the email because WP evaluates the site title before calling switch_to_locale()
     *
     * @since 2.1.3
     *
     * @param array $email
     * @return array
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
     * @retun array
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
     * Modifies the widgets forms to add our language dropdown list
     *
     * @since 0.3
     *
     * @param object $widget   Widget instance
     * @param null   $return   Not used
     * @param array  $instance Widget settings
     */
    public function in_widget_form($widget, $return, $instance)
    {
    }
    /**
     * Called when widget options are saved
     * saves the language associated to the widget
     *
     * @since 0.3
     *
     * @param array  $instance     Widget options
     * @param array  $new_instance Not used
     * @param array  $old_instance Not used
     * @param object $widget       WP_Widget object
     * @return array Widget options
     */
    public function widget_update_callback($instance, $new_instance, $old_instance, $widget)
    {
    }
    /**
     * Updates language user preference set in user profile
     *
     * @since 0.4
     *
     * @param int $user_id
     */
    public function personal_options_update($user_id)
    {
    }
    /**
     * Outputs hidden information to modify the biography form with js
     *
     * @since 0.4
     *
     * @param object $profileuser
     */
    public function personal_options($profileuser)
    {
    }
    /**
     * Upgrades languages files after a core upgrade
     * only for backward compatibility WP < 4.0 *AND* Polylang < 1.6
     *
     * @since 0.6
     *
     * @param string $version new WP version
     */
    public function upgrade_languages($version)
    {
    }
    /**
     * Allows to update translations files for plugins and themes.
     *
     * @since 1.6
     *
     * @param array $locales List of locales to update for plugins and themes.
     * @return array
     */
    public function update_check_locales($locales)
    {
    }
    /**
     * Adds a text direction dependent class to the body
     *
     * @since 2.2
     *
     * @param string $classes Space-separated list of CSS classes.
     * @return string
     */
    public function admin_body_class($classes)
    {
    }
    /**
     * Add post state for translations of the privacy policy page
     *
     * @since 2.7
     *
     * @param array  $post_states An array of post display states.
     * @param object $post        The current post object.
     * @return array
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
    public $links_model, $model, $options;
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
     * Returns the home url in the requested language
     *
     * @since 1.3
     *
     * @param object|string $language
     * @param bool          $is_search optional whether we need the home url for a search form, defaults to false
     */
    public function get_home_url($language, $is_search = \false)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Manages links related functions
 *
 * @since 1.8
 */
class PLL_Admin_Links extends \PLL_Links
{
    /**
     * Returns html markup for a new translation link
     *
     * @since 2.6
     *
     * @param string $link     The new translation link.
     * @param object $language The language of the new translation.
     * @return string
     */
    protected function new_translation_link($link, $language)
    {
    }
    /**
     * Returns html markup for a translation link
     *
     * @since 2.6
     *
     * @param string $link     The translation link.
     * @param object $language The language of the translation.
     * @return string
     */
    public function edit_translation_link($link, $language)
    {
    }
    /**
     * Get the link to create a new post translation
     *
     * @since 1.5
     *
     * @param int    $post_id  The source post id.
     * @param object $language The language of the new translation.
     * @param string $context  Optional. Defaults to 'display' which encodes '&' to '&amp;'.
     *                         Otherwise, preserves '&'.
     * @return string
     */
    public function get_new_post_translation_link($post_id, $language, $context = 'display')
    {
    }
    /**
     * Returns html markup for a new post translation link
     *
     * @since 1.8
     *
     * @param int    $post_id
     * @param object $language
     * @return string
     */
    public function new_post_translation_link($post_id, $language)
    {
    }
    /**
     * Returns html markup for a translation link
     *
     * @since 1.4
     *
     * @param int $post_id translation post id
     * @return string
     */
    public function edit_post_translation_link($post_id)
    {
    }
    /**
     * Get the link to create a new term translation
     *
     * @since 1.5
     *
     * @param int    $term_id
     * @param string $taxonomy
     * @param string $post_type
     * @param object $language
     * @return string
     */
    public function get_new_term_translation_link($term_id, $taxonomy, $post_type, $language)
    {
    }
    /**
     * Returns html markup for a new term translation
     *
     * @since 1.8
     *
     * @param int    $term_id
     * @param string $taxonomy
     * @param string $post_type
     * @param object $language
     * @return string
     */
    public function new_term_translation_link($term_id, $taxonomy, $post_type, $language)
    {
    }
    /**
     * Returns html markup for a term translation link
     *
     * @since 1.4
     *
     * @param object $term_id   translation term id
     * @param string $taxonomy
     * @param string $post_type
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
    public $cache;
    // Our internal non persistent cache object
    public $options;
    public $post, $term;
    // Translated objects models
    /**
     * Constructor
     * setups translated objects sub models
     * setups filters and actions
     *
     * @since 1.2
     *
     * @param array $options Polylang options
     */
    public function __construct(&$options)
    {
    }
    /**
     * Returns the list of available languages
     * caches the list in a db transient ( except flags ), unless PLL_CACHE_LANGUAGES is set to false
     * caches the list ( with flags ) in the private property $languages
     *
     * List of parameters accepted in $args:
     *
     * hide_empty => hides languages with no posts if set to true ( defaults to false )
     * fields     => return only that field if set ( see PLL_Language for a list of fields )
     *
     * @since 0.1
     *
     * @param array $args
     * @return array|string|int list of PLL_Language objects or PLL_Language object properties
     */
    public function get_languages_list($args = array())
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
     * Returns the language by its term_id, tl_term_id, slug or locale
     *
     * @since 0.1
     *
     * @param int|string $value term_id, tl_term_id, slug or locale of the queried language
     * @return object|bool PLL_Language object, false if no language found
     */
    public function get_language($value)
    {
    }
    /**
     * Adds terms clauses to get_terms to filter them by languages - used in both frontend and admin
     *
     * @since 1.2
     *
     * @param array  $clauses the list of sql clauses in terms query
     * @param object $lang    PLL_Language object
     * @return array modified list of clauses
     */
    public function terms_clauses($clauses, $lang)
    {
    }
    /**
     * Returns post types that need to be translated
     * the post types list is cached for better better performance
     * wait for 'after_setup_theme' to apply the cache to allow themes adding the filter in functions.php
     *
     * @since 1.2
     *
     * @param bool $filter true if we should return only valid registered post types
     * @return array post type names for which Polylang manages languages and translations
     */
    public function get_translated_post_types($filter = \true)
    {
    }
    /**
     * Returns true if Polylang manages languages and translations for this post type
     *
     * @since 1.2
     *
     * @param string|array $post_type post type name or array of post type names
     * @return bool
     */
    public function is_translated_post_type($post_type)
    {
    }
    /**
     * Return taxonomies that need to be translated
     *
     * @since 1.2
     *
     * @param bool $filter true if we should return only valid registered taxonomies
     * @return array array of registered taxonomy names for which Polylang manages languages and translations
     */
    public function get_translated_taxonomies($filter = \true)
    {
    }
    /**
     * Returns true if Polylang manages languages and translations for this taxonomy
     *
     * @since 1.2
     *
     * @param string|array $tax taxonomy name or array of taxonomy names
     * @return bool
     */
    public function is_translated_taxonomy($tax)
    {
    }
    /**
     * Return taxonomies that need to be filtered ( post_format like )
     *
     * @since 1.7
     *
     * @param bool $filter true if we should return only valid registered taxonomies
     * @return array array of registered taxonomy names
     */
    public function get_filtered_taxonomies($filter = \true)
    {
    }
    /**
     * Returns true if Polylang filters this taxonomy per language
     *
     * @since 1.7
     *
     * @param string|array $tax taxonomy name or array of taxonomy names
     * @return bool
     */
    public function is_filtered_taxonomy($tax)
    {
    }
    /**
     * Returns the query vars of all filtered taxonomies
     *
     * @since 1.7
     *
     * @return array
     */
    public function get_filtered_taxonomies_query_vars()
    {
    }
    /**
     * Create a default category for a language
     *
     * @since 1.2
     *
     * @param object|string|int $lang language
     */
    public function create_default_category($lang)
    {
    }
    /**
     * It is possible to have several terms with the same name in the same taxonomy ( one per language )
     * but the native term_exists will return true even if only one exists
     * so here the function adds the language parameter
     *
     * @since 1.4
     *
     * @param string        $term_name the term name
     * @param string        $taxonomy  taxonomy name
     * @param int           $parent    parent term id
     * @param string|object $language  the language slug or object
     * @return null|int the term_id of the found term
     */
    public function term_exists($term_name, $taxonomy, $parent, $language)
    {
    }
    /**
     * Checks if a term slug exists in a given language, taxonomy, hierarchy
     *
     * @since 1.9
     * @since 2.8 Moved from PLL_Share_Term_Slug::term_exists() to PLL_Model::term_exists_by_slug()
     *
     * @param string        $slug     The term slug to test.
     * @param string|object $language The language slug or object.
     * @param string        $taxonomy Optional taxonomy name.
     * @param int           $parent   Optional parent term id.
     * @return null|int The term_id of the found term.
     */
    public function term_exists_by_slug($slug, $language, $taxonomy = '', $parent = 0)
    {
    }
    /**
     * Gets the number of posts per language in a date, author or post type archive.
     *
     * @since 1.2
     *
     * @param object $lang PLL_Language instance.
     * @param array  $q    WP_Query arguments ( accepted: post_type, m, year, monthnum, day, author, author_name, post_format, post_status ).
     * @return int
     */
    public function count_posts($lang, $q = array())
    {
    }
    /**
     * Setup the links model based on options
     *
     * @since 1.2
     *
     * @return object implementing "links_model interface"
     */
    public function get_links_model()
    {
    }
    /**
     * Some backward compatibility with Polylang < 1.8
     * allows for example to call $polylang->model->get_post_languages( $post_id ) instead of $polylang->model->post->get_language( $post_id )
     * this works but should be slower than the direct call, thus an error is triggered in debug mode
     *
     * @since 1.8
     *
     * @param string $func Function name
     * @param array  $args Function arguments
     */
    public function __call($func, $args)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Extends the PLL_Model class with methods needed only in Polylang settings pages
 *
 * @since 1.2
 */
class PLL_Admin_Model extends \PLL_Model
{
    /**
     * Adds a new language
     * Creates a default category for this language
     *
     * List of arguments that $args must contain:
     * name           -> language name ( used only for display )
     * slug           -> language code ( ideally 2-letters ISO 639-1 language code )
     * locale         -> WordPress locale. If something wrong is used for the locale, the .mo files will not be loaded...
     * rtl            -> 1 if rtl language, 0 otherwise
     * term_group     -> language order when displayed
     *
     * Optional arguments that $args can contain:
     * no_default_cat -> if set, no default category will be created for this language
     * flag           -> country code, see flags.php
     *
     * @since 1.2
     *
     * @param array $args
     * @return bool true if success / false if failed
     */
    public function add_language($args)
    {
    }
    /**
     * Delete a language
     *
     * @since 1.2
     *
     * @param int $lang_id language term_id
     */
    public function delete_language($lang_id)
    {
    }
    /**
     * Update language properties
     *
     * List of arguments that $args must contain:
     * lang_id    -> term_id of the language to modify
     * name       -> language name ( used only for display )
     * slug       -> language code ( ideally 2-letters ISO 639-1 language code
     * locale     -> WordPress locale. If something wrong is used for the locale, the .mo files will not be loaded...
     * rtl        -> 1 if rtl language, 0 otherwise
     * term_group -> language order when displayed
     *
     * Optional arguments that $args can contain:
     * flag       -> country code, see flags.php
     *
     * @since 1.2
     *
     * @param array $args
     * @return bool true if success / false if failed
     */
    public function update_language($args)
    {
    }
    /**
     * Validates data entered when creating or updating a language
     *
     * @see PLL_Admin_Model::add_language()
     *
     * @since 0.4
     *
     * @param array  $args
     * @param object $lang optional the language currently updated, the language is created if not set
     * @return bool true if success / false if failed
     */
    protected function validate_lang($args, $lang = \null)
    {
    }
    /**
     * Used to set the language of posts or terms in mass
     *
     * @since 1.2
     *
     * @param string        $type either 'post' or 'term'
     * @param array         $ids  array of post ids or term ids
     * @param object|string $lang object or slug
     */
    public function set_language_in_mass($type, $ids, $lang)
    {
    }
    /**
     * Used to create a translations groups in mass
     *
     * @since 1.6.3
     *
     * @param string $type         either 'post' or 'term'
     * @param array  $translations array of translations arrays
     */
    public function set_translation_in_mass($type, $translations)
    {
    }
    /**
     * Returns untranslated posts and terms ids ( used in settings )
     *
     * @since 0.9
     * @since 2.2.6 Add the $limit argument
     *
     * @param in $limit Max number of posts or terms to return. Defaults to -1 (no limit).
     * @return array Array made of an array of post ids and an array of term ids
     */
    public function get_objects_with_no_lang($limit = -1)
    {
    }
    /**
     * Used to delete translations or update the translations when a language slug has been modified in settings
     *
     * @since 0.5
     *
     * @param string $old_slug the old language slug
     * @param string $new_slug optional, the new language slug, if not set it means the correspondent has been deleted
     */
    public function update_translations($old_slug, $new_slug = '')
    {
    }
    /**
     * Updates the default language
     * taking care to update the default category & the nav menu locations
     *
     * @since 1.8
     *
     * @param string $slug new language slug
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
    public $model, $options;
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
     * @param object $item Menu item.
     * @return object
     */
    public function wp_setup_nav_menu_item($item)
    {
    }
    /**
     * Create temporary nav menu locations ( one per location and per language ) for all non-default language
     * to do only one time
     *
     * @since 1.2
     */
    public function create_nav_menu_locations()
    {
    }
    /**
     * Creates a temporary nav menu location from a location and a language
     *
     * @since 1.8
     *
     * @param string $loc nav menu location
     * @param object $lang
     * @return string
     */
    public function combine_location($loc, $lang)
    {
    }
    /**
     * Get nav menu locations and language from a temporary location
     *
     * @since 1.8
     *
     * @param string $loc temporary location
     * @return array
     *   'location' => nav menu location
     *   'lang'     => language slug
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
     * Filters _wp_auto_add_pages_to_menu by language
     *
     * @since 0.9.4
     *
     * @param string $new_status Transition to this post status.
     * @param string $old_status Previous post status.
     * @param object $post Post data.
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
     */
    public function lang_switch()
    {
    }
    /**
     * Prepares javascript to modify the language switcher menu item
     *
     * @since 1.1
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
     * Assign menu languages and translations based on ( temporary ) locations
     *
     * @since 1.1
     *
     * @param array $mods theme mods
     * @return unmodified $mods
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
    private static $notices = array();
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
     */
    public static function add_notice($name, $html)
    {
    }
    /**
     * Get custom notices
     *
     * @since 2.3.9
     *
     * @return array
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
     */
    public static function dismiss($notice)
    {
    }
    /**
     * Handle a click on the dismiss button
     *
     * @since 2.3.9
     */
    public function hide_notice()
    {
    }
    /**
     * Displays notices
     *
     * @since 2.3.9
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
     */
    public function dismiss_button($name)
    {
    }
    /**
     * Displays a notice if WooCommerce is activated without Polylang for WooCommerce
     *
     * @since 2.3.9
     */
    private function pllwc_notice()
    {
    }
    /**
     * Displays a notice asking for a review
     *
     * @since 2.3.9
     */
    private function review_notice()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Base class to manage the static front page and the page for posts
 *
 * @since 1.8
 */
class PLL_Static_Pages
{
    public $model, $options;
    public $page_on_front, $page_for_posts;
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
     * Stores the page on front and page for posts ids
     *
     * @since 1.8
     */
    public function init()
    {
    }
    /**
     * Modifies the page link in case the front page is not in the default language
     *
     * @since 0.7.2
     *
     * @param string $link link to the page
     * @param int    $id   post id of the page
     * @return string modified link
     */
    public function page_link($link, $id)
    {
    }
    /**
     * Adds page_on_front and page_for_posts properties to the language objects
     *
     * @since 1.8
     *
     * @param array  $languages
     * @param object $model
     */
    public static function pll_languages_list($languages, $model)
    {
    }
    /**
     * Translates page for posts
     *
     * @since 1.8
     *
     * @param int $v page for posts page id
     * @return int
     */
    public function translate_page_for_posts($v)
    {
    }
    /**
     * Fixes the oembed for the translated static front page
     * when the language page is redirected to the front page
     *
     * @since 2.6
     *
     * @param int    $post_id The post ID.
     * @param string $url     The requested URL.
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
     * Don't use the block editor for the translations of the pages for posts
     *
     * @since 2.5
     *
     * @param bool    $use_block_editor Whether the post can be edited or not.
     * @param WP_Post $post             The post being checked.
     * @return bool
     */
    public function use_block_editor_for_post($use_block_editor, $post)
    {
    }
    /**
     * Removes the editor for translations of the pages for posts
     * Removes the page template select dropdown in page attributes metabox too
     *
     * @since 2.2.2
     *
     * @param string $post_type Current post type
     * @param object $post      Current post
     */
    public function add_meta_boxes($post_type, $post)
    {
    }
    /**
     * Add post state for translations of the front page and posts page
     *
     * @since 1.8
     *
     * @param array  $post_states An array of post display states.
     * @param object $post        The current post object.
     * @return array
     */
    public function display_post_states($post_states, $post)
    {
    }
    /**
     * Refresh language cache when a static front page has been translated
     *
     * @since 1.8
     *
     * @param int    $post_id      Not used
     * @param object $post         Not used
     * @param array  $translations
     */
    public function pll_save_post($post_id, $post, $translations)
    {
    }
    /**
     * Checks if a page is translated in all languages
     *
     * @since 2.2
     *
     * @param int $page_id
     * @return bool
     */
    protected function is_page_translated($page_id)
    {
    }
    /**
     * Prevents choosing an untranslated static front page
     * Displays an error message
     *
     * @since 1.6
     *
     * @param int $page_id New page on front page id
     * @param int $old_id  Old page on front page_id
     * @return int
     */
    public function update_page_on_front($page_id, $old_id)
    {
    }
    /**
     * Displays an error message in the customizer when choosing an untranslated static front page
     *
     * @since 2.2
     *
     * @param object $validity WP_Error object
     * @param int    $page_id  New page on front page id
     * @return object
     */
    public function customize_validate_page_on_front($validity, $page_id)
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
    protected static $strings = array();
    // strings to translate
    protected static $default_strings;
    // default strings to register
    /**
     * Add filters
     *
     * @since 1.6
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
 * Admin side controller
 * accessible in $polylang global object
 *
 * Properties:
 * options              => inherited, reference to Polylang options array
 * model                => inherited, reference to PLL_Model object
 * links_model          => inherited, reference to PLL_Links_Model object
 * links                => inherited, reference to PLL_Admin_Links object
 * static_pages         => inherited, reference to PLL_Admin_Static_Pages object
 * filters_links        => inherited, reference to PLL_Filters_Links object
 * curlang              => inherited, optional, current language used to filter the content (language of the post or term being edited, equal to filter_lang otherwise)
 * filter_lang          => inherited, optional, current status of the admin languages filter (in the admin bar)
 * pref_lang            => inherited, preferred language used as default when saving posts or terms
 * posts                => reference to PLL_CRUD_Posts object
 * terms                => reference to PLL_CRUD_Terms object
 * filters              => reference to PLL_Admin_Filters object
 * filters_sanitization => reference to PLL_Filters_Sanitization object
 * filters_columns      => reference to PLL_Admin_Filters_Columns object
 * filters_post         => reference to PLL_Admin_Filters_Post object
 * filters_term         => reference to PLL_Admin_filters_Term object
 * nav_menu             => reference to PLL_Admin_Nav_Menu object
 * block_editor         => reference to PLL_Admin_Block_Editor object
 * classic_editor       => reference to PLL_Admin_Classic_Editor object
 * filters_media        => optional, reference to PLL_Admin_Filters_Media object
 *
 * @since 1.2
 */
class PLL_Admin extends \PLL_Admin_Base
{
    /**
     * Instance of PLL_Admin_Filters
     *
     * @var PLL_Admin_Filters
     */
    public $filters;
    /**
     * Instance of PLL_Admin_Filters_Columns
     *
     * @var PLL_Admin_Filters_Columns
     */
    public $filters_columns;
    /**
     * Instance of PLL_Admin_Filters_Post
     *
     * @var PLL_Admin_Filters_Post
     */
    public $filters_post;
    /**
     * Instance of PLL_Admin_filters_Term
     *
     * @var PLL_Admin_filters_Term
     */
    public $filters_term;
    /**
     * Instance of PLL_Admin_Nav_Menu
     *
     * @var PLL_Admin_Nav_Menu
     */
    public $nav_menu;
    /**
     * Instance of PLL_Admin_Filters_Media
     *
     * @var PLL_Admin_Filters_Media
     */
    public $filters_media;
    /**
     * Instance of PLL_Filters_Sanitization
     *
     * @since 2.9
     *
     * @var PLL_Filters_Sanitization
     */
    public $filters_sanitization;
    /**
     * Loads the polylang text domain
     * Setups filters and action needed on all admin pages and on plugins page
     *
     * @since 1.2
     *
     * @param object $links_model
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
     * Adds a 'settings' link in the plugins table
     *
     * @since 0.1
     *
     * @param array $links list of links associated to the plugin
     * @return array modified list of links
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
     */
    public function plugin_update_message($plugin_data, $r)
    {
    }
    /**
     * Setup filters for admin pages
     *
     * @since 1.2
     * @since 2.7 instantiate a PLL_Bulk_Translate instance.
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
 * Base class to choose the language
 *
 * @since 1.2
 */
abstract class PLL_Choose_Lang
{
    public $links_model, $model, $options;
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
     */
    public function init()
    {
    }
    /**
     * Writes language cookie
     * Loads user defined translations
     * Fires the action 'pll_language_defined'
     *
     * @since 1.2
     *
     * @param object $curlang current language
     */
    protected function set_language($curlang)
    {
    }
    /**
     * Set a cookie to remember the language.
     * Setting PLL_COOKIE to false will disable cookie although it will break some functionalities
     *
     * @since 1.5
     */
    public function maybe_setcookie()
    {
    }
    /**
     * Get the preferred language according to the browser preferences
     * Code adapted from http://www.thefutureoftheweb.com/blog/use-accept-language-header
     *
     * @since 1.8
     *
     * @return string|bool the preferred language slug or false
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
     */
    public function pre_comment_on_post($post_id)
    {
    }
    /**
     * Modifies some main query vars for home page and page for posts
     * to enable one home page ( and one page for posts ) per language
     *
     * @since 1.2
     *
     * @param object $query instance of WP_Query
     */
    public function parse_main_query($query)
    {
    }
    /**
     * Sets the current language in the query
     *
     * @since 2.2
     *
     * @param object $query
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
     */
    public function init()
    {
    }
    /**
     * Overwrites parent::set_language to remove the 'wp' action if the language is set before
     *
     * @since 1.2
     *
     * @param object $curlang current language
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
     * Sets the language for home page
     * Add the lang query var when querying archives with no language code
     *
     * @since 1.2
     *
     * @param object $query instance of WP_Query
     */
    public function parse_main_query($query)
    {
    }
    /**
     * Sets the language from content
     *
     * @since 1.2
     */
    public function wp()
    {
    }
    /**
     * If no language found by get_language_from_content, return the preferred one
     *
     * @since 0.9
     *
     * @param object|bool $lang Language found in get_language_from_content
     * @return object Language
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
    protected $index = 'index.php';
    // Need this before $wp_rewrite is created, also hardcoded in wp-includes/rewrite.php
    /**
     * Sets the language
     *
     * @since 1.8
     */
    public function init()
    {
    }
    /**
     * Finds the language according to information found in the url
     *
     * @since 1.2
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
     */
    public function maybe_setcookie()
    {
    }
    /**
     * Don't redirect according to browser preferences
     *
     * @since 1.5
     */
    public function get_preferred_language()
    {
    }
    /**
     * Adds query vars to query for home pages in all languages
     *
     * @since 1.5
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
    public $model, $curlang;
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
     */
    protected function get_term($term_id)
    {
    }
    /**
     * Filters posts query to automatically translate included ids
     *
     * @since 1.1
     *
     * @param object $query WP_Query object
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
    public $links, $links_model, $model, $options, $curlang;
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
     * Modifies custom posts links
     *
     * @since 1.6
     *
     * @param string $link post link
     * @param object $post post object
     * @return string modified post link
     */
    public function post_type_link($link, $post)
    {
    }
    /**
     * Modifies term link
     *
     * @since 0.7
     *
     * @param string $link term link
     * @param object $term term object
     * @param string $tax  taxonomy name
     * @return string modified term link
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
     * only if the post type is translated
     *
     * The filter was originally only on frontend but is needed on admin too for
     * compatibility with the archive link of the ACF link field since ACF 5.4.0
     *
     * @since 1.7.6
     *
     * @param string $link
     * @param string $post_type
     * @return string modified link
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
     * Our internal non persistent cache object
     *
     * @var PLL_Cache
     */
    public $cache;
    /**
     * Stores a list of files and functions that home_url() must not filter.
     *
     * @var array
     */
    private $black_list = array();
    /**
     * Stores a list of files and functions that home_url() must filter.
     *
     * @var array
     */
    private $white_list = array();
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
     * and caches the result
     *
     * @since 1.6
     *
     * @param string $link post link
     * @param object $post post object
     * @return string modified post link
     */
    public function post_type_link($link, $post)
    {
    }
    /**
     * Modifies filtered taxonomies ( post format like ) and translated taxonomies links
     * and caches the result
     *
     * @since 0.7
     *
     * @param string $link
     * @param object $term term object
     * @param string $tax  taxonomy name
     * @return string modified link
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
     * @return Post permalink with the correct domain.
     */
    public function shortlink($link, $post_id)
    {
    }
    /**
     * Outputs references to translated pages ( if exists ) in the html head section
     *
     * @since 0.1
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
    /**
     * If the language code is not in agreement with the language of the content
     * redirects incoming links to the proper URL to avoid duplicate content
     *
     * @since 0.9.6
     *
     * @param string $requested_url optional
     * @param bool   $do_redirect   optional, whether to perform the redirection or not
     * @return string if redirect is not performed
     */
    public function check_canonical_url($requested_url = '', $do_redirect = \true)
    {
    }
    /**
     * Returns the link to the paged page if requested.
     *
     * @since 2.9
     *
     * @param string $redirect_url The url to redirect to.
     * @return string
     */
    protected function maybe_add_page_to_redirect_url($redirect_url)
    {
    }
    /**
     * Returns the term_id of the requested term.
     *
     * @since 2.9
     *
     * @param object $tax_query An instance of WP_Tax_Query.
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
     * @param object $tax_query An instance of WP_Tax_Query.
     * @return string A taxonomy slug
     */
    protected function get_queried_taxonomy($tax_query)
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
    public $links_model, $curlang;
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
     * Adds the language information in the search form
     * Does not work if searchform.php ( prior to WP 3.6 ) is used or if the search form is hardcoded in another template file
     *
     * @since 0.1
     *
     * @param string $form Search form
     * @return string Modified search form
     */
    public function get_search_form($form)
    {
    }
    /**
     * Adds the language information in admin bar search form
     *
     * @since 1.2
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
     */
    public function admin_bar_search_menu($wp_admin_bar)
    {
    }
    /**
     * Allows modifying the search form if it does not pass get_search_form
     *
     * @since 0.1
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
    public $cache;
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
     * Filters sticky posts by current language
     *
     * @since 0.8
     *
     * @param array $posts list of sticky posts ids
     * @return array modified list of sticky posts ids
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
    public $curlang;
    public $cache;
    // Our internal non persistent cache object
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
     * Returns the url of the translation ( if exists ) of the current page
     *
     * @since 0.1
     *
     * @param object $language
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
     * Returns the home url in the right language
     *
     * @since 0.1
     *
     * @param object $language  Optional, defaults to current language
     * @param bool   $is_search Optional, whether we need the home url for a search form, defaults to false
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
     * Sort menu items by menu order
     *
     * @since 1.7.9
     *
     * @param object $a The first object to compare
     * @param object $b The second object to compare
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
     * Splits the one item of backend in several items on frontend
     * take care to menu_order as it is used later in wp_nav_menu
     *
     * @since 1.1.1
     *
     * @param array $items menu items
     * @return array modified items
     */
    public function wp_get_nav_menu_items($items)
    {
    }
    /**
     * Returns the ancestors of a menu item
     *
     * @since 1.1.1
     *
     * @param object $item
     * @return array ancestors ids
     */
    public function get_ancestors($item)
    {
    }
    /**
     * Removes current-menu and current-menu-ancestor classes to lang switcher when not on the home page
     *
     * @since 1.1.1
     *
     * @param array $items
     * @return array modified menu items
     */
    public function wp_nav_menu_objects($items)
    {
    }
    /**
     * Adds hreflang attribute for the language switcher menu items
     * available since WP 3.6
     *
     * @since 1.1
     *
     * @param array  $atts
     * @param object $item
     * @return array modified $atts
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
     * Init the filters
     *
     * @since 1.8
     */
    public function pll_language_defined()
    {
    }
    /**
     * Translates the page_id query var when the site root page is requested
     *
     * @since 1.8
     */
    public function pll_home_requested()
    {
    }
    /**
     * Translates page on front
     *
     * @since 1.8
     *
     * @param int $v page on front page id
     * @return int
     */
    public function translate_page_on_front($v)
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
     * Translates the url of the page on front and page for posts
     *
     * @since 1.8
     *
     * @param string $url               not used
     * @param object $language          language in which we want the translation
     * @param int    $queried_object_id id of the queried object
     * @return string
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
     * @param object $query
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
     * @param bool|object $lang
     * @param object      $query
     * @return bool|object
     */
    public function page_on_front_query($lang, $query)
    {
    }
    /**
     * Setups query vars when requesting a posts page
     *
     * @since 1.8
     *
     * @param bool|object $lang
     * @param object      $query
     * @return bool|object
     */
    public function page_for_posts_query($lang, $query)
    {
    }
    /**
     * Get queried page_id ( if exists )
     * If permalinks are used, WordPress does set and use $query->queried_object_id and sets $query->query_vars['page_id'] to 0
     * and does set and use $query->query_vars['page_id'] if permalinks are not used :(
     *
     * @since 1.5
     *
     * @param object $query instance of WP_Query
     * @return int page_id
     */
    protected function get_page_id($query)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Frontend controller
 * accessible as $polylang global object
 *
 * Properties:
 * options        => inherited, reference to Polylang options array
 * model          => inherited, reference to PLL_Model object
 * links_model    => inherited, reference to PLL_Links_Model object
 * links          => reference to PLL_Links object
 * static_pages   => reference to PLL_Frontend_Static_Pages object
 * choose_lang    => reference to PLL_Choose_Lang object
 * curlang        => current language
 * filters        => reference to PLL_Frontend_Filters object
 * filters_links  => reference to PLL_Frontend_Filters_Links object
 * filters_search => reference to PLL_Frontend_Filters_Search object
 * posts          => reference to PLL_CRUD_Posts object
 * terms          => reference to PLL_CRUD_Terms object
 * nav_menu       => reference to PLL_Frontend_Nav_Menu object
 * auto_translate => optional, reference to PLL_Auto_Translate object
 *
 * @since 1.2
 */
class PLL_Frontend extends \PLL_Base
{
    public $curlang;
    public $links, $choose_lang, $filters, $filters_search, $nav_menu, $auto_translate;
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param object $links_model
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
     */
    public function pll_language_defined()
    {
    }
    /**
     * When querying multiple taxonomies, makes sure that the language is not the queried object
     *
     * @since 1.8
     *
     * @param object $query WP_Query object
     */
    public function parse_tax_query($query)
    {
    }
    /**
     * Modifies some query vars to "hide" that the language is a taxonomy and avoid conflicts
     *
     * @since 1.2
     *
     * @param object $query WP_Query object
     */
    public function parse_query($query)
    {
    }
    /**
     * Auto translate posts and terms ids
     *
     * @since 1.2
     */
    public function auto_translate()
    {
    }
    /**
     * Resets some variables when switching blog
     * Overrides parent method
     *
     * @since 1.5.1
     *
     * @param int $new_blog
     * @param int $old_blog
     */
    public function switch_blog($new_blog, $old_blog)
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
    protected $blog_id, $cache;
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
     */
    public static function define_constants()
    {
    }
    /**
     * Polylang initialization
     * setups models and separate admin and frontend
     *
     * @since 1.2
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
     * Parses the cookie parameters
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
 * Adds actions and filters related to languages when creating, updating or deleting posts
 * Actions a filters used when reaing posts are handled separately
 *
 * @since 2.4
 */
class PLL_CRUD_Posts
{
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
     */
    public function set_default_language($post_id)
    {
    }
    /**
     * Called when a post ( or page ) is saved, published or updated
     *
     * @since 0.1
     * @since 2.3 Does not save the language and translations anymore, unless the post has no language yet
     *
     * @param int    $post_id
     * @param object $post
     */
    public function save_post($post_id, $post)
    {
    }
    /**
     * Make sure saved terms are in the right language (especially tags with same name in different languages)
     *
     * @since 2.3
     *
     * @param int    $object_id Object ID.
     * @param array  $terms     An array of object terms.
     * @param array  $tt_ids    An array of term taxonomy IDs.
     * @param string $taxonomy  Taxonomy slug.
     */
    public function set_object_terms($object_id, $terms, $tt_ids, $taxonomy)
    {
    }
    /**
     * Make sure that the post parent is in the correct language when using bulk edit
     *
     * @since 1.8
     *
     * @param int   $post_parent Post parent ID.
     * @param int   $post_id     Post ID.
     * @param array $new_postarr Array of parsed post data.
     * @param array $postarr     Array of sanitized, but otherwise unmodified post data.
     * @return int
     */
    public function wp_insert_post_parent($post_parent, $post_id, $new_postarr, $postarr)
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
     */
    public function delete_post($post_id)
    {
    }
    /**
     * Prevents WP deleting files when there are still media using them
     * Thanks to Bruno "Aesqe" Babic and its plugin file gallery in which I took all the ideas for this function
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
    public $model, $curlang, $filter_lang, $pref_lang;
    private $tax_query_lang;
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
     */
    protected function set_default_language($term_id, $taxonomy)
    {
    }
    /**
     * Called when a category or post tag is created or edited
     * Does nothing except on taxonomies which are filterable
     *
     * @since 0.1
     *
     * @param int    $term_id
     * @param int    $tt_id    Term taxonomy id
     * @param string $taxonomy
     */
    public function save_term($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     * Get the language(s) to filter get_terms
     *
     * @since 1.7.6
     *
     * @param array $taxonomies queried taxonomies
     * @param array $args       get_terms arguments
     * @return object|string|bool the language(s) to use in the filter, false otherwise
     */
    protected function get_queried_language($taxonomies, $args)
    {
    }
    /**
     * Adds language dependent cache domain when querying terms
     * Useful as the 'lang' parameter is not included in cache key by WordPress
     *
     * @since 1.3
     *
     * @param array $args
     * @param array $taxonomies
     * @return array modified arguments
     */
    public function get_terms_args($args, $taxonomies)
    {
    }
    /**
     * Filters categories and post tags by language(s) when needed on admin side
     *
     * @since 0.2
     *
     * @param array $clauses    list of sql clauses
     * @param array $taxonomies list of taxonomies
     * @param array $args       get_terms arguments
     * @return array modified sql clauses
     */
    public function terms_clauses($clauses, $taxonomies, $args)
    {
    }
    /**
     * Sets the WP_Term_Query language when doing a WP_Query
     * Needed since WP 4.9
     *
     * @since 2.3.2
     *
     * @param object $query WP_Query object
     */
    public function set_tax_query_lang($query)
    {
    }
    /**
     * Removes the WP_Term_Query language filter for WP_Query
     * Needed since WP 4.9
     *
     * @since 2.3.2
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
     * @param int $term_id
     */
    public function delete_term($term_id)
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
 * A language object is made of two terms in 'language' and 'term_language' taxonomies.
 * Manipulating only one object per language instead of two terms should make things easier.
 *
 * @since 1.2
 */
class PLL_Language
{
    /**
     * Id of the term in 'language' taxonomy.
     *
     * @var int
     */
    public $term_id;
    /**
     * Language name. Ex: English.
     *
     * @var string
     */
    public $name;
    /**
     * Language code used in url. Ex: en.
     *
     * @var string
     */
    public $slug;
    /**
     * Order of the language when displayed in a list of languages.
     *
     * @var int
     */
    public $term_group;
    /**
     * Term taxonomy id in 'language' taxonomy.
     *
     * @var int
     */
    public $term_taxonomy_id;
    /**
     * Number of posts and pages in that language.
     *
     * @var int
     */
    public $count;
    /**
     * Id of the term in 'term_language' taxonomy.
     *
     * @var int
     */
    public $tl_term_id;
    /**
     * Term taxonomy id in 'term_language' taxonomy.
     *
     * @var int
     */
    public $tl_term_taxonomy_id;
    /**
     * Number of terms in that language.
     *
     * @var int
     */
    public $tl_count;
    /**
     * WordPress language locale. Ex: en_US.
     *
     * @var string
     */
    public $locale;
    /**
     * 1 if the language is rtl, 0 otherwise.
     *
     * @var int
     */
    public $is_rtl;
    /**
     * W3C locale.
     *
     * @var string.
     */
    public $w3c;
    /**
     * Facebook locale.
     *
     * @var string.
     */
    public $facebook;
    /**
     * Home url in this language.
     *
     * @var string
     */
    public $home_url;
    /**
     * Home url to use in search forms.
     *
     * @var string
     */
    public $search_url;
    /**
     * Host corresponding to this language.
     *
     * @var string
     */
    public $host;
    /**
     * Id of the post storing strings translations.
     *
     * @var int
     */
    public $mo_id;
    /**
     * Id of the page on front in this language ( set from pll_languages_list filter ).
     *
     * @var int
     */
    public $page_on_front;
    /**
     * Id of the page for posts in this language ( set from pll_languages_list filter ).
     *
     * @var int
     */
    public $page_for_posts;
    /**
     * Code of the flag.
     *
     * @var string
     */
    public $flag_code;
    /**
     * Url of the flag.
     *
     * @var string
     */
    public $flag_url;
    /**
     * Html markup of the flag.
     *
     * @var string
     */
    public $flag;
    /**
     * Url of the custom flag if it exists.
     *
     * @var string
     */
    protected $custom_flag_url;
    /**
     * Html markup of the custom flag if it exists.
     *
     * @var string
     */
    protected $custom_flag;
    /**
     * Constructor: builds a language object given its two corresponding terms in 'language' and 'term_language' taxonomies.
     *
     * @since 1.2
     *
     * @param object|array $language      Term in 'language' taxonomy or language object properties stored as an array.
     * @param object       $term_language Corresponding 'term_language' term.
     */
    public function __construct($language, $term_language = \null)
    {
    }
    /**
     * Get the flag informations:
     * 'url'    => Flag url.
     * 'src'    => Optional, src attribute value if different of the url, for example if base64 encoded.
     * 'width'  => Optional, flag width in pixels.
     * 'height' => Optional, flag height in pixels.
     *
     * @since 2.6
     *
     * @param string $code Flag code.
     * @return array Flag informations.
     */
    public static function get_flag_informations($code)
    {
    }
    /**
     * Sets flag_url and flag properties.
     *
     * @since 1.2
     */
    public function set_flag()
    {
    }
    /**
     * Get HTML code for flag.
     *
     * @since 2.7
     *
     * @param array  $flag  Flag properties: src, width and height.
     * @param string $title Optional title attribute.
     * @param string $alt   Optional alt attribute.
     */
    public static function get_flag_html($flag, $title = '', $alt = '')
    {
    }
    /**
     * Returns the html of the custom flag if any, or the default flag otherwise.
     *
     * @since 2.8
     */
    public function get_display_flag()
    {
    }
    /**
     * Returns the url of the custom flag if any, or the default flag otherwise.
     *
     * @since 2.8
     */
    public function get_display_flag_url()
    {
    }
    /**
     * Updates post and term count.
     *
     * @since 1.2
     */
    public function update_count()
    {
    }
    /**
     * Set home_url and search_url properties.
     *
     * @since 1.3
     *
     * @param string $search_url Home url to use in search forms.
     * @param string $home_url   Home url.
     */
    public function set_home_url($search_url, $home_url)
    {
    }
    /**
     * Sets the scheme of the home url and the flag urls.
     *
     * This can't be cached across pages.
     *
     * @since 2.8
     */
    public function set_url_scheme()
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
     */
    public function get_locale($filter = 'raw')
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
    public $id, $name, $license_key, $license_data;
    private $file, $version, $author;
    private $api_url = 'https://polylang.pro';
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
     * Activate the license key
     *
     * @since 1.9
     *
     * @param string $license_key activation key
     * @return object updated $this
     */
    public function activate_license($license_key)
    {
    }
    /**
     * Deactivate the license key
     *
     * @since 1.9
     *
     * @return object updated $this
     */
    public function deactivate_license()
    {
    }
    /**
     * Check if license key is valid
     *
     * @since 1.9
     *
     * @return object updated $this
     */
    public function check_license()
    {
    }
    /**
     * Sends an api request to check, activate or deactivate the license
     * Updates the licenses option according to the status
     *
     * @since 1.9
     *
     * @param string $request check_license | activate_license | deactivate_license
     */
    private function api_request($request)
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
 * Links model abstract class
 *
 * @since 1.5
 */
abstract class PLL_Links_Model
{
    public $model, $options;
    public $home;
    // used to store the home url before it is filtered
    public $using_permalinks;
    /**
     * Constructor
     *
     * @since 1.5
     *
     * @param object $model PLL_Model instance
     */
    public function __construct(&$model)
    {
    }
    /**
     * Changes the language code in url
     *
     * @since 1.5
     *
     * @param string $url  url to modify
     * @param object $lang language
     * @return string modified url
     */
    public function switch_language_in_link($url, $lang)
    {
    }
    /**
     * Get hosts managed on the website
     *
     * @since 1.5
     *
     * @return array list of hosts
     */
    public function get_hosts()
    {
    }
    /**
     * Returns the home url
     *
     * @since 1.3.1
     *
     * @param object $lang PLL_Language object
     * @return string
     */
    public function home_url($lang)
    {
    }
    /**
     * Sets the home urls
     *
     * @since 1.8
     *
     * @param object $language
     */
    protected function set_home_url($language)
    {
    }
    /**
     * Sets the home urls and flags before the languages are persistently cached
     *
     * @since 1.8
     *
     * @param array $languages array of PLL_Language objects
     * @return array
     */
    public function pll_languages_list($languages)
    {
    }
    /**
     * Sets the home urls when not cached
     * Sets the home urls scheme
     *
     * @since 1.8
     *
     * @param array $languages array of PLL_Language objects
     * @return array
     */
    public function pll_after_languages_cache($languages)
    {
    }
    /**
     * Adds our domains or subdomains to allowed hosts for safe redirection
     *
     * @since 1.4.3
     *
     * @param array $hosts allowed hosts
     * @return array
     */
    public function allowed_redirect_hosts($hosts)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Links model base class when using pretty permalinks
 *
 * @since 1.6
 */
abstract class PLL_Links_Permalinks extends \PLL_Links_Model
{
    public $using_permalinks = \true;
    protected $index = 'index.php';
    // Need this before $wp_rewrite is created, also hardcoded in wp-includes/rewrite.php
    protected $root, $use_trailing_slashes;
    protected $always_rewrite = array('date', 'root', 'comments', 'search', 'author');
    /**
     * Constructor
     *
     * @since 1.8
     *
     * @param object $model PLL_Model instance
     */
    public function __construct(&$model)
    {
    }
    /**
     * Returns the link to the first page when using pretty permalinks
     *
     * @since 1.2
     *
     * @param string $url url to modify
     * @return string modified url
     */
    public function remove_paged_from_link($url)
    {
    }
    /**
     * Returns the link to the paged page when using pretty permalinks
     *
     * @since 1.5
     *
     * @param string $url  url to modify
     * @param int    $page
     * @return string modified url
     */
    public function add_paged_to_link($url, $page)
    {
    }
    /**
     * Returns the home url
     *
     * @since 1.3.1
     *
     * @param object $lang PLL_Language object
     * @return string
     */
    public function home_url($lang)
    {
    }
    /**
     * Returns the static front page url
     *
     * @since 1.8
     *
     * @param object $lang
     * @return string
     */
    public function front_page_url($lang)
    {
    }
    /**
     * Prepares rewrite rules filters
     *
     * @since 1.6
     */
    public function get_rewrite_rules_filters()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Links model for use when using one domain or subdomain per language
 *
 * @since 2.0
 */
abstract class PLL_Links_Abstract_Domain extends \PLL_Links_Permalinks
{
    /**
     * Constructor
     *
     * @since 2.0
     *
     * @param object $model PLL_Model instance.
     */
    public function __construct(&$model)
    {
    }
    /**
     * Returns the language based on language code in url
     * links_model interface
     *
     * @since 1.2
     * @since 2.0 add $url argument
     *
     * @param string $url optional, defaults to current url
     * @return string language slug
     */
    public function get_language_from_url($url = '')
    {
    }
    /**
     * Sets the home urls
     *
     * @since 2.2
     *
     * @param object $language
     */
    protected function set_home_url($language)
    {
    }
    /**
     * Returns the current site url
     *
     * @since 1.8
     *
     * @param string $url
     * @return string
     */
    public function site_url($url)
    {
    }
    /**
     * Fix the domain for upload directory
     *
     * @since 2.0.6
     *
     * @param array $uploads
     * @return array
     */
    public function upload_dir($uploads)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Links model for default permalinks
 * for example mysite.com/?somevar=something&lang=en
 * implements the "links_model interface"
 *
 * @since 1.2
 */
class PLL_Links_Default extends \PLL_Links_Model
{
    public $using_permalinks = \false;
    /**
     * Adds language information to an url
     * links_model interface
     *
     * @since 1.2
     *
     * @param string $url  url to modify
     * @param object $lang language
     * @return string modified url
     */
    public function add_language_to_link($url, $lang)
    {
    }
    /**
     * Removes the language information from an url
     * links_model interface
     *
     * @since 1.2
     *
     * @param string $url url to modify
     * @return string modified url
     */
    public function remove_language_from_link($url)
    {
    }
    /**
     * Returns the link to the first page
     * links_model interface
     *
     * @since 1.2
     *
     * @param string $url url to modify
     * @return string modified url
     */
    public function remove_paged_from_link($url)
    {
    }
    /**
     * Returns the link to the paged page when using pretty permalinks
     *
     * @since 1.5
     *
     * @param string $url  url to modify
     * @param int    $page
     * @return string modified url
     */
    public function add_paged_to_link($url, $page)
    {
    }
    /**
     * Gets the language slug from the url if present
     * links_model interface
     *
     * @since 1.2
     * @since 2.0 add $url argument
     *
     * @param string $url optional, defaults to current url
     * @return string language slug
     */
    public function get_language_from_url($url = '')
    {
    }
    /**
     * Returns the static front page url
     *
     * @since 1.8
     *
     * @param object $lang
     * @return string
     */
    public function front_page_url($lang)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Links model for use when the language code is added in url as a directory
 * for example mysite.com/en/something
 * implements the "links_model interface"
 *
 * @since 1.2
 */
class PLL_Links_Directory extends \PLL_Links_Permalinks
{
    protected $home_relative;
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param object $model PLL_Model instance
     */
    public function __construct(&$model)
    {
    }
    /**
     * Called only at first object creation to avoid duplicating filters when switching blog
     *
     * @since 1.6
     */
    public function init()
    {
    }
    /**
     * Adds the language code in url
     * links_model interface
     *
     * @since 1.2
     *
     * @param string $url  url to modify
     * @param object $lang language
     * @return string modified url
     */
    public function add_language_to_link($url, $lang)
    {
    }
    /**
     * Returns the url without language code
     * links_model interface
     *
     * @since 1.2
     *
     * @param string $url url to modify
     * @return string modified url
     */
    public function remove_language_from_link($url)
    {
    }
    /**
     * Returns the language based on language code in url
     * links_model interface
     *
     * @since 1.2
     * @since 2.0 add $url argument
     *
     * @param string $url optional, defaults to current url
     * @return string language slug
     */
    public function get_language_from_url($url = '')
    {
    }
    /**
     * Returns the home url
     * links_model interface
     *
     * @since 1.3.1
     *
     * @param object $lang PLL_Language object
     * @return string
     */
    public function home_url($lang)
    {
    }
    /**
     * Optionally removes 'language' in permalinks so that we get http://www.myblog/en/ instead of http://www.myblog/language/en/
     *
     * @since 1.2
     */
    public function add_permastruct()
    {
    }
    /**
     * Prepares rewrite rules filters
     *
     * @since 0.8.1
     *
     * @param array $pre not used
     * @return unmodified $pre
     */
    public function prepare_rewrite_rules($pre)
    {
    }
    /**
     * The rewrite rules !
     * always make sure the default language is at the end in case the language information is hidden for default language
     * thanks to brbrbr http://wordpress.org/support/topic/plugin-polylang-rewrite-rules-not-correct
     *
     * @since 0.8.1
     *
     * @param array $rules rewrite rules
     * @return array modified rewrite rules
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
 * for example mysite.com/sth and mysite.fr/qqch
 * implements the "links_model interface"
 *
 * @since 1.2
 */
class PLL_Links_Domain extends \PLL_Links_Abstract_Domain
{
    /**
     * Constructor
     *
     * @since 1.8
     *
     * @param object $model PLL_Model instance
     */
    public function __construct(&$model)
    {
    }
    /**
     * Adds the language code in url
     * links_model interface
     *
     * @since 1.2
     *
     * @param string $url  url to modify
     * @param object $lang language
     * @return string modified url
     */
    public function add_language_to_link($url, $lang)
    {
    }
    /**
     * Returns the url without language code
     * links_model interface
     *
     * @since 1.2
     *
     * @param string $url url to modify
     * @return string modified url
     */
    public function remove_language_from_link($url)
    {
    }
    /**
     * Returns the home url
     * links_model interface
     *
     * @since 1.3.1
     *
     * @param object $lang PLL_Language object
     * @return string
     */
    public function home_url($lang)
    {
    }
    /**
     * Get hosts managed on the website
     *
     * @since 1.5
     *
     * @return array list of hosts
     */
    public function get_hosts()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Links model for use when the language code is added in url as a subdomain
 * for example en.mysite.com/something
 * implements the "links_model interface"
 *
 * @since 1.2
 */
class PLL_Links_Subdomain extends \PLL_Links_Abstract_Domain
{
    protected $www;
    /**
     * Constructor
     *
     * @since 1.7.4
     *
     * @param object $model PLL_Model instance
     */
    public function __construct(&$model)
    {
    }
    /**
     * Adds the language code in url
     * links_model interface
     *
     * @since 1.2
     *
     * @param string $url  url to modify
     * @param object $lang language
     * @return string modified url
     */
    public function add_language_to_link($url, $lang)
    {
    }
    /**
     * Returns the url without language code
     * links_model interface
     *
     * @since 1.2
     *
     * @param string $url url to modify
     * @return string modified url
     */
    public function remove_language_from_link($url)
    {
    }
    /**
     * Get hosts managed on the website
     *
     * @since 1.5
     *
     * @return array list of hosts
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
 */
class PLL_MO extends \MO
{
    /**
     * Registers the polylang_mo custom post type, only at first object creation
     *
     * @since 1.2
     */
    public function __construct()
    {
    }
    /**
     * Writes a PLL_MO object into a custom post meta
     *
     * @since 1.2
     *
     * @param object $lang The language in which we want to export strings
     */
    public function export_to_db($lang)
    {
    }
    /**
     * Reads a PLL_MO object from a custom post meta
     *
     * @since 1.2
     *
     * @param object $lang The language in which we want to get strings
     */
    public function import_from_db($lang)
    {
    }
    /**
     * Returns the post id of the post storing the strings translations
     *
     * @since 1.4
     *
     * @param object $lang
     * @return int
     */
    public static function get_id($lang)
    {
    }
    /**
     * Invalidate the cache when adding a new language
     *
     * @since 2.0.5
     */
    public function clean_cache()
    {
    }
    /**
     * Deletes a string
     *
     * @since 2.9
     *
     * @param string $string The source string to remove from the translations.
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
    protected static $instance;
    // For singleton
    protected $default_locale;
    protected $list_textdomains = array();
    // All text domains
    public $labels = array();
    // Post types and taxonomies labels to translate
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
     * @return object
     */
    public static function instance()
    {
    }
    /**
     * Loads text domains
     *
     * @since 0.1
     */
    public function load_textdomains()
    {
    }
    /**
     * FIXME: Backward compatibility with Polylang for WooCommerce < 0.3.4
     * Was formerly hooked to the filter 'override_load_textdomain'
     *
     * @since 0.1
     *
     * @param bool $bool Whether to override the .mo file loading.
     * @return bool
     */
    public function mofile($bool)
    {
    }
    /**
     * Saves all text domains in a table for later usage
     * It replaces the 'override_load_textdomain' filter used since 0.1
     *
     * @since 2.0.4
     *
     * @param string $mofile translation file name
     * @param string $domain text domain name
     * @return bool
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
     * Translates post types and taxonomies labels once the language is known
     *
     * @since 0.9
     *
     * @param object $type either a post type or a taxonomy
     */
    public function translate_labels($type)
    {
    }
    /**
     * Allows Polylang to be the first plugin loaded ;- )
     *
     * @since 1.2
     *
     * @param array $plugins list of active plugins
     * @return array list of active plugins
     */
    public function make_polylang_first($plugins)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to manage WP pointers
 * offers the possibility to have customized buttons
 *
 * @since 1.7.7
 * @deprecated 2.3.9
 */
class PLL_Pointer
{
    protected $args;
    /**
     * Constructor
     * enqueues the pointer script
     *
     * List of parameters accepted in $args:
     *
     * pointer  => required, unique identifier of the pointer
     * id       => required, the pointer will be attached to this html id
     * position => optional array, if used both sub parameters are required
     *   edge   => 'top' or 'bottom'
     *   align  => 'right' or 'left'
     * width    => optional, the width in px
     * title    => required, title
     * content  => required, content
     * buttons  => optional array of arrays, by default the pointer uses the standard dismiss button offered by WP
     *   label  => the label of the button
     *   link   => optional link for the button. By default, the button just dismisses the pointer
     *
     * @since 1.7.7
     *
     * @param array $args
     */
    public function __construct($args)
    {
    }
    /**
     * Enqueue javascripts and styles if the pointer has not been dismissed
     *
     * @since 1.7.7
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Adds the javascript of our pointer to the page
     *
     * @since 1.7.7
     */
    public function print_js()
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
     * Constructor
     *
     * @since 2.2
     *
     * @param array  $query Reference to the WP_Query object
     * @param object $model
     */
    public function __construct(&$query, &$model)
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
     * Sets the language in query
     * Optimized for ( needs ) WP 3.5+
     *
     * @since 2.2
     *
     * @param object $lang
     */
    public function set_language($lang)
    {
    }
    /**
     * Add the language in query after it has checked that it won't conflict with other query vars
     *
     * @since 2.2
     *
     * @param object $lang Language
     */
    public function filter_query($lang)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * REST API controller
 * accessible as $polylang global object
 *
 * Properties:
 * options        => inherited, reference to Polylang options array
 * model          => inherited, reference to PLL_Model object
 * links_model    => inherited, reference to PLL_Links_Model object
 * links          => reference to PLL_Admin_Links object
 * static_pages   => reference to PLL_Static_Pages object
 * filters        => reference to PLL_Frontend_Filters object
 * filters_links  => reference to PLL_Filters_Links object
 * posts          => reference to PLL_CRUD_Posts object
 * terms          => reference to PLL_CRUD_Terms object
 *
 * @since 2.6
 */
class PLL_REST_Request extends \PLL_Base
{
    public $links, $static_pages, $posts, $terms, $filters, $filters_links;
    /**
     * Setup filters
     *
     * @since 2.6
     */
    public function init()
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
     * Get the language elements for use in a walker
     *
     * @see PLL_Switcher::the_languages() for the list of parameters accepted in $args
     *
     * @since 1.2
     *
     * @param object $links instance of PLL_Frontend_Links
     * @param array  $args
     * @return array
     */
    protected function get_elements($links, $args)
    {
    }
    /**
     * Displays a language switcher
     * or returns the raw elements to build a custom language switcher
     *
     * List of parameters accepted in $args:
     *
     * dropdown               => the list is displayed as dropdown if set, defaults to 0
     * echo                   => echoes the list if set to 1, defaults to 1
     * hide_if_empty          => hides languages with no posts ( or pages ) if set to 1, defaults to 1
     * show_flags             => displays flags if set to 1, defaults to 0
     * show_names             => show language names if set to 1, defaults to 1
     * display_names_as       => whether to display the language name or its slug, valid options are 'slug' and 'name', defaults to name
     * force_home             => will always link to home in translated language if set to 1, defaults to 0
     * hide_if_no_translation => hide the link if there is no translation if set to 1, defaults to 0
     * hide_current           => hide the current language if set to 1, defaults to 0
     * post_id                => returns links to translations of post defined by post_id if set, defaults not set
     * raw                    => return a raw array instead of html markup if set to 1, defaults to 0
     * item_spacing           => whether to preserve or discard whitespace between list items, valid options are 'preserve' and 'discard', defaults to preserve
     * admin_render           => allows to force the current language code in an admin context if set, default to 0. Need to set the admin_current_lang argument below
     * admin_current_lang     => the current language code in an admin context. Need to set the admin_render to 1, defaults not set
     *
     * @since 0.1
     *
     * @param object $links instance of PLL_Frontend_Links
     * @param array  $args
     * @return string|array either the html markup of the switcher or the raw elements to build a custom language switcher
     */
    public function the_languages($links, $args = '')
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
     * Array of option keys to translate.
     *
     * @var array
     */
    private $keys;
    /**
     * Array of updated strings.
     *
     * @var array
     */
    private $updated_strings = array();
    /**
     * Constructor
     *
     * @since 2.9
     *
     * @param string $name Option name.
     * @param object $keys Recursive array of option keys to translate in the form:
     *   array(
     *     'option_key_to_translate_1' => 1,
     *     'option_key_to_translate_2' => 1,
     *     'my_group' => array(
     *       'sub_key_to_translate_1' => 1,
     *       'sub_key_to_translate_2' => 1,
     *     ),
     *   )
     *   Note: only keys are interpreted. Any scalar can be used as values.
     * @param string $args {
     *   Optional. Array of arguments for registering the option.
     *
     *   @type string $context           The group in which the strings will be registered.
     *   @type string $sanitize_callback A callback function that sanitizes the option's value.
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
     * @param array|string $values Either a string to translate or a list of strings to translate.
     * @param array|bool   $key    Array of option keys to translate.
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
     * @param array      $values  Option value.
     * @param array|bool $key     Array of option keys to translate.
     */
    protected function register_string_recursive($context, $option, $values, $key)
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
 * @package Polylang
 */
/**
 * Setups the objects languages and translations model
 *
 * @since 1.8
 */
abstract class PLL_Translated_Object
{
    public $model;
    protected $object_type, $type, $tax_language, $tax_translations, $tax_tt;
    /**
     * Constructor
     *
     * @since 1.8
     *
     * @param object $model
     */
    public function __construct(&$model)
    {
    }
    /**
     * Wrap wp_get_object_terms to cache it and return only one object
     * inspired by the function get_the_terms
     *
     * @since 1.2
     *
     * @param int    $object_id post_id or term_id
     * @param string $taxonomy  Polylang taxonomy depending if we are looking for a post ( or term ) language ( or translation )
     * @return bool|object the term associated to the object in the requested taxonomy if exists, false otherwise
     */
    public function get_object_term($object_id, $taxonomy)
    {
    }
    /**
     * Tells whether a translation term must be updated
     *
     * @since 2.3
     *
     * @param array $id           Post id or term id
     * @param array $translations An associative array of translations with language code as key and translation id as value
     */
    protected function should_update_translation_group($id, $translations)
    {
    }
    /**
     * Saves translations for posts or terms
     *
     * @since 0.5
     *
     * @param int   $id           Post id or term id
     * @param array $translations An associative array of translations with language code as key and translation id as value
     */
    public function save_translations($id, $translations)
    {
    }
    /**
     * Deletes a translation of a post or term
     *
     * @since 0.5
     *
     * @param int $id post id or term id
     */
    public function delete_translation($id)
    {
    }
    /**
     * Returns an array of translations of a post or term
     *
     * @since 0.5
     *
     * @param int $id post id or term id
     * @return array an associative array of translations with language code as key and translation id as value
     */
    public function get_translations($id)
    {
    }
    /**
     * Returns the id of the translation of a post or term
     *
     * @since 0.5
     *
     * @param int           $id   post id or term id
     * @param object|string $lang object or slug
     * @return bool|int post id or term id of the translation, false if there is none
     */
    public function get_translation($id, $lang)
    {
    }
    /**
     * Among the object and its translations, returns the id of the object which is in $lang
     *
     * @since 0.1
     *
     * @param int               $id   post id or term id
     * @param int|string|object $lang language ( term_id or slug or object )
     * @return bool|int the translation post id  or term id if exists, otherwise the post id or term id, false if the post has no language
     */
    public function get($id, $lang)
    {
    }
    /**
     * A where clause to add to sql queries when filtering by language is needed directly in query
     *
     * @since 1.2
     *
     * @param object|array|string $lang a PLL_Language object or a comma separated list of language slug or an array of language slugs
     * @return string where clause
     */
    public function where_clause($lang)
    {
    }
    /**
     * Returns ids of objects in a language similarly to get_objects_in_term for a taxonomy
     * faster than get_objects_in_term as it avoids a JOIN
     *
     * @since 1.4
     *
     * @param object $lang a PLL_Language object
     * @return array
     */
    public function get_objects_in_language($lang)
    {
    }
    /**
     * Check if a user can synchronize translations
     *
     * @since 2.6
     *
     * @param int $id Object id
     * @return bool
     */
    public function current_user_can_synchronize($id)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Setups the posts languages and translations model
 *
 * @since 1.8
 */
class PLL_Translated_Post extends \PLL_Translated_Object
{
    /**
     * Constructor
     *
     * @since 1.8
     *
     * @param object $model
     */
    public function __construct(&$model)
    {
    }
    /**
     * Store the post language in the database
     *
     * @since 0.6
     *
     * @param int               $post_id post id
     * @param int|string|object $lang    language ( term_id or slug or object )
     */
    public function set_language($post_id, $lang)
    {
    }
    /**
     * Returns the language of a post
     *
     * @since 0.1
     *
     * @param int $post_id post id
     * @return bool|object PLL_Language object, false if no language is associated to that post
     */
    public function get_language($post_id)
    {
    }
    /**
     * Deletes a translation
     *
     * @since 0.5
     *
     * @param int $id post id
     */
    public function delete_translation($id)
    {
    }
    /**
     * A join clause to add to sql queries when filtering by language is needed directly in query
     *
     * @since 1.2
     *
     * @param string $alias Alias for $wpdb->posts table
     * @return string join clause
     */
    public function join_clause($alias = '')
    {
    }
    /**
     * Register the language taxonomy
     *
     * @since 1.2
     */
    public function register_taxonomy()
    {
    }
    /**
     * Check if registered post type must be translated
     *
     * @since 1.2
     *
     * @param string $post_type post type name
     */
    public function registered_post_type($post_type)
    {
    }
    /**
     * Forces calling 'update_object_term_cache' when querying posts or pages
     * this is especially useful for nav menus with a lot of pages
     * without doing this, we would have one query per page in the menu to get the page language for the permalink
     *
     * @since 1.8
     *
     * @param object $query reference to the query object
     */
    public function pre_get_posts($query)
    {
    }
    /**
     * Checks if the current user can read the post
     *
     * @since 1.5
     *
     * @param int    $post_id Post ID
     * @param string $context Optional, 'edit' or 'view', defaults to 'view'.
     * @return bool
     */
    public function current_user_can_read($post_id, $context = 'view')
    {
    }
    /**
     * Returns a list of posts in a language ( $lang )
     * not translated in another language ( $untranslated_in )
     *
     * @since 2.6
     *
     * @param string $type            Post type
     * @param string $untranslated_in The posts must not be translated in this language
     * @param string $lang            Language of the search posts
     * @param string $search          Limit results to posts matching this string
     * @return array Array of posts
     */
    public function get_untranslated($type, $untranslated_in, $lang, $search = '')
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Setups the taxonomies languages and translations model
 *
 * @since 1.8
 */
class PLL_Translated_Term extends \PLL_Translated_Object
{
    /**
     * Constructor
     *
     * @since 1.8
     *
     * @param object $model
     */
    public function __construct(&$model)
    {
    }
    /**
     * Stores the term language in the database
     *
     * @since 0.6
     *
     * @param int               $term_id term id
     * @param int|string|object $lang    language ( term_id or slug or object )
     */
    public function set_language($term_id, $lang)
    {
    }
    /**
     * Removes the term language in database
     *
     * @since 0.5
     *
     * @param int $term_id term id
     */
    public function delete_language($term_id)
    {
    }
    /**
     * Returns the language of a term
     *
     * @since 0.1
     *
     * @param int|string $value    term id or term slug
     * @param string     $taxonomy optional taxonomy needed when the term slug is passed as first parameter
     * @return bool|object PLL_Language object, false if no language is associated to that term
     */
    public function get_language($value, $taxonomy = '')
    {
    }
    /**
     * Tells whether a translation term must updated
     *
     * @since 2.3
     *
     * @param array $id           Post id or term id
     * @param array $translations An associative array of translations with language code as key and translation id as value
     */
    protected function should_update_translation_group($id, $translations)
    {
    }
    /**
     * Deletes a translation
     *
     * @since 0.5
     *
     * @param int $id term id
     */
    public function delete_translation($id)
    {
    }
    /**
     * A join clause to add to sql queries when filtering by language is needed directly in query
     *
     * @since 1.2
     * @since 2.6 The `$alias` parameter was added.
     *
     * @param string $alias Alias for $wpdb->terms table
     * @return string join clause
     */
    public function join_clause($alias = 't')
    {
    }
    /**
     * Cache language and translations when terms are queried by get_terms
     *
     * @since 1.2
     *
     * @param array $terms      queried terms
     * @param array $taxonomies queried taxonomies
     * @return array unmodified $terms
     */
    public function _prime_terms_cache($terms, $taxonomies)
    {
    }
    /**
     * When terms are found for posts, add their language and translations to cache
     *
     * @since 1.2
     *
     * @param array $terms      terms found
     * @param array $object_ids not used
     * @param array $taxonomies terms taxonomies
     * @return array unmodified $terms
     */
    public function wp_get_object_terms($terms, $object_ids, $taxonomies)
    {
    }
    /**
     * When the term cache is cleaned, clean the object term cache too
     *
     * @since 2.0
     *
     * @param array $ids An array of term IDs.
     */
    public function clean_term_cache($ids)
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
 */
class PLL_Walker_Dropdown extends \Walker
{
    public $db_fields = array('parent' => 'parent', 'id' => 'id');
    /**
     * Outputs one element
     *
     * @since 1.2
     *
     * @param string $output            Passed by reference. Used to append additional content.
     * @param object $element           The data object.
     * @param int    $depth             Depth of the item.
     * @param array  $args              An array of additional arguments.
     * @param int    $current_object_id ID of the current item.
     */
    public function start_el(&$output, $element, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
    /**
     * Overrides Walker::display_element as expects an object with a parent property
     *
     * @since 1.2
     *
     * @param object $element           Data object.
     * @param array  $children_elements List of elements to continue traversing.
     * @param int    $max_depth         Max depth to traverse.
     * @param int    $depth             Depth of current element.
     * @param array  $args              An array of arguments.
     * @param string $output            Passed by reference. Used to append additional content.
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
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
 * @package Polylang
 */
/**
 * Displays a language list
 *
 * @since 1.2
 */
class PLL_Walker_List extends \Walker
{
    public $db_fields = array('parent' => 'parent', 'id' => 'id');
    /**
     * Outputs one element
     *
     * @since 1.2
     *
     * @param string $output            Passed by reference. Used to append additional content.
     * @param object $element           The data object.
     * @param int    $depth             Depth of the item.
     * @param array  $args              An array of additional arguments.
     * @param int    $current_object_id ID of the current item.
     */
    public function start_el(&$output, $element, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
    /**
     * Overrides Walker::display_element as it expects an object with a parent property
     *
     * @since 1.2
     *
     * @param object $element           Data object.
     * @param array  $children_elements List of elements to continue traversing.
     * @param int    $max_depth         Max depth to traverse.
     * @param int    $depth             Depth of current element.
     * @param array  $args              An array of arguments.
     * @param string $output            Passed by reference. Used to append additional content.
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
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
     * @param bool $echo    Optional, default is true. Set to false for return.
     * @return void|string Void if `$echo` argument is true, calendar HTML if `$echo` is false.
     */
    public static function get_calendar($initial = \true, $echo = \true)
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
     * Displays the widget form
     *
     * @since 0.4
     *
     * @param array $instance Current settings
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
     */
    public function activate($networkwide)
    {
    }
    /**
     * Plugin activation
     *
     * @since 0.5
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
     */
    public function deactivate($networkwide)
    {
    }
    /**
     * Plugin deactivation
     *
     * @since 0.5
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
     */
    public function can_activate()
    {
    }
    /**
     * Displays a notice if PHP min version is not met.
     *
     * @since 2.6.7
     */
    public function php_version_notice()
    {
    }
    /**
     * Displays a notice if WP min version is not met.
     *
     * @since 2.6.7
     */
    public function wp_version_notice()
    {
    }
    /**
     * Get default Polylang options
     *
     * @since 1.8
     *
     * return array
     */
    public static function get_default_options()
    {
    }
    /**
     * Plugin activation
     *
     * @since 0.5
     */
    protected function _activate()
    {
    }
    /**
     * Plugin deactivation
     *
     * @since 0.5
     */
    protected function _deactivate()
    {
    }
}
/**
 * Allows plugins to use their own update API.
 * Modified version with 'polylang' text domain and comments for translators.
 *
 * @author Easy Digital Downloads
 * @version 1.8.0
 */
class PLL_Plugin_Updater
{
    private $api_url = '';
    private $api_data = array();
    private $name = '';
    private $slug = '';
    private $version = '';
    private $wp_override = \false;
    private $cache_key = '';
    private $health_check_timeout = 5;
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
     * show update nofication row -- needed for multisite subsites, because WP won't tell you otherwise!
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
     * Convert some objects to arrays when injecting data into the update API
     *
     * Some data like sections, banners, and icons are expected to be an associative array, however due to the JSON
     * decoding, they are objects. This method allows us to pass in the object and return an associative array.
     *
     * @since 3.6.5
     *
     * @param stdClass $data
     *
     * @return array
     */
    private function convert_object_to_array($data)
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
     * Calls the API and, if successfull, returns the object delivered by the API.
     *
     * @uses get_bloginfo()
     * @uses wp_remote_post()
     * @uses is_wp_error()
     *
     * @param string  $_action The requested action.
     * @param array   $_data   Parameters for the API action.
     * @return false|object
     */
    private function api_request($_action, $_data)
    {
    }
    /**
     * If available, show the changelog for sites in a multisite install.
     */
    public function show_changelog()
    {
    }
    /**
     * Gets the plugin's cached version information from the database.
     *
     * @param string $cache_key
     * @return boolean|string
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
    /**
     * Returns if the SSL of the store should be verified.
     *
     * @since  1.6.13
     * @return bool
     */
    private function verify_ssl()
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
     * Project directory slug
     *
     * @var string
     */
    private $slug = '';
    /**
     * Full GlotPress API URL for the project.
     *
     * @var string
     */
    private $api_url = '';
    /**
     * Installed translations.
     *
     * @var array
     */
    private static $installed_translations;
    /**
     * Available languages.
     *
     * @var array
     */
    private static $available_languages;
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
     */
    public function site_transient_update_plugins($value)
    {
    }
    /**
     * Registers actions for clearing translation caches.
     *
     * @since 2.6
     */
    public static function register_clean_translations_cache()
    {
    }
    /**
     * Clears existing translation cache.
     *
     * @since 2.6
     */
    public static function clean_translations_cache()
    {
    }
    /**
     * Gets the translations for a given project.
     *
     * @since 2.6
     *
     * @param string $slug Project directory slug.
     * @param string $url  Full GlotPress API URL for the project.
     * @return array Translation data.
     */
    private static function get_translations($slug, $url)
    {
    }
    /**
     * Returns installed translations.
     *
     * Used to cache the result of wp_get_installed_translations() as it is very expensive.
     *
     * @since 2.8
     *
     * @return array
     */
    private static function get_installed_translations()
    {
    }
    /**
     * Returns available languages.
     *
     * Used to cache the result of get_available_languages() as it is very expensive.
     *
     * @since 2.8
     *
     * @return array
     */
    private static function get_available_languages()
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
     */
    public function admin_notices()
    {
    }
    /**
     * Upgrades the plugin depending on the previous version
     *
     * @since 1.2
     */
    public function _upgrade()
    {
    }
    /**
     * Upgrades if the previous version is < 0.9
     *
     * @since 1.2
     */
    protected function upgrade_0_9()
    {
    }
    /**
     * Upgrades if the previous version is < 1.0
     *
     * @since 1.2
     */
    protected function upgrade_1_0()
    {
    }
    /**
     * Upgrades if the previous version is < 1.1
     *
     * @since 1.2
     */
    protected function upgrade_1_1()
    {
    }
    /**
     * Upgrades if the previous version is < 1.2
     *
     * @since 1.2
     */
    protected function upgrade_1_2()
    {
    }
    /**
     * Upgrades if the previous version is < 1.2.1
     *
     * @since 1.2.1
     */
    protected function upgrade_1_2_1()
    {
    }
    /**
     * Upgrades if the previous version is < 1.2.3
     * Uprades multilingual menus depending on the old version due to multiple changes in menus management
     *
     * @since 1.2.3
     */
    public function upgrade_1_2_3()
    {
    }
    /**
     * Upgrades if the previous version is < 1.3
     * Moves the user biographies in default language to the 'description' user meta
     *
     * @since 1.3
     */
    protected function upgrade_1_3()
    {
    }
    /**
     * Upgrades if the previous version is < 1.4
     * Sets a transient to delete old model data
     * Deletes language cache (due to bug correction in home urls in 1.3.1 and added mo_id in 1.4)
     *
     * @since 1.4
     */
    protected function upgrade_1_4()
    {
    }
    /**
     * Old data were not deleted in 1.2, just in case...
     * Delete them at first upgrade at least 60 days after upgrade to 1.4
     *
     * @since 1.4
     */
    protected function delete_pre_1_2_data()
    {
    }
    /**
     * Upgrades if the previous version is < 1.4.1
     * Disables the browser detection when using multiple domains
     *
     * @since 1.4.1
     */
    protected function upgrade_1_4_1()
    {
    }
    /**
     * Upgrades if the previous version is < 1.4.4
     * Uprades widgets options for language filter
     *
     * @since 1.4.4
     */
    protected function upgrade_1_4_4()
    {
    }
    /**
     * Upgrades if the previous version is < 1.5
     * Deletes language cache (due to host property added and bug on search url)
     *
     * @since 1.5
     */
    protected function upgrade_1_5()
    {
    }
    /**
     * Upgrades if the previous version is < 1.6
     * Upgrades core language files to get the .po file (only for WP 4.0+)
     *
     * @since 1.6
     */
    protected function upgrade_1_6()
    {
    }
    /**
     * Downloads language packs
     * Intended to be used only one time (at upgrade to Polylang 1.6 or first upgrade of WP 4.0 or later)
     * Adapted from wp_download_language_pack
     * Rewritten because wp_download_language_pack checks the existence of .mo and I need to download .po
     *
     * @since 1.6
     */
    public static function download_language_packs()
    {
    }
    /**
     * Upgrades if the previous version is < 1.7.4
     *
     * @since 1.7.4
     */
    protected function upgrade_1_7_4()
    {
    }
    /**
     * Upgrades if the previous version is < 1.8
     *
     * @since 1.8
     */
    protected function upgrade_1_8()
    {
    }
    /**
     * Upgrades if the previous version is < 2.0.8
     * Changes the user meta 'user_lang' to 'locale' to match WP 4.7 choice
     *
     * @since 2.0.8
     */
    protected function upgrade_2_0_8()
    {
    }
    /**
     * Upgrades if the previous version is < 2.1
     * Moves strings translations from polylang_mo post_content to post meta _pll_strings_translations
     *
     * @since 2.1
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
     */
    protected function upgrade_2_7()
    {
    }
    /**
     * Upgrades if the previous version is < 2.8.1
     *
     * Deletes language cache due to:
     * - 'redirect_lang' option removed for subdomains and multiple domains in 2.2
     * - W3C and Facebook locales added to PLL_Language objects in 2.3
     * - flags moved to a different directory in Polylang Pro 2.8
     * - bug of flags url returning html fixed in 2.8.1
     *
     * @since 2.8.1
     */
    protected function upgrade_2_8_1()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Class to manage Lingotek ads
 *
 * @since 1.7.7
 */
class PLL_Lingotek
{
    const LINGOTEK = 'lingotek-translation/lingotek.php';
    /**
     * Init
     *
     * @since 1.7.7
     */
    public function init()
    {
    }
    /**
     * Adds the Lingotek tab in Polylang settings
     *
     * @since 1.7.7
     *
     * @param array $tabs list of tabs
     * @return array modified liste of tabs
     */
    public function add_tab($tabs)
    {
    }
    /**
     * Displays the content in the Lingotek tab
     *
     * @since 1.7.7
     */
    public function display_tab()
    {
    }
    /**
     * Styles the content of the Lingotek tab
     *
     * @since 1.7.7
     */
    public function print_css()
    {
    }
    /**
     * Outputs the content of each box
     *
     * @since 1.7.7
     *
     * @param string $title
     * @param string $desc
     * @param array  $list
     * @param array  $links
     * @param string $img
     */
    protected function box($title, $desc, $list, $links, $img)
    {
    }
    /**
     * Get a link to install / activate Lingotek
     * depending on user rights and if plugin is already installed
     *
     * @since 1.7.7
     *
     * @return string
     */
    protected function get_activate_link()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Settings class to advertize the Share slugs module
 *
 * @since 1.9
 */
class PLL_Settings_Share_Slug extends \PLL_Settings_Module
{
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 70;
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
     * Displays upgrade message
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
     */
    public function print_js()
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
     * @var PLL_Admin_Static_Pages
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
     * @return array List of option keys to ignore.
     */
    protected function exclude_options_keys()
    {
    }
    /**
     * Returns a list of keys to exclude from the site health information.
     *
     * @since 2.8
     *
     * @return array List of language keys to ignore.
     */
    protected function exclude_language_keys()
    {
    }
    /**
     * Formats an array with language as keys to display in options information.
     *
     * @since 2.8
     *
     * @param array $array An array with language as keys.
     * @return string
     */
    protected function format_array_with_languages($array)
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
     * Add Polylang Languages settings to Site Health Informations tab.
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
     * Returns the flag used in the language switcher.
     *
     * @since 2.8
     *
     * @param object $language Language object.
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
     * Language used to filter queries for the sitemap index.
     *
     * @since 2.8
     *
     * @var string
     */
    private static $filter_lang = '';
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
 * Handles the core sitemaps.
 *
 * @since 2.8
 */
class PLL_Sitemaps
{
    /**
     * A reference to the current language.
     *
     * @since 2.8
     *
     * @var PLL_Language
     */
    protected $curlang;
    /**
     * A reference to the PLL_Links_Model instance.
     *
     * @since 2.8
     *
     * @var PLL_Links_Model
     */
    protected $links_model;
    /**
     * A reference to the PLL_Model instance.
     *
     * @since 2.8
     *
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
     * @param object      $query Main WP query object.
     * @return string|bool
     */
    public function set_language_from_query($lang, $query)
    {
    }
    /**
     * Whitelists the home url filter for the sitemaps
     *
     * @since 2.8
     *
     * @param array $whitelist White list.
     * @return array;
     */
    public function home_url_white_list($whitelist)
    {
    }
    /**
     * Filters the sitemaps rewrite rules to take the languages into account.
     *
     * @since 2.8
     *
     * @param array $rules Rewrite rules.
     * @return array
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
    /**
     * Filters the sitemap index entries for subdomains and multiple domains.
     *
     * @since 2.8
     *
     * @param array $sitemap_entry Sitemap entry for the post.
     * return array
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
 * Manages copy and synchronization of terms and post metas on front
 *
 * @since 2.4
 */
class PLL_Sync
{
    public $taxonomies, $post_metas, $term_meta;
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
     * Get post fields to synchornize
     *
     * @since 2.4
     *
     * @param object $post Post object
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
     * Synchronizes post fields in translations
     *
     * @since 2.4
     *
     * @param int    $post_id      post id
     * @param object $post         post object
     * @param array  $translations post translations
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
     */
    public function edit_attachment($post_id)
    {
    }
    /**
     * Synchronize sticky posts
     *
     * @since 2.3
     *
     * @param array $value     New option value
     * @param array $old_value Old option value
     * @return array
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
     */
    public function new_post_translation()
    {
    }
    /**
     * Get post fields to synchronize
     *
     * @since 2.4
     *
     * @param object $post Post object
     * @return array
     */
    protected function get_fields_to_sync($post)
    {
    }
    /**
     * Synchronizes post fields in translations
     *
     * @since 1.2
     *
     * @param int    $post_id      post id
     * @param object $post         post object
     * @param array  $translations post translations
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
     * Get the row actions
     *
     * @since 1.8
     *
     * @return array
     */
    protected function get_actions()
    {
    }
    /**
     * List the post metas to synchronize
     *
     * @since 1.0
     *
     * @return array
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
    public $model;
    protected $meta_type, $prev_value, $to_copy;
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
     */
    protected function remove_add_meta_action()
    {
    }
    /**
     * Removes all meta synchronization actions and filters
     *
     * @since 2.3
     */
    protected function remove_all_meta_actions()
    {
    }
    /**
     * Adds "added_{$this->meta_type}_meta" action
     *
     * @since 2.3
     */
    protected function restore_add_meta_action()
    {
    }
    /**
     * Adds meta synchronization actions and filters
     *
     * @since 2.3
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
     * Get the custom fields to copy or synchronize
     *
     * @since 2.3
     *
     * @param int    $from Id of the post from which we copy informations
     * @param int    $to   Id of the post to which we paste informations
     * @param string $lang Language slug
     * @param bool   $sync True if it is synchronization, false if it is a copy
     * @return array List of meta keys
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
     */
    public function update_meta($mid, $id, $meta_key, $meta_value)
    {
    }
    /**
     * Store metas to synchronize before deleting them
     *
     * @since 2.3
     *
     * @param array $mids  Not used
     * @param int   $id    Object ID.
     */
    public function store_metas_to_sync($mids, $id)
    {
    }
    /**
     * Synchronize deleted meta across translations
     *
     * @since 2.3
     *
     * @param array  $mids  Not used
     * @param int    $id    Object ID.
     * @param string $key   Meta key.
     * @param mixed  $value Meta value.
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
     * @param int    $object_id    Id of the object being asaved
     * @param object $obj          Not used
     * @param array  $translations The list of translations object ids
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
     * Get the custom fields to copy or synchronize
     *
     * @since 2.3
     *
     * @param int    $from Id of the post from which we copy informations
     * @param int    $to   Id of the post to which we paste informations
     * @param string $lang Language slug
     * @param bool   $sync True if it is synchronization, false if it is a copy
     * @return array List of meta keys
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
     * Get the list of taxonomies to copy or to synchronize
     *
     * @since 1.7
     * @since 2.1 The `$from`, `$to`, `$lang` parameters were added.
     *
     * @param bool   $sync True if it is synchronization, false if it is a copy
     * @param int    $from Id of the post from which we copy informations, optional, defaults to null
     * @param int    $to   Id of the post to which we paste informations, optional, defaults to null
     * @param string $lang Language slug, optional, defaults to null
     * @return array List of taxonomy names
     */
    protected function get_taxonomies_to_copy($sync, $from = \null, $to = \null, $lang = \null)
    {
    }
    /**
     * When copying or synchronizing terms, translate terms in translatable taxonomies
     *
     * @since 2.3
     *
     * @param array  $object_id Object ID
     * @param array  $terms     List of terms ids assigned to the source post
     * @param string $taxonomy  Taxonomy name
     * @param string $lang      Language slug
     * @return array List of terms ids to assign to the target post
     */
    protected function maybe_translate_terms($object_id, $terms, $taxonomy, $lang)
    {
    }
    /**
     * Maybe copy taxonomy terms from one post to the other
     *
     * @since 2.6
     *
     * @param int    $object_id Source object ID.
     * @param int    $tr_id     Target object ID.
     * @param string $lang      Target language.
     * @param array  $terms     An array of object terms.
     * @param string $taxonomy  Taxonomy slug.
     * @param bool   $append    Whether to append new terms to the old terms.
     */
    protected function copy_object_terms($object_id, $tr_id, $lang, $terms, $taxonomy, $append)
    {
    }
    /**
     * When assigning terms to a post, assign translated terms to the translated posts (synchronisation)
     *
     * @since 2.3
     *
     * @param int    $object_id Object ID.
     * @param array  $terms     An array of object terms.
     * @param array  $tt_ids    An array of term taxonomy IDs.
     * @param string $taxonomy  Taxonomy slug.
     * @param bool   $append    Whether to append new terms to the old terms.
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
     */
    public function copy($from, $to, $lang)
    {
    }
    /**
     * When creating a new term, associate it to posts having translations associated to the translated terms
     *
     * @since 2.3
     *
     * @param int    $term_id      Id of the created term
     * @param string $taxonomy     Taxonomy
     * @param array  $translations Ids of the translations of the created term
     */
    public function create_term($term_id, $taxonomy, $translations)
    {
    }
    /**
     * Deactivate the synchronization of terms before deleting a term
     * to avoid translated terms to be removed from translated posts
     *
     * @since 2.3.2
     */
    public function pre_delete_term()
    {
    }
    /**
     * Re-activate the synchronization of terms after a term is deleted
     *
     * @since 2.3.2
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
 * Settings class to advertize the Translate slugs module
 *
 * @since 1.9
 */
class PLL_Settings_Translate_Slugs extends \PLL_Settings_Module
{
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 80;
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
     * Displays upgrade message
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
     * Reference to PLL_Model object
     *
     * @var object $model
     */
    protected $model;
    /**
     * Reference to Polylang options array
     *
     * @var array $options
     */
    protected $options;
    /**
     * List of steps
     *
     * @var array $steps {
     *     @type string $name      i18n string which names the step.
     *     @type callable $view    The callback function use to display the step content.
     *     @type callable $handler The callback function use to process the step after it is submitted.
     *     @type array $scripts    List of scripts handle needed by the step.
     *     @type array $styles     The list of styles handle needed by the step.
     * }
     */
    protected $steps = array();
    /**
     * List of WordPress CSS file handles
     *
     * @var array $styles
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
     * @param bool $network_wide if activated for all sites in the network.
     * @since 2.7
     */
    public static function start_wizard($network_wide)
    {
    }
    /**
     * Redirect to the wizard depending on the context
     *
     * @since 2.7
     */
    public function redirect_to_wizard()
    {
    }
    /**
     * Add an admin Polylang submenu to access the wizard
     *
     * @param array $tabs Submenus list.
     * @return array Submenus list updated.
     * @since 2.7
     */
    public function settings_tabs($tabs)
    {
    }
    /**
     * Return if the media step is displayable
     *
     * @param array $languages List of language objects.
     * @return bool
     * @since 2.7
     */
    public function is_media_step_displayable($languages)
    {
    }
    /**
     * Check if the licenses step is displayable
     *
     * @return bool
     * @since 2.7
     */
    public function is_licenses_step_displayable()
    {
    }
    /**
     * Setup the wizard page
     *
     * @since 2.7
     */
    public function setup_wizard_page()
    {
    }
    /**
     * Adds some admin screens where to display the wizard notice
     *
     * @param bool   $can_display_notice Whether the notice can be displayed.
     * @param string $notice             The notice name.
     * @return bool
     * @since 2.7
     */
    public function can_display_notice($can_display_notice, $notice)
    {
    }
    /**
     * Return html code of the wizard notice
     *
     * @since 2.7
     */
    public function wizard_notice()
    {
    }
    /**
     * Display the wizard page
     *
     * @since 2.7
     */
    public function display_wizard_page()
    {
    }
    /**
     * Enqueue scripts and styles for the wizard
     *
     * @since 2.7
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Get the suffix to enqueue non minified files in a Debug context
     *
     * @return string Empty when SCRIPT_DEBUG equal to true
     *                otherwise .min
     * @since 2.7
     */
    public function get_suffix()
    {
    }
    /**
     * Get the URL for the step's screen.
     *
     * @param string $step  slug (default: current step).
     * @return string       URL for the step if it exists.
     *                      Empty string on failure.
     * @since 2.7
     */
    public function get_step_link($step = '')
    {
    }
    /**
     * Get the URL for the next step's screen.
     *
     * @param string $step  slug (default: current step).
     * @return string       URL for next step if a next step exists.
     *                      Admin URL if it's the last step.
     *                      Empty string on failure.
     * @since 2.7
     */
    public function get_next_step_link($step = '')
    {
    }
    /**
     * Add licenses step to the wizard
     *
     * @param array $steps List of steps.
     * @return array List of steps updated.
     * @since 2.7
     */
    public function add_step_licenses($steps)
    {
    }
    /**
     * Display the languages step form
     *
     * @since 2.7
     */
    public function display_step_licenses()
    {
    }
    /**
     * Execute the languages step
     *
     * @since 2.7
     */
    public function save_step_licenses()
    {
    }
    /**
     * Ajax method to deactivate a license
     *
     * @since 2.7
     */
    public function deactivate_license()
    {
    }
    /**
     * Add languages step to the wizard
     *
     * @param array $steps List of steps.
     * @return array List of steps updated.
     * @since 2.7
     */
    public function add_step_languages($steps)
    {
    }
    /**
     * Display the languages step form
     *
     * @since 2.7
     */
    public function display_step_languages()
    {
    }
    /**
     * Execute the languages step
     *
     * @since 2.7
     */
    public function save_step_languages()
    {
    }
    /**
     * Add media step to the wizard
     * Add media step to the wizard
     *
     * @param array $steps List of steps.
     * @return array List of steps updated.
     * @since 2.7
     */
    public function add_step_media($steps)
    {
    }
    /**
     * Display the media step form
     *
     * @since 2.7
     */
    public function display_step_media()
    {
    }
    /**
     * Execute the media step
     *
     * @since 2.7
     */
    public function save_step_media()
    {
    }
    /**
     * Add untranslated contents step to the wizard
     *
     * @param array $steps List of steps.
     * @return array List of steps updated.
     * @since 2.7
     */
    public function add_step_untranslated_contents($steps)
    {
    }
    /**
     * Display the untranslated contents step form
     *
     * @since 2.7
     */
    public function display_step_untranslated_contents()
    {
    }
    /**
     * Execute the untranslated contents step
     *
     * @since 2.7
     */
    public function save_step_untranslated_contents()
    {
    }
    /**
     * Add home page step to the wizard
     *
     * @param array $steps List of steps.
     * @return array List of steps updated.
     * @since 2.7
     */
    public function add_step_home_page($steps)
    {
    }
    /**
     * Display the home page step form
     *
     * @since 2.7
     */
    public function display_step_home_page()
    {
    }
    /**
     * Execute the home page step
     *
     * @since 2.7
     */
    public function save_step_home_page()
    {
    }
    /**
     * Create home page translations for each language defined.
     *
     * @since 2.7
     *
     * @param string $default_language       slug of the default language; null if no default language is defined.
     * @param int    $home_page              post_id of the home page if it's defined, false otherwise.
     * @param string $home_page_title        home page title if it's defined, 'Homepage' otherwise.
     * @param string $home_page_language     slug of the home page if it's defined, false otherwise.
     * @param array  $untranslated_languages array of languages which needs to have a home page translated.
     */
    public function create_home_page_translations($default_language, $home_page, $home_page_title, $home_page_language, $untranslated_languages)
    {
    }
    /**
     * Add last step to the wizard
     *
     * @param array $steps List of steps.
     * @return array List of steps updated.
     * @since 2.7
     */
    public function add_step_last($steps)
    {
    }
    /**
     * Display the last step form
     *
     * @since 2.7
     */
    public function display_step_last()
    {
    }
    /**
     * Execute the last step
     *
     * @since 2.7
     */
    public function save_step_last()
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class to inform about the WPML compatibility module in Polylang settings
 *
 * @since 1.8
 */
class PLL_Settings_WPML extends \PLL_Settings_Module
{
    /**
     * Stores the display order priority.
     *
     * @var int
     */
    public $priority = 60;
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
}
/**
 * @package Polylang
 */
/**
 * A class to handle the WPML API based on hooks, introduced since WPML 3.2
 * It partly relies on the legacy API
 *
 * @see https://wpml.org/documentation/support/wpml-coding-api/wpml-hooks-reference/
 *
 * @since 2.0
 */
class PLL_WPML_API
{
    private static $original_language = \null;
    /**
     * Constructor
     *
     * @since 2.0
     */
    public function __construct()
    {
    }
    /**
     * Get a list of the languages enabled for a site
     *
     * @since 2.0
     *
     * @param mixed         $null Not used
     * @param array| string $args See arguments of icl_get_languages()
     * @return array Array of arrays per language
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
     * Returns an HTML hidden input field with name=”lang” and as value the current language
     *
     * @since 2.0
     */
    public function wpml_add_language_form_field()
    {
    }
    /**
     * Find out if a specific language is enabled for the site
     *
     * @since 2.0
     *
     * @param mixed  $null Not used
     * @param string $slug Language code
     * @return bool
     */
    public function wpml_language_is_active($null, $slug)
    {
    }
    /**
     * Find out whether the current language text direction is RTL or not
     *
     * @since 2.0
     *
     * @return bool
     */
    public function wpml_is_rtl()
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
     */
    public static function wpml_switch_language($lang = \null, $cookie = \false)
    {
    }
    /**
     * Get the language code for a translatable element
     *
     * @since 2.0
     *
     * @param mixed $language_code
     * @param array $args          An array with two keys element_id => post_id or term_taxonomy_id, element_type => post type or taxonomy
     * @return string
     */
    public function wpml_element_language_code($language_code, $args)
    {
    }
    /**
     * Translates a string
     *
     * @since 2.0
     *
     * @param string      $string  The string's original value
     * @param string      $context The string's registered context
     * @param string      $name    The string's registered name
     * @param null|string $lang    Optional, return the translation in this language, defaults to current language
     * @return string The translated string
     */
    public function wpml_translate_single_string($string, $context, $name, $lang = \null)
    {
    }
    /**
     * Converts a permalink to a language specific permalink
     *
     * @since 2.2
     *
     * @param string      $url  The url to filter
     * @param null|string $lang Langage code, optional, defaults to the current language
     * @return string
     */
    public function wpml_permalink($url, $lang = '')
    {
    }
    /**
     * Translates a post type slug
     *
     * @since 2.2
     *
     * @param string $slug      Post type slug
     * @param string $post_type Post type name
     * @param string $lang      Optional language code (defaults to current language)
     * @return string
     */
    public function wpml_get_translated_slug($slug, $post_type, $lang = \null)
    {
    }
    /**
     * Find out whether a post type or a taxonomy term is translated
     *
     * @since 2.0
     *
     * @param mixed  $null
     * @param int    $id   The post_id or term_id
     * @param string $type The post type or taxonomy
     * @return bool
     */
    public function wpml_element_has_translations($null, $id, $type)
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
    protected static $instance;
    // For singleton
    protected static $strings;
    // Used for cache
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
     * @return object
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
    protected static $instance;
    // For singleton
    protected $xmls, $options;
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
     * @return object
     */
    public static function instance()
    {
    }
    /**
     * Finds the wpml-config.xml files to parse and setup filters
     *
     * @since 1.0
     */
    public function init()
    {
    }
    /**
     * Adds custom fields to the list of metas to copy when creating a new translation
     *
     * @since 1.0
     *
     * @param array $metas the list of custom fields to copy or synchronize
     * @param bool  $sync  true for sync, false for copy
     * @return array the list of custom fields to copy or synchronize
     */
    public function copy_post_metas($metas, $sync)
    {
    }
    /**
     * Adds term metas to the list of metas to copy when creating a new translation
     *
     * @since 2.6
     *
     * @param array $metas The list of term metas to copy or synchronize.
     * @param bool  $sync  True for sync, false for copy.
     * @return array The list of term metas to copy or synchronize.
     */
    public function copy_term_metas($metas, $sync)
    {
    }
    /**
     * Language and translation management for custom post types
     *
     * @since 1.0
     *
     * @param array $types list of post type names for which Polylang manages language and translations
     * @param bool  $hide  true when displaying the list in Polylang settings
     * @return array list of post type names for which Polylang manages language and translations
     */
    public function translate_types($types, $hide)
    {
    }
    /**
     * Language and translation management for custom taxonomies
     *
     * @since 1.0
     *
     * @param array $taxonomies list of taxonomy names for which Polylang manages language and translations
     * @param bool  $hide       true when displaying the list in Polylang settings
     * @return array list of taxonomy names for which Polylang manages language and translations
     */
    public function translate_taxonomies($taxonomies, $hide)
    {
    }
    /**
     * Registers or translates the strings for an option
     *
     * @since 2.8
     *
     * @param string $context The group in which the strings will be registered.
     * @param string $name    Option name.
     * @param object $key     XML node.
     */
    protected function register_or_translate_option($context, $name, $key)
    {
    }
    /**
     * Recursively transforms xml nodes to an array, ready for PLL_Translate_Option.
     *
     * @since 2.9
     *
     * @param object $key XML node.
     * @param array  $arr Array of option keys to translate.
     * @return array
     */
    protected function xml_to_array($key, &$arr = array())
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
     * The list of post types to show in the form.
     *
     * @var array
     */
    private $post_types;
    /**
     * The list of post types to disable in the form.
     *
     * @var array
     */
    private $disabled_post_types;
    /**
     * The list of taxonomies to show in the form.
     *
     * @var array
     */
    private $taxonomies;
    /**
     * The list of taxonomies to disable in the form.
     *
     * @var array
     */
    private $disabled_taxonomies;
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
     * Stores an array of PLL_License instances.
     *
     * @var array
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
     * Get the html for a row (one per license key) for display
     *
     * @since 1.9
     *
     * @param array $item licence id, name and key
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
     */
    protected function force_lang()
    {
    }
    /**
     * Displays the fieldset to choose to hide the default language information in url
     *
     * @since 1.8
     */
    protected function hide_default()
    {
    }
    /**
     * Displays the fieldset to choose to hide /language/ in url
     *
     * @since 1.8
     */
    protected function rewrite()
    {
    }
    /**
     * Displays the fieldset to choose to redirect the home page to language page
     *
     * @since 1.8
     */
    protected function redirect_lang()
    {
    }
    /**
     * Displays the settings
     *
     * @since 1.8
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
     */
    protected function check_domains($options)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * A class for the Polylang settings pages
 * accessible in $polylang global object
 *
 * Properties:
 * options          => inherited, reference to Polylang options array
 * model            => inherited, reference to PLL_Model object
 * links_model      => inherited, reference to PLL_Links_Model object
 * links            => inherited, reference to PLL_Admin_Links object
 * static_pages     => inherited, reference to PLL_Admin_Static_Pages object
 * filters_links    => inherited, reference to PLL_Filters_Links object
 * curlang          => inherited, optional, current language used to filter admin content
 * pref_lang        => inherited, preferred language used as default when saving posts or terms
 *
 * @since 1.2
 */
class PLL_Settings extends \PLL_Admin_Base
{
    /**
     * Name of the active module
     *
     * @var string $active_tab
     */
    protected $active_tab;
    /**
     * Array of modules classes
     *
     * @var array $modules
     */
    protected $modules;
    /**
     * Constructor
     *
     * @since 1.2
     *
     * @param object $links_model
     */
    public function __construct(&$links_model)
    {
    }
    /**
     * Initializes the modules
     *
     * @since 1.8
     */
    public function register_settings_modules()
    {
    }
    /**
     * Loads the about metabox
     *
     * @since 0.8
     */
    public function metabox_about()
    {
    }
    /**
     * Adds screen options and the about box in the languages admin panel
     *
     * @since 0.9.5
     */
    public function load_page()
    {
    }
    /**
     * Adds screen options in the strings translations admin panel
     *
     * @since 2.1
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
     */
    public function handle_actions($action)
    {
    }
    /**
     * Displays the 3 tabs pages: languages, strings translations, settings
     * Also manages user input for these pages
     *
     * @since 0.1
     */
    public function languages_page()
    {
    }
    /**
     * Enqueues scripts and styles
     */
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Displays a notice when there are objects with no language assigned
     *
     * @since 1.8
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
     */
    public static function redirect($args = array())
    {
    }
    /**
     * Get the list of predefined languages
     *
     * @since 2.3
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
     * Generates content for a single row of the table
     *
     * @since 1.8
     *
     * @param object $item The current item
     */
    public function single_row($item)
    {
    }
    /**
     * Displays the item information in a column ( default case )
     *
     * @since 0.1
     *
     * @param object $item
     * @param string $column_name
     * @return string
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
     * @param object $item
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
     * @param object $item
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
     * @return array the list of column titles
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
     * @param object $item        The item being acted upon.
     * @param string $column_name Current column name.
     * @param string $primary     Primary column name.
     * @return string The row actions output.
     */
    protected function handle_row_actions($item, $column_name, $primary)
    {
    }
    /**
     * Sort items
     *
     * @since 0.1
     *
     * @param object $a The first object to compare
     * @param object $b The second object to compare
     * @return int -1 or 1 if $a is considered to be respectively less than or greater than $b.
     */
    protected function usort_reorder($a, $b)
    {
    }
    /**
     * Prepares the list of items for displaying
     *
     * @since 0.1
     *
     * @param array $data
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
     * Displays a single row
     *
     * @since 1.8
     *
     * @param object $item PLL_Settings_Module object
     */
    public function single_row($item)
    {
    }
    /**
     * Generates the columns for a single row of the table
     *
     * @since 1.8
     *
     * @param object $item The current item
     */
    protected function single_row_columns($item)
    {
    }
    /**
     * Displays the item information in a column ( default case )
     *
     * @since 1.8
     *
     * @param object $item
     * @param string $column_name
     * @return string
     */
    protected function column_default($item, $column_name)
    {
    }
    /**
     * Gets the list of columns
     *
     * @since 1.8
     *
     * @return array the list of column titles
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
     * @param array $items
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
     */
    protected function display_tablenav($which)
    {
    }
}
/**
 * A class to create the strings translations table
 * Thanks to Matt Van Andel ( http://www.mattvanandel.com ) for its plugin "Custom List Table Example" !
 *
 * @since 0.6
 */
class PLL_Table_String extends \WP_List_Table
{
    protected $languages, $strings, $groups, $selected_group;
    /**
     * Constructor
     *
     * @since 0.6
     *
     * @param array $languages list of languages
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
     * Gets the list of columns
     *
     * @since 0.6
     *
     * @return array the list of column titles
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
     * @param array  $mos An array of PLL_MO objects
     * @param string $s   Searched string
     * @return array Found strings
     */
    protected function search_in_translations($mos, $s)
    {
    }
    /**
     * Sort items
     *
     * @since 0.6
     *
     * @param object $a The first object to compare
     * @param object $b The second object to compare
     * @return int -1 or 1 if $a is considered to be respectively less than or greater than $b.
     */
    protected function usort_reorder($a, $b)
    {
    }
    /**
     * Prepares the list of items for displaying
     *
     * @since 0.6
     */
    public function prepare_items()
    {
    }
    /**
     * Get the list of possible bulk actions
     *
     * @since 1.1
     *
     * @return array
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
     */
    public function extra_tablenav($which)
    {
    }
    /**
     * Saves the strings translations in DB
     * Optionaly clean the DB
     *
     * @since 1.9
     */
    public function save_translations()
    {
    }
}
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
     * @param array $value The value stored in the update_plugins site transient.
     * @return array
     */
    public function pre_set_site_transient_update_plugins($value)
    {
    }
}
/**
 * @package Polylang
 */
/**
 * Template tag: displays the language switcher
 *
 * List of parameters accepted in $args:
 *
 * - dropdown               => displays a dropdown if set to 1, defaults to 0
 * - echo                   => echoes the switcher if set to 1 ( default )
 * - hide_if_empty          => hides languages with no posts ( or pages ) if set to 1 ( default )
 * - show_flags             => shows flags if set to 1, defaults to 0
 * - show_names             => shows languages names if set to 1 ( default )
 * - display_names_as       => whether to display the language name or its slug, valid options are 'slug' and 'name',
 * defaults to name
 * - force_home             => forces linking to the home page is set to 1, defaults to 0
 * - hide_if_no_translation => hides the link if there is no translation if set to 1, defaults to 0
 * - hide_current           => hides the current language if set to 1, defaults to 0
 * - post_id                => if not null, link to translations of post defined by post_id, defaults to null
 * - raw                    => set this to true to build your own custom language switcher, defaults to 0
 * - item_spacing           => whether to preserve or discard whitespace between list items, valid options are
 * 'preserve' and 'discard', defaults to preserve
 *
 * @api
 * @since 0.5
 *
 * @param array $args optional
 * @return null|string|array null if displaying, array if raw is requested, string otherwise
 */
function pll_the_languages($args = '')
{
}
/**
 * Returns the current language on frontend
 * Returns the language set in admin language filter on backend ( false if set to all languages )
 *
 * @api
 * @since 0.8.1
 *
 * @param string $field Optional, the language field to return ( see PLL_Language ), defaults to 'slug', pass OBJECT constant to get the language object.
 * @return string|PLL_Language|bool The requested field for the current language
 */
function pll_current_language($field = 'slug')
{
}
/**
 * Returns the default language
 *
 * @api
 * @since 1.0
 *
 * @param string $field Optional, the language field to return ( see PLL_Language ), defaults to 'slug', pass OBJECT constant to get the language object.
 * @return string|PLL_Language|bool The requested field for the default language
 */
function pll_default_language($field = 'slug')
{
}
/**
 * Among the post and its translations, returns the id of the post which is in the language represented by $slug
 *
 * @api
 * @since 0.5
 *
 * @param int    $post_id post id
 * @param string $slug    optional language code, defaults to current language
 * @return int|false|null post id of the translation if exists, false otherwise, null if the current language is not defined yet
 */
function pll_get_post($post_id, $slug = '')
{
}
/**
 * Among the term and its translations, returns the id of the term which is in the language represented by $slug
 *
 * @api
 * @since 0.5
 *
 * @param int    $term_id term id
 * @param string $slug    optional language code, defaults to current language
 * @return int|false|null term id of the translation if exists, false otherwise, null if the current language is not defined yet
 */
function pll_get_term($term_id, $slug = '')
{
}
/**
 * Returns the home url in the current language
 *
 * @api
 * @since 0.8
 *
 * @param string $lang language code ( optional on frontend )
 * @return string
 */
function pll_home_url($lang = '')
{
}
/**
 * Registers a string for translation in the "strings translation" panel
 *
 * @api
 * @since 0.6
 *
 * @param string $name      a unique name for the string
 * @param string $string    the string to register
 * @param string $context   optional the group in which the string is registered, defaults to 'polylang'
 * @param bool   $multiline optional whether the string table should display a multiline textarea or a single line input, defaults to single line
 */
function pll_register_string($name, $string, $context = 'Polylang', $multiline = \false)
{
}
/**
 * Translates a string ( previously registered with pll_register_string )
 *
 * @api
 * @since 0.6
 *
 * @param string $string the string to translate
 * @return string the string translation in the current language
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
 * @param string $string the string to translate
 * @return string translation in the current language
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
 * @param string $string The string to translate
 * @return string
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
 * @param string $string The string to translate
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
 * @param string $string The string to translate
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
 * @param string $string The string to translate
 */
function pll_esc_attr_e($string)
{
}
/**
 * Translates a string ( previously registered with pll_register_string )
 *
 * @api
 * @since 1.5.4
 *
 * @param string $string the string to translate
 * @param string $lang   language code
 * @return string the string translation in the requested language
 */
function pll_translate_string($string, $lang)
{
}
/**
 * Returns true if Polylang manages languages and translations for this post type
 *
 * @api
 * @since 1.0.1
 *
 * @param string $post_type Post type name
 * @return bool
 */
function pll_is_translated_post_type($post_type)
{
}
/**
 * Returns true if Polylang manages languages and translations for this taxonomy
 *
 * @api
 * @since 1.0.1
 *
 * @param string $tax Taxonomy name
 * @return bool
 */
function pll_is_translated_taxonomy($tax)
{
}
/**
 * Returns the list of available languages
 *
 * List of parameters accepted in $args:
 *
 * hide_empty => hides languages with no posts if set to true ( defaults to false )
 * fields     => return only that field if set ( see PLL_Language for a list of fields )
 *
 * @api
 * @since 1.5
 *
 * @param array $args list of parameters
 * @return array
 */
function pll_languages_list($args = array())
{
}
/**
 * Set the post language
 *
 * @api
 * @since 1.5
 *
 * @param int    $id   post id
 * @param string $lang language code
 */
function pll_set_post_language($id, $lang)
{
}
/**
 * Set the term language
 *
 * @api
 * @since 1.5
 *
 * @param int    $id   term id
 * @param string $lang language code
 */
function pll_set_term_language($id, $lang)
{
}
/**
 * Save posts translations
 *
 * @api
 * @since 1.5
 *
 * @param array $arr an associative array of translations with language code as key and post id as value
 */
function pll_save_post_translations($arr)
{
}
/**
 * Save terms translations
 *
 * @api
 * @since 1.5
 *
 * @param array $arr an associative array of translations with language code as key and term id as value
 */
function pll_save_term_translations($arr)
{
}
/**
 * Returns the post language
 *
 * @api
 * @since 1.5.4
 *
 * @param int    $post_id
 * @param string $field   Optional, the language field to return ( see PLL_Language ), defaults to 'slug'
 * @return bool|string The requested field for the post language, false if no language is associated to that post
 */
function pll_get_post_language($post_id, $field = 'slug')
{
}
/**
 * Returns the term language
 *
 * @api
 * @since 1.5.4
 *
 * @param int    $term_id
 * @param string $field   Optional, the language field to return ( see PLL_Language ), defaults to 'slug'
 * @return bool|string The requested field for the term language, false if no language is associated to that term
 */
function pll_get_term_language($term_id, $field = 'slug')
{
}
/**
 * Returns an array of translations of a post
 *
 * @api
 * @since 1.8
 *
 * @param int $post_id
 * @return array an associative array of translations with language code as key and translation post_id as value
 */
function pll_get_post_translations($post_id)
{
}
/**
 * Returns an array of translations of a term
 *
 * @api
 * @since 1.8
 *
 * @param int $term_id
 * @return array an associative array of translations with language code as key and translation term_id as value
 */
function pll_get_term_translations($term_id)
{
}
/**
 * Count posts in a language
 *
 * @api
 * @since 1.5
 *
 * @param string $lang Language code.
 * @param array  $args WP_Query arguments ( accepted keys: post_type, m, year, monthnum, day, author, author_name, post_format, post_status ).
 * @return int Posts count.
 */
function pll_count_posts($lang, $args = array())
{
}
/**
 * Allows to access the Polylang instance
 * It is always preferable to use API functions
 * Internal methods may be changed without prior notice
 *
 * @since 1.8
 */
function PLL()
{
}
/**
 * Retrieve a page given its title.
 *
 * @since 2.0
 *
 * @param string       $page_title Page title
 * @param string       $output     Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N. Default OBJECT
 * @param string|array $post_type  Optional. Post type or array of post types. Default 'page'.
 * @return WP_Post|array|null WP_Post (or array) on success, or null on failure.
 */
function wpcom_vip_get_page_by_title($page_title, $output = \OBJECT, $post_type = 'page')
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
 * return bool True if the cache compatibility must be loaded
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
 * return bool True to use the block editor plugin.
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
 * Used for calculating the IDs of objects (usually categories) in the current language
 *
 * @since 0.9.5
 *
 * @param int    $id                         Object id
 * @param string $type                       Optional, post type or taxonomy name of the object, defaults to 'post'
 * @param bool   $return_original_if_missing Optional, true if Polylang should return the original id if the translation is missing, defaults to false
 * @param string $lang                       Optional, language code, defaults to current language
 * @return int|null The object id of the translation, null if the translation is missing and $return_original_if_missing set to false
 */
function icl_object_id($id, $type = 'post', $return_original_if_missing = \false, $lang = \false)
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
function icl_t($context, $name, $string = \false, &$has_translation = \null, $bool = \false, $lang = \null)
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
function icl_translate($context, $name, $string = \false, $bool = \false, &$has_translation = \null, $lang = \null)
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