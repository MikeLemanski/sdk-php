<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: provider/nextgenpsd2.proto

namespace Io\Token\Proto\Common\Providerspecific\Nextgenpsd2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>io.token.proto.common.providerspecific.nextgenpsd2.NextGenPsd2TransactionDetails</code>
 */
class NextGenPsd2TransactionDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Is the identification of the transaction as used e.g. for reference for deltafunction on application level. The same identification as for example used within camt.05x messages.
     *
     * Generated from protobuf field <code>string entry_reference = 1;</code>
     */
    private $entry_reference = '';
    /**
     * Generated from protobuf field <code>string end_to_end_id = 2;</code>
     */
    private $end_to_end_id = '';
    /**
     * Generated from protobuf field <code>string mandate_id = 3;</code>
     */
    private $mandate_id = '';
    /**
     * Generated from protobuf field <code>string check_id = 4;</code>
     */
    private $check_id = '';
    /**
     * Generated from protobuf field <code>string creditor_id = 5;</code>
     */
    private $creditor_id = '';
    /**
     * Generated from protobuf field <code>string value_date = 6;</code>
     */
    private $value_date = '';
    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.providerspecific.nextgenpsd2.ReportExchangeRate currency_exchange = 7;</code>
     */
    private $currency_exchange;
    /**
     * Generated from protobuf field <code>string creditor_name = 8;</code>
     */
    private $creditor_name = '';
    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.nextgenpsd2.AccountReference creditor_account = 9;</code>
     */
    private $creditor_account = null;
    /**
     * Generated from protobuf field <code>string ultimate_creditor = 10;</code>
     */
    private $ultimate_creditor = '';
    /**
     * Generated from protobuf field <code>string debtor_name = 11;</code>
     */
    private $debtor_name = '';
    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.nextgenpsd2.AccountReference debtor_account = 12;</code>
     */
    private $debtor_account = null;
    /**
     * Generated from protobuf field <code>string ultimate_debtor = 13;</code>
     */
    private $ultimate_debtor = '';
    /**
     * Generated from protobuf field <code>string remittance_information_structured = 14;</code>
     */
    private $remittance_information_structured = '';
    /**
     * Generated from protobuf field <code>string additional_information = 15;</code>
     */
    private $additional_information = '';
    /**
     * ExternalPurpose1Code from ISO 20022.
     *
     * Generated from protobuf field <code>string purpose_code = 16;</code>
     */
    private $purpose_code = '';
    /**
     * Bank transaction code as used by the ASPSP and using the sub elements of this structured code defined by ISO 20022.
     *
     * Generated from protobuf field <code>string bank_transaction_code = 17;</code>
     */
    private $bank_transaction_code = '';
    /**
     * Proprietary bank transaction code as used within a community or within an ASPSP e.g. for MT94x based transaction reports.
     *
     * Generated from protobuf field <code>string proprietary_bank_transaction_code = 18;</code>
     */
    private $proprietary_bank_transaction_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entry_reference
     *           Is the identification of the transaction as used e.g. for reference for deltafunction on application level. The same identification as for example used within camt.05x messages.
     *     @type string $end_to_end_id
     *     @type string $mandate_id
     *     @type string $check_id
     *     @type string $creditor_id
     *     @type string $value_date
     *     @type \Io\Token\Proto\Common\Providerspecific\Nextgenpsd2\ReportExchangeRate[]|\Google\Protobuf\Internal\RepeatedField $currency_exchange
     *     @type string $creditor_name
     *     @type \Io\Token\Proto\Common\Providerspecific\Nextgenpsd2\AccountReference $creditor_account
     *     @type string $ultimate_creditor
     *     @type string $debtor_name
     *     @type \Io\Token\Proto\Common\Providerspecific\Nextgenpsd2\AccountReference $debtor_account
     *     @type string $ultimate_debtor
     *     @type string $remittance_information_structured
     *     @type string $additional_information
     *     @type string $purpose_code
     *           ExternalPurpose1Code from ISO 20022.
     *     @type string $bank_transaction_code
     *           Bank transaction code as used by the ASPSP and using the sub elements of this structured code defined by ISO 20022.
     *     @type string $proprietary_bank_transaction_code
     *           Proprietary bank transaction code as used within a community or within an ASPSP e.g. for MT94x based transaction reports.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Provider\Nextgenpsd2::initOnce();
        parent::__construct($data);
    }

    /**
     * Is the identification of the transaction as used e.g. for reference for deltafunction on application level. The same identification as for example used within camt.05x messages.
     *
     * Generated from protobuf field <code>string entry_reference = 1;</code>
     * @return string
     */
    public function getEntryReference()
    {
        return $this->entry_reference;
    }

    /**
     * Is the identification of the transaction as used e.g. for reference for deltafunction on application level. The same identification as for example used within camt.05x messages.
     *
     * Generated from protobuf field <code>string entry_reference = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEntryReference($var)
    {
        GPBUtil::checkString($var, True);
        $this->entry_reference = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string end_to_end_id = 2;</code>
     * @return string
     */
    public function getEndToEndId()
    {
        return $this->end_to_end_id;
    }

    /**
     * Generated from protobuf field <code>string end_to_end_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEndToEndId($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_to_end_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mandate_id = 3;</code>
     * @return string
     */
    public function getMandateId()
    {
        return $this->mandate_id;
    }

    /**
     * Generated from protobuf field <code>string mandate_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMandateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->mandate_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string check_id = 4;</code>
     * @return string
     */
    public function getCheckId()
    {
        return $this->check_id;
    }

    /**
     * Generated from protobuf field <code>string check_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCheckId($var)
    {
        GPBUtil::checkString($var, True);
        $this->check_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string creditor_id = 5;</code>
     * @return string
     */
    public function getCreditorId()
    {
        return $this->creditor_id;
    }

    /**
     * Generated from protobuf field <code>string creditor_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCreditorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->creditor_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string value_date = 6;</code>
     * @return string
     */
    public function getValueDate()
    {
        return $this->value_date;
    }

    /**
     * Generated from protobuf field <code>string value_date = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setValueDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->value_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.providerspecific.nextgenpsd2.ReportExchangeRate currency_exchange = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCurrencyExchange()
    {
        return $this->currency_exchange;
    }

    /**
     * Generated from protobuf field <code>repeated .io.token.proto.common.providerspecific.nextgenpsd2.ReportExchangeRate currency_exchange = 7;</code>
     * @param \Io\Token\Proto\Common\Providerspecific\Nextgenpsd2\ReportExchangeRate[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCurrencyExchange($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Io\Token\Proto\Common\Providerspecific\Nextgenpsd2\ReportExchangeRate::class);
        $this->currency_exchange = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string creditor_name = 8;</code>
     * @return string
     */
    public function getCreditorName()
    {
        return $this->creditor_name;
    }

    /**
     * Generated from protobuf field <code>string creditor_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCreditorName($var)
    {
        GPBUtil::checkString($var, True);
        $this->creditor_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.nextgenpsd2.AccountReference creditor_account = 9;</code>
     * @return \Io\Token\Proto\Common\Providerspecific\Nextgenpsd2\AccountReference
     */
    public function getCreditorAccount()
    {
        return $this->creditor_account;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.nextgenpsd2.AccountReference creditor_account = 9;</code>
     * @param \Io\Token\Proto\Common\Providerspecific\Nextgenpsd2\AccountReference $var
     * @return $this
     */
    public function setCreditorAccount($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Providerspecific\Nextgenpsd2\AccountReference::class);
        $this->creditor_account = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ultimate_creditor = 10;</code>
     * @return string
     */
    public function getUltimateCreditor()
    {
        return $this->ultimate_creditor;
    }

    /**
     * Generated from protobuf field <code>string ultimate_creditor = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setUltimateCreditor($var)
    {
        GPBUtil::checkString($var, True);
        $this->ultimate_creditor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string debtor_name = 11;</code>
     * @return string
     */
    public function getDebtorName()
    {
        return $this->debtor_name;
    }

    /**
     * Generated from protobuf field <code>string debtor_name = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setDebtorName($var)
    {
        GPBUtil::checkString($var, True);
        $this->debtor_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.nextgenpsd2.AccountReference debtor_account = 12;</code>
     * @return \Io\Token\Proto\Common\Providerspecific\Nextgenpsd2\AccountReference
     */
    public function getDebtorAccount()
    {
        return $this->debtor_account;
    }

    /**
     * Generated from protobuf field <code>.io.token.proto.common.providerspecific.nextgenpsd2.AccountReference debtor_account = 12;</code>
     * @param \Io\Token\Proto\Common\Providerspecific\Nextgenpsd2\AccountReference $var
     * @return $this
     */
    public function setDebtorAccount($var)
    {
        GPBUtil::checkMessage($var, \Io\Token\Proto\Common\Providerspecific\Nextgenpsd2\AccountReference::class);
        $this->debtor_account = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ultimate_debtor = 13;</code>
     * @return string
     */
    public function getUltimateDebtor()
    {
        return $this->ultimate_debtor;
    }

    /**
     * Generated from protobuf field <code>string ultimate_debtor = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setUltimateDebtor($var)
    {
        GPBUtil::checkString($var, True);
        $this->ultimate_debtor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string remittance_information_structured = 14;</code>
     * @return string
     */
    public function getRemittanceInformationStructured()
    {
        return $this->remittance_information_structured;
    }

    /**
     * Generated from protobuf field <code>string remittance_information_structured = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setRemittanceInformationStructured($var)
    {
        GPBUtil::checkString($var, True);
        $this->remittance_information_structured = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string additional_information = 15;</code>
     * @return string
     */
    public function getAdditionalInformation()
    {
        return $this->additional_information;
    }

    /**
     * Generated from protobuf field <code>string additional_information = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setAdditionalInformation($var)
    {
        GPBUtil::checkString($var, True);
        $this->additional_information = $var;

        return $this;
    }

    /**
     * ExternalPurpose1Code from ISO 20022.
     *
     * Generated from protobuf field <code>string purpose_code = 16;</code>
     * @return string
     */
    public function getPurposeCode()
    {
        return $this->purpose_code;
    }

    /**
     * ExternalPurpose1Code from ISO 20022.
     *
     * Generated from protobuf field <code>string purpose_code = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setPurposeCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->purpose_code = $var;

        return $this;
    }

    /**
     * Bank transaction code as used by the ASPSP and using the sub elements of this structured code defined by ISO 20022.
     *
     * Generated from protobuf field <code>string bank_transaction_code = 17;</code>
     * @return string
     */
    public function getBankTransactionCode()
    {
        return $this->bank_transaction_code;
    }

    /**
     * Bank transaction code as used by the ASPSP and using the sub elements of this structured code defined by ISO 20022.
     *
     * Generated from protobuf field <code>string bank_transaction_code = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setBankTransactionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_transaction_code = $var;

        return $this;
    }

    /**
     * Proprietary bank transaction code as used within a community or within an ASPSP e.g. for MT94x based transaction reports.
     *
     * Generated from protobuf field <code>string proprietary_bank_transaction_code = 18;</code>
     * @return string
     */
    public function getProprietaryBankTransactionCode()
    {
        return $this->proprietary_bank_transaction_code;
    }

    /**
     * Proprietary bank transaction code as used within a community or within an ASPSP e.g. for MT94x based transaction reports.
     *
     * Generated from protobuf field <code>string proprietary_bank_transaction_code = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setProprietaryBankTransactionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->proprietary_bank_transaction_code = $var;

        return $this;
    }

}

