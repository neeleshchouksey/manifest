<?php namespace App\Controllers;
use App\Models\CommonModel;
use App\Models\MiModel;

class Mi extends BaseController {

	public function index()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$orderby = 'project_id';
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0), $orderby);
		$data['title']= 'Web Design & Development | Mobile App Development | Digital Marketing Company India';
		$data['keywords'] = "Social Media Marketing, Social Media Marketing Services, Top Advertising Agencies, Advertisement, Best Marketing Companies, Animated video in india, Video maker, Seo and Internet Marketing Services, Online Digital Seo, Web Design Agency, Web Design Company, Responsive Web Design, Web Development Company, Website Creation,Ecommerce website development, App Store, Ios App Development Service.";
		$data['description']= "Manifest infotech provides the best services of web design and development, digital marketing, logo banner, social media, mobile app development, Seo in india.";
		//echo '<pre>';print_r($data);exit;
		echo view('includes/header',$data);
		echo view('home');
		echo view('includes/footer');
	}
	public function testimonial()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Testimonial | Feedback | Client Review - Manifest infotech';
		$data['keywords']= "Social Media Marketing, Social Media Marketing Services, Top Advertising Agencies, Advertisement, Best Marketing Companies, Animated video in india, Video maker, Seo and Internet Marketing Services, Online Digital Seo, Web Design Agency, Web Design Company, Responsive Web Design, Web Development Company, Website Creation,Ecommerce website development, App Store, Ios App Development Service.";
		$data['description']= "Manifest infotech provides the best services of web design and development, digital marketing, logo banner, social media, mobile app development, Seo in india.";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('testimonials');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function career()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Hiring in IT Companies in Indore | Jobs For PHP & Developers';
		$data['keywords']= "Hiring in IT Sector, Hiring in IT Companies, IT Jobs in Indore, Jobs for PHP Developer, Jobs for android Developer, Jobs for web developer, Jobs for web designer, Jobs for testers, Jobs for QA, jobs for Business development executive, Jobs for HR, Vaccany";
		$data['description']= "Are you a IT fresher or experienced? Work with a leading IT company in indore, jobs for PHP, developers & more with an effective package & growth opportunities. Hurry we are hiring now!";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('career');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function contact()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));

		$data['title']= 'Contact Us | Get in Touch With US - Manifest infotech';
		$data['keywords']= "Social Media Marketing, Social Media Marketing Services, Top Advertising Agencies, Advertisement, Best Marketing Companies, Animated video in india, Video maker, Seo and Internet Marketing Services, Online Digital Seo, Web Design Agency, Web Design Company, Responsive Web Design, Web Development Company, Website Creation,Ecommerce website development, App Store, Ios App Development Service.";
		$data['description']= "Manifest infotech provides the best services of web design and development, digital marketing, logo banner, social media, mobile app development, Seo in india.";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('contact');
		// echo view('gmap');
		// echo view('portfolio/related_projects');
		echo view('includes/footer');

	}
	public function pageMissing()
	{
		$data['title']= 'Error 404 (Page Not Found) | Manifest Infotech';
		$data['description']= "";
		$data['keywords']= "";
		echo view('includes/header',$data);
		echo view('page-missing');
		echo view('includes/footer');

	}
	public function process()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Process | Manifest Infotech';
		$data['description']= "";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('process');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function experties()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Experties | Manifest Infotech';
		$data['description']= "QA & Deploy is the last step for SDLC after this project deploy to the client for use on browser";
		$data['keywords']= "";

		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('experties');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function offering()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Offering | Manifest Infotech';
		$data['description']= "";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('offering');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function whatwedo()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'What We Do | Manifest Infotech';
		$data['description']= "";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('what-we-do');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function whyus()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Why Us | Manifest Infotech';
		$data['description']= "";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('why-us');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function mission()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Mission | Manifest Infotech';
		$data['description']= "";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('mission');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function analysisandplanning()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Analysis and Planning | Manifest Infotech';
		$data['description']= "Analyze and Planning is the first step for software development life cycle through agile model";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('analysis-and-planning');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function designandhtml()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Design and Html | Manifest Infotech';
		$data['description']= "Design & HTML is second step in MI for SDLC which make the basic layout of project";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('design-and-html');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function developmentandimplimentation()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Development and Implimentation | Manifest Infotech';
		$data['description']= "Development and Implementation is third step which make the project user interface and implement the code";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('development-and-implimentation');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function qaanddeploy()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'QA and Deploy | Manifest Infotech';
		$data['description']= "QA & Deploy is the last step for SDLC after this project deploy to the client for use on browser";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('qa-and-deploy');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function businessDevelopmentOfficer()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
        $miModel = new MiModel($db);
		$data['all_posts'] = $miModel->getallpost();
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Business Development Officer | Manifest Infotech';
		$data['description']= "Job opening for Business development officer with 3 years of experience in bidding, business planning etc.";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('business-development-officer');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function webDesigner()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
        $miModel = new MiModel($db);
		$data['all_posts'] = $miModel->getallpost();
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Web Designer | Manifest Infotech';
		$data['description']= "Creative Web designer having a golden opportunity to show their skills and talent.";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('web-designer');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function phpDevelopment()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
        $miModel = new MiModel($db);
		$data['all_posts'] = $miModel->getallpost();
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Php Development | Manifest Infotech';
		$data['description']= "We are hiring PHP developer with more than 2 years of experience in programming";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('php-development');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function projectManager()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
        $miModel = new MiModel($db);
		$data['all_posts'] = $miModel->getallpost();
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0));
		$data['title']= 'Project Manager. | Manifest Infotech';
		$data['description']= "We need a dynamic candidate with managerial skills to manage projects and give reason for future growth.";
		$data['keywords']= "";

//		$detect = new Mobile_Detect();
//		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
//			$data['mobile'] = 1;
//		else
			$data['mobile'] = 4;

		echo view('includes/header',$data);
		echo view('project-manager');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	function emailsender()
	{
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
		if($this->input->is_ajax_request())
		{
			// load form validation class
			echo library('form_validation');
			// set form validation rules
			$this->form_validation->set_rules('fname', 'Fname', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('phone', 'Phone Number', 'trim');
			$this->form_validation->set_rules('subject', 'Subject',  'trim');
			$this->form_validation->set_rules('msg', 'msg',  'trim');
			//call the email configuration funtion
			$commonModel->setMailConfig();
			// set email data
			$this->email->from($this->input->post('email'), $this->input->post('fname'));
			$email=$this->input->post('email');
			$this->email->to(TO_EMAIL);
			$this->email->reply_to($this->input->post('email'), $this->input->post('fname'));
			$this->email->subject($this->input->post('subject'));
			if($this->input->post('phone'))
			{
				$phone=$this->input->post('phone');
				$message_contact=$this->input->post('msg')."<br /><br />"."Email : ".$email."<br />"."Contact no. : ".$phone;
			}
			else
				$message_contact=$this->input->post('msg')."<br /><br />"."Email : ".$email;
			$this->email->message($message_contact);
			// send email
			if($commonModel->sendEmail())
			{
				echo 'Thank you for contacting us.';
			}
			else
			{
				echo show_error($this->email->print_debugger());
			}
		}
	}
	public function sitemap()
	{
		$data['title']= 'Sitemap | Manifest Infotech';
		$data['description']= "";
		$data['keywords']= "";
		echo view('includes/header',$data);
		echo view('sitemap');
		echo view('includes/footer');
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
