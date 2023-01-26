<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $data['title'] = "Dashboard";
        $data['project'] = $this->m_dashboard->getAllProject();

		$this->load->view('template/header', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('template/footer');
	}
	public function addProject()
    {
        $data['title'] = "Add Project";

        $this->form_validation->set_rules('name', 'Project Name', 'required');
        $this->form_validation->set_rules('client', 'Client', 'required');
        $this->form_validation->set_rules('project_lead', 'Project Leader', 'required');
        $this->form_validation->set_rules('email_lead', 'Email Leader', 'required|valid_email');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('end_date', 'End Date', 'required');
        $this->form_validation->set_rules('progress', 'Progress', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
			$this->load->view('dashboard/add', $data);
			$this->load->view('template/footer');
        } else {
            $this->m_dashboard->addProject();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">project Di Tambahkan !!!</div>');
            redirect('dashboard');
        }
    }
	public function hapusProject($id)
    {
        $this->m_dashboard->hapusProject($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Project di Hapus !!!</div>');
        redirect('dashboard');
    }
    public function editProject($id){
        $data['title'] = "Edit Project";
        $data['project'] = $this->m_dashboard->getProjectId($id);

        $this->form_validation->set_rules('name', 'Project Name', 'required');
        $this->form_validation->set_rules('client', 'Client', 'required');
        $this->form_validation->set_rules('project_lead', 'Project Leader', 'required');
        $this->form_validation->set_rules('email_lead', 'Email Leader', 'required|valid_email');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('end_date', 'End Date', 'required');
        $this->form_validation->set_rules('progress', 'Progress', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('dashboard/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_dashboard->editProject();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Project Di Edit !!!</div>');
            redirect('dashboard');
        }
    }
}
