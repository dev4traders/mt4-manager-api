<?php
/**
 * UserResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  D4T\MT4Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Metatrader 4 Rest Api
 *
 * MetaTrader microservice. Call /init/ to get token, which is required in other methods.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: mikha.dev@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.30
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace D4T\MT4Sdk\Models;

use \ArrayAccess;
use \D4T\MT4Sdk\ObjectSerializer;

/**
 * UserResponse Class Doc Comment
 *
 * @category Class
 * @package  D4T\MT4Sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'login' => 'int',
        'name' => 'string',
        'group' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'status' => 'string',
        'state' => 'string',
        'city' => 'string',
        'zipcode' => 'string',
        'address' => 'string',
        'comment' => 'string',
        'agent_account' => 'int',
        'id_number' => 'string',
        'leverage' => 'int',
        'enabled' => 'int',
        'enable_change_password' => 'int',
        'send_report' => 'int',
        'read_only' => 'int',
        'margin' => '\D4T\MT4Sdk\Models\UserResponseMargin'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'login' => null,
        'name' => null,
        'group' => null,
        'email' => null,
        'phone' => null,
        'status' => null,
        'state' => null,
        'city' => null,
        'zipcode' => null,
        'address' => null,
        'comment' => null,
        'agent_account' => null,
        'id_number' => null,
        'leverage' => null,
        'enabled' => null,
        'enable_change_password' => null,
        'send_report' => null,
        'read_only' => null,
        'margin' => null
    ];

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
        'login' => 'login',
        'name' => 'name',
        'group' => 'group',
        'email' => 'email',
        'phone' => 'phone',
        'status' => 'status',
        'state' => 'state',
        'city' => 'city',
        'zipcode' => 'zipcode',
        'address' => 'address',
        'comment' => 'comment',
        'agent_account' => 'agent_account',
        'id_number' => 'id_number',
        'leverage' => 'leverage',
        'enabled' => 'enabled',
        'enable_change_password' => 'enable_change_password',
        'send_report' => 'send_report',
        'read_only' => 'read_only',
        'margin' => 'margin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'login' => 'setLogin',
        'name' => 'setName',
        'group' => 'setGroup',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'status' => 'setStatus',
        'state' => 'setState',
        'city' => 'setCity',
        'zipcode' => 'setZipcode',
        'address' => 'setAddress',
        'comment' => 'setComment',
        'agent_account' => 'setAgentAccount',
        'id_number' => 'setIdNumber',
        'leverage' => 'setLeverage',
        'enabled' => 'setEnabled',
        'enable_change_password' => 'setEnableChangePassword',
        'send_report' => 'setSendReport',
        'read_only' => 'setReadOnly',
        'margin' => 'setMargin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'login' => 'getLogin',
        'name' => 'getName',
        'group' => 'getGroup',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'status' => 'getStatus',
        'state' => 'getState',
        'city' => 'getCity',
        'zipcode' => 'getZipcode',
        'address' => 'getAddress',
        'comment' => 'getComment',
        'agent_account' => 'getAgentAccount',
        'id_number' => 'getIdNumber',
        'leverage' => 'getLeverage',
        'enabled' => 'getEnabled',
        'enable_change_password' => 'getEnableChangePassword',
        'send_report' => 'getSendReport',
        'read_only' => 'getReadOnly',
        'margin' => 'getMargin'
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
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['agent_account'] = isset($data['agent_account']) ? $data['agent_account'] : null;
        $this->container['id_number'] = isset($data['id_number']) ? $data['id_number'] : null;
        $this->container['leverage'] = isset($data['leverage']) ? $data['leverage'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['enable_change_password'] = isset($data['enable_change_password']) ? $data['enable_change_password'] : null;
        $this->container['send_report'] = isset($data['send_report']) ? $data['send_report'] : null;
        $this->container['read_only'] = isset($data['read_only']) ? $data['read_only'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
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
     * Gets login
     *
     * @return int
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param int $login login
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string $zipcode zipcode
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets agent_account
     *
     * @return int
     */
    public function getAgentAccount()
    {
        return $this->container['agent_account'];
    }

    /**
     * Sets agent_account
     *
     * @param int $agent_account agent_account
     *
     * @return $this
     */
    public function setAgentAccount($agent_account)
    {
        $this->container['agent_account'] = $agent_account;

        return $this;
    }

    /**
     * Gets id_number
     *
     * @return string
     */
    public function getIdNumber()
    {
        return $this->container['id_number'];
    }

    /**
     * Sets id_number
     *
     * @param string $id_number id_number
     *
     * @return $this
     */
    public function setIdNumber($id_number)
    {
        $this->container['id_number'] = $id_number;

        return $this;
    }

    /**
     * Gets leverage
     *
     * @return int
     */
    public function getLeverage()
    {
        return $this->container['leverage'];
    }

    /**
     * Sets leverage
     *
     * @param int $leverage leverage
     *
     * @return $this
     */
    public function setLeverage($leverage)
    {
        $this->container['leverage'] = $leverage;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return int
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param int $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets enable_change_password
     *
     * @return int
     */
    public function getEnableChangePassword()
    {
        return $this->container['enable_change_password'];
    }

    /**
     * Sets enable_change_password
     *
     * @param int $enable_change_password enable_change_password
     *
     * @return $this
     */
    public function setEnableChangePassword($enable_change_password)
    {
        $this->container['enable_change_password'] = $enable_change_password;

        return $this;
    }

    /**
     * Gets send_report
     *
     * @return int
     */
    public function getSendReport()
    {
        return $this->container['send_report'];
    }

    /**
     * Sets send_report
     *
     * @param int $send_report send_report
     *
     * @return $this
     */
    public function setSendReport($send_report)
    {
        $this->container['send_report'] = $send_report;

        return $this;
    }

    /**
     * Gets read_only
     *
     * @return int
     */
    public function getReadOnly()
    {
        return $this->container['read_only'];
    }

    /**
     * Sets read_only
     *
     * @param int $read_only read_only
     *
     * @return $this
     */
    public function setReadOnly($read_only)
    {
        $this->container['read_only'] = $read_only;

        return $this;
    }

    /**
     * Gets margin
     *
     * @return \D4T\MT4Sdk\Models\UserResponseMargin
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param \D4T\MT4Sdk\Models\UserResponseMargin $margin margin
     *
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


