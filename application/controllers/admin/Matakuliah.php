<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Matakuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("daftarmatakuliah_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data["matakuliah"] = $this->daftarmatakuliah_model->getAll();
        $this->load->view("admin/daftarmatakuliah/list", $data);
    }
    public function add()
    {
        $daftarmatakuliah = $this->daftarmatakuliah_model;
        $validation = $this->form_validation;
        $validation->set_rules($daftarmatakuliah->rules());
        if ($validation->run()) {
            $daftarmatakuliah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("admin/daftarmatakuliah/new_form");
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/matakuliah');

        $daftarmatakuliah = $this->daftarmatakuliah_model;
        $validation = $this->form_validation;
        $validation->set_rules($daftarmatakuliah->rules());
        if ($validation->run()) {
            $daftarmatakuliah->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["daftarmatakuliah"] = $daftarmatakuliah->getById($id);
        if (!$data["daftarmatakuliah"]) show_404();

        $this->load->view("admin/daftarmatakuliah/edit_form", $data);
    }
    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->daftarmatakuliah_model->delete($id)) {
            redirect(site_url('admin/matakuliah'));
        }
    }
}
