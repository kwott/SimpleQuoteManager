<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <?php $this->load->view('css'); ?>

    </head>
    <body>

        <h1><?php echo $this->lang->line('client_statement'); ?></h1>

        <?php $this->load->view('client_statement_view'); ?>

    </body>
</html>
