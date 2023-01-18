<?php

namespace Hcode;

class PageAdmin extends Page 
{
    public function __construct($spots = array(),$tpl_dir="/views/admin/")
    {
        parent::__construct($spots, $tpl_dir);
        
    }
    
}


?>