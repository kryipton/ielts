<?php $this->load->view("front/includes/top_all"); ?>
<?php $lang = $this->session->userdata("dil") ; ?>

<!-- Start Breadcrumbs -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $this->lang->line("xaricde_tehsil")?></h2>
                <ul class="bread-list">
                    <li><a href="<?php echo base_url("$lang/home") ?>"><?php echo $this->lang->line("ana_sehife")?><i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a><?php echo $this->lang->line("xaricde_tehsil")?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- About US -->
<section class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="single-image overlay">
                    <img src="<?php echo base_url("uploads/study_abroad/").$about["img"] ?>" alt="#">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-text">
                    <h2><?php echo $about["name_$lang"] ?></h2>

                    <?php echo $about["desc_$lang"] ?>

                    <div class="button">
                        <a href="#" class="btn"><?php echo $this->lang->line("kurslarimiz")?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End About US -->

<!-- Fun Facts -->
<?php $this->load->view("front/includes/counters_div"); ?>
<!--/ End Fun Facts -->



<!-- Footer -->
<?php $this->load->view("front/includes/footer"); ?>
<!--/ End Footer -->

