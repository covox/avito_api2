<?php
/**
 * ReportAutoloadFeePackages
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Авито API для бизнеса
 *
 * ## Общая информация Описание API произведено в формате [**Swagger 3.0**](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md). Вы можете использовать данный файл для ознакомления с методами API, а также для генерации базового кода для работы с API на удобном для вас языке программирования с помощью утилиты [**Swagger Codegen**](https://swagger.io/swagger-codegen/) или online сервиса [**Swagger Editor**](https://editor.swagger.io/).  **Авито API для бизнеса предоставляется согласно [Условиям использования](https://api.avito.ru/docs/public/APITermsOfServiceV1.pdf).**  По всем вопросам работы с API необходимо обращаться в Службу Поддержки профессиональных инструментов:  <li>телефон: <b>+7 495 777-10-66</b></li> <li>email: <a href=\"mailto:supportautoload@avito.ru\">supportautoload@avito.ru</a></li>
 *
 * OpenAPI spec version: 1
 * Contact: supportautoload@avito.ru
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.11
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ReportAutoloadFeePackages Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportAutoloadFeePackages implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportAutoload_fee_packages';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'count' => 'int',
'count_left' => 'int',
'description' => 'string',
'fee_package_id' => 'string',
'finish_time' => '\DateTime',
'is_active' => 'bool',
'used' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'count' => null,
'count_left' => null,
'description' => null,
'fee_package_id' => null,
'finish_time' => 'date-time',
'is_active' => null,
'used' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'count' => 'count',
'count_left' => 'count_left',
'description' => 'description',
'fee_package_id' => 'fee_package_id',
'finish_time' => 'finish_time',
'is_active' => 'is_active',
'used' => 'used'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
'count_left' => 'setCountLeft',
'description' => 'setDescription',
'fee_package_id' => 'setFeePackageId',
'finish_time' => 'setFinishTime',
'is_active' => 'setIsActive',
'used' => 'setUsed'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
'count_left' => 'getCountLeft',
'description' => 'getDescription',
'fee_package_id' => 'getFeePackageId',
'finish_time' => 'getFinishTime',
'is_active' => 'getIsActive',
'used' => 'getUsed'    ];

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
        return self::$swaggerModelName;
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['count_left'] = isset($data['count_left']) ? $data['count_left'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['fee_package_id'] = isset($data['fee_package_id']) ? $data['fee_package_id'] : null;
        $this->container['finish_time'] = isset($data['finish_time']) ? $data['finish_time'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
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
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count Сколько размещений предоплачено
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets count_left
     *
     * @return int
     */
    public function getCountLeft()
    {
        return $this->container['count_left'];
    }

    /**
     * Sets count_left
     *
     * @param int $count_left Сколько осталось
     *
     * @return $this
     */
    public function setCountLeft($count_left)
    {
        $this->container['count_left'] = $count_left;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Описание пакета
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets fee_package_id
     *
     * @return string
     */
    public function getFeePackageId()
    {
        return $this->container['fee_package_id'];
    }

    /**
     * Sets fee_package_id
     *
     * @param string $fee_package_id Идентификатор пакета
     *
     * @return $this
     */
    public function setFeePackageId($fee_package_id)
    {
        $this->container['fee_package_id'] = $fee_package_id;

        return $this;
    }

    /**
     * Gets finish_time
     *
     * @return \DateTime
     */
    public function getFinishTime()
    {
        return $this->container['finish_time'];
    }

    /**
     * Sets finish_time
     *
     * @param \DateTime $finish_time Время окончания пакета
     *
     * @return $this
     */
    public function setFinishTime($finish_time)
    {
        $this->container['finish_time'] = $finish_time;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Статус пакета активен/неактивен
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets used
     *
     * @return int
     */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
     * Sets used
     *
     * @param int $used Сколько размещений из пакета использовано
     *
     * @return $this
     */
    public function setUsed($used)
    {
        $this->container['used'] = $used;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
