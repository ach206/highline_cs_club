
  <?php

class Leaders extends myPDO{
    public function getLeaders(){
        
        $stmt = $this->connect()->query("SELECT * FROM Leaders");
		while($row = $stmt->fetch()){
            
            echo <<<EOT
            <div class="row">
              <div class="col s12 m6">
                <div class="card">
                  <div class="card-image">
                    <img src={$row['picture']}>
                    <span class="card-title">{$row['name']}</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">email</i></a>
                  </div>
                  <div class="card-content">
                    <p>{$row['position']}</p>
                    <p>{$row['email']}</p>
                  </div>
                </div>
              </div>
            </div>
EOT;

		}
	
	
    }//CLOSE getLeaders
}