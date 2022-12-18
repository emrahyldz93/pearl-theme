<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pearl
 */

?>

<div class="row mt52 itemMb30" <?php if ($options['what-switcher'] == 0) {
                        echo 'hidden';
                    } ?>>
    <div class="col-lg-12">
        <h2 class="sectionTitle"><?php echo $options['what-title'] ?></h2>
    </div>
    <?php
    $layout = $options['what-group-options'];

    if ($layout) : foreach ($layout as $row) { ?>

            <div class="col-lg-4">
                <div class="icon_box_02">
                    <div class="i_div">
                        <i class="<?php echo $row['what-opt-icon'] ?>"></i>
                    </div>
                    <h3><a href="javascript:void(0);"><?php echo $row['what-opt-title'] ?></a></h3>
                    <h5><?php echo $row['what-opt-subtitle'] ?></h5>
                    <p>
                        <?php echo $row['what-opt-content'] ?>
                    </p>
                </div>
            </div>
    <?php    }
    endif; ?>

</div>

