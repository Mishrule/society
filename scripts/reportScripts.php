<?php 
    require_once('db.php');
    $reportMSG = '';
    // $reportRow = '';
    if(isset($_GET['reportMonth'])){
        
        $reportMonth = mysqli_real_escape_string($con, $_GET['reportMonth']);
        $reportYear = mysqli_real_escape_string($con, $_GET['reportYear']);
        $reportMSG = '
        <table class="table table2excel table2excel_with_colors">
        <thead>
            <tr>
                <th colspan="11">
                    <div align="center">THE METHODIST CHURCH GHANA</div>
                </th>
            </tr>
            <tr>
                <th colspan="11">
                    <div align="center">Monthly Operating Statistical Returns (Society)</div>
                </th>
            </tr>
        </thead>
        <tbody>

        ';
        
        $reportSQL = "SELECT * FROM group_activity WHERE group_month='$reportMonth' AND group_year='$reportYear'";
        $reportOperationSQL = "SELECT * FROM operationtype WHERE month='$reportMonth' AND years='$reportYear'";
        $reportResult = mysqli_query($con, $reportSQL);
        $reportOperationResult = mysqli_query($con, $reportOperationSQL);
        
        if(mysqli_num_rows($reportResult)>0 && mysqli_num_rows($reportOperationResult)>0){
            $reportRow = mysqli_fetch_array($reportResult);
            
                        
            $reportMSG .= '
            <tr>
                <td></td>
                <td>Month</td>
                <th colspan="3">'. $reportRow['group_month'].'</th>
                <td>Year</td>
                <th colspan="5">'.$reportRow['group_year'].'</th>
            </tr>
            <tr>
                <td></td>
                <td>Diocese</td>
                <th>...........</th>
                <td>Circuit</td>
                <th>............</th>
                <td>Society</td>
                <th colspan="2">..................</th>
                <td>Location</td>
                <th colspan="2">...................</th>

            </tr>
            <tr>
                <th colspan="5">
                    <div align="center">Database</div>
                </th>
                <th>Males</th>
                <th>Females</th>
                <th>Total</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            ';
            $groupCount = 1;
            while ($reportRowGroup = mysqli_fetch_array($reportResult)){
            $reportMSG .= '

                <tr>
                    <td>'.$groupCount.'</td>
                    <td colspan="4">'.$reportRowGroup['groupname'].'</td>
                    <td>'.$reportRowGroup['male'].'</td>
                    <td>'.$reportRowGroup['female'].'</td>
                    <td>'.$reportRowGroup['group_total'].'</td>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                ';
                $groupCount++;
            }
            $reportMSG .='
            <tr>
                <td></td>
                <th colspan="4">
                    <div align="center">Operations</div>
                </th>
                <th colspan="4">
                    <div align="center">Numbers</div>
                </th>
                <th></th>
                <th></th>

            </tr>
            <tr>
                <th></th>
                <th colspan="4"></th>
                <th>Week1</th>
                <th>Week2</th>
                <th>Week3</th>
                <th>Week4</th>
                <th>Week5</th>
                <th>Totals</th>
            </tr>
            ';
            $reportOperationCount =1;
            while ($reportOperationRow = mysqli_fetch_array($reportOperationResult)){
                $reportMSG .= '
                <tr>
                    <td>'.$reportOperationCount.'</td>
                    <td colspan="4">'.$reportOperationRow['operationtype'].'</td>
                    <td>'.$reportOperationRow['week1'].'</td>
                    <td>'.$reportOperationRow['week2'].'</td>
                    <td>'.$reportOperationRow['week3'].'</td>
                    <td>'.$reportOperationRow['week4'].'</td>
                    <td>'.$reportOperationRow['week5'].'</td>
                    <td>'.$reportOperationRow['total'].'</td>
                </tr>
            ';
            $reportOperationCount++;
            }
            $reportMSG .= 
            '
            <tr>
                <th colspan="11">
                    <div align="center">Measure What Matters</div>
                </th>
            </tr>
            <tr>
                <td></td>
                <td colspan="3">Comment</td>
                <td colspan="7">................</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="3">Dated</td>
                <td colspan="2">................</td>
                <td colspan="2">Dated</td>
                <td colspan="3">...............</td>

            </tr>
            <tr>
                <td></td>
                <td colspan="3">Society Statistician</td>
                <td colspan="2">.......................</td>
                <td colspan="2">Society Steward</td>
                <td colspan="3">....................</td>

            </tr>
            <tr>
                <td></td>
                <td colspan="3">Contact</td>
                <td colspan="2">....................</td>
                <td colspan="2">Contact</td>
                <td colspan="3">..................</td>

            </tr>
            <tr>
                <td></td>
                <td colspan="3">Signature</td>
                <td colspan="2">................</td>
                <td colspan="2">Signature</td>
                <td colspan="3">................</td>

            </tr>
            <tr>
                <td></td>
                <td colspan="3">Dated</td>
                <td colspan="2">................</td>
                <td colspan="2">Contact</td>
                <td colspan="3">................</td>

            </tr>
            <tr>
                <td></td>
                <td colspan="3">Minister-In-Charge</td>
                <td colspan="2">......................</td>
                <td colspan="2">Signature</td>
                <td colspan="3">................</td>

            </tr>
            ';
        }else{
            $reportMSG .= '
                <tr>
                    <td colspan="11">
                        <marquee>No Records Found '.mysqli_error($con).'</marquee>
                    </td>
                </tr>
            ';
        }
        $reportMSG .= '
            </tbody>
            </table>
        ';
        echo $reportMSG;
    }
?>

