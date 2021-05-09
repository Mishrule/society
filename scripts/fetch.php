<?php 
    require_once('db.php');
    $msg = $op_msg='';
    if(isset($_POST['selectMonth'])){
        

        $selectMonth = mysqli_real_escape_string($con, $_POST['selectMonth']);
        $selectyear = mysqli_real_escape_string($con, $_POST['selectyear']);

        $selectSQL = "SELECT * FROM circuit_group WHERE grp_month='$selectMonth' AND grp_year='$selectyear'";
        $selectResult = mysqli_query($con, $selectSQL);
        if(mysqli_num_rows($selectResult)>0){
            // if(mysqli_fetch_array($selectResult)){
                $msg='
                
                    <button type="button" id="addMoreBTN" name="addMoreBTN" value="addMoreBTN" class="btn btn-success btn-sm">Add More</button>
               
                ';
            // }else{
              //  $msg='
                
                 //  <!-- //<button type="button" id="saveFirstBTN" name="saveFirstBTN" value="saveFirstBTN" class="btn btn-primary btn-sm">Save First Entry</button> -->
               
             //   ';
            // }
            
        }else{
            $msg= '
                
                    <button type="button" id="saveFirstBTN" name="saveFirstBTN" value="saveFirstBTN" class="btn btn-primary btn-sm">Save First Entry</button>
               
            ';
        }
        echo $msg;
    }

    if(isset($_POST['op_selectMonth'])){
        

        $op_selectMonth = mysqli_real_escape_string($con, $_POST['op_selectMonth']);
        $op_selectyear = mysqli_real_escape_string($con, $_POST['op_selectyear']);

        $op_selectSQL = "SELECT * FROM circuit_operation_activity WHERE op_month='$op_selectMonth' AND op_year='$op_selectyear'";
        $op_selectResult = mysqli_query($con, $op_selectSQL);
        if(mysqli_num_rows($op_selectResult)>0){
            // if(mysqli_fetch_array($op_selectResult)){
                $op_msg='
                
                    <button type="button" id="addMoreBTN" name="addMoreBTN" value="addMoreBTN" class="btn btn-success btn-sm">Add More</button>
               
                ';
            // }else{
              //  $op_msg='
                
                 //  <!-- //<button type="button" id="saveFirstBTN" name="saveFirstBTN" value="saveFirstBTN" class="btn btn-primary btn-sm">Save First Entry</button> -->
               
             //   ';
            // }
            
        }else{
            $op_msg= '
                
                    <button type="button" id="saveFirstBTN" name="saveFirstBTN" value="saveFirstBTN" class="btn btn-primary btn-sm">Save First Entry</button>
               
            ';
        }
        echo $op_msg;
    }
?>