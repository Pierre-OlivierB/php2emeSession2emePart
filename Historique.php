<?php

    static $test=array();
     function visite($page)
    {
        $test[]=$page; 
        echo implode("','",$test);
        return $test;
    }
