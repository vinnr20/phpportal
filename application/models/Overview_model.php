<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Overview_model extends CI_Model
{
    //private $_table = "ms_engineer";
/*    private $_table = "tr_replicationn_mysql";
    private $_table = "tr_monitoring_mimix";
    private $_table = "tr_monitoring_oracle";
    private $_table = "tr_cek_storage";
    private $_table = "tr_status_pprc";
    private $_table = "tr_portal_opt";
    private $_table = "tr_monitoring_grafana";
    private $_table = "tr_monitoring_vcgti";
    private $_table = "tr_monitoring_vctbn";
    private $_table = "tr_notes";*/


    public $id_engineer;
    public $name;

    public function rules()
    {
        return [
            ['field' => 'date',
            'label' => 'Date',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {

          $sql='SELECT nama,date_format(DATE, "%d %M %Y") AS datenya,date,shift,id_engineer FROM user INNER JOIN( SELECT * from ( SELECT DATE,id_engineer,shift FROM tr_replication_mysql union SELECT DATE,id_engineer,shift FROM tr_portal_opt union SELECT DATE,id_engineer,shift FROM tr_cek_storage union SELECT DATE,id_engineer,shift FROM tr_monitoring_grafana union SELECT DATE,id_engineer,shift FROM tr_monitoring_mimix union SELECT DATE,id_engineer,shift FROM tr_monitoring_oracle union SELECT DATE,id_engineer,shift FROM tr_monitoring_vcgti union SELECT DATE,id_engineer,shift FROM tr_monitoring_vctbn union SELECT DATE,id_engineer,shift FROM tr_status_pprc )as details GROUP BY DATE,id_engineer,shift)details ON user.id_user= details.id_engineer';
          $query= $this->db->query($sql);

   // $this->db->select('*');
    //$this->db->from('ms_engineer');
   // $this->db->join('tr_replication_mysql', 'tr_replication_mysql.id_engineer = ms_engineer.id_engineer','left');

        return $query->result();


        
    }
    
    public function getById($id)
      {
        return $this->db->get_where($this->tr_replication_mysql, ["date" => $id])->row();
      }


    public function delete($id){

    return $this->db->delete($this->tr_replication_mysql, array("date" => $id));

    }

    

}