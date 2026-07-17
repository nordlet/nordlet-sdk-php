<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1BankTransactionsSuggestMatchesResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1BankTransactionsSuggestMatchesResponseSuggestionsItem> $suggestions
     */
    #[JsonProperty('suggestions'), ArrayType([PostV1BankTransactionsSuggestMatchesResponseSuggestionsItem::class])]
    public array $suggestions;

    /**
     * @param array{
     *   suggestions: array<PostV1BankTransactionsSuggestMatchesResponseSuggestionsItem>,
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
