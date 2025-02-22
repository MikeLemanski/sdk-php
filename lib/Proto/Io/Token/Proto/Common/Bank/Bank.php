<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bankinfo.proto

namespace Io\Token\Proto\Common\Bank;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.bank.Bank</code>
 */
class Bank extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';
    /**
     * Square bank avatar icon
     *
     * Generated from protobuf field <code>string logo_uri = 3;</code>
     */
    private $logo_uri = '';
    /**
     * Full size bank icon
     *
     * Generated from protobuf field <code>string full_logo_uri = 4;</code>
     */
    private $full_logo_uri = '';
    /**
     * Works with appless payments. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_appless = 5;</code>
     */
    private $supports_appless = false;
    /**
     * Connection supports guest checkout. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_guest_checkout = 15;</code>
     */
    private $supports_guest_checkout = false;
    /**
     * Connection allows for retrieval of information. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_information = 7;</code>
     */
    private $supports_information = false;
    /**
     * Connection requires external authorization for creating transfers. Supports BankFilter
     *
     * Generated from protobuf field <code>bool requires_external_auth = 8;</code>
     */
    private $requires_external_auth = false;
    /**
     * Connection allows for payment initiation. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_send_payment = 9;</code>
     */
    private $supports_send_payment = false;
    /**
     * Connection allows for receiving payments. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_receive_payment = 10;</code>
     */
    private $supports_receive_payment = false;
    /**
     * Connection allows for retrieving balances. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_balance = 16;</code>
     */
    private $supports_balance = false;
    /**
     * Connection supports scheduled payments. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_scheduled_payment = 18;</code>
     */
    private $supports_scheduled_payment = false;
    /**
     * Connection supports standing orders. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_standing_order = 19;</code>
     */
    private $supports_standing_order = false;
    /**
     * Connection supports bulk payments. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_bulk_transfer = 20;</code>
     */
    private $supports_bulk_transfer = false;
    /**
     * Connection only supports immediate redemption of transfers
     *
     * Generated from protobuf field <code>bool requires_legacy_transfer = 14 [deprecated = true];</code>
     */
    private $requires_legacy_transfer = false;
    /**
     * Connection only supports immediate redemption of transfers. Supports BankFilter
     *
     * Generated from protobuf field <code>bool requires_one_step_payment = 17;</code>
     */
    private $requires_one_step_payment = false;
    /**
     * Connection supports linking with a bank linking URI. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_linking_uri = 22;</code>
     */
    private $supports_linking_uri = false;
    /**
     * Provider of the bank, e.g. Yodlee, FinApi, Token
     *
     * Generated from protobuf field <code>string provider = 11;</code>
     */
    private $provider = '';
    /**
     * The ISO 3166-1 alpha-2 two letter country code in upper case.
     *
     * Generated from protobuf field <code>string country = 12;</code>
     */
    private $country = '';
    /**
     * Optional identifier of the bank, not guaranteed to be unique across all banks. BLZ for German banks.
     *
     * Generated from protobuf field <code>string identifier = 13;</code>
     */
    private $identifier = '';
    /**
     * A list of Transfer Destination Types, like SEPA, ELIXIR, supported by the bank.
     *
     * Generated from protobuf field <code>repeated string supported_transfer_destination_types = 21;</code>
     */
    private $supported_transfer_destination_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type string $logo_uri
     *           Square bank avatar icon
     *     @type string $full_logo_uri
     *           Full size bank icon
     *     @type bool $supports_appless
     *           Works with appless payments. Supports BankFilter
     *     @type bool $supports_guest_checkout
     *           Connection supports guest checkout. Supports BankFilter
     *     @type bool $supports_information
     *           Connection allows for retrieval of information. Supports BankFilter
     *     @type bool $requires_external_auth
     *           Connection requires external authorization for creating transfers. Supports BankFilter
     *     @type bool $supports_send_payment
     *           Connection allows for payment initiation. Supports BankFilter
     *     @type bool $supports_receive_payment
     *           Connection allows for receiving payments. Supports BankFilter
     *     @type bool $supports_balance
     *           Connection allows for retrieving balances. Supports BankFilter
     *     @type bool $supports_scheduled_payment
     *           Connection supports scheduled payments. Supports BankFilter
     *     @type bool $supports_standing_order
     *           Connection supports standing orders. Supports BankFilter
     *     @type bool $supports_bulk_transfer
     *           Connection supports bulk payments. Supports BankFilter
     *     @type bool $requires_legacy_transfer
     *           Connection only supports immediate redemption of transfers
     *     @type bool $requires_one_step_payment
     *           Connection only supports immediate redemption of transfers. Supports BankFilter
     *     @type bool $supports_linking_uri
     *           Connection supports linking with a bank linking URI. Supports BankFilter
     *     @type string $provider
     *           Provider of the bank, e.g. Yodlee, FinApi, Token
     *     @type string $country
     *           The ISO 3166-1 alpha-2 two letter country code in upper case.
     *     @type string $identifier
     *           Optional identifier of the bank, not guaranteed to be unique across all banks. BLZ for German banks.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $supported_transfer_destination_types
     *           A list of Transfer Destination Types, like SEPA, ELIXIR, supported by the bank.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Bankinfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Square bank avatar icon
     *
     * Generated from protobuf field <code>string logo_uri = 3;</code>
     * @return string
     */
    public function getLogoUri()
    {
        return $this->logo_uri;
    }

    /**
     * Square bank avatar icon
     *
     * Generated from protobuf field <code>string logo_uri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLogoUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->logo_uri = $var;

        return $this;
    }

    /**
     * Full size bank icon
     *
     * Generated from protobuf field <code>string full_logo_uri = 4;</code>
     * @return string
     */
    public function getFullLogoUri()
    {
        return $this->full_logo_uri;
    }

    /**
     * Full size bank icon
     *
     * Generated from protobuf field <code>string full_logo_uri = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFullLogoUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_logo_uri = $var;

        return $this;
    }

    /**
     * Works with appless payments. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_appless = 5;</code>
     * @return bool
     */
    public function getSupportsAppless()
    {
        return $this->supports_appless;
    }

    /**
     * Works with appless payments. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_appless = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsAppless($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_appless = $var;

        return $this;
    }

    /**
     * Connection supports guest checkout. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_guest_checkout = 15;</code>
     * @return bool
     */
    public function getSupportsGuestCheckout()
    {
        return $this->supports_guest_checkout;
    }

    /**
     * Connection supports guest checkout. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_guest_checkout = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsGuestCheckout($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_guest_checkout = $var;

        return $this;
    }

    /**
     * Connection allows for retrieval of information. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_information = 7;</code>
     * @return bool
     */
    public function getSupportsInformation()
    {
        return $this->supports_information;
    }

    /**
     * Connection allows for retrieval of information. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_information = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsInformation($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_information = $var;

        return $this;
    }

    /**
     * Connection requires external authorization for creating transfers. Supports BankFilter
     *
     * Generated from protobuf field <code>bool requires_external_auth = 8;</code>
     * @return bool
     */
    public function getRequiresExternalAuth()
    {
        return $this->requires_external_auth;
    }

    /**
     * Connection requires external authorization for creating transfers. Supports BankFilter
     *
     * Generated from protobuf field <code>bool requires_external_auth = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequiresExternalAuth($var)
    {
        GPBUtil::checkBool($var);
        $this->requires_external_auth = $var;

        return $this;
    }

    /**
     * Connection allows for payment initiation. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_send_payment = 9;</code>
     * @return bool
     */
    public function getSupportsSendPayment()
    {
        return $this->supports_send_payment;
    }

    /**
     * Connection allows for payment initiation. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_send_payment = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsSendPayment($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_send_payment = $var;

        return $this;
    }

    /**
     * Connection allows for receiving payments. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_receive_payment = 10;</code>
     * @return bool
     */
    public function getSupportsReceivePayment()
    {
        return $this->supports_receive_payment;
    }

    /**
     * Connection allows for receiving payments. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_receive_payment = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsReceivePayment($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_receive_payment = $var;

        return $this;
    }

    /**
     * Connection allows for retrieving balances. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_balance = 16;</code>
     * @return bool
     */
    public function getSupportsBalance()
    {
        return $this->supports_balance;
    }

    /**
     * Connection allows for retrieving balances. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_balance = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsBalance($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_balance = $var;

        return $this;
    }

    /**
     * Connection supports scheduled payments. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_scheduled_payment = 18;</code>
     * @return bool
     */
    public function getSupportsScheduledPayment()
    {
        return $this->supports_scheduled_payment;
    }

    /**
     * Connection supports scheduled payments. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_scheduled_payment = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsScheduledPayment($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_scheduled_payment = $var;

        return $this;
    }

    /**
     * Connection supports standing orders. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_standing_order = 19;</code>
     * @return bool
     */
    public function getSupportsStandingOrder()
    {
        return $this->supports_standing_order;
    }

    /**
     * Connection supports standing orders. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_standing_order = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsStandingOrder($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_standing_order = $var;

        return $this;
    }

    /**
     * Connection supports bulk payments. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_bulk_transfer = 20;</code>
     * @return bool
     */
    public function getSupportsBulkTransfer()
    {
        return $this->supports_bulk_transfer;
    }

    /**
     * Connection supports bulk payments. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_bulk_transfer = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsBulkTransfer($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_bulk_transfer = $var;

        return $this;
    }

    /**
     * Connection only supports immediate redemption of transfers
     *
     * Generated from protobuf field <code>bool requires_legacy_transfer = 14 [deprecated = true];</code>
     * @return bool
     */
    public function getRequiresLegacyTransfer()
    {
        return $this->requires_legacy_transfer;
    }

    /**
     * Connection only supports immediate redemption of transfers
     *
     * Generated from protobuf field <code>bool requires_legacy_transfer = 14 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     */
    public function setRequiresLegacyTransfer($var)
    {
        GPBUtil::checkBool($var);
        $this->requires_legacy_transfer = $var;

        return $this;
    }

    /**
     * Connection only supports immediate redemption of transfers. Supports BankFilter
     *
     * Generated from protobuf field <code>bool requires_one_step_payment = 17;</code>
     * @return bool
     */
    public function getRequiresOneStepPayment()
    {
        return $this->requires_one_step_payment;
    }

    /**
     * Connection only supports immediate redemption of transfers. Supports BankFilter
     *
     * Generated from protobuf field <code>bool requires_one_step_payment = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequiresOneStepPayment($var)
    {
        GPBUtil::checkBool($var);
        $this->requires_one_step_payment = $var;

        return $this;
    }

    /**
     * Connection supports linking with a bank linking URI. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_linking_uri = 22;</code>
     * @return bool
     */
    public function getSupportsLinkingUri()
    {
        return $this->supports_linking_uri;
    }

    /**
     * Connection supports linking with a bank linking URI. Supports BankFilter
     *
     * Generated from protobuf field <code>bool supports_linking_uri = 22;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsLinkingUri($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_linking_uri = $var;

        return $this;
    }

    /**
     * Provider of the bank, e.g. Yodlee, FinApi, Token
     *
     * Generated from protobuf field <code>string provider = 11;</code>
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Provider of the bank, e.g. Yodlee, FinApi, Token
     *
     * Generated from protobuf field <code>string provider = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setProvider($var)
    {
        GPBUtil::checkString($var, True);
        $this->provider = $var;

        return $this;
    }

    /**
     * The ISO 3166-1 alpha-2 two letter country code in upper case.
     *
     * Generated from protobuf field <code>string country = 12;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * The ISO 3166-1 alpha-2 two letter country code in upper case.
     *
     * Generated from protobuf field <code>string country = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * Optional identifier of the bank, not guaranteed to be unique across all banks. BLZ for German banks.
     *
     * Generated from protobuf field <code>string identifier = 13;</code>
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Optional identifier of the bank, not guaranteed to be unique across all banks. BLZ for German banks.
     *
     * Generated from protobuf field <code>string identifier = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->identifier = $var;

        return $this;
    }

    /**
     * A list of Transfer Destination Types, like SEPA, ELIXIR, supported by the bank.
     *
     * Generated from protobuf field <code>repeated string supported_transfer_destination_types = 21;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedTransferDestinationTypes()
    {
        return $this->supported_transfer_destination_types;
    }

    /**
     * A list of Transfer Destination Types, like SEPA, ELIXIR, supported by the bank.
     *
     * Generated from protobuf field <code>repeated string supported_transfer_destination_types = 21;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedTransferDestinationTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->supported_transfer_destination_types = $arr;

        return $this;
    }

}

