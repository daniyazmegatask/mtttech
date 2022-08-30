<?php







defined('BASEPATH') OR exit('No direct script access allowed');















/*







| -------------------------------------------------------------------------







| URI ROUTING







| -------------------------------------------------------------------------







| This file lets you re-map URI requests to specific controller functions.







|







| Typically there is a one-to-one relationship between a URL string







| and its corresponding controller class/method. The segments in a







| URL normally follow this pattern:







|







|	example.com/class/method/id/







|







| In some instances, however, you may want to remap this relationship







| so that a different class/function is called than the one







| corresponding to the URL.







|







| Please see the user guide for complete details:







|







|	https://codeigniter.com/user_guide/general/routing.html







|







| -------------------------------------------------------------------------







| RESERVED ROUTES







| -------------------------------------------------------------------------







|







| There are three reserved routes:







|







|	$route['default_controller'] = 'welcome';







|







| This route indicates which controller class should be loaded if the







| URI contains no data. In the above example, the "welcome" class







| would be loaded.







|







|	$route['404_override'] = 'errors/page_missing';







|







| This route will tell the Router which controller/method to use if those







| provided in the URL cannot be matched to a valid route.







|







|	$route['translate_uri_dashes'] = FALSE;







|







| This is not exactly a route, but allows you to automatically route







| controller and method names that contain dashes. '-' isn't a valid







| class or method name character, so it requires translation.







| When you set this option to TRUE, it will replace ALL dashes with







| underscores in the controller and method URI segments.







|







| Examples:	my-controller/index	-> my_controller/index







|		my-controller/my-method	-> my_controller/my_method







*/







$route['default_controller'] = "index";







$route['404_override'] = '';







$route['translate_uri_dashes'] = FALSE;























// Front 



$route['about_us']  = 'Index/about_us';
$route['about-us']  = 'Index/about_us';



$route['ecommerce']  = 'Index/ecommerce';



$route['seo_services']  = 'Index/seo_services';
$route['seo-services']  = 'Index/seo_services';



$route['digital_marketing']  = 'Index/digital_marketing';
$route['digital-marketing']  = 'Index/digital_marketing';



$route['website_redesign']  = 'Index/website_redesign';
$route['website-redesign']  = 'Index/website_redesign';



$route['responsive_website']  = 'Index/responsive_website';
$route['responsive-website']  = 'Index/responsive_website';



$route['maintenance_website']  = 'Index/maintenance_website';
$route['maintenance-website']  = 'Index/maintenance_website';



$route['web_development']  = 'Index/web_development';
$route['web-development']  = 'Index/web_development';



$route['contact_us'] = 'Index/contact_us';
$route['contact-us'] = 'Index/contact_us';

$route['why_choose_us'] = 'Index/why_choose_us';
$route['why-choose-us'] = 'Index/why_choose_us';

$route['terms_and_contitions'] = 'Index/terms_and_contitions';
$route['terms-and-contitions'] = 'Index/terms_and_contitions';

$route['refund_and_cancellation_policy'] = 'Index/refund_and_cancellation_policy';
$route['refund-and-cancellation-policy'] = 'Index/refund_and_cancellation_policy';


$route['privacy_policy'] = 'Index/privacy_policy';
$route['privacy-policy'] = 'Index/privacy_policy';


$route['disclaimer'] = 'Index/disclaimer';
 

$route['faqs'] = 'Index/faq';
 







$route['privacy-policy']  = 'privacy_policy';







$route['refund-policy'] = 'refund_policy';







$route['terms-of-use'] = 'terms_of_use';







$route['cookies-policy'] = 'cookies_policy';











$route['driver-installation-instruction'] = 'driver_installation_instruction';



$route['trial-driver-download'] = 'driver_installation_instruction/downloadlink';



$route['try-now'] = 'driver_installation_instruction/trynow';







$route['after-install'] = 'after_install';







$route['after-uninstall'] = 'after_uninstall';







$route['uninstall/feedback'] = 'feedback';//'uninstallinstructions';    //'feedback';







$route['installed/welcome'] = '';







$route['buy-now'] = 'cart';















//$route['front/login/resetPasswordConfirmUser/(:any)'] = 'front/login/resetPasswordConfirmUser/$1';







$route['admin'] = 'admin/dashboard';



$route['vendor'] = 'vendor/dashboard';















// Service supp







$route['product/(:num)/(:num)'] = 'product_list/get_product_list/$1/$1';







$route['shop'] = 'product_list/get_product_list';















$route['time-closed'] = 'timeclosed';







