<?php
# This will keep an error/status log of all steps in the process
$serverLog;

# Default IP Address of OOBM controller on system
$racIP = "10.10.10.10";

# Default User account of administrative user on system
$racUser= "Ronney";

# Default Password of administrative user on system
$racPass = "1234";

# Final IP Address of OOBM controller on system after configuration
$finalRacIP = "192.168.1.1";

# Final Subnet Mask of OOBM controller on system after configuration
$finalRacMask = "100.100.100.100";

# Final Subnet Mask of OOBM controller on system after configuration
$finalRacGW;

# Final User account of administrative user on system after configuration
$finalRacUser = "rmeade"; 

# Default Password of administrative user on system
$finalRacPass = "12345"; 

# True/False if system is or is not going to be a hypervisor.
$isHypervisor = true; 

# number of virtual machines being deployed (IF $isHypervisor is TRUE)
$numVms = "5";

echo "<pre>";
var_dump($_POST['interests']);
exit;

$_POST['interests'];  
     foreach($_POST['interests'] as $interest) {
     echo $interest;
}

$flavours = implode(',', $flavours);

?>