<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostingRulesUpdateLedgerRequestRulesItem extends JsonSerializableType
{
    /**
     * @var value-of<PostingRulesUpdateLedgerRequestRulesItemKey> $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var ?string $accountCode
     */
    #[JsonProperty('accountCode')]
    public ?string $accountCode;

    /**
     * @param array{
     *   key: value-of<PostingRulesUpdateLedgerRequestRulesItemKey>,
     *   accountCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->accountCode = $values['accountCode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
