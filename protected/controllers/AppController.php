<?php
class AppController extends Controller {
    
    public function actionTest(){
        $this->render('test');
    }

    public function actionRequestItem(){
        $this->render('v_frm_request');        
    }
    
    
    
    
}

