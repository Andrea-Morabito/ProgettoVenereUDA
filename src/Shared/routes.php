<?php
    use App\Exceptions\RouteNotFoundException;
    use App\View;
    use App\App;
    use App\Shared\Router;
    use App\Controllers as Controllers;

    include "vendor/autoload.php";
    define('VIEW_PATH', __DIR__.'/../Views');
    define('STYLE_PATH', 'src/Shared/Styles');
    define('IMAGES_PATH', 'src/Shared/Images');

        $router = new Router(); // Creates a new object Router
        
        //Set all the routes for the Router
        $router
        ->get("/",[Controllers\Home::class, 'index'])
        ->get("/login",[Controllers\Login::class, 'index'])
        ->post("/login",[Controllers\Login::class, 'authenticate'])
        ->get("/signup",[Controllers\Signup::class, 'index'])
        ->post("/signup",[Controllers\Signup::class, 'create'])
        ->get("/logout",[Controllers\Dashboard::class, 'logout'])
        ->get("/dashboard",[Controllers\Dashboard::class, 'index'])
        ->get("/dashboard/events",[Controllers\Dashboard::class, 'eventList'])
        ->post("/dashboard/book",[Controllers\Dashboard::class, 'bookEvent'])
        ->get("/dashboard/delete_account",[Controllers\Dashboard::class, 'deleteUserAccount'])
        ->post("/dashboard/add_accessories",[Controllers\Dashboard::class, 'add_accessories']);
        
    (new App(
        $router,
        ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    ))->run();