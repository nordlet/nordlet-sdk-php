<?php

namespace Nordlet\Declarations;

use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;
use Nordlet\Declarations\Requests\PostV1DeclarationsLtIntrastatComputeRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsLtIntrastatComputeResponse;
use Nordlet\Exceptions\NordletException;
use Nordlet\Exceptions\NordletApiException;
use Nordlet\Core\Json\JsonApiRequest;
use Nordlet\Environments;
use Nordlet\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Nordlet\Declarations\Requests\PostV1DeclarationsLtIvazGenerateRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsLtIvazGenerateResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsLtIntrastatObligationRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsLtIntrastatObligationResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsLtIsafGenerateRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsLtIsafGenerateResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsLtFr0600ComputeRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsLtFr0600ComputeResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsLtGpm313ComputeRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsLtGpm313ComputeResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsLtSamComputeRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsLtSamComputeResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsLtSdGenerateRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsLtSdGenerateResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsLtSaftGenerateRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsLtSaftGenerateResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsEuOssComputeRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsEuOssComputeResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsEuIossComputeRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsEuIossComputeResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsEuDistanceSalesThresholdGetRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsEuDistanceSalesThresholdGetResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsEuUnionTurnoverGetRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsEuUnionTurnoverGetResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsEuSmeCrossBorderReportComputeRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsEuSmeCrossBorderReportComputeResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsEuSmeThresholdsListRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsEuSmeThresholdsListResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsEuSmeThresholdGetRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsEuSmeThresholdGetResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsEuVatReturnPacksListRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsEuVatReturnPacksListResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsEuVatReturnComputeRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsEuVatReturnComputeResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsPlJpkV7MGenerateRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsPlJpkV7MGenerateResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsConfigsListRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsConfigsListResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsConfigsUpdateRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsConfigsUpdateResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsSubmissionsCreateRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsSubmissionsCreateResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsSubmissionsMarkRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsSubmissionsMarkResponse;
use Nordlet\Declarations\Requests\PostV1DeclarationsSubmissionsListRequest;
use Nordlet\Declarations\Types\PostV1DeclarationsSubmissionsListResponse;

class DeclarationsClient
{
    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

