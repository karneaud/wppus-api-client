# WordPress License Management API client

This client is generated using [docler-labs/api-client-generator](https://github.com/DoclerLabs/api-client-generator) based on the OpenAPI specification of the WordPress License Management API.

You can generate the client with the following command:
```bash
docker run -it --rm \
-v <local-path-to-api>/doc/openapi.yaml:/openapi.yaml:ro \
-v <local-path-to-client>:/client \
-e NAMESPACE=Wppus\\Client \
-e OPENAPI=/openapi.yaml \
-e OUTPUT_DIR=/client \
-e PACKAGE=karneaud/wppus-api-client \
-e CLIENT_PHP_VERSION=7.4 \
dhlabs/api-client-generator
```

## Usage

```php
<?php declare(strict_types=1);

use Wppus\Client\Factory;
use Wppus\Client\Request\GetLicensesCheckRequest;

/**
 * If using Guzzle 6, make sure to configure Guzzle to not throw exceptions
 * on HTTP error status codes, or this client will violate PSR-18.
 * e.g. new Client(['base_uri' => $baseUri, 'http_errors' => false, ...])
 */
$client = ...; // any PSR-18 HTTP CLIENT

$factory = new Factory();
$client  = $factory->create($client);

$request = new GetLicensesCheckRequest();
$result  = $client->getLicensesCheck($request);
```

## Operations

### [No tag]
Endpoints:
- **getLicensesCheck** - Checks the status of a given license key.
- **postLicensesActivate** - Activates a license using the provided license key.
- **postLicensesDeactivate** - Deactivates a license using the provided license key.
- **getLicensesRead** - Retrieves detailed information about a specific license.
- **getPackagesMetadata** - Retrieves metadata for a specific package.

