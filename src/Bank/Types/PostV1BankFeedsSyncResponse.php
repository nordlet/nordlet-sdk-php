<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1BankFeedsSyncResponse extends JsonSerializableType
{
    /**
     * @var string $connectionId
     */
    #[JsonProperty('connectionId')]
    public string $connectionId;

    /**
     * @var int $imported
     */
    #[JsonProperty('imported')]
    public int $imported;

    /**
     * @var int $skipped
     */
    #[JsonProperty('skipped')]
    public int $skipped;

    /**
     * @var array<PostV1BankFeedsSyncResponseAccountsItem> $accounts
     */
    #[JsonProperty('accounts'), ArrayType([PostV1BankFeedsSyncResponseAccountsItem::class])]
    public array $accounts;

    /**
     * @param array{
     *   connectionId: string,
     *   imported: int,
     *   skipped: int,
     *   accounts: array<PostV1BankFeedsSyncResponseAccountsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->connectionId = $values['connectionId'];
        $this->imported = $values['imported'];
        $this->skipped = $values['skipped'];
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
