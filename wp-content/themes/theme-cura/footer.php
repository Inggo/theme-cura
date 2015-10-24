<?php global $theme; ?>
</div>
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-7">
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
                <div class="col-xs-12 col-md-5">
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
</footer>
<?php wp_footer();
