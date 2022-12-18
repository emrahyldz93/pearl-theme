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
    <div class="col-lg-5" <?php if ($options['H-switcher'] == 0) {
                                echo 'hidden';
                            } ?>>
        <h2 class="sectionTitle"><?php echo $options['H-title'] ?></h2>
        <?php
        $layout = $options['H-group-options'];

        if ($layout) : foreach ($layout as $row) { ?>

                <div class="singleInt">
                    <i class="<?php echo $row['hobbies-icon'] ?>"></i>
                    <h3><?php echo $row['hobbies-title'] ?></h3>
                </div>


        <?php    }
        endif; ?>


    </div>
    <div class="col-lg-7" <?php if ($options['L-switcher'] == 0) {
                                echo 'hidden';
                            } ?>>
        <h2 class="sectionTitle"><?php echo $options['L-title'] ?></h2>
        <div class="languageDiv">
            <?php
            $layout = $options['L-group-options'];

            if ($layout) : foreach ($layout as $row) { ?>

                    <div class="ldInner profLevel<?php echo $row['languages-level'] ?>">
                        <h5><?php echo $row['languages-title'] ?></h5>
                        <span></span><span></span><span></span><span></span><span></span>
                        <span></span><span></span><span></span><span></span><span></span>
                        <i><?php echo $row['languages-level'] ?>/10</i>
                    </div>


            <?php    }
            endif; ?>

        </div>
    </div>
</div>