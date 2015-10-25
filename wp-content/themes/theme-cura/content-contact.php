<?php if (get_field('contact_address')): ?>
<div class="contact-address contact-item">
    <div class="contact-icon"><span class="icon icon-location"></span></div>
    <div class="contact-content"><?=get_field('contact_address')?></div>
</div>
<?php endif; ?>

<?php if (get_field('contact_number')): ?>
<div class="contact-number contact-item">
    <div class="contact-icon"><span class="icon icon-phone-vertical"></span></div>
    <div class="contact-content"><?=get_field('contact_number')?></div>
</div>
<?php endif; ?>

<?php if (get_field('contact_email')): ?>
<div class="contact-email contact-item">
    <div class="contact-icon"><span class="icon icon-mail"></span></div>
    <div class="contact-content"><?=get_field('contact_email')?></div>
</div>
<?php endif; ?>

<?php if (get_field('contact_website')): ?>
<div class="contact-website contact-item">
    <div class="contact-icon"><span class="icon icon-monitor"></span></div>
    <div class="contact-content"><?=get_field('contact_website')?></div>
</div>
<?php endif; ?>
