<?php
/*
	Template Name: Resume Page
 */

get_header();
?>
<?php $options = get_option('pearl_settings'); ?>
<div class="bodyContent">
    <div class="pageCointainer">
        <div class="bodyContent" >
            <div class="pageCointainer">
                <section class="comonSection resumeSection">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="sectionTitle"><?php echo $options['education-general-title']; ?></h2>
                                <div class="kr-accordion" id="edication_accordion">
                                    <?php
                                    $i = 0;
                                    $layout = $options['education-group'];

                                    if ($layout) : foreach ($layout as $row) { ?>

                                            <div class="card">
                                                <div class="card-header" id="ea_01">
                                                    <h2 class="mb-0">
                                                        <a class="<?php if ($i == 0) echo ' ';
                                                                    else {
                                                                        echo 'collapsed ';
                                                                    }  ?>" href="#" data-toggle="collapse" data-target="#ea_col_0<?php echo $i ?>" aria-expanded="<?php if ($i == 0) echo 'true';
                                                                                                                                                                    else {
                                                                                                                                                                        echo 'false';
                                                                                                                                                                    } ?>" aria-controls="ea_col_01">
                                                            <i class="<?php echo $row['education-icon']; ?>"></i>
                                                            <span><?php echo $row['education-title']; ?></span>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="ea_col_0<?php echo $i ?>" class="collapse <?php if ($i == 0) echo 'show';  ?>" aria-labelledby="ea_0<?php echo $i ?>" data-parent="#edication_accordion">
                                                    <div class="card-body">
                                                        <div class="ac_meta"><span><?php echo $row['education-year']; ?></span><span><?php echo $row['education-grade']; ?></span></div>
                                                        <?php echo $row['education-content']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php $i++;
                                        }
                                    endif;  ?>




                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h2 class="sectionTitle"><?php echo $options['experience-general-title']; ?></h2>
                                <div class="kr-accordion" id="exps_accordion">

                                    <?php
                                    $i = 0;
                                    $layout = $options['experience-group'];

                                    if ($layout) : foreach ($layout as $row) { ?>

                                            <div class="card">
                                                <div class="card-header" id="ex_01">
                                                    <h2 class="mb-0">
                                                        <a class="<?php if ($i == 0) echo ' ';
                                                                    else {
                                                                        echo 'collapsed ';
                                                                    }  ?>" href="#" data-toggle="collapse" data-target="#ex_col_0<?php echo $i ?>" aria-expanded="<?php if ($i == 0) echo 'true';
                                                                                                                                                                    else {
                                                                                                                                                                        echo 'false';
                                                                                                                                                                    } ?>" aria-controls="ex_col_0<?php echo $i ?>">
                                                            <i class="<?php echo $row['experience-icon']; ?>"></i>
                                                            <span><?php echo $row['experience-title']; ?></span>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="ex_col_0<?php echo $i ?>" class="collapse <?php if ($i == 0) echo 'show';  ?>" aria-labelledby="ex_0<?php echo $i ?>" data-parent="#exps_accordion">
                                                    <div class="card-body">
                                                        <div class="ac_meta"><span><?php echo $row['experience-year']; ?></span><span><?php echo $row['experience-grade']; ?></span></div>
                                                        <?php echo $row['experience-content']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php $i++;
                                        }
                                    endif;  ?>



                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php
                //get_sidebar();
                get_footer();
