 <?php
use App\Core\Router;

   $router = new Router();
    $router->get('', 'PagesController@home');
    $router->get('about', 'PagesController@about');
    $router->get('admin', 'PagesController@admin');
    $router->post('admin', 'AdminController@auth');

    $router->get('logout', 'AdminController@logout');

    $router->get('dashboard', 'DashboardController@index');


    $router->post('tables', 'DashboardController@tables_creation');
    $router->post('dashboard', 'DashboardController@aboutData');


    $router->post('delete-client', 'DashboardController@delete');

    $router->post('buy-client', 'BuyController@buy');


    $router->get("products", "BuyController@index");


    $router->post('complete-client', 'DashboardController@completeCustomer');
    $router->post('done', 'DashboardController@doneCustomer');