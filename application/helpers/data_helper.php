<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_locations() {
    $ci = get_instance();
    $ci->load->model('Location_model');
    return $ci->Location_model->get_all_custom_where(FALSE, "id , title");
}

function get_categories() {
    $ci = get_instance();
    $ci->load->model('Category_model');
    return $ci->Category_model->get_all_custom_where(FALSE, "id , title");
}

function get_friends() {
    $ci = get_instance();
    $ci->load->model('Friends_model');
    $result = $ci->Friends_model->get_friends();
    return $result;
}
