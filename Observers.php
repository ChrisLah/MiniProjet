<?php
class Observer1 implements SplObserver{
 	public function update(SplSubject $obj){
   		echo '(Obs1) Valeur du <strong>nom</strong> : ', $obj->getNom();
  	}
}

class Observer2 implements SplObserver{
	public function update(SplSubject $obj){
  		echo ' (Obs2) Valeur du <strong>Prenom</strong> : ', $obj->getPrenom();
 	}
}