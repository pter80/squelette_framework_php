<?php

namespace Controllers;

class IndexController extends Controller
{
    public function index($params)
    {
        //savoir si un utilisateur existe deja
    	$connectUser="Philippe";
    	$message=$params;
    	var_dump ($params);
    	$em = $this->em;
    	
        echo $this->twig->render('index.html', ['connectUser' =>   $connectUser]);
    }
    
    public function getVilles($params) 
    {
        $query = $this->em->createQuery('SELECT u FROM Users u');
        $users = $query->getResult();
        echo $this->twig->render('table.twig', ['users' =>   $users]);

    }
    
    
}
