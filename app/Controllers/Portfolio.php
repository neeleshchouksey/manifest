<?php namespace App\Controllers;
use App\Models\CommonModel;
use App\Models\MiModel;
use Mobile_Detect;

class Portfolio extends BaseController {

	public function index()
	{
		$orderby = 'project_id';
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
        $data['all_project_data']  = $commonModel->getRecords('portfolio_project','*',array('is_active'=>1, 'del_status'=>0), $orderby);
		$data['title']= 'Manifest Infotech| Company Portfolio';
		$data['description']= "Take a look for our Portfolio showcase for Web Designing, Development, SEO and Logo design. We convert your dreams into your achievement";
		$data['keywords']="Web design company, Web Development Company, Web Development Portfolio, Web Design Portfolios, Web Design, Web Development, IT Solution Company";

		//echo '<pre>';print_r($data['all_project_data']);exit;
		echo view('includes/header',$data);
		echo view('portfolio/portfolio');
		//echo view('Testimonials-carousel');
		echo view('includes/footer');
	}
	public function project($project_slug='')
	{
		//echo "<pre>";print_r($project_slug);die;
        $uri = current_url(true);
		$project_slug = str_replace("-", " ",$uri->getSegment(3));
        $db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
        $miModel = new MiModel($db);
		$data['project_data'] = $commonModel->getRecords('portfolio_project',  '*' ,  array('project_name'=>$project_slug, 'del_status'=>0),  '',  true);
		if(!$data['project_data'] ){
			redirect('');
		}
		$project_id = $data['project_data']['project_id'];
		$data['all_project_data'] =$commonModel->getRecords('portfolio_project','*', array('is_active'=>1, 'del_status'=>0));
		$data['all_category_data'] = $commonModel->getRecords('portfolio_category','', array('is_active'=>1, 'del_status'=>0));
		$data['all_posts'] = $miModel->getallpost();
		//$data['project_data'] = $this->commonmodel->getRecords('portfolio_project', '*', array('project_id'=>$project_id), '', true);
		$data['project_neighbour'] = $commonModel->getNeighbourProject($project_id);

		$data['title']= $data['project_data']['title'];
		$data['description']= $data['project_data']['meta_description'];

		$data['keywords']= "";

		$detect = new Mobile_Detect();
		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
			$data['mobile'] = 1;
		else
			$data['mobile'] = 4;

		//echo "<pre>";print_r($data['project_data']);die;
		echo view('includes/header',$data);
		echo view('portfolio/project-detail');
		//echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
	public function category($category_id)
	{
		$db = \Config\Database::connect();
        $commonModel = new CommonModel($db);
        $miModel = new MiModel($db);
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*', array('is_active'=>1, 'del_status'=>0));
		$data['all_category_data'] = $commonModel->getRecords('portfolio_category','', array('is_active'=>1, 'del_status'=>0));
		$data['all_posts'] = $miModel->getallpost();
		$data['category_data'] = $commonModel->getRecords('portfolio_category', '*', array('category_id'=>$category_id), '', true);
		//echo '<pre>';print_r($data['category_data']);exit;
		$data['all_project_data'] = $commonModel->getRecords('portfolio_project','*', array('category_id'=>$data['category_data']['category_id'],'is_active'=>1, 'del_status'=>0));
		//echo '<pre>';print_r($data['all_project_data']);exit;
			$data['title']= $data['category_data']['category'].' | Manifest Infotech';
		//echo '<pre>';print_r($data['title']);exit;

		$detect = new Mobile_Detect();
		if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS())
			$data['mobile'] = 1;
		else
			$data['mobile'] = 4;

		if($category_id==1){
			$data['description']= "We have designers that made project design better than clients' requirement and expectations.";
		}else if($category_id==2){
			$data['description']= "Our developers are expert in their work which we are a showcase on our site by showing Web development projects.";
		}else{
			$data['description']= "Our company portfolio category of SEO shows the projects of all our work done for our clients.";
		}

		$data['keywords']= "";
		echo view('includes/header',$data);
		echo view('portfolio/category');
		echo view('portfolio/related_projects');
		echo view('includes/footer');
	}
}
