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
     * @var ?array<TransactionsSuggestMatchesBankResponseAllocationsItem> $allocations
     */
    #[JsonProperty('allocations'), ArrayType([TransactionsSuggestMatchesBankResponseAllocationsItem::class])]
    public ?array $allocations;

    /**
     * @var array<TransactionsSuggestMatchesBankResponsePostingRulesItem> $postingRules
     */
    #[JsonProperty('postingRules'), ArrayType([TransactionsSuggestMatchesBankResponsePostingRulesItem::class])]
    public array $postingRules;

    /**
     * @param array{
     *   suggestions: array<TransactionsSuggestMatchesBankResponseSuggestionsItem>,
     *   postingRules: array<TransactionsSuggestMatchesBankResponsePostingRulesItem>,
     *   allocations?: ?array<TransactionsSuggestMatchesBankResponseAllocationsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->suggestions = $values['suggestions'];
        $this->allocations = $values['allocations'] ?? null;
        $this->postingRules = $values['postingRules'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
