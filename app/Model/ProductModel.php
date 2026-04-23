<?php
class Product extends AppModel
{

  public $actsAs = array('Custom');
    public $validate = array(
        'name' => array(
            'rule' => array('notEmpty'),
            'message' => 'Name is required',
        ),
        'price' => array(
            'rule' => 'numeric',
            'message' => 'Price must be a number',
        ),
        'description' => array(
            'rule' => 'notEmpty',
            'message' => 'Description is required',
        ),
    );


    //! ? Creating custom find method to get the latest products

    // public $findMethods = array("latest" => true);

    // protected function _findLatest($state, $query, $results = array())
    // {
    //     if ($state === "before") {
    //         $query['order'] = array("Product.id" => "DESC");
    //         $query['limit'] = 5;
    //         return $query;
    //     }

    //     return $results ;
    // }

    // public $findMethods = array('available' =>  true);

    // protected function _findAvailable($state, $query, $results = array()) {
    //     if ($state === 'before') {
    //         $query['conditions']['Product.name'] = "Mobile";
    //         return $query;
    //     }
    //     return $results;
    // }



// ! callback method to modify data before saving to the database

    public function beforeSave($options = array()) {
        
        if(isset($this->data['Product']['name'])){
            $this->data['Product']['name'] = strtoupper(
                $this->data['Product']['name']
            );
        }

        return true;
    }
}

?>