<?php











/**





 * Template part for displaying posts





 *





 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/





 *





 * @package pearl





 */











?>











<div class="row mt30" <?php if ($options['client-switcher'] == 0) {





                            echo 'hidden';





                        } ?>>





    <div class="col-lg-12">





        <div class="clientSlider owl-carousel">





            <?php





            $layout = $options['client-group-options'];











            if ($layout) : foreach ($layout as $row) { ?>











                    <div class="sliderItem">





                        <a href="javascript:void(0);">





                            <img src="<?php echo $row['client-image']['url'] ?>" alt="Client" />





                        </a>





                    </div>

















            <?php    }





            endif; ?>





























        </div>





    </div>





</div>