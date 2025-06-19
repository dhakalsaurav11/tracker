<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracker extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tracker_Model');
        $this->load->database();
    }

    public function track_click()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $page_id = $this->input->post('page_id');

            error_log("Tracker received request for page ID: " . $page_id);

            $query = $this->db->get_where('website_page', ['id' => $page_id]);
            $page = $query->row();

            if ($page) {
                $page_title = $page->title;

                $this->Tracker_Model->increment_click_count($page_id, $page_title);

                echo json_encode(['success' => true, 'message' => 'Click tracked for page ID: ' . $page_id]);
            } else {
                echo json_encode(['error' => 'Invalid page ID']);
            }
        } else {
            echo json_encode(['error' => 'Invalid request method']);
        }
    }

    public function track_issue_click()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $issue_title = $this->input->post('issue_title');

            if (!empty($issue_title)) {
                $this->Tracker_Model->increment_issue_click_count($issue_title);
                echo json_encode(['success' => true, 'message' => "Click tracked for issue: $issue_title"]);
            } else {
                echo json_encode(['error' => 'Invalid issue title']);
            }
        } else {
            echo json_encode(['error' => 'Invalid request method']);
        }
    }
}
?>
