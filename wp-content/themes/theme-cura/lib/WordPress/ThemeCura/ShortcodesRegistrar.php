<?php namespace Inggo\WordPress\ThemeCura;

use Inggo\WordPress\ShortcodesRegistrarInterface;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraPropertiesShortcode;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraProcessesShortcode;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraTeamShortcode;

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
    }
}
