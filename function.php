<?php 

function register(){
require 'db.php';
if (isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$civilstatus = $_POST['civilstatus'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$emailaddress = $_POST['emailaddress'];
$mobilenumber = $_POST['mobilenumber'];
$age = $_POST['age'];
$birthday = $_POST['birthday'];
$birthplace = $_POST['birthplace'];
$homeaddress = $_POST['homeaddress'];
$company = $_POST['company'];
$department = $_POST['department'];
$jobposition = $_POST['jobposition'];
$idnumber = $_POST['idnumber'];
$companyemail = $_POST['companyemail'];
$employmenttype = $_POST['employmenttype'];
$employmentstatus = $_POST['employmentstatus'];
$datehired = $_POST['datehired'];
$dateregistered = $_POST['dateregistered'];
$tinnumber = $_POST['tinnumber'];

$sql = 'INSERT INTO dqemp_tbl(first_name, middle_name, last_name, gender, civil_status, height, weight, email_address_personal, mobile_number, age, date_of_birth, place_of_birth, home_address, company, department, position, id_number, email_address_company, employment_type, employment_status, date_hired, date_registered, tin_number) VALUES(:firstname, :middlename, :lastname, :gender, :civilstatus, :height, :weight, :emailaddress, :mobilenumber, :age, :birthday, :birthplace, :homeaddress, :company, :department, :jobposition, :idnumber, :companyemail, :employmenttype, :employmentstatus, :datehired, :dateregistered, :tinnumber)';
$statement = $connection->prepare($sql);
  if ($statement->execute([':firstname' => $firstname, ':middlename' => $middlename, ':lastname' => $lastname, ':gender' => $gender, ':civilstatus' => $civilstatus, ':height' => $height, ':weight' => $weight, ':emailaddress' => $emailaddress, ':mobilenumber' => $mobilenumber, ':age' => $age, ':birthday' => $birthday, ':birthplace' => $birthplace, ':homeaddress' => $homeaddress, ':company' => $company, ':department' => $department, ':jobposition' => $jobposition, ':idnumber' => $idnumber, ':companyemail' => $companyemail, ':employmenttype' => $employmenttype, ':employmentstatus' => $employmentstatus, ':datehired' => $datehired, ':dateregistered' => $dateregistered, ':tinnumber' => $tinnumber])) {
   echo "<script>
            
        
        setTimeout(function() {
        swal({
            title: 'Successfully Added',
            text: '',
            type: 'success',
        }, function() {
            window.location = 'employees';
        });
    }, 10);
            </script>";
  }else{
 echo "\nPDO::errorInfo():\n";
    print_r($statement->errorInfo());
}
}
}


function reports(){
require 'db.php';
if (isset($_POST['submit22'])){
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$position = $_POST['position'];
$tinnumber = $_POST['tinnumber'];
$idnumber = $_POST['idnumber'];
$sss = $_POST['sss'];
$philhealth = $_POST['philhealth'];
$pagibig = $_POST['pagibig'];
$addons = $_POST['addons'];
$basicsalary = $_POST['basicsalary'];
$netpay = $_POST['netpay'];
$datefrom = $_POST['datefrom'];
$dateto = $_POST['dateto'];
$totaldeduction = $_POST['totaldeduction'];
$totalearnings = $_POST['totalearnings'];

$totaldeduction = $sss + $philhealth + $pagibig;
$netpay2 = $basicsalary + $addons - $totaldeduction;



$sql = 'INSERT INTO dqreports_tbl(employee_id, first_name, middle_name, last_name, tin_number, position, sss_contribution, philhealth, pagibig, add_ons, basic_salary, net_pay, salary_slip_from, salary_slip_to, total_deduction, total_earnings) VALUES(:idnumber, :firstname, :middlename, :lastname, :tinnumber, :position, :sss, :philhealth, :pagibig, :addons, :basicsalary, :netpay2, :datefrom, :dateto, :totaldeduction, :totalearnings)';
$statement = $connection->prepare($sql);
  if ($statement->execute([':idnumber' => $idnumber, ':firstname' => $firstname, ':middlename' => $middlename, ':lastname' => $lastname, ':tinnumber' => $tinnumber, ':position' => $position,':sss' => $sss,':philhealth' => $philhealth,':pagibig' => $pagibig,':addons' => $addons,':basicsalary' => $basicsalary,':netpay2' => $netpay2,':datefrom' => $datefrom, ':dateto' => $dateto, ':totaldeduction' => $totaldeduction, ':totalearnings' => $totalearnings])) {




   echo "<script>
            
        
        setTimeout(function() {
        swal({
            title: 'Successfully Added',
            text: '',
            type: 'success',
        }, function() {
            window.location = '../../employees';
        });
    }, 10);
            </script>";
  }else{
 echo "\nPDO::errorInfo():\n";
    print_r($statement->errorInfo());
}
}
}

function register_admin(){
 require "db.php";
if(isset($_POST['add-admin'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $hash = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
  $dqkeyword = $_POST['dqkeyword'];
  $keyhash = password_hash($dqkeyword, PASSWORD_BCRYPT, array('cost' => 12));
  $role = $_POST['role'];
  $phone = $_POST['phone'];

$sql = 'INSERT INTO dqadmin_tbl(Role, username, password, dq_keyword, phone) VALUES(:role, :username, :hash, :keyhash, :phone)';
$statement = $connection->prepare($sql);
  if ($statement->execute([':role' => $role, ':username' => $username, ':hash' => $hash, ':keyhash' => $keyhash, ':phone' => $phone])) {
       echo "<script>
            
        
        setTimeout(function() {
        swal({
            title: 'Successfully Added',
            text: '',
            type: 'success',
        }, function() {
            window.location = 'employees';
        });
    }, 10);
            </script>";
  }else{
 echo "\nPDO::errorInfo():\n";
    print_r($statement->errorInfo());
}

  }


}

function count_employees(){
  require "db.php";
  $sql = "SELECT count(*) FROM dqemp_tbl"; 
$result = $connection->prepare($sql); 
$result->execute(); 
$number_of_rows = $result->fetchColumn(); 
echo '
<table style="width: 100%;">
   <tbody>
      <tr>
        <td>Regular</td>
        <td>'.$number_of_rows.'</td>
      </tr>
    </tbody>
</table>
';
}
?>

