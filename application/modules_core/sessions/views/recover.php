<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo applicationTitle(); ?></title>
        <link href="<?php echo themeFolder(); ?>/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/style/css/ie6.css" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/style/css/ie7.css" /><![endif]-->
        <link type="text/css" href="<?php echo base_url(); ?>assets/jquery/ui-themes/myclientbase/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo base_url(); ?>bower_components/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
        <link href='<?php echo favicon(); ?>' rel='icon' />
    </head>
    <body class="<?php echo $this->_module; ?>">

        <div class="container_10" id="center_wrapper">

            <div class="grid_5 push_2" id="content_wrapper">

                <div class="section_wrapper">

                    <h3 class="title_black"><?php echo applicationTitle() . ' - ' . $this->lang->line('password_recovery'); ?></h3>

                    <?php $this->load->view('dashboard/system_messages'); ?>

                    <div class="content toggle">

                        <p><?php echo $this->lang->line('recover_text'); ?></p>

                        <form method="post" action="<?php echo site_url($this->uri->uri_string()); ?>">
                            
                            <dl>
                                <dt><label><?php echo $this->lang->line('username'); ?>: </label></dt>
                                <dd><input type="text" value="" id="username" autofocus name="username" /></dd>
                            </dl>

                            <input type="submit" value="<?php echo $this->lang->line('submit'); ?>" name="btn_submit" id="btn_submit" />

                        </form>

                        <div style="clear: both;">&nbsp;</div>

                    </div>

                </div>

            </div>
        </div>


    </body>
</html>
