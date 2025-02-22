<?php

namespace Tokenio\Rpc;

use Io\Token\Proto\Common\Security\Key\Level;
use Io\Token\Proto\Common\Security\SecurityMetadata;

class AuthenticationContext
{
    /**
     * @var string
     */
    private static $onBehalfOf;

    /**
     * @var int
     */
    private static $keyLevel = Level::LOW;

    /**
     * @var bool
     */
    private static $customerInitiated = false;

    private static $trackingMetaData;

    /**
     * Retrieves the On-Behalf-Of value.
     *
     * @return string the current On-Behalf-Of value
     */
    public static function getOnBehalfOf()
    {
        return self::$onBehalfOf;
    }

    /**
     * Retrieves the Key-Level value.
     *
     * @return int the current Key-Level value
     */
    public static function getKeyLevel()
    {
        if (self::$keyLevel == null) {
            return Level::LOW;
        }

        return self::$keyLevel;
    }

    /**
     * Get the customer initiated request flag.
     *
     * @return bool
     */
    public static function getCustomerInitiated()
    {
        if (self::$customerInitiated == null) {
            return false;
        }

        return self::$customerInitiated;
    }

    /**
     * Sets the On-Behalf-Of value.
     *
     * @param string tokenId the value of the On-Behalf-Of
     */
    public static function setOnBehalfOf($tokenId)
    {
        self::$onBehalfOf = $tokenId;
    }

    /**
     * Sets the Key-Level value.
     *
     * @param int level the value of the key level
     */
    public static function setKeyLevel($level)
    {
        self::$keyLevel = $level;
    }

    /**
     * Set the customer initiated request flag.
     *
     * @param bool flag
     */
    public static function setCustomerInitiated($flag)
    {
        self::$customerInitiated = $flag;
    }

    /**
     * Retrieves and clears an On-Behalf-Of value.
     *
     */
    public static function clearAccessToken()
    {
        self::$onBehalfOf = null;
        self::$customerInitiated = null;
    }

    /**
     * Retrieves and resets a Key-Level value.
     *
     * @return int Key-Level value
     */
    public static function resetKeyLevel()
    {
        self::$keyLevel = Level::LOW;
        return self::$keyLevel;
    }

    /**
     * Resets the authenticator.
     */
    public static function clear()
    {
        self::$onBehalfOf = null;
        self::$customerInitiated = null;
    }

    public static function setTrackingMetaData($trackingMetaData)
    {
        self::$trackingMetaData = $trackingMetaData;
    }

    public static function getTrackingMetaData()
    {
        if(self::$trackingMetaData == null) {
            return new SecurityMetadata();
        }

        return self::$trackingMetaData;
    }
}
