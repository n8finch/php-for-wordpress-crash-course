# PHP Code Sniffer (PHPCS)
Yes, PHP and WordPres ***do*** have coding standards!:
- PHP Standards Recommendations (PSR): https://www.php-fig.org/psr/
- Code: https://developer.wordpress.org/coding-standards/wordpress-coding-standards/
- Inline Comments: https://developer.wordpress.org/coding-standards/inline-documentation-standards/

## Install
- Need Composer installed
- Go to your user root

Follow instructions here: https://github.com/WordPress/WordPress-Coding-Standards
1. Install PHPCodeSniffer: `composer global require "squizlabs/php_codesniffer=*"`
    - https://github.com/squizlabs/PHP_CodeSniffer
2. CAVEATS (as of March 22,2022):
    - We will use `composer create-project wp-coding-standards/wpcs --no-dev`
    - Change into the new `wpcs` directory: `cd wpcs`.
    - This might be changing in the 3.0.0 version of the WordPress Coding Standard project: https://github.com/WordPress/WordPress-Coding-Standards/issues/1877
    - Might need to do an extra step `composer require --dev dealerdirect/phpcodesniffer-composer-installer:"^0.7.0"` to update the dependency: https://github.com/PHPCSStandards/composer-installer/issues/119#issuecomment-716625149
3. Get your working directory: `pwd`: (should return something like `/path/to/wpcs`)
4. Run `phpcs --config-set installed_paths /path/to/wpcs`, this will set the path to the standards, test with `phpcs -i` to see that WordPress is installed.
5. Run `phpcs --config-set default_standard WordPress`, to set WordPress as the default standard.

## See also:
- PSR-2 for other PHP projects (like Laravel or Symfony): https://www.php-fig.org/psr/psr-2/