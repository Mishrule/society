<?php include_once('../scripts/db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<?php include('inc/head.php'); ?>

<body class="">
    <div class="wrapper ">
        <?php include('inc/aside.php'); ?>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Log Activity - Basic Groups</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">

                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">

                            </li>

                            <?php include('inc/settings.php'); ?>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Log Activity - Basic Groups</h5>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <form>
                                    <!-- Content here -->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group">
                                                <select name="month" id="month" class="form-control">
                                                    <option value="None">Select Month</option>
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <select name="year" id="year" class="form-control">

                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                                <option value="2032">2032</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12">

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
                                                    <!-- <tr>
                                                        <td></td>
                                                        <td>Month</td>
                                                        <th colspan="3"><span id="circuitMonth"></span></th>
                                                        <td>Year</td>
                                                        <th colspan="5"><span id="circuitYear"></span></th>
                                                    </tr> -->
                                                    <!-- <tr>
                                                        <td></td>
                                                        <td>Diocese</td>
                                                        <th>........</th>
                                                        <td>Circuit</td>
                                                        <th>........</th>
                                                        <td>Society</td>
                                                        <th colspan="2">.......</th>
                                                        <td>Location</td>
                                                        <th colspan="2">........</th>

                                                    </tr> -->
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
                                                    <tr>
                                                        <td id="christianCommunityMaleAlpha">A</td>
                                                        <td colspan="4" id="christianCommunityMaleTxt">Christian Community</td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="christianCommunityMale" name="christianCommunityMale" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="christianCommunityFemale" name="christianCommunityFemale" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="christianCommunityTotal" name="christianCommunityTotal" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td id="fullMemberMaleAlpha">B</td>
                                                        <td colspan="4" id="fullMemberMaleTxt">Full Members</td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="fullMemberMale" name="fullMemberMale" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="fullMemberFemale" name="fullMemberFemale" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="fullMemberTotal" name="fullMemberTotal" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td id="juniorMemberMaleAlpha">C</td>
                                                        <td colspan="4" id="juniorMemberMaleTxt">Junior members</td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="juniorMemberMale" name="juniorMemberMale" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="juniorMemberFemale" name="juniorMemberFemale" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="juniorMemberTotal" name="juniorMemberTotal" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td id="catechumensMaleAlpha">D</td>
                                                        <td colspan="4" id="catechumensMaleTxt">Catechumens</td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="catechumensMale" name="catechumensMale" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="catechumensFemale" name="catechumensFemale" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="catechumensTotal" name="catechumensTotal" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td id="adherentsMaleAlpa">E</td>
                                                        <td colspan="4" id="adherentsMaleTxt">Adherents</td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="adherentsMale" name="adherentsMale" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="adherentsFemale" name="adherentsFemale" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="number" id="adherentsTotal" name="adherentsTotal" class="form-control" value="0">

                                                            </div>

                                                        </td>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                            <div align="center">
                                                <!-- <button type="button" id="saveFirstBTN" name="saveFirstBTN" value="saveFirstBTN" class="btn btn-primary btn-sm">Save First Entry</button>
                                                <button type="button" id="addMoreBTN" name="addMoreBTN" value="addMoreBTN" class="btn btn-success btn-sm">Add More</button> -->
                                                <!-- <button type="button" id="exportToExcel" class="btn btn-primary btn-sm">Export Excel</button> -->
                                                <div id="showBTN"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <?php include('inc/footer.php'); ?>

        </div>
    </div>
    <!--   Core JS Files   -->
    <?php include('inc/footerjs.php'); ?>
</body>

</html>
<script>
    $(document).ready(function() {
        var christain_male = '';
            var christain_female = '';
            var christain_total = '';

            var full_male = '';
            var full_female = '';
            var full_total = '';

            var junior_male = '';
            var junior_female = '';
            var junior_total = '';

            var catechumens_male = '';
            var catechumens_female = '';
            var catechumens_total = '';

            var adherents_male = '';
            var adherents_female = '';
            var adherents_total = '';

        function showNotification(from, align, data) {
            color = 'primary';

            $.notify({
                icon: "nc-icon nc-bell-55",
                message: data

            }, {
                type: color,
                timer: 8000,
                placement: {
                    from: from,
                    align: align
                }
            });
        }


        $('#month').change(function() {
            var selectMonth = $(this).val();
            var selectyear = $('#year').val();
            if ($(this).val() == "None") {
                alert("Please Select Month");
                $('#saveFirstBTN').attr('disabled', true);
                $('#addMoreBTN').attr('disabled', true);
            } else {
                $.ajax({
                    url: '../scripts/fetch.php',
                    method: 'POST',
                    data: {
                        selectMonth,
                        selectyear
                    },
                    success: function(data) {
                        $('#showBTN').html(data);
                        $('#saveFirstBTN').attr('disabled', false);
                        $('#addMoreBTN').attr('disabled', false);
                    }
                })
            }
        })


        $(document).on('click', '#saveFirstBTN', function() {
           
            let christianCommunityMaleAlpha = $('#christianCommunityMaleAlpha').text();
            let christianCommunityMaleTxt = $('#christianCommunityMaleTxt').text();
            let christianCommunityMale = $('#christianCommunityMale').val();
            let christianCommunityFemale = $('#christianCommunityFemale').val();
            let christianCommunityTotal = $('#christianCommunityTotal').val();

            let fullMemberMaleAlpha = $('#fullMemberMaleAlpha').text();
            let fullMemberMaleTxt = $('#fullMemberMaleTxt').text();
            let fullMemberMale = $('#fullMemberMale').val();
            let fullMemberFemale = $('#fullMemberFemale').val();
            let fullMemberTotal = $('#fullMemberTotal').val();

            let juniorMemberMaleAlpha = $('#juniorMemberMaleAlpha').text();
            let juniorMemberMaleTxt = $('#juniorMemberMaleTxt').text();
            let juniorMemberMale = $('#juniorMemberMale').val();
            let juniorMemberFemale = $('#juniorMemberFemale').val();
            let juniorMemberTotal = $('#juniorMemberTotal').val();

            let catechumensMaleAlpha = $('#catechumensMaleAlpha').text();
            let catechumensMaleTxt = $('#catechumensMaleTxt').text();
            let catechumensMale = $('#catechumensMale').val();
            let catechumensFemale = $('#catechumensFemale').val();
            let catechumensTotal = $('#catechumensTotal').val();

            let adherentsMaleAlpa = $('#adherentsMaleAlpa').text();
            let adherentsMaleTxt = $('#adherentsMaleTxt').text();
            let adherentsMale = $('#adherentsMale').val();
            let adherentsFemale = $('#adherentsFemale').val();
            let adherentsTotal = $('#adherentsTotal').val();
            let month = $('#month').val();
            let year = $('#year').val();

            let saveFirstBTN = $('#saveFirstBTN').val();
            // alert(saveFirstBTN);


            $.ajax({
                url: '../scripts/circuitActivityScripts.php',
                method: 'POST',
                data: {
                    christianCommunityMaleAlpha,
                    christianCommunityMaleTxt,
                    christianCommunityMale,
                    christianCommunityFemale,
                    christianCommunityTotal,

                    fullMemberMaleAlpha,
                    fullMemberMaleTxt,
                    fullMemberMale,
                    fullMemberFemale,
                    fullMemberTotal,

                    juniorMemberMaleAlpha,
                    juniorMemberMaleTxt,
                    juniorMemberMale,
                    juniorMemberFemale,
                    juniorMemberTotal,

                    catechumensMaleAlpha,
                    catechumensMaleTxt,
                    catechumensMale,
                    catechumensFemale,
                    catechumensTotal,

                    adherentsMaleAlpa,
                    adherentsMaleTxt,
                    adherentsMale,
                    adherentsFemale,
                    adherentsTotal,

                    saveFirstBTN,
                    month,
                    year
                },
                success: function(data) {
                    // $('#activityGroupMessage').html(data);
                    showNotification('top', 'center', data);
                    $('#christianCommunityMale').val(0);
                    $('#christianCommunityFemale').val(0);
                    $('#christianCommunityTotal').val(0);
                    $('#fullMemberMale').val(0);
                    $('#fullMemberFemale').val(0);
                    $('#fullMemberTotal').val(0);
                    $('#juniorMemberMale').val(0);
                    $('#juniorMemberFemale').val(0);
                    $('#juniorMemberTotal').val(0);
                    $('#catechumensMale').val(0);
                    $('#catechumensFemale').val(0);
                    $('#catechumensTotal').val(0);
                    $('#adherentsMale').val(0);
                    $('#adherentsFemale').val(0);
                    $('#adherentsTotal').val(0);
                    window.location.reload();
                }
            });

        });
        // SET FROM DATA BASE
        $('#month').change(function() {
            let month = $('#month').val();
            let year = $('#year').val();
            $.ajax({
                url: '../scripts/circuitActivityScripts.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    month,
                    year
                },
                success: function(data) {
                    // console.log(data);
                    /*    // $('#activityGroupMessage').html(data);
                        // showNotification('top', 'center', data);
                        $('#christianCommunityMale').val(data);
                        $('#christianCommunityFemale').val(data);
                        $('#christianCommunityTotal').val(data);
                        $('#fullMemberMale').val(data);
                        $('#fullMemberFemale').val(data);
                        $('#fullMemberTotal').val(data);
                        $('#juniorMemberMale').val(data);
                        $('#juniorMemberFemale').val(data);
                        $('#juniorMemberTotal').val(data);
                        $('#catechumensMale').val(data);
                        $('#catechumensFemale').val(data);
                        $('#catechumensTotal').val(data);
                        $('#adherentsMale').val(data);
                        $('#adherentsFemale').val(data);
                        $('#adherentsTotal').val(data);
                        // window.location.reload();*/
                    christain_male = data.christain_male;
                    christain_female = data.christain_female;
                    christain_total = data.christain_total;
                    full_male = data.full_male;
                    full_female = data.full_female;
                    full_total = data.full_total;
                    junior_male = data.junior_male;
                    junior_female = data.junior_female;
                    junior_total = data.junior_total;
                    catechumens_male = data.catechumens_male;
                    catechumens_female = data.catechumens_female;
                    catechumens_total = data.catechumens_total;
                    adherents_male = data.adherents_male;
                    adherents_female = data.adherents_female;
                    adherents_total = data.adherents_total;

                }
            });
        });
// ADD MORE
        $(document).on('click', '#addMoreBTN', function() {

            let u_christianCommunityMaleAlpha = $('#christianCommunityMaleAlpha').text();
            let u_christianCommunityMaleTxt = $('#christianCommunityMaleTxt').text();
            let u_christianCommunityMale = parseInt($('#christianCommunityMale').val()) + parseInt(christain_male );
            let u_christianCommunityFemale = parseInt($('#christianCommunityFemale').val()) + parseInt(christain_female);
            let u_christianCommunityTotal = parseInt($('#christianCommunityTotal').val()) + parseInt(christain_total);

           
            // alert(christianCommunityMale);

            let u_fullMemberMaleAlpha = $('#fullMemberMaleAlpha').text();
            let u_fullMemberMaleTxt = $('#fullMemberMaleTxt').text();
            let u_fullMemberMale = parseInt($('#fullMemberMale').val()) + parseInt(full_male);
            let u_fullMemberFemale = parseInt($('#fullMemberFemale').val()) + parseInt(full_female);
            let u_fullMemberTotal = parseInt($('#fullMemberTotal').val()) + parseInt(full_total);

            let u_juniorMemberMaleAlpha = $('#juniorMemberMaleAlpha').text();
            let u_juniorMemberMaleTxt = $('#juniorMemberMaleTxt').text();
            let u_juniorMemberMale = parseInt($('#juniorMemberMale').val()) + parseInt(junior_male);
            let u_juniorMemberFemale = parseInt($('#juniorMemberFemale').val()) + parseInt(junior_female);
            let u_juniorMemberTotal = parseInt($('#juniorMemberTotal').val()) + parseInt(junior_total);

            let u_catechumensMaleAlpha = $('#catechumensMaleAlpha').text();
            let u_catechumensMaleTxt = $('#catechumensMaleTxt').text();
            let u_catechumensMale = parseInt($('#catechumensMale').val()) + parseInt(catechumens_male);
            let u_catechumensFemale = parseInt($('#catechumensFemale').val()) + parseInt(catechumens_female);
            let u_catechumensTotal = parseInt($('#catechumensTotal').val()) + parseInt(catechumens_total);

            let u_adherentsMaleAlpa = $('#adherentsMaleAlpa').text();
            let u_adherentsMaleTxt = $('#adherentsMaleTxt').text();
            let u_adherentsMale = parseInt($('#adherentsMale').val()) + parseInt(adherents_male);
            let u_adherentsFemale = parseInt($('#adherentsFemale').val()) + parseInt(adherents_female);
            let u_adherentsTotal =parseInt( $('#adherentsTotal').val()) + parseInt(adherents_total);
            let u_month = $('#month').val();
            let u_year = $('#year').val();

            let addMoreBTN = $('#addMoreBTN').val();
            // alert(saveFirstBTN);


            $.ajax({
                url: '../scripts/circuitActivityScripts.php',
                method: 'POST',
                data: {
                    u_christianCommunityMaleAlpha,
                    u_christianCommunityMaleTxt,
                    u_christianCommunityMale,
                    u_christianCommunityFemale,
                    u_christianCommunityTotal,

                    u_fullMemberMaleAlpha,
                    u_fullMemberMaleTxt,
                    u_fullMemberMale,
                    u_fullMemberFemale,
                    u_fullMemberTotal,

                    u_juniorMemberMaleAlpha,
                    u_juniorMemberMaleTxt,
                    u_juniorMemberMale,
                    u_juniorMemberFemale,
                    u_juniorMemberTotal,

                    u_catechumensMaleAlpha,
                    u_catechumensMaleTxt,
                    u_catechumensMale,
                    u_catechumensFemale,
                    u_catechumensTotal,

                    u_adherentsMaleAlpa,
                    u_adherentsMaleTxt,
                    u_adherentsMale,
                    u_adherentsFemale,
                    u_adherentsTotal,

                    addMoreBTN,
                    u_month,
                    u_year
                },
                success: function(data) {
                    // $('#activityGroupMessage').html(data);
                    showNotification('top', 'center', data);
                    $('#christianCommunityMale').val(0);
                    $('#christianCommunityFemale').val(0);
                    $('#christianCommunityTotal').val(0);
                    $('#fullMemberMale').val(0);
                    $('#fullMemberFemale').val(0);
                    $('#fullMemberTotal').val(0);
                    $('#juniorMemberMale').val(0);
                    $('#juniorMemberFemale').val(0);
                    $('#juniorMemberTotal').val(0);
                    $('#catechumensMale').val(0);
                    $('#catechumensFemale').val(0);
                    $('#catechumensTotal').val(0);
                    $('#adherentsMale').val(0);
                    $('#adherentsFemale').val(0);
                    $('#adherentsTotal').val(0);
                    window.location.reload();
                    console.log(data);
                }
            });

        });

        //   weeklyRecords();

        /*    // ================= Preview Activity
            function weeklyRecords() {
                let selectWeeklyRecord = "weeklyRecord";
                let selectWeeklyRecordYear = $('#previewyear').val();
                // alert(selectWeeklyRecordYear);
                $.ajax({
                    url: 'scripts/societyActivityScripts.php',
                    method: 'GET',
                    data: {
                        selectWeeklyRecord,
                        selectWeeklyRecordYear
                    },
                    success: function(data) {
                        $('#weeklyFetchRecord').html(data);

                    }
                });
            }*/

        /*  $('#previewmonth').change(function() {
              let selectWeeklyRecordmonth = $('#previewmonth').val();
              let selectWeeklyRecordYear = $('#previewyear').val();
              // alert(selectWeeklyRecordmonth);
              //  alert(selectWeeklyRecordYear);
              $.ajax({
                  url: 'scripts/societyActivityScripts.php',
                  method: 'GET',
                  data: {
                      selectWeeklyRecordmonth,
                      selectWeeklyRecordYear
                  },
                  success: function(data) {
                      $('#weeklyFetchRecord').html(data);

                  }
              });

          });*/

        /*  // ================= Gender Activity
          weeklyGenderRecords();

          function weeklyGenderRecords() {
              let selectGenderRecord = "weeklyRecord";
              let weeklyGenderRecordsYear = $('#previewyear').val();
              // alert(weeklyGenderRecordsYear);
              $.ajax({
                  url: 'scripts/societyActivityScripts.php',
                  method: 'GET',
                  data: {
                      selectGenderRecord,
                      weeklyGenderRecordsYear
                  },
                  success: function(data) {
                      $('#genderFetchRecord').html(data);

                  }
              });
          }*/

        // Change Month
        /* $('#previewmonth').change(function() {
             let selectWeeklyGendermonth = $('#previewmonth').val();
             let selectWeeklyGenderYear = $('#previewyear').val();
             // alert(selectWeeklyGendermonth);
             //  alert(selectWeeklyGenderYear);
             $.ajax({
                 url: 'scripts/societyActivityScripts.php',
                 method: 'GET',
                 data: {
                     selectWeeklyGendermonth,
                     selectWeeklyGenderYear
                 },
                 success: function(data) {
                     $('#genderFetchRecord').html(data);

                 }
             });

         });*/
    })
