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
                    <li class="active"><a href="events.html"><?php echo $this->lang->line("tedbirlerimiz") ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Events -->
<section class="events archives section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2><?php echo $event_about['name_'.$lang] ?></h2>
                    <p><?php echo $event_about['desc_'.$lang] ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($events as $event){ ?>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Event -->
                <div class="single-event">
                    <div class="head overlay">
                        <img src="<?php echo base_url("uploads/events/".$event['img']) ?>" alt="#">
                        <a href="<?php echo base_url("$lang/event/single/".$event['id'])?>" class="btn"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="event-content">
                        <div class="meta">
                            <span><i class="fa fa-calendar"></i><?php echo $event['date'] ?></span>
                            <span><i class="fa fa-clock-o"></i><?php echo date('g:i', strtotime($event['start_time'])) ?>-<?php echo date('g:i', strtotime($event['end_time'])) ?></span>
                        </div>
                        <h4><a href="<?php echo base_url("$lang/event/single/".$event['id'])?>"><?php echo $event['name_'.$lang] ?></a></h4>
                        <p><?php echo substr(strip_tags($event['desc_'.$lang]),0,40) ?></p>
                        <div class="button">
                            <a href="<?php echo base_url("$lang/event/single/".$event['id'])?>" class="btn"><?php echo $this->lang->line("join") ?></a>
                        </div>
                    </div>
                </div>
                <!--/ End Single Event -->
            </div>
            <?php } ?>
        </div>
<!--        <div class="row">-->
<!--            <div class="col-12">-->
                <!-- Start Pagination -->
<!--                <div class="pagination-main">-->
<!--                    <ul class="pagination">-->
<!--                        <li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>-->
<!--                        <li><a href="#">1</a></li>-->
<!--                        <li class="active"><a href="#">2</a></li>-->
<!--                        <li><a href="#">3</a></li>-->
<!--                        <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
                <!--/ End Pagination -->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>
<!--/ End Events -->




<!-- Footer -->
<?php $this->load->view("front/includes/footer"); ?>
<!--/ End Footer -->

