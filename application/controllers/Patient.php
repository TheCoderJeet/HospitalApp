<?php

class Patient extends CI_Controller
{

  function __Construct()
  {
    parent::__Construct();
    $this->load->model('Patients');
  }

  public function index()
  {
    $config = array();
    $config["base_url"] = base_url("Patient/index/");
    $config["total_rows"] = $this->Patients->get_count();
    $config["per_page"] = 1;
    $config["uri_segment"] = 3;

    $this->pagination->initialize($config);
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $data["links"] = $this->pagination->create_links();
    $data['records'] = $this->Patients->getOpdPatients($config["per_page"], $page);
    // $this->load->view('opd_list', $data);
    
    if ($this->session->userdata('username') == '') { 
      $data['v'] = 'login';
    } else {
      $data['v'] = 'add_opd';
    }
    $this->load->view('template', $data);
    $this->session->set_userdata('page', $page);
  }

  public function search()
  {
    // $data['record'] = $this->Patients->getSingleOpdPatient($id);
    // $this->load->view('opd_list', $data);
    
    if ($this->session->userdata('username') == '') { 
      $data['v'] = 'login';
    } else {
      $data['v'] = 'search';
    }
    $this->load->view('template', $data);
  }
  public function search_result()
  {
    $data['record'] = $this->Patients->getSingleOpdPatient($this->input->post('search'));
    // $this->load->view('opd_list', $data);
    
    if ($this->session->userdata('username') == '') { 
      $data['v'] = 'login';
    } else {
      $data['v'] = 'single-patient';
    }
    $this->load->view('template', $data);
  }

