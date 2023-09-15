<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class About extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('About_model');
        $this->isLoggedIn();   
    }

    public function about_listing()
    {
        $data['allabout'] = $this->About_model->getAboutInfo();
        $this->load->view('about/about_listing', $data);
    }

    public function addabout()
    {
        $this->load->view('about/addabout');
    }

    public function addAboutConfig()
    {
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

        $aboutUsInfo = array(
            'title'=> $this->input->post('title'),
            'image' => $filename,
            'description'=> $this->input->post('description'),
        );

        $result = $this->About_model->insert($aboutUsInfo);
        if($result > 0)
        {
            $this->session->set_flashdata('success', 'Add successfully');
        }
        else
        {
            $this->session->set_flashdata('error', 'Creation failed');
        }

        redirect('about/about_listing');
    }

    public function editabout($about_id)
    {
        $data['aboutInfo'] = $this->About_model->getaboutInfoById($about_id);
        $this->load->view("about/editabout", $data);
        

    }    

    function editaboutConfig()
    {
        $title = $this->input->post('title');
        $description= $this->input->post('description');

        $about_id=$this->input->post('about_id');
       

        $aboutInfo = array('title'=>$title, 'description'=>$description);
        
        
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
                $aboutInfo['image']=$filename;
            }else{ 
                $data['response'] = 'failed'; 
            } 
        }else{ 
            $data['response'] = 'failed'; 
        }
        
        $result = $this->About_model->editabout($aboutInfo, $about_id);
        
        if($result == true)
        {
            $this->session->set_flashdata('success', 'Updated successfully');
        }
        else
        {
            $this->session->set_flashdata('error', 'Updation failed');
        }
        
        redirect('about/about_listing');
    
        
    }

    public function deleteabout($about_id){
        $result = $this->About_model->deleterow($about_id);
        if ($result == true) {  
            $this->session->set_flashdata('success_msg', 'Data has been deleted successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Something wrong');
        }
        redirect(base_url() . 'About/about_listing', 'refresh');


    }

    public function fixed_content($about_id){
        
        $data['aboutcontent'] = $this->About_model->getcontentInfo($about_id);
        //echo "<pre>"; print_r($data); die;
        $this->load->view('about/fixed_content',$data);
    }

    public function fixedcontentedit(){
        $about_id = $this->input->post('about_id');
        $title = $this->input->post('title');
        //$image = $this->input->post('image');
        $description = $this->input->post('description');
        $link = $this->input->post('link');

              
        $aboutcontent= array('title'=>$title,'description'=>$description, 'link'=>$link);

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
                $aboutcontent['image']=$filename;
            }else{ 
                $data['response'] = 'failed'; 
            } 
        }else{ 
            $data['response'] = 'failed'; 
        }

        
        $data = array(); 
        if($_FILES['banner_image']['name']!=""){ 
                // Set preference 
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|mp4'; 
            $config['max_size'] = '100000'; // max_size in kb 
            $config['file_name'] = $_FILES['banner_image']['name']; 

                // Load upload library 
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
        
                // File upload
            if($this->upload->do_upload('banner_image')){ 
                // Get data about the file
                $uploadDatan = $this->upload->data(); 
                $filenamen = $uploadDatan['file_name']; 
                $data['response'] = 'successfully uploaded '.$filenamen; 
                $aboutcontent['banner_image']=$filenamen;
            }else{ 
                $data['response'] = 'failed'; 
            } 
        }else{ 
            $data['response'] = 'failed'; 
        }

        //print_r($aboutcontent); die;

        $result = $this->About_model->fixedcontentedit($aboutcontent, $about_id);
        if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                redirect('About/fixed_content/1');
        
    }

}
?>