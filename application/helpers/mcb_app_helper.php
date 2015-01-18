<?php
/**
 * Helper to access some general settings
 *
 * PHP Version 5.4
 *
 * @category Helper
 * @package  SimpleQuoteManager
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <mail@damiensenger.me>
 * @license  GPL-3.0 http://www.gnu.org/licenses/gpl.html
 * @link     https://github.com/kwott/SimpleQuoteManager
 * */
if ( ! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Return the application title
 *
 * @return string Application title
 * */
function applicationTitle()
{

    $CI =& get_instance();

    return ($CI->mdl_mcb_data->setting('application_title'))
        ? $CI->mdl_mcb_data->setting('application_title')
        : $CI->lang->line('myclientbase');

}

/**
 * Return the application logo
 *
 * @return string Application logo URL
 * */
function applicationLogo()
{
    global $CFG;
    return base_url().$CFG->item('application_logo');
}

/**
 * Return the favicon
 *
 * @return string Favicon URL
 * */
function favicon()
{
    global $CFG;
    return base_url().$CFG->item('favicon');
}


?>
