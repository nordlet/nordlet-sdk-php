<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class FeedsBanksListBankResponse extends JsonSerializableType
{
    /**
     * @var string $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var array<FeedsBanksListBankResponseBanksItem> $banks
     */
    #[JsonProperty('banks'), ArrayType([FeedsBanksListBankResponseBanksItem::class])]
    public array $banks;

    /**
     * @param array{
     *   provider: string,
     *   banks: array<FeedsBanksListBankResponseBanksItem>,
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
