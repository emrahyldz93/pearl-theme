<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pearl
 */

?>

<div class="row mt30" <?php if ($options['bio-switcher'] == 0) {
                        echo 'hidden';
                    } ?>>
    <div class="col-lg-12">
        <h2 class="sectionTitle mb22"><?php echo $options['bio-title'] ?></h2>
    </div>
    <div class="col-lg-12">
        <div class="abContent">
        <?php echo $options['bio-content'] ?>
           
        </div>
    </div>
</div>