</script>

<div id="WarningModalalert" class="modal  modal-edu-general Customwidth-popup-WarningModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>

            </div>
            <div class="modal-body">
                <span class="educate-icon educate-success modal-check-pro information-icon-pro"></span>
                <div class="row">
                    <div id="fetchMessage"></div>
                    <h3>Update Operation</h3>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="updateMonth">Month</label>
                            <select name="updateMonth" id="updateMonth" class="form-control">
                                <option value="None">Select Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="updateYear">Year</label>
                            <select name="updateYear" id="updateYear" class="form-control">
                                <option value="None">Select Year</option>
                                <?php
                                $yearFetchDisplay = '';
                                $yearFetchSQL = "SELECT * FROM years ORDER BY year_created DESC";
                                $yearFetchResult = mysqli_query($con, $yearFetchSQL);

                                if (mysqli_num_rows($yearFetchResult) > 0) {
                                    while ($yearFetchRow = mysqli_fetch_array($yearFetchResult)) {
                                        $yearFetchDisplay .= '
                                    <option value="' . $yearFetchRow['years_year'] . '">' . $yearFetchRow['years_year'] . '</option>
                                  ';
                                    }
                                } else {
                                    $yearFetchDisplay .= '<option>No Year Created Yet</option>';
                                }

                                echo $yearFetchDisplay;
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="updateOperation">Operation</label>
                            <select name="updateOperation" id="updateOperation" class="form-control">
                                <option value="None">Select Operation</option>

                                <?php
                                $operationFetchDisplay = '';
                                $operationFetchSQL = "SELECT * FROM operations";
                                $operationFetchResult = mysqli_query($con, $operationFetchSQL);

                                if (mysqli_num_rows($operationFetchResult) > 0) {
                                    while ($operationFetchRow = mysqli_fetch_array($operationFetchResult)) {
                                        $operationFetchDisplay .= '
                                     
                                     <option value="' . $operationFetchRow['operation_name'] . '">' . $operationFetchRow['operation_name'] . '</option>
                                                                                ';
                                    }
                                } else {
                                    $operationFetchDisplay .= '<option>NO operation CREATED YET</option>';
                                }

                                echo $operationFetchDisplay;
                                ?>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label for="updateWeek1">Week 1</label>
                            <input name="updateWeek1" id="updateWeek1" type="number" class="form-control" value="0'>
                        </div>
                    </div>

                    <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label for="updateWeek2">Week 2</label>
                                <input name="updateWeek2" id="updateWeek2" type="number" class="form-control" value="0'>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <label for="updateWeek3">Week 3</label>
                                    <input name="updateWeek3" id="updateWeek3" type="number" class="form-control" value="0'>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="form-group">
                                        <label for="updateWeek4">Week 4</label>
                                        <input name="updateWeek4" id="updateWeek4" type="number" class="form-control" value="0'>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="form-group">
                                            <label for="updateWeek5">Week 5</label>
                                            <input name="updateWeek5" id="updateWeek5" type="number" class="form-control" value="0'>
                        </div>
                    </div>
                </div>
                <div class=" modal-footer warning-md">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <a href="#" id="updateBTN" name="updateBTN">Update</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>