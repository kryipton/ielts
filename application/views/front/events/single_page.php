<?php $this->load->view("front/includes/top_all"); ?>
<?php $lang = $this->session->userdata("dil"); ?>

<!-- Start Breadcrumbs -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $this->lang->line("tedbirlerimiz") ?></h2>
                <ul class="bread-list">
                    <li><a href="index.html"><?php echo $this->lang->line("ana_sehife") ?><i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="event-single.html"><?php echo $this->lang->line("tedbirlerimiz") ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Events -->
<section class="events single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="single-event">
                    <div class="event-gallery">
                        <?php foreach ($images as $image){ ?>
                        <div class="single-gallery">
                           <img src="<?php echo base_url("uploads/events/".$image) ?>" alt="#">
                        </div>
                        <?php } ?>
                    </div>
                    <div class="event-content">
                        <div class="meta">
                            <span><i class="fa fa-calendar"></i><?php echo $event['date'] ?></span>
                            <span><i class="fa fa-clock-o"></i><?php echo date('g:i', strtotime($event['start_time'])) ?>-<?php echo date('g:i', strtotime($event['end_time'])) ?></span>
                        </div>
                        <h2><a href="#"><?php echo $event['name_'.$lang] ?></a></h2>
                        <p><?php echo $event['desc_'.$lang] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="learnedu-sidebar">

                    <div class="single-widget course">
                        <h3>Popular <span>Courses</span></h3>
                        <!-- Single Course -->
                        <div class="single-course">
                           <img src="<?php echo base_url("public/front/") ?>images/course/course1.jpg" alt="#">
                            <div class="course-content">
                                <h4><a href="#">Beginner Course</a></h4>
                                <div class="meta">$900.00, <span><i class="fa fa-clock-o"></i>3 Years</span></div>
                            </div>
                        </div>
                        <!-- Single Course -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Events -->
<!--/ End Courses -->






<!-- Footer -->
<?php $this->load->view("front/includes/footer"); ?>
<!--/ End Footer -->

