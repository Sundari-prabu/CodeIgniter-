<?php
class RegModel extends CI_Model{
    public function insertData($data) {
        /*echo 'you have access model function';
        print_r($data); */
        $this->load->database();
        return $this->db->insert('student',$data);
        
    }
    public function getData() {
       # echo "You have accessed get data from reg model";
       $this->load->database();

       return $this->db->get('student')->result();
       /*echo '<pre>';
       print_r ($result);
       echo '</pre>';*/
    }
    
    public function receiveseg($data) {
        foreach($data as $p){
            echo $p .'<br>';
        }
    }

    public function editrow($id) {
        $this->load->database();
        $this->db->where('student_id',$id);
        return $this->db->get('student')->result();
    }

    public function change_Row($data,$id) {
        $this->load->database();
        $this->db->where('student_id',$id);
        return $this->db->update("student",$data);

    }
}
?>