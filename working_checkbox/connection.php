<?php
include 'config.php';
include 'checkbox_value.php';
require_once 'config.php';
$dex = $_POST['dex'];  

$query = "SELECT * from serverInfo where dex = '$dex'";

try{
    $statement = $conn->query($query);

    echo "<table border='1'>    
          <tr>    
            <td>dex</td> 
            <td>racIP</td>    
            <td>racUser</td>    
            <td>racPass</td>    
            <td>finalRacIP</td>    
            <td>finalRacMask</td>    
            <td>finalRacGW</td>    
            <td>finalRacUser</td>    
            <td>finalRacPass</td> 
            <td>isHypervisor</td>  
            <td>numVms</td>  
          </tr>"; 

    //if you want to fetch records as an array indexed 
    while ($result = $statement->fetch()){
      echo "<tr>";   
      echo "<td>" . $result['dex'] . "</td>"; 
      echo "<td>" . $result['racIP'] . "</td>"; 
      echo "<td>" . $result['racUser'] . "</td>"; 
      echo "<td>" . $result['racPass'] . "</td>"; 
      echo "<td>" . $result['finalRacIP'] . "</td>";     
      echo "<td>" . $result['finalRacMask'] . "</td>"; 
      echo "<td>" . $result['finalRacGW'] . "</td>";
      echo "<td>" . $result['finalRacUser'] . "</td>";
      echo "<td>" . $result['finalRacPass'] . "</td>"; 
      echo "<td>" . $result['isHypervisor'] . "</td>"; 
      echo "<td>" . $result['numVms'] . "</td>";
      echo "</tr>";  
    }
    $racIP = $result['racIP'];
    $racUser = $result['racUser'];
    $racPass = $result['racPass'];
    $finalRacIP = $result['finalRacIP'];
    $finalRacMask = $result['finalRacMask'];
    $finalRacGW = $result['finalRacGW'];
    $finalRacUser = $result['finalRacUser'];
    $finalRacPass = $result['finalRacPass'];
    $isHypervisor = $result['isHypervisor'];
    $numVms = $result['numVms'];
    echo "</table>"; 

} 
catch (PDOException $ex) {
    echo "Failed to retrieve record".$ex->getMessage(),
'enter code here';}
?>