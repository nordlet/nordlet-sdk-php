<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1BankFeedsBanksListResponse extends JsonSerializableType
{
    /**
     * @var string $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var array<PostV1BankFeedsBanksListResponseBanksItem> $banks
     */
    #[JsonProperty('banks'), ArrayType([PostV1BankFeedsBanksListResponseBanksItem::class])]
    public array $banks;

    /**
     * @param array{
     *   provider: string,
     *   banks: array<PostV1BankFeedsBanksListResponseBanksItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->banks = $values['banks'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
