<?php namespace Inggo\WordPress\ThemeCura;

use Inggo\WordPress\CustomizerInterface;
use Inggo\WordPress\ThemeCustomizeHelper;

class ThemeCustomizer implements CustomizerInterface
{
    // Reference to the ThemeCustomizeHelper object
    protected $ch;
    public $social = array(
        'facebook'  => 'Facebook',
        'twitter'   => 'Twitter',
        'linkedin'  => 'LinkedIn',
        'google'    => 'Google+',
        'instagram' => 'Instagram',
    );

    /**
     * Register the customize controls
     * @param  \WP_Customize_Manager $wp_customize WP_Customize_Manager object
     */
    public function register(\WP_Customize_Manager $manager)
    {
        $this->ch = new ThemeCustomizeHelper($manager);
        $this->initializeContactDetails();
        $this->initializeSocialMedia();
        $this->initializeFooterPages();
    }

    /**
     * Initialize Contact Details section and fields
     */
    private function initializeContactDetails()
    {
        $this->ch->addSection('theme_cura_contact_details', 'Contact Details');
        $this->ch->addControl('contact_address', 'theme_cura_contact_details', 'Address', 'textarea');
        $this->ch->addControl('contact_number', 'theme_cura_contact_details', 'Contact Number');
        $this->ch->addControl('contact_email', 'theme_cura_contact_details', 'Email Address');
    }

    /**
     * Initialize Social Media section and fields
     */
    private function initializeSocialMedia()
    {
        $this->ch->addSection('theme_cura_social_media', 'Social Media', 130);
        foreach ($this->social as $media => $label) {
            $this->ch->addControl("social_{$media}", 'theme_cura_social_media', $label);
        }
    }

    /**
     * Initialize Footer Pages section and fields
     */
    private function initializeFooterPages()
    {
        $this->ch->addSection('theme_cura_footer_pages', 'Footer Pages', 140);
        $this->ch->addPagesControl('footer_privacy_policy', 'theme_cura_footer_pages', 'Privacy Policy Page');
        $this->ch->addPagesControl('footer_cookie_policy', 'theme_cura_footer_pages', 'Cookie Policy Page');
    }

    /**
     * Get social options
     */
    public function getSocialOptions()
    {
        return array_map(function ($media) {
            return "social_{$media}";
        }, array_keys($this->social));
    }
}
