<?php

/**
 * Mux PHP - Copyright 2019 Mux Inc.
 * NOTE: This file is auto generated. Do not edit this file manually.
 */

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * OverallValues Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 */
class OverallValues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'OverallValues';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'value' => 'double',
        'total_watch_time' => 'int',
        'total_views' => 'int',
        'global_value' => 'double'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'value' => 'double',
        'total_watch_time' => 'int64',
        'total_views' => 'int64',
        'global_value' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'value' => 'value',
        'total_watch_time' => 'total_watch_time',
        'total_views' => 'total_views',
        'global_value' => 'global_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
        'total_watch_time' => 'setTotalWatchTime',
        'total_views' => 'setTotalViews',
        'global_value' => 'setGlobalValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'total_watch_time' => 'getTotalWatchTime',
        'total_views' => 'getTotalViews',
        'global_value' => 'getGlobalValue'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['total_watch_time'] = isset($data['total_watch_time']) ? $data['total_watch_time'] : null;
        $this->container['total_views'] = isset($data['total_views']) ? $data['total_views'] : null;
        $this->container['global_value'] = isset($data['global_value']) ? $data['global_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets value
     *
     * @return double|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param double|null $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets total_watch_time
     *
     * @return int|null
     */
    public function getTotalWatchTime()
    {
        return $this->container['total_watch_time'];
    }

    /**
     * Sets total_watch_time
     *
     * @param int|null $total_watch_time total_watch_time
     *
     * @return $this
     */
    public function setTotalWatchTime($total_watch_time)
    {
        $this->container['total_watch_time'] = $total_watch_time;

        return $this;
    }

    /**
     * Gets total_views
     *
     * @return int|null
     */
    public function getTotalViews()
    {
        return $this->container['total_views'];
    }

    /**
     * Sets total_views
     *
     * @param int|null $total_views total_views
     *
     * @return $this
     */
    public function setTotalViews($total_views)
    {
        $this->container['total_views'] = $total_views;

        return $this;
    }

    /**
     * Gets global_value
     *
     * @return double|null
     */
    public function getGlobalValue()
    {
        return $this->container['global_value'];
    }

    /**
     * Sets global_value
     *
     * @param double|null $global_value global_value
     *
     * @return $this
     */
    public function setGlobalValue($global_value)
    {
        $this->container['global_value'] = $global_value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


