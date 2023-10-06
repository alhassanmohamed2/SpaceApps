 <?php
use App\Core\Router;

   $router = new Router();
    $router->get('', 'PagesController@index');
  
    $router->get('login','PagesController@login');
    $router->get('signup','PagesController@signup');
    $router->post('signup','UserController@signup');
    $router->post('login','UserController@login');

    $router->post('adduserdata','UserController@details');

    $router->get('projecthome','PagesController@projectshom');
