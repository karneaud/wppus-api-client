<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Wppus\Client\Serializer;

use DateTimeInterface;
use JsonSerializable;
use Wppus\Client\Request\RequestInterface;
use Wppus\Client\Schema\SerializableInterface;

class QuerySerializer
{
    public function serializeRequest(RequestInterface $request): string
    {
        $queryParameters = [];
        foreach ($request->getRawQueryParameters() as $name => $value) {
            if ($value === null) {
                continue;
            }
            if ($value instanceof DateTimeInterface) {
                $value = $value->format(DateTimeInterface::RFC3339);
            } elseif ($value instanceof SerializableInterface) {
                $value = $value->toArray();
            } elseif ($value instanceof JsonSerializable) {
                $value = $value->jsonSerialize();
            }
            $queryParameters[$name] = $value;
        }

        return http_build_query($queryParameters, '', '&', PHP_QUERY_RFC3986);
    }
}
