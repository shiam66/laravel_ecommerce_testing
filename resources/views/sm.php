<?php
    include_once('../../include/session.php');
    include_once('../../include/connection1.php');

    $mysqli=dbcon();
    $sql="select aca_calculator from edu_user_per_academic where user_id='$userId'";
    $sql=$mysqli->query($sql);
    $sql2=$sql->fetch_assoc();
    $mysqli->close();
    $aca_calculator=$sql2['aca_calculator'];
    if($aca_calculator!=1) {
        session_destroy();
        header("location:../../index.php");
    }
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>[:: Academic Calender ::]</title>

    <script>
        function callpage() {
            document.frmcontent.action="academic/aca_c/add_weekly_holiday.php";
            document.frmcontent.submit();
        }
    </script>

    <?php include_once("../../include/header.php"); ?>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include_once("../../include/default_top.php"); ?>
    <?php $active ='academic_cal'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper _custome">

        <section>
            <div class="content container">
                <div class="row">
                    <div class="col-md-12 custome_box_header">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <center><h3 class="box-title">Academic Mgt. <i class="fa fa-angle-double-right"></i> Academic Calender </h3></center>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include_once("../../include/aca_menu.php"); ?>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Weekly Holiday</h3>
                            <a href="academic/aca_c/academic_calender.php" class="right" target="">
                                <button type="button" class="btn btn-success btn-sm"><i class="fa fa-chevron-left"></i> Back</button>
                            </a>
                        </div>
                        <form name="frmcontent" class="form-horizontal" action="academic/aca_c/add_weekly_holiday_do.php" method="post" enctype="multipart/form-data">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Select Session</label>
                                            <div class="col-sm-6">
                                                <select name="stsess" class="form-control" id="stsess" onchange="callpage();" required="">
                                                    <option value=""> Select Year </option>
                                                    <?php
                                                        $mysqli=dbcon();
                                                        $data1="select * from edu_school_session where edu_school_id='$schId' AND school=1";
                                                        $qdata1=$mysqli->query($data1);
                                                        while($showdata1=$qdata1->fetch_assoc()){ $sl++;
                                                        ?>
                                                        <option value="<?php echo $showdata1['edu_school_session']; ?>" <?php if($showdata1['edu_school_session']==$_REQUEST['stsess']) { echo "selected"; }  ?>> <?php echo $showdata1['edu_school_session']; ?></option>
                                                    <?php }$mysqli->close(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <?php
                                            $stsess=$_REQUEST['stsess'];
                                            $mysqli=dbcon();
                                            $sql="select color,saturday,sunday,monday,tuesday,wednesday,thursday,friday from calender_weekly_holiday where `school_id`='$schId' AND `year`='$stsess'";
                                            $sql=$mysqli->query($sql);
                                            $sql2=$sql->fetch_assoc();
                                            $saturday=$sql2['saturday'];
                                            $sunday=$sql2['sunday'];
                                            $monday=$sql2['monday'];
                                            $tuesday=$sql2['tuesday'];
                                            $wednesday=$sql2['wednesday'];
                                            $thursday=$sql2['thursday'];
                                            $friday=$sql2['friday'];
                                            $color=$sql2['color'];
                                            $mysqli->close();
                                        ?>


                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Week Days</label>

                                            <div class="col-sm-8">
                                                <div class="size-option">
                                                    <label class="custom-check">
                                                        <input type="checkbox" class="check" name="sat" value="1" <?php if($saturday==1){echo "checked";} ?>>
                                                        <span class="check-box">Sat</span>
                                                    </label>

                                                    <label class="custom-check">
                                                        <input type="checkbox" class="check" name="sun" value="1" <?php if($sunday==1){echo "checked";} ?>>
                                                        <span class="check-box">Sun</span>
                                                    </label>

                                                    <label class="custom-check">
                                                        <input type="checkbox" class="check" name="mon" value="1" <?php if($monday==1){echo "checked";} ?>>
                                                        <span class="check-box">Mon</span>
                                                    </label>

                                                    <label class="custom-check">
                                                        <input type="checkbox" class="check" name="tue" value="1" <?php if($tuesday==1){echo "checked";} ?>>
                                                        <span class="check-box">Tue</span>
                                                    </label>

                                                    <label class="custom-check">
                                                        <input type="checkbox" class="check" name="wed" value="1" <?php if($wednesday==1){echo "checked";} ?>>
                                                        <span class="check-box">Wed</span>
                                                    </label>

                                                    <label class="custom-check">
                                                        <input type="checkbox" class="check" name="thu" value="1" <?php if($thursday==1){echo "checked";} ?>>
                                                        <span class="check-box">Thu</span>
                                                    </label>

                                                    <label class="custom-check">
                                                        <input type="checkbox" class="check" name="fri" value="1" <?php if($friday==1){echo "checked";} ?>>
                                                        <span class="check-box">Fri</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <!-- /.box -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary custome_save_btn" onclick="this.style.display='none';">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
    </div>

        <?php include_once("../../include/collect_fees_footer.php"); ?>


        <script>
            $("#check13").change(function () {
                $("input:checkbox").prop('checked', $(this).prop("checked"));
                $(".check").trigger('change');
            });
        </script>
