<?php
abstract class base{
    private $_baseErrors = array();
    protected $_smarty = null;
    public function  __construct() {
        $this->_smarty = new Smarty();
        $this->_smarty->compile_dir = MAIN_PATH_SIMPLE_INSTALLER . 'templates_c';
    }
    protected function _addBaseError($type, $data){
        if(!isset($this->_baseErrors[$type]))
                $this->_baseErrors[$type] = array();
        $this->_baseErrors[$type][] = $data;
    }
    protected function _displayBaseErrors(){
        if(count($this->_baseErrors) == 0)
                return;
        $_SESSION['lastErrors'] = $this->_baseErrors;
        $this->_smarty->assign('baseError', $this->_baseErrors);
        $this->_baseErrors = array();
        $this->_smarty->display(MAIN_PATH_SIMPLE_INSTALLER . 'tpl/baseError.tpl');
        exit();
    }
}