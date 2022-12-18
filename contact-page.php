<?php
/*
	Template Name: Contact Page
 */

get_header();
?>
<?php $options = get_option('pearl_settings'); ?>
<div class="bodyContent">
    <div class="pageCointainer">
        <div class="bodyContent">
            <div class="pageCointainer">
                <section class="comonSection mapSection mb30">
                    <?php if($options['contact-api']) :  ?>
                        <?php echo $options['contact-map']; ?>
                    <?php else : ?>
                        <div class="map" id="map"></div>
                    <?php endif; ?>  
                </section>
                <section class="comonSection contactSection">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="sectionTitle"><?php echo $options['contact-title']; ?></h2>
                            </div>
                        </div>
                        <div class="row mb30">
                            <div class="col-lg-8">
                                <div class="contact_form">
                                    <?php if($options['contact-switcher']==0) : ?>
                                    <form method="post" action="" id="contactForm">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" class="required" name="full_name" placeholder="Full Name *" />
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="required" name="email" placeholder="Email *" />
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" name="phone" placeholder="Phone" />
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="required" name="sjubject" placeholder="Subject *" />
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea name="message" class="required" placeholder="Message *"></textarea>
                                            </div>
                                            <div class="col-lg-12">
                                                <button  type="submit" class="btt_btn"><span><i class="icon icon-Mail"></i>Send Message</span></button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php else : ?>
                                        <?php echo do_shortcode(''.$options['contact-form-shortcode'].'') ; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="icon_box_01">
                                    <i class="icon icon-Mail"></i>
                                    <h3><?php _e('Email Address', 'pearl'); ?></h3>
                                    <p><?php echo $options['contact-email']; ?></p>
                                </div>
                                <div class="icon_box_01">
                                    <i class="icon icon-Phone"></i>
                                    <h3><?php _e('Phone Number', 'pearl'); ?></h3>
                                    <p><?php echo $options['contact-phone']; ?></p>
                                </div>
                                <div class="icon_box_01 addrBox">
                                    <i class="icon icon-Pointer"></i>
                                    <h3><?php _e('Address', 'pearl'); ?></h3>
                                    <p>
                                    <?php echo $options['contact-address']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <script src="https://maps.google.com/maps/api/js?key=<?php echo $options['contact-api-text']; ?>"></script>
                <?php
                //get_sidebar();
                get_footer();


