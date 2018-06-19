<?php 

class UserController extends Controller {
    
    function render(){
        $this->f3->set('year', date("Y"));
        $template=new Template;
        echo $template->render('login.html');    
    }
    
    function beforeroute(){    
    }
    
    function authenticate(){
        $email = $this->f3->get('POST.emailaddress');
        $password = $this->f3->get('POST.password');
        
        $user = new User($this->db);
        $user->getByEmail($email);
        
        if($user->dry()) {
            $this->f3->reroute("/login");
        }
        
        if(password_verify($password, $user->password)){
            $this->f3->set('SESSION.user', $user->email);
            $this->f3->reroute("/");
        } else{
            $this->f3->reroute("/login");
        }
            
        
    }
}
