<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_DB_ibase_result extends CI_DB_result {

    protected function _fetch_assoc()
    {
        return ibase_fetch_assoc($this->result_id);
    }

    protected function _fetch_object($class_name = 'stdClass')
    {
        return ibase_fetch_object($this->result_id);
    }

    public function num_rows()
    {
        return 0; // Avoid memory-heavy row counting
    }

    public function result_array()
    {
        $result = [];
        while ($row = $this->_fetch_assoc())
        {
            $result[] = $row;
        }
        return $result;
    }

    public function result()
    {
        $result = [];
        while ($row = $this->_fetch_object())
        {
            $result[] = $row;
        }
        return $result;
    }
}
