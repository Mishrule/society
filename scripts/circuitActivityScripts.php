<?php 
        require_once('db.php');
        require_once('datetime.php');

             // =================== CIRCUIT GROUPINGS
    if(isset($_POST['saveFirstBTN'])){
        $christianCommunityMaleAlpha = mysqli_real_escape_string($con, $_POST['christianCommunityMaleAlpha']);
        $christianCommunityMaleTxt = mysqli_real_escape_string($con, $_POST['christianCommunityMaleTxt']);
        $christianCommunityMale = mysqli_real_escape_string($con, $_POST['christianCommunityMale']);
        $christianCommunityFemale = mysqli_real_escape_string($con, $_POST['christianCommunityFemale']);
        $christianCommunityTotal = mysqli_real_escape_string($con, $_POST['christianCommunityTotal']);

        $fullMemberMaleAlpha = mysqli_real_escape_string($con, $_POST['fullMemberMaleAlpha']);
        $fullMemberMaleTxt = mysqli_real_escape_string($con, $_POST['fullMemberMaleTxt']);
        $fullMemberMale = mysqli_real_escape_string($con, $_POST['fullMemberMale']);
        $fullMemberFemale = mysqli_real_escape_string($con, $_POST['fullMemberFemale']);
        $fullMemberTotal = mysqli_real_escape_string($con, $_POST['fullMemberTotal']);

        $juniorMemberMaleAlpha = mysqli_real_escape_string($con, $_POST['juniorMemberMaleAlpha']);
        $juniorMemberMaleTxt = mysqli_real_escape_string($con, $_POST['juniorMemberMaleTxt']);
        $juniorMemberMale = mysqli_real_escape_string($con, $_POST['juniorMemberMale']);
        $juniorMemberFemale = mysqli_real_escape_string($con, $_POST['juniorMemberFemale']);
        $juniorMemberTotal = mysqli_real_escape_string($con, $_POST['juniorMemberTotal']);

        $catechumensMaleAlpha = mysqli_real_escape_string($con, $_POST['catechumensMaleAlpha']);
        $catechumensMaleTxt = mysqli_real_escape_string($con, $_POST['catechumensMaleTxt']);
        $catechumensMale = mysqli_real_escape_string($con, $_POST['catechumensMale']);
        $catechumensFemale = mysqli_real_escape_string($con, $_POST['catechumensFemale']);
        $catechumensTotal = mysqli_real_escape_string($con, $_POST['catechumensTotal']);

        $adherentsMaleAlpha = mysqli_real_escape_string($con, $_POST['adherentsMaleAlpa']);
        $adherentsMaleTxt = mysqli_real_escape_string($con, $_POST['adherentsMaleTxt']);
        $adherentsMale = mysqli_real_escape_string($con, $_POST['adherentsMale']);
        $adherentsFemale = mysqli_real_escape_string($con, $_POST['adherentsFemale']);
        $adherentsTotal = mysqli_real_escape_string($con, $_POST['adherentsTotal']);

        $groupMonth = mysqli_real_escape_string($con, $_POST['month']);
        $groupYear = mysqli_real_escape_string($con, $_POST['year']);
    
        $christianCommunityMaleSQL = "INSERT INTO circuit_group VALUES('$christianCommunityMaleAlpha','$christianCommunityMaleTxt','$christianCommunityMale','$christianCommunityFemale','$christianCommunityTotal','$groupMonth','$groupYear')";

        $fullMemberMaleSQL = "INSERT INTO circuit_group VALUES('$fullMemberMaleAlpha','$fullMemberMaleTxt','$fullMemberMale','$fullMemberFemale','$fullMemberTotal','$groupMonth','$groupYear')";

        $juniorMemberMaleSQL = "INSERT INTO circuit_group VALUES('$juniorMemberMaleAlpha','$juniorMemberMaleTxt','$juniorMemberMale','$juniorMemberFemale','$juniorMemberTotal','$groupMonth','$groupYear')";

        $catechumensMaleSQL = "INSERT INTO circuit_group VALUES('$catechumensMaleAlpha','$catechumensMaleTxt','$catechumensMale','$catechumensFemale','$catechumensTotal','$groupMonth','$groupYear')";

        $adherentsMaleSQL = "INSERT INTO circuit_group VALUES('$adherentsMaleAlpha','$adherentsMaleTxt','$adherentsMale','$adherentsFemale','$adherentsTotal','$groupMonth','$groupYear')";

        $christianCommunityMaleResult = mysqli_query($con, $christianCommunityMaleSQL);
        $fullMemberMaleResult = mysqli_query($con, $fullMemberMaleSQL);
        $juniorMemberMaleResult = mysqli_query($con, $juniorMemberMaleSQL);
        $catechumensMaleResult = mysqli_query($con, $catechumensMaleSQL);
        $adherentsMaleResult = mysqli_query($con, $adherentsMaleSQL);
                 
       
        if($christianCommunityMaleResult && $fullMemberMaleResult && $juniorMemberMaleResult && $catechumensMaleResult && 
        $adherentsMaleResult){
            echo '
            Success: records Saved Successfully.
            
            ';
        }else{
            echo '
             ERROR! Failed to Save '.mysqli_error($con).'         
            ';
        }
    }

    if(isset($_POST['month'])){
        $groupArray = array();
        $month = mysqli_real_escape_string($con, $_POST['month']);
        $year = mysqli_real_escape_string($con, $_POST['year']);

        $groupFetchSQLA = "SELECT * FROM circuit_group WHERE grp_month='$month' AND grp_year='$year' AND grp_alpha = 'A'";
        $groupFetchSQLB = "SELECT * FROM circuit_group WHERE grp_month='$month' AND grp_year='$year' AND grp_alpha = 'B'";
        $groupFetchSQLC = "SELECT * FROM circuit_group WHERE grp_month='$month' AND grp_year='$year' AND grp_alpha = 'C'";
        $groupFetchSQLD = "SELECT * FROM circuit_group WHERE grp_month='$month' AND grp_year='$year' AND grp_alpha = 'D'";
        $groupFetchSQLE = "SELECT * FROM circuit_group WHERE grp_month='$month' AND grp_year='$year' AND grp_alpha = 'E'";

        $groupFetchResultA = mysqli_query($con, $groupFetchSQLA);
        $groupFetchResultB = mysqli_query($con, $groupFetchSQLB);
        $groupFetchResultC = mysqli_query($con, $groupFetchSQLC);
        $groupFetchResultD = mysqli_query($con, $groupFetchSQLD);
        $groupFetchResultE = mysqli_query($con, $groupFetchSQLE);

        $groupFetchRowA = mysqli_fetch_array($groupFetchResultA);
        $groupFetchRowB = mysqli_fetch_array($groupFetchResultB);
        $groupFetchRowC = mysqli_fetch_array($groupFetchResultC);
        $groupFetchRowD = mysqli_fetch_array($groupFetchResultD);
        $groupFetchRowE = mysqli_fetch_array($groupFetchResultE);

        $groupArray['christain_male']=$groupFetchRowA['grp_male'];
        $groupArray['christain_female']=$groupFetchRowA['grp_females'];
        $groupArray['christain_total']=$groupFetchRowA['grp_total'];

        $groupArray['full_male']=$groupFetchRowB['grp_male'];
        $groupArray['full_female']=$groupFetchRowB['grp_females'];
        $groupArray['full_total']=$groupFetchRowB['grp_total'];

        $groupArray['junior_male']=$groupFetchRowC['grp_male'];
        $groupArray['junior_female']=$groupFetchRowC['grp_females'];
        $groupArray['junior_total']=$groupFetchRowC['grp_total'];

        $groupArray['catechumens_male']=$groupFetchRowD['grp_male'];
        $groupArray['catechumens_female']=$groupFetchRowD['grp_females'];
        $groupArray['catechumens_total']=$groupFetchRowD['grp_total'];

        $groupArray['adherents_male']=$groupFetchRowE['grp_male'];
        $groupArray['adherents_female']=$groupFetchRowE['grp_females'];
        $groupArray['adherents_total']=$groupFetchRowE['grp_total'];

        echo json_encode($groupArray);
       
    }

                 // =================== UPDATE GROUPINGS
    if(isset($_POST['addMoreBTN'])){
        $u_christianCommunityMaleAlpha = mysqli_real_escape_string($con, $_POST['u_christianCommunityMaleAlpha']);
        $u_christianCommunityMaleTxt = mysqli_real_escape_string($con, $_POST['u_christianCommunityMaleTxt']);
        $u_christianCommunityMale = mysqli_real_escape_string($con, $_POST['u_christianCommunityMale']);
        $u_christianCommunityFemale = mysqli_real_escape_string($con, $_POST['u_christianCommunityFemale']);
        $u_christianCommunityTotal = mysqli_real_escape_string($con, $_POST['u_christianCommunityTotal']);
            
        $u_fullMemberMaleAlpha = mysqli_real_escape_string($con, $_POST['u_fullMemberMaleAlpha']);
        $u_fullMemberMaleTxt = mysqli_real_escape_string($con, $_POST['u_fullMemberMaleTxt']);
        $u_fullMemberMale = mysqli_real_escape_string($con, $_POST['u_fullMemberMale']);
        $u_fullMemberFemale = mysqli_real_escape_string($con, $_POST['u_fullMemberFemale']);
        $u_fullMemberTotal = mysqli_real_escape_string($con, $_POST['u_fullMemberTotal']);
            
        $u_juniorMemberMaleAlpha = mysqli_real_escape_string($con, $_POST['u_juniorMemberMaleAlpha']);
        $u_juniorMemberMaleTxt = mysqli_real_escape_string($con, $_POST['u_juniorMemberMaleTxt']);
        $u_juniorMemberMale = mysqli_real_escape_string($con, $_POST['u_juniorMemberMale']);
        $u_juniorMemberFemale = mysqli_real_escape_string($con, $_POST['u_juniorMemberFemale']);
        $u_juniorMemberTotal = mysqli_real_escape_string($con, $_POST['u_juniorMemberTotal']);
            
        $u_catechumensMaleAlpha = mysqli_real_escape_string($con, $_POST['u_catechumensMaleAlpha']);
        $u_catechumensMaleTxt = mysqli_real_escape_string($con, $_POST['u_catechumensMaleTxt']);
        $u_catechumensMale = mysqli_real_escape_string($con, $_POST['u_catechumensMale']);
        $u_catechumensFemale = mysqli_real_escape_string($con, $_POST['u_catechumensFemale']);
        $u_catechumensTotal = mysqli_real_escape_string($con, $_POST['u_catechumensTotal']);
            
        $u_adherentsMaleAlpha = mysqli_real_escape_string($con, $_POST['u_adherentsMaleAlpa']);
        $u_adherentsMaleTxt = mysqli_real_escape_string($con, $_POST['u_adherentsMaleTxt']);
        $u_adherentsMale = mysqli_real_escape_string($con, $_POST['u_adherentsMale']);
        $u_adherentsFemale = mysqli_real_escape_string($con, $_POST['u_adherentsFemale']);
        $u_adherentsTotal = mysqli_real_escape_string($con, $_POST['u_adherentsTotal']);
            
        $u_groupMonth = mysqli_real_escape_string($con, $_POST['u_month']);
        $u_groupYear = mysqli_real_escape_string($con, $_POST['u_year']);
                
        $u_christianCommunityMaleSQL = "UPDATE circuit_group  SET grp_male='$u_christianCommunityMale', grp_females='$u_christianCommunityFemale', grp_total='$u_christianCommunityTotal' WHERE grp_alpha='$u_christianCommunityMaleAlpha' AND grp_database='$u_christianCommunityMaleTxt' AND grp_month='$u_groupMonth' AND grp_year='$u_groupYear'";

        $u_fullMemberMaleSQL = "UPDATE circuit_group  SET grp_male='$u_fullMemberMale', grp_females='$u_fullMemberFemale', grp_total='$u_fullMemberTotal' WHERE grp_alpha='$u_fullMemberMaleAlpha' AND grp_database='$u_fullMemberMaleTxt' AND grp_month='$u_groupMonth' AND grp_year='$u_groupYear'";

        $u_juniorMemberMaleSQL = "UPDATE circuit_group  SET grp_male='$u_juniorMemberMale', grp_females='$u_juniorMemberFemale', grp_total='$u_juniorMemberTotal' WHERE grp_alpha='$u_juniorMemberMaleAlpha' AND grp_database='$u_juniorMemberMaleTxt' AND grp_month='$u_groupMonth' AND grp_year='$u_groupYear'";

        $u_catechumensMaleSQL = "UPDATE circuit_group  SET grp_male='$u_catechumensMale', grp_females='$u_catechumensFemale', grp_total='$u_catechumensTotal' WHERE grp_alpha='$u_catechumensMaleAlpha' AND grp_database='$u_catechumensMaleTxt' AND grp_month='$u_groupMonth' AND grp_year='$u_groupYear'";

        $u_adherentsMaleSQL = "UPDATE circuit_group  SET grp_male='$u_adherentsMale', grp_females='$u_adherentsFemale', grp_total='$u_adherentsTotal' WHERE grp_alpha='$u_adherentsMaleAlpha' AND grp_database='$u_adherentsMaleTxt' AND grp_month='$u_groupMonth' AND grp_year='$u_groupYear'"; 

        $u_christianCommunityMaleResult = mysqli_query($con, $u_christianCommunityMaleSQL);
        $u_fullMemberMaleResult = mysqli_query($con, $u_fullMemberMaleSQL);
        $u_juniorMemberMaleResult = mysqli_query($con, $u_juniorMemberMaleSQL);
        $u_catechumensMaleResult = mysqli_query($con, $u_catechumensMaleSQL);
        $u_adherentsMaleResult = mysqli_query($con, $u_adherentsMaleSQL);
                 
       
        if($u_christianCommunityMaleResult && $u_fullMemberMaleResult && $u_juniorMemberMaleResult && $u_catechumensMaleResult && $u_adherentsMaleResult){
            echo '
            Success: records Updated Successfully.
            ';
        }else{
            echo '
             ERROR! Failed to Update '.mysqli_error($con).'         
            ';
        }
    }
 ?>