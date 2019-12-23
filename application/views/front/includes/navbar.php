<?php $lang = $this->session->userdata("dil"); ?>
<div class="header-menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-default">
                    <div class="navbar-collapse">
                        <!-- Main Menu -->
                        <ul id="nav" class="nav menu navbar-nav">
                            <li ><a href="<?php echo base_url("$lang/home")?>">Home</a>
                            </li>


                            <li><a href="#">Courses<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url("$lang/course")?>">Beginner</a></li>
                                    <li><a href="<?php echo base_url("$lang/course")?>">Pre-Intermediate</a></li>
                                    <li><a href="<?php echo base_url("$lang/course")?>">Intermediate</a></li>
                                    <li><a href="<?php echo base_url("$lang/course")?>">Upper-Intermediate</a></li>
                                    <li><a href="<?php echo base_url("$lang/course")?>">Advanced</a></li>
                                    <li><a href="<?php echo base_url("$lang/course")?>">Pre-IELTS</a></li>
                                    <li><a href="<?php echo base_url("$lang/course")?>">IELTS</a></li>
                                </ul>
                            </li>


                            <li><a href="<?php echo base_url("$lang/teachers")?>">Teachers</a>

                            </li>



                            <li><a href="<?php echo base_url("$lang/events")?>">Events</a>

                            </li>


                            <li><a href="<?php echo base_url("$lang/blogs")?>">Blogs</a>
                            </li>


                            <li><a href="<?php echo base_url("$lang/study/abroad")?>">Study abroad</a></li>


                            <li><a href="<?php echo base_url("$lang/about")?>">About us</a></li>



                            <li><a href="<?php echo base_url("$lang/faq")?>">FAQ</a></li>







                            <li><a href="<?php echo base_url("$lang/contact")?>">Contact</a></li>

                        </ul>
                        <!-- End Main Menu -->
                        <!-- button -->
                        <div class="button" >
                            <a href="<?php echo base_url("$lang/home/")?>#enroll" class="btn"><i class="fa fa-pencil"></i>Apply Now</a>
                        </div>
                        <!--/ End Button -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
