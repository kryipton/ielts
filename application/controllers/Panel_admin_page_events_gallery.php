<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Panel_admin_page_events_gallery extends MY_Controller{

    private $view_folder = "";
    private $table_name= "";
    private $upload_path= "";
    private $label_name_and_input_name = "";
    private $update_link = "";
    private $add_link = "";
    private $delete_link = "";
    private $link_for_update_modal = "";
    private $success_link = "";
    private $error_link = "";
    private $get_data_link = "";
    private $input_name_type ="";
    private $field_names ="";
    private $add_update_input_array  ="";
    private $table_file_field_names  ="";


    public function __construct()
    {
        parent::__construct();

//      adminin icindeki papkanin adi
        $this->view_folder = "event_gallery";

//      tablemizin adi
        $this->table_name = "event_gallery";

//      sekilleri ve fayllari yukleyeceyimiz yer meselen: base_url("uploads/teachers/")
        $this->upload_path = "uploads/events/";

//      eger sekil veya file varsa tablenin hansi fieldinnen adini goturub papkadan silsin
        $this->table_file_field_names = array(
            "file",
        );

//==============================================================================================

//      tablemizin fieldlerinin array icinde siralanmasi BU DEYISILMIR!
        $this->field_names = $this->Core->list_fields($this->table_name);

        $this->label_name_and_input_name = array();

        $this->input_name_type = array();

//==============================================================================================

//      tabledeki melumatlarin delete olunduqu link
        $this->delete_link                    = base_url("Panel_admin_page_events_gallery/delete/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

//      data tablenin icine melumatlarin ajaxnan getirilmesi ucun lazim olan link
        $this->get_data_link                  = base_url("Panel_admin_page_events_gallery/get_data");
    }

    public function index($id)
    {
        $this->session->set_userdata("c", $id);

        $data["get_data_link"] = $this->get_data_link;
        $data["field_names"] = $this->field_names;
        $data["view_folder"] = $this->view_folder;
        $data["id"] = $id;
        $this->load->view('admin/includes/index', $data);
    }

    public function get_data()
    {


        $tour_image_ids = $this->Core->get_where_result_desc(array("event_id" => $this->session->userdata("c")), "event_gallery");
        $id_array = [];
        foreach ($tour_image_ids as $item){
            $id_array[] = $item["id"];
        }

        $config["id"] = "id";
        $config["id_array"] = $id_array;
        $config["additional_links"] = array();
        $config["table_name"] = $this->table_name;
        $config["upload_path"] = $this->upload_path;
        $config["delete_link"] = $this->delete_link;
        $config["link_for_update_modal"] = $this->link_for_update_modal;

        $this->data_table_array($config);

    }

    public function add($id)
    {

        //      sekiller dropzonedan upload edilir
        $config['upload_path'] = "uploads/events";
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES["file"]['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $cond = $this->upload->do_upload("file");


        //      upload edilecek sekil database e yuklenir
        $data  = array(
            "file"    => ($cond) ? $this->upload->data('file_name') : "default.png",
            "event_id" => $id,
        );

        $this->Core->add($data, $this->table_name);


    }

    public function delete($id)
    {

        $tour_id = $this->session->userdata("c");

        $config["where"] = array(
            "id"=> $id,
        );
        $config["table_file_field_names"] = $this->table_file_field_names;
        $config["success_link"] = base_url("Panel_admin_page_events_gallery/index/$tour_id");
        $config["error_link"] = base_url("Panel_admin_page_events_gallery/index/$tour_id");
        $config["upload_path"] = $this->upload_path;
        $config["table_name"] = $this->table_name;

        $this->delete_db($config);


    }



}