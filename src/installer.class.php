<?php
class installer extends base{
    private $_currentActivity;
    private $_manifestData = false;
    public function  __construct() {
        parent::__construct();

        //1. Test permissions
        if(!is_writeable(MAIN_PATH_SIMPLE_INSTALLER . 'tmp'))
            $this->_addBaseError ('permissions_write', MAIN_PATH_SIMPLE_INSTALLER . 'tmp');
        if(!is_readable(MAIN_PATH_SIMPLE_INSTALLER . 'data'))
            $this->_addBaseError ('permissions_read', MAIN_PATH_SIMPLE_INSTALLER . 'data');
        if(!is_writeable(MAIN_PATH_SIMPLE_INSTALLER))
            $this->_addBaseError ('permissions_write', MAIN_PATH_SIMPLE_INSTALLER);


        if(!isset($_SESSION['installer'])){
            $_SESSION['installer'] = true;
            header("Location: index.php?scLock=" . urldecode(sha1(microtime())));
        }
        $this->_displayBaseErrors(); //This will likely kill the entire installer if any errors where found!
    }
    public function  __destruct() {
        ;
    }
    private function _readData(){

    }
    private function _readLocale(){

    }
    private function _readManifest($manifestFile){
        if($this->_manifestData !== false) throw new Exception ("Manifest cannot be loaded twice");
        $this->_manifestData = simplexml_load_file($manifestFile);
        if(!isset($_SESSION['manifest']))
            $_SESSION['manifest'] = $this->_manifestData;
        if(serialize($this->_manifestData) != serialize($_SESSION['manifest'])) throw new Exception ("Manifest file changed while installation");
    }
    private function _generatePluginCache(){
        
    }
    private function _loadActivity(){

    }
    private function _displayActivity(){

    }
    private function _parseInput(){

    }
    public function getCurrentActivity(){

    }
    public function parseNewSettings(){

    }
    public function saveNewSettings(){

    }
    public function discardAll(){

    }
    public function stepBack(){

    }
    public function stepForward(){
        
    }
}