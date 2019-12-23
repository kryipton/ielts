<div class="fun-facts overlay" data-stellar-background-ratio="0.5" style=" background-image:url('<?php echo base_url("public/front/") ?>images/cta-bg.jpg' )">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.4s">
                <!-- Single Fact -->
                <div class="single-fact">
                    <i class="fa fa-institution"></i>
                    <div class="number"><span class="counter"><?php echo $info["active_courses"] ?></span></div>
                    <p><?php echo $this->lang->line("kurslar")?></p>
                </div>
                <!--/ End Single Fact -->
            </div>
            <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.6s">
                <!-- Single Fact -->
                <div class="single-fact">
                    <i class="fa fa-user"></i>
                    <div class="number"><span class="counter"><?php echo $info["active_students"] ?></span></div>
                    <p><?php echo $this->lang->line("telebeler")?></p>
                </div>
                <!--/ End Single Fact -->
            </div>
            <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.8s">
                <!-- Single Fact -->
                <div class="single-fact">
                    <i class="fa fa-graduation-cap"></i>
                    <div class="number"><span class="counter"><?php echo $info["alumni"] ?></span></div>
                    <p><?php echo $this->lang->line("mezunlar")?></p>
                </div>
                <!--/ End Single Fact -->
            </div>
            <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="1s">
                <!-- Single Fact -->
                <div class="single-fact">
                    <i class="fa fa-trophy"></i>
                    <div class="number"><span class="counter"><?php echo $info["awards"] ?></span></div>
                    <p><?php echo $this->lang->line("mukafatlar")?></p>
                </div>
                <!--/ End Single Fact -->
            </div>
        </div>
    </div>
</div>
