<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pearl
 */

?>
<div class="row" <?php if ($options['about-switcher'] == 0) {
                        echo 'hidden';
                    } ?>>
    <div class="col-lg-12">
        <h2 class="sectionTitle"><?php echo $options['about-title'] ?></h2>
        <div class="row">
            <?php if($options['about-name']) : ?>
            <div class="col-lg-6">
                <div class="icon_box_01">
                    <i class="icon icon-User"></i>
                    <h3><?php echo  esc_html__('My Name', 'pearl'); ?></h3>
                    <p><?php echo $options['about-name'] ?></p>
                </div>
            </div>
            <?php endif; ?>
            <?php if($options['about-age']) : ?>
            <div class="col-lg-6">
                <div class="icon_box_01">
                    <i class="icon icon-Calculator"></i>
                    <h3><?php echo  esc_html__('My Age', 'pearl'); ?></h3>
                    <p><?php echo $options['about-age'] ?></p>
                </div>
            </div>
            <?php endif; ?>
            <?php if($options['about-email']) : ?>
            <div class="col-lg-6">
                <div class="icon_box_01">
                    <i class="icon icon-Mail"></i>
                    <h3><?php echo  esc_html__('Email Address', 'pearl'); ?></h3>
                    <p><?php echo $options['about-email'] ?></p>
                </div>
            </div>
            <?php endif; ?>
            <?php if($options['about-phone']) : ?>
            <div class="col-lg-6">
                <div class="icon_box_01">
                    <i class="icon icon-Phone"></i>
                    <h3><?php echo  esc_html__('Phone Number', 'pearl'); ?></h3>
                    <p><?php echo $options['about-phone'] ?></p>
                </div>
            </div>
            <?php endif; ?>
            <?php if($options['about-address']) : ?>
            <div class="col-lg-6">
                <div class="icon_box_01">
                    <i class="icon icon-Pointer"></i>
                    <h3><?php echo  esc_html__('Address', 'pearl'); ?></h3>
                    <p><a href="<?php echo $options['about-address'] ?>" target="_blank"><?php echo  esc_html__('Click Here to View Map.', 'pearl'); ?></a></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>