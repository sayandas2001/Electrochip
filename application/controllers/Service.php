<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Service extends BaseController
{
    public function __construct()
    {
        parent::__construct();
         $this->load->model('Service_model');
        $this->isLoggedIn();   
    }

    public function service_listing()
    {
        $data['allservice'] = $this->Service_model->getservice();
        $this->load->view('services/service_listing',$data);
    }
    
     public function addservice(){
        $this->load->view('services/add_service');
     }

     public function do_add_service(){

        $title = $this->input->post('title');
        //$image = $this->input->post('image');
        $description =$this->input->post('description');

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

        //$this->load->view('services/do_add_service',$data);

        $post_data = array('title' =>$title, 'image'=>$filename, 'description'=>$description);

        //print_r($post_data); die;
        $result = $this->Service_model->addservice($post_data);

        if($result > 0)
        {
            $this->session->set_flashdata('success', 'Add successfully');
        }
        else
        {
            $this->session->set_flashdata('error', 'Creation failed');
        }

        redirect('service/service_listing');    
     
    }

    public function editservice($service_id){
         $data['service_edit'] = $this->Service_model->serviceget($service_id);   
         $this->load->view("services/edit_service", $data);

    }

    public function do_edit_service(){
        $title = $this->input->post('title');
        $image = $this->input->post('image');
        $description = $this->input->post('description');
        $service_id = $this->input->post('service_id');

        $serviceInfo = array('title'=>$title,'description'=>$description);
        
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
                $serviceInfo['image']=$filename;
            }else{ 
                $data['response'] = 'failed'; 
            } 
        }else{ 
            $data['response'] = 'failed'; 
        }
        $result = $this->Service_model->editservice($serviceInfo, $service_id);
               //print_r($result); die;
               
                
               if($result == true)
               {
                   $this->session->set_flashdata('success', 'Updated successfully');
               }
               else
               {
                   $this->session->set_flashdata('error', 'Updation failed');
               }
               
               redirect('service/service_listing');

    }
    

    public function deleteservice($service_id){
        $result = $this->Service_model->deleteInfo($service_id);            
        $this->session->set_flashdata('success', 'Deleted successfully');
        redirect('service/service_listing');

    }
}
?>