  public function add_opd($id = '')
  {
    if ($id !== '') {
      $this->data['row'] = $this->Patients->getSingleOpdPatient($id);
    } else {
      $this->data['row'] = array();
    }

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('fh', 'Name', 'required');
    $this->form_validation->set_rules('age', 'Age', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('caste', 'Caste', 'required');
    if (!empty($_POST)) {
      if ($this->form_validation->run() == TRUE) {
        $id = $this->input->post('id');
        $opdid = $this->input->post('opdid');
        $p = $this->input->post('patient');
        $n = $this->input->post('name');
        $fh = $this->input->post('fh');
        $date = $this->input->post('date');
        $add = $this->input->post('address');
        $age = $this->input->post('age');
        $caste = $this->input->post('caste');
        $gen = $this->input->post('gender');
        $disease = $this->input->post('disease');
        $fee = '';
        if($p === 'General') {
          $fee = '10/-';
        } else {
          $fee = 'Free';
        }
          $this->db->select('*');
          $query = $this->db->get('opdpatients');
          $opdid =  $query->num_rows() + 1;
        $data = array('opdid' => $opdid, 'patient' => $p,'name' => $n, 'fatherORhusband' => $fh, 'date' => $date, 'address' => $add, 'age' => $age, 'caste' => $caste, 'gender' => $gen, 'disease' => $disease, 'fee' => $fee);
        if(isset($_POST['savewithprint'])) {
          if (empty($id)) {
            $this->Patients->saverecords($data);
            $data['v'] = 'print';
            $data['row'] =$this->data['row'];
            $this->db->select('*');
            $querylast = $this->db->get('opdpatients');
            $data['last_id'] = $querylast->last_row();
            $this->load->view('template', $data);
            //add flash data 
            // redirect(base_url());
            // $this->session->set_flashdata('msg', '<div class="alert alert-success mt-2" role="alert"> You added a user successfully !!! </div>');
          }
        }
        if(isset($_POST['save'])) {
          if (empty($id)) {
            $this->Patients->saverecords($data);
            //add flash data 
            $this->session->set_flashdata('msg', '<div class="alert alert-success mt-2" role="alert"> You added a user successfully !!! </div>');
            redirect(base_url());
          }
        }
      } else {
        $data['v'] = 'add_opd';
        $data['row'] =$this->data['row'];
        $this->load->view('template', $data);
      }
    } else {
      if ($this->session->userdata('username') == '') { 
        $data['v'] = 'login';
      } else {
        $data['v'] = 'add_opd';
      }
      $data['row'] =$this->data['row'];
      $this->load->view('template', $data);
    }
  }

  public function add_ipd($id = '')
  {

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('fh', 'Father/Husband Name', 'required');
    $this->form_validation->set_rules('age', 'Age', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('caste', 'Caste', 'required');
    if (!empty($_POST)) {
      if ($this->form_validation->run() == TRUE) {
        $id = $this->input->post('id');
        $ipdid = $this->input->post('ipdid');
        $opdid = $this->input->post('opdid');
        $p = $this->input->post('patient');
        $n = $this->input->post('name');
        $fh = $this->input->post('fh');
        $date = $this->input->post('date');
        $add = $this->input->post('address');
        $age = $this->input->post('age');
        $caste = $this->input->post('caste');
        $gen = $this->input->post('gender');
        $disease = $this->input->post('disease');
        $fee = '';
        if($p === 'General') {
          $fee = '40/-';
        } else {
          $fee = 'Free';
        }
        $this->db->select('*');
        $query = $this->db->get('ipdpatients');
        $ipdid =  $query->num_rows() + 1;
        $data = array('ipdid' => $ipdid, 'opdid' => $opdid, 'patient' => $p,'name' => $n, 'fatherORhusband' => $fh, 'date' => $date, 'address' => $add, 'age' => $age, 'caste' => $caste, 'gender' => $gen, 'disease' => $disease, 'fee' => $fee);
        if(isset($_POST['savewithprint'])) {
          if (empty($id)) {
            $this->Patients->saverecords_ipd($data);
            $data['v'] = 'print_ipd';
            $this->db->select('*');
            $querylast = $this->db->get('ipdpatients');
            $data['last_id'] = $querylast->last_row();
            $this->load->view('template', $data);
          }
        } else if(isset($_POST['save'])) {
          if (empty($id)) {
            $this->Patients->saverecords_ipd($data);
            header("location:search-opd-patients");
          }
        } else {
          $data['v'] = 'search-opd-patients';
          $this->load->view('template', $data);
        }
      }
    } else {
      if ($id !== '') {
        $this->data['row'] = $this->Patients->getSingleOpdPatientById($id);
      } else {
        $this->data['row'] = array();
      }
      if ($this->session->userdata('username') == '') { 
        $data['v'] = 'login';
      } else {
        $data['v'] = 'add_ipd';
      }
      $data['row'] =$this->data['row'];
      $this->load->view('template', $data);
    }
  }

  public function add_mlc($id = '')
  {
    if ($id !== '') {
      $this->data['row'] = $this->Patients->getSingleMlcPatient($id);
    } else {
      $this->data['row'] = array();
    }

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('fh', 'Father/Husband', 'required');
    $this->form_validation->set_rules('age', 'Age', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('caste', 'Caste', 'required');
    if (!empty($_POST)) {
      if ($this->form_validation->run() == TRUE) {
        $id = $this->input->post('id');
        $mlcid = $this->input->post('mlcid');
        $n = $this->input->post('name');
        $fh = $this->input->post('fh');
        $date = $this->input->post('date');
        $add = $this->input->post('address');
        $age = $this->input->post('age');
        $caste = $this->input->post('caste');
        $gen = $this->input->post('gender');
        $disease = $this->input->post('disease');
        $fee = 'Free';
        $this->db->select('*');
          $query = $this->db->get('mlcpatients');
          $mlcid =  $query->num_rows() + 1;
        $data = array('mlcid' => $mlcid, 'name' => $n, 'fatherORhusband' => $fh, 'date' => $date, 'address' => $add, 'age' => $age, 'caste' => $caste, 'gender' => $gen, 'disease' => $disease, 'fee' => $fee);
        if(isset($_POST['savewithprint'])) {
          if (empty($id)) {
            $this->Patients->saverecords_mlc($data);
            $data['v'] = 'print-mlc';
            $data['row'] =$this->data['row'];
            $this->db->select('*');
            $querylast = $this->db->get('mlcpatients');
            $data['last_id'] = $querylast->last_row();
            $this->load->view('template', $data);
          }
        }
        if(isset($_POST['save'])) {
          if (empty($id)) {
            $this->Patients->saverecords_mlc($data);
            //add flash data 
            $this->session->set_flashdata('msg', '<div class="alert alert-success mt-2" role="alert"> You added a user successfully !!! </div>');
            redirect('add-mlc-patients');
          }
        }
      } else {
        $data['v'] = 'add_mlc';
        $data['row'] =$this->data['row'];
        $this->load->view('template', $data);
      }
    } else {
      if ($this->session->userdata('username') == '') { 
        $data['v'] = 'login';
      } else {
        $data['v'] = 'add_mlc';
      }
      
      $data['row'] =$this->data['row'];
      $this->load->view('template', $data);
    }
  }


  public function view_opdlist()
  {
    
    if (!empty($_POST)) {
      if(isset($_POST['filter'])) {
        $filterBy = $this->input->post('filterBy');
        $config = array();
        $config["base_url"] = base_url("Patient/view_opdlist/");
        $config["total_rows"] = $this->Patients->get_countOpd();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
    
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['records'] = $this->Patients->getOpdPatientsByDates($config["per_page"], $page, $filterBy);
        if ($this->session->userdata('username') == '') { 
          $data['v'] = 'login';
        } else {
          $data['v'] = 'opd_list';
        }
        $this->load->view('template', $data);
      } else {
        $filterBy = $this->input->post('filterBy');
        $config = array();
        $config["base_url"] = base_url("Patient/view_opdlist/");
        $config["total_rows"] = $this->Patients->get_countOpd();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
    
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['records'] = $this->Patients->getOpdPatientsByDates($config["per_page"], $page, $filterBy);
        if ($this->session->userdata('username') == '') { 
          $data['v'] = 'login';
        } else {
          $data['v'] = 'print_opdlist';
        }
        $this->load->view('template', $data);
      }
    } else {
      $config = array();
      $config["base_url"] = base_url("Patient/view_opdlist/");
      $config["total_rows"] = $this->Patients->get_count();
      $config["per_page"] = 10;
      $config["uri_segment"] = 3;

      $this->pagination->initialize($config);
      $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      $data["links"] = $this->pagination->create_links();
      $data['records'] = $this->Patients->getOpdPatients($config["per_page"], $page);
      // $this->load->view('opd_list', $data);
      
      if ($this->session->userdata('username') == '') { 
        $data['v'] = 'login';
      } else {
        $data['v'] = 'opd_list';
      }
      $this->load->view('template', $data);
      $this->session->set_userdata('page', $page);
    }

  }

  public function view_ipdlist()
  {
    
    if (!empty($_POST)) {
      if(isset($_POST['filter'])) {
        $filterBy = $this->input->post('filterBy');
        $config = array();
        $config["base_url"] = base_url("Patient/view_ipdlist/");
        $config["total_rows"] = $this->Patients->get_countIpd();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
    
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['records'] = $this->Patients->getIpdPatientsByDates($config["per_page"], $page, $filterBy);
        if ($this->session->userdata('username') == '') { 
          $data['v'] = 'login';
        } else {
          $data['v'] = 'ipd_list';
        }
        $this->load->view('template', $data);
      } else {
        $filterBy = $this->input->post('filterBy');
        $config = array();
        $config["base_url"] = base_url("Patient/view_ipdlist/");
        $config["total_rows"] = $this->Patients->get_countIpd();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
    
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['records'] = $this->Patients->getIpdPatientsByDates($config["per_page"], $page, $filterBy);
        if ($this->session->userdata('username') == '') { 
          $data['v'] = 'login';
        } else {
          $data['v'] = 'print_ipdlist';
        }
        $this->load->view('template', $data);
      }
    } else {
      $config = array();
      $config["base_url"] = base_url("Patient/index/");
      $config["total_rows"] = $this->Patients->get_count();
      $config["per_page"] = 10;
      $config["uri_segment"] = 3;

      $this->pagination->initialize($config);
      $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      $data["links"] = $this->pagination->create_links();
      $data['records'] = $this->Patients->getIpdPatients($config["per_page"], $page);
      // $this->load->view('opd_list', $data);
      
      if ($this->session->userdata('username') == '') { 
        $data['v'] = 'login';
      } else {
        $data['v'] = 'ipd_list';
      }
      $this->load->view('template', $data);
      $this->session->set_userdata('page', $page);
    }

  }

  public function view_mlclist()
  {
    
    if (!empty($_POST)) {
      if(isset($_POST['filter'])) {
        $filterBy = $this->input->post('filterBy');
        $config = array();
        $config["base_url"] = base_url("Patient/view_mlclist/");
        $config["total_rows"] = $this->Patients->get_countMlc();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
    
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['records'] = $this->Patients->getMlcPatientsByDates($config["per_page"], $page, $filterBy);
        if ($this->session->userdata('username') == '') { 
          $data['v'] = 'login';
        } else {
          $data['v'] = 'mlc_list';
        }
        $this->load->view('template', $data);
      } else {
        $filterBy = $this->input->post('filterBy');
        $config = array();
        $config["base_url"] = base_url("Patient/view_mlclist/");
        $config["total_rows"] = $this->Patients->get_countMlc();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
    
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['records'] = $this->Patients->getMlcPatientsByDates($config["per_page"], $page, $filterBy);
        if ($this->session->userdata('username') == '') { 
          $data['v'] = 'login';
        } else {
          $data['v'] = 'print_mlclist';
        }
        $this->load->view('template', $data);
      }
    } else {
      $config = array();
      $config["base_url"] = base_url("Patient/view_mlclist");
      $config["total_rows"] = $this->Patients->get_countMlc();
      $config["per_page"] = 10;
      $config["uri_segment"] = 3;

      $this->pagination->initialize($config);
      $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      $data["links"] = $this->pagination->create_links();
      $data['records'] = $this->Patients->getMlcPatients($config["per_page"], $page);
      // $this->load->view('mlc_list', $data);
      
      if ($this->session->userdata('username') == '') { 
        $data['v'] = 'login';
      } else {
        $data['v'] = 'mlc_list';
      }
      $this->load->view('template', $data);
      $this->session->set_userdata('page', $page);
    }

  }

  public function profile()
  {
    if ($this->session->userdata('username') == '') { 
      $data['v'] = 'login';
    } else {
      $data['v'] = 'profile';
    }
    $this->load->view('template', $data);
  }

  /*Delete Record*/
  public function ajax_delete($id = '')
  {
    if ($this->session->userdata('username')) {
      if ($this->input->post('type') == 2) {
        $id = $this->input->post('id');
        $this->Patients->delete_patient($id);
        echo json_encode(array(
          "statusCode" => 200
        ));
      }
    }
  }

  /* Login Session */
  function login_validation()
  {
      $this->data['row'] = array();
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if (!empty($_POST)) {
    if ($this->form_validation->run()) {
      //true  
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      //model function    
      if ($this->Patients->readLogin($username, $password)) {
        $session_data = array(
          'username'     =>     $username
        );
        $this->session->set_userdata($session_data);
        redirect(base_url());
      } else {
        $this->session->set_flashdata('msg', 'Invalid Username and Password');
        redirect(base_url());
      }
    } else {
      $data['v'] = 'login';
        $data['row'] =$this->data['row'];
        $this->load->view('template', $data); 
    }
  } else {
    $data['v'] = 'login';
        $data['row'] =$this->data['row'];
        $this->load->view('template', $data); 
  }
  }
  public function update_user()
  {
    $data['v'] = 'update_login';
    $this->load->view('template', $data);
    //updating user  
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run()) {
      //true  
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      //model function    
      $data = array('firstname' => $username, 'password' => $password);
      $this->Patients->update_user($data, $username);
      $this->session->set_flashdata('msg', '<div class="alert alert-success mt-2" role="alert"> Data updated now!!! </div>');
    } else {
      $this->session->set_flashdata('msg', '<div class="alert alert-warning mt-2" role="alert"> Username not matching!!! </div>');   
    }
  }
  public function logout()
  {
    //removing session  
    $this->session->unset_userdata('username');
    redirect(base_url());
  }
}