<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class TransactionsSuggestMatchesBankResponse extends JsonSerializableType
{
    /**
     * @var array<TransactionsSuggestMatchesBankResponseSuggestionsItem> $suggestions
     */
    #[JsonProperty('suggestions'), ArrayType([TransactionsSuggestMatchesBankResponseSuggestionsItem::class])]
    public array $suggestions;

    /**
     * @param array{
     *   suggestions: array<TransactionsSuggestMatchesBankResponseSuggestionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->suggestions = $values['suggestions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
