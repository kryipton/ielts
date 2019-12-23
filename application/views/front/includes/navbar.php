<?php $lang = $this->session->userdata("dil"); ?>
<div class="header-menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-default">
                    <div class="navbar-collapse">
                        <!-- Main Menu -->
                        <ul id="nav" class="nav menu navbar-nav">
                            <li ><a href="<?php echo base_url("$lang/home")?>"><?php echo $this->lang->line("ana_sehife")?></a>
                            </li>


                            <li><a href="#"><?php echo $this->lang->line("kurslar")?><i class="fa fa-angle-down"></i></a>
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


                            <li><a href="<?php echo base_url("$lang/teachers")?>"><?php echo $this->lang->line("muellimler")?></a>

                            </li>



                            <li><a href="<?php echo base_url("$lang/events")?>"><?php echo $this->lang->line("tedbirler")?></a>

                            </li>


                            <li><a href="<?php echo base_url("$lang/blogs")?>"><?php echo $this->lang->line("bloglar")?></a>
                            </li>

                            <li><a href="#"><?php echo $this->lang->line("haqqimizda")?><i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown">

                                    <li><a href="<?php echo base_url("$lang/about")?>"><?php echo $this->lang->line("haqqimizda")?></a></li>
                                    <li><a href="<?php echo base_url("$lang/study/abroad")?>"><?php echo $this->lang->line("xaricde_tehsil")?></a></li>

                                </ul>
                            </li>



                            <li><a href="<?php echo base_url("$lang/faq")?>"><?php echo $this->lang->line("Faq")?></a></li>


                            <li><a href="<?php echo base_url("$lang/contact")?>"><?php echo $this->lang->line("elaqe")?></a></li>

                        </ul>
                        <!-- End Main Menu -->
                        <!-- button -->
                        <div class="button" >
                            <a href="<?php echo base_url("$lang/home/")?>#enroll" class="btn"><i class="fa fa-pencil"></i><?php echo $this->lang->line("muraciet")?></a>
                        </div>
                        <!--/ End Button -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
