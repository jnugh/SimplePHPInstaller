<?php
abstract class base{
    private $_baseErrors = array();
    protected $_smarty = null;
    public function  __construct() {
        $this->_smarty = new Smarty();
    }
    protected function _addBaseError($type, $data){
        if(!isset($this->_baseErrors[$type]))
                $this->_baseErrors[$type] = array();
        $this->_baseErrors[$type][] = $data;
    }
    protected function _displayBaseErrors(){
        $this->_smarty->display(MAIN_PATH_SIMPLE_INSTALLER . 'tpl/baseError.tpl');
        exit();
    }
}