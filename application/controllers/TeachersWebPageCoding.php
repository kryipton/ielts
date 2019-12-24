<?php
 class TeachersWebPageCoding extends CI_Controller{
     private $parent_folder = "";
     private $sub_folder = "";

     public function __construct()
     {
         parent::__construct();

         $this->parent_folder = "front";
         $this->sub_folder = "teachers";


        $dil = $this->uri->segment(1);
         if ($dil == ""){
             $dil = "az";
         }
         $this->lang->load($dil, $dil);

         $this->session->set_userdata("dil", $dil);
         $this->load->model("Core");
     }

     public function index()
     {
         $data["courses"] = $this->Core->get_desc("course");
         $data['teachers'] = $this->Core->get_desc('teachers');
         $data['teachers_about'] = $this->Core->get_row('teachers_about');
         $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);
     }

     public function single($lang,$id)
     {
         $data["courses"] = $this->Core->get_desc("course");
         $data['teacher'] = $this->Core->get_where_row(['id' => $id],'teachers');
         $this->load->view("$this->parent_folder/$this->sub_folder/single_page",$data);
     }


 }