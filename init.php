<?php

//Single
require(dirname(__FILE__) . '/lib/ApiClient.php');
require(dirname(__FILE__) . '/lib/ApiException.php');
require(dirname(__FILE__) . '/lib/Configuration.php');
require(dirname(__FILE__) . '/lib/ObjectSerializer.php');

//API

require(dirname(__FILE__) . '/lib/Api/ChargeApi.php');
require(dirname(__FILE__) . '/lib/Api/ChargebackApi.php');
require(dirname(__FILE__) . '/lib/Api/CreditCardApi.php');
require(dirname(__FILE__) . '/lib/Api/CustomerApi.php');
require(dirname(__FILE__) . '/lib/Api/DaviPlataApi.php');
require(dirname(__FILE__) . '/lib/Api/RefundApi.php');
require(dirname(__FILE__) . '/lib/Api/TokenApi.php');
require(dirname(__FILE__) . '/lib/Api/TokenizeApi.php');

//Model

require(dirname(__FILE__) . '/lib/Model/Address.php');
require(dirname(__FILE__) . '/lib/Model/ApiError.php');
require(dirname(__FILE__) . '/lib/Model/ApiErrorsItem.php');
require(dirname(__FILE__) . '/lib/Model/BillingAddress.php');
require(dirname(__FILE__) . '/lib/Model/City.php');
require(dirname(__FILE__) . '/lib/Model/CreditCard.php');
require(dirname(__FILE__) . '/lib/Model/CreditCardCreate.php');
require(dirname(__FILE__) . '/lib/Model/CreditCardCharge.php');
require(dirname(__FILE__) . '/lib/Model/CreditCardRefund.php');
require(dirname(__FILE__) . '/lib/Model/CreditCardToken.php');
require(dirname(__FILE__) . '/lib/Model/Customer.php');
require(dirname(__FILE__) . '/lib/Model/DaviPlata.php');
require(dirname(__FILE__) . '/lib/Model/DaviPlataCharge.php');
require(dirname(__FILE__) . '/lib/Model/DaviPlataChargeback.php');
require(dirname(__FILE__) . '/lib/Model/DaviPlataVerification.php');
require(dirname(__FILE__) . '/lib/Model/Token.php');

