<?php global $theme; ?>
</div>
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-8">
                    <div class="row contact-details text-center">
                    <?php if (get_option('contact_address') !== ''): ?>
                        <div class="col-xs-12 col-md-4">
                            <div class="contact-detail contact-address">
                                <span class="icon icon-location"></span>
                                <?=nl2br(get_option('contact_address')); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (get_option('contact_number') !== ''): ?>
                        <div class="col-xs-12 col-md-4">
                            <div class="contact-detail contact-number">
                                <span class="icon icon-phone"></span>
                                <?=get_option('contact_number')?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (get_option('contact_address') !== ''): ?>
                        <div class="col-xs-12 col-md-4">
                            <div class="contact-detail contact-number">
                                <span class="icon icon-mail"></span>
                                <?=get_option('contact_email')?>
                            </div>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <ul class="social-list list-inline">
                        <?php foreach ($theme->customizer->getSocialOptions() as $socialMedia): ?>
                            <?php if (get_option($socialMedia) !== ''): ?>
                                <li class="social-media">
                                    <a href="<?=get_option($socialMedia);?>" target="_blank">
                                        <i class="icon icon-<?=$socialMedia?>"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                    <p class="copyright"><a class="text-uppercase" href="<?=home_url()?>"><?php bloginfo('name'); ?></a> &copy; All Rights Reserved</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
                    <ul class="list-inline footer-nav">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="javascript:;" class="back-to-top">Back To Top</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();
