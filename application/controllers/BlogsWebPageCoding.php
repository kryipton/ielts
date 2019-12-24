<?php
 class BlogsWebPageCoding extends CI_Controller{
     private $parent_folder = "";
     private $sub_folder = "";

     public function __construct()
     {
         parent::__construct();

         $this->parent_folder = "front";
         $this->sub_folder = "blogs";


        $dil = $this->uri->segment(1);
         if ($dil == ""){
             $dil = "az";
         }
         $this->lang->load($dil, $dil);

         $this->session->set_userdata("dil", $dil);

     }

     public function index()
     {

         //--------------pagination start------------
         $this->load->library('pagination');

         $config["base_url"]    = base_url($this->uri->segment(1) . "/blogs");
         $config["total_rows"]  = $this->Core->get_counts("blog");
         $config["uri_segment"] = 3;
         $config["per_page"]    = 12;

         $config["num_links"] = 4;
         $config['full_tag_open']    = "<ul class=\"pagination\">";
         $config['full_tag_close']   = " </ul>";



         $config['first_link'] = '&lt;&lt;';
         $config['first_tag_open'] = '<li>';
         $config['first_tag_close'] = '</li>';

         $config['last_link'] = '&gt;&gt;';
         $config['last_tag_open'] = '<li >';
         $config['last_tag_close'] = '</li>';

         $config['next_link'] = ' &gt; ';
         $config['next_tag_open'] = '<li class="page-item">';
         $config['next_tag_close'] = '</li>';

         $config['prev_link'] = ' &lt; ';

         $config['prev_tag_open'] = '<li>';
         $config['prev_tag_close'] = '</li>';

         $config['cur_tag_open'] = '<li class="active"><a href="">';
         $config['cur_tag_close'] = '</a></li>';

         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';

         $this->pagination->initialize($config);

         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


         $this->db->select('blog.id, blog.name_az, blog.name_en, blog.name_ru, blog.desc_az, blog.desc_en, blog.desc_ru, blog.img, blog.date, blog_category.category_name_az, blog_category.category_name_en, blog_category.category_name_ru');
         $this->db->from('blog', "blog_category");
         $this->db->order_by("blog.id", "DESC")->limit($config["per_page"], $page);
         $this->db->join('blog_category', 'blog.blog_category_id = blog_category.id');
         $data["blogs"] = $this->db->get()->result_array();

         $data['links']  = $this->pagination->create_links();
         //--------------pagination end------------







         $data["courses"] = $this->Core->get_desc("course");

         $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);
     }

     public function single($lang, $id)
     {

         $data["blog"]=$this->Core->get_where_row(["id"=>$id],"blog");
         $data["blog_category"] = $this->Core->get_where_row(array("id" => $data["blog"]["blog_category_id"]), "blog_category");

         $data["courses"] = $this->Core->get_desc("course");

         $this->load->view("$this->parent_folder/$this->sub_folder/single_page", $data);
     }


 }