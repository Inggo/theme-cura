<?php namespace Inggo\Helpers;

class YouTubeHelper
{
    // A constant for the YouTube Image URL
    const YOUTUBE_IMAGE_URL = '//i3.ytimg.com/vi/';

    // Default image resolution
    protected $defaultResolution = 'maxresdefault';

    // List of thumbnail types
    protected $validThumbnailTypes = array(
        'maxresdefault',
        'hqdefault',
        'mqdefault',
        'sddefault',
        'default',
        '0',
        '1',
        '2',
        '3',
    );

    /**
     * Gets a YouTube Video ID from a YouTube link
     * @param  string  $url  URL of the YouTube video
     * @return string        Parsed ID of the YouTube link
     */
    public function getVideoID($url)
    {
        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
            return $match[1];
        }

        return '';
    }

    /**
     * Gets a YouTube Video thumbnail from a YouTube ID
     * @param  string  $url   ID of the YouTube video
     * @param  string  $type  Type of thumbnail (0, 1, 2, 3, hqdefault, mqdefault, sddefault, maxresdefault, or default)
     * @return string         URL of the thumbnail
     */
    public function getVideoThumbnail($ID, $type = null)
    {
        return self::YOUTUBE_IMAGE_URL . $ID . '/' . $this->validateThumbnailType($type) . '.jpg';
    }

    /**
     * Gets a YouTube Video thumbnail form a YouTube link
     * @param  string  $url   URL of the YouTube video
     * @param  string  $type  Type of thumbnail (0, 1, 2, 3, hqdefault, mqdefault, sddefault, maxresdefault, or default)
     * @return string         URL of the thumbnail
     */
    public function getVideoThumbnailFromLink($link, $type = null)
    {
        return $this->getVideoThumbnail($this->getVideoID($link), $type);
    }

    /**
     * Returns a valid thumbnail type string
     * @param  string  $type  Type of thumbnail to verify
     * @return string         A valid thumbnail type
     */
    private function validateThumbnailType($type)
    {
        return in_array($type, $this->validThumbnailTypes) ? $type : $this->defaultResolution;
    }
}