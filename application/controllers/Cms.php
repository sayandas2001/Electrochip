<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Cms extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cms_model');
        $this->isLoggedIn();   
    }

    // public function index() 
    // {
    //     $this->global['pageTitle'] = 'Mil Paints : Dashboard';
        
    //     $this->loadViews("dashboard", $this->global, NULL, NULL);
    // }

    public function cms_listing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->cms_model->cms_listing_count($searchText);

            $returns = $this->paginationCompress ( "cms_listing/", $count, 10 );
            
            $data['cmss'] = $this->cms_model->cms_listing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'SKMAT : cms Listing';
            
            $this->loadViews("cms/cms_listing", $this->global, $data, NULL);
        }
    }

    function addcms()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('cms_model');
            
            $this->global['pageTitle'] = 'SKMAT : Add New cms';

            $this->loadViews("cms/addcms", $this->global, NULL);
        }
    }
    function addcmsConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title','Title','trim|required');
            
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addcms();
            }
            else
            {
                //if($this->cms_model->check_url($this->input->post('page_slug')) == FALSE){
                    $title = $this->input->post('title');
                    $image = $this->input->post('image');
                    $description = $this->input->post('description');
                    
                    $data = array(); 
                    if(!empty($_FILES['image'])){ 
                         // Set preference 
                        $config['upload_path'] = 'uploads/';
                        $config['allowed_types'] = 'jpg|jpeg|png'; 
                        $config['max_size'] = '10000'; // max_size in kb 
                        $config['file_name'] = $_FILES['image']['name']; 

                         // Load upload library 
                        $this->load->library('upload',$config); 
                        $this->upload->initialize($config);
                         // File upload
                        if($this->upload->do_upload('image')){
                            // Get data about the file
                            $uploadData = $this->upload->data(); 
                            $filename = $uploadData['file_name']; 
                            $data['response'] = 'successfully uploaded '.$filename; 
                        }else{ 
                            $data['response'] = 'failed'; 
                        } 
                    }else{ 
                         $data['response'] = 'failed'; 
                    }
                    $cmsInfo = array('title'=>$title, 'image'=>$filename,'description'=>$description, 'created_at'=>date('Y-m-d H:i:s'));
                    $this->load->model('cms_model');
                    $result = $this->cms_model->addcms($cmsInfo);

                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'Add successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Creation failed');
                    }
                    redirect('cms_listing');
                // } else {
                //     $this->session->set_flashdata('error', 'Page Slug already exists');
                //     redirect('addcms');
                // }
            }
        }
    }
    function editcms($cms_id = NULL)
    {
        if($this->isAdmin() == TRUE && $cms_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($cms_id == null)
            {
                redirect('cms_listing');
            }
            $data['cmsInfo'] = $this->cms_model->getcmsInfo($cms_id);
            
            $this->global['pageTitle'] = 'SKMAT : Edit cms';
            
            $this->loadViews("cms/editcms", $this->global, $data, NULL);
        }
    }
    function editcmsConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            $cms_id = $this->input->post('cms_id');
            
            $this->form_validation->set_rules('title','Title','trim|required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editcms($cms_id);
            }
            else
            {
                // if($this->cms_model->check_url($this->input->post('page_slug')) == FALSE){
                    $title = $this->input->post('title');
                    $image = $this->input->post('image');
                    $description = $this->input->post('description');

                    $cmsInfo = array('title'=>$title, 'description'=>$description, 'updated_at'=>date('Y-m-d H:i:s'));

                    $data = array(); 
                    if($_FILES['image']['name']!=""){ 
                         // Set preference 
                        $config['upload_path'] = 'uploads/';
                        $config['allowed_types'] = 'jpg|jpeg|png'; 
                        $config['max_size'] = '100000'; // max_size in kb 
                        $config['file_name'] = $_FILES['image']['name']; 

                         // Load upload library 
                        $this->load->library('upload',$config); 
                        $this->upload->initialize($config);
                         // File upload
                        if($this->upload->do_upload('image')){ 
                            // Get data about the file
                            $uploadData = $this->upload->data(); 
                            $filename = $uploadData['file_name']; 
                            $data['response'] = 'successfully uploaded '.$filename; 
                            $cmsInfo['image']=$filename;
                        }else{ 
                            $data['response'] = 'failed'; 
                        } 
                    }else{ 
                        $data['response'] = 'failed'; 
                    }

                    // dd($cmsInfo);

                    $result = $this->cms_model->editcms($cmsInfo, $cms_id);
                    
                    if($result == true)
                    {
                        $this->session->set_flashdata('success', 'Updated successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Updation failed');
                    }
                    redirect('cms_listing');
            }
        }
    }
    function deletecms($cms_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->cms_model->deleteInfo($cms_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
            redirect('cms_listing');
        }
    }
}
?>