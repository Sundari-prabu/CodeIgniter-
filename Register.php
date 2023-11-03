<?php
class Register extends CI_Controller {
    public function index() {
        $this->load->view("login.php");
    }
    public function student() {
        $mes['msg']='Your Registration form is here';
        $this->load->view("registration_form",$mes);
    }
    public function SaveData() {
        extract($_POST);
        /*
        $stname=$this->input->post('stname');
        $stage=$this->input->post('stage');
        $stmail=$this->input->post('stmail');
        $stphone=$this->input->post('stphone');
        $staddress=$this->input->post('staddress');
        */
        
        
        $data = [
            'student_name'=>$stname,
            'student_age'=>$stage,
            'student_email'=>$stmail,
            'student_phone'=>$stphone,
            'student_address'=>$staddress
        ];

        $this->load->model('reg_model');
        $result= $this->RegModel->insertData($data);  
        
        if ($result) {
            
            $res['status']='Succesfully inserted';
            $res['test']=200;
            $this->load->view("registration_form",$res);
            #redirect(base_url('register/student'),$res);
        }else{
            $res['status']= 'error while inserting data';
            $this->load->view("registration_form",$res);
        }
        # echo $stname.' '.$stage.' '.$stmail.' '.$stphone.' '.$staddress ;
    }
    //http://localhost/ci3/register/savedata/

    public function fetchdata() {
        $this->load->model('RegModel');
        $result['table']=$this->RegModel->getData();
        #print_r($result);
        $this->load->view('display_records',$result);
    }
    public function edit($id){
        # echo $id;
        $this->load->model('RegModel');
        $result['editdata']= $this->RegModel->editrow($id);
        $this->load->view('display_records',$result);
    }
    public function change() {
        extract($_POST);
        $id=$stid;
        $data=[
            'student_name'=>$stname,
            'student_age'=>$stage,
            'student_email'=>$stemail,
            'student_phone'=>$stphone,
            'student_address'=>$staddress
        ];

        $this->load->model('RegModel');
        $result=$this->RegModel->change_Row($data,$id);
        if($result){
            $this->fetchdata();
        }
    }
}