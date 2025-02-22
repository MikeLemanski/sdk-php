<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gateway.proto

namespace Io\Token\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.gateway.GetTokensRequest</code>
 */
class GetTokensRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ACCESS or TRANSFER
     *
     * Generated from protobuf field <code>.io.token.proto.gateway.GetTokensRequest.Type type = 1;</code>
     */
    private $type = 0;
    /**
     * Optional paging settings.
     *
     * Generated from protobuf field <code>.io.token.proto.gateway.Page page = 2;</code>
     */
    private $page = null;
    /**
     * optional filter
     *
     * Generated from protobuf field <code>.io.token.proto.gateway.GetTokensRequest.TokenFilter filter = 3;</code>
     */
    private $filter = null;
    /**
     * for backwards compatibility with older JS clients TODO(RD-2738) remove
     *
     * Generated from protobuf field <code>string offset = 4;</code>
     */
    private $offset = '';
    /**
     * Generated from protobuf field <code>int32 limit = 5;</code>
     */
    private $limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           ACCESS or TRANSFER
     *     @type \Io\Token\Proto\Gateway\Page $page
     *           Optional paging settings.
     *     @type \Io\Token\Proto\Gateway\GetTokensRequest\TokenFilter $filter
     *           optional filter
     *     @type string $offset
     *           for backwards compatibility with older JS clients TODO(RD-2738) remove
     *     @type int $limit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * ACCESS or TRANSFER
     *
     * Generated from protobuf field <code>.io.token.proto.gateway.GetTokensRequest.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * ACCESS or TRANSFER
     *
     * Generated from protobuf field <code>.io.token.proto.gateway.GetTokensRequest.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Gateway\GetTokensRequest_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional paging settings.
     *
     * Generated from protobuf field <code>.io.token.proto.gateway.Page page = 2;</code>
     * @return \Io\Token\Proto\Gateway\Page
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Optional paging settings.
     *
     * Generated from protobuf field <code>.io.token.proto.gateway.Page page = 2;</code>
     * @param \Io\Token\Proto\Gateway\Page $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Gateway\Page::class);
        $this->page = $var;

        return $this;
    }

    /**
     * optional filter
     *
     * Generated from protobuf field <code>.io.token.proto.gateway.GetTokensRequest.TokenFilter filter = 3;</code>
     * @return \Io\Token\Proto\Gateway\GetTokensRequest\TokenFilter
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * optional filter
     *
     * Generated from protobuf field <code>.io.token.proto.gateway.GetTokensRequest.TokenFilter filter = 3;</code>
     * @param \Io\Token\Proto\Gateway\GetTokensRequest\TokenFilter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Gateway\GetTokensRequest_TokenFilter::class);
        $this->filter = $var;

        return $this;
    }

    /**
     * for backwards compatibility with older JS clients TODO(RD-2738) remove
     *
     * Generated from protobuf field <code>string offset = 4;</code>
     * @return string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * for backwards compatibility with older JS clients TODO(RD-2738) remove
     *
     * Generated from protobuf field <code>string offset = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkString($var, True);
        $this->offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 limit = 5;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>int32 limit = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;

        return $this;
    }

}

