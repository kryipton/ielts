<?php $this->load->view("front/includes/top_all"); ?>
<?php $lang = $this->session->userdata("dil"); ?>

<!-- Start Breadcrumbs -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $this->lang->line("muellimler") ?></h2>
                <ul class="bread-list">
                    <li><a href="index.html"><?php echo $this->lang->line("ana_sehife") ?><i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="team2.html"><?php echo $this->lang->line("muellimler") ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Start Team Area -->
<section class="team-style2 section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2><?php echo $teachers_about['name_'.$lang] ?></h2>
                    <p><?php echo $teachers_about['desc_'.$lang] ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($teachers as $teacher){ ?>
          <div class="col-lg-3 col-md-6 col-12">
                <!-- Single Team -->
                <div class="single-team">
                    <div class="image">
                        <img src="<?php echo base_url("uploads/teachers/".$teacher['img']) ?>" alt="#">
                        <a href="<?php echo base_url("$lang/teacher/single/".$teacher['id'])?>" ><i class="fa fa-search"></i></a>
                    </div>
                    <!--team-content -->
                    <div class="team-content">
                        <h4 class="name"><?php echo $teacher['name_'.$lang] ?><span><?php echo $teacher['title_'.$lang] ?></span></h4>

                        <ul class="social">
                            <li><a href="https://facebook.com/<?php echo $teacher['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/<?php echo $teacher['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://linkedin.com/<?php echo $teacher['linkedln'] ?>"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--/ End Single Team -->
            </div>
            <?php } ?>

        </div>
    </div>
</section>
<!--/ End Team Area -->




<!-- Footer -->
<?php $this->load->view("front/includes/footer"); ?>
<!--/ End Footer -->

