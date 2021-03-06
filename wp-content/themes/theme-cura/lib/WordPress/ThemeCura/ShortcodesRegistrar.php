<?php namespace Inggo\WordPress\ThemeCura;

use Inggo\WordPress\ShortcodesRegistrarInterface;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraPropertiesShortcode;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraProcessesShortcode;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraTeamShortcode;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraBoxShortcode;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraReasonsShortcode;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraTestimonialsShortcode;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraFaqsShortcode;

class ShortcodesRegistrar implements ShortcodesRegistrarInterface
{
    protected $shortcodes;

    /**
     * Do the registrations here
     */
    public function register()
    {
        $this->shortcodes[] = new CuraPropertiesShortcode();
        $this->shortcodes[] = new CuraProcessesShortcode();
        $this->shortcodes[] = new CuraTeamShortcode();
        $this->shortcodes[] = new CuraBoxShortcode();
        $this->shortcodes[] = new CuraReasonsShortcode();
        $this->shortcodes[] = new CuraTestimonialsShortcode();
        $this->shortcodes[] = new CuraFaqsShortcode();
    }
}
