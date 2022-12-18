<?php



/**

 * Template part for displaying posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package pearl

 */



?>



<div class="row mt30" <?php if ($options['testimonials-switcher'] == 0) {

                            echo 'hidden';
                        } ?>>

    <div class="col-lg-12">

        <h2 class="sectionTitle"><?php echo $options['testimonials-title'] ?></h2>

    </div>

    <div class="col-lg-12">

        <div class="testimonialSlider owl-carousel">

            <?php

            $layout = $options['testimonials-group-options'];



            if ($layout) : foreach ($layout as $row) { ?>





                    <div class="singleTestimonial">

                        <div class="testiImg">


                                <img src="<?php echo $row['testimonials-image']['url'] ?>" alt="<?php echo $row['testimonials-image']['alt'] ?>">

                       

                            <span></span>

                        </div>

                        <div class="testicon">

                            <p>

                                <?php echo $row['testimonials-content'] ?>

                            </p>

                            <div class="tesAuthor">

                                <h5><?php echo $row['testimonials-name'] ?></h5>

                                <h6><?php echo $row['testimonials-url'] ?></h6>

                            </div>

                        </div>

                    </div>





            <?php    }

            endif; ?>

        </div>

    </div>

</div>