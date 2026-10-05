<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class FeedsAccountsConfigureBankResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $connectionId
     */
    #[JsonProperty('connectionId')]
    public string $connectionId;

    /**
     * @var ?string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public ?string $bankAccountId;

    /**
     * @var ?string $importTemplateId
     */
    #[JsonProperty('importTemplateId')]
    public ?string $importTemplateId;

    /**
     * @var value-of<FeedsAccountsConfigureBankResponseSyncSchedule> $syncSchedule
     */
    #[JsonProperty('syncSchedule')]
    public string $syncSchedule;

    /**
     * @var string $externalId
     */
    #[JsonProperty('externalId')]
    public string $externalId;

    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $product
     */
    #[JsonProperty('product')]
    public ?string $product;

    /**
     * @var ?string $syncFrom
     */
    #[JsonProperty('syncFrom')]
    public ?string $syncFrom;

    /**
     * @var ?DateTime $lastSyncedAt
     */
    #[JsonProperty('lastSyncedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $lastSyncedAt;

    /**
     * @param array{
     *   id: string,
     *   connectionId: string,
     *   syncSchedule: value-of<FeedsAccountsConfigureBankResponseSyncSchedule>,
     *   externalId: string,
     *   currency: string,
     *   bankAccountId?: ?string,
     *   importTemplateId?: ?string,
     *   iban?: ?string,
     *   name?: ?string,
     *   product?: ?string,
     *   syncFrom?: ?string,
     *   lastSyncedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->connectionId = $values['connectionId'];
        $this->bankAccountId = $values['bankAccountId'] ?? null;
        $this->importTemplateId = $values['importTemplateId'] ?? null;
        $this->syncSchedule = $values['syncSchedule'];
        $this->externalId = $values['externalId'];
        $this->iban = $values['iban'] ?? null;
        $this->currency = $values['currency'];
        $this->name = $values['name'] ?? null;
        $this->product = $values['product'] ?? null;
        $this->syncFrom = $values['syncFrom'] ?? null;
        $this->lastSyncedAt = $values['lastSyncedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
