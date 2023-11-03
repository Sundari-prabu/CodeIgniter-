<?php
class Email extends CI_Controller{
    public function send_mail() {
       $seg1= $this->uri->segment(1);
       $seg2= $this->uri->segment(2);
       $seg3= $this->uri->segment(3);
       $seg4= $this->uri->segment(4);
       $seg5= $this->uri->segment(5);

       # echo $id.''.$name.''.$loc;
       # $this->load->view("email_send.php");
       # echo $seg1.' '.$seg2.' '.$seg3.' '.$seg4.' '.$seg5;

       #$para['segment']=[$seg1,$seg2,$seg3,$seg4,$seg5];

       $para=array($seg1,$seg2,$seg3,$seg4,$seg5);

       # $this->load->view('email_send',$para);
       $this->load->model('reg_model');
       $this->reg_model->receiveseg($para);

    }
}