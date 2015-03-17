<script type="text/javascript">

    $(function() {

        $('.output_link').click(function() {

            invoice_id = $(this).attr('id');

        });

        function generate_invoice() {

            var output_type = $('#output_type').val();

            download_url = '<?php echo site_url('client_center/generate_'); ?>' + output_type + '/invoice_id/' + invoice_id;

            window.open(download_url);

        }

    });

</script>

<div id="output_dialog">
    <table style="width: 100%;">
        <tr>
            <td><?php echo $this->lang->line('output_type'); ?>: </td>
            <td>
                <select name="output_type" id="output_type">
                    <option value="pdf"><?php echo $this->lang->line('pdf'); ?></option>
                    <option value="html"><?php echo $this->lang->line('html'); ?></option>
                </select>
            </td>
    </table>
</div>
