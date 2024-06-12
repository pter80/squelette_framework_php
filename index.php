
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once "vendor/autoload.php";
session_start();

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;


//$routes->add('index', new Route('/index/index/{name}', ['name' => 'World']));
//$routes->add('table', new Route('/index/table'));

//dump($routes);

$request = Request::createFromGlobals();

//dump($request);

$response = new Response('Goodbye!');
//$response->send();

//use User;
$routes = new Routing\RouteCollection();
dump($request->attributes);

$route=$routes->add('user', new Routing\Route('/user/{method}', [
    'method' => null,
    '_controller' => function (Request $request): Response {
        if (is_leap_year($request->attributes->get('year'))) {
            return new Response('Yep, this is a leap year!');
        }

        return new Response('Nope, this is not a leap year.');
    }
]));
dump($routes,$route);
//$paths = array("src/Entity","toto");
$isDevMode = true;
$proxyDir=null;
$cache=null;


$class = "Controllers\\" . (isset($_GET['c']) ? ucfirst($_GET['c']) . 'Controller' : 'IndexController');
$target = isset($_GET['t']) ? $_GET['t'] : "index";
$getParams = isset($_GET['c']) ? $_GET['c'] : null;
$postParams = isset($_POST) ? $_POST : null;

$params = array(array(
    "url"=>"http://195.154.118.169/pter/backend/bootstrap.php",
    "message"=>(isset($_GET["message"])?$_GET['message']:""),
    "get"=>$getParams,
    "post"=>$postParams
    //"em"=>$entityManager
));
//$class=new $classStr;
if ($class == "Controllers\IndexController" && in_array($target, get_class_methods($class))) // si c = index et qu'on a un t = methode existante de c
{ 
    $class = new Controllers\IndexController; // c = index
    call_user_func_array([$class, $target], $params); // c = index et t = la methode existante
} else 
{ // dans tout les autres cas ou c != index et t n'existe pas alors
    $class = new $class; // c = index 
    call_user_func_array([$class, $target],$params); 
} 
