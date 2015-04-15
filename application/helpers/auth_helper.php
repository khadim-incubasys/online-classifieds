<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * author: khadim-raath
 */
function is_logged_in(){
    $ci=  get_instance();
     if($ci->session->userdata('logged_in')){
         return TRUE;
     }
     return FALSE;
}

