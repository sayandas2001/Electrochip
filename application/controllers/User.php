<?php ob_start();
error_reporting(0);
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class User extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('contact_query_model');
        $this->isLoggedIn();   
    }
    // This function used to load the first screen of the user
    public function index() 
    {
        $this->global['pageTitle'] = 'Mil Paints : Dashboard';
        $this->loadViews("profile/dashboard", $this->global, NULL, NULL);
    }

    //Contact
    function contact($contact_id = NULL)
    {
        if($this->isAdmin() == TRUE && $contact_id == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($contact_id == null)
            {
                redirect('dashboard');
            }
            $data['userInfo2'] = $this->user_model->getContactInfo($contact_id);
            
            $this->global['pageTitle'] = 'Caucasus Heritage : Edit User';
            
            $this->loadViews("contact/contact", $this->global, $data, NULL);
        }
    }
    // This function is used to edit the user information
    function editContactConfig()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $contact_id = $this->input->post('contact_id');
            
            $this->form_validation->set_rules('email','Email','trim|required|max_length[128]');
            $this->form_validation->set_rules('phone','Mobile Number','trim|required|max_length[30]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->contact($contact_id);
            }
            else
            {
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                $telephone = $this->input->post('telephone');
                $address = $this->input->post('address');
                $fb_link = $this->input->post('fb_link');
                $twitter_link = $this->input->post('twitter_link');
                $instagram_link = $this->input->post('instagram_link');
                
                $userInfo2 = array('email'=>$email, 'phone'=>$phone, 'telephone'=>$telephone, 'address'=>$address, 'fb_link'=>$fb_link, 'twitter_link'=>$twitter_link, 'instagram_link'=>$instagram_link,);
                
                //echo "<pre>";
                //print_r($userInfo2); die;

                $result = $this->user_model->editContact($userInfo2, $contact_id);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Updation failed');
                }
                
                redirect('contact/1');
            }
        }
    }
}
?>