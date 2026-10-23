<?php

namespace Nordlet\Billing;

use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;
use Nordlet\Billing\Requests\AccountGetBillingRequest;
use Nordlet\Billing\Types\AccountGetBillingResponse;
use Nordlet\Exceptions\NordletException;
use Nordlet\Exceptions\NordletApiException;
use Nordlet\Core\Json\JsonApiRequest;
use Nordlet\Environments;
use Nordlet\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Nordlet\Billing\Requests\AccountSetPlanBillingRequest;
use Nordlet\Billing\Types\AccountSetPlanBillingResponse;
use Nordlet\Billing\Requests\AccountSetAccountTypeBillingRequest;
use Nordlet\Billing\Types\AccountSetAccountTypeBillingResponse;
use Nordlet\Billing\Requests\AccountSetAutoTopUpBillingRequest;
use Nordlet\Billing\Types\AccountSetAutoTopUpBillingResponse;
use Nordlet\Billing\Requests\AccountSetOverdraftCapBillingRequest;
use Nordlet\Billing\Types\AccountSetOverdraftCapBillingResponse;
use Nordlet\Billing\Requests\TopupCreateBillingRequest;
use Nordlet\Billing\Types\TopupCreateBillingResponse;
use Nordlet\Billing\Requests\TopupConfirmBillingRequest;
use Nordlet\Billing\Types\TopupConfirmBillingResponse;
use Nordlet\Billing\Requests\FlatRateCreateBillingRequest;
use Nordlet\Billing\Types\FlatRateCreateBillingResponse;
use Nordlet\Billing\Requests\FlatRateConfirmBillingRequest;
use Nordlet\Billing\Types\FlatRateConfirmBillingResponse;
use Nordlet\Billing\Requests\PortalCreateBillingRequest;
use Nordlet\Billing\Types\PortalCreateBillingResponse;
use Nordlet\Billing\Requests\TransactionsListBillingRequest;
use Nordlet\Billing\Types\TransactionsListBillingResponse;
use Nordlet\Billing\Requests\UsageListBillingRequest;
use Nordlet\Billing\Types\UsageListBillingResponse;

