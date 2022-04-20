# PHP Code Sniffer (PHPCS)
Yes, PHP and WordPress ***do*** have coding standards!:
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
6. Test on a file: `phpcs index.php`

### See also:
- PSR-12 for other PHP projects (like Laravel or Symfony): https://www.php-fig.org/psr/psr-12/
- Installing PSR-12
- Make PSR-12 default: `phpcs --config-set default_standard WordPress`
- The PHPCBF extension: https://marketplace.visualstudio.com/items?itemName=persoderlind.vscode-phpcbf

## Using in VSCode
- Install the PHPCS Extension by Ioannis Kappas (yes, I know it has 3 stars): https://marketplace.visualstudio.com/items?itemName=ikappas.phpcs
- In the terminal, get the excutable path for phpcs: `which phpcs`, should give you back something like `/Users/yourname/.composer/vendor/bin/phpcs`
- In the PHPCS Extension settings add this to `Executable Path`
- Now you should see some squiglies or errors!
- If you get a `Cannot find phpcs...` JSON error, restart your computer.
- Comes with PHPCBF, and that can auto-format your code

## List of CLI Commands
- `phpcs -i` : see what's installed
- `phpcs --config-set installed_paths ~/wpcs` : install a standard
- `phpcs --config-set default_standard WordPress` : set the default standard
- `phpcs --help` : see options
- `phpcs wp-load.php` : evaluate a file
- `phpcbf wp-load.php` : auto-fix what can be fixed
- `phpcbf -p -s -v -n . --extentions=php` : auto fix the whole directory (BE CAREFUL AND REVIEW YOUR CODE!!!! THIS IS BASICALLY  A ***YOLO*** UPDATE 😂 😭)