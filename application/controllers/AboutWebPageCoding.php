<?php
 class AboutWebPageCoding extends CI_Controller{
     private $parent_folder = "";
     private $sub_folder = "";

     public function __construct()
     {
         parent::__construct();

         $this->parent_folder = "front";
         $this->sub_folder = "about";


      $dil = $this->uri->segment(1);
         if ($dil == ""){
             $dil = "az";
         }
         $this->lang->load($dil, $dil);

         $this->session->set_userdata("dil", $dil);

     }

     public function index()
     {
         $data["contact"] = $this->Core->get_where_row(array("id => 1"), "contact");
         $data["logo"] = $this->Core->get_where_row(array("id => 1"), "logo");
         $data["latest_blogs"] = $this->Core->get_desc_limit("blog", 3);

         $data["about"]=$this->Core->get_where_row(["id"=>1],"about");
         $data["courses"] = $this->Core->get_desc("course");
         //telebe kurs sayisi counteri ucun
         $data["info"]=$this->Core->get_where_row(["id"=>1],"info");
         //telebe kurs sayisi counteri ucun

         $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);
     }


 }