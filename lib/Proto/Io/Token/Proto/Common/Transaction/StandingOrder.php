<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Io\Token\Proto\Common\Transaction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a standing order as defined by the bank.
 *
 * Generated from protobuf message <code>io.token.proto.common.transaction.StandingOrder</code>
 */
class StandingOrder extends \Google\Protobuf\Internal\Message
{
    /**
     * Standing order ID defined by the bank
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>.io.token.proto.common.transaction.StandingOrder.Status status = 2;</code>
     */
    private $status = 0;
    /**
     * Points to the token, only set for Token standing orders.
     *
     * Generated from protobuf field <code>string token_id = 3;</code>
     */
    private $token_id = '';
    /**
     * Points to the token submission, only set for Token standing orders.
     *
     * Generated from protobuf field <code>string token_submission_id = 4;</code>
     */
    private $token_submission_id = '';
    /**
     * CreationTime
     *
     * Generated from protobuf field <code>int64 created_at_ms = 5;</code>
     */
    private $created_at_ms = 0;
    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.ProviderStandingOrderDetails provider_standing_order_details = 6;</code>
     */
    private $provider_standing_order_details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Standing order ID defined by the bank
     *     @type int $status
     *     @type string $token_id
     *           Points to the token, only set for Token standing orders.
     *     @type string $token_submission_id
     *           Points to the token submission, only set for Token standing orders.
     *     @type int|string $created_at_ms
     *           CreationTime
     *     @type \Io\Token\Proto\Common\Providerspecific\ProviderStandingOrderDetails $provider_standing_order_details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Standing order ID defined by the bank
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Standing order ID defined by the bank
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.transaction.StandingOrder.Status status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.transaction.StandingOrder.Status status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Io\Token\Proto\Common\Transaction\StandingOrder_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Points to the token, only set for Token standing orders.
     *
     * Generated from protobuf field <code>string token_id = 3;</code>
     * @return string
     */
    public function getTokenId()
    {
        return $this->token_id;
    }

    /**
     * Points to the token, only set for Token standing orders.
     *
     * Generated from protobuf field <code>string token_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTokenId($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_id = $var;

        return $this;
    }

    /**
     * Points to the token submission, only set for Token standing orders.
     *
     * Generated from protobuf field <code>string token_submission_id = 4;</code>
     * @return string
     */
    public function getTokenSubmissionId()
    {
        return $this->token_submission_id;
    }

    /**
     * Points to the token submission, only set for Token standing orders.
     *
     * Generated from protobuf field <code>string token_submission_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTokenSubmissionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_submission_id = $var;

        return $this;
    }

    /**
     * CreationTime
     *
     * Generated from protobuf field <code>int64 created_at_ms = 5;</code>
     * @return int|string
     */
    public function getCreatedAtMs()
    {
        return $this->created_at_ms;
    }

    /**
     * CreationTime
     *
     * Generated from protobuf field <code>int64 created_at_ms = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreatedAtMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->created_at_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.ProviderStandingOrderDetails provider_standing_order_details = 6;</code>
     * @return \Io\Token\Proto\Common\Providerspecific\ProviderStandingOrderDetails
     */
    public function getProviderStandingOrderDetails()
    {
        return $this->provider_standing_order_details;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.ProviderStandingOrderDetails provider_standing_order_details = 6;</code>
     * @param \Io\Token\Proto\Common\Providerspecific\ProviderStandingOrderDetails $var
     * @return $this
     */
    public function setProviderStandingOrderDetails($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Providerspecific\ProviderStandingOrderDetails::class);
        $this->provider_standing_order_details = $var;

        return $this;
    }

}

