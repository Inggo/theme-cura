<?php namespace Inggo\WordPress\ThemeCura;

use Inggo\WordPress\ShortcodesRegistrarInterface;
use Inggo\WordPress\ThemeCura\Shortcodes\CuraPropertiesShortcode;

class ShortcodesRegistrar implements ShortcodesRegistrarInterface
{
    protected $shortcodes;

    /**
     * Do the registrations here
     */
    public function register()
    {
        $shortcodes[] = new CuraPropertiesShortcode();
    }
}
