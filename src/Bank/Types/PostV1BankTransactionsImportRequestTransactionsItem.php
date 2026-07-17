<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BankTransactionsImportRequestTransactionsItem extends JsonSerializableType
{
    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var ?string $counterpartyName
     */
    #[JsonProperty('counterpartyName')]
    public ?string $counterpartyName;

    /**
     * @var ?string $counterpartyIban
     */
    #[JsonProperty('counterpartyIban')]
    public ?string $counterpartyIban;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $externalId
     */
    #[JsonProperty('externalId')]
    public ?string $externalId;

    /**
     * @param array{
     *   date: string,
     *   amount: string,
     *   currency?: ?string,
     *   counterpartyName?: ?string,
     *   counterpartyIban?: ?string,
     *   description?: ?string,
     *   externalId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->amount = $values['amount'];
        $this->currency = $values['currency'] ?? null;
        $this->counterpartyName = $values['counterpartyName'] ?? null;
        $this->counterpartyIban = $values['counterpartyIban'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->externalId = $values['externalId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
