<?php

class CustomBehavior extends ModelBehavior {

    public function beforeSave(Model $model, $options = array()) {
        
        if(isset($model->data[$model->alias]['name'])){
            $model->data[$model->alias]['name'] = strtoupper(
                $model->data[$model->alias]['name']
            );
        }

        return true;
    }
}
?>