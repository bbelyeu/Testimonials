<?php
App::uses('TestimonialsAppController', 'Testimonials.Controller');
/**
 * Testimonials Controller
 *
 * @property Testimonial $Testimonial
 */
class TestimonialsController extends TestimonialsAppController {


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Testimonial->recursive = 0;
		$this->set('testimonials', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Testimonial->id = $id;
		if (!$this->Testimonial->exists()) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		$this->set('testimonial', $this->Testimonial->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Testimonial->create();
			if ($this->Testimonial->save($this->request->data)) {
				$this->Session->setFlash(__('The testimonial has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testimonial could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Testimonial->id = $id;
		if (!$this->Testimonial->exists()) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Testimonial->save($this->request->data)) {
				$this->Session->setFlash(__('The testimonial has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testimonial could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Testimonial->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Testimonial->id = $id;
		if (!$this->Testimonial->exists()) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		if ($this->Testimonial->delete()) {
			$this->Session->setFlash(__('Testimonial deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Testimonial was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
