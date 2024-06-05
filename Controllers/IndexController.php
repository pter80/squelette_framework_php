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
    
    public function getUsers($params) 
    {
        $query = $this->em->createQuery('SELECT u FROM Users u');
        $users = $query->getResult();
        dump($users);
        echo $this->twig->render('table.twig', ['users' =>   $users]);

    }
    public function getVilles($params) 
    {
        $query = $this->em->createQuery("SELECT v FROM Villes v WHERE v.id BETWEEN 1 AND 20");
        $villes = $query->getResult();
        dump($villes);
        //echo $this->twig->render('table.twig', ['users' =>   $users]);

    }
    
    
}
