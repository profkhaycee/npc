<?php

use LDAP\Result;

function validate($txtInput){
    $txtInput = trim($txtInput);
    $txtInput = stripslashes($txtInput);
    $txtInput = strip_tags($txtInput);
    $txtInput = htmlspecialchars($txtInput);
  
    return $txtInput;
}

class Action{

    public $connect;

    public function __construct(){
        $this->connect = new mysqli('localhost', 'root', '','npc') or die("error in connection: ".$this->connect->connect_error);
    }

    public function login($statecode, $password){
        $stateCode = $this->connect->real_escape_string($statecode);
        $password = $this->connect->real_escape_string($password);

        $sql = "select * from users where state_code = '$stateCode' ";
        $result = $this->connect->query($sql) ;
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            if(password_verify($password, $row['password'])){
                echo "<script> window.location='../view/create.php';</script>";
            }else{
                echo "<script>alert('WRONG PASSWORD');window.location='../index.php';</script>";

            }
        }else{
            echo "<script>alert('THIS USER DOES NOT EXIST');window.location='../index.php';</script>";
        }

    }

    Public function registerUser($stateCode, $name, $email, $password){
        $name = $this->connect->real_escape_string($name);
        $stateCode = $this->connect->real_escape_string($stateCode);
        $email = $this->connect->real_escape_string($email);
        $password = $this->connect->real_escape_string($password);

        $query = "select * from users where state_code = '$stateCode' ";
        $result = $this->connect->query($query) ;
        if($result->num_rows > 0){
            echo "<script> 
            alert('This account already Exist ---- USE A DIFFERENT NYSC STATE CODE'); 
            window.location='../view/register.php';</script>";
        }else{

            $sql = "insert into users (name, state_code, email, password) values ('$name', '$stateCode','$email', '$password') "; 
            if($this->connect->query($sql)){
                echo "<script>alert('ACCOUNT SUCCESSFULLY CREATED!!!'); window.location='../index.php';</script>";
            }else{
                echo "<script>alert('ERROR IN ACCOUNT CREATION \n\n SOMETHING WENT WRONG!!!'); window.location='../view/register.php';</script>";

            }
        }

    }

    public function createState($name){
        $name = $this->connect->real_escape_string($name);
        $query = "select * from states where name = '$name' ";
        $result = $this->connect->query($query) ;
        if($result->num_rows > 0){
            echo "<script> 
            alert('This state already Exist'); 
            window.location='../view/create.php';</script>";
        }else{
            $sql = "insert into states (name) values ('$name') "; 
            if($this->connect->query($sql)){
                echo "<script>alert('STATE CREATED!!!'); window.location='../view/create.php';</script>";
            }else{
                echo "<script>alert('ERROR IN CREATION ----- SOMETHING WENT WRONG!!!'); window.location='../view/create.php';</script>";

            }
        }

    }

    public function createLga($name, $state){
        $name = $this->connect->real_escape_string($name);
        $state = $this->connect->real_escape_string($state);
        
        $query = "select * from lga where name = '$name' ";
        $result = $this->connect->query($query) ;
        if($result->num_rows > 0){
            echo "<script> 
            alert('This LGA already Exist'); 
            window.location='../view/create.php';</script>";
        }else{
            $sql = "insert into lga (name, state) values ('$name','$state') "; 
            if($this->connect->query($sql)){
                echo "<script>alert('LGA CREATED!!!'); window.location='../view/create.php';</script>";
            }else{
                echo "<script>alert('ERROR IN CREATION ----- SOMETHING WENT WRONG!!!'); window.location='../view/create.php';</script>";

            }
        }
    }

    public function createWard($name, $lga){
        $name = $this->connect->real_escape_string($name);
        $lga = $this->connect->real_escape_string($lga);
        
        $query = "select * from wards where name = '$name' ";
        $result = $this->connect->query($query) ;
        if($result->num_rows > 0){
            echo "<script> 
            alert('This ward already Exist'); 
            window.location='../view/create.php';</script>";
        }else{
            $sql = "insert into wards (name, lga) values ('$name','$lga') "; 
            if($this->connect->query($sql)){
                echo "<script>alert('WARD CREATED!!!'); window.location='../view/create.php';</script>";
            }else{
                echo "<script>alert('ERROR IN CREATION ----- SOMETHING WENT WRONG!!!'); window.location='../view/create.php';</script>";

            }
        }
    }

    public function createCitizen($name, $gender, $phone, $address, $ward){
        $name = $this->connect->real_escape_string($name);
        $gender = $this->connect->real_escape_string($gender);
        $phone = $this->connect->real_escape_string($phone);
        $address = $this->connect->real_escape_string($address);
        $ward = $this->connect->real_escape_string($ward);
        
        $query = "select * from citizens where phone = '$phone' ";
        $result = $this->connect->query($query) ;
        if($result->num_rows > 0){
            echo "<script> 
            alert('This CITIZEN already Exist'); 
            window.location='../view/create.php';</script>";
        }else{
            $sql = "insert into citizens (name, gender, phone, address, ward) values ('$name','$gender', '$phone', '$address', '$ward') "; 
            if($this->connect->query($sql)){
                echo "<script>alert('CITIZEN CREATED!!!'); window.location='../view/create.php';</script>";
            }else{
                echo "<script>alert('ERROR IN CREATION ----- SOMETHING WENT WRONG!!!'); window.location='../view/create.php';</script>";

            }
        }
    }

    public function fetchAll($table){
        $string =" ";
        $query = "select * from $table ";
        $result = $this->connect->query($query) ;
        if($result->num_rows > 0){
            while( $row = $result->fetch_assoc()){
                $string .= "<option value='".$row['id']."'>".$row['name']."</option>";
            }
            return $string;
        }
        

    }

    public function Report($report){
        $string =" ";
        $query = "select * from $report ";
        $result = $this->connect->query($query) ;
        if($result->num_rows > 0){
            echo "<h3> ". $report." Report </h3>";
            echo "<center><table class='table table-dark table-striped table-hover mx-auto'>
            <thead>
              <tr>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>
            ";
            while( $row = $result->fetch_assoc()){
                echo "<tr> <td>". $row['name']."</td></tr>";
            }
            echo "  
            </tbody>
          </table> <center>";
            
        }
    }

    public function citizenReport($report){
        $query = "select * from $report ";
        $result = $this->connect->query($query) ;
        if($result->num_rows > 0){
            echo "<h3> ". $report." Report </h3>";
            echo "<center><table class='table table-dark table-striped table-hover mx-auto'>
            <thead>
              <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Address</th>
              </tr>
            </thead>
            <tbody>
            ";
            while( $row = $result->fetch_assoc()){
                echo "<tr> 
                <td>". $row['name']."</td>
                <td>". $row['gender']."</td>
                <td>". $row['phone']."</td>
                <td>". $row['address']."</td>                
                
                </tr>";
                
            }
            echo "  
            </tbody>
          </table> <center>";
            
        }
    }

    public function userReport($report){
        $query = "select * from $report ";
        $result = $this->connect->query($query) ;
        if($result->num_rows > 0){
            echo "<h3> ". $report." Report </h3>";
            echo "<center><table class='table table-dark table-striped table-hover mx-auto'>
            <thead>
              <tr>
                <th>Name</th>
                <th>State Code</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
            ";
            while( $row = $result->fetch_assoc()){
                echo "<tr> 
                <td>". $row['name']."</td>
                <td>". $row['state_code']."</td>
                <td>". $row['email']."</td>
                
                </tr>";
                
            }
            echo "  
            </tbody>
          </table> <center>";
            
        }
    }

}

?>