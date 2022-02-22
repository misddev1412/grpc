<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole RPC.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/rpc/blob/master/LICENSE
 */
# source: helloworld.proto

namespace GPBMetadata;

class Helloworld
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(
            '
�
helloworld.proto
helloworld"
HelloRequest
name (	"

HelloReply
message (	2I
Greeter>
SayHello.helloworld.HelloRequest.helloworld.HelloReply" 2O
StreamE
FetchResponse.helloworld.HelloRequest.helloworld.HelloReply" 0bproto3', true);

        static::$is_initialized = true;
    }
}
