<?php

require_once("vendor/autoload.php");

$f3 = Base::instance();

//Sent to config.ini
//$f3->set('DEBUG', 3);

$f3->config('config.ini');
$f3->config('routes.ini');

//removed functionality
/*class AboutPage extends AppController {
    function render(){
        echo 'This is the About Page';
    }
}
*/

/*$f3->set('message','Hello.World!!!');

$f3->route('GET /',
          function($f3) {
              echo $f3->get('message');
          });

$f3->route('GET /Adrian',
          function() {
              echo ('Hello Adrian!');
          });*/

/*$f3->route('GET /', 'Main->render');
$f3->route('GET /hello', 'Main->sayhello');
$f3->route('GET /about', 'AboutPage->render');*/

$f3->run();
