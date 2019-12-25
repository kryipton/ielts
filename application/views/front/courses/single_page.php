<?php $this->load->view("front/includes/top_all"); ?>
<?php $lang = $this->session->userdata("dil");?>
<!-- Courses -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $course["name_$lang"]?></h2>
                <ul class="bread-list">
                    <li><a href="<?php echo base_url("$lang/home")?>"><?php echo $this->lang->line("ana_sehife")?><i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a><?php echo $course["name_$lang"]?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Courses -->

<!-- Start Breadcrumbs -->
<section class="courses single section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="single-main">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <!-- Single Course -->
                            <div class="single-course">
                                <div class="course-head">
                                    <img src="<?php echo base_url("uploads/course/$course[img]") ?>" alt="#">
                                </div>
                            </div>
                            <!--/ End Single Course -->
                        </div>
                        <div class="col-lg-4 col-12">
                            <!-- Course Features -->
                            <div class="course-feature">
                                <div class="feature-main">
                                    <h4><?php echo $this->lang->line("course_features")?></h4>
                                    <!-- Single Feature -->
                                    <div class="single-feature">
                                        <i class="fa fa-files-o"></i>
                                        <span class="label"><?php echo $this->lang->line("leksiyalar") ?></span>
                                        <span class="value"><?php echo $course["lectures"]?></span>
                                    </div>
                                    <!--/ End Single Feature -->
                                    <!-- Single Feature -->
                                    <div class="single-feature">
                                        <i class="fa fa-puzzle-piece"></i>
                                        <span class="label"><?php echo $this->lang->line("quizler") ?></span>
                                        <span class="value"><?php echo $course["quizzes"]?></span>
                                    </div>
                                    <!--/ End Single Feature -->
                                    <!-- Single Feature -->
                                    <div class="single-feature">
                                        <i class="fa fa-clock-o"></i>
                                        <span class="label"><?php echo $this->lang->line("kursun_muddeti") ?></span>
                                        <span class="value"><?php echo $course["duration"]?></span>
                                    </div>
                                    <!--/ End Single Feature -->
                                    <!-- Single Feature -->
                                    <div class="single-feature">
                                        <i class="fa fa-magic"></i>
                                        <span class="label"><?php echo $this->lang->line("kursun_seviyesi") ?></span>
                                        <span class="value"><?php echo $course["skill_level"]?></span>
                                    </div>
                                    <!--/ End Single Feature -->
                                    <!-- Single Feature -->
                                    <div class="single-feature">
                                        <i class="fa fa-user"></i>
                                        <span class="label"><?php echo $this->lang->line("kursda_istirak_edecek_maksimum_telebe_sayi") ?></span>
                                        <span class="value"><?php echo $course["seats"]?></span>
                                    </div>
                                    <!--/ End Single Feature -->
                                    <!-- Single Feature -->
                                    <div class="single-feature">
                                        <i class="fa fa-check-square-o"></i>
                                        <span class="label"><?php echo $this->lang->line("sertifikat") ?></span>
                                        <span class="value"><?php echo $course["certificate"]?></span>
                                    </div>
                                    <!--/ End Single Feature -->
                                    <!-- Single Feature -->
                                    <div class="single-feature">
                                        <i class="fa fa-check-square-o"></i>
                                        <span class="label"><?php echo $this->lang->line("qiymetlemdirmeler") ?></span>
                                        <span class="value"><?php echo $course["assessments"]?></span>
                                    </div>
                                    <!--/ End Single Feature -->
                                </div>
                            </div>
                            <!--/ End Course Features -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Course Meta -->
                            <div class="course-meta">
                                <!-- Course Info -->
                                <div class="course-info">

                                    <?php foreach ($teachers as $item){?>
                                        <div class="single-info author">
                                            <img src="<?php echo base_url("uploads/teachers/$item[img]")?>" alt="#">
                                            <h4><?php echo $this->lang->line("muellimler")?>:<a href="<?php echo base_url("$lang/teacher/single/$item[id]")?>"><span><?php echo $item["name_$lang"]?></span></a></h4>
                                        </div>
                                    <?php }?>

                                    <div class="single-info category">
                                        <i class="fa fa-bolt"></i>
                                        <h4><?php echo $this->lang->line("kateqoriya");?>:<a><span><?php echo $course["name_$lang"]?></span></a></h4>
                                    </div>
                                    <div class="single-info s-enroll">
                                        <i class="fa fa-users"></i>
                                        <h4><?php echo $this->lang->line("kursda_istirak_edecek_maksimum_telebe_sayi");?>:<span><?php echo $course["seats"]?></span></h4>
                                    </div>
                                    <div class="single-info rattings">
                                        <i class="fa fa-clock-o"></i>
                                        <h4><?php echo $this->lang->line("kursun_muddeti");?>:<span><?php echo $course["duration"]?></span></h4>
                                    </div>
                                </div>
                                <!--/ End Course Info -->


                                <!-- Course Price -->
                                <div class="course-price">
                                    <p>$<?php echo $course["price"]?></p>
<!--                                    <a href="#" class="btn"><i class="fa fa-users"></i>--><?php //echo $this->lang->line("join")?><!--</a>-->
                                </div>
                                <!--/ End Course Price -->
                            </div>
                            <!--/ End Course Meta -->
                        </div>
                        <div class="col-12">

                            <?php echo $course["desc_$lang"]?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->






<!-- Footer -->
<?php $this->load->view("front/includes/footer"); ?>
<!--/ End Footer -->




















