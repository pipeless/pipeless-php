<?php
/**
 * GetActivityFeedResultEvents
 *
 * PHP version 5
 *
 * @category Class
 * @package  Pipeless
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pipeless
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Pipeless\Model;

use \ArrayAccess;
use \Pipeless\ObjectSerializer;

/**
 * GetActivityFeedResultEvents Class Doc Comment
 *
 * @category Class
 * @package  Pipeless
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetActivityFeedResultEvents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetActivityFeedResult_events';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actor_object' => '\Pipeless\Model\ObjectReadable',
        'action_relationship' => '\Pipeless\Model\RelationshipReadable',
        'action_object' => '\Pipeless\Model\ObjectReadable',
        'cursor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'actor_object' => null,
        'action_relationship' => null,
        'action_object' => null,
        'cursor' => null
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
        'actor_object' => 'actor_object',
        'action_relationship' => 'action_relationship',
        'action_object' => 'action_object',
        'cursor' => 'cursor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actor_object' => 'setActorObject',
        'action_relationship' => 'setActionRelationship',
        'action_object' => 'setActionObject',
        'cursor' => 'setCursor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actor_object' => 'getActorObject',
        'action_relationship' => 'getActionRelationship',
        'action_object' => 'getActionObject',
        'cursor' => 'getCursor'
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
        $this->container['actor_object'] = isset($data['actor_object']) ? $data['actor_object'] : null;
        $this->container['action_relationship'] = isset($data['action_relationship']) ? $data['action_relationship'] : null;
        $this->container['action_object'] = isset($data['action_object']) ? $data['action_object'] : null;
        $this->container['cursor'] = isset($data['cursor']) ? $data['cursor'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['actor_object'] === null) {
            $invalidProperties[] = "'actor_object' can't be null";
        }
        if ($this->container['action_relationship'] === null) {
            $invalidProperties[] = "'action_relationship' can't be null";
        }
        if ($this->container['action_object'] === null) {
            $invalidProperties[] = "'action_object' can't be null";
        }
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
     * Gets actor_object
     *
     * @return \Pipeless\Model\ObjectReadable
     */
    public function getActorObject()
    {
        return $this->container['actor_object'];
    }

    /**
     * Sets actor_object
     *
     * @param \Pipeless\Model\ObjectReadable $actor_object actor_object
     *
     * @return $this
     */
    public function setActorObject($actor_object)
    {
        $this->container['actor_object'] = $actor_object;

        return $this;
    }

    /**
     * Gets action_relationship
     *
     * @return \Pipeless\Model\RelationshipReadable
     */
    public function getActionRelationship()
    {
        return $this->container['action_relationship'];
    }

    /**
     * Sets action_relationship
     *
     * @param \Pipeless\Model\RelationshipReadable $action_relationship action_relationship
     *
     * @return $this
     */
    public function setActionRelationship($action_relationship)
    {
        $this->container['action_relationship'] = $action_relationship;

        return $this;
    }

    /**
     * Gets action_object
     *
     * @return \Pipeless\Model\ObjectReadable
     */
    public function getActionObject()
    {
        return $this->container['action_object'];
    }

    /**
     * Sets action_object
     *
     * @param \Pipeless\Model\ObjectReadable $action_object action_object
     *
     * @return $this
     */
    public function setActionObject($action_object)
    {
        $this->container['action_object'] = $action_object;

        return $this;
    }

    /**
     * Gets cursor
     *
     * @return string|null
     */
    public function getCursor()
    {
        return $this->container['cursor'];
    }

    /**
     * Sets cursor
     *
     * @param string|null $cursor cursor
     *
     * @return $this
     */
    public function setCursor($cursor)
    {
        $this->container['cursor'] = $cursor;

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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


