<?php
/**
 * Config creation script
 *
 * PHP Version 5.4
 *
 * @category Index
 * @package  SimpleQuoteManager
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <mail@damiensenger.me>
 * @license  GPL-3.0 http://www.gnu.org/licenses/gpl.html
 * @link     https://github.com/kwott/SimpleQuoteManager
 * */
$env = getenv("DBNAME");
if (isset($env) && !empty($env)) {
    $config = '
    $db["default"]["hostname"] = "'.getenv("DBHOST").'";
    $db["default"]["username"] = "'.getenv("DBUSER").'";
    $db["default"]["password"] = "'.getenv("DBPASS").'";
    $db["default"]["database"] = "'.getenv("DBNAME").'";
    $db["default"]["port"] = "'.getenv("DBPORT").'";';
    file_put_contents(
        "application/config/database.php", $config.PHP_EOL, FILE_APPEND
    );
}
