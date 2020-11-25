<?php namespace App\Controllers;

use App\Models\CommonModel;

class Home extends BaseController
{
	public function index()
	{
        $orderby = 'project_id';
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
        $data['all_project_data']  = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0), $orderby);
        $data['title']= 'Web Design & Development | Mobile App Development | Digital Marketing Company India';
        $data['keywords'] = "Social Media Marketing, Social Media Marketing Services, Top Advertising Agencies, Advertisement, Best Marketing Companies, Animated video in india, Video maker, Seo and Internet Marketing Services, Online Digital Seo, Web Design Agency, Web Design Company, Responsive Web Design, Web Development Company, Website Creation,Ecommerce website development, App Store, Ios App Development Service.";
        $data['description']= "Manifest infotech provides the best services of web design and development, digital marketing, logo banner, social media, mobile app development, Seo in india.";

        echo view('includes/header',$data);
        echo view('home');
        echo view('includes/footer');
	}

	//--------------------------------------------------------------------

}

