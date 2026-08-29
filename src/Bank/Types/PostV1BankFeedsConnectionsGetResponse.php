<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1BankFeedsConnectionsGetResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var string $aspspName
     */
    #[JsonProperty('aspspName')]
    public string $aspspName;

    /**
     * @var string $aspspCountry
     */
    #[JsonProperty('aspspCountry')]
    public string $aspspCountry;

    /**
     * @var value-of<PostV1BankFeedsConnectionsGetResponsePsuType> $psuType
     */
    #[JsonProperty('psuType')]
    public string $psuType;

    /**
     * @var value-of<PostV1BankFeedsConnectionsGetResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $reference
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @var ?string $consentExpiresAt
     */
    #[JsonProperty('consentExpiresAt')]
    public ?string $consentExpiresAt;

    /**
     * @var ?string $lastSyncedAt
     */
    #[JsonProperty('lastSyncedAt')]
    public ?string $lastSyncedAt;

    /**
     * @var ?string $error
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @var array<PostV1BankFeedsConnectionsGetResponseAccountsItem> $accounts
     */
    #[JsonProperty('accounts'), ArrayType([PostV1BankFeedsConnectionsGetResponseAccountsItem::class])]
    public array $accounts;

    /**
     * @param array{
     *   id: string,
     *   provider: string,
     *   aspspName: string,
     *   aspspCountry: string,
     *   psuType: value-of<PostV1BankFeedsConnectionsGetResponsePsuType>,
     *   status: value-of<PostV1BankFeedsConnectionsGetResponseStatus>,
     *   reference: string,
     *   createdAt: string,
     *   updatedAt: string,
     *   accounts: array<PostV1BankFeedsConnectionsGetResponseAccountsItem>,
     *   consentExpiresAt?: ?string,
     *   lastSyncedAt?: ?string,
     *   error?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->provider = $values['provider'];
        $this->aspspName = $values['aspspName'];
        $this->aspspCountry = $values['aspspCountry'];
        $this->psuType = $values['psuType'];
        $this->status = $values['status'];
        $this->reference = $values['reference'];
        $this->consentExpiresAt = $values['consentExpiresAt'] ?? null;
        $this->lastSyncedAt = $values['lastSyncedAt'] ?? null;
        $this->error = $values['error'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->accounts = $values['accounts'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
