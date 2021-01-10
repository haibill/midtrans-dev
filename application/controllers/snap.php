<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$params = array('server_key' => 'SB-Mid-server-wC7fbnREZIUaXmoHhDuLi-60', 'production' => false);
		$this->midtrans->config($params);
	}

	public function index()
	{
		$data['menu']    = "Midtrans X CodeIgniter";
		$data['submenu'] = "Simulation";
		$data['student'] = $this->StudentModel->get();
		$data['list']    = $this->get();
		$this->template->load('layout/template', 'checkout_snap', $data);
	}

	public function token()
	{

		$kode_pelanggan = $this->input->post('kode_pelanggan');
		$kelas = $this->input->post('kelas');
		$bayar = $this->input->post('bayar');

		// Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $bayar, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
			'id' => 'a1',
			'price' => $bayar,
			'quantity' => 1,
			'name' => "Pembayaran SPP " . $kelas
		);

		// Optional
		$item_details = array($item1_details);

		// Optional
		// $billing_address = array(
		// 	'first_name'    => "Andri",
		// 	'last_name'     => "Litani",
		// 	'address'       => "Mangga 20",
		// 	'city'          => "Jakarta",
		// 	'postal_code'   => "16602",
		// 	'phone'         => "081122334455",
		// 	'country_code'  => 'IDN'
		// );

		// Optional
		// $shipping_address = array(
		// 	'first_name'    => "Obet",
		// 	'last_name'     => "Supriadi",
		// 	'address'       => "Manggis 90",
		// 	'city'          => "Jakarta",
		// 	'postal_code'   => "16601",
		// 	'phone'         => "08113366345",
		// 	'country_code'  => 'IDN'
		// );

		$this->db->where('kode_pelanggan', $kode_pelanggan);
		$result = $this->db->get('pelanggan')->row_array();
		// Optional
		$customer_details = array(
			'first_name'    => $result['nama'],
			// 'last_name'     => "Balyan",
			// 'email'         => "andri@litani.com",
			'phone'         => $result['no_hp'],
			'billing_address'  => $result['alamat'],
			'shipping_address' => $result['alamat']
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
		//ser save_card true to enable oneclick or 2click
		//$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O", $time),
			'unit'       => 'minute',
			'duration'   => 2
		);

		$transaction_data = array(
			'transaction_details' => $transaction_details,
			'item_details'        => $item_details,
			'customer_details'    => $customer_details,
			'credit_card'         => $credit_card,
			'expiry'              => $custom_expiry
		);

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}

	public function finish()
	{
		$student_id = $_POST['student_id'];
		$grade          = $_POST['grade'];
		$result         = json_decode($this->input->post('result_data'), true);
		// echo "<pre>";
		// var_dump($result);
		// echo "</pre>";
		// die();
		$this->db->set('order_id', $result['order_id']);
		$this->db->set('student_id', $student_id);
		$this->db->set('grade', $grade);
		$this->db->set('gross_amount', $result['gross_amount']);
		$this->db->set('payment_type', $result['payment_type']);
		$this->db->set('transaction_time', $result['transaction_time']);
		$this->db->set('bank', $result['va_numbers'][0]['bank']);
		$this->db->set('va_number', $result['va_numbers'][0]['va_number']);
		$this->db->set('pdf_url', $result['pdf_url']);
		$this->db->set('status_code', $result['status_code']);
		$this->db->insert('midtrans');
		redirect('snap');
	}

	public function get()
	{
		$this->db->from('student a');
		$this->db->join('midtrans b', 'a.student_id = b.student_id');
		return $this->db->get()->result_array();
	}
}
