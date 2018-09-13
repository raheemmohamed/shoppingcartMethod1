<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Raheem
 * Date: 9/13/2018
 * Time: 2:15 PM
 */

class Shopping_cart_model extends CI_Model {
    function fetch_all()
    {
        $query = $this->db->get("product");
        return $query->result();
    }
}