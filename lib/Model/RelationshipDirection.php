<?php
/**
 * RelationshipDirection
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
use \Pipeless\ObjectSerializer;

/**
 * RelationshipDirection Class Doc Comment
 *
 * @category Class
 * @package  Pipeless
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RelationshipDirection
{
    /**
     * Possible values of this enum
     */
    const OUTGOING = 'outgoing';
    const INCOMING = 'incoming';
    const ALL = 'all';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OUTGOING,
            self::INCOMING,
            self::ALL,
        ];
    }
}

