<?php

namespace Statamic\Addons\InstagramFeed;

use Instagram\Api;
use Statamic\Extend\Tags;

class InstagramFeedTags extends Tags
{
    /**
     * The {{ instagram_feed }} tag
     *
     * @return string|array
     */
    public function index()
    {
        $username = $this->getConfig('username', null);

        if (!empty($username)) {
            $api = new Api();
            $api->setUserName($username);
            $feed = $api->getFeed();

            return $this->parseLoop(collect($feed->medias)->transform(function ($media) {
                return [
                    'id' => $media->id,
                    'height' => $media->height,
                    'width' => $media->width,
                    'image' => $media->displaySrc,
                    'thumb' => $media->thumbnailSrc,
                    'date' => $media->date->format('Y-m-d H:i:s'),
                    'caption' => $media->caption,
                    'comments' => $media->comments,
                    'likes' => $media->likes,
                ];
            })->take($this->getParamInt('limit', 12))->all());
        }

        return null;
    }

    /**
     * The {{ instagram_feed:example }} tag
     *
     * @return string|array
     */
    // public function example()
    // {
    //     //
    // }
}
