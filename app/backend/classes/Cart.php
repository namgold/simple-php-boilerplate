<?php

class Cart {
    private $_db,
            $_data;

    public function __construct() {
        $this->_db = Database::getInstance();
    }

    public function update($fields = array(), $uid = null) {
        if ($this->_db->update('cart', $uid, $fields)) {
            return true;
        }
        return false;
    }

    public function create($fields = array()) {
        if ($this->_db->insert('cart', $fields)) {
            return true;
        }
        return false;
    }

    public function find($user = null) {
        if ($user) {
            $data = $this->_db->get('cart', array('uid', '=', $user));
            if ($data->count()) {
                $this->_data = $data->first();
                return $this->_data;
            }
        }
        return false;
    }

    public function getAll($condition = Array()) {
        $data = $this->_db->get('cart', $condition);
        // $data = $this->_db->get('cart', array('uid', '=', $user));
        if ($data->count()) {
            $this->_data = $data->results();
            return $this->_data;
        }
        return false;
    }

    public function getAllJoin($user = null) {
        if ($user) {
            if (!$this->_db->query('SELECT cart.*, product.name as \'roleName\' from cart left join product on cart.product_id = product.uid where card.user_id=?',array($user))->error()) {
                return $this->_db->results();
            }
        }
        return false;
    }

    public function amout($user) {
        if ($user) {
            $result = $this->getAll($user);
            if ($result) {
                return array_reduce($result, function($v, $w) {
                    return $v + $w->amount;
                }, 0);
            }
        }
        return 0;
    }

    public function clear($user = null) {
        if ($user) {
            $data = $this->_db->get('cart', array('uid', '=', $user));
            if ($data->count()) {
                $this->_data = $data;
                return true;
            }
        }
    }

    public function data() {
        return $this->_data;
    }

    public function deleteMe() {
        $uid = $this->data()->uid;
        if ($this->_db->delete('cart', array('uid', '=', $uid))) {
            return true;
        }
        return false;
    }
}
