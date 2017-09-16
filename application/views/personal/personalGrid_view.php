<?php
/**
 * Created by PhpStorm.
 * User: ALAM
 * Date: 13-Dec-16
 * Time: 12:15 PM
 */

$this->load->helper('global_helper');
?>
<link href="http://[::1]/doctorsapp/script-assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<style>

    .circular {
        width: 120px;
        height: 120px;
        border-radius: 150px;
        -webkit-border-radius: 150px;
        -moz-border-radius: 150px;
        padding: 3px;
        border: 3px solid #d2d6de;
    }
</style>

<div class="content-wrapper">

    <section class="content-header">
        <h1><i class="fa fa-male"></i>
            All Personals

        </h1>
    </section>
    <section class="content">
        <div class="row">
            <?php if(!empty($allpersonals)){
                foreach ($allpersonals as $row){?>
            <div class="col-md-4">
                    <div class="box box-danger">
                        <div class="box-body box-profile">
                            <div style="text-align: center;">
                                <!--<img class="profile-user-img img-responsive img-circle" src="<?php /*echo base_url().'assets/file/'*/?>" alt="User profile picture">-->
                                <img src="<?php echo base_url() . 'assets/file/personals/' .$row['primary_photo']; ?>" alt="" class="circular" />
                            </div>

                            <h3 class="profile-username text-center"><?php echo (!empty($row['title']))?$row['title']:''?></h3>



                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>I M A</b> <span class="pull-right"><?php echo (!empty($row['iam']))?$row['iam']:''?></span>
                                </li>
                                <li class="list-group-item">
                                    <b>Intested</b> <span class="pull-right "><?php echo (!empty($row['interestedin']))?$row['interestedin']:''?></span>
                                </li>
                                <li class="list-group-item">
                                    <b>Body</b> <span class="pull-right "><?php echo (!empty( $row['body']))? $row['body']:''?></span>
                                </li>
                                <li class="list-group-item">
                                    <b>Height</b> <span class="pull-right "><?php echo (!empty( $row['height']))? $row['height']:''?></span>
                                </li>
                                <li class="list-group-item">
                                    <b>Marital Status</b> <span class="pull-right "><?php echo (!empty( $row['maritalstatus']))? $row['maritalstatus']:''?></span>
                                </li>
                                <li class="list-group-item">
                                    <b>Age</b> <span class="pull-right "><?php echo (!empty( $row['age']))? $row['age']:''?></span>
                                </li>
                            </ul>

                            <a href="<?php echo base_url() . 'personal/Personal/detail/' .$row['id']; ?>" class="btn btn-primary btn-block"><b>View Detail</b></a>
                        </div>
                        <!-- /.box-body -->
                    </div>
             </div>

            <?php }
            }else{ ?>
                <div class="alert alert-warning alert-dismissible text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <b class="">No Personal </b>
                </div>
            <?php } ?>
           
        </div>

       </section>
</div>

