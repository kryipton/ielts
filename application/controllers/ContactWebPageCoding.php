<?php
 class ContactWebPageCoding extends CI_Controller{
     private $parent_folder = "";
     private $sub_folder = "";

     public function __construct()
     {
         parent::__construct();

         $this->parent_folder = "front";
         $this->sub_folder = "contact";

        $dil = $this->uri->segment(1);
         if ($dil == ""){
             $dil = "az";
         }
         $this->lang->load($dil, $dil);

         $this->session->set_userdata("dil", $dil);

     }

     public function index()
     {
         $data["courses"] = $this->Core->get_desc("course");
         $data["contact"] = $this->Core->get_where_row(array("id => 1"), "contact");
         $data["logo"] = $this->Core->get_where_row(array("id => 1"), "logo");
         $data["latest_blogs"] = $this->Core->get_desc_limit("blog", 3);

         $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);
     }

     public function send_message()
     {

         $name=strip_tags($this->input->post("name"));
         $mail=strip_tags($this->input->post("email"));
         $phone=strip_tags($this->input->post("phone"));
         $msg=strip_tags($this->input->post("message"));

         if (!empty($name) && !empty($mail) && !empty($phone) && !empty($msg) ) {
             $config = Array(
                 'protocol' => 'smtp',
                 'smtp_host' => 'ssl://smtp.googlemail.com',
                 'smtp_port' => 465,
                 'smtp_user' => 'testermail0777@gmail.com',
                 'smtp_pass' => 'testerCODE',
                 'mailtype' => 'html',
                 'charset' => 'html',
                 'wordwrap' => TRUE,);

             $this->load->library("email");
             $this->email->initialize($config);
             $this->email->set_newline("\r\n");
             $this->email->from('testermail0777@gmail.com', $this->input->post('name'));
             $this->email->to("mutalib0101@gmail.com");
             $this->email->subject(' Ielts Coaching  ');
             $this->email->message("$name adlı şəxsdən mesaj:<br> $msg <br> <br> <strong>Şəxslə əlaqə:</strong> <br> $mail <br> $phone");
             $this->email->send();


             $data= [
                 "name_surname" => $name,
                 "email" => $mail,
                 "phone" => $phone,
                 "text" => $msg
             ];
             $this->Core->add($data,"messages");

             $this->session->set_flashdata("sccs", "Mesajınız göndərildi! Sizinlə tezliklə əlaqə saxlanılacaqdır.");
         }else{
             $this->session->set_flashdata("alert", "Mesajınız göndərilə bilmədi!");
         }

           redirect($_SERVER['HTTP_REFERER']);
     }



 }