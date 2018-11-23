<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/2/22
 * Time: 14:23
 */

namespace TaskAPI\Foundation\ServiceProviders;


use Pimple\Container;
use Pimple\ServiceProviderInterface;
use TaskAPI\Api\Sys;

class SysServiceProvider implements ServiceProviderInterface
{

    public function register(Container $container)
    {
        $container['sys'] = function ($container) {
            return new Sys();
        };
    }
}
