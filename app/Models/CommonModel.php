<?php 
/*
this model is commonly used for all pages..
like index page, sign in etc.
*/
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CommonModel extends Model
{
    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }
	
	// this function returns table data.
	function getRecords($table, $fields="", $condition="", $orderby="", $single_row=false) //$condition is array 
	{
//		if($fields != "")
//		{
//			$this->db->select($fields);
//		}

        $rs = $this->db->table($table);

		if($orderby != "")
		{
            $rs->orderBy($orderby,'DESC');
		}

		if($condition != "")
		{
			$rs->getWhere($condition);
		}
		
		if($single_row)
		{  
			return $rs->get()->getResultArray();
		}
		return $rs->get()->getResultArray();

	}

	// Created by Neelesh Chouksey
	// this function is to add/edit data into table .
	// this function is to add/edit data in only one table at a time.
	function addEditRecords($table_name, $data_array, $id = "")
	{
		if($table_name && is_array($data_array))
		{
			$columns = $this->getTableFields($table_name);
			foreach($columns as $coloumn_data)
						  $column_name[]=$coloumn_data['Field'];
					  
			foreach($data_array as $key=>$val)
			{
				if(in_array(trim($key),$column_name))
				{
					$data[$key] = $val;
				}
			 }

			if($id == "")
			{	
				$query = $this->db->insert_string($table_name, $data);
			}
			else
			{
				$where = $table_name."_id = '$id'";
				$query = $this->db->update_string($table_name, $data, $where);
			}
			$this->db->query($query);
		}			
	}
	
	// function for deleting records by condition.
	function deleteRecords($table, $where)
	{ 
		$query = "DELETE FROM $table WHERE $where";
		$this->db->query($query);
	}

	// this function is used to get all the fields of a table.
	function getTableFields($table_name)
	{
		$query = "SHOW COLUMNS FROM $table_name";
		$rs = $this->db->query($query);
		return $rs->result_array();
	}

	// This function is used to set up mail configuration..
	function setMailConfig()
	{
		$this->load->library('email');

		$config['smtp_host'] = SMTP_HOST;
		$config['smtp_user'] = SMTP_USER;
		$config['smtp_pass'] = SMTP_PASS;
		$config['smtp_port'] = SMTP_PORT;
		$config['protocol'] = PROTOCOL;
		$config['mailpath'] = MAILPATH;
		$config['mailtype'] = MAILTYPE;
		$config['charset'] = CHARSET;
		$config['wordwrap'] = WORD_WRAP;

		$this->email->initialize($config);
	}

	function sendEmail()
	{
		if($this->email->send())
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getNeighbourProject($project_id='')
	{
		$result = array();
		
//		$this->db->select('p.*');
//		$this->db->from('portfolio_project as p');
        $rs = $this->db->table("portfolio_project as p");

        $rs->where('project_id >',$project_id);
        $rs->where('is_active',1);
        $rs->where('del_status',0);
        $rs->orderBy("project_id", "asc");
        $rs->limit(1);
		$rs = $rs->get();
		if(count($rs->getResultArray())>0){
			$prev = $rs->getRowArray();
			$result['prev']['project_slug'] = str_replace(" ","-",$prev['project_name']);
			$result['prev']['project_id'] = $prev['project_id'];
		}else{
//			$this->db->select('p.*');
//			$this->db->from('portfolio_project as p');
            $rs = $this->db->table("portfolio_project as p");
            $rs->where('is_active',1);
            $rs->where('del_status',0);
            $rs->orderBy("project_id", "asc");
            $rs->limit(1);
			$rs = $rs->get();
			$prev = $rs->getRowArray();
			$result['prev']['project_slug'] = str_replace(" ","-",$prev['project_name']);
			$result['prev']['project_id'] = $prev['project_id'];
		}

//		$this->db->select('p.*');
//		$this->db->from('portfolio_project as p');
        $rs = $this->db->table("portfolio_project as p");
        $rs->where('project_id <',$project_id);
        $rs->where('is_active',1);
        $rs->where('del_status',0);
        $rs->orderBy("project_id", "desc");
        $rs->limit(1);
		$rs = $rs->get();
        if(count($rs->getResultArray())>0){
			$next = $rs->getRowArray();
			$result['next']['project_slug'] = str_replace(" ","-",$next['project_name']);
			$result['next']['project_id'] = $next['project_id'];
		}else{
//			$this->db->select('p.*');
//			$this->db->from('portfolio_project as p');
            $rs = $this->db->table("portfolio_project as p");
            $rs->where('is_active',1);
            $rs->where('del_status',0);
            $rs->orderBy("project_id", "desc");
            $rs->limit(1);
            $rs = $rs->get();
            $next = $rs->getRowArray();
			$result['next']['project_slug'] = str_replace(" ","-",$next['project_name']);
			$result['next']['project_id'] = $next['project_id'];
		}
		return $result;
	}









}

	