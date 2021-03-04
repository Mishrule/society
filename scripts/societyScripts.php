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
            <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>Success: </strong>'. $society_name_Text.' Society Created Successfully.</p>
            </div>
            ';
        }else{
            echo '
            <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>ERROR!</strong> Failed to Create Society '.mysqli_error($con).'</p>
            </div>
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
            <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>Success: </strong>'. $createOperations.' Created Successfully.</p>
            </div>
            ';
        }else{
            echo '
            <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
					<span class="icon-sc-cl" aria-hidden="true">&times;</span>
				</button>
                <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                <p class="message-alert-none"><strong>ERROR!</strong> Failed to Create Society '.mysqli_error($con).'</p>
            </div>
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
                 <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                     <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                         <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                     </button>
                     <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
                     <p class="message-alert-none"><strong>Success: </strong>'. $createGroupings.' Created Successfully.</p>
                 </div>
                 ';
             }else{
                 echo '
                 <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                     <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                         <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                     </button>
                     <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                     <p class="message-alert-none"><strong>ERROR!</strong> Failed to Create Society '.mysqli_error($con).'</p>
                 </div>
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
             <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                 <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                     <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                 </button>
                 <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
                 <p class="message-alert-none"><strong>Success: </strong>'. $createYear.' Created Successfully.</p>
             </div>
             ';
         }else{
             echo '
             <div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
                 <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                     <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                 </button>
                 <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                 <p class="message-alert-none"><strong>ERROR!</strong> Failed to Create Society '.mysqli_error($con).'</p>
             </div>
             ';
         }
    }
?>