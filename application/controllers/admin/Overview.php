<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {

    function __construct(){

        parent::__construct();
        $this->load->model("Overview_model");

        if ($this->session->has_userdata('login')) { 
        } 

            else { 
            redirect(site_url('admin/login')); 
            } 
        }



	public function index()
	{

   

       $data['data']= $this->Overview_model->getAll();
       $this->load->view("admin/overview",$data);


	}

	public function add()
    {


       /* $overview = $this->Overview_model;
        $validation = $this->form_validation;
        $validation->set_rules($overview->rules());

        if ($validation->run()) {

             echo '3';


            $overview->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }*/
        if($this->input->post()){
        $data_sess=$this->session->userdata('login');
        $id=$data_sess[0]->id_user;

       $sql="insert into tr_replication_mysql(
        id_engineer,
        date,
        shift,
        corona,
        remark_corona,

        ibisnis,
        remark_ibisnis,

        mocash,
        remark_mocash,
        
        ibanking,
        remark_ibanking,
      
        cms,
        remark_cms,
        
        brispot,
        remark_brispot,
        
        wbs,
        remark_wbs,
        
        myqr,
        remark_myqr,
        
        mchanger,
        remark_mchanger,
        
        dlocator,
        remark_dlocator,
        
        brifast,
        remark_brifast
        ) values(
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?
      )";

        $this->db->query($sql,array(
        $id,
        $this->input->post('date'),
        $this->input->post('shift'),
        $this->input->post('corona'),
        $this->input->post('remark_corona'),
        
        $this->input->post('ibisnis'),
        $this->input->post('remark_ibisnis'),
        
        $this->input->post('mocash'),
        $this->input->post('remark_mocash'),
        
        $this->input->post('ibanking'),
        $this->input->post('remark_ibanking'),
        
        $this->input->post('cms'),
        $this->input->post('remark_cms'),
        
        $this->input->post('brispot'),
        $this->input->post('remark_brispot'),
        
        $this->input->post('wbs'),
        $this->input->post('remark_wbs'),
        
        $this->input->post('myqr'),
        $this->input->post('remark_myqr'),
        
        $this->input->post('mchanger'),
        $this->input->post('remark_mchanger'),
        
        $this->input->post('dlocator'),
        $this->input->post('remark_dlocator'),
        
        $this->input->post('brifast'),
        $this->input->post('remark_brifast')
        
        ));



        $sql="insert into tr_monitoring_mimix(
        id_engineer,
        date,
        shift,
        lokasi1,
        remark_lokasi1,
        
        lokasi2,
        remark_lokasi2,
        
        lokasi3,
        remark_lokasi3
        ) values(
        ?,?,?,?,?,?,?,?,?
      )";

        $this->db->query($sql,array(
        $id,
        $this->input->post('date'),
        $this->input->post('shift'),
        $this->input->post('lokasi1'),
        $this->input->post('remark_lokasi1'),
        
        $this->input->post('lokasi2'),
        $this->input->post('remark_lokasi2'),
        
        $this->input->post('lokasi3'),
        $this->input->post('remark_lokasi3')
        
        ));

        $sql="insert into tr_monitoring_oracle(
        id_engineer,
        date,
        shift,
        way4db1,
        remark_way4db1,
        
        way4db2,
        remark_way4db2,
        
        way4db3,
        remark_way4db3,
        
        way4db4,
        remark_way4db4,
        
        way4db5,
        remark_way4db5,
        
        way4db6,
        remark_way4db6,
        
        way4db7,
        remark_way4db7,
        
        way4db8,
        remark_way4db8,
        
        way4db9,
        remark_way4db9,
        
        way4db10,
        remark_way4db10,
        
        way4db11,
        remark_way4db11,
        
        way4db12,
        remark_way4db12,
        
        way4db13,
        remark_way4db13,
        
        way4db14,
        remark_way4db14,
       
        way4db15,
        remark_way4db15,
        
        way4db16,
        remark_way4db16,
        
        way4db17,
        remark_way4db17,
        
        rtgs,
        remark_rtgs
        ) values(
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?
      )";

        $this->db->query($sql,array(
        $id,
        $this->input->post('date'),
        $this->input->post('shift'),
        $this->input->post('way4db1'),
        $this->input->post('remark_way4db1'),
        
        $this->input->post('way4db2'),
        $this->input->post('remark_way4db2'),
        
        $this->input->post('way4db3'),
        $this->input->post('remark_way4db3'),
        
        $this->input->post('way4db4'),
        $this->input->post('remark_way4db4'),
        
        $this->input->post('way4db5'),
        $this->input->post('remark_way4db5'),
        
        $this->input->post('way4db6'),
        $this->input->post('remark_way4db6'),
        
        $this->input->post('way4db7'),
        $this->input->post('remark_way4db7'),
        
        $this->input->post('way4db8'),
        $this->input->post('remark_way4db8'),
        
        $this->input->post('way4db9'),
        $this->input->post('remark_way4db9'),
        
        $this->input->post('way4db10'),
        $this->input->post('remark_way4db10'),
        
        $this->input->post('way4db11'),
        $this->input->post('remark_way4db11'),
        
        $this->input->post('way4db12'),
        $this->input->post('remark_way4db12'),
        
        $this->input->post('way4db13'),
        $this->input->post('remark_way4db13'),
        
        $this->input->post('way4db14'),
        $this->input->post('remark_way4db14'),
        
        $this->input->post('way4db15'),
        $this->input->post('remark_way4db15'),
        
        $this->input->post('way4db16'),
        $this->input->post('remark_way4db16'),
        
        $this->input->post('way4db17'),
        $this->input->post('remark_way4db17'),
        
        $this->input->post('rtgs'),
        $this->input->post('remark_rtgs')
        
        ));


        $sql="insert into tr_cek_storage(
        id_engineer,
        date,
        shift,
        hpe,
        remark_hpe,
        
        hds,
        remark_hds
        ) values(
        ?,?,?,?,?,?,?
      )";

        $this->db->query($sql,array(
        $id,
        $this->input->post('date'),
        $this->input->post('shift'),
        $this->input->post('hpe'),
        $this->input->post('remark_hpe'),
        
        $this->input->post('hds'),
        $this->input->post('remark_hds')
        
        ));


        $sql="insert into tr_monitoring_grafana(
        id_engineer,
        date,
        shift,
        diskusage_server,
        diskusage_page,
        memory_server,
        memory_page,
        host_server,
        host_page) values(
        ?,?,?,?,?,?,?,?,?
      )";

        $this->db->query($sql,array(
        $id,
        $this->input->post('date'),
        $this->input->post('shift'),
        $this->input->post('diskusage_server'),
        $this->input->post('diskusage_page'),
        $this->input->post('memory_server'),
        $this->input->post('memory_page'),
        $this->input->post('host_server'),
        $this->input->post('host_page')
        ));


        $sql="insert into tr_status_pprc(
        id_engineer,
        date,
        shift,
        pprc,
        remark_pprc
        
        ) values(
        ?,?,?,?,?
      )";

        $this->db->query($sql,array(
        $id,
        $this->input->post('date'),
        $this->input->post('shift'),
        $this->input->post('pprc'),
        $this->input->post('remark_pprc')
        
        ));


        $sql="insert into tr_portal_opt(
        id_engineer,
        date,
        shift,
        portalopt,
        remark_portalopt
        ) values(
        ?,?,?,?,?
      )";

        $this->db->query($sql,array(
        $id,
        $this->input->post('date'),
        $this->input->post('shift'),
        $this->input->post('portalopt'),
        $this->input->post('remark_portalopt')
        
        ));


        $sql="insert into tr_monitoring_vcgti(
        id_engineer,
        date,
        shift,
        num_clustergti,
        num_nodegti,
        hy_gti,
        af_gti,
        hb_gti,
        hycl1,
        remark_hycl1,
        
        hycl2,
        remark_hycl2,
        
        afcl1,
        remark_afcl1,
        
        afcl2,
        remark_afcl2,
        
        afcl3,
        remark_afcl3,
        
        afcl4,
        remark_afcl4,
        
        hbcl1,
        remark_hbcl1,
      
        hbcl2,
        remark_hbcl2,
        
        hbcl3,
        remark_hbcl3,
        
        hbcl4,
        remark_hbcl4,
        
        hbcl5,
        remark_hbcl5,
        
        hbcl6,
        remark_hbcl6,
        
        hbcl7,
        remark_hbcl7
        ) values(
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?
      )";

        $this->db->query($sql,array(
        $id,
        $this->input->post('date'),
        $this->input->post('shift'),
        $this->input->post('num_clustergti'),
        $this->input->post('num_nodegti'),
        $this->input->post('hy_gti'),
        $this->input->post('af_gti'),
        $this->input->post('hb_gti'),
        $this->input->post('hycl1'),
        $this->input->post('remark_hycl1'),
        
        $this->input->post('hycl2'),
        $this->input->post('remark_hycl2'),
        
        $this->input->post('afcl1'),
        $this->input->post('remark_afcl1'),
        
        $this->input->post('afcl2'),
        $this->input->post('remark_afcl2'),
        
        $this->input->post('afcl3'),
        $this->input->post('remark_afcl3'),
        
        $this->input->post('afcl4'),
        $this->input->post('remark_afcl4'),
        
        $this->input->post('hbcl1'),
        $this->input->post('remark_hbcl1'),
        
        $this->input->post('hbcl2'),
        $this->input->post('remark_hbcl2'),
        
        $this->input->post('hbcl3'),
        $this->input->post('remark_hbcl3'),
        
        $this->input->post('hbcl4'),
        $this->input->post('remark_hbcl4'),
        
        $this->input->post('hbcl5'),
        $this->input->post('remark_hbcl5'),
        
        $this->input->post('hbcl6'),
        $this->input->post('remark_hbcl6'),
        
        $this->input->post('hbcl7'),
        $this->input->post('remark_hbcl7')
        
        ));


        $sql="insert into tr_monitoring_vctbn(
        id_engineer,
        date,
        shift,
        num_clustertbn,
        num_nodetbn,
        hy_tbn,
        af_tbn,
        hb_tbn,
        comafcl1,
        remark_comafcl1,
        
        comhbcl1,
        remark_comhbcl1,
        
        comhbcl2,
        remark_comhbcl2,
        
        hpcl1,
        remark_hpcl1,
        
        nvcl1,
        remark_nvcl1,
        
        nvcl2,
        remark_nvcl2,
        
        nvcl3,
        remark_nvcl3,
        
        nvcl4,
        remark_nvcl4,
        
        nvcl5,
        remark_nvcl5,
        
        nvcl6,
        remark_nvcl6,
        
        nvcl7,
        remark_nvcl7,
        
        nvcl8,
        remark_nvcl8,
        
        nvcl9,
        remark_nvcl9,
        
        nvcl10,
        remark_nvcl10,
        
        nvcl11,
        remark_nvcl11,
        
        nvcl12,
        remark_nvcl12,
        
        nvcl13,
        remark_nvcl13,
        
        nvcl14,
        remark_nvcl14,
        
        mgtafcl1,
        remark_mgtafcl1
        ) values(
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?
      )";

        $this->db->query($sql,array(
        $id,
        $this->input->post('date'),
        $this->input->post('shift'),
        $this->input->post('num_clustertbn'),
        $this->input->post('num_nodetbn'),
        $this->input->post('hy_tbn'),
        $this->input->post('af_tbn'),
        $this->input->post('hb_tbn'),
        $this->input->post('comafcl1'),
        $this->input->post('remark_comafcl1'),
        
        $this->input->post('comhbcl1'),
        $this->input->post('remark_comhbcl1'),
        
        $this->input->post('comhbcl2'),
        $this->input->post('remark_comhbcl2'),
        
        $this->input->post('hpcl1'),
        $this->input->post('remark_hpcl1'),
        
        $this->input->post('nvcl1'),
        $this->input->post('remark_nvcl1'),
        
        $this->input->post('nvcl2'),
        $this->input->post('remark_nvcl2'),
        
        $this->input->post('nvcl3'),
        $this->input->post('remark_nvcl3'),
        
        $this->input->post('nvcl4'),
        $this->input->post('remark_nvcl4'),
        
        $this->input->post('nvcl5'),
        $this->input->post('remark_nvcl5'),
        
        $this->input->post('nvcl6'),
        $this->input->post('remark_nvcl6'),
        
        $this->input->post('nvcl7'),
        $this->input->post('remark_nvcl7'),
        
        $this->input->post('nvcl8'),
        $this->input->post('remark_nvcl8'),
       
        $this->input->post('nvcl9'),
        $this->input->post('remark_nvcl9'),
        
        $this->input->post('nvcl10'),
        $this->input->post('remark_nvcl10'),
        
        $this->input->post('nvcl11'),
        $this->input->post('remark_nvcl11'),
        
        $this->input->post('nvcl12'),
        $this->input->post('remark_nvcl12'),
        
        $this->input->post('nvcl13'),
        $this->input->post('remark_nvcl13'),
        
        $this->input->post('nvcl14'),
        $this->input->post('remark_nvcl14'),
        
        $this->input->post('mgtafcl1'),
        $this->input->post('remark_mgtafcl1')
        
        ));


        $sql="insert into tr_notes(
        id_engineer,
        date,
        shift,
        notes) values(
        ?,?,?,?
      )";

        $this->db->query($sql,array(
        $id,
        $this->input->post('date'),
        $this->input->post('shift'),
        $this->input->post('notes')
        ));

        echo $this->db->last_query();

        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('admin/overview', 'location', 301);
        
        return false;

        }else{

         $this->load->view("admin/new_form");
      }
    }

    //   public function delete($id=null)
    // {
    //     if (!isset($id)) show_404();
        
    //     if ($this->Overview_model->delete($id)) {
    //         redirect(site_url('admin/overview'));
    //     }
    // }


    public function delete(){
      $date=$this->uri->segment(4);
      $id_engineer=$this->uri->segment(5);
      $shift=$this->uri->segment(6);

      $sql="delete FROM tr_replication_mysql where date=? and id_engineer=? and shift=?";
      $query= $this->db->query($sql,array(
      $date,$id_engineer,$shift
      ));
    
      $sql="delete FROM tr_monitoring_mimix where date=? and id_engineer=? and shift=?";
      $query= $this->db->query($sql,array(
      $date,$id_engineer,$shift
      ));

      $sql="delete FROM tr_monitoring_grafana where date=? and id_engineer=? and shift=?";
      $query= $this->db->query($sql,array(
      $date,$id_engineer,$shift
      ));

      $sql="delete FROM tr_monitoring_oracle where date=? and id_engineer=? and shift=?";
      $query= $this->db->query($sql,array(
      $date,$id_engineer,$shift
      ));

      $sql="delete FROM tr_cek_storage where date=? and id_engineer=? and shift=?";
      $query= $this->db->query($sql,array(
      $date,$id_engineer,$shift
      ));

      $sql="delete FROM tr_monitoring_vcgti where date=? and id_engineer=? and shift=?";
      $query= $this->db->query($sql,array(
      $date,$id_engineer,$shift
      ));

      $sql="delete FROM tr_monitoring_vctbn where date=? and id_engineer=? and shift=?";
      $query= $this->db->query($sql,array(
      $date,$id_engineer,$shift
      ));

      $sql="delete FROM tr_notes where date=? and id_engineer=? and shift=?";
      $query= $this->db->query($sql,array(
      $date,$id_engineer,$shift
      ));

      $sql="delete FROM tr_portal_opt where date=? and id_engineer=? and shift=?";
      $query= $this->db->query($sql,array(
      $date,$id_engineer,$shift
      ));

      $sql="delete FROM tr_status_pprc where date=? and id_engineer=? and shift=?";
      $query= $this->db->query($sql,array(
      $date,$id_engineer,$shift
      ));

      $this->session->set_flashdata('success', 'Berhasil Dihapus');
      redirect('admin/overview', 'location', 301);

    }


    public function edit(){

      if($this->input->post()){
      $date=$this->uri->segment(4);
      $id_engineer=$this->uri->segment(5);
      $shift=$this->uri->segment(6);

$sql="update tr_replication_mysql set 
      corona=?,
      remark_corona=?,
      
      ibisnis=?,
      remark_ibisnis=?,
      
      mocash=?,
      remark_mocash=?,
      
      ibanking=?,
      remark_ibanking=?,
      
      cms=?,
      remark_cms=?,
      
      brispot=?,
      remark_brispot=?,
      
      wbs=?,
      remark_wbs=?,
      
      myqr=?,
      remark_myqr=?,
      
      mchanger=?,
      remark_mchanger=?,
      
      dlocator=?,
      remark_dlocator=?,
      
      brifast=?,
      remark_brifast=?
      
      where date=? and id_engineer=? and shift=?";

$query= $this->db->query($sql,array(
        $this->input->post('corona'),
        $this->input->post('remark_corona'),
        // $this->input->post('time_corona'),
        $this->input->post('ibisnis'),
        $this->input->post('remark_ibisnis'),
        // $this->input->post('time_ibisnis'),
        $this->input->post('mocash'),
        $this->input->post('remark_mocash'),
        // $this->input->post('time_mocash'),
        $this->input->post('ibanking'),
        $this->input->post('remark_ibanking'),
        // $this->input->post('time_ibanking'),
        $this->input->post('cms'),
        $this->input->post('remark_cms'),
        // $this->input->post('time_cms'),
        $this->input->post('brispot'),
        $this->input->post('remark_brispot'),
        // $this->input->post('time_brispot'),
        $this->input->post('wbs'),
        $this->input->post('remark_wbs'),
        // $this->input->post('time_wbs'),
        $this->input->post('myqr'),
        $this->input->post('remark_myqr'),
        // $this->input->post('time_myqr'),
        $this->input->post('mchanger'),
        $this->input->post('remark_mchanger'),
        // $this->input->post('time_mchanger'),
        $this->input->post('dlocator'),
        $this->input->post('remark_dlocator'),
        // $this->input->post('time_dlocator'),
        $this->input->post('brifast'),
        $this->input->post('remark_brifast'),
        // $this->input->post('time_brifast'),
        $date,$id_engineer,$shift
        ));

$sql="update tr_monitoring_mimix set 
      lokasi1=?,
      remark_lokasi1=?,
      
      lokasi2=?,
      remark_lokasi2=?,
      
      lokasi3=?,
      remark_lokasi3=?
      
      where date=? and id_engineer=? and shift=?";


$query= $this->db->query($sql,array(
        $this->input->post('lokasi1'),
        $this->input->post('remark_lokasi1'),
        // $this->input->post('time_lokasi1'),
        $this->input->post('lokasi2'),
        $this->input->post('remark_lokasi2'),
        // $this->input->post('time_lokasi2'),
        $this->input->post('lokasi3'),
        $this->input->post('remark_lokasi3'),
        // $this->input->post('time_lokasi3'),
        $date,$id_engineer,$shift
        ));

$sql="update tr_monitoring_oracle set
      way4db1=?,
      remark_way4db1=?,
      
      way4db2=?,
      remark_way4db2=?,
      
      way4db3=?,
      remark_way4db3=?,
      
      way4db4=?,
      remark_way4db4=?,
      
      way4db5=?,
      remark_way4db5=?,
      
      way4db6=?,
      remark_way4db6=?,
      
      way4db7=?,
      remark_way4db7=?,
      
      way4db8=?,
      remark_way4db8=?,
      
      way4db9=?,
      remark_way4db9=?,
      
      way4db10=?,
      remark_way4db10=?,
      
      way4db11=?,
      remark_way4db11=?,
      
      way4db12=?,
      remark_way4db12=?,
      
      way4db13=?,
      remark_way4db13=?,
      
      way4db14=?,
      remark_way4db14=?,
      
      way4db15=?,
      remark_way4db15=?,
      
      way4db16=?,
      remark_way4db16=?,
      
      way4db17=?,
      remark_way4db17=?,
      
      rtgs=?,
      remark_rtgs=?
      
      where date=? and id_engineer=? and shift=?";

$query= $this->db->query($sql,array(
        $this->input->post('way4db1'),
        $this->input->post('remark_way4db1'),
        //$this->input->post('time_way4db1'),
        $this->input->post('way4db2'),
        $this->input->post('remark_way4db2'),
        //$this->input->post('time_way4db2'),
        $this->input->post('way4db3'),
        $this->input->post('remark_way4db3'),
        //$this->input->post('time_way4db3'),
        $this->input->post('way4db4'),
        $this->input->post('remark_way4db4'),
        //$this->input->post('time_way4db4'),
        $this->input->post('way4db5'),
        $this->input->post('remark_way4db5'),
        //$this->input->post('time_way4db5'),
        $this->input->post('way4db6'),
        $this->input->post('remark_way4db6'),
        //$this->input->post('time_way4db6'),
        $this->input->post('way4db7'),
        $this->input->post('remark_way4db7'),
        //$this->input->post('time_way4db7'),
        $this->input->post('way4db8'),
        $this->input->post('remark_way4db8'),
        //$this->input->post('time_way4db8'),
        $this->input->post('way4db9'),
        $this->input->post('remark_way4db9'),
        //$this->input->post('time_way4db9'),
        $this->input->post('way4db10'),
        $this->input->post('remark_way4db10'),
        //$this->input->post('time_way4db10'),
        $this->input->post('way4db11'),
        $this->input->post('remark_way4db11'),
       // $this->input->post('time_way4db11'),
        $this->input->post('way4db12'),
        $this->input->post('remark_way4db12'),
        //$this->input->post('time_way4db12'),
        $this->input->post('way4db13'),
        $this->input->post('remark_way4db13'),
        //$this->input->post('time_way4db13'),
        $this->input->post('way4db14'),
        $this->input->post('remark_way4db14'),
        //$this->input->post('time_way4db14'),
        $this->input->post('way4db15'),
        $this->input->post('remark_way4db15'),
        //$this->input->post('time_way4db15'),
        $this->input->post('way4db16'),
        $this->input->post('remark_way4db16'),
        //$this->input->post('time_way4db16'),
        $this->input->post('way4db17'),
        $this->input->post('remark_way4db17'),
        //$this->input->post('time_way4db17'),
        $this->input->post('rtgs'),
        $this->input->post('remark_rtgs'),
        //$this->input->post('time_rtgs'),
        $date,$id_engineer,$shift
        ));


$sql="update tr_cek_storage set
        hpe=?,
        remark_hpe=?,
        
        hds=?,
        remark_hds=?
        
        where date=? and id_engineer=? and shift=?";


        $this->db->query($sql,array(
        $this->input->post('hpe'),
        $this->input->post('remark_hpe'),
        //$this->input->post('time_hpe'),
        $this->input->post('hds'),
        $this->input->post('remark_hds'),
        //$this->input->post('time_hds'),
        $date,$id_engineer,$shift
        ));


$sql="update tr_monitoring_grafana set
        diskusage_server=?,
        diskusage_page=?,
        memory_server=?,
        memory_page=?,
        host_server=?,
        host_page=?
        where date=? and id_engineer=? and shift=?";

        $this->db->query($sql,array(
        $this->input->post('diskusage_server'),
        $this->input->post('diskusage_page'),
        $this->input->post('memory_server'),
        $this->input->post('memory_page'),
        $this->input->post('host_server'),
        $this->input->post('host_page'),
        $date,$id_engineer,$shift
        ));


        $sql="update tr_status_pprc set
        pprc=?,
        remark_pprc=?
        
        where date=? and id_engineer=? and shift=?";

        $this->db->query($sql,array(
        $this->input->post('pprc'),
        $this->input->post('remark_pprc'),
        $date,$id_engineer,$shift
        ));


        $sql="update tr_portal_opt set
        portalopt=?,
        remark_portalopt=?
        
        where date=? and id_engineer=? and shift=?";

        $this->db->query($sql,array(
        $this->input->post('portalopt'),
        $this->input->post('remark_portalopt'),
        //$this->input->post('time_portalopt'),
        $date,$id_engineer,$shift
        ));


        $sql="update tr_monitoring_vcgti set
        num_clustergti=?,
        num_nodegti=?,
        hy_gti=?,
        af_gti=?,
        hb_gti=?,
        hycl1=?,
        remark_hycl1=?,
        
        hycl2=?,
        remark_hycl2=?,
        
        afcl1=?,
        remark_afcl1=?,
        
        afcl2=?,
        remark_afcl2=?,
       
        afcl3=?,
        remark_afcl3=?,
        
        afcl4=?,
        remark_afcl4=?,
        
        hbcl1=?,
        remark_hbcl1=?,
        
        hbcl2=?,
        remark_hbcl2=?,
        
        hbcl3=?,
        remark_hbcl3=?,
        
        hbcl4=?,
        remark_hbcl4=?,
        
        hbcl5=?,
        remark_hbcl5=?,
        
        hbcl6=?,
        remark_hbcl6=?,
        
        hbcl7=?,
        remark_hbcl7=?
        
        where date=? and id_engineer=? and shift=?";

        $this->db->query($sql,array(
        $this->input->post('num_clustergti'),
        $this->input->post('num_nodegti'),
        $this->input->post('hy_gti'),
        $this->input->post('af_gti'),
        $this->input->post('hb_gti'),
        $this->input->post('hycl1'),
        $this->input->post('remark_hycl1'),
        
        $this->input->post('hycl2'),
        $this->input->post('remark_hycl2'),
        
        $this->input->post('afcl1'),
        $this->input->post('remark_afcl1'),
        
        $this->input->post('afcl2'),
        $this->input->post('remark_afcl2'),
        
        $this->input->post('afcl3'),
        $this->input->post('remark_afcl3'),
        
        $this->input->post('afcl4'),
        $this->input->post('remark_afcl4'),
        
        $this->input->post('hbcl1'),
        $this->input->post('remark_hbcl1'),
        
        $this->input->post('hbcl2'),
        $this->input->post('remark_hbcl2'),
        
        $this->input->post('hbcl3'),
        $this->input->post('remark_hbcl3'),
        
        $this->input->post('hbcl4'),
        $this->input->post('remark_hbcl4'),
        
        $this->input->post('hbcl5'),
        $this->input->post('remark_hbcl5'),
        
        $this->input->post('hbcl6'),
        $this->input->post('remark_hbcl6'),
        
        $this->input->post('hbcl7'),
        $this->input->post('remark_hbcl7'),
        
        $date,$id_engineer,$shift
        ));


        $sql="update tr_monitoring_vctbn set
        num_clustertbn=?,
        num_nodetbn=?,
        hy_tbn=?,
        af_tbn=?,
        hb_tbn=?,
        comafcl1=?,
        remark_comafcl1=?,
        
        comhbcl1=?,
        remark_comhbcl1=?,
        
        comhbcl2=?,
        remark_comhbcl2=?,
        
        hpcl1=?,
        remark_hpcl1=?,
        
        nvcl1=?,
        remark_nvcl1=?,
        
        nvcl2=?,
        remark_nvcl2=?,
        
        nvcl3=?,
        remark_nvcl3=?,
        
        nvcl4=?,
        remark_nvcl4=?,
        
        nvcl5=?,
        remark_nvcl5=?,
        
        nvcl6=?,
        remark_nvcl6=?,
        
        nvcl7=?,
        remark_nvcl7=?,
        
        nvcl8=?,
        remark_nvcl8=?,
        
        nvcl9=?,
        remark_nvcl9=?,
        
        nvcl10=?,
        remark_nvcl10=?,
        
        nvcl11=?,
        remark_nvcl11=?,
        
        nvcl12=?,
        remark_nvcl12=?,
        
        nvcl13=?,
        remark_nvcl13=?,
        
        nvcl14=?,
        remark_nvcl14=?,
        
        mgtafcl1=?,
        remark_mgtafcl1=?
        
        where date=? and id_engineer=? and shift=?";

        $this->db->query($sql,array(
        $this->input->post('num_clustertbn'),
        $this->input->post('num_nodetbn'),
        $this->input->post('hy_tbn'),
        $this->input->post('af_tbn'),
        $this->input->post('hb_tbn'),
        $this->input->post('comafcl1'),
        $this->input->post('remark_comafcl1'),
        $this->input->post('comhbcl1'),
        $this->input->post('remark_comhbcl1'),
        $this->input->post('comhbcl2'),
        $this->input->post('remark_comhbcl2'),
        $this->input->post('hpcl1'),
        $this->input->post('remark_hpcl1'),
        $this->input->post('nvcl1'),
        $this->input->post('remark_nvcl1'),
        $this->input->post('nvcl2'),
        $this->input->post('remark_nvcl2'),
        $this->input->post('nvcl3'),
        $this->input->post('remark_nvcl3'),
        $this->input->post('nvcl4'),
        $this->input->post('remark_nvcl4'),
        $this->input->post('nvcl5'),
        $this->input->post('remark_nvcl5'),
        $this->input->post('nvcl6'),
        $this->input->post('remark_nvcl6'),
        $this->input->post('nvcl7'),
        $this->input->post('remark_nvcl7'),
        $this->input->post('nvcl8'),
        $this->input->post('remark_nvcl8'),
        $this->input->post('nvcl9'),
        $this->input->post('remark_nvcl9'),
        $this->input->post('nvcl10'),
        $this->input->post('remark_nvcl10'),
        $this->input->post('nvcl11'),
        $this->input->post('remark_nvcl11'),
        $this->input->post('nvcl12'),
        $this->input->post('remark_nvcl12'),
        $this->input->post('nvcl13'),
        $this->input->post('remark_nvcl13'),
        $this->input->post('nvcl14'),
        $this->input->post('remark_nvcl14'),
        $this->input->post('mgtafcl1'),
        $this->input->post('remark_mgtafcl1'),
        $date,$id_engineer,$shift
        ));


        $sql="update tr_notes set
        notes=?
        where date=? and id_engineer=? and shift=?";

        $this->db->query($sql,array(
        $this->input->post('notes'),
        $date,$id_engineer,$shift
        ));

        $this->session->set_flashdata('success', 'Berhasil diupdate');
        redirect('admin/overview', 'location', 301);

      }else{


      $data_sess=$this->session->userdata('login');
      $id=$data_sess[0]->id_user;

    $sql='SELECT nama,date_format(DATE, "%d %M %Y") AS datenya,date,shift,id_engineer FROM user INNER JOIN( SELECT * from ( SELECT DATE,id_engineer,shift FROM tr_replication_mysql union SELECT DATE,id_engineer,shift FROM tr_portal_opt union SELECT DATE,id_engineer,shift FROM tr_cek_storage union SELECT DATE,id_engineer,shift FROM tr_monitoring_grafana union SELECT DATE,id_engineer,shift FROM tr_monitoring_mimix union SELECT DATE,id_engineer,shift FROM tr_monitoring_oracle union SELECT DATE,id_engineer,shift FROM tr_monitoring_vcgti union SELECT DATE,id_engineer,shift FROM tr_monitoring_vctbn union SELECT DATE,id_engineer,shift FROM tr_status_pprc )as details GROUP BY DATE,id_engineer,shift)details ON user.id_user= details.id_engineer where details.id_engineer=? and details.date=? and details.shift=?';

      $date=$this->uri->segment(4);
      $id_engineer=$this->uri->segment(5);
      $shift=$this->uri->segment(6);

      
      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $dataawal=$query->result();

      $sql="select 
      id_engineer,
      date,
      shift,
      corona,
      remark_corona,
      ibisnis,
      remark_ibisnis,
      mocash,
      remark_mocash,
      ibanking,
      remark_ibanking,
      cms,
      remark_cms,
      brispot,
      remark_brispot,
      wbs,
      remark_wbs,
      myqr,
      remark_myqr,
      mchanger,
      remark_mchanger,
      dlocator,
      remark_dlocator,
      brifast,
      remark_brifast
      from tr_replication_mysql where 
      id_engineer=? and
      date=? and
      shift=?";


      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_replication_mysql=$query->result();
      $data['tr_replication_mysql']=$tr_replication_mysql;

      $sql="select 
      id_engineer,
      date,
      shift,
      lokasi1,
      remark_lokasi1,
      lokasi2,
      remark_lokasi2,
      lokasi3,
      remark_lokasi3
      from tr_monitoring_mimix where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));

      $tr_monitoring_mimix=$query->result();
      $data['tr_monitoring_mimix']=$tr_monitoring_mimix;
      
      $sql="select 
      id_engineer,
      date,
      shift,
      way4db1,
      remark_way4db1,
      way4db2,
      remark_way4db2,
      way4db3,
      remark_way4db3,
      way4db4,
      remark_way4db4,
      way4db5,
      remark_way4db5,
      way4db6,
      remark_way4db6,
      way4db7,
      remark_way4db7,
      way4db8,
      remark_way4db8,
      way4db9,
      remark_way4db9,
      way4db10,
      remark_way4db10,
      way4db11,
      remark_way4db11,
      way4db12,
      remark_way4db12,
      way4db13,
      remark_way4db13,
      way4db14,
      remark_way4db14,
      way4db15,
      remark_way4db15,
      way4db16,
      remark_way4db16,
      way4db17,
      remark_way4db17,
      rtgs,
      remark_rtgs
      from tr_monitoring_oracle where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_monitoring_oracle=$query->result();
      $data['tr_monitoring_oracle']=$tr_monitoring_oracle;

      $sql="select 
      id_engineer,
      date,
      shift,
      hpe,
      remark_hpe,
      hds,
      remark_hds
      from tr_cek_storage where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_cek_storage=$query->result();
      $data['tr_cek_storage']=$tr_cek_storage;

      $sql="select 
      id_engineer,
      date,
      shift,
      diskusage_server,
      diskusage_page,
      memory_server,
      memory_page,
      host_server,
      host_page
      from tr_monitoring_grafana where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_monitoring_grafana=$query->result();
      $data['tr_monitoring_grafana']=$tr_monitoring_grafana;


      $sql="select 
      id_engineer,
      date,
      shift,
      pprc,
      remark_pprc
      from tr_status_pprc where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_status_pprc=$query->result();
      $data['tr_status_pprc']=$tr_status_pprc;


      $sql="select 
      id_engineer,
      date,
      shift,
      portalopt,
      remark_portalopt
      from tr_portal_opt where 
      id_engineer=? and
      date=? and
      shift=?";


      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_portal_opt=$query->result();
      $data['tr_portal_opt']=$tr_portal_opt;

      $sql="select 
      id_engineer,
      date,
      shift,
      num_clustergti,
      num_nodegti,
      hy_gti,
      af_gti,
      hb_gti,
      hycl1,
      remark_hycl1,
      hycl2,
      remark_hycl2,
      afcl1,
      remark_afcl1,
      afcl2,
      remark_afcl2,
      afcl3,
      remark_afcl3,
      afcl4,
      remark_afcl4,
      hbcl1,
      remark_hbcl1,
      hbcl2,
      remark_hbcl2,
      hbcl3,
      remark_hbcl3,
      hbcl4,
      remark_hbcl4,
      hbcl5,
      remark_hbcl5,
      hbcl6,
      remark_hbcl6,
      hbcl7,
      remark_hbcl7
      from tr_monitoring_vcgti where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_monitoring_vcgti=$query->result();
      $data['tr_monitoring_vcgti']=$tr_monitoring_vcgti;

      $sql="select 
      id_engineer,
      date,
      shift,
      num_clustertbn,
      num_nodetbn,
      hy_tbn,
      af_tbn,
      hb_tbn,
      comafcl1,
      remark_comafcl1,
      comhbcl1,
      remark_comhbcl1,
      comhbcl2,
      remark_comhbcl2,
      hpcl1,
      remark_hpcl1,
      nvcl1,
      remark_nvcl1,
      nvcl2,
      remark_nvcl2,
      nvcl3,
      remark_nvcl3,
      nvcl4,
      remark_nvcl4,
      nvcl5,
      remark_nvcl5,
      nvcl6,
      remark_nvcl6,
      nvcl7,
      remark_nvcl7,
      nvcl8,
      remark_nvcl8,
      nvcl9,
      remark_nvcl9,
      nvcl10,
      remark_nvcl10,
      nvcl11,
      remark_nvcl11,
      nvcl12,
      remark_nvcl12,
      nvcl13,
      remark_nvcl13,
      nvcl14,
      remark_nvcl14,
      mgtafcl1,
      remark_mgtafcl1
      from tr_monitoring_vctbn where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_monitoring_vctbn=$query->result();
      $data['tr_monitoring_vctbn']=$tr_monitoring_vctbn;

      $sql="select 
      id_engineer,
      date,
      shift,
      notes
      from tr_notes where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_notes=$query->result();
      $data['tr_notes']=$tr_notes;

      }


      $this->load->view('admin/edit_form', $data);
     // $this->session->set_flashdata('success', 'Berhasil Diupdate');

     // echo $this->db->last_query();


    }



    public function detail(){
      $data=array();
    
    $data_sess=$this->session->userdata('login');
      $id=$data_sess[0]->id_user;

    $sql='SELECT nama,date_format(DATE, "%d %M %Y") AS datenya,date,shift,id_engineer FROM user INNER JOIN( SELECT * from ( SELECT DATE,id_engineer,shift FROM tr_replication_mysql union SELECT DATE,id_engineer,shift FROM tr_portal_opt union SELECT DATE,id_engineer,shift FROM tr_cek_storage union SELECT DATE,id_engineer,shift FROM tr_monitoring_grafana union SELECT DATE,id_engineer,shift FROM tr_monitoring_mimix union SELECT DATE,id_engineer,shift FROM tr_monitoring_oracle union SELECT DATE,id_engineer,shift FROM tr_monitoring_vcgti union SELECT DATE,id_engineer,shift FROM tr_monitoring_vctbn union SELECT DATE,id_engineer,shift FROM tr_status_pprc )as details GROUP BY DATE,id_engineer,shift)details ON user.id_user= details.id_engineer where details.id_engineer=? and details.date=? and details.shift=?';

      $date=$this->uri->segment(4);
      $id_engineer=$this->uri->segment(5);
      $shift=$this->uri->segment(6);

      
      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $dataawal=$query->result();

      

      $sql="select 
      id_engineer,
      date,
      shift,
      corona,
      remark_corona,
      ibisnis,
      remark_ibisnis,
      mocash,
      remark_mocash,
      ibanking,
      remark_ibanking,
      cms,
      remark_cms,
      brispot,
      remark_brispot,
      wbs,
      remark_wbs,
      myqr,
      remark_myqr,
      mchanger,
      remark_mchanger,
      dlocator,
      remark_dlocator,
      brifast,
      remark_brifast
      from tr_replication_mysql where 
      id_engineer=? and
      date=? and
      shift=?";


      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_replication_mysql=$query->result();
      $data['tr_replication_mysql']=$tr_replication_mysql;

      $sql="select 
      id_engineer,
      date,
      shift,
      lokasi1,
      remark_lokasi1,
      lokasi2,
      remark_lokasi2,
      lokasi3,
      remark_lokasi3
      from tr_monitoring_mimix where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));

      $tr_monitoring_mimix=$query->result();
      $data['tr_monitoring_mimix']=$tr_monitoring_mimix;
      
      $sql="select 
      id_engineer,
      date,
      shift,
      way4db1,
      remark_way4db1,
      way4db2,
      remark_way4db2,
      way4db3,
      remark_way4db3,
      way4db4,
      remark_way4db4,
      way4db5,
      remark_way4db5,
      way4db6,
      remark_way4db6,
      way4db7,
      remark_way4db7,
      way4db8,
      remark_way4db8,
      way4db9,
      remark_way4db9,
      way4db10,
      remark_way4db10,
      way4db11,
      remark_way4db11,
      way4db12,
      remark_way4db12,
      way4db13,
      remark_way4db13,
      way4db14,
      remark_way4db14,
      way4db15,
      remark_way4db15,
      way4db16,
      remark_way4db16,
      way4db17,
      remark_way4db17,
      rtgs,
      remark_rtgs
      from tr_monitoring_oracle where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_monitoring_oracle=$query->result();
      $data['tr_monitoring_oracle']=$tr_monitoring_oracle;

      $sql="select 
      id_engineer,
      date,
      shift,
      hpe,
      remark_hpe,
      hds,
      remark_hds
      from tr_cek_storage where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_cek_storage=$query->result();
      $data['tr_cek_storage']=$tr_cek_storage;

      $sql="select 
      id_engineer,
      date,
      shift,
      diskusage_server,
      diskusage_page,
      memory_server,
      memory_page,
      host_server,
      host_page
      from tr_monitoring_grafana where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_monitoring_grafana=$query->result();
      $data['tr_monitoring_grafana']=$tr_monitoring_grafana;


      $sql="select 
      id_engineer,
      date,
      shift,
      pprc,
      remark_pprc
      from tr_status_pprc where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_status_pprc=$query->result();
      $data['tr_status_pprc']=$tr_status_pprc;


      $sql="select 
      id_engineer,
      date,
      shift,
      portalopt,
      remark_portalopt
      from tr_portal_opt where 
      id_engineer=? and
      date=? and
      shift=?";


      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_portal_opt=$query->result();
      $data['tr_portal_opt']=$tr_portal_opt;

      $sql="select 
      id_engineer,
      date,
      shift,
      num_clustergti,
      num_nodegti,
      hy_gti,
      af_gti,
      hb_gti,
      hycl1,
      remark_hycl1,
      hycl2,
      remark_hycl2,
      afcl1,
      remark_afcl1,
      afcl2,
      remark_afcl2,
      afcl3,
      remark_afcl3,
      afcl4,
      remark_afcl4,
      hbcl1,
      remark_hbcl1,
      hbcl2,
      remark_hbcl2,
      hbcl3,
      remark_hbcl3,
      hbcl4,
      remark_hbcl4,
      hbcl5,
      remark_hbcl5,
      hbcl6,
      remark_hbcl6,
      hbcl7,
      remark_hbcl7
      from tr_monitoring_vcgti where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_monitoring_vcgti=$query->result();
      $data['tr_monitoring_vcgti']=$tr_monitoring_vcgti;

      $sql="select 
      id_engineer,
      date,
      shift,
      num_clustertbn,
      num_nodetbn,
      hy_tbn,
      af_tbn,
      hb_tbn,
      comafcl1,
      remark_comafcl1,
      comhbcl1,
      remark_comhbcl1,
      comhbcl2,
      remark_comhbcl2,
      hpcl1,
      remark_hpcl1,
      nvcl1,
      remark_nvcl1,
      nvcl2,
      remark_nvcl2,
      nvcl3,
      remark_nvcl3,
      nvcl4,
      remark_nvcl4,
      nvcl5,
      remark_nvcl5,
      nvcl6,
      remark_nvcl6,
      nvcl7,
      remark_nvcl7,
      nvcl8,
      remark_nvcl8,
      nvcl9,
      remark_nvcl9,
      nvcl10,
      remark_nvcl10,
      nvcl11,
      remark_nvcl11,
      nvcl12,
      remark_nvcl12,
      nvcl13,
      remark_nvcl13,
      nvcl14,
      remark_nvcl14,
      mgtafcl1,
      remark_mgtafcl1
      from tr_monitoring_vctbn where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_monitoring_vctbn=$query->result();
      $data['tr_monitoring_vctbn']=$tr_monitoring_vctbn;

      $sql="select 
      id_engineer,
      date,
      shift,
      notes
      from tr_notes where 
      id_engineer=? and
      date=? and
      shift=?";

      $query= $this->db->query($sql,array(
      $id_engineer,$date,$shift
      ));
      $tr_notes=$query->result();
      $data['tr_notes']=$tr_notes;
     $this->load->view("admin/detail",$data); 


    
  }

}