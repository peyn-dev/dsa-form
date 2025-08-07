<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbtest extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(['session', 'form_validation']);
        $this->load->helper('url');
        $this->load->model('Student_model');
    }

    public function form() {
        $data['message'] = $this->session->flashdata('message');
        $this->load->view('student_inventory_form', $data);
    }

    public function submit() {
        $postData = $this->input->post();

        foreach ($postData as $key => $value) {
            if (is_array($value)) {
                $postData[$key] = implode(', ', $value);
            }
        }

        $result = $this->Student_model->insert_profile($postData);

        if ($result) {
            $this->session->set_flashdata('message', 'Form submitted and saved to database!');
        } else {
            $this->session->set_flashdata('message', 'Failed to save form. Please try again.');
        }

        redirect('dbtest/form');

        echo "<pre>";
            print_r($postData);
        echo "</pre>";
    }

    public function index() {
        $query = $this->db->query('SELECT FIRST 10 * FROM "STUDENTS"');

        echo "<pre>Last Query: " . $this->db->last_query() . "</pre>";

        if ($query) {
            echo "<h3>Database Connected Successfully</h3><ul>";
            foreach ($query->result() as $row) {
                echo "<li>" . $row->FIRST_NAME . " " . $row->LAST_NAME . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Failed to fetch data. Check database config or table name.";
        }
    }
}
