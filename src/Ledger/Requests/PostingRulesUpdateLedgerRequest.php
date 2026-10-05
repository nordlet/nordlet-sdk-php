<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Ledger\Types\PostingRulesUpdateLedgerRequestRulesItem;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostingRulesUpdateLedgerRequest extends JsonSerializableType
{
    /**
     * @var array<PostingRulesUpdateLedgerRequestRulesItem> $rules
     */
    #[JsonProperty('rules'), ArrayType([PostingRulesUpdateLedgerRequestRulesItem::class])]
    public array $rules;

    /**
     * @param array{
     *   rules: array<PostingRulesUpdateLedgerRequestRulesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rules = $values['rules'];
    }
}
