<?php


namespace Yongze\ESign\Foundation\ServiceProviders;

use Yongze\ESign\SignFlow;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class SignFlowProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['signflow'] = function ($pimple) {
            return new SignFlow\SignFlow($pimple['access_token']);
        };
    }
}