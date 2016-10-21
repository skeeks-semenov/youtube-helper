<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 21.10.2016
 */
namespace skeeks\youtubeHelper;

/**
 * Class YoutubeHelper
 *
 * @package skeeks\youtubeHelper
 */
class YoutubeHelper
{
    /**
     * @var string Original youtube id
     */
    private $_youtubeId;

    /**
     * @param $code youtube id or youtube url
     */
    public function __construct(string $code)
    {
        $this->_youtubeId = self::parseYoutubeId($code);
    }

    /**
     * Smart ID to obtain youtube
     * @param string $code youtube id or youtube url
     *
     * @return string
     */
    static public function parseYoutubeId(string $code)
    {
        $id = '';

        $matches = [];

        //TODO:: upgrade this is
        if (preg_match_all('/\?v\=(.*)$/i', $code, $matches))
        {
            if (isset($matches[1][0]))
            {
                $id = $matches[1][0];
            }
        }

        return (string) $id;
    }

    /**
     * @return string
     */
    public function getYoutubeId()
    {
        return $this->_youtubeId;
    }

    /**
     * @return string
     */
    public function getYoutubeEmbed()
    {
        if (!$this->youtubeId)
        {
            return '';
        }
        return (string) "//www.youtube.com/embed/" . $this->youtubeId;
    }

    /**
     * @return string
     */
    public function getYoutubeWatch()
    {
        if (!$this->youtubeId)
        {
            return '';
        }
        return "//www.youtube.com/watch?v=" . $this->youtubeId;
    }

    /**
     * @return string
     */
    public function getYoutubeImg()
    {
        if (!$this->youtubeId)
        {
            return '';
        }
        return "//img.youtube.com/vi/" . $this->youtubeId . '/0.jpg';
    }
}