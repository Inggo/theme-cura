<?php

// Require Classes
require_once('lib/Helpers/YouTubeHelper.php');
require_once('lib/WordPress/ThemeHelper.php');
require_once('lib/WordPress/ThemeCura.php');

global $theme;
$theme = new Inggo\WordPress\ThemeCura(new Inggo\WordPress\ThemeHelper);
