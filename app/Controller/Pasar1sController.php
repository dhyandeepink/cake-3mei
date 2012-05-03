<?php
class Pasar1sController extends AppController{
	public $helpers = array('Html' , 'Form');
	public $components =array('Session');

	public function index(){
	 $this->set('pasars' , $this->Pasar1->find('all'));
	}

	public function add(){
		if($this->request->is('post')){
		  if($this->Pasar1->save($this->request->data)){
		   $this->Session->setFlash('berhasil');
		   $this->redirect(array('action'=>'index'));
		  }
		  else {
		   $this->Session->setFlash('gagal bro');
		  }
		}
	}

	public function edit($id=null){
	 $this->Pasar1->id=$id;
	 if($this->request->is('get')){
	  $this->request->data=$this->Pasar->read();
	 }
	 else {

		  if($this->Pasar1->save($this->request->data)){
		   $this->Session->setFlash('berhasil update');
		   $this->redirect(array('action'=>'index'));
		  }
		  else {
		   $this->Session->setFlash('gagal bro');
		  }
		}


	}

	public function delete($id){
		if($this->request->is('get')){
		 throw new MethodNotAllowedException();
		}
		  if($this->Pasar1->delete($id)){
		   $this->Session->setFlash('berhasil');
		   $this->redirect(array('action'=>'index'));
		  }


	}
}

?>
