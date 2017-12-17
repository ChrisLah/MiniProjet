<?php 

class President implements SplSubject{

	protected $observers = [];

	private static $instance = null ;

	private $nom='';

	private $prenom='';

	private function __construct($nom,$prenom){

		$this->nom = $nom;
		$this->prenom = $prenom;
	}

	public static function getInstance($nom,$prenom){
		if(is_null(self::$instance)){
			self::$instance = new President($nom,$prenom);
		}

		return self::$instance;
	}

	public function getNom(){
		return $this->nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function setNom($nom){
	    $this->nom = $nom;
	    $this->notify();
 	}

    public function setPrenom($prenom){
	    $this->prenom = $prenom;
	    $this->notify();
  	}
	
	public function __toString(){
		return $this->getNom() .' '. $this->getPrenom();
	}

	public function attach(SplObserver $observer){
    	$this->observers[] = $observer;
 	}
  
	public function detach(SplObserver $observer){
	    if (is_int($key = array_search($observer, $this->observers, true))){
	      unset($this->observers[$key]);
	    }
  	}
  
 	public function notify(){
    	foreach ($this->observers as $observer){
      		$observer->update($this);
   		}
   	}
  
}
