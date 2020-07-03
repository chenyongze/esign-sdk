<?php


namespace Yong\ESign\Foundation\ServiceProviders;

use Yong\ESign\File;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class FileProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['file'] = function ($pimple) {
            return new File\File($pimple['access_token']);
        };
    }
}