<?php
class form extends CI_controller {
    public function index()
    {
$this-> load -> helper (array ('form', 'url'));
$this-> load -> library ('form_validation');    

$this->from_validation -> set_rules('nama','nama', 'callback_nama_check');
$this->from_validation -> set_rules('No Anggota','No Anggota', 'callback_No Anggota_check');
$this->from_validation -> set_rules('No telepon','No telepon', 'callback_No telepon_check');

if ($this -> form_validation->run() == false)
{
    $this -> load ->view ('index');
} else{
    $this -> load ->view ('fromsucces');
}};