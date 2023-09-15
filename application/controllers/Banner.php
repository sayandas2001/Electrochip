<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Banner extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('banner_model');
        $this->isLoggedIn();   
    }

    public function banner_listing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $data['allbanner'] = $this->banner_model->banner_listing();
            $this->global['pageTitle'] = 'banner Listing';
            $this->loadViews("banner/banner_listing", $this->global, $data, NULL);
        }
    }

    public function add()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->global['pageTitle'] = 'Mil Paints : Add banner';
            $this->loadViews('banner/addbanner', $this->global, NULL);
        }
    }

    public function addbanner()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('title','Title','trim|required');
            // $this->form_validation->set_rules('image','Image','trim|required');

            
            if($this->form_validation->run() == FALSE)
            {
                $this->add();
            }
            else
            {   
                $title = $this->input->post('title');
                $image = $this->input->post('image');

                //dd($_FILES);
                $data = array(); 
                    if(!empty($_FILES['image'])){ 
                        $config['upload_path'] = "uploads/";
                        $config['allowed_types'] = 'jpg|jpeg|png|mp4'; 
                        $config['max_size'] = '10000'; // max_size in kb 
                        $config['file_name'] = $_FILES['image']['name'];
                        
                        // Load upload library 
                        $this->load->library('upload',$config); 
                        $this->upload->initialize($config);
                        if($this->upload->do_upload('image')){ 
                            // Get data about the file
                            //dd($_FILES['image']['name']);die;
                            $uploadData = $this->upload->data(); 
                            $filename = $uploadData['file_name']; 
                            $data['response'] = 'successfully uploaded '.$filename; 
                        }else{ 
                            $data['response'] = 'failed'; 
                        } 
                    }else{ 
                        $data['response'] = 'failed'; 
                    } 
                $this->load->view('banner/addbanner',$data);

                $post_data = array(
                    'title' => $title, 'image'=>$filename, 'created_at'=>date('Y-m-d H:i:s')
                );
                //dd($post_data); 
                $result = $this->banner_model->addbanner($post_data);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Add successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Creation failed');
                }

                redirect('banner/banner_listing');
            }
            
        }
    }

    public function edit($banner_id)
    {
        if($this->isAdmin() == TRUE && $banner_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($banner_id == null)
            {
                redirect('banner/banner_listing');
            }
            $data['bannerInfo'] = $this->banner_model->getbannerInfoById($banner_id);
            
            $this->global['pageTitle'] = 'Mil Paints : Edit banner';
            
            $this->loadViews("banner/editbanner", $this->global, $data, NULL);
        }
    }

    function editbanner()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $banner_id = $this->input->post('banner_id');
            
            $this->form_validation->set_rules('title','Section','trim|required');
            // $this->form_validation->set_rules('image','Image','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->editbanner($banner_id);
            }
            else
            {
                $title = $this->input->post('title');
                
                $bannerInfo = array('title'=>$title, 'updated_at'=>date('Y-m-d H:i:s'));
                
                $data = array(); 
                if($_FILES['image']['name']!=""){ 
                     // Set preference 
                    $config['upload_path'] = 'uploads/';
                    $config['allowed_types'] = 'jpg|jpeg|png|mp4'; 
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
                        $bannerInfo['image']=$filename;
                    }else{ 
                        $data['response'] = 'failed'; 
                    } 
                }else{ 
                    $data['response'] = 'failed'; 
                }
                // dd($bannerInfo);
                $result = $this->banner_model->editbanner($bannerInfo, $banner_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                
                redirect('banner/banner_listing');
            }
        }
    }

    public function deletebanner($banner_id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {         
            $result = $this->banner_model->deleteInfo($banner_id);            
            $this->session->set_flashdata('success', 'Deleted successfully');
            redirect('banner/banner_listing');
        }
    }

}
?>