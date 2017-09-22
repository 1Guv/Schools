<?php
class School extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function get($id)
    {
      $where['id'] = $id;
      $result_set = $this->db->get_where('schools', $where);
      $result_arr = $result_set->result_array();
      return $result_arr[0];
    }

    public function update($id, $new_data)
    {
      $where['id'] = $id;
      $this->db->update('schools', $new_data, $where);
    }

    public function connection_test()
    {
      $this->load->database('default', TRUE);
    }

    public function get_version()
    {
      $result_set = $this->db->query('SELECT VERSION()');
      return $result_set;
    }

    public function all()
    {
      $result_set = $this->db->get('schools');
      return $result_set->result_array();
    }

    public function uniq_schools()
    {
      $query = $this->db->query("SELECT DISTINCT school FROM schools order by school");
      $result = $query->result_array();
      return $result;
    }

}
