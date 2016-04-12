<?php 
class UserLogin{
	private $db;
    public function __construct()
    {
        $this->db = new Connection();
        $this->db = $this->db->dbConnect();
    }

    public function LogIn($uname,$pass){
        if(!empty($uname) && !empty($pass))
        {
            $stmt=$this->db->prepare("SELECT * FROM customer WHERE CustomerEmail= ? AND CustomerPassword= ? ");
            $stmt->bindParam(1,$uname);
            $stmt->bindParam(2,$pass);
            $stmt->execute();

            if($stmt -> rowCount() == 1)
            {
			?>
                <script>
					window.onload=function()
					{
						alert("Login successfully");
						window.location="Home.php";
					}
				</script>
			<?php
            }
            else
            {
                echo "Incorrect username and password...";
            }
        }
        else
        {
            echo "Please enter username and password";
        }
    }
}
?>