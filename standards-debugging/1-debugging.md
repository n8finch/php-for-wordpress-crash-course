# Debugging
Because we all need to!
## WordPress Built Ins
- https://wordpress.org/support/article/debugging-in-wordpress/

Usually, these `define` statements will go in your `wp-config.php` file.
~~~php
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );
~~~

## Kint and Whoops
- Kint: https://kint-php.github.io/kint/
- Whoops: https://github.com/filp/whoops
- Debug plugin: https://wordpress.org/plugins/debug-toolkit/
- Laravel: https://flareapp.io/ignition
- Vardumper for Symfony: https://symfony.com/doc/current/components/var_dumper.html

