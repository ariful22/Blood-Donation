<?php

Class Allstock extends CI_Model {
	


    
	public function Opositive() {
           
       $query = $this->db->query("SELECT  *
    FROM reg_doner WHERE DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date AND blood_group = 'O+' ");
       return $query;
     
        
    }
    
    public function Onegetive() {
          
       $query = $this->db->query("SELECT  *
    FROM reg_doner WHERE DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date AND blood_group = 'O-' ");
       return $query;
     
        
    }
    public function Apositive() {
          
       $query = $this->db->query("SELECT  *
    FROM reg_doner WHERE DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date AND blood_group = 'A+' ");
       return $query;
     
        
    }
    
    public function Anegetive() {
        
       $query = $this->db->query("SELECT  *
    FROM reg_doner WHERE DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date AND blood_group = 'A-' ");
       return $query;
     
        
    }
    
    public function Bpositive() {
         
       $query = $this->db->query("SELECT  *
    FROM reg_doner WHERE DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date AND blood_group = 'B+' ");
       return $query;
     
        
    }
    
    public function Bnegetive() {
         
       $query = $this->db->query("SELECT  *
    FROM reg_doner WHERE DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date AND blood_group = 'B-' ");
       return $query;
     
        
    }
    public function ABpositive() {
         
       $query = $this->db->query("SELECT  *
    FROM reg_doner WHERE DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date AND blood_group = 'AB+' ");
       return $query;
     
        
    }
    
    public function ABnegetive() {
          
       $query = $this->db->query("SELECT  *
    FROM reg_doner WHERE DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date AND blood_group = 'AB-' ");
       return $query;
     
        
    }
	
	public function copositive() {
       $this->db->where('DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date'); 
     $this->db->where("blood_group",'O+');
	 $query = $this->db->get("reg_doner");
	 return $query->result();
    
        
    }
	
	public function conegetive() {
        //$this->db->where('l_date BETWEEN DATE_SUB(NOW(), INTERVAL 120 DAY) AND NOW()');
        $this->db->where('DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date');
     $this->db->where("blood_group",'O-');
	 $query = $this->db->get("reg_doner");
	 return $query->result();
    
        
    }
	
	public function capositive() {
      $this->db->where('DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date');  
     $this->db->where("blood_group",'A+');
	 $query = $this->db->get("reg_doner");
	 return $query->result();
    
        
    }
	
	public function canegetive() {
        $this->db->where('DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date');
     $this->db->where("blood_group",'A-');
	 $query = $this->db->get("reg_doner");
	 return $query->result();
    
        
    }
	
	public function cbpositive() {
      $this->db->where('DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date');  
     $this->db->where("blood_group",'B+');
	 $query = $this->db->get("reg_doner");
	 return $query->result();
    
        
    }
	
	public function cbnegetive() {
      $this->db->where('DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date');  
     $this->db->where("blood_group",'B-');
	 $query = $this->db->get("reg_doner");
	 return $query->result();
    
        
    }
	
	public function cabpositive() {
      $this->db->where('DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date');  
     $this->db->where("blood_group",'AB+');
	 $query = $this->db->get("reg_doner");
	 return $query->result();
    
        
    }
	
	public function cabnegetive() {
       $this->db->where('DATE_SUB(CURDATE(),INTERVAL 120 DAY) >= l_date'); 
     $this->db->where("blood_group",'AB-');
	 $query = $this->db->get("reg_doner");
	 return $query->result();
    
        
    }
	
	
    
   
	
	


}



?>

