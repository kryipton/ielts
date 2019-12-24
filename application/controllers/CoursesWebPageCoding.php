<?php
 class CoursesWebPageCoding extends CI_Controller{
     private $parent_folder = "";
     private $sub_folder = "";

     public function __construct()
     {
         parent::__construct();

         $this->parent_folder = "front";
         $this->sub_folder = "courses";


        $dil = $this->uri->segment(1);
         if ($dil == ""){
             $dil = "az";
         }
         $this->lang->load($dil, $dil);

         $this->session->set_userdata("dil", $dil);

     }

     public function index($lang, $id)
     {

         //single kursun cagirilmasi
         $data["course"] = $this->Core->get_where_row(array("id" => $id), "course");
         $lang = $this->session->userdata("dil");
         if (empty($data["course"])){
             redirect(base_url("$lang/home"));
         }
         //single kursun cagirilmasi


         //bu kursun mellimlerinin cagirilmasi
         $all_teacher_for_courses = $this->Core->get_where_result_desc(array("course_id" => $id), "course_teachers");

         $all_teacher_ids = [];

         if (!empty($all_teacher_for_courses)){

             foreach ($all_teacher_for_courses as $item){
                 $all_teacher_ids[] = $item["teacher_id"];
             }

         }

         if(!empty($all_teacher_ids)){
             $data['teachers'] = $this->db->where_in("id", $all_teacher_ids)->get("teachers")->result_array();
         }else{
             $data['teachers'];
         }
         //bu kursun mellimlerinin cagirilmasi


         $data["courses"] = $this->Core->get_desc("course");

         $this->load->view("$this->parent_folder/$this->sub_folder/single_page", $data);
     }


 }