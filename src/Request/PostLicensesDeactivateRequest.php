<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Wppus\Client\Request;

use JsonSerializable;
use Wppus\Client\Schema\PostLicensesRequestBody;

class PostLicensesDeactivateRequest implements RequestInterface
{
    private PostLicensesRequestBody $postLicensesDeactivateRequestBody;

    private string $contentType = 'application/json';

    public function __construct(PostLicensesRequestBody $postLicensesDeactivateRequestBody)
    {
        $this->postLicensesDeactivateRequestBody = $postLicensesDeactivateRequestBody;
    }

    public function getContentType(): string
    {
        return $this->contentType;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getRoute(): string
    {
        return 'licenses/deactivate';
    }

    public function getQueryParameters(): array
    {
        return [];
    }

    public function getRawQueryParameters(): array
    {
        return [];
    }

    public function getCookies(): array
    {
        return [];
    }

    public function getHeaders(): array
    {
        return ['Content-Type' => $this->contentType];
    }

    /**
     * @return PostLicensesDeactivateRequestBody
     */
    public function getBody()
    {
        return $this->postLicensesDeactivateRequestBody;
    }
}
