<?php
# This will keep an error/status log of all steps in the process
$serverLog;

# Default IP Address of OOBM controller on system
$racIP ;
settype($racIP, "string");

# Default User account of administrative user on system
$racUser;
settype($racUser, "string");

# Default Password of administrative user on system
$racPass;
settype($racPass, "string");

# Final IP Address of OOBM controller on system after configuration
$finalRacIP;
settype($finalRacIP, "string");

# Final Subnet Mask of OOBM controller on system after configuration
$finalRacMask;
settype($finalRacMask, "string");

# Final Subnet Mask of OOBM controller on system after configuration
$finalRacGW;
settype($finalRacGW, "string");

# Final User account of administrative user on system after configuration
$finalRacUser; 
settype($finalRacUser, "string");

# Default Password of administrative user on system
$finalRacPass; 
settype($finalRacPass, "string");

# True/False if system is or is not going to be a hypervisor.
$isHypervisor;
settype($isHypervisor, "string");

# number of virtual machines being deployed (IF $isHypervisor is TRUE)
$numVms;
settype($numVms, "integer");

if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['check_list']);
echo "You have selected following ".$checked_count." option(s): <br/>";
// Loop to store and display values of individual checked checkbox.
$_POST['check_list'];
array("racIP"=>$racIP, "racUser" => $racUser, "racPass"=>$racPass, "finalRacIP" => $finalRacIP, "finalRacMask"=> $finalRacMask, "finalRacGW"=> $finalRacGW,"finalRacUser"=> $finalRacUser ,"finalRacPass" => $finalRacPass, "isHypervisor" => $isHypervisor, "numVms" => $numVms);
 // array(10) {
  //["check_list"]=>
  //array(10) {
    //[0]=> racIP
    //[1]=> racUser
    ///[2]=> racPass
    //[3]=> racPass
    //[4]=> finalRacIP
    //[5]=> finalRacMask
    //[6]=> finalRacGW
    //[7]=> finalRacUser
    //[8]=> finalRacPass
    ////[9]=> isHypervisor
    //[10]=>numVms
 // }
  //};
 if (isset($_POST['check_list']))
 {
     //
 }

$check_list = ($_POST["check_list"]);
echo "<pre>";
var_dump($_POST['check_list']);
exit;
foreach($_POST['check_list'] as $check_list) {
$check_list = implode(',', $check_list);
echo "<p>".$check_list ."</p>";
}
echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
}
else{
echo "<b>Please Select Atleast One Option.</b>";
}
}
?>