    /**
     * @param PostV1DeclarationsLtIntrastatComputeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsLtIntrastatComputeResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsLtIntrastatCompute(PostV1DeclarationsLtIntrastatComputeRequest $request, ?array $options = null): ?PostV1DeclarationsLtIntrastatComputeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/intrastat/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsLtIntrastatComputeResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsLtIvazGenerateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsLtIvazGenerateResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsLtIvazGenerate(PostV1DeclarationsLtIvazGenerateRequest $request, ?array $options = null): ?PostV1DeclarationsLtIvazGenerateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/ivaz/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsLtIvazGenerateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsLtIntrastatObligationRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsLtIntrastatObligationResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsLtIntrastatObligation(PostV1DeclarationsLtIntrastatObligationRequest $request, ?array $options = null): ?PostV1DeclarationsLtIntrastatObligationResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/intrastat/obligation",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsLtIntrastatObligationResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsLtIsafGenerateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsLtIsafGenerateResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsLtIsafGenerate(PostV1DeclarationsLtIsafGenerateRequest $request, ?array $options = null): ?PostV1DeclarationsLtIsafGenerateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/isaf/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsLtIsafGenerateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsLtFr0600ComputeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsLtFr0600ComputeResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsLtFr0600Compute(PostV1DeclarationsLtFr0600ComputeRequest $request, ?array $options = null): ?PostV1DeclarationsLtFr0600ComputeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/fr0600/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsLtFr0600ComputeResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsLtGpm313ComputeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsLtGpm313ComputeResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsLtGpm313Compute(PostV1DeclarationsLtGpm313ComputeRequest $request, ?array $options = null): ?PostV1DeclarationsLtGpm313ComputeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/gpm313/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsLtGpm313ComputeResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsLtSamComputeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsLtSamComputeResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsLtSamCompute(PostV1DeclarationsLtSamComputeRequest $request, ?array $options = null): ?PostV1DeclarationsLtSamComputeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/sam/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsLtSamComputeResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsLtSdGenerateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsLtSdGenerateResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsLtSdGenerate(PostV1DeclarationsLtSdGenerateRequest $request, ?array $options = null): ?PostV1DeclarationsLtSdGenerateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/sd/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsLtSdGenerateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsLtSaftGenerateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsLtSaftGenerateResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsLtSaftGenerate(PostV1DeclarationsLtSaftGenerateRequest $request, ?array $options = null): ?PostV1DeclarationsLtSaftGenerateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/saft/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsLtSaftGenerateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsEuOssComputeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsEuOssComputeResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsEuOssCompute(PostV1DeclarationsEuOssComputeRequest $request, ?array $options = null): ?PostV1DeclarationsEuOssComputeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/oss/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsEuOssComputeResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsEuIossComputeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsEuIossComputeResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsEuIossCompute(PostV1DeclarationsEuIossComputeRequest $request, ?array $options = null): ?PostV1DeclarationsEuIossComputeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/ioss/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsEuIossComputeResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsEuDistanceSalesThresholdGetRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsEuDistanceSalesThresholdGetResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsEuDistanceSalesThresholdGet(PostV1DeclarationsEuDistanceSalesThresholdGetRequest $request = new PostV1DeclarationsEuDistanceSalesThresholdGetRequest(), ?array $options = null): ?PostV1DeclarationsEuDistanceSalesThresholdGetResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/distance-sales-threshold/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsEuDistanceSalesThresholdGetResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsEuUnionTurnoverGetRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsEuUnionTurnoverGetResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsEuUnionTurnoverGet(PostV1DeclarationsEuUnionTurnoverGetRequest $request = new PostV1DeclarationsEuUnionTurnoverGetRequest(), ?array $options = null): ?PostV1DeclarationsEuUnionTurnoverGetResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/union-turnover/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsEuUnionTurnoverGetResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsEuSmeCrossBorderReportComputeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsEuSmeCrossBorderReportComputeResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsEuSmeCrossBorderReportCompute(PostV1DeclarationsEuSmeCrossBorderReportComputeRequest $request, ?array $options = null): ?PostV1DeclarationsEuSmeCrossBorderReportComputeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/sme-cross-border-report/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsEuSmeCrossBorderReportComputeResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsEuSmeThresholdsListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsEuSmeThresholdsListResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsEuSmeThresholdsList(PostV1DeclarationsEuSmeThresholdsListRequest $request = new PostV1DeclarationsEuSmeThresholdsListRequest(), ?array $options = null): ?PostV1DeclarationsEuSmeThresholdsListResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/sme-thresholds/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsEuSmeThresholdsListResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsEuSmeThresholdGetRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsEuSmeThresholdGetResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsEuSmeThresholdGet(PostV1DeclarationsEuSmeThresholdGetRequest $request = new PostV1DeclarationsEuSmeThresholdGetRequest(), ?array $options = null): ?PostV1DeclarationsEuSmeThresholdGetResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/sme-threshold/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsEuSmeThresholdGetResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsEuVatReturnPacksListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsEuVatReturnPacksListResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsEuVatReturnPacksList(PostV1DeclarationsEuVatReturnPacksListRequest $request = new PostV1DeclarationsEuVatReturnPacksListRequest(), ?array $options = null): ?PostV1DeclarationsEuVatReturnPacksListResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/vat-return/packs/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsEuVatReturnPacksListResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsEuVatReturnComputeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsEuVatReturnComputeResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsEuVatReturnCompute(PostV1DeclarationsEuVatReturnComputeRequest $request, ?array $options = null): ?PostV1DeclarationsEuVatReturnComputeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/vat-return/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsEuVatReturnComputeResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Generate the Polish JPK_V7M(3) file (VAT declaration with evidence) for a month, per the MF schema in force since February 2026. Amounts must already be in PLN; rows are marked BFK until a KSeF integration supplies invoice numbers. Review the warnings before submitting via e-dokumenty.mf.gov.pl.
     *
     * @param PostV1DeclarationsPlJpkV7MGenerateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsPlJpkV7MGenerateResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsPlJpkV7MGenerate(PostV1DeclarationsPlJpkV7MGenerateRequest $request, ?array $options = null): ?PostV1DeclarationsPlJpkV7MGenerateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/jpk-v7m/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsPlJpkV7MGenerateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsConfigsListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsConfigsListResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsConfigsList(PostV1DeclarationsConfigsListRequest $request = new PostV1DeclarationsConfigsListRequest(), ?array $options = null): ?PostV1DeclarationsConfigsListResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/configs/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsConfigsListResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsConfigsUpdateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsConfigsUpdateResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsConfigsUpdate(PostV1DeclarationsConfigsUpdateRequest $request, ?array $options = null): ?PostV1DeclarationsConfigsUpdateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/configs/update",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsConfigsUpdateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsSubmissionsCreateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsSubmissionsCreateResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsSubmissionsCreate(PostV1DeclarationsSubmissionsCreateRequest $request, ?array $options = null): ?PostV1DeclarationsSubmissionsCreateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/submissions/create",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsSubmissionsCreateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsSubmissionsMarkRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsSubmissionsMarkResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsSubmissionsMark(PostV1DeclarationsSubmissionsMarkRequest $request, ?array $options = null): ?PostV1DeclarationsSubmissionsMarkResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/submissions/mark",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsSubmissionsMarkResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostV1DeclarationsSubmissionsListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1DeclarationsSubmissionsListResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1DeclarationsSubmissionsList(PostV1DeclarationsSubmissionsListRequest $request = new PostV1DeclarationsSubmissionsListRequest(), ?array $options = null): ?PostV1DeclarationsSubmissionsListResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/submissions/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PostV1DeclarationsSubmissionsListResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
