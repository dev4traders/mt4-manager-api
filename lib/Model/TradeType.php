<?php
/**
 * TradeType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MetaTrader microservice
 *
 * MetaTrader microservice. Call <a href='#/paths/~1init~1/get'>/init/</a> to get token, which is required in other methods.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@dev4traders.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.30
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
 * TradeType Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TradeType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TradeType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reason' => 'int',
        'symbol' => 'string',
        'state' => 'int',
        'type' => 'int',
        'type_str' => 'string',
        'ticket' => 'int',
        'login' => 'int',
        'profit' => 'float',
        'digits' => 'int',
        'sl' => 'float',
        'tp' => 'float',
        'pips' => 'float',
        'volume' => 'int',
        'lots' => 'float',
        'swap' => 'float',
        'commission' => 'float',
        'open_price' => 'float',
        'close_price' => 'float',
        'open_time' => 'int',
        'close_time' => 'int',
        'open_time_str' => 'string',
        'close_time_str' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reason' => null,
        'symbol' => null,
        'state' => null,
        'type' => null,
        'type_str' => null,
        'ticket' => null,
        'login' => null,
        'profit' => null,
        'digits' => null,
        'sl' => null,
        'tp' => null,
        'pips' => null,
        'volume' => null,
        'lots' => null,
        'swap' => null,
        'commission' => null,
        'open_price' => null,
        'close_price' => null,
        'open_time' => null,
        'close_time' => null,
        'open_time_str' => null,
        'close_time_str' => null
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
        'reason' => 'reason',
        'symbol' => 'symbol',
        'state' => 'state',
        'type' => 'type',
        'type_str' => 'type_str',
        'ticket' => 'ticket',
        'login' => 'login',
        'profit' => 'profit',
        'digits' => 'digits',
        'sl' => 'sl',
        'tp' => 'tp',
        'pips' => 'pips',
        'volume' => 'volume',
        'lots' => 'lots',
        'swap' => 'swap',
        'commission' => 'commission',
        'open_price' => 'open_price',
        'close_price' => 'close_price',
        'open_time' => 'open_time',
        'close_time' => 'close_time',
        'open_time_str' => 'open_time_str',
        'close_time_str' => 'close_time_str'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reason' => 'setReason',
        'symbol' => 'setSymbol',
        'state' => 'setState',
        'type' => 'setType',
        'type_str' => 'setTypeStr',
        'ticket' => 'setTicket',
        'login' => 'setLogin',
        'profit' => 'setProfit',
        'digits' => 'setDigits',
        'sl' => 'setSl',
        'tp' => 'setTp',
        'pips' => 'setPips',
        'volume' => 'setVolume',
        'lots' => 'setLots',
        'swap' => 'setSwap',
        'commission' => 'setCommission',
        'open_price' => 'setOpenPrice',
        'close_price' => 'setClosePrice',
        'open_time' => 'setOpenTime',
        'close_time' => 'setCloseTime',
        'open_time_str' => 'setOpenTimeStr',
        'close_time_str' => 'setCloseTimeStr'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reason' => 'getReason',
        'symbol' => 'getSymbol',
        'state' => 'getState',
        'type' => 'getType',
        'type_str' => 'getTypeStr',
        'ticket' => 'getTicket',
        'login' => 'getLogin',
        'profit' => 'getProfit',
        'digits' => 'getDigits',
        'sl' => 'getSl',
        'tp' => 'getTp',
        'pips' => 'getPips',
        'volume' => 'getVolume',
        'lots' => 'getLots',
        'swap' => 'getSwap',
        'commission' => 'getCommission',
        'open_price' => 'getOpenPrice',
        'close_price' => 'getClosePrice',
        'open_time' => 'getOpenTime',
        'close_time' => 'getCloseTime',
        'open_time_str' => 'getOpenTimeStr',
        'close_time_str' => 'getCloseTimeStr'
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
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['symbol'] = isset($data['symbol']) ? $data['symbol'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['type_str'] = isset($data['type_str']) ? $data['type_str'] : null;
        $this->container['ticket'] = isset($data['ticket']) ? $data['ticket'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['profit'] = isset($data['profit']) ? $data['profit'] : null;
        $this->container['digits'] = isset($data['digits']) ? $data['digits'] : null;
        $this->container['sl'] = isset($data['sl']) ? $data['sl'] : null;
        $this->container['tp'] = isset($data['tp']) ? $data['tp'] : null;
        $this->container['pips'] = isset($data['pips']) ? $data['pips'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['lots'] = isset($data['lots']) ? $data['lots'] : null;
        $this->container['swap'] = isset($data['swap']) ? $data['swap'] : null;
        $this->container['commission'] = isset($data['commission']) ? $data['commission'] : null;
        $this->container['open_price'] = isset($data['open_price']) ? $data['open_price'] : null;
        $this->container['close_price'] = isset($data['close_price']) ? $data['close_price'] : null;
        $this->container['open_time'] = isset($data['open_time']) ? $data['open_time'] : null;
        $this->container['close_time'] = isset($data['close_time']) ? $data['close_time'] : null;
        $this->container['open_time_str'] = isset($data['open_time_str']) ? $data['open_time_str'] : null;
        $this->container['close_time_str'] = isset($data['close_time_str']) ? $data['close_time_str'] : null;
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
     * Gets reason
     *
     * @return int
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param int $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string $symbol symbol
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets state
     *
     * @return int
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets type_str
     *
     * @return string
     */
    public function getTypeStr()
    {
        return $this->container['type_str'];
    }

    /**
     * Sets type_str
     *
     * @param string $type_str type_str
     *
     * @return $this
     */
    public function setTypeStr($type_str)
    {
        $this->container['type_str'] = $type_str;

        return $this;
    }

    /**
     * Gets ticket
     *
     * @return int
     */
    public function getTicket()
    {
        return $this->container['ticket'];
    }

    /**
     * Sets ticket
     *
     * @param int $ticket ticket
     *
     * @return $this
     */
    public function setTicket($ticket)
    {
        $this->container['ticket'] = $ticket;

        return $this;
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
     * Gets profit
     *
     * @return float
     */
    public function getProfit()
    {
        return $this->container['profit'];
    }

    /**
     * Sets profit
     *
     * @param float $profit profit
     *
     * @return $this
     */
    public function setProfit($profit)
    {
        $this->container['profit'] = $profit;

        return $this;
    }

    /**
     * Gets digits
     *
     * @return int
     */
    public function getDigits()
    {
        return $this->container['digits'];
    }

    /**
     * Sets digits
     *
     * @param int $digits digits
     *
     * @return $this
     */
    public function setDigits($digits)
    {
        $this->container['digits'] = $digits;

        return $this;
    }

    /**
     * Gets sl
     *
     * @return float
     */
    public function getSl()
    {
        return $this->container['sl'];
    }

    /**
     * Sets sl
     *
     * @param float $sl sl
     *
     * @return $this
     */
    public function setSl($sl)
    {
        $this->container['sl'] = $sl;

        return $this;
    }

    /**
     * Gets tp
     *
     * @return float
     */
    public function getTp()
    {
        return $this->container['tp'];
    }

    /**
     * Sets tp
     *
     * @param float $tp tp
     *
     * @return $this
     */
    public function setTp($tp)
    {
        $this->container['tp'] = $tp;

        return $this;
    }

    /**
     * Gets pips
     *
     * @return float
     */
    public function getPips()
    {
        return $this->container['pips'];
    }

    /**
     * Sets pips
     *
     * @param float $pips pips
     *
     * @return $this
     */
    public function setPips($pips)
    {
        $this->container['pips'] = $pips;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return int
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param int $volume volume
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets lots
     *
     * @return float
     */
    public function getLots()
    {
        return $this->container['lots'];
    }

    /**
     * Sets lots
     *
     * @param float $lots lots
     *
     * @return $this
     */
    public function setLots($lots)
    {
        $this->container['lots'] = $lots;

        return $this;
    }

    /**
     * Gets swap
     *
     * @return float
     */
    public function getSwap()
    {
        return $this->container['swap'];
    }

    /**
     * Sets swap
     *
     * @param float $swap swap
     *
     * @return $this
     */
    public function setSwap($swap)
    {
        $this->container['swap'] = $swap;

        return $this;
    }

    /**
     * Gets commission
     *
     * @return float
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     *
     * @param float $commission commission
     *
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets open_price
     *
     * @return float
     */
    public function getOpenPrice()
    {
        return $this->container['open_price'];
    }

    /**
     * Sets open_price
     *
     * @param float $open_price open_price
     *
     * @return $this
     */
    public function setOpenPrice($open_price)
    {
        $this->container['open_price'] = $open_price;

        return $this;
    }

    /**
     * Gets close_price
     *
     * @return float
     */
    public function getClosePrice()
    {
        return $this->container['close_price'];
    }

    /**
     * Sets close_price
     *
     * @param float $close_price close_price
     *
     * @return $this
     */
    public function setClosePrice($close_price)
    {
        $this->container['close_price'] = $close_price;

        return $this;
    }

    /**
     * Gets open_time
     *
     * @return int
     */
    public function getOpenTime()
    {
        return $this->container['open_time'];
    }

    /**
     * Sets open_time
     *
     * @param int $open_time open_time
     *
     * @return $this
     */
    public function setOpenTime($open_time)
    {
        $this->container['open_time'] = $open_time;

        return $this;
    }

    /**
     * Gets close_time
     *
     * @return int
     */
    public function getCloseTime()
    {
        return $this->container['close_time'];
    }

    /**
     * Sets close_time
     *
     * @param int $close_time close_time
     *
     * @return $this
     */
    public function setCloseTime($close_time)
    {
        $this->container['close_time'] = $close_time;

        return $this;
    }

    /**
     * Gets open_time_str
     *
     * @return string
     */
    public function getOpenTimeStr()
    {
        return $this->container['open_time_str'];
    }

    /**
     * Sets open_time_str
     *
     * @param string $open_time_str open_time_str
     *
     * @return $this
     */
    public function setOpenTimeStr($open_time_str)
    {
        $this->container['open_time_str'] = $open_time_str;

        return $this;
    }

    /**
     * Gets close_time_str
     *
     * @return string
     */
    public function getCloseTimeStr()
    {
        return $this->container['close_time_str'];
    }

    /**
     * Sets close_time_str
     *
     * @param string $close_time_str close_time_str
     *
     * @return $this
     */
    public function setCloseTimeStr($close_time_str)
    {
        $this->container['close_time_str'] = $close_time_str;

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


