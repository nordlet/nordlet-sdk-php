<?php

namespace Nordlet\Production;

use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;
use Nordlet\Production\Requests\WorkCentersCreateProductionRequest;
use Nordlet\Production\Types\WorkCentersCreateProductionResponse;
use Nordlet\Exceptions\NordletException;
use Nordlet\Exceptions\NordletApiException;
use Nordlet\Core\Json\JsonApiRequest;
use Nordlet\Environments;
use Nordlet\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Nordlet\Production\Requests\WorkCentersUpdateProductionRequest;
use Nordlet\Production\Types\WorkCentersUpdateProductionResponse;
use Nordlet\Production\Requests\WorkCentersListProductionRequest;
use Nordlet\Production\Types\WorkCentersListProductionResponse;
use Nordlet\Production\Requests\RoutingsCreateProductionRequest;
use Nordlet\Production\Types\RoutingsCreateProductionResponse;
use Nordlet\Production\Requests\RoutingsGetProductionRequest;
use Nordlet\Production\Types\RoutingsGetProductionResponse;
use Nordlet\Production\Requests\RoutingsListProductionRequest;
use Nordlet\Production\Types\RoutingsListProductionResponse;
use Nordlet\Production\Requests\MaintenanceCreateProductionRequest;
use Nordlet\Production\Types\MaintenanceCreateProductionResponse;
use Nordlet\Production\Requests\MaintenanceCompleteProductionRequest;
use Nordlet\Production\Types\MaintenanceCompleteProductionResponse;
use Nordlet\Production\Requests\MaintenanceCancelProductionRequest;
use Nordlet\Production\Types\MaintenanceCancelProductionResponse;
use Nordlet\Production\Requests\MaintenanceListProductionRequest;
use Nordlet\Production\Types\MaintenanceListProductionResponse;
use Nordlet\Production\Requests\BomsCreateProductionRequest;
use Nordlet\Production\Types\BomsCreateProductionResponse;
use Nordlet\Production\Requests\BomsGetProductionRequest;
use Nordlet\Production\Types\BomsGetProductionResponse;
use Nordlet\Production\Requests\BomsListProductionRequest;
use Nordlet\Production\Types\BomsListProductionResponse;
use Nordlet\Production\Requests\OrdersCreateProductionRequest;
use Nordlet\Production\Types\OrdersCreateProductionResponse;
use Nordlet\Production\Requests\OrdersRecordOperationProductionRequest;
use Nordlet\Production\Types\OrdersRecordOperationProductionResponse;
use Nordlet\Production\Requests\QualityChecksAddProductionRequest;
use Nordlet\Production\Types\QualityChecksAddProductionResponse;
use Nordlet\Production\Requests\QualityChecksRecordProductionRequest;
use Nordlet\Production\Types\QualityChecksRecordProductionResponse;
use Nordlet\Production\Requests\QualityChecksListProductionRequest;
use Nordlet\Production\Types\QualityChecksListProductionResponse;
use Nordlet\Production\Requests\OrdersCompleteProductionRequest;
use Nordlet\Production\Types\OrdersCompleteProductionResponse;
use Nordlet\Production\Requests\OrdersGetProductionRequest;
use Nordlet\Production\Types\OrdersGetProductionResponse;
use Nordlet\Production\Requests\OrdersListProductionRequest;
use Nordlet\Production\Types\OrdersListProductionResponse;

