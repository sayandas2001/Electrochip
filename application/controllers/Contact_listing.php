<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Contact_listing extends BaseController

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model');
        $this->isLoggedIn();  
    }

    public function index(){
        //echo "tgthfhf"; die; 
        $data['queries'] = $this->Contact_model->getqueries();
        $this->load->view('contact_queries/contact_queries',$data);
        
    }

    public function editcontact($contact_id){
        $data['contact_edit'] = $this->Contact_model->contactget($contact_id);
        $this->load->view("contact_queries/editcontact", $data);

    }

    function edit_contact()
    {
        $name = $this->input->post('name');
        $email= $this->input->post('email');
        $phone_number= $this->input->post('phone_number');
        $message= $this->input->post('message');
        $contact_id=$this->input->post('contact_id');


        $queries = array('name'=>$name, 'email'=>$email,'phone_number'=>$phone_number,'message'=>$message);

        $result = $this->Contact_model->editcontact($queries, $contact_id);

        if($result == true)
        {
            $this->session->set_flashdata('success', 'Updated successfully');
        }
        else
        {
            $this->session->set_flashdata('error', 'Updation failed');
        }
        
        redirect('Contact_listing');

}

        public function deletecontact($Contact_id){
            $result = $this->Contact_model->deleterow($Contact_id);
            if ($result == true) {  
                $this->session->set_flashdata('success_msg', 'Data has been deleted successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Something wrong');
            }
            redirect('Contact_listing');
        }

}


?>