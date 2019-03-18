<?php

class Subscriptions extends myPDO{
    
    public function sendSub(
        $name, 
        $email, 
        $prefTime, 
        $prefDay, 
        $notes, 
        $leadership, 
        $subscribe){
	
		$stmt = $this->connect()->prepare("INSERT INTO Subscribers VALUES(NULL,CURRENT_TIMESTAMP,?,?,?,?,?,?,?)");
		$stmt->execute(array($name, 
        $email, 
        $prefTime, 
        $prefDay, 
        $notes, 
        $leadership, 
        $subscribe));

		if($stmt->rowCount()){
			echo '<pre>Thanks, ' .$name. '. Your request has been received.</pre>';
		}
// echo <<<EOT
// <p> Form Submitted Successfully! </p>
// EOT;

		}
	
	
    //CLOSE getPastEvents

	// public function insertImage($imagename,$image){
	// 	$stmt = $this->connect()->prepare("INSERT INTO imageTable VALUES(null,?,?)");
	// 	$stmt->execute(array($imagename,$image));
		
	// 	if($stmt->rowCount()){
			
		
	// 		return 1;
			
	// 	}else{
	// 		return 0;
	// 	}
	

	
	
	
}



?>