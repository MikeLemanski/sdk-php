<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.GetAuthRequestPayloadResponse</code>
 */
class GetAuthRequestPayloadResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenPayload payload = 1;</code>
     */
    private $payload = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Token\TokenPayload $payload
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenPayload payload = 1;</code>
     * @return \Io\Token\Proto\Common\Token\TokenPayload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenPayload payload = 1;</code>
     * @param \Io\Token\Proto\Common\Token\TokenPayload $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\TokenPayload::class);
        $this->payload = $var;

        return $this;
    }

}

