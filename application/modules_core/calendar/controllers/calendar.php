<?php
/**
 * Calendar controller class
 *
 * PHP Version 5.4
 *
 * @category Controller
 * @package  SimpleQuoteManager
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <mail@damiensenger.me>
 * @license  GPL-3.0 http://www.gnu.org/licenses/gpl.html
 * @link     https://github.com/kwott/SimpleQuoteManager
 * */
(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Calendar controller
 *
 * PHP Version 5.4
 *
 * @category Controller
 * @package  SimpleQuoteManager
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <mail@damiensenger.me>
 * @license  GPL-3.0 http://www.gnu.org/licenses/gpl.html
 * @link     https://github.com/kwott/SimpleQuoteManager
 * */
class Calendar extends Admin_Controller
{

    /**
     * Calendar constructor
     *
     * @return void
     * */
    function __construct()
    {

        parent::__construct();

        if ($this->input->post('btn_list_view')) {

            redirect('invoices');

        } elseif ($this->input->post('btn_add_invoice')) {

            redirect('invoices/create');

        }

        $this->load->model('invoices/mdl_invoices');

    }

    /**
     * Display index
     *
     * @return void
     * */
    function index()
    {

        $this->load->view('index');

    }

    /**
     * Display invoices in JSON format for jQuery Fullcalendar
     *
     * @param string $status Status of invoices to display
     *
     * @return void
     * */
    public function jqueryGetInvoices($status = 'open')
    {

        $function = "get_" . $status;

        $invoices = $this->mdl_invoices->$function();

        $inv_array = array();

        foreach ($invoices as $invoice) {
            $inv_array[] = array(
                'id'    => $invoice->invoice_id,
                'title' => $invoice->client_name.' ('.
                    display_currency($invoice->invoice_total).')',
                'start' => date('Y-m-d', $invoice->invoice_date_entered),
                'url'   => './invoices/edit/invoice_id/'. $invoice->invoice_id,
            );

        }

        echo json_encode($inv_array);
    }

}
