<?php
/**
 * CreditCardCharge
 *
 * PHP version 5
 *
 * @category Class
 * @package  Tpaga
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Tpaga\Model;

use \ArrayAccess;
/**
 * CreditCardCharge Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Tpaga
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreditCardCharge implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'amount' => 'float',
        'tax_amount' => 'float',
        'currency' => 'string',
        'credit_card' => 'string',
        'installments' => 'float',
        'order_id' => 'string',
        'description' => 'string',
        'third_party_id' => 'string',
        'paid' => 'bool',
        'customer' => 'string',
        'payment_transaction' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'amount' => 'amount',
        'tax_amount' => 'taxAmount',
        'currency' => 'currency',
        'credit_card' => 'creditCard',
        'installments' => 'installments',
        'order_id' => 'orderId',
        'description' => 'description',
        'third_party_id' => 'thirdPartyId',
        'paid' => 'paid',
        'customer' => 'customer',
        'payment_transaction' => 'paymentTransaction'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'amount' => 'setAmount',
        'tax_amount' => 'setTaxAmount',
        'currency' => 'setCurrency',
        'credit_card' => 'setCreditCard',
        'installments' => 'setInstallments',
        'order_id' => 'setOrderId',
        'description' => 'setDescription',
        'third_party_id' => 'setThirdPartyId',
        'paid' => 'setPaid',
        'customer' => 'setCustomer',
        'payment_transaction' => 'setPaymentTransaction'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'amount' => 'getAmount',
        'tax_amount' => 'getTaxAmount',
        'currency' => 'getCurrency',
        'credit_card' => 'getCreditCard',
        'installments' => 'getInstallments',
        'order_id' => 'getOrderId',
        'description' => 'getDescription',
        'third_party_id' => 'getThirdPartyId',
        'paid' => 'getPaid',
        'customer' => 'getCustomer',
        'payment_transaction' => 'getPaymentTransaction'
    );
  
    
    /**
      * $id 
      * @var string
      */
    protected $id;
    
    /**
      * $amount 
      * @var float
      */
    protected $amount;
    
    /**
      * $tax_amount 
      * @var float
      */
    protected $tax_amount;
    
    /**
      * $currency 3-letter ISO code for currency.
      * @var string
      */
    protected $currency;
    
    /**
      * $credit_card 
      * @var string
      */
    protected $credit_card;
    
    /**
      * $installments The amount of payments to divide the charge amount.
      * @var float
      */
    protected $installments;
    
    /**
      * $order_id 
      * @var string
      */
    protected $order_id;
    
    /**
      * $description 
      * @var string
      */
    protected $description;
    
    /**
      * $third_party_id 
      * @var string
      */
    protected $third_party_id;
    
    /**
      * $paid 
      * @var bool
      */
    protected $paid;
    
    /**
      * $customer 
      * @var string
      */
    protected $customer;
    
    /**
      * $payment_transaction 
      * @var string
      */
    protected $payment_transaction;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->amount = $data["amount"];
            $this->tax_amount = $data["tax_amount"];
            $this->currency = $data["currency"];
            $this->credit_card = $data["credit_card"];
            $this->installments = $data["installments"];
            $this->order_id = $data["order_id"];
            $this->description = $data["description"];
            $this->third_party_id = $data["third_party_id"];
            $this->paid = $data["paid"];
            $this->customer = $data["customer"];
            $this->payment_transaction = $data["payment_transaction"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets amount
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }
  
    /**
     * Sets amount
     * @param float $amount 
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets tax_amount
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->tax_amount;
    }
  
    /**
     * Sets tax_amount
     * @param float $tax_amount 
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        
        $this->tax_amount = $tax_amount;
        return $this;
    }
    
    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
  
    /**
     * Sets currency
     * @param string $currency 3-letter ISO code for currency.
     * @return $this
     */
    public function setCurrency($currency)
    {
        
        $this->currency = $currency;
        return $this;
    }
    
    /**
     * Gets credit_card
     * @return string
     */
    public function getCreditCard()
    {
        return $this->credit_card;
    }
  
    /**
     * Sets credit_card
     * @param string $credit_card 
     * @return $this
     */
    public function setCreditCard($credit_card)
    {
        
        $this->credit_card = $credit_card;
        return $this;
    }
    
    /**
     * Gets installments
     * @return float
     */
    public function getInstallments()
    {
        return $this->installments;
    }
  
    /**
     * Sets installments
     * @param float $installments The amount of payments to divide the charge amount.
     * @return $this
     */
    public function setInstallments($installments)
    {
        
        $this->installments = $installments;
        return $this;
    }
    
    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }
  
    /**
     * Sets order_id
     * @param string $order_id 
     * @return $this
     */
    public function setOrderId($order_id)
    {
        
        $this->order_id = $order_id;
        return $this;
    }
    
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description 
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
        return $this;
    }
    
    /**
     * Gets third_party_id
     * @return string
     */
    public function getThirdPartyId()
    {
        return $this->third_party_id;
    }
  
    /**
     * Sets third_party_id
     * @param string $third_party_id 
     * @return $this
     */
    public function setThirdPartyId($third_party_id)
    {
        
        $this->third_party_id = $third_party_id;
        return $this;
    }
    
    /**
     * Gets paid
     * @return bool
     */
    public function getPaid()
    {
        return $this->paid;
    }
  
    /**
     * Sets paid
     * @param bool $paid 
     * @return $this
     */
    public function setPaid($paid)
    {
        
        $this->paid = $paid;
        return $this;
    }
    
    /**
     * Gets customer
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }
  
    /**
     * Sets customer
     * @param string $customer 
     * @return $this
     */
    public function setCustomer($customer)
    {
        
        $this->customer = $customer;
        return $this;
    }
    
    /**
     * Gets payment_transaction
     * @return string
     */
    public function getPaymentTransaction()
    {
        return $this->payment_transaction;
    }
  
    /**
     * Sets payment_transaction
     * @param string $payment_transaction 
     * @return $this
     */
    public function setPaymentTransaction($payment_transaction)
    {
        
        $this->payment_transaction = $payment_transaction;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}