class BillingClient
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
     * Return the signed-in user's billing account: plan, account type, status, balance, trial and payment state, the month-to-date usage of the companies the user pays for with an estimate of today's charge, the plan catalogue, and the top-up, automatic top-up and overdraft settings.
     *
     * @param AccountGetBillingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountGetBillingResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountGet(AccountGetBillingRequest $request = new AccountGetBillingRequest(), ?array $options = null): ?AccountGetBillingResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/billing/account/get",
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
                return AccountGetBillingResponse::fromJson($json);
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
     * Change the plan of the user's flat-rate billing account; answers 409 when the account type is not `flat_rate`. With a Stripe subscription and payments configured, the subscription is moved to the new plan.
     *
     * @param AccountSetPlanBillingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountSetPlanBillingResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountSetPlan(AccountSetPlanBillingRequest $request, ?array $options = null): ?AccountSetPlanBillingResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/billing/account/set-plan",
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
                return AccountSetPlanBillingResponse::fromJson($json);
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
     * Switch the user's billing account between `flat_rate` and `per_request`. With a Stripe subscription and payments configured, the subscription is moved to the plan's price for `flat_rate`; for `per_request` the plan is taken off the subscription, and a subscription that carried only the plan is cancelled, leaving the account without one. When Stripe refuses the change, the previous account type is restored.
     *
     * @param AccountSetAccountTypeBillingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountSetAccountTypeBillingResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountSetAccountType(AccountSetAccountTypeBillingRequest $request, ?array $options = null): ?AccountSetAccountTypeBillingResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/billing/account/set-account-type",
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
                return AccountSetAccountTypeBillingResponse::fromJson($json);
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
     * Switch automatic top-ups on or off and set their amount. Switching them on needs a Stripe customer, which the first card top-up creates (400 otherwise); when switched on, a top-up is charged at once if the balance is at or below zero, no payment has failed and no top-up was requested in the last 24 hours.
     *
     * @param AccountSetAutoTopUpBillingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountSetAutoTopUpBillingResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountSetAutoTopUp(AccountSetAutoTopUpBillingRequest $request, ?array $options = null): ?AccountSetAutoTopUpBillingResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/billing/account/set-auto-top-up",
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
                return AccountSetAutoTopUpBillingResponse::fromJson($json);
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
     * Set the overdraft cap of the user's billing account: how far usage charges may take the balance below zero before the account is suspended. A suspended account whose balance is within the new cap is activated again.
     *
     * @param AccountSetOverdraftCapBillingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountSetOverdraftCapBillingResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountSetOverdraftCap(AccountSetOverdraftCapBillingRequest $request, ?array $options = null): ?AccountSetOverdraftCapBillingResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/billing/account/set-overdraft-cap",
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
                return AccountSetOverdraftCapBillingResponse::fromJson($json);
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
     * Open a Stripe Checkout session for a one-time credit top-up of `amountCents` and return its URL; a Stripe customer is created for the user when there is none. `returnTo` chooses whether Checkout returns to the credits page or to the onboarding plan page, in `locale`. Answers 503 when online payments are not configured.
     *
     * @param TopupCreateBillingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TopupCreateBillingResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function topupCreate(TopupCreateBillingRequest $request, ?array $options = null): ?TopupCreateBillingResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/billing/topup/create",
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
                return TopupCreateBillingResponse::fromJson($json);
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
     * Confirm a paid top-up Checkout session by `sessionId` and credit the account at once instead of waiting for the Stripe webhook; a session is credited only once. Answers 404 when the session is not the user's own or is not paid.
     *
     * @param TopupConfirmBillingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TopupConfirmBillingResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function topupConfirm(TopupConfirmBillingRequest $request, ?array $options = null): ?TopupConfirmBillingResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/billing/topup/confirm",
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
                return TopupConfirmBillingResponse::fromJson($json);
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
     * Open a Stripe Checkout session for a flat-rate subscription on `plan`, with the trial period of `trialDays` days, and return its URL; a Stripe customer is created for the user when there is none. Answers 409 when a flat-rate subscription is already active and 503 when online payments are not configured or the plan has no price.
     *
     * @param FlatRateCreateBillingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FlatRateCreateBillingResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function flatRateCreate(FlatRateCreateBillingRequest $request = new FlatRateCreateBillingRequest(), ?array $options = null): ?FlatRateCreateBillingResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/billing/flat-rate/create",
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
                return FlatRateCreateBillingResponse::fromJson($json);
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
     * Confirm a completed flat-rate Checkout session by `sessionId`: the account becomes `flat_rate` on the session's plan with status `active` and the subscription attached, unless the Stripe webhook already did this. Answers 404 when the session is not the user's own or not completed.
     *
     * @param FlatRateConfirmBillingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FlatRateConfirmBillingResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function flatRateConfirm(FlatRateConfirmBillingRequest $request, ?array $options = null): ?FlatRateConfirmBillingResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/billing/flat-rate/confirm",
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
                return FlatRateConfirmBillingResponse::fromJson($json);
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
     * Open a Stripe customer portal session that returns to the credits page in `locale`, and return its URL. Answers 503 when online payments are not configured and 400 when the user has no Stripe customer yet.
     *
     * @param PortalCreateBillingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PortalCreateBillingResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function portalCreate(PortalCreateBillingRequest $request = new PortalCreateBillingRequest(), ?array $options = null): ?PortalCreateBillingResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/billing/portal/create",
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
                return PortalCreateBillingResponse::fromJson($json);
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
     * List the newest credit transactions of the user's billing account, up to `limit`: trial grants, top-ups, usage charges, activations and adjustments, each with the balance after it.
     *
     * @param TransactionsListBillingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TransactionsListBillingResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function transactionsList(TransactionsListBillingRequest $request = new TransactionsListBillingRequest(), ?array $options = null): ?TransactionsListBillingResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/billing/transactions/list",
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
                return TransactionsListBillingResponse::fromJson($json);
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
     * List the daily usage records of the companies the user pays for, from `from` to `to`: one row per company, date and metric (API requests, OCR pages, file storage bytes, database bytes, sale invoices).
     *
     * @param UsageListBillingRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UsageListBillingResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function usageList(UsageListBillingRequest $request, ?array $options = null): ?UsageListBillingResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/billing/usage/list",
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
                return UsageListBillingResponse::fromJson($json);
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
