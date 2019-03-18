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


		}

public function getSubs(){
	
$stmt = $this->connect()->query("SELECT * FROM Subscribers");
while($row = $stmt->fetch()){

echo <<<EOT
<div class='sub-container'>
<p class='sub-name'>{$row['name']}</p>
<p class='sub-email'>{$row['email']}</p>
</div>
EOT;

}
	
}//CLOSE getSubs
	
}



?>