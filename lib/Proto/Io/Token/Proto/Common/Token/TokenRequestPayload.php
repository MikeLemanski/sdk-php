<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: token.proto

namespace Io\Token\Proto\Common\Token;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.token.TokenRequestPayload</code>
 */
class TokenRequestPayload extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_ref_id = 1;</code>
     */
    private $user_ref_id = '';
    /**
     * Generated from protobuf field <code>string customization_id = 2;</code>
     */
    private $customization_id = '';
    /**
     * Generated from protobuf field <code>string redirect_url = 3;</code>
     */
    private $redirect_url = '';
    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember to = 4;</code>
     */
    private $to = null;
    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.ActingAs acting_as = 5;</code>
     */
    private $acting_as = null;
    /**
     * Generated from protobuf field <code>string description = 8 [(.io.token.proto.extensions.field.redact) = true];</code>
     */
    private $description = '';
    /**
     * Generated from protobuf field <code>string callback_state = 9;</code>
     */
    private $callback_state = '';
    /**
     * Generated from protobuf field <code>string destination_country = 10;</code>
     */
    private $destination_country = '';
    /**
     * ref ID that will be transferred to the token payload
     *
     * Generated from protobuf field <code>string ref_id = 11;</code>
     */
    private $ref_id = '';
    protected $request_body;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_ref_id
     *     @type string $customization_id
     *     @type string $redirect_url
     *     @type \Io\Token\Proto\Common\Token\TokenMember $to
     *     @type \Io\Token\Proto\Common\Token\ActingAs $acting_as
     *     @type \Io\Token\Proto\Common\Token\TokenRequestPayload\AccessBody $access_body
     *     @type \Io\Token\Proto\Common\Token\TokenRequestPayload\TransferBody $transfer_body
     *     @type \Io\Token\Proto\Common\Token\StandingOrderBody $standing_order_body
     *     @type \Io\Token\Proto\Common\Token\BulkTransferBody $bulk_transfer_body
     *     @type string $description
     *     @type string $callback_state
     *     @type string $destination_country
     *     @type string $ref_id
     *           ref ID that will be transferred to the token payload
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Token::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_ref_id = 1;</code>
     * @return string
     */
    public function getUserRefId()
    {
        return $this->user_ref_id;
    }

    /**
     * Generated from protobuf field <code>string user_ref_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserRefId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_ref_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string customization_id = 2;</code>
     * @return string
     */
    public function getCustomizationId()
    {
        return $this->customization_id;
    }

    /**
     * Generated from protobuf field <code>string customization_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomizationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customization_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string redirect_url = 3;</code>
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirect_url;
    }

    /**
     * Generated from protobuf field <code>string redirect_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRedirectUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->redirect_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember to = 4;</code>
     * @return \Io\Token\Proto\Common\Token\TokenMember
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenMember to = 4;</code>
     * @param \Io\Token\Proto\Common\Token\TokenMember $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\TokenMember::class);
        $this->to = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.ActingAs acting_as = 5;</code>
     * @return \Io\Token\Proto\Common\Token\ActingAs
     */
    public function getActingAs()
    {
        return $this->acting_as;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.ActingAs acting_as = 5;</code>
     * @param \Io\Token\Proto\Common\Token\ActingAs $var
     * @return $this
     */
    public function setActingAs($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\ActingAs::class);
        $this->acting_as = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenRequestPayload.AccessBody access_body = 6;</code>
     * @return \Io\Token\Proto\Common\Token\TokenRequestPayload\AccessBody
     */
    public function getAccessBody()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenRequestPayload.AccessBody access_body = 6;</code>
     * @param \Io\Token\Proto\Common\Token\TokenRequestPayload\AccessBody $var
     * @return $this
     */
    public function setAccessBody($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\TokenRequestPayload_AccessBody::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenRequestPayload.TransferBody transfer_body = 7;</code>
     * @return \Io\Token\Proto\Common\Token\TokenRequestPayload\TransferBody
     */
    public function getTransferBody()
    {
        return $this->readOneof(7);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.TokenRequestPayload.TransferBody transfer_body = 7;</code>
     * @param \Io\Token\Proto\Common\Token\TokenRequestPayload\TransferBody $var
     * @return $this
     */
    public function setTransferBody($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\TokenRequestPayload_TransferBody::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.StandingOrderBody standing_order_body = 12;</code>
     * @return \Io\Token\Proto\Common\Token\StandingOrderBody
     */
    public function getStandingOrderBody()
    {
        return $this->readOneof(12);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.StandingOrderBody standing_order_body = 12;</code>
     * @param \Io\Token\Proto\Common\Token\StandingOrderBody $var
     * @return $this
     */
    public function setStandingOrderBody($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\StandingOrderBody::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.BulkTransferBody bulk_transfer_body = 13;</code>
     * @return \Io\Token\Proto\Common\Token\BulkTransferBody
     */
    public function getBulkTransferBody()
    {
        return $this->readOneof(13);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.token.BulkTransferBody bulk_transfer_body = 13;</code>
     * @param \Io\Token\Proto\Common\Token\BulkTransferBody $var
     * @return $this
     */
    public function setBulkTransferBody($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Token\BulkTransferBody::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 8 [(.io.token.proto.extensions.field.redact) = true];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 8 [(.io.token.proto.extensions.field.redact) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string callback_state = 9;</code>
     * @return string
     */
    public function getCallbackState()
    {
        return $this->callback_state;
    }

    /**
     * Generated from protobuf field <code>string callback_state = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackState($var)
    {
        GPBUtil::checkString($var, True);
        $this->callback_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string destination_country = 10;</code>
     * @return string
     */
    public function getDestinationCountry()
    {
        return $this->destination_country;
    }

    /**
     * Generated from protobuf field <code>string destination_country = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_country = $var;

        return $this;
    }

    /**
     * ref ID that will be transferred to the token payload
     *
     * Generated from protobuf field <code>string ref_id = 11;</code>
     * @return string
     */
    public function getRefId()
    {
        return $this->ref_id;
    }

    /**
     * ref ID that will be transferred to the token payload
     *
     * Generated from protobuf field <code>string ref_id = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setRefId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ref_id = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestBody()
    {
        return $this->whichOneof("request_body");
    }

}

