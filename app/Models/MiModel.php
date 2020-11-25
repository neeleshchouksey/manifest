<?php 
/*
this model is used for external pages only .
like index page, sign in etc.
*/
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class MiModel extends Model
{
    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }
	function getallpost()
	{
		//$result = $this->db->get_where('wp_posts', array('post_status'=>'post_status'), 6,0);

//		$this->db->select('*');
        $rs = $this->db->table("wp_posts");
//		$this->db->from('wp_posts');
        $rs->where('post_status','publish');
        $rs->orderBy('post_date',"desc");
        $rs->limit(6);
		$result = $rs->get();
		return $result->getResultArray();
	}








}