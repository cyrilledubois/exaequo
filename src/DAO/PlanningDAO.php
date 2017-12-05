<?php
namespace WF3\DAO;

class PlanningDAO extends DAO{

	//je crée un attribut qui va contenir un objet de classe UsersDAO (la lcasse qui nous permet de manipuler la table users)
	private $usersDAO;
	//le setter associé
	public function setUsersDAO(UsersDAO $usersDAO){
		$this->usersDAO = $usersDAO;
	}

    public function selectPlanning(){
        $result = $this->bdd->query('SELECT * FROM planning ORDER BY date_cours ASC LIMIT 10');
    }




}