<?php

App::uses('Component', 'Controller');

class LoggerComponent extends Component {

    public function logAction($message){
        CakeLog::write('debug', $message);
    }
}