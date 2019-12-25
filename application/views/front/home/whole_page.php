<?php $this->load->view("front/includes/top_all"); ?>
<?php $lang = $this->session->userdata("dil"); ?>

<!-- Slider Area -->
<?php if (!empty($slides)){?>
<section class="home-slider">
    <div class="slider-active<?php echo (count($slides)<2) ? "asdasd" : ""?>">
        <?php foreach ($slides as $item) {  ?>
        <!-- Single Slider -->
        <div class="single-slider overlay" style="background-size: cover; background-image:url('<?php echo base_url("uploads/main_slide/").$item["img"] ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="slider-text">
                            <h1><?php echo $item["title1_$lang"]?></h1>
                            <p>
                                <?php echo $item["title2_$lang"]?>
                            </p>
                            <div class="button">
                                <a href="<?php echo base_url("$lang/teachers")?>" class="btn primary"><?php echo $this->lang->line("muellimlerimiz")?></a>
                                <a href="<?php echo base_url("$lang/about")?>" class="btn"><?php echo $this->lang->line("haqqimizda")?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
       <?php }  ?>
    </div>
</section>
<!--/ End Slider Area -->
<?php }?>
<!-- Courses -->
<section class="courses section-bg section">
    <div class="container">
        <div class="row">
            <div class="col-12 wow zoomIn">
                <div class="section-title">
                    <h2><?php echo $course_about["name_$lang"]?></h2>
                    <p><?php echo $course_about["desc_$lang"]?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="course-slider">
                    <?php foreach ($courses as $item) {  ?>
                        <!-- Single Course -->
                        <div class="single-course">
                            <div class="course-head overlay">
                                <img src="<?php echo base_url("uploads/course/").$item["img"] ?>" alt="#">
                                <a href="<?php echo base_url("$lang/course/").$item["id"] ?>" class="btn"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="single-content">
                                <h4><a href="<?php echo base_url("$lang/course/").$item["id"] ?>"><span><?php echo $item["skill_level"]?></span><?php echo $item["name_$lang"]?></a></h4>

                                <p><?php

                                    if (strlen($item["desc_$lang"]) >= 120){
                                        $str = "...";
                                    }else{
                                        $str = "";
                                    }
                                    echo mb_substr(strip_tags($item["desc_$lang"]), 0,120).$str?></p>
                            </div>

                            <div class="course-meta">
                                <div class="meta-left">
                                    <span><i class="fa fa-users"></i><?php echo $item["seats"]?></span>
                                    <span><i class="fa fa-clock-o"></i><?php echo $item["course_time"]?></span>
                                </div>
                                <span class="price">$<?php echo $item["price"]?></span>
                            </div>
                        </div>
                        <!--/ End Single Course -->
                    <?php }  ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Courses -->

<!-- Enroll -->
<section class="enroll overlay section" data-stellar-background-ratio="0.5" style=" background-image:url('<?php echo base_url("public/front/") ?>images/enroll-bg.jpg')" id="enroll" >
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Single Enroll -->
                        <div class="enroll-form">
                            <div class="form-title">
                                <h2><?php echo $this->lang->line("muraciet")?></h2>
                            </div>
                            <!-- Form -->
                            <form class="form" action="<?php echo base_url("$lang/message_send")?>" method="post">
                                <div class="form-group">
                                    <label><?php echo $this->lang->line("ad_soyad")?></label>
                                    <input name="name" type="text" placeholder="John Mathew">
                                </div>
                                <div class="form-group">
                                    <label><?php echo $this->lang->line("mail")?></label>
                                    <input name="email" type="email" placeholder="john@youremail.com">
                                </div>
                                <div class="form-group">
                                    <label><?php echo $this->lang->line("telefon")?></label>
                                    <input name="phone" type="email" placeholder="+99455555555">
                                </div>
                                <div class="form-group">
                                    <label><?php echo $this->lang->line("mesajiniz")?></label>
                                    <textarea name="message" placeholder="i would like to talking..."></textarea>
                                </div>
                                <div class="form-group button">
                                    <button type="submit" class="btn"><?php echo $this->lang->line("gonder")?></button>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                        <!-- Single Enroll -->
                    </div>
                    <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="enroll-right">
                            <div class="section-title">
                                <h2><?php echo $message_about["name_$lang"] ?></h2>
                                <?php echo $message_about["desc_$lang"] ?>
                                </div>
                        </div>
                        <!-- Skill Main -->
                        <div class="skill-main">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="0.8s">
                                    <!-- Single Skill -->
                                    <div class="single-skill">
                                        <div class="circle" data-value="0.7" data-size="130">
                                            <strong><?php echo $info["active_students"] ?>+</strong>
                                        </div>
                                        <h4><?php echo $this->lang->line("telebeler")?></h4>
                                    </div>
                                    <!--/ End Single Skill -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1s">
                                    <!-- Single Skill -->
                                    <div class="single-skill">
                                        <div class="circle" data-value="0.9" data-size="130">
                                            <strong><?php echo $info["active_courses"] ?>+</strong>
                                        </div>
                                        <h4><?php echo $this->lang->line("kurslar")?></h4>
                                    </div>
                                    <!--/ End Single Skill -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1.2s">
                                    <!-- Single Skill -->
                                    <div class="single-skill">
                                        <div class="circle" data-value="0.8" data-size="130">
                                            <strong><?php echo $info["awards"] ?>+</strong>
                                        </div>
                                        <h4><?php echo $this->lang->line("mukafatlar")?></h4>
                                    </div>
                                    <!--/ End Single Skill -->
                                </div>
                            </div>
                        </div>
                        <!--/ End Skill Main -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Enroll -->





