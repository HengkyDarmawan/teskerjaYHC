<?php

class M_dashboard extends CI_Model
{
    public function getAllProject()
    {
        return $this->db->get('project')->result_array();
    }
    public function addProject()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "client" => $this->input->post('client', true),
            "project_lead" => $this->input->post('project_lead', true),
            "email_lead" => $this->input->post('email_lead', true),
            "start_date" => $this->input->post('start_date', true),
            "end_date" => $this->input->post('end_date', true),
            "progress" => $this->input->post('progress', true),
            "image_lead" => "default.png"
        ];
        $this->db->insert('project', $data);
    }
    public function hapusProject($id)
    {
        $this->db->delete('project', ['id_project' => $id]);
    }
    public function getProjectId($id)
    {
        return $this->db->get_where('project', ['id_project' => $id])->row_array();
    }


    public function editProject()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "client" => $this->input->post('client', true),
            "project_lead" => $this->input->post('project_lead', true),
            "email_lead" => $this->input->post('email_lead', true),
            "start_date" => $this->input->post('start_date', true),
            "end_date" => $this->input->post('end_date', true),
            "progress" => $this->input->post('progress', true)
        ];
        $this->db->where('id_project', $this->input->post('id_project'));
        $this->db->update('project', $data);
    }
}