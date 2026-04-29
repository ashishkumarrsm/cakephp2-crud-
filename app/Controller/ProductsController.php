<?php
class ProductsController extends AppController
{
    public $components = array('Logger');
    public function index()
    {
  
        // debug($this->Product->find("all"));
        // die();
        $products = $this->Product->find("all");  // ["limit" => 3]
        // $products = $this->Product->findAllById(2);  // ["limit" => 3]
        // $products = $this->Product->find("available");
        // debug($products);
        // die;

        
        $this->set("products", $products);
        // $this->set("products", $this->Product->findAllByOrderStatus('3'));



// ! behavior Tree Example

        //   $this->Category->id = 3;
// 
        // $kids = $this->Category->children();
// 
        // debug($kids);
        // die();
    }

    // ! Crud Operations
// Add New Product
    public function add()
    {

        if ($this->request->is('post')) {
            $this->Product->create();

            if ($this->Product->save($this->request->data)) {
                if ($this->Product->validates()) {
                          $this->Logger->logAction("New product added");
                    return $this->redirect(array("action" => "index"));
                } else {
                    $this->set("errors", $this->Product->validationErrors);
                }
            }
        }
    }




    //  public function add()
    // {
    //     if ($this->request->is('post')) {
    //         $this->Product->save($this->request->data);
    //         $this->redirect(array("action" => "index"));
    //     }
    // }

    // Edit the Product 

    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException("Invalid Product");
        }
        $product = $this->Product->findById($id);
        // debug($this->Product->validtionErrors);    //!  by using this we can see the validation errors in the edit form . You can debug this situation by outputting
        if (!$product) {
            throw new NotFoundException(" Product Not Found");
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->Product->id = $id;
            // $this->Product->set("titel","new title");
            if ($this->Product->save($this->request->data)) {
                return $this->redirect((array("action" => 'index')));
            }
        }

    }

    // Delete the Product
    public function delete($id = null)
    {
        if (!$id) {
            throw new NotFoundException("Invalid Product");
        }

        if ($this->request->is("get")) {

            if ($this->Product->delete($id)) {
                return $this->redirect(array("action" => "index"));
            }
        }
    }

}
?>