<section class="team-style2 section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2><?php echo $teachers_about["name_$lang"]?></h2>
                    <p><?php echo $teachers_about["desc_$lang"]?></p>
                </div>
            </div>
        </div>
        <div class="row">
          <?php foreach ($teachers as $item){?>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Team -->
                <div class="single-team">
                    <div class="image">
                        <img src="<?php echo base_url("uploads/teachers/$item[img]") ?>" alt="#">
                        <a href="<?php echo base_url("$lang/teacher/single/$item[id]")?>" ><i class="fa fa-search"></i></a>
                    </div>
                    <!--team-content -->
                    <div class="team-content">
                        <h4 class="name"><?php echo $item["name_$lang"]?><span><?php echo $item["title_$lang"]?></span></h4>
                        <p>

                            <?php

                            if (strlen($item["desc_$lang"]) >= 120){
                                $str = "...";
                            }else{
                                $str = "";
                            }
                            echo mb_substr(strip_tags($item["desc_$lang"]), 0,120).$str?>

                        </p>
                        <ul class="social">
                            <li><a href="<?php echo $item["facebook"]?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo $item["twitter"]?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php echo $item["instagram"]?>"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="<?php echo $item["linkedln"]?>"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
          <?php }?>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials overlay section" data-stellar-background-ratio="0.5" style=" background-image:url('<?php echo base_url("public/front/") ?>images/library.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">

                    <?php foreach ($feedbacks as $item){?>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                         <img style="object-fit: cover" src="<?php echo base_url("uploads/feedbacks/$item[img]") ?>" alt="#">
                        <div class="main-content">
                            <h4 class="name"><?php echo $item["name_$lang"]?></h4>
                            <p>

                                <?php

                                if (strlen($item["desc_$lang"]) >= 120){
                                    $str = "...";
                                }else{
                                    $str = "";
                                }
                                echo mb_substr(strip_tags($item["desc_$lang"]), 0,120).$str?>

                            </p>
                        </div>
                    </div>
                    <!--/ End Single Testimonial -->
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Testimonials -->

<!-- Events -->
<section class="events section" >
    <div class="container">
        <div class="row">
            <div class="col-12 wow zoomIn">
                <div class="section-title">
                    <h2><?php echo $events_about["name_$lang"]?></h2>
                    <p><?php echo $events_about["desc_$lang"]?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="event-slider">

                    <?php foreach ($events as $item){?>
                        <!-- Single Event -->
                        <div class="single-event">
                            <div class="head overlay">
                                 <img style="object-fit: contain" src="<?php echo base_url("uploads/events/$item[img]") ?>" alt="#">
                                <a href="<?php echo base_url("$lang/event/single/$item[id]");?>" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">
                                <div class="meta">
                                    <span><i class="fa fa-calendar"></i><?php echo $item["date"]?></span>
                                    <span><i class="fa fa-clock-o"></i>

                                       <?php echo substr($item["start_time"], 0, 5);?> - <?php echo substr($item["end_time"], 0, 5);?>

                                    </span>
                                </div>
                                <h4><a href="<?php echo base_url("$lang/event/single/$item[id]");?>"><?php echo $item["name_$lang"]?></a></h4>
                                <p>

                                        <?php

                                        if (strlen($item["desc_$lang"]) >= 120){
                                            $str = "...";
                                        }else{
                                            $str = "";
                                        }
                                        echo mb_substr(strip_tags($item["desc_$lang"]), 0,120).$str?>

                                </p>
                                <div class="button">
                                    <a href="<?php echo base_url("$lang/event/single/$item[id]");?>" class="btn"><?php echo $this->lang->line("etrafli") ?></a>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Event -->
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Events -->

<!-- Fun Facts -->
<?php $this->load->view("front/includes/counters_div"); ?>
<!--/ End Fun Facts --><!--/ End Fun Facts -->

<!-- Blogs -->
<section class="blog section">
    <div class="container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blog-slider">

                    <?php foreach ($blogs as $item){?>
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-head overlay">

                                 <img src="<?php echo base_url("uploads/blog/$item[img]") ?>" alt="#">
                            </div>
                            <div class="blog-content">
                                <h4 class="blog-title"><a href="<?php echo base_url("$lang/blog/single/$item[id]");?>"><?php echo $item["name_$lang"]?></a></h4>
                                <div class="blog-info">
                                    <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                    <a href="#"><i class="fa fa-list"></i><?php echo $item["category_name_$lang"]?></a>
                                </div>
                                <p>

                                    <?php

                                    if (strlen($item["desc_$lang"]) >= 120){
                                        $str = "...";
                                    }else{
                                        $str = "";
                                    }
                                    echo mb_substr(strip_tags($item["desc_$lang"]), 0,120).$str?>

                                </p>
                                <div class="button">
                                    <a href="<?php echo base_url("$lang/blog/single/$item[id]");?>" class="btn"><?php echo $this->lang->line("etrafli") ?><i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Blogs -->

<!-- Footer -->
<?php $this->load->view("front/includes/footer"); ?>
<!--/ End Footer -->

