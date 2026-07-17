<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Ledger\Types\PostV1LedgerPostingRulesUpdateRequestRulesItem;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1LedgerPostingRulesUpdateRequest extends JsonSerializableType
{
    /**
     * @var array<PostV1LedgerPostingRulesUpdateRequestRulesItem> $rules
     */
    #[JsonProperty('rules'), ArrayType([PostV1LedgerPostingRulesUpdateRequestRulesItem::class])]
    public array $rules;

    /**
     * @param array{
     *   rules: array<PostV1LedgerPostingRulesUpdateRequestRulesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rules = $values['rules'];
    }
}
