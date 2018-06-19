<?php 

class MainController extends Controller {
    
    function render(){
        $this->f3->set('view','dashboard.html');
        $template=new Template;
        echo $template->render('layout.html');
    }
    
    function displayMessages(){
        $messages = new Messages($this->db);
        
        $this->f3->set('messages',$messages->all());
        $this->f3->set('view', 'messages.html');
        $template=new Template;
        echo $template->render('layout.html');
    }
    
    function apiMessages(){
        $messages = new Messages($this->db);
        
        $data = $messages->all();
        
        $json = array();
        
        foreach($data as $row){
            $item = array();
            foreach($row as $key => $value){
                $item[$key] = $value;
            }
            
            array_push($json, $item);
        }
        echo json_encode($json);
    }
    
    function displayMessagesAjax(){
        $this->f3->set('view', 'messagesajax.html');
        $template=new Template;
        echo $template->render('layout.html');
    }
    
//    function render(){
//        $message = new Messages($this->db);
//        $message->kiy = 'Hellotwo';
//        $message->value = 'This is the second message from the DB inserted from code';
//        $message->save();
//        
//        $messages = new Messages($this->db);
//        $msg = $messages->getById(3)[0];
//        
//        /*$messages = new Messages($this->db);
//        $msg = $messages->all()[1];*/
//        
//        $this->f3->set('msg',$msg);
//        $template=new Template;
//        echo $template->render('template.html');    
//    }
    
    /*function sayhello(){
        echo 'Hello Babe!';
    }*/
}
