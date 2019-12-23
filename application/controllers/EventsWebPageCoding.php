<?php
 class EventsWebPageCoding extends CI_Controller{
     private $parent_folder = "";
     private $sub_folder = "";

     public function __construct()
     {
         parent::__construct();

         $this->parent_folder = "front";
         $this->sub_folder = "events";


        $dil = $this->uri->segment(1);
         if ($dil == ""){
             $dil = "az";
         }
         $this->lang->load($dil, $dil);

         $this->session->set_userdata("dil", $dil);

     }

     public function index()
     {
         $data['events'] = $this->Core->get_desc('events');
         $data['event_about'] = $this->Core->get_row('event_about');
         $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);
     }

     public function single($lang,$id)
     {
         $data['event'] = $this->Core->get_where_row(['id' => $id],'events');
         $data['images'] = $this->Core->get_where_result_desc(['id' => $data['event']['id']],'event_gallery');
         $this->load->view("$this->parent_folder/$this->sub_folder/single_page",$data);
     }


 }