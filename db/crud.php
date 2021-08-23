<?php 
  class crud{
      //private database object
      private $db;

      //constructor to initialize private variable to the database connection
      function __construct($conn){
        $this->db = $conn;

      }
      //function to insert a new record into the crudvd database
      public function insertStudents($lname, $fname, $dob, $email, $contact, $specialty){

            try {
                //define sql statement to be executed
                $sql = "INSERT INTO students (lastname, firstname, dateofbirth, emailaddress, contactnumber, specialty_id) VALUES (:lname,:fname,:dob,:email,:contact,:specialty)";

                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);

                //bind all placeholder to the actual values
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':specialty',$specialty);
                
                //execute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
      }

      public function editStudent($id, $lname, $fname, $dob, $email, $contact, $specialty){
        try{
            $sql = "UPDATE `students` SET `lastname`= :lname,`firstname`= :fname,
          `dateofbirth`= :dob,`emailaddress`= :email,`contactnumber`= :contact,
          `specialty_id`= :specialty WHERE student_id = :id";
          $stmt = $this->db->prepare($sql);

          //bind all placeholder to the actual values
          $stmt->bindparam(':id',$id);
          $stmt->bindparam(':lname',$lname);
          $stmt->bindparam(':fname',$fname);
          $stmt->bindparam(':dob',$dob);
          $stmt->bindparam(':email',$email);
          $stmt->bindparam(':contact',$contact);
          $stmt->bindparam(':specialty',$specialty);
          
          //execute statement
          $stmt->execute();
          return true;
        } catch (PDOException $e) {
          echo $e->getMessage();
          return false;
        
      }
    }

      public function getStudents(){
        $sql = "SELECT * FROM `students` st inner join specialties sp on st.specialty_id = sp.specialty_id";
        $result = $this->db->query($sql);
        return $result;
      }

      public function getStudentDetails($id){
        try{
          $sql ="select * from students st inner join specialties sp on st.specialty_id = sp.specialty_id where 
          student_id = :id";
          $stmt = $this->db->prepare($sql);
          $stmt->bindparam(':id', $id);
          $stmt->execute();
          $result = $stmt->fetch();
          return $result;

        } catch (PDOException $e) {
          echo $e->getMessage();
          return false;
        
      }
        
      
      }
      public function deleteStudent($id){
        try{
          $sql = "delete from students where student_id = :id";
          $stmt = $this->db->prepare($sql);
          $stmt->bindparam(':id', $id);
          $stmt->execute();
          return true;
        } catch (PDOException $e) {
          echo $e->getMessage();
          return false;

        }
       
      }

      public function getSpecialties(){
        try{
          $sql = "SELECT * FROM `specialties`";
          $result = $this->db->query($sql);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
          return false;

        }
       
      }

      
  }

?>