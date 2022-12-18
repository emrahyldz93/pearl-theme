<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pearl
 */

?>

<div class="row mt60" <?php if ($options['price-switcher'] == 0) {
                            echo 'hidden';
                        } ?>>
    <div class="col-lg-12">
        <h2 class="sectionTitle"><?php echo $options['price-title'] ?></h2>
    </div>
    <?php
    $layout = $options['price-group-options'];

    if ($layout) : foreach ($layout as $row) { ?>

            <div class="col-lg-4">
                <div class="pricingTable text-center">
                    <i class="<?php echo $row['price-icon'] ?>"></i>
                    <h5><?php echo $row['price-package'] ?></h5>
                    <p>
                         <?php echo $row['price-content'] ?>
                    </p>
                    <h2><?php echo $row['price-buy'] ?></h2>
                    <h6><?php echo $row['price-project'] ?></h6>
                    <a href="<?php echo $row['price-url'] ?>" class="btt_link"><i class="icon icon-OpenedLock"></i><span><?php echo $row['price-url-text'] ?></span></a>
                </div>
            </div>


    <?php    }
    endif; ?>
</div>