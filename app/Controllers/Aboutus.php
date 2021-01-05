<?php namespace App\Controllers;
use App\Models\CommonModel;
use Mobile_Detect;

class Aboutus extends BaseController {

	public function index()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
        $data['all_project_data']  = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0), $orderby);
		$data['title']= 'Web Development, Designing, Mobile Development- About US';
		$data['keywords']= "Social Media Marketing, Social Media Marketing Services, Top Advertising Agencies, Advertisement, Best Marketing Companies, Animated video in india, Video maker, Seo and Internet Marketing Services, Online Digital Seo, Web Design Agency, Web Design Company, Responsive Web Design, Web Development Company, Website Creation, Ecommerce website development, App Store, Ios App Development Service.";
		$data['description']= "Manifest infotech provides the best services of web design and development, digital marketing, logo banner, social media, mobile app development, Seo in india.";

		$detect = new Mobile_Detect();
		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
			$data['mobile'] = 1;
		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
        echo view('about');
        echo view('portfolio/related_projects');
        echo view('includes/footer');
	}
}
