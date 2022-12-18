<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pearl
 */

?>

<div class="row mt60">
    <div class="col-lg-12" <?php if ($options['counter-switcher'] == 0) {
                                echo 'hidden';
                            } ?>>
        <h2 class="sectionTitle"><?php echo $options['counter-title'] ?></h2>
    </div>
</div>
<div class="row mb30">
    <?php
    $layout = $options['counter-group-options'];

    if ($layout) : foreach ($layout as $row) { ?>

            <div class="col-lg-4">
                <div class="icon_box_03 text-center hasCounter" data-count="<?php echo $row['counter-number'] ?>">
                    <div class="icon_div">
                        <i><span class="counter"><?php echo $row['counter-number'] ?></span>+</i>
                    </div>
                    <h5><?php echo $row['counter-title'] ?></h5>
                </div>
            </div>


    <?php    }
    endif; ?>



</div>