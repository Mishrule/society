<?php
    require_once('db.php');
    require_once('datetime.php');

    // =================== CREATE SOCIETY
    if(isset($_POST['sent_BTN'])){
        $society_name_Text = mysqli_real_escape_string($con, $_POST['society_name_Text']);
        $circuit_Text = mysqli_real_escape_string($con, $_POST['circuit_Text']);
        $location_Text = mysqli_real_escape_string($con, $_POST['location_Text']);

        $societySQL = "INSERT INTO society VALUES('','$society_name_Text','$circuit_Text','$location_Text','$DateTime')";

        $societyResult = mysqli_query($con, $societySQL);
        if($societyResult){
            echo '
                Success: '. $society_name_Text.' Society Created Successfully.</p>
           
            ';
        }else{
            echo '
                ERROR! Failed to Create Society '.mysqli_error($con).'
            ';
        }
    }

    // =================== CREATE OPERATIONS
    if(isset($_POST['createOperationBTN'])){
        
       $createOperations = mysqli_real_escape_string($con, $_POST['createOperations']);

        $operationsSQL = "INSERT INTO operations VALUES('','$createOperations','$DateTime')";

        $operationsResult = mysqli_query($con, $operationsSQL);
        if($operationsResult){
            echo '
            Success: '. $createOperations.' Created Successfully.</p>
            ';
        }else{
            echo '
            ERROR! Failed to Create Operations '.mysqli_error($con).'
            ';
        }
    }

        // =================== CREATE GROUPINGS
        if(isset($_POST['createGroupingBTN'])){
        
            $createGroupings = mysqli_real_escape_string($con, $_POST['createGroupings']);
     
             $GroupingsSQL = "INSERT INTO groupings VALUES('','$createGroupings','$DateTime')";
     
             $GroupingsResult = mysqli_query($con, $GroupingsSQL);
             if($GroupingsResult){
                 echo '
                 Success: '. $createGroupings.' Created Successfully.</p>
                 
                 ';
             }else{
                 echo '
                 ERROR! Failed to Create Groupings '.mysqli_error($con).'
                 ';
             }
         }

    // =================== CREATE YEAR
    if(isset($_POST['createYearBTN'])){
        

        $createYear = mysqli_real_escape_string($con, $_POST['createYear']);
 
         $yearSQL = "INSERT INTO years VALUES('','$createYear','$DateTime')";
 
         $yearResult = mysqli_query($con, $yearSQL);
         if($yearResult){
             echo '
             Success: '. $createYear.'  Created Successfully.</p>
             
             ';
         }else{
             echo '
             ERROR! Failed to Create Year '.mysqli_error($con).'
             ';
         }
    }
?>