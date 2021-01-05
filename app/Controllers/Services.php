<?php namespace App\Controllers;
use App\Models\CommonModel;
use Mobile_Detect;

class Services extends BaseController {
	public function index()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Andriod & Web Application Devlopment Services | Digital Marketing Services';
		$data['keywords']= "Web Development, PHP Applications Development, Website Designing, Redesign Website, Website Maintenance Service, CMS Website Package, Mobile Applications Development, Web Applications Development, Web Hosting Services, Website Promotion, SEO Services, Search Engines Marketing, E-marketing, Social Media Marketing, Graphic Design India";
		$data['description']= "Get exclusive android application & website development services & give exploseure to your business with digital marketing to make an effective online presence. Explore now!";

		$detect = new Mobile_Detect();
		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
			$data['mobile'] = 1;
		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('services');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function webDesign()
	{
		$data['all_project_data'] = $this->commonmodel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));

		$data['title']= 'Responsive Web Design  | Website Design - Manifest Infotech';
		$data['description']= "Manifest infotech provides services of web designing and development services in India, web design agency, web page and website creation, responsive design.";
		$data['keywords']= "Web Development Services, Web Designing Services In India, Web Development Services Near Me, Web Development Service Provider, Web Development Services  In India, Web Development, Web Designing, Website Design, Web Page Design, Website Design Company, Responsive Design, Web Design Agency, Web Design Company, Responsive Web Design,Web Development Company, Website Creation, Ecommerce website development";

		$detect = new Mobile_Detect();
		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
			$data['mobile'] = 1;
		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('web-design');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function webDevelopment()
	{
		$data['all_project_data'] = $this->commonmodel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));

		$data['title']= 'Web Development | Web Designing Services - Manifest Infotech';
		$data['description']= "Manifest infotech provides services of web designing and development services in India, web design agency, web page and website creation, responsive design.";
		$data['keywords']= "Web Development Services, Web Designing Services In India, Web Development Services Near Me, Web Development Service Provider, Web Development Services  In India, Web Development, Web Designing, Website Design, Web Page Design, Website Design Company, Responsive Design, Web Design Agency, Web Design Company, Responsive Web Design, Web Development Company, Website Creation, Ecommerce website development.";

		$detect = new Mobile_Detect();
		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
			$data['mobile'] = 1;
		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('web-development');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function seo()
	{
		$data['all_project_data'] = $this->commonmodel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Seo | Manifest Infotech';
		$data['description']= "Search Engine Optimization Services - We are using white hat technique to improve page ranking of websites for better traffic on website";
		$data['keywords']= "search engine optimisation services, seo website, website seo services,website seo analysis, seo services, organic seo services";

		$detect = new Mobile_Detect();
		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
			$data['mobile'] = 1;
		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('seo');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function digitalMarketing()
	{
		$data['all_project_data'] = $this->commonmodel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Digital Marketing | Manifest Infotech';
		$data['description']= "Digital Marketing is the medium to attract and manage customers through various channels";
		$data['keywords']= "Affiliate Marketing, Email marketing, Pay per click marketing, Search engine optimization";

		$detect = new Mobile_Detect();
		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
			$data['mobile'] = 1;
		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('digital-marketing');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
}
