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
                    <li class="active"><a href="team-single.html"><?php echo $this->lang->line("muellimler") ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Start Team Detail Area-->
<section class="team-details section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="member-detail">
                    <div class="image">
                        <img src="<?php echo base_url("uploads/teachers/".$teacher['img']) ?>" alt="#">
                    </div>
                    <div class="contact">
                        <ul class="social">
                            <li><a href="https://instagram.com/<?php echo $teacher['instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://facebook.com/<?php echo $teacher['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/<?php echo $teacher['twitter'] ?>" class="active"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://telegram.com/<?php echo $teacher['telegram'] ?>"><i class="fa fa-paper-plane"></i></a></li>
                            <li><a href="https://linkedin.com/<?php echo $teacher['linkedln'] ?>"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <ul class="address">
                            <li><a href="#"><i class="fa fa-envelope"></i><?php echo $teacher['email'] ?></a></li>
                            <li><i class="fa fa-phone"></i><?php echo $teacher['phone'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="detail-content">
                    <h2><?php echo $teacher['name_'.$lang] ?></h2>
                    <p class="title"><?php echo $teacher['title_'.$lang] ?></p>
                    <p><?php echo $teacher['desc_'.$lang] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Team Detail Area-->





<!-- Footer -->
<?php $this->load->view("front/includes/footer"); ?>
<!--/ End Footer -->

