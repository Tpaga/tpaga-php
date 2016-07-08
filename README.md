# tpaga-php
TPAGA PHP Package

You can sign up for a Tpaga account at https://sandbox.tpaga.co

## Requirements

PHP 5.3.3 and later.

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require tpaga/tpaga-php
```

To use the bindings, use Composer's autoload:

```php
require_once('vendor/autoload.php');
```

## Manual Installation

If you do not wish to use Composer, include the init.php file.

```php
require_once('/path/to/tpaga-php/init.php');
```

## Getting Started

Simple usage looks like:

```php
require_once('./tpaga-php/init.php');

$config = new Tpaga\Configuration();

$private_token = 'd13fr8n7vhvkuch3lq2ds5qhjnd2pdd2';
$public_token = 'pk_test_qvbvuthlvqpijnr0elmtg5jh';

$apiClient = new Tpaga\ApiClient($config);

function create_customer() {

    $GLOBALS["config"]->setUsername($GLOBALS["private_token"]);

    $customer = new Tpaga\Model\Customer();
    $customer->setFirstName("Numa");
    $customer->setLastName("Nigerio");
    $customer->setGender("M");
    $customer->setEmail("pericodelospalotes@nowhere.org");
    $customer->setPhone("6326800514");

    $customer_api = new Tpaga\Api\CustomerAPI($GLOBALS["apiClient"]);

    try {
        $persisted_customer = $customer_api->createCustomer($customer);
        var_dump($persisted_customer);
        return $persisted_customer;
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }

}

function tokenize_credit_card() {

    $GLOBALS["config"]->setUsername($GLOBALS["public_token"]);

    $cctoken = new Tpaga\Model\CreditCardToken();
    $cctoken->setPrimaryAccountNumber("4111111111111111");
    $cctoken->setExpirationMonth("08");
    $cctoken->setExpirationYear("2020");
    $cctoken->setCardHolderName("John Smith");

    $cctoken_api = new Tpaga\Api\tokenizeAPI($GLOBALS["apiClient"]);

    try {
        $persisted_cctoken = $cctoken_api->tokenizeCreditCard($cctoken);
        var_dump($persisted_cctoken);
        return $persisted_cctoken;
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }

}

function associate_token_to_customer($customer_id, $token) {
    $GLOBALS["config"]->setUsername($GLOBALS["private_token"]);

    $assoc_api = new Tpaga\Api\TokenApi($GLOBALS["apiClient"]);

    try {
        $persisted_cc = $assoc_api->addCreditCardToken($customer_id, $token);
        var_dump($persisted_cc);
        return $persisted_cc;
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
}

function charge($cc_token) {

    $GLOBALS["config"]->setUsername($GLOBALS["private_token"]);

    $charge = new Tpaga\Model\CreditCardCharge();
    $charge->setCreditCard($cc_token);
    $charge->setAmount(20000);
    $charge->setTaxAmount(200);
    $charge->setCurrency("COP");
    $charge->setDescription("Sample description");
    $charge->setOrderId("Sample order Id");
    $charge->setInstallments(1);
    $charge->setThirdPartyId("Sample TPId" );
    $charge_api = new Tpaga\Api\ChargeAPI($GLOBALS["apiClient"]);

    try {
        $response = $charge_api->addCreditCardCharge($charge);
        var_dump($response);
        return $response;
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }

}

function refund($charge_id) {

    $GLOBALS["config"]->setUsername($GLOBALS["private_token"]);

    $refund_request = new Tpaga\Model\CreditCardRefund();
    $refund_request->setId($charge_id);
    $refund_api = new Tpaga\Api\RefundApi($GLOBALS["apiClient"]);

    try {
        $response = $refund_api->refundCreditCardCharge($refund_request);
        var_dump($response);
        return $response;
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }

}

$customer = create_customer();
$cctoken = tokenize_credit_card();
$credit_card = associate_token_to_customer($customer->getId(), $cctoken);
$charge = charge($credit_card->getId());
refund($charge->getId());
```

## Documentation

Please see https://tpaga.com/docs for extra documentation.
