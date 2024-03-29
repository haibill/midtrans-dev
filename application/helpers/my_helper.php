<?php

function rp($a)
{
	if (!is_numeric($a)) return NULL;
	$jumlah_desimal     =  "0";
	$pemisah_desimal    =  ",";
	$pemisah_ribuan     =  ".";
	$angka = "Rp." . number_format($a, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);
	return $angka;
}

function flashdata($message)
{
	$ci    = get_instance();
	$notif =  $ci->session->set_flashdata('success', "<div id='$message'></div>");
	return $notif;
}

function checkAction($action)
{
	if ($action == 'save') {
		return $message = 'success';
	} else {
		return $message = 'update';
	}
}
