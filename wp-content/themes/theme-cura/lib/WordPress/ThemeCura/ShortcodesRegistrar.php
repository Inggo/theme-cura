<?php namespace Inggo\WordPress\ThemeCura;

use Inggo\WordPress\ShortcodesRegistrarInterface;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraPropertiesShortcode;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraProcessesShortcode;

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
    }
}
