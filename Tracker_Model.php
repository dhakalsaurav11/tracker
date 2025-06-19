<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracker_Model extends CI_Model {

    public function get_click_count($page_id)
    {
        $query = $this->db->get_where('page_clicks', ['page_id' => $page_id]);
        return ($query->num_rows() > 0) ? $query->row()->click_count : 0;
    }

    public function increment_click_count($page_id, $page_title)
    {
        $query = $this->db->get_where('page_clicks', ['page_id' => $page_id]);

        if ($query->num_rows() > 0) {
            $this->db->set('click_count', 'click_count + 1', FALSE);
            $this->db->where('page_id', $page_id);
            $this->db->update('page_clicks');
        } else {
            $this->db->insert('page_clicks', [
                'page_id' => $page_id,
                'page_title' => $page_title,
                'click_count' => 1
            ]);
        }
    }

    public function get_issue_clicks()
    {
        $this->db->select('issue_title, click_count');
        $this->db->from('issue_clicks');
        $this->db->order_by('click_count', 'DESC');
        $query = $this->db->get();

        return $query->result();
    }

    public function increment_issue_click_count($issue_title)
    {
        $query = $this->db->get_where('issue_clicks', ['issue_title' => $issue_title]);

        if ($query->num_rows() > 0) {
            $this->db->set('click_count', 'click_count + 1', FALSE);
            $this->db->where('issue_title', $issue_title);
            $this->db->update('issue_clicks');
        } else {
            $this->db->insert('issue_clicks', [
                'issue_title' => $issue_title,
                'click_count' => 1
            ]);
        }
    }
}
?>
