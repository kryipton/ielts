<?php
 class HomeWebPageCoding extends CI_Controller{
     private $parent_folder = "";
     private $sub_folder = "";

     public function __construct()
     {
         parent::__construct();

         $this->parent_folder = "front";
         $this->sub_folder = "home";


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

         //telebe kurs sayisi counteri ucun
         $data["info"]=$this->Core->get_where_row(["id"=>1],"info");
         //telebe kurs sayisi counteri ucun

         $data["slides"] = $this->Core->get_desc("main_slide");
         $data["courses"] = $this->Core->get_desc("course");
         $data["course_about"] = $this->Core->get_where_row(array("id => 1"), "course_about");
         $data["message_about"] = $this->Core->get_where_row(array("id => 1"), "messages_about");
         $data["teachers_about"] = $this->Core->get_where_row(array("id => 1"), "teachers_about");
         $data["teachers"] = $this->Core->get_desc_limit("teachers", 4);
         $data["feedbacks"] = $this->Core->get_desc("feedbacks");
         $data["events"] = $this->Core->get_desc("events");
         $data["events_about"] = $this->Core->get_where_row(array("id => 1"), "event_about");


         $this->db->select('blog.id, blog.name_az, blog.name_en, blog.name_ru, blog.desc_az, blog.desc_en, blog.desc_ru, blog.img, blog.date, blog_category.category_name_az, blog_category.category_name_en, blog_category.category_name_ru');
         $this->db->from('blog', "blog_category");
         $this->db->order_by("blog.id", "DESC");
         $this->db->join('blog_category', 'blog.blog_category_id = blog_category.id');
         $data["blogs"] = $this->db->get()->result_array();


         $this->load->view("$this->parent_folder/$this->sub_folder/whole_page",$data);
     }


 }