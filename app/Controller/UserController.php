<?php
class UserController extends AppController{
	public $helpers = array('Html' , 'Form');
	public $components =array('Session');



	public function index(){
	// $this->set('user' , $this->User->find('all'));
	}

	public function add(){
		if($this->request->is('post')){
		  if($this->User->save($this->request->data)){
		   $this->Session->setFlash('data saved');
		   $this->redirect(array('action'=>'index'));
		  }
		  else {
		   $this->Session->setFlash('data failed to save');
		  }
		}
	}

	public function edit($id=null){
	 $this->User->id=$id;
	 if($this->request->is('get')){
	  $this->request->data=$this->User->read();
	 }
	 else {

		  if($this->User->save($this->request->data)){
		   $this->Session->setFlash('data has updated');
		   $this->redirect(array('action'=>'index'));
		  }
		  else {
		   $this->Session->setFlash('data failed to update');
		  }
		}


	}

	public function delete($id){
		if($this->request->is('get')){
		 throw new MethodNotAllowedException();
		}
		  if($this->User->delete($id)){
		   $this->Session->setFlash('data deleted');
		   $this->redirect(array('action'=>'index'));
		  }


	}

	
}
?>
