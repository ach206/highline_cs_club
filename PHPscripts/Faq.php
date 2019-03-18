<?php

class Faq extends myPDO{
    

public function getFaq(){
	
$stmt = $this->connect()->query("SELECT * FROM FAQ");
while($row = $stmt->fetch()){

echo <<<EOT
<div class='faq-item'>
<p class='faq-question' style='font-weight:700;font-style:italic;'>{$row['question']}</p>
<p class='faq-answer'>{$row['answer']}</p></br></br>
</div>
EOT;

}
	
}//CLOSE getFaq
	
}



?>