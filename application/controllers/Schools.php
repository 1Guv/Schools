<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Schools extends CI_Controller
{
   public function index()
   {
   	$data['user_name'] = 'Guv';

    $data['schools_group'] = $this->School->uniq_schools();

    $data['schools_list'] = $this->School->all();

   	$this->load->view('layouts/header');
   	$this->load->view('layouts/foundation_nav');
   	$this->load->view('schools/index', $data);
   	$this->load->view('layouts/footer');
   }

   public function show($id)
   {
     $data['id'] = $id;

     $data['school'] =$this->School->get($id);
     $version = $this->School->get_version();
     $data['version'] = $version->conn_id->server_info;
     $this->load->view('layouts/header');
     $this->load->view('layouts/foundation_nav');
     $this->load->view('schools/show', $data);
     $this->load->view('layouts/footer');
   }

   public function db_test()
   {
     $this->School->connection_test();
   }

   public function edit($id)
   {
     if($_POST)
     {
       $school = $this->input->post('school');
       $name = $this->input->post('name');
       $email = $this->input->post('email');

       $new_data['school'] = $school;
       $new_data['name'] = $name;
       $new_data['email'] = $email;

       $this->School->update($id, $new_data);
       redirect('schools/index');
     }


     $data['school_list'] = $this->School->get($id);
     $this->load->view('layouts/header');
     $this->load->view('layouts/foundation_nav');
     $this->load->view('schools/edit', $data);
     $this->load->view('layouts/footer');
   }

   public function new_school()
   {
     if($_POST)
     {
       $data = array(
         "school" =>$this->input->post("school"),
         "name" =>$this->input->post("name"),
         "email" =>$this->input->post("email"),
       );

       $this->db->insert("schools", $data);
       redirect('schools/index');
     }

    //  $data['school_list'] = $this->School->get($data);
     $this->load->view('layouts/header');
     $this->load->view('layouts/foundation_nav');
     $this->load->view('schools/new_school');
     $this->load->view('layouts/footer');
   }

}
