<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Blog extends BaseController
{
    public function __construct()
    {
        parent::__construct();
         $this->load->model('Blog_model');
        $this->isLoggedIn();   
    }

    public function blog_listing()
    {
        $data['allblog'] = $this->Blog_model->getblog();
        //print_r($data);
        $this->load->view('Blog/blog_listing',$data);
    }

    public function addblog(){
        $this->load->view('Blog/add_blog');
     }

     public function do_add_blog(){

        $title = $this->input->post('title');
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


        $post_data = array('title' =>$title,'image'=>$filename,'description'=>$description);

        //print_r($post_data); die;
        $result = $this->Blog_model->addblog($post_data);

        if($result > 0)
        {
            $this->session->set_flashdata('success', 'Add successfully');
        }
        else
        {
            $this->session->set_flashdata('error', 'Creation failed');
        }

        redirect('blog/blog_listing');    
     
    }

    public function editblog($blog_id){
        $data['blog_edit'] = $this->Blog_model->blogget($blog_id);   
        $this->load->view("Blog/blog_edit", $data);

   }

   public function do_edit_blog(){
    $title = $this->input->post('title');
    $image = $this->input->post('image');
    $description = $this->input->post('description');
    $blog_id = $this->input->post('blog_id');

    $blogInfo = array('title'=>$title,'description'=>$description);

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
            $blogInfo['image']=$filename;
        }else{ 
            $data['response'] = 'failed'; 
        } 
    }else{ 
        $data['response'] = 'failed'; 
    }
    $result = $this->Blog_model->editblog($blogInfo, $blog_id);
           //print_r($result); die;
           
            
           if($result == true)
           {
               $this->session->set_flashdata('success', 'Updated successfully');
           }
           else
           {
               $this->session->set_flashdata('error', 'Updation failed');
           }
           
           redirect('Blog/blog_listing');

}

    
      public function deleteblog($blog_id){
    $result = $this->Blog_model->deleteInfo($blog_id);            
    $this->session->set_flashdata('success', 'Deleted successfully');
    redirect('blog/blog_listing');

}
    

}

?>    