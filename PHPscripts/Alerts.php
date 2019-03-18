<?php

class Alerts extends myPDO{
	public function getRecentAlert(){
	
    $stmt = $this->connect()->query("SELECT * FROM Announcements");
    // $row = $stmt->(fetch)
		while($row = $stmt->fetch()){

echo <<<EOT
            <p class="announcement-date">{$row['date']}</p>
            <p class="announcement-description">{$row['description']}</p>
EOT;

        }
      }

// 	public function getRecentAlert(){
// 		$stmt = $this->connect()->prepare("SELECT * FROM Announcements WHERE description =?");
// 		while($row = $stmt->fetch()){

// echo <<<EOT
//             <p class="announcement-date">{$row['date']}</p>
//             <p class="announcement-description">{$row['description']}</p>
// EOT;
//     }}


	
}



?>