class ProductionClient
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
     * Create a work center with its `costPerHour`. `costAccountCode` must be a postable account of the chart (422 otherwise); when a production order completes, the labor cost of the operations run on this center is credited to it instead of the `production.laborApplied` posting rule account. A duplicate `code` is refused with 409.
     *
     * @param WorkCentersCreateProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?WorkCentersCreateProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function workCentersCreate(WorkCentersCreateProductionRequest $request, ?array $options = null): ?WorkCentersCreateProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/work-centers/create",
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
                return WorkCentersCreateProductionResponse::fromJson($json);
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
     * Change a work center; only the fields sent are changed. `costAccountCode` must be a postable account of the chart (422 otherwise); a `code` already used by another work center is refused with 409.
     *
     * @param WorkCentersUpdateProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?WorkCentersUpdateProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function workCentersUpdate(WorkCentersUpdateProductionRequest $request, ?array $options = null): ?WorkCentersUpdateProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/work-centers/update",
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
                return WorkCentersUpdateProductionResponse::fromJson($json);
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
     * List work centers. `nextMaintenanceDate` is the latest completed maintenance date (the creation date when there is none) plus `maintenanceIntervalDays`, null without an interval. Filterable by `code`, `name` and `isActive`; sortable by `code`, `name` and `createdAt`.
     *
     * @param WorkCentersListProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?WorkCentersListProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function workCentersList(WorkCentersListProductionRequest $request = new WorkCentersListProductionRequest(), ?array $options = null): ?WorkCentersListProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/work-centers/list",
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
                return WorkCentersListProductionResponse::fromJson($json);
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
     * Create a routing with its operations: `sequence`, work center, `setupMinutes`, `runMinutesPerUnit` and an optional `qualityCheckName` that becomes a pending quality check on every production order using the routing. Operation sequences must be unique (422); a duplicate `code` is refused with 409.
     *
     * @param RoutingsCreateProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RoutingsCreateProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function routingsCreate(RoutingsCreateProductionRequest $request, ?array $options = null): ?RoutingsCreateProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/routings/create",
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
                return RoutingsCreateProductionResponse::fromJson($json);
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
     * Return one routing with its operations in sequence order.
     *
     * @param RoutingsGetProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RoutingsGetProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function routingsGet(RoutingsGetProductionRequest $request, ?array $options = null): ?RoutingsGetProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/routings/get",
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
                return RoutingsGetProductionResponse::fromJson($json);
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
     * List routings without their operations. Filterable by `code`, `name` and `isActive`; sortable by `code`, `name` and `createdAt`.
     *
     * @param RoutingsListProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RoutingsListProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function routingsList(RoutingsListProductionRequest $request = new RoutingsListProductionRequest(), ?array $options = null): ?RoutingsListProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/routings/list",
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
                return RoutingsListProductionResponse::fromJson($json);
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
     * Record a `preventive` or `corrective` maintenance planned for a work center on `plannedDate`; it starts as `planned`.
     *
     * @param MaintenanceCreateProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MaintenanceCreateProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function maintenanceCreate(MaintenanceCreateProductionRequest $request, ?array $options = null): ?MaintenanceCreateProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/maintenance/create",
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
                return MaintenanceCreateProductionResponse::fromJson($json);
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
     * Mark a `planned` maintenance as completed on `completedDate`, with optional `downtimeHours` and `cost` (409 when it is already completed or cancelled). The work center's `nextMaintenanceDate` is then counted from the latest completed maintenance date.
     *
     * @param MaintenanceCompleteProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MaintenanceCompleteProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function maintenanceComplete(MaintenanceCompleteProductionRequest $request, ?array $options = null): ?MaintenanceCompleteProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/maintenance/complete",
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
                return MaintenanceCompleteProductionResponse::fromJson($json);
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
     * Cancel a `planned` maintenance (409 when it is already completed or cancelled).
     *
     * @param MaintenanceCancelProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MaintenanceCancelProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function maintenanceCancel(MaintenanceCancelProductionRequest $request, ?array $options = null): ?MaintenanceCancelProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/maintenance/cancel",
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
                return MaintenanceCancelProductionResponse::fromJson($json);
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
     * List maintenance records. Filterable by `workCenterId`, `status` and `type`; sortable by `plannedDate` and `createdAt`.
     *
     * @param MaintenanceListProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MaintenanceListProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function maintenanceList(MaintenanceListProductionRequest $request = new MaintenanceListProductionRequest(), ?array $options = null): ?MaintenanceListProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/maintenance/list",
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
                return MaintenanceListProductionResponse::fromJson($json);
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
     * Create a bill of materials for a finished item. `outputQuantity` is the finished quantity made per unit of order quantity; each line's `quantity` is the component consumed per unit of order quantity, increased by its `scrapPercent` at completion; `routingId` is the default routing of assembly orders. A BOM that consumes its own finished item is refused with 422, a duplicate `code` with 409.
     *
     * @param BomsCreateProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BomsCreateProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function bomsCreate(BomsCreateProductionRequest $request, ?array $options = null): ?BomsCreateProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/boms/create",
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
                return BomsCreateProductionResponse::fromJson($json);
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
     * Return one bill of materials with its component lines.
     *
     * @param BomsGetProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BomsGetProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function bomsGet(BomsGetProductionRequest $request, ?array $options = null): ?BomsGetProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/boms/get",
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
                return BomsGetProductionResponse::fromJson($json);
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
     * List bills of materials without their lines. Filterable by `code`, `name`, `finishedItemId` and `isActive`; sortable by `code` and `name`.
     *
     * @param BomsListProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?BomsListProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function bomsList(BomsListProductionRequest $request = new BomsListProductionRequest(), ?array $options = null): ?BomsListProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/boms/list",
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
                return BomsListProductionResponse::fromJson($json);
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
     * Create a draft production order for `quantity` units of a BOM in a warehouse; stock moves only at `production/orders/complete`. An `assembly` order takes its routing from `routingId`, else from the BOM, and copies the routing's operations onto the order (`plannedMinutes` = setup minutes + run minutes per unit × finished quantity, priced at the work center's current `costPerHour`) with a pending quality check for every operation that names one. A `routingId` on a `disassembly` order, an inactive routing or a routing without operations is refused with 422.
     *
     * @param OrdersCreateProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersCreateProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersCreate(OrdersCreateProductionRequest $request, ?array $options = null): ?OrdersCreateProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/orders/create",
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
                return OrdersCreateProductionResponse::fromJson($json);
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
     * Record the `actualMinutes` spent on one operation of a draft production order; at completion the actual minutes, else the planned ones, price the operation's labor cost. Refused with 409 once the order is completed.
     *
     * @param OrdersRecordOperationProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersRecordOperationProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersRecordOperation(OrdersRecordOperationProductionRequest $request, ?array $options = null): ?OrdersRecordOperationProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/orders/record-operation",
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
                return OrdersRecordOperationProductionResponse::fromJson($json);
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
     * Add a pending quality check to a draft production order (409 once the order is completed). The order cannot complete while a check is pending.
     *
     * @param QualityChecksAddProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?QualityChecksAddProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function qualityChecksAdd(QualityChecksAddProductionRequest $request, ?array $options = null): ?QualityChecksAddProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/quality-checks/add",
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
                return QualityChecksAddProductionResponse::fromJson($json);
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
     * Record the result of a quality check as `passed` or `failed`, with the time and the actor (409 once the order is completed). Only a `pending` check blocks `production/orders/complete`; a `failed` one does not.
     *
     * @param QualityChecksRecordProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?QualityChecksRecordProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function qualityChecksRecord(QualityChecksRecordProductionRequest $request, ?array $options = null): ?QualityChecksRecordProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/quality-checks/record",
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
                return QualityChecksRecordProductionResponse::fromJson($json);
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
     * List quality checks. Filterable by `orderId`, `result` and `name`; sortable by `createdAt` and `name`.
     *
     * @param QualityChecksListProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?QualityChecksListProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function qualityChecksList(QualityChecksListProductionRequest $request = new QualityChecksListProductionRequest(), ?array $options = null): ?QualityChecksListProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/quality-checks/list",
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
                return QualityChecksListProductionResponse::fromJson($json);
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
     * Complete a draft production order on the order's date. An `assembly` consumes the components FIFO from the warehouse (line quantity × order quantity, increased by `scrapPercent`), prices each operation at its actual or planned minutes × `costPerHour`, receives the finished item at material cost + labor cost less the share of `scrappedQuantity`, and, when there is labor, scrap or a component stock account other than the finished one, posts a journal entry debiting the finished stock account (and the `production.scrap` rule account for the scrapped share) and crediting the component stock accounts and the work centers' cost accounts (or the `production.laborApplied` rule account); a `disassembly` consumes the finished item and receives the components at its cost shared by quantity. `componentsAccountCode` and `finishedAccountCode` default to the chart's production accounts. Refused with 409 when the order is already completed, a quality check is still pending or the accounting period is locked, and with 422 when the BOM has no lines, `scrappedQuantity` is given on a disassembly or exceeds the finished quantity, the assembly cost is zero, stock is insufficient, a received item needs lot or serial tracking, or a posting account is missing. Emits `stock.changed`.
     *
     * @param OrdersCompleteProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersCompleteProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersComplete(OrdersCompleteProductionRequest $request, ?array $options = null): ?OrdersCompleteProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/orders/complete",
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
                return OrdersCompleteProductionResponse::fromJson($json);
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
     * Return one production order with its operations and quality checks.
     *
     * @param OrdersGetProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersGetProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersGet(OrdersGetProductionRequest $request, ?array $options = null): ?OrdersGetProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/orders/get",
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
                return OrdersGetProductionResponse::fromJson($json);
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
     * List production orders without operations and quality checks. Filterable by `bomId`, `warehouseId`, `status` and `type`; sortable by `date` and `createdAt`.
     *
     * @param OrdersListProductionRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersListProductionResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersList(OrdersListProductionRequest $request = new OrdersListProductionRequest(), ?array $options = null): ?OrdersListProductionResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/production/orders/list",
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
                return OrdersListProductionResponse::fromJson($json);
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
