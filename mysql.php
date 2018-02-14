<?php 

// include('./functions.php');
// $host = '127.0.0.1';
// $user = 'root';
// $pass = 'root';
// $dbname = 'yanchu';


// $link = new mysqli($host,$user,$pass,$dbname);
// $res = $link->query('select * from yanchu_dailydata');
// $res = $res->fetch_all();

// dump($res);
class Mysql{
	public $host;
	public $user;
	public $pass;
	public $dbname;
	public $link;
	public function __construct($host='127.0.0.1',$user='root',$pass='root',$dbname='nianshou'){
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbname = $dbname;
		$this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
	}

	public function __destruct(){
		$this->link->close();
	} 

	public function query($sql){
		$res = $this->link->query($sql);
		return $res->fetch_all();
	}
	public function add($sql){
		$res = $this->link->query($sql);
		return $res;
	}
}

 ?>