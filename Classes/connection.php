<!-- Database Connection File -->
<?php
	class Connection{
		public $db;
		public function __construct(){
			try{
				$this->db = new PDO('mysql:host=localhost; dbname=zyenatest','root','');
			} 
			catch(PDOException $pe){
				echo "Database Error : ".$pe->getMessage();
				die();
			}
		}
	}
	$x = new connection();
?>
