<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller{       
 public function __construct()    
{       
 parent::__construct();        
 $this->load->library('base_library');       
 $this->load->library('email');       

 $this->load->helper('cookie');     
 }    
  public function index()    {                 
   $data = array();      
   $data["title"]="Megatask Technologies";      
  $data["file"]="public/index";      
  $this->load->view('public/header/template',$data);    
  }      		
  public function index3()
  {                     	
  $data = array();        
  $data["title"]="Megatask Technologies";    
  $data["file"]="public/index3";     
  $this->load->view('public/header/template',$data);    
  }      
  public function about_us()    {    

  $data = array();     
  
  $data["title"]="Megatask Technologies";    
  $data["file"]="public/about-us";   
  $this->load->view('public/header/template',$data); 
  }      
  public function ecommerce()   
  {                  
  $data = array();          
  $data["title"]="Megatask Technologies";     
  $data["file"]="public/ecommerce";    
  $this->load->view('public/header/template',$data);  
  }   
  public function seo_services()  
  {                
  $data = array();           
  $data["title"]="Megatask Technologies";  
  $data["file"]="public/seo-services";   
  $this->load->view('public/header/template',$data);  
  }       
  public function digital_marketing()   
  {                   
  $data = array();         
  $data["title"]="Megatask Technologies";   
  $data["file"]="public/digital-marketing";   
  $this->load->view('public/header/template',$data);  
  }   
  public function website_redesign()  
  {                  
  $data = array();       
  $data["title"]="Megatask Technologies";   
  $data["file"]="public/website-redesign";  
  $this->load->view('public/header/template',$data);  
  }    
  public function responsive_website()   
  {                   $data = array();         
  $data["title"]="Megatask Technologies";     
  $data["file"]="public/responsive-website";       
  $this->load->view('public/header/template',$data);   
  }    
  public function maintenance_website()    
  {                  
  $data = array();              
  $data["title"]="Megatask Technologies";      
  $data["file"]="public/maintenance-website";       
  $this->load->view('public/header/template',$data);   

  }    

  public function web_development()    
  {                
  $data = array();             
  $data["title"]="Megatask Technologies";      
  $data["file"]="public/web-development"; 
  $this->load->view('public/header/template',$data);    
  }      

  public function contact_us()   
  {                   
  $data = array();       
  $data["title"]="Megatask Technologies";   
  $data["file"]="public/contact-us";    
  $this->load->view('public/header/template',$data);   
  }   
  public function why_choose_us()   
  {                   
  $data = array();       
  $data["title"]="Megatask Technologies";   
  $data["file"]="public/why-choose-us";    
  $this->load->view('public/header/template',$data);   
  }
  public function faq()   
  {                   
  $data = array();       
  $data["title"]="Megatask Technologies";   
  $data["file"]="public/faq";    
  $this->load->view('public/header/template',$data);   
  }  

  public function  privacy_policy()   
  {                   
  $data = array();       
  $data["title"]="Megatask Technologies";   
  $data["file"]="public/privacy-policy";    
  $this->load->view('public/header/template',$data);   
  }  
  public function  disclaimer()   
  {                   
  $data = array();       
  $data["title"]="Megatask Technologies";   
  $data["file"]="public/disclaimer";    
  $this->load->view('public/header/template',$data);   
  }  
  public function  terms_and_contitions()   
  {                   
  $data = array();       
  $data["title"]="Megatask Technologies";   
  $data["file"]="public/terms-and-conditions";    
  $this->load->view('public/header/template',$data);   
  } 
  public function  refund_and_cancellation_policy()   
  {                   
  $data = array();       
  $data["title"]="Megatask Technologies";   
  $data["file"]="public/refund-and-cancellation-policy";    
  $this->load->view('public/header/template',$data);   
  }  
  public function insert_contactus()    
  {         
  $this->load->library('form_validation');     
  $this->form_validation->set_rules('contact_name','Name','trim|required');   
  $this->form_validation->set_rules('contact_email','Email','valid_email|required');     
  $this->form_validation->set_rules('contact_mobile','Mobile','required');    
  $this->form_validation->set_rules('contact_message','Message','required');
  
  if($this->form_validation->run() == FALSE)        
  {          
		echo "not validate";       
		$this->contact_us();     
	 } else{    
		echo " validate";        
	 $from_email   = "pixel4video@gmail.com";     
	 $from_pass = 'Pixel$#987';   
     $contact_name = $this->input->post('contact_name');   
	 $to_email     = $this->input->post('contact_email');   
	 $to_mobile     = $this->input->post('contact_mobile');     
	 $to_message     = $this->input->post('contact_message');    
 	 $this->load->library('email');   
	 /* //SMTP & mail configuration     	 $config = array(        'protocol'  => 'smtp',        'smtp_host' => 'ssl://smtp.googlemail.com',        'smtp_port' => 465,        'smtp_user' => $from_email,        'smtp_pass' => $from_pass,        'mailtype'  => 'html',        'charset'   => 'utf-8'        );        $this->email->initialize($config);        $this->email->set_mailtype("html");        $this->email->set_newline("\r\n");         $this->email->to($to_email);        $this->email->subject('Email Test message ');         $this->email->message('Hi, $contact_name  WE Will Be Back Soon With Your Regarding Coctact Details . $to_message '); */      

	    
	 if(1){        
	 $this->session->set_flashdata("success","Email sent successfully.");      
     }else{         
	 $this->session->set_flashdata("error","Error in sending Email.");          
	 }                         
	 return redirect('contact-us');                 
 }                                         
 }          
 public function cookieupdate()  
 {       
 $cookiesave = array(      
 'name'   => 'Ale-izbaCookie',   
 'value'  => '1',      
 'expire' =>  time()+86400
 );   
 set_cookie($cookiesave);     
 exit;    
 } 
 }
 
 
 ?>