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
$config= new Tpaga\Configuration();
$config->setUsername('9jk59hpr858j34oibplotp839pdm7mau');
$apiClient = new Tpaga\ApiClient($config);

$charge = new Tpaga\Model\CreditCardCharge();
$charge->setCreditCard("atbf8sg2bvss8u9irh76qc359svtp05n");
$charge->setAmount(20000);
$charge->setTaxAmount(200);
$charge->setCurrency("COP");
$charge->setDescription("Sample description");
$charge->setOrderId("Sample order Id");
$charge->setInstallments(6);
$charge->setThirdPartyId("Sample TPId" );
$charge_api = new Tpaga\Api\ChargeAPI($apiClient);

try {
    $response = $charge_api->addCreditCardCharge($charge);
    var_dump($response);
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}
```

## Documentation

Please see https://tpaga.com/docs for extra documentation.