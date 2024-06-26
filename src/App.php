<?php
    declare(strict_types= 1);
    namespace App;
    use App\DB;
    use App\Exception\RouteNotFoundException;
    use App\Shared\Router;
    use PDO;
    class App{

        public function __construct(protected Router $router, protected array $request){
        }

        public function run(){
            try {
                echo $this->router->resolve($this->request['uri'], strtolower($this->request['method']));
            } catch (RouteNotFoundException $e) {
                http_response_code(404);
                echo View::make('error/404');
            }
        }

    }