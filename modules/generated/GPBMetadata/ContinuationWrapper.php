<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: continuation_wrapper.proto

namespace GPBMetadata;

class ContinuationWrapper
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\BrowseContinuation::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
continuation_wrapper.proto\'com.google.protos.youtube.api.innertube"�
ContinuationWrapperg
browse_continuation�ՠ& (2B.com.google.protos.youtube.api.innertube.BrowseContinuationWrapperH �B
_browse_continuationbproto3'
        , true);

        static::$is_initialized = true;
    }
}

