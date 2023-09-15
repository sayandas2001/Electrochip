<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Home extends BaseController
{
    // This is default constructor of the class
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('About_model','Service_model','Blog_model','banner_model','Contact_model'));
    }
    public function index(){
        $data['aboutcontent']= $this->About_model->fixedabout();
        $data['allbanner'] = $this->banner_model->banner_listing();
        //print_r($data['allbanner']); die;
        $data['allservice'] = $this->Service_model->getservice();
        $data['allblog'] = $this->Blog_model->getblog();
        $this->load->view('front/index',$data);
    }

    public function about(){
        $data['aboutcontent']= $this->About_model->fixedabout();

        //print_r($data); die;
        $this->load->view('front/about',$data);
    }

    public function blog(){
        $data['allblog'] = $this->Blog_model->getblog();

        //echo "<pre>"; print_r($data);
        $this->load->view('front/Blog',$data);
    }

    public function service(){
        $data['allservice'] = $this->Service_model->getservice();

        //echo "<pre>"; print_r($data); die;
    
        $this->load->view('front/service',$data);
    }
            
    public function contact(){
        $this->load->view('front/contact');
        
    }

    public function addcontact(){
       
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone_number = $this->input->post('phone_number');
        $message = $this->input->post('message');
    

        $post_data = array('name' =>$name,'email'=>$email,'phone_number'=>$phone_number,'message' =>$message);

        //print_r($post_data); die;
        
        $result = $this->Contact_model->addcontact($post_data);
        //$this->load->view('front/contact');

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.mailtrap.io',
            'smtp_port' => 2525,
            'smtp_user' => 'a873ae35d8b739',
            'smtp_pass' => '25218fd90a9d42',
            'smtp_timeout' => 30,
            'mailtype' => 'html',
            'charset' =>  'utf-8',
            'crlf' => "\r\n",
            'newline' => "\r\n",
            'wordwrap' => TRUE
        );

        //initialize
        $this->email->initialize($config);
        $this->email->from('sayanmsd2001@gmail.com');
        $this->email->to($email);
        $this->email->subject('Team Markoo');
        $this->email->message($message);
        $this->email->send();
        
        if($result > 0)
        {
            $this->session->set_flashdata('success', 'Add successfully');
        }
        else
        {
            $this->session->set_flashdata('error', 'Creation failed');
        }

        redirect('home/contact');  
    }
  
 
}

?>