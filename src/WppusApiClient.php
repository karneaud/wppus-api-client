<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Wppus\Client;

use Psr\Container\ContainerInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Wppus\Client\Request\GetLicensesCheckRequest;
use Wppus\Client\Request\GetLicensesReadRequest;
use Wppus\Client\Request\GetPackagesMetadataRequest;
use Wppus\Client\Request\Mapper\RequestMapperInterface;
use Wppus\Client\Request\PostLicensesActivateRequest;
use Wppus\Client\Request\PostLicensesDeactivateRequest;
use Wppus\Client\Request\RequestInterface;
use Wppus\Client\Response\ResponseHandler;

class WppusApiClient
{
    private ClientInterface $client;

    private ContainerInterface $container;

    private string $url;

    public function __construct(ClientInterface $client, ContainerInterface $container, string $url = '')
    {
        $this->client    = $client;
        $this->container = $container;
        $this->url = $url;
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->client->sendRequest($this->container->get(RequestMapperInterface::class)->map($request, $this->url));
    }

    public function getLicensesCheck(GetLicensesCheckRequest $request)
    {
        return $this->handleResponse($this->sendRequest($request));
    }

    public function postLicensesActivate(PostLicensesActivateRequest $request)
    {
        return $this->handleResponse($this->sendRequest($request));
    }

    public function postLicensesDeactivate(PostLicensesDeactivateRequest $request)
    {
       return $this->handleResponse($this->sendRequest($request));
    }

    public function getLicensesRead(GetLicensesReadRequest $request)
    {
       return $this->handleResponse($this->sendRequest($request));
    }

    public function getPackagesMetadata(GetPackagesMetadataRequest $request)
    {
       return $this->handleResponse($this->sendRequest($request));
    }

    protected function handleResponse(ResponseInterface $response)
    {
        return $this->container->get(ResponseHandler::class)->handle($response);
    }
}
