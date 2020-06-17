<?php

namespace Austenc\InstagramFeed;

use Statamic\Providers\AddonServiceProvider;
use Austenc\InstagramFeed\Tags\InstagramFeed;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        InstagramFeed::class,
    ];

    public function register()
    {
        parent::register();

        $this->mergeConfigFrom(__DIR__ . '/../config/instagram-feed.php', 'instagram-feed');
    }
}
