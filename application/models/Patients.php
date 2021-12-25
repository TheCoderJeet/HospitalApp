<?php

class Patients extends CI_Model
{
    function getOpdPatients($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get('opdpatients');
        return $query->result();
    }
    function saverecords($data)
    {
        $this->db->insert('opdpatients', $data);
    }
    //Get Ipd Patients
    function getIpdPatients($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get('ipdpatients');
        return $query->result();
    }
    //Save Ipd Patients
    function saverecords_ipd($data)
    {
        $this->db->where('opdid', $data['opdid']);
        $q = $this->db->get('ipdpatients');
        if ( $q->num_rows() > 0 ) 
        {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger mt-2" role="alert"> Patient already exist!!! </div>');
            header("location:search-opd-patients");
        } else {
            $this->db->insert('ipdpatients', $data);
            $this->session->set_flashdata('msg', '<div class="alert alert-success mt-2" role="alert"> Patient added successfully!!! </div>');
            // header("location:search-opd-patients");
        }                   
    }
    //Get Mlc Patients
    function getMlcPatients($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get('mlcpatients');
        return $query->result();
    }
    //Save Mlc Patients
    function saverecords_mlc($data)
    {
        $this->db->insert('mlcpatients', $data);
    }

    //Update Opd Patients
    function update_user($data, $username)
    {
        $this->db->where('firstname', $username);
        $this->db->update('users', $data);
    }

    //Update Opd Patients
    function update_records($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('opdpatients', $data);
    }
    //Get single Opd Patients
    function getSingleOpdPatient($opdid)
    {
        $this->db->select('*');
        $this->db->where('opdid', $opdid);
        $query = $this->db->get('opdpatients');
        if($query->num_rows() > 0) {
            return $query->row();
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger mt-2" role="alert"> Patient not exist!!! </div>');
            header("location:search-opd-patients");
        }
    }
    //Get Opd Patients by dates
    function getOpdPatientsByDates($limit, $start, $filterBy)
    {
        $this->db->limit($limit, $start);
        if($filterBy == 1) {
            $this->db->where('date BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE()');
            $query = $this->db->get('opdpatients');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                    return array();
            }
        } elseif($filterBy == 7) {
            $this->db->where('date BETWEEN CURDATE() - INTERVAL 7 DAY AND CURDATE()');
            $query = $this->db->get('opdpatients');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                    return array();
            }
        } elseif($filterBy == 30) {
            $this->db->where('date BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()');
            $query = $this->db->get('opdpatients');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                    return array();
            }
        } elseif($filterBy == 365) {
            $this->db->where('date BETWEEN CURDATE() - INTERVAL 365 DAY AND CURDATE()');
            $query = $this->db->get('opdpatients');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                    return array();
            }
        } 
        else {
            header("location:opd-patients-list");
        }
        
    }
    //Get Ipd Patients by dates
    function getIpdPatientsByDates($limit, $start, $filterBy)
    {
        $this->db->limit($limit, $start);
        if($filterBy == 1) {
            $this->db->where('date BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE()');
            $query = $this->db->get('ipdpatients');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                    return array();
            }
        } elseif($filterBy == 7) {
            $this->db->where('date BETWEEN CURDATE() - INTERVAL 7 DAY AND CURDATE()');
            $query = $this->db->get('ipdpatients');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                    return array();
            }
        } elseif($filterBy == 30) {
            $this->db->where('date BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()');
            $query = $this->db->get('ipdpatients');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                    return array();
            }
        } elseif($filterBy == 365) {
            $this->db->where('date BETWEEN CURDATE() - INTERVAL 365 DAY AND CURDATE()');
            $query = $this->db->get('ipdpatients');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                    return array();
            }
        } 
        else {
            header("location:ipd-patients-list");
        }
        
    }
    //Get Mlc Patients by dates
    function getMlcPatientsByDates($limit, $start, $filterBy)
    {
        $this->db->limit($limit, $start);
        if($filterBy == 1) {
            $this->db->where('date BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE()');
            $query = $this->db->get('mlcpatients');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                    return array();
            }
        } elseif($filterBy == 7) {
            $this->db->where('date BETWEEN CURDATE() - INTERVAL 7 DAY AND CURDATE()');
            $query = $this->db->get('mlcpatients');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                    return array();
            }
        } elseif($filterBy == 30) {
            $this->db->where('date BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()');
            $query = $this->db->get('mlcpatients');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                    return array();
            }
        } elseif($filterBy == 365) {
            $this->db->where('date BETWEEN CURDATE() - INTERVAL 365 DAY AND CURDATE()');
            $query = $this->db->get('mlcpatients');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                    return array();
            }
        } 
        else {
            header("location:mlc-patients-list");
        }
        
    }
    //Get single Opd Patients
    function getSingleOpdPatientById($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('opdpatients');
        return $query->row();
    }
    //Update Ipd Patients
    function update_records_ipd($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('ipdpatients', $data);
    }
    //Get single Ipd Patients
    function getSingleIpdPatient($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('ipdpatients');
        return $query->row();
    }
    //Update Mlc Patients
    function update_records_mlc($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('mlcpatients', $data);
    }
    //Get single Mlc Patients
    function getSingleMlcPatient($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('mlcpatients');
        return $query->row();
    }
    public function delete_patient($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('opdpatients');
    }
    function readLogin($username, $password)
    {
        $this->db->where('firstname', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
        //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function get_count()
    {
        return $this->db->count_all('users');
    }
    public function get_countOpd()
    {
        return $this->db->count_all('opdpatients');
    }
    public function get_countIpd()
    {
        return $this->db->count_all('ipdpatients');
    }
    public function get_countMlc()
    {
        return $this->db->count_all('mlcpatients');
    }
}