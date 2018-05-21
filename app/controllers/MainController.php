<?php 

class MainController extends Controller {
    function render($f3){
        $f3->set('name','Hello World');
        $template=new Template;
        echo $template->render('template.html');    
    }
    function sayhello(){
        echo 'Hello Babe!';
    }
}
