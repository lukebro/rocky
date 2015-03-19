<?php

class Sample extends Controller
{
    function __construct()
    {
        parent::__construct($this); // pass controller to parent
    }

    function index()
    {
        $this->loadModel('sample'); // sample_model is loaded
        $this->_view->var = $this->_model['sample']->getVar(); // var is passed into view

        $this->_view->_title = 'Sample'; // set view page title
        $this->_view->render($this->_controller_name . '/index'); // render current controllers default view
    }

    /*
    * Passes message to view which view prints.
    * @param String
    */
    function alert($message)
    {
        $this->_view->msg = $message;

        $this->_view->_title = $message;
        $this->_view->render($this->_controller_name . '/alert');
    }
}