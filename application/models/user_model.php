<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * author: khadim Raath
 */

class User_model extends MY_Model {

    public $table_name = 'users';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
        $this->load->helper("random_password_helper");
    }

    public function create_user() {
        $return = array();
        if ($this->form_validation->run("create_user")) {
            $email = $this->input->post('email');
            if (!$this->is_already_exist("email", $email)) {
                $token = md5(uniqid() . microtime() . rand());
                $password = generatePassword();
                $insert = array(
                    "name" => $this->input->post('name'),
                    'token' => $token,
                    'status' => 0,
                    "password" => md5($password),
                    "email" => $email,
                    "country" => $this->input->post('country'),
                    "image_url" => $this->input->post('image1'),
                    "city" => $this->input->post('city'),
                    "address" => $this->input->post('address'),
                    "phone" => $this->input->post('phone')
                );
                if ($this->User_model->create($insert)) {
                    $email_data['email'] = $email;
                    $email_data['name'] = $this->input->post('name');
                    $email_data['token'] = $token;
                    $email_data['password'] = $password;
                    email_registration($email_data);
                    return array("result" => TRUE, "message" => "Registered Successfully");
                } else {
                    return array("result" => FALSE, "message" => "Something went wrong");
                }
            } else {
                return array("result" => FALSE, "message" => "The Email field must contain a unique value.");
            }
        } else {
            return array("result" => FALSE, "message" => "Invalid or some fields missing");
        }
    }

    public function user_login($email = FALSE, $password = FALSE) {
        if (!$email) {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
        } else if ($password) {
            $password = md5($password);
        }

        $this->db->where("email", $email);
        $this->db->where("password", $password);
        $db_result = $this->db->get($this->table_name);

        if ($db_result && !empty($db_result)) {

            if ($db_result->num_rows() == 1) {
                $user = $db_result->row();
                if ($user->status == 1) {
                    $this->session->set_userdata("user", $user);
                    $this->session->set_userdata('logged_in', TRUE);
                    return array("result" => true, "message" => "Logged in successfully");
                } else {
                    return array("result" => FALSE, "message" => "User is not active. Please activate first.");
                }
            } else {
                return array("result" => false, "message" => "Email or password is incorrect");
            }
        } else {
            return array("result" => FALSE, "message" => "Email or password is incorrect");
        }
    }

    public function activate($token) {
        if ($this->is_already_exist("token", $token)) {
            if ($this->update("token", $token, array("status" => 1))) {
                $this->session->set_flashdata("message", SUCCESS . "Verified Successfully. Please Login");
                return TRUE;
            }
        } else {
            $this->session->set_flashdata("message", ERROR . "Something went wrong.");
            return FALSE;
        }
    }

    public function edit_me() {
        $id = $this->input->post("id");
        if (is_numeric($id)) {
            $update_data = array(
                "name" => $this->input->post("name"),
                "phone" => $this->input->post("phone"),
                "city" => $this->input->post("city"),
                "country" => $this->input->post("country"),
                "address" => $this->input->post("address")
            );
            $image_url = $this->input->post("image1");
            if (!empty($image_url))
                $update_data['image_url'] = $image_url;
            if ($this->update("id", $id, $update_data)) {
                $this->session->set_flashdata("message", SUCCESS . "Saved Successfully");
                $user = $this->User_model->get_single("id", $id);
                if ($user && !empty($user)) {
                    $this->session->set_userdata("user", $user);
                    $this->session->set_userdata('logged_in', TRUE);
                } else {
                    $this->session->set_userdata('logged_in', FALSE);
                }
                return true;
            } else {
                $this->session->set_flashdata("message", ERROR . "Something went wrong.");
                return FALSE;
            }
        } else
            $this->session->set_flashdata("message", ERROR . "User id is missing.");
        return FALSE;
    }

    public function update_password() {
        $old_password = $this->input->post("password");
        $new_password = $this->input->post("new-password");
        $confirm_password = $this->input->post("confirm-password");
        $user = $this->session->userdata("user");
        if (md5($old_password) == $user->password) {
            if ($new_password == $confirm_password) {
                //////
                if ($this->update("id", $user->id, array("password" => md5($new_password)))) {
                    $this->session->set_flashdata("message", SUCCESS . "Password changed Successfully");
                    /////// email///////
                    $email_data['email'] = $user->email;
                    $email_data['name'] = $user->name;
                    $email_data['password'] = $new_password;
                    email_password_changed($email_data);
                    ///////// updarting session
                    $user = $this->User_model->get_single("id", $user->id);
                    if ($user && !empty($user)) {
                        $this->session->set_userdata("user", $user);
                        $this->session->set_userdata('logged_in', TRUE);
                    } else {
                        $this->session->set_userdata('logged_in', FALSE);
                    }
                    ///////
                    return TRUE;
                } else {
                    $this->session->set_flashdata("message", ERROR . "Something went wrong.");
                    return FALSE;
                }
                //////////
            } else {
                $this->session->set_flashdata("message", ERROR . "Confirm password mismach");
                return FALSE;
            }
        } else {
            $this->session->set_flashdata("message", ERROR . "Old Password is incorrect");
            return FALSE;
        }
    }

}
