<?php

// Require interfaces
require_once('lib/WordPress/ThemeCustomizerInterface.php');
// Require Classes
require_once('lib/Helpers/YouTubeHelper.php');
require_once('lib/WordPress/ThemeHelper.php');
require_once('lib/WordPress/ThemeCura/ThemeCura.php');
require_once('lib/WordPress/ThemeCura/ThemeCustomizer.php');

global $theme;
$theme = new Inggo\WordPress\ThemeCura\ThemeCura(new Inggo\WordPress\ThemeHelper, new Inggo\WordPress\ThemeCura\ThemeCustomizer);
