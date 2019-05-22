<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace Io\Token\Proto\Common\Account\BankAccount;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Source account for guest checkout flow
 *
 * Generated from protobuf message <code>io.token.proto.common.account.BankAccount.Guest</code>
 */
class Guest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string bank_id = 1;</code>
     */
    private $bank_id = '';
    /**
     * optional
     *
     * Generated from protobuf field <code>string nonce = 2;</code>
     */
    private $nonce = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bank_id
     *     @type string $nonce
     *           optional
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Account::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string bank_id = 1;</code>
     * @return string
     */
    public function getBankId()
    {
        return $this->bank_id;
    }

    /**
     * Generated from protobuf field <code>string bank_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBankId($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_id = $var;

        return $this;
    }

    /**
     * optional
     *
     * Generated from protobuf field <code>string nonce = 2;</code>
     * @return string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * optional
     *
     * Generated from protobuf field <code>string nonce = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkString($var, True);
        $this->nonce = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Guest::class, \Io\Token\Proto\Common\Account\BankAccount_Guest::class);

