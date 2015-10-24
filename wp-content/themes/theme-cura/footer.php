</div>
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-7">
                    <div class="row contact-details text-center">
                    <?php if (get_option('contact_address') !== ''): ?>
                        <div class="col-xs-12 col-md-4">
                            <div class="contact-address">
                                <?=nl2br(get_option('contact_address')); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (get_option('contact_number') !== ''): ?>
                        <div class="col-xs-12 col-md-4">
                            <div class="contact-number">
                                <?=get_option('contact_number')?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (get_option('contact_address') !== ''): ?>
                        <div class="col-xs-12 col-md-4">
                            <div class="contact-number">
                                <?=get_option('contact_email')?>
                            </div>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5">
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();
