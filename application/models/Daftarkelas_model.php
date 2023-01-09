<?php defined('BASEPATH') or exit('No direct script access allowed');
class Daftarkelas_model extends CI_Model
{
    private $_table = "kelas";
    public $id;
    public $nama_kelas;
    public function rules()
    {
        return [
            [
                'field' => 'nama_kelas',
                'label' => 'nama_kelas',
                'rules' => 'required'
            ],
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama_kelas = $post["nama_kelas"];
        return $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_kelas = $post["nama_kelas"];;
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
