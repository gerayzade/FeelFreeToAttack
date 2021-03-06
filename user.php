<?php
include('password.php');
class User extends Password{

    private $_db;

    function __construct($db){
    	parent::__construct();

    	$this->_db = $db;
    }

	private function get_user_hash($username){

		try { 

			$stmt = $this->_db->prepare("SELECT password, username, id FROM users WHERE username = '" . $username . "';" );
			$stmt->execute(array('username' => $username));
            return $stmt->fetch();

		} catch(PDOException $e) {
		    echo '<p>'.$e->getMessage().'</p>';
		}
	}

	public function login($username,$password){

		$row = $this->get_user_hash($username);
        
        $hashedpassword = $this->password_hash($row['password'], PASSWORD_BCRYPT);

		if($this->password_verify($password,$hashedpassword) == 1){
            
		    $_SESSION['loggedin'] = true;
		    $_SESSION['username'] = $row['username'];
		    $_SESSION['id'] = $row['id']; 
            
		    return true;
        }
	}

	public function logout(){
		session_destroy();
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
	}

}
?>
