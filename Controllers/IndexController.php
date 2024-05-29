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
        echo $this->twig->render('index.html', ['connectUser' =>   $connectUser]);
    }
    
    
}
