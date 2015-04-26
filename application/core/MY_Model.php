<?php

class MY_Model extends CI_Model {

    public $table_name = '';
    public $primary_key = '';
    public $today_datetime = "";
    public $current_time_stamp = "";

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Karachi');
        $dt = new DateTime();
        $this->today_datetime = $dt->format('Y-m-d H:i:s');
        $this->current_time_stamp = $dt->format('YmdHis');
    }

    public function get_all($limit = FALSE, $start = FALSE, $order_by = false, $where_column_name = NULL, $where_column_value = NULL, $where_second_column_name = NULL, $where_second_column_value = NULL, $is_in_query = False, $select = FALSE) {
        $query = $this->db;
        if ($select) {
            $query = $query->select($select);
        }
        if ($limit)
            $this->db->limit($limit, $start);
        if ($where_column_name && $where_column_value) {
            if ($is_in_query) {
                $query = $query->where_in($where_column_name, $where_column_value);
            } else {
                $query = $query->where($where_column_name, $where_column_value);
            }
            if ($where_second_column_name) {
                $query = $query->where($where_second_column_name, $where_second_column_value);
            }
        }
        if ($order_by) {
            $this->db->order_by($order_by);
        }

        return $query->get($this->table_name)->result_array();
    }

    public function get_all_custom_where($where, $select = FALSE, $in_query_arr = FALSE) {
        $query = $this->db;
        if ($select) {
            $query = $query->select($select);
        }
        if ($in_query_arr)
            $query = $query->where_in($where, $in_query_arr);
        else
            $query = $query->where($where);
        return $query->get($this->table_name)->result_array();
    }

    public function get_single($column, $column_value, $in_query = FALSE, $in_object = FALSE) {
        if ($in_query) {
            $this->db->where_in(array($column => $column_value));
            $query = $this->db->get($this->table_name);
        } else {
            $query = $this->db->get_where($this->table_name, array($column => $column_value));
        }

        if ($query->num_rows() == 1) {
            if ($in_object)
                return $query->result_array();
            else
                return $query->row();
        } else {
            return false;
        }
    }

    public function get_single_custom_where($where_array, $in_query = FALSE, $in_object = FALSE) {
        if ($in_query) {
            $this->db->where_in($where_array);
            $query = $this->db->get($this->table_name);
        } else {
            $query = $this->db->get_where($this->table_name, $where_array);
        }

        if ($query->num_rows() == 1) {
            if ($in_object)
                return $query->result_array();
            else
                return $query->row();
        } else {
            return false;
        }
    }

    public function get_all_where_or($where, $select = FALSE) {
        $query = $this->db;
        if ($select) {
            $query = $query->select($select);
        }
        $query = $query->or_where($where);
        return $query->get($this->table_name)->result_array();
    }

    /*
     * @param id: which will match with primary defined at the initiation of model
     * return array 
     */

    /*
     *  @param data: assosciate array
     *  @param id: to update record if NULL it will insert opt
     *  @return :affected rows or id in case of insert performed
     */

    public function create($data) {
        $this->db->set($data)->insert($this->table_name);
        return $this->db->insert_id();
    }

    public function update($column, $column_value, $data) {
        $this->db->where($column, $column_value);
        $this->db->update($this->table_name, $data);
        return $this->db->affected_rows();
    }

    public function delete($where_condition, $where_value) {
        $this->db->where($where_condition, $where_value);
        $this->db->delete($this->table_name);
        return $this->db->affected_rows();
    }


    public function record_count($where_column_name = NULL, $where_column_value = NULL) {
        if ($where_column_name == NULL) {
            return $this->db->count_all($this->table_name);
        } else {
            if (is_integer($where_column_value)) {
                $this->db->where($where_column_name, $where_column_value);
            } else {
                $this->db->like($where_column_name, $where_column_value);
            }
            $this->db->from($this->table_name);
            return $this->db->count_all_results();
        }
    }

   

    public function findByCondition($where, $order_by = false, $group_by = false, $select = '*') {
        $this->db->select($select)
                ->from($this->table_name)
                ->where($where);
        if ($group_by) {
            $this->db->group_by($group_by);
        }
        if ($order_by) {
            $this->db->order_by($order_by);
        }
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
        return false;
    }

    

    public function fetch_limit($limit, $start, $where_column_name = NULL, $where_column_value = NULL, $order_by = false) {
        $this->db->limit($limit, $start);
        if ($where_column_name && $where_column_value) {
            $this->db->where($where_column_name, $where_column_value);
        }
        if ($order_by) {
            $this->db->order_by($order_by);
        }
        $query = $this->db->get($this->table_name);


        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    
    public function fetch_join_limit($limit, $start, $ambiguous_alias_select, $table1, $table2, $join_condition, $where_column_name = NULL, $where_column_value = NULL, $direction = '', $where_second_column_name = NULL, $where_second_column_value = NULL, $is_in_query = FALSE) {
        $this->db->select($ambiguous_alias_select);
        $this->db->from($table1);
        $this->db->join($table2, $join_condition, $direction);
        if ($limit)
            $this->db->limit($limit, $start);
        if ($where_column_name && $where_column_value) {
            if ($is_in_query)
                $this->db->where_in($where_column_name, $where_column_value);
            else
                $this->db->where($where_column_name, $where_column_value);
            if ($where_second_column_name && $where_second_column_value) {
                $this->db->where($where_second_column_name, $where_second_column_value);
            }
        }

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

   

    public function fetch_join_triple_limit($limit, $start, $ambiguous_alias_select, $table1, $table2, $join_condition, $table3, $join_condition2, $where = null, $direction = '', $direction2 = '', $group_by = false) {
        $this->db->select($ambiguous_alias_select);
        $this->db->from($table1);
        $this->db->join($table2, $join_condition, $direction);
        $this->db->join($table3, $join_condition2, $direction2);
        $this->db->limit($limit, $start);

        if ($where) {
            $this->db->where($where);
        }
        if ($group_by) {
            $this->db->group_by($group_by);
        }

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

   

    public function fetch_join_multiple_limit($limit = NULL, $start = NULL, $ambiguous_alias_select, $table1, $join_array, $where = NULL, $group_by = false, $order_by = false) {
        $this->db->select($ambiguous_alias_select);
        $this->db->from($table1);
        if (is_array($join_array)) {
            foreach ($join_array as $join) {
                $this->db->join($join['table'], $join['condition'], $join['direction']);
            }
        }

        if ($where) {
            $this->db->where($where);
        }
        if ($group_by) {
            $this->db->group_by($group_by);
        }
        if ($order_by) {
            $this->db->order_by($order_by);
        }
        if ($limit != NULL && $start != NULL) {
            $this->db->limit($limit, $start);
        }
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    public function upload_it($config, $file) {
        $this->upload->initialize($config);
        $this->upload->set_allowed_types($config['allowed_types']);
        if (!$this->upload->do_upload($file)) {
            $data = array('msg' => $this->upload->display_errors());
        } else {
            $data = array('msg' => "");
            $data['upload_data'] = $this->upload->data();
        }
        return $data;
    }

    public function upload_image($fileName) {
        ////////////////// uplading image/////////////////////////
        $this->load->library('upload');
        $dt = new DateTime();
        $dt = $dt->format('YmdHis');
        $config['upload_path'] = UPLOAD_PATH;
        $config['allowed_types'] = UPLOAD_IMAGE_TYPES;
        $config['max_size'] = UPLOAD_IMAGE_SIZE;
        $config['min_height'] = IMAGE_MIN_HEIGHT;
        if (!isset($_FILES[$fileName])) {
            $this->session->set_flashdata('message', ERROR . "file size is should not be greater than " . UPLOAD_IMAGE_SIZE / 1024 . ' MB');
            return false;
        }

        $image_info = getimagesize($_FILES[$fileName]["tmp_name"]);
        $image_width = $image_info[0];
        $image_height = $image_info[1];

        $filenamex = end(explode(".", $_FILES[$fileName]['name']));
        $encripted_name = str_replace('.' . $filenamex, "", $_FILES[$fileName]['name']) . $dt . '.' . $filenamex;

        $config['file_name'] = $encripted_name; //$this->Game_model->encript_file_name($_FILES['profileImage']['name'], $dt);
        $profileImageData = $this->upload_it($config, $fileName);
        if (!isset($profileImageData['upload_data'])) {
            $this->session->set_flashdata('message', ERROR . $profileImageData['msg']);
            return false;
        }
        return $profileImageData;
        /////////////////////////////////////
    }

    public function is_already_exist($column_name, $columns_value, $column2 = FALSE, $columns_value2 = FALSE) {
        $this->db->where($column_name, $columns_value);
        if ($column2) {
            $this->db->where($column2, $columns_value2);
        }
        $query = $this->db->get($this->table_name);
        if ($query->num_rows() > 0) {
            return true;
        }
        return false;
    }

    function date_validation($str) {
        $stamp = strtotime($str);
        if (!is_numeric($stamp)) {
            return FALSE;
        }
        $month = date('m', $stamp);
        $day = date('d', $stamp);
        $year = date('Y', $stamp);
        if (checkdate($month, $day, $year)) {
            return $year . '-' . $month . '-' . $day;
        }
        return FALSE;
    }

}
