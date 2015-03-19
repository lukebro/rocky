<?php

class Sample_Model extends Model
{
    private $_var;

    function __construct()
    {
        parent::__construct();

        $this->_var = "Hello world";
    }

    public function getVar()
    {
      return $this->_var;
    }
}
