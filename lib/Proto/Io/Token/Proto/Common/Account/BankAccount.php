<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account.proto

namespace Io\Token\Proto\Common\Account;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Account information. This is what the end user links with
 * the bank and what Token uses when it talks to the bank.
 * It's also part of the source or destination for a transfer.
 *
 * Generated from protobuf message <code>io.token.proto.common.account.BankAccount</code>
 */
class BankAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<string, string> metadata = 7 [(.io.token.proto.extensions.field.redact) = true];</code>
     */
    private $metadata;
    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.AccountFeatures account_features = 8;</code>
     */
    private $account_features = null;
    protected $account;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Io\Token\Proto\Common\Account\BankAccount\Token $token
     *     @type \Io\Token\Proto\Common\Account\BankAccount\TokenAuthorization $token_authorization
     *     @type \Io\Token\Proto\Common\Account\BankAccount\Swift $swift
     *     @type \Io\Token\Proto\Common\Account\BankAccount\Sepa $sepa
     *     @type \Io\Token\Proto\Common\Account\BankAccount\Ach $ach
     *     @type \Io\Token\Proto\Common\Account\BankAccount\Bank $bank
     *     @type \Io\Token\Proto\Common\Account\BankAccount\FasterPayments $faster_payments
     *     @type \Io\Token\Proto\Common\Account\BankAccount\Custom $custom
     *     @type \Io\Token\Proto\Common\Account\BankAccount\Guest $guest
     *     @type \Io\Token\Proto\Common\Account\BankAccount\Iban $iban
     *     @type \Io\Token\Proto\Common\Account\BankAccount\Domestic $domestic
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *     @type \Io\Token\Proto\Common\Account\AccountFeatures $account_features
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Account::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Token token = 1;</code>
     * @return \Io\Token\Proto\Common\Account\BankAccount\Token
     */
    public function getToken()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Token token = 1;</code>
     * @param \Io\Token\Proto\Common\Account\BankAccount\Token $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Account\BankAccount_Token::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.TokenAuthorization token_authorization = 2 [deprecated = true];</code>
     * @return \Io\Token\Proto\Common\Account\BankAccount\TokenAuthorization
     */
    public function getTokenAuthorization()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.TokenAuthorization token_authorization = 2 [deprecated = true];</code>
     * @param \Io\Token\Proto\Common\Account\BankAccount\TokenAuthorization $var
     * @return $this
     */
    public function setTokenAuthorization($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Account\BankAccount_TokenAuthorization::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Swift swift = 3 [deprecated = true];</code>
     * @return \Io\Token\Proto\Common\Account\BankAccount\Swift
     */
    public function getSwift()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Swift swift = 3 [deprecated = true];</code>
     * @param \Io\Token\Proto\Common\Account\BankAccount\Swift $var
     * @return $this
     */
    public function setSwift($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Account\BankAccount_Swift::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Sepa sepa = 4 [deprecated = true];</code>
     * @return \Io\Token\Proto\Common\Account\BankAccount\Sepa
     */
    public function getSepa()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Sepa sepa = 4 [deprecated = true];</code>
     * @param \Io\Token\Proto\Common\Account\BankAccount\Sepa $var
     * @return $this
     */
    public function setSepa($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Account\BankAccount_Sepa::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Ach ach = 5 [deprecated = true];</code>
     * @return \Io\Token\Proto\Common\Account\BankAccount\Ach
     */
    public function getAch()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Ach ach = 5 [deprecated = true];</code>
     * @param \Io\Token\Proto\Common\Account\BankAccount\Ach $var
     * @return $this
     */
    public function setAch($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Account\BankAccount_Ach::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Bank bank = 6 [deprecated = true];</code>
     * @return \Io\Token\Proto\Common\Account\BankAccount\Bank
     */
    public function getBank()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Bank bank = 6 [deprecated = true];</code>
     * @param \Io\Token\Proto\Common\Account\BankAccount\Bank $var
     * @return $this
     */
    public function setBank($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Account\BankAccount_Bank::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.FasterPayments faster_payments = 9 [deprecated = true];</code>
     * @return \Io\Token\Proto\Common\Account\BankAccount\FasterPayments
     */
    public function getFasterPayments()
    {
        return $this->readOneof(9);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.FasterPayments faster_payments = 9 [deprecated = true];</code>
     * @param \Io\Token\Proto\Common\Account\BankAccount\FasterPayments $var
     * @return $this
     */
    public function setFasterPayments($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Account\BankAccount_FasterPayments::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Custom custom = 10;</code>
     * @return \Io\Token\Proto\Common\Account\BankAccount\Custom
     */
    public function getCustom()
    {
        return $this->readOneof(10);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Custom custom = 10;</code>
     * @param \Io\Token\Proto\Common\Account\BankAccount\Custom $var
     * @return $this
     */
    public function setCustom($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Account\BankAccount_Custom::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Guest guest = 11;</code>
     * @return \Io\Token\Proto\Common\Account\BankAccount\Guest
     */
    public function getGuest()
    {
        return $this->readOneof(11);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Guest guest = 11;</code>
     * @param \Io\Token\Proto\Common\Account\BankAccount\Guest $var
     * @return $this
     */
    public function setGuest($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Account\BankAccount_Guest::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Iban iban = 12;</code>
     * @return \Io\Token\Proto\Common\Account\BankAccount\Iban
     */
    public function getIban()
    {
        return $this->readOneof(12);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Iban iban = 12;</code>
     * @param \Io\Token\Proto\Common\Account\BankAccount\Iban $var
     * @return $this
     */
    public function setIban($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Account\BankAccount_Iban::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Domestic domestic = 13;</code>
     * @return \Io\Token\Proto\Common\Account\BankAccount\Domestic
     */
    public function getDomestic()
    {
        return $this->readOneof(13);
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.BankAccount.Domestic domestic = 13;</code>
     * @param \Io\Token\Proto\Common\Account\BankAccount\Domestic $var
     * @return $this
     */
    public function setDomestic($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Account\BankAccount_Domestic::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> metadata = 7 [(.io.token.proto.extensions.field.redact) = true];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Generated from protobuf field <code>map<string, string> metadata = 7 [(.io.token.proto.extensions.field.redact) = true];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.AccountFeatures account_features = 8;</code>
     * @return \Io\Token\Proto\Common\Account\AccountFeatures
     */
    public function getAccountFeatures()
    {
        return $this->account_features;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.account.AccountFeatures account_features = 8;</code>
     * @param \Io\Token\Proto\Common\Account\AccountFeatures $var
     * @return $this
     */
    public function setAccountFeatures($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Account\AccountFeatures::class);
        $this->account_features = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->whichOneof("account");
    }

}

