<?php
/**
 * Header used on most pages
 *
 * PHP Version 5.4
 *
 * @category View
 * @package  SimpleQuoteManager
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <mail@damiensenger.me>
 * @license  GPL-3.0 http://www.gnu.org/licenses/gpl.html
 * @link     https://github.com/kwott/SimpleQuoteManager
 * */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title><?php echo applicationTitle(),
                ' - ', $this->lang->line($this->_module); ?></title>
            <link href="<?php echo themeFolder(); ?>/css/main.css"
                rel="stylesheet" type="text/css" media="screen" />
            <!--[if IE 6]><link rel="stylesheet" type="text/css"
                media="screen"
                href="<?php echo base_url(); ?>assets/style/css/ie6.css"
            /><![endif]-->
            <!--[if IE 7]><link rel="stylesheet" type="text/css"
                media="screen"
                href="<?php echo base_url(); ?>assets/style/css/ie7.css"
            /><![endif]-->
            <link type="text/css"
                href="<?php echo base_url();
                ?>assets/jquery/ui-themes/myclientbase/jquery-ui-1.8.16.custom.css"
                rel="stylesheet" />
            <script type="text/javascript"
                src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js">
            </script>
            <script type="text/javascript"
                src="<?php echo base_url();
                ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
            <script src="<?php echo base_url();
                ?>bower_components/jquery-maskedinput/src/jquery.maskedinput.js"
                type="text/javascript"></script>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans'
                rel='stylesheet' type='text/css' />
            <link href='<?php echo favicon(); ?>' rel='icon' />

<?php if (isset($header_insert)) {
    if (!is_array($header_insert)) {
        $this->load->view($header_insert);
    } else {
        foreach ($header_insert as $insert) {
            $this->load->view($insert);
        }
    }
} ?>

        </head>
        <body class="<?php echo $this->_module; ?>">

                <div id="header_wrapper">

                        <div class="container_10" id="header_content">

                                <h1><img
                                    src="<?php echo applicationLogo(); ?>"
                                    alt="<?php echo applicationTitle(); ?>" /></h1>

                        </div>

                </div>

                <div id="navigation_wrapper">

                        <ul class="sf-menu" id="navigation">

<?php echo modules::run(
    'mcb_menu/display', array('view'=>'dashboard/header_menu')
); ?>

                        </ul>

                </div>

                <div class="container_10" id="center_wrapper">
