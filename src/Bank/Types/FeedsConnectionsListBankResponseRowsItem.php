<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class FeedsConnectionsListBankResponseRowsItem extends JsonSerializableType
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
     * @var value-of<FeedsConnectionsListBankResponseRowsItemPsuType> $psuType
     */
    #[JsonProperty('psuType')]
    public string $psuType;

    /**
     * @var value-of<FeedsConnectionsListBankResponseRowsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $reference
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @var ?DateTime $consentExpiresAt
     */
    #[JsonProperty('consentExpiresAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $consentExpiresAt;

    /**
     * @var ?DateTime $lastSyncedAt
     */
    #[JsonProperty('lastSyncedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $lastSyncedAt;

    /**
     * @var ?string $error
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   provider: string,
     *   aspspName: string,
     *   aspspCountry: string,
     *   psuType: value-of<FeedsConnectionsListBankResponseRowsItemPsuType>,
     *   status: value-of<FeedsConnectionsListBankResponseRowsItemStatus>,
     *   reference: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   consentExpiresAt?: ?DateTime,
     *   lastSyncedAt?: ?DateTime,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
