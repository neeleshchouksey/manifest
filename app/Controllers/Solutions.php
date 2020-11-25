<?php namespace App\Controllers;
use App\Models\CommonModel;

class Solutions extends BaseController {

	public function index()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'CRM Application, E-Lerning Software, E-Commerce Website | Best Web Soltuions';
		$data['keywords']= "Crm Application, Best Website Solutions, E-Commerce Website Design, E-Learning Software, Python
			PHP, Android, iOS, Web Design, Cake PHP, Codeigniter, Zend, Wordpress, Drupal, Joomla, HTML, CSS, Javascript, Ajax, jquery, ASP.Net";
		$data['description']= "Turn your business ideas into reality with the best web solutions like CRM application, E-Commerece website & softwares for E- learning & other. For more details call now.";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('solutions');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
}
