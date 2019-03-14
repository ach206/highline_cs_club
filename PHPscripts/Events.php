<?php

class Events extends myPDO{
	public function getPastEvents(){
	
		$stmt = $this->connect()->query("SELECT * FROM Past_Events");
		while($row = $stmt->fetch()){

echo <<<EOT
          <div class="announce">
            <div class="hiTitle">
            <h3>Past Events</h3>
            </div>
            <p id="past-event-date">{$row['date']}</p>
            <p id="past-event-name">{$row['evt_name']}</p>
            <p id="past-event-location">{$row['location']}</p>
          </div>
EOT;

		}
	
	
    }//CLOSE getPastEvents

	public function getUpcomingEvents(){
	
		$stmt = $this->connect()->query("SELECT * FROM Upcoming_Events");
		while($row = $stmt->fetch()){

echo <<<EOT
          <div class="announce">
            <div class="hiTitle">
            <h3>Upcoming Events</h3>
            </div>
            <p id="upcoming-event-date">{$row['date']}</p>
            <p id="upcoming-event-name">{$row['name']}</p>
            <p id="upcoming-event-location">{$row['location']}</p>
          </div>
EOT;

		}
	
	
    }//CLOSE getPastEvents
	
	// public function getPlayerbyName($playername){
	// 	$stmt = $this->connect()->prepare("SELECT * FROM roster WHERE first_name =?");
	// 	$stmt->execute(array($playername));
	// 	echo "Row Count: ". $stmt->rowCount();
	// 	while($row = $stmt->fetch()){
			
	// 		//echo "FirstName: ".$row['first_name']." LastName: ".
	// 		//echo $row['last_name']."<br>";
	// 		echo '<pre>',print_r($row),'</pre>';
			
	// 	}
		
	// }
	// public function insertImage($imagename,$image){
	// 	$stmt = $this->connect()->prepare("INSERT INTO imageTable VALUES(null,?,?)");
	// 	$stmt->execute(array($imagename,$image));
		
	// 	if($stmt->rowCount()){
			
		
	// 		return 1;
			
	// 	}else{
	// 		return 0;
	// 	}
		
	// }
	
	// public function retrieveImage($imagename){
	// 	$stmt = $this->connect()->prepare("SELECT * FROM imageTable WHERE imageName =?");
	// 	$stmt->execute(array($imagename));
	// 	while($row = $stmt->fetch()){
	// 		echo "<img src=".$row['image'].">";
			
			
	// 	}
		
	// }
	// public function addPictureURLToDatabase($URL){
	// 	// not working yet.
	// 	//your job to get it to work.
	// }
	
	
	
	
	
	
	
	
	
	
	
	
	
}



?>