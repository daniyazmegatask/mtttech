<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
                $this->load->model('admin/user_model');
                $this->load->model('front/subscriber_model');


        $this
            ->load
            ->library('base_library');
        $this
            ->load
            ->library('email');

        $this
            ->load
            ->helper('cookie');
    }
    public function index()
    {
		// change date 24-06-2022 not change befor till 2 month
        $data = array();
        $data["title"] = "Website Design Company in Delhi - Megatask Technologies";

        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "We Megatask Technologies are the fastest-growing Website Design Company in Delhi. That offers an extended array of services for grow your buisness faster.";     
        $data["meta_keyword"] = "Website Design Company in Delhi, Web Designig, website design company in delhi, web designing company in delhi, web design company, website design agency in delhi.";


        $data["file"] = "public/index";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    
    public function about_us()
    {

        $data = array();

        $data["title"] = "Web Design Company, Digital Marketing Agency";
        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "Megatask Technologies is best IT service provider Company in India since a decade. We are armed with some of the best graphic designers and developers, creative content writers and whole team of digital marketing.";
        $data["meta_keyword"] = "website design company india, web development company, digital marketing agency noida, it company delhi, graphic design agency, seo agency delhi";
        $data["file"] = "public/about-us";
        $this
            ->load
            ->view('public/header/template', $data);
    }

    public function our_team()
    {

        $data = array();

        $data["title"] = "Megatask Technologies: Web Design Company, Digital Marketing Agency";


         $data["meta_title"] = $data["title"];
        $data["meta_description"] = "Different skills but one team- Meet our all the experience team members they are experts in designing development and marketing.";
        $data["meta_keyword"] = "it company delhi, it service provider, graphic design agency, digital marketing agency, software development company";



        $data["file"] = "public/our-team";
        $this
            ->load
            ->view('public/header/template', $data);
    }

    public function ecommerce()
    {
        $data = array();
        $data["title"] = "eCommerce Website Development Company in India
        ";


         $data["meta_title"] = $data["title"];
        $data["meta_description"] = "We are E-commerce website Development Company in India that gives you best Services for best dynamic and responsive online store.";
        $data["meta_keyword"] = "ecommerce website development company in india, ecommerce website design company , ecommerce web development services, ecommerce web development delhi, e-commerce website india";



        $data["file"] = "public/ecommerce";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function seo_services()
    {
		$data = array();
		$data["title"] = "SEO Services in Delhi - Megatask Technologies";


		$data["meta_title"] = $data["title"];
		$data["meta_description"] = "Our SEO Services in Delhi starts by in-depth best research for your business related to current status and trends to attract positive traffic to your website.";
		$data["meta_keyword"] = "seo services in delhi, seo company in delhi, seo agency in delhi, local seo services, local seo in delhi";




        $data["file"] = "public/seo-services";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function smo_services()
    {
        $data = array();
        $data["title"] = "SMO Services in Delhi - Megatask Technologies";


        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "We are a professional Social Media Marketing Agency in Delhi. Our Experts help you reach business goals and connect with the best audience you want to attract.";
        $data["meta_keyword"] = "social media optimization, smo services in delhi, smo agency in delhi, social media optimization services delhi, local smo services";



        $data["file"] = "public/smo-services";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function smm_services()
    {
        $data = array();
        $data["title"] = "Social Media Marketing in Delhi - Megatask Technologies";


        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "We are a professional Social Media Marketing (SMM) Agency in  Delhi. Our Experts help you reach business goals and connect with the best audience you want to attract.";
        $data["meta_keyword"] = "social media marketing, social media marketing company, smm services in delhi, india, smm services in delhi, smm company in delhi";



        $data["file"] = "public/smm-services";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function email_services()
    {
        $data = array();
        $data["title"] = "Email Marketing Services in India - Megatask Technologies";


        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "We offers Content Writing Services in Delhi our content writers are expert and provide affordable website content for make your website readable and unique.";
        $data["meta_keyword"] = "email marketing services in delhi, email marketing in delhi, email services, bulk email providers,email marketing agency, email marketing agency near me, email marketing services";



        $data["file"] = "public/email-services";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function content_writing()
    {
        $data = array();
        $data["title"] = "Content Writing Services in Delhi - Megatask Technologies";


        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "We are content marketing Agency in Delhi our content writers are expert and provide affordable website content for make your website readable and unique.";
        $data["meta_keyword"] = "content writing in delhi, content marketing in delhi, content marketing services, content marketing services dubai, Content creating site, content publisher";



        $data["file"] = "public/content-writing";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function google_analytics()
    {
        $data = array();
        $data["title"] = "Google Analytics Consulting Services - Megatask Technologies";


        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "The Google Analytics Services can provide useful information about the source of website traffic, how users are navigating and interacting throughout a website.
        ";
        $data["meta_keyword"] = "website analytics services, web analytics service delhi, traffic analtics agency india";



        $data["file"] = "public/google-analytics";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function sem_services()
    {
        $data = array();
        $data["title"] = "SEM Services in Delhi - Megatask Technologies";


        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "Megask always prefer to give best offers to SEM Services and deliver transformational traffic through facebook and other social medial paid marketing campaigns.";
        $data["meta_keyword"] = "sem services in india, sem services company india, sem services dubai, sem services delhi-ncr";



        $data["file"] = "public/sem-services";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function digital_marketing()
    {
        $data = array();
        $data["title"] = "#1 Interenet Marketing Agency:Top Digital Marketing agency in Delhi";


         $data["meta_title"] = $data["title"];
        $data["meta_description"] = "We at Megatask Technologies always prefer to give #1 offers to Digital Marketing services in Delhi and deliver Positive traffic growth through Google ads, bing ads, aol ads etc";
        $data["meta_keyword"] = "digital marketing agency in delhi, digital marketing in delhi, digital marketing company in delhi, digital marketing, digital marketing services in noida, online marketing, online ads, search engine ads, google ads, bing ads, aol ads, paid search";



        $data["file"] = "public/digital-marketing";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function ppc_services()
    {
        $data = array();
        $data["title"] = "PPC Services in Delhi - Megatask Technoloiges";


         $data["meta_title"] = $data["title"];
        $data["meta_description"] = "Megatask Technologies is a Pay Per Click Ads Management Company in Delhi, a Google certified PPC Services with a solid ROI to increase your business revenue.";
        $data["meta_keyword"] = "PPC Services in Delhi, Pay Per Click Agency Delhi, cheap PPC Services, PPC Company in Delhi, Best Pay Per Click (PPC) Management Services in Delhi, Best PPC Management Company, PPC Services India, PPC Company in Delhi, PPC Pay per click Services Company, Best PPC Agency in Delhi";



        $data["file"] = "public/ppc-services";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function graphic_design()
    {
        $data = array();
        $data["title"] = "Graphic Design Company in Delhi - Mega Task";


         $data["meta_title"] = $data["title"];
        $data["meta_description"] = "Looking for Graphic Design Company in Delhi. Megatask Technologies offers affordable creative graphic design services to agencies all around the world.";
        $data["meta_keyword"] = "graphic design agency delhi, graphic design company delhi, graphic design services in delhi, graphic design agency delhi. graphic designers";



        $data["file"] = "public/graphic-design";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function website_redesign()
    {
        $data = array();
        $data["title"] = "Website Redesign Company - Megatask Technologies";


        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "Website Redesign Company in India. Our Website Redesigning Services enhance your web visibility or look and feel to give your user a good impression.";
        $data["meta_keyword"] = "Website Redesign Company, website redesign services india, website redesign agency delhi";


        $data["file"] = "public/website-redesign";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function responsive_website()
    {
        $data = array();
        $data["title"] = "Responsive Web Design Services - Megatask";


        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "Complete Website Maintenance Service and Support for WordPress, Magento, PHP, Codeigniter, Laravel, Cake php & Mobile App. Choose Website Maintenance Plan..";
        $data["meta_keyword"] = "responsive website design delhi, responsive web design delhi, responsive web services delhi-ncr, responsive website designer delhi";


        $data["file"] = "public/responsive-website";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function maintenance_website()
    {
        $data = array();
        $data["title"] = "Website Maintenance Services in Delhi - Mega Task";


        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "Complete Website Maintenance Service and Support Services for WordPress, Magento, PHP, Codeigniter, Laravel, Cake php & Mobile App. Choose Website Maintenance Plan as per your need";
        $data["meta_keyword"] = "website maintenance service, website maintenance services in delhi, website maintenance in delhi, website maintenance company delhi, web maintenance agency, website maintenance";



        $data["file"] = "public/maintenance-website";
        $this
            ->load
            ->view('public/header/template', $data);

    }

    public function web_development()
    {
        $data = array();
        $data["title"] = "Website Development Company in Delhi - Mega Task";

        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "Our expert website development team offer quality development services to our clients which help them grow their website development next level.";
        $data["meta_keyword"] = "website development company delhi, web development delhi, web developer, web development agency, web development services, web development in india, php development, php developer, asp developer, java developer, js developer, magento developement, ci development";


        $data["file"] = "public/web-development";
        $this
            ->load
            ->view('public/header/template', $data);
    }


    public function portfolio()
    {
        $data = array();
        $data["title"] = "Megatask Technologies: Web Design Company, Digital Marketing Agency";

        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "";
        $data["meta_keyword"] = "";


        $data["file"] = "public/portfolio";
        $this
            ->load
            ->view('public/header/template', $data);
    }

    public function contact_us()
    {
        $data = array();
        $data["title"] = "Contact Best Web Development company in Delhi, Contact Us";


        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "Contact Megatask Technologies- We feel always happy to help and advice if you have any questions or inquiries.";
        $data["meta_keyword"] = "website design company, web development company india, digital marketing agency delhi, seo agency delhi-ncr, ppc services delhi";


        $data["file"] = "public/contact-us";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function why_choose_us()
    {
        $data = array();
        $data["title"] = "Why Choose Megatask Technologies-Web Development & Web Design";
        $data["file"] = "public/why-choose-us";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function faq()
    {
        $data = array();
        $data["title"] = "Megatask Technologies: Web Design Company | Digital Marketing Agency";
        $data["file"] = "public/faq";
        $this
            ->load
            ->view('public/header/template', $data);
    }

    public function error_404()
    {
        $data = array();
        $data["title"] = "Megatask Technologies: Web Design Company | Digital Marketing Agency";
        $data["file"] = "public/error_404";
        $this
            ->load
            ->view('public/header/template', $data);
    }

    public function privacy_policy()
    {
        $data = array();
        $data["title"] = "Megatask Technologies: Web Design Company | Digital Marketing Agency";
        $data["file"] = "public/privacy-policy";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function disclaimer()
    {
        $data = array();
        $data["title"] = "Megatask Technologies: Web Design Company | Digital Marketing Agency";
        $data["file"] = "public/disclaimer";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function terms_and_contitions()
    {
        $data = array();
        $data["title"] = "Megatask Technologies: Web Design Company | Digital Marketing Agency";
        $data["file"] = "public/terms-and-conditions";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function refund_and_cancellation_policy()
    {
        $data = array();
        $data["title"] = "Megatask Technologies: Web Design Company | Digital Marketing Agency";
        $data["file"] = "public/refund-and-cancellation-policy";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function web_price()
    {
        $data = array();
        $data["title"] = "Best Price of Web Designing in Delhi & Sofware Development ";
        $data["file"] = "public/web-price";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    
    
    
    
    
    
     public function web_wordpress()
    {
        $data = array();
        $data["title"] = "Wordpress Development Company in Delhi - Mega Task
        ";
		
		$data["meta_title"] = $data["title"];
        $data["meta_description"] = "Wordpress Development Company in Delhi - Megatask Technology is growing Wordpress Website Design Company offering theme customization, plugin customization etc.";
        $data["meta_keyword"] = "wordpress development company in delhi, wordpress development in delhi, wordpress development agency, wordpress development company, wordpress development delhi, wordpress development services india, wordpress development company in india, wordpress theme for web development company, wordpress website development company india";
		
        $data["file"] = "public/web-wordpress";
        $this
            ->load
            ->view('public/header/template', $data);
    }

    public function web_shopify()
    {
        $data = array();
        $data["title"] = "Shopify Website Development Company - Mega Tasktechnologies";


        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "Shopify Website Development Company - Raising The Bar For Shopify Expertise ?? Get The Best Of Web With Leading Shopify Development Company Based in Delhi.";
        $data["meta_keyword"] = "shopify development company delhi, shopify development services, shopify development agency, top shopify development companies in delhi, shopify developer near me, best shopify developers, shopify experts in delhi";
		
        $data["file"] = "public/web-shopify";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    public function web_wixdevelop()
    {
        $data = array();
       $data["title"] = "WIX Website Development Services - Mega Task";


        $data["meta_title"] = $data["title"];
        $data["meta_description"] = "We provide you with high-quality WIX website development services and demonstrate their multi-functionality by utilizing the capabilities of this new platform";
        $data["meta_keyword"] = "wix website development services delhi, wix website development company, wix web development, wix development company, wix theme developement agency, wix custome theme development web development in delhi";
		
        $data["file"] = "public/web-wixdevelop";
        $this
            ->load
            ->view('public/header/template', $data);
    }
    
    




    //New Content for Web



    public function software_development()
    {
        $data = array();
        $data["title"] = "Software Development Company in Delhi - Megatask";
		
		$data["meta_title"] = $data["title"];
        $data["meta_description"] = " Megatask Technologies is a Software Development Company in Delhi. We assist you with professional scalable software solutions for enterprises and startups.";
        $data["meta_keyword"] = "software application development company, software development company in delhi, software development company in delhi, software developer company in delhi, software development company delhi, top software development company in delhi, best software development company in delhi, software development services in delhi, best software development company in delhi ncr, software development company in delhi ncr, software development in noida, software development company in gurgaon, custom software development company";
		
        $data["file"] = "public/software-development";
        $this
            ->load
            ->view('public/header/template', $data);
    }



    //New Content for Web







    public function insert_contactus()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('contact_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('contact_email', 'Email', 'valid_email|required');
        $this->form_validation->set_rules('contact_mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('contact_message', 'Message', 'required');

        if ($this
            ->form_validation
            ->run() == false)
        {
             
            $this->contact_us();
        }
        else
        {



 /* $from_email = "pixel4video@gmail.com";
            $from_pass = 'Pixel$#987';*/
            $contact_name   = $this->input->post('contact_name');
            $to_email       = $this->input->post('contact_email');
            $to_mobile      = $this->input->post('contact_mobile');
            $to_message     = $this->input->post('contact_message');



           $customer_email = "pixel4video@gmail.com";
          $this->load->library('email_service');

          $insertData['email_to'] = $customer_email;


 

            $insertData['email_subject'] = 'Contact Mail Inquiry ';


            $insertData['email_message'] = $to_message;


            $insertData['email_at'] = date("Y-m-d H:i:s");

          $data['detail'] = $insertData;


          $response = $this->email_service->email_send($data);

           
             
          
            $this->load->library('email');


            $strtolower =  strtolower($form_data['name']);
            $title      = str_replace(' ', '-',$strtolower);



             $where = array();

             $where['email'] = strtolower($to_email);


            $returnData = $this->user_model->findDynamic($where);
            $insertData = array();
            if(!empty($returnData)){
                 $insertData['id'] =  $returnData[0]->id;
                  $insertData['message'] = "Revised : ".$to_message."<br>".$returnData[0]->message;
            }else
            {
                 $insertData['message'] = $to_message;
            }

            
            $insertData['fname'] =  ucwords($contact_name['name']);
            $insertData['email'] =  strtolower($to_email);
            $insertData['phone'] =   ($to_mobile);
            
            $insertData['password'] =   md5($to_email);
            $insertData['password_decripted'] =   $to_email;
            $insertData['type']= '4' ;
            $insertData['status']= '0' ;
            $insertData['user_from'] = 'Contact Us';
            $insertData['date_at'] = date("Y-m-d H:i:s");
            $result = $this->user_model->save($insertData);





            /* //SMTP & mail configuration       $config = array(        'protocol'  => 'smtp',        'smtp_host' => 'ssl://smtp.googlemail.com',        'smtp_port' => 465,        'smtp_user' => $from_email,        'smtp_pass' => $from_pass,        'mailtype'  => 'html',        'charset'   => 'utf-8'        );        $this->email->initialize($config);        $this->email->set_mailtype("html");        $this->email->set_newline("\r\n");         $this->email->to($to_email);        $this->email->subject('Email Test message ');         $this->email->message('Hi, $contact_name  WE Will Be Back Soon With Your Regarding Coctact Details . $to_message '); */

            if ($result)
            {
                $this
                    ->session
                    ->set_flashdata("success", "Email sent successfully.");
            }
            else
            {
                $this
                    ->session
                    ->set_flashdata("error", "Error in sending Email.");
            }
            return redirect(base_url().'contact-us');
        }
    }
    public function cookieupdate()
    {
        $cookiesave = array(
            'name' => 'Ale-izbaCookie',
            'value' => '1',
            'expire' => time() + 86400
        );
        set_cookie($cookiesave);
        exit;
    }

  public function call_api()
    {
      $apidata = array();
      $apidata['url']      =  'http://127.0.0.1/SharedAccess/web44/adminpanel/call_api';
      $apidata['name']     =  "Test";
      $apidata['email']    =  "test@gmail.com1";
      $apidata['phone']    =  "9696969696";
      $apidata['message']  =  "Test Message";
      $apidata['url_from'] =  base_url();
      $apidata['apikey']   =  "097u7hk7KK";

      if(!empty($apidata['apikey']))
      {
          $callcurl = callcurl($apidata);

          $getresult = json_decode($callcurl);
          
          if($getresult->status ==1  ||  $getresult->status== 2 )
          {
            echo $getresult->message;
          } 
           
      }
      
    }
     public function call_api_list()
    {
      $apidata = array();
      $apidata['url']      =  'http://127.0.0.1/SharedAccess/web44/adminpanel/listdata';
      $apidata['url_from'] =  base_url();
      $apidata['apikey']   =  "097u7hk7KK";

      
          $callcurl = callcurl($apidata);
           
          $getresult = json_decode($callcurl);
            
          echo "<pre>";

          print_r($getresult);
          echo "</pre>";
         
           
      
      
    }

    public function add_subscribe()
    {


        $errorMsg = ''; 
        // Default response 
        $response = array( 
          'status' => 'err', 
          'msg' => 'Something went wrong, please try after some time.' 
        ); 



      $ajax_data  = $this->input->post();

       if(empty($ajax_data['email']))
       {
          
        $errorMsg  =  'Please enter a valid email.'; 
      } 


       if(empty($errorMsg))
       {


          $email        = strtolower($ajax_data['email']);
          $subscribe    =  $ajax_data['subscribe'];
          $where        = array();
          $where['email']=  $email;
          $where['field']=  'id,email';

          $subscriber_result         = $this->subscriber_model->findDynamic($where);

          if(empty($subscriber_result))
          {

                $insertData = array();
                $insertData['email']    =  $email;
                $insertData['subscribe']    =  $subscribe;

                $insertData['date_at']  =  date('Y-m-d H:i:s');


                 $result = $this->subscriber_model->save($insertData);
                 if($result)
                 {
                    $response = array( 
                        'status' => 'ok', 
                        'msg' => 'Thanks For your Subscribe.' 
                    );       
                 }
               }else
          {
            $response['msg'] = 'You have already Subscribe to Us.'; 
          }
       }else
       {
        $response['msg'] = $errorMsg; 
       }

       echo json_encode($response); 

    }



}

?>
