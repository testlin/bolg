<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * controller
 * 
 * @author Linjie<a0s@foxmail.com>
 * @version 1.0
 * @createtime 2017-6-16 15:52:00
 * @updatetime 2017-6-16 15:52:00
 */

class test Extends controller
{
    
    public function __construct() 
    {
        parent::__construct();
    }

    public function index() 
    {
        var_dump('test');

        die('index');
    }
    public function test() 
    {
        
        die('test');
    }
}

