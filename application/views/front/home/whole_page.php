<?php $this->load->view("front/includes/top_all"); ?>
<?php $lang = $this->session->userdata("dil"); ?>

<!-- Slider Area -->
<section class="home-slider">
    <div class="slider-active">
        <?php foreach ($slides as $item) {  ?>
        <!-- Single Slider -->
        <div class="single-slider overlay" style=" background-image:url('<?php echo base_url("uploads/main_slide/").$item["img"] ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="slider-text">
                            <h1>IELTS is here   <span>Education</span> & Courses</h1>
                            <p> Our company is aimed to help people who are taking IELTS exam. You can learn lots of tips and tricks, and get useful inormation.</p>
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
                                <p><?php echo mb_substr(strip_tags($item["desc_$lang"]), 0,400)."...."?></p>
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
                    <h2>Our Awesome <span>Teachers</span></h2>
                    <p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Team -->
                <div class="single-team">
                    <div class="image">
                        <img src="<?php echo base_url("public/front/") ?>images/team/team4.jpg" alt="#">
                        <a href="<?php echo base_url("teacher/single")?>" ><i class="fa fa-search"></i></a>
                    </div>
                    <!--team-content -->
                    <div class="team-content">
                        <h4 class="name">Khumar Karimova<span>IELTS teacher</span></h4>
                        <p>Helped many students achieve IELTS scores from band 7 to 9.0</p>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
          <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Team -->
                <div class="single-team">
                    <div class="image">
                        <img src="<?php echo base_url("public/front/") ?>images/team/team4.jpg" alt="#">
                        <a href="<?php echo base_url("teacher/single")?>" ><i class="fa fa-search"></i></a>
                    </div>
                    <!--team-content -->
                    <div class="team-content">
                        <h4 class="name">Khumar Karimova<span>IELTS teacher</span></h4>
                        <p>Helped many students achieve IELTS scores from band 7 to 9.0</p>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Team -->
                <div class="single-team">
                    <div class="image">
                        <img src="<?php echo base_url("public/front/") ?>images/team/team4.jpg" alt="#">
                        <a href="<?php echo base_url("teacher/single")?>" ><i class="fa fa-search"></i></a>
                    </div>
                    <!--team-content -->
                    <div class="team-content">
                        <h4 class="name">Khumar Karimova<span>IELTS teacher</span></h4>
                        <p>Helped many students achieve IELTS scores from band 7 to 9.0</p>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Team -->
                <div class="single-team">
                    <div class="image">
                        <img src="<?php echo base_url("public/front/") ?>images/team/team4.jpg" alt="#">
                        <a href="<?php echo base_url("teacher/single")?>" ><i class="fa fa-search"></i></a>
                    </div>
                    <!--team-content -->
                    <div class="team-content">
                        <h4 class="name">Khumar Karimova<span>IELTS teacher</span></h4>
                        <p>Helped many students achieve IELTS scores from band 7 to 9.0</p>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials overlay section" data-stellar-background-ratio="0.5" style=" background-image:url('<?php echo base_url("public/front/") ?>images/library.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                         <img src="<?php echo base_url("public/front/") ?>images/testimonial1.jpg" alt="#">
                        <div class="main-content">
                            <h4 class="name">Sanavce Faglane</h4>
                            <p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
                        </div>
                    </div>
                    <!--/ End Single Testimonial -->
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                         <img src="<?php echo base_url("public/front/") ?>images/testimonial2.jpg" alt="#">
                        <div class="main-content">
                            <h4 class="name">Jansan Kate</h4>
                            <p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
                        </div>
                    </div>
                    <!--/ End Single Testimonial -->
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                         <img src="<?php echo base_url("public/front/") ?>images/testimonial3.jpg" alt="#">
                        <div class="main-content">
                            <h4 class="name">Sanavce Faglane</h4>
                            <p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
                        </div>
                    </div>
                    <!--/ End Single Testimonial -->
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                         <img src="<?php echo base_url("public/front/") ?>images/testimonial4.jpg" alt="#">
                        <div class="main-content">
                            <h4 class="name">Jansan Kate</h4>
                            <p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
                        </div>
                    </div>
                    <!--/ End Single Testimonial -->
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
                    <h2>Upcoming <span>Events</span></h2>
                    <p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="event-slider">
                    <!-- Single Event -->
                    <div class="single-event">
                        <div class="head overlay">
                             <img src="<?php echo base_url("public/front/") ?>images/events/event1.jpg" alt="#">
                            <a href="<?php echo base_url("public/front/") ?>images/events/event1.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="event-content">
                            <div class="meta">
                                <span><i class="fa fa-calendar"></i>05 June 2019</span>
                                <span><i class="fa fa-clock-o"></i>12.00-5.00PM</span>
                            </div>
                            <h4><a href="event-single.html">Freshers Day Reception 2019</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
                            <div class="button">
                                <a href="event-single.html" class="btn">Join Event</a>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Event -->
                    <!-- Single Event -->
                    <div class="single-event">
                        <div class="head overlay">
                             <img src="<?php echo base_url("public/front/") ?>images/events/event2.jpg" alt="#">
                            <a href="<?php echo base_url("public/front/") ?>images/events/event2.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="event-content">
                            <div class="meta">
                                <span><i class="fa fa-calendar"></i>03 July 2019</span>
                                <span><i class="fa fa-clock-o"></i>03.20-5.20PM</span>
                            </div>
                            <h4><a href="event-single.html">Best Student Award 2019</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
                            <div class="button">
                                <a href="event-single.html" class="btn">Join Event</a>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Event -->
                    <!-- Single Event -->
                    <div class="single-event">
                        <div class="head overlay">
                             <img src="<?php echo base_url("public/front/") ?>images/events/event3.jpg" alt="#">
                            <a href="<?php echo base_url("public/front/") ?>images/events/event3.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="event-content">
                            <div class="meta">
                                <span><i class="fa fa-calendar"></i>15 Dec 2019</span>
                                <span><i class="fa fa-clock-o"></i>12.30-5.30PM</span>
                            </div>
                            <div class="title">
                                <h4><a href="event-single.html">Student Workshop</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
                            </div>
                            <div class="button">
                                <a href="event-single.html" class="btn">Join Event</a>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Event -->
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
                <div class="section-title">
                    <h2>Latest <span>News</span></h2>
                    <p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blog-slider">
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <div class="blog-head overlay">
                            <div class="date">
                                <h4>10<span>May</span></h4>
                            </div>
                             <img src="<?php echo base_url("public/front/") ?>images/blog/blog1.jpg" alt="#">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-single.html">Our Student Have sit amet egestas</a></h4>
                            <div class="blog-info">
                                <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                <a href="#"><i class="fa fa-list"></i>Learning</a>
                                <a href="#"><i class="fa fa-heart-o"></i>53K</a>
                            </div>
                            <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <div class="blog-head overlay">
                            <div class="date">
                                <h4>05<span>May</span></h4>
                            </div>
                             <img src="<?php echo base_url("public/front/") ?>images/blog/blog2.jpg" alt="#">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-single.html">Our teachers egestas erat dignissim</a></h4>
                            <div class="blog-info">
                                <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                <a href="#"><i class="fa fa-list"></i>Academic</a>
                                <a href="#"><i class="fa fa-heart-o"></i>33K</a>
                            </div>
                            <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <div class="blog-head overlay">
                            <div class="date">
                                <h4>15<span>Mar</span></h4>
                            </div>
                             <img src="<?php echo base_url("public/front/") ?>images/blog/blog3.jpg" alt="#">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-single.html">We are Proffesional Have velit Landon</a></h4>
                            <div class="blog-info">
                                <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                <a href="#"><i class="fa fa-list"></i>Knowledge</a>
                                <a href="#"><i class="fa fa-heart-o"></i>11K</a>
                            </div>
                            <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <div class="blog-head overlay">
                            <div class="date">
                                <h4>10<span>Mar</span></h4>
                            </div>
                             <img src="<?php echo base_url("public/front/") ?>images/blog/blog4.jpg" alt="#">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-single.html">Our Student Have sit amet egestas</a></h4>
                            <div class="blog-info">
                                <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                <a href="#"><i class="fa fa-list"></i>Learning</a>
                                <a href="#"><i class="fa fa-heart-o"></i>53K</a>
                            </div>
                            <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <div class="blog-head overlay">
                            <div class="date">
                                <h4>25<span>Feb</span></h4>
                            </div>
                             <img src="<?php echo base_url("public/front/") ?>images/blog/blog2.jpg" alt="#">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-single.html">Our teachers egestas erat dignissim</a></h4>
                            <div class="blog-info">
                                <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                <a href="#"><i class="fa fa-list"></i>Academic</a>
                                <a href="#"><i class="fa fa-heart-o"></i>33K</a>
                            </div>
                            <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <div class="blog-head overlay">
                            <div class="date">
                                <h4>28<span>Feb</span></h4>
                            </div>
                             <img src="<?php echo base_url("public/front/") ?>images/blog/blog3.jpg" alt="#">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-single.html">We are Proffesional Have velit Landon</a></h4>
                            <div class="blog-info">
                                <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                <a href="#"><i class="fa fa-list"></i>Knowledge</a>
                                <a href="#"><i class="fa fa-heart-o"></i>11K</a>
                            </div>
                            <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Single Blog -->
                    <div class="single-blog">
                        <div class="blog-head overlay">
                            <div class="date">
                                <h4>03<span>Jan</span></h4>
                            </div>
                             <img src="<?php echo base_url("public/front/") ?>images/blog/blog4.jpg" alt="#">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-single.html">Our Student Have sit amet egestas</a></h4>
                            <div class="blog-info">
                                <a href="#"><i class="fa fa-user"></i>By: Admin</a>
                                <a href="#"><i class="fa fa-list"></i>Learning</a>
                                <a href="#"><i class="fa fa-heart-o"></i>53K</a>
                            </div>
                            <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Blogs -->

<!-- Footer -->
<?php $this->load->view("front/includes/footer"); ?>
<!--/ End Footer -->

