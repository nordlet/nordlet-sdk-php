<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TransactionsSuggestMatchesBankResponsePostingRulesItem extends JsonSerializableType
{
    /**
     * @var string $ruleId
     */
    #[JsonProperty('ruleId')]
    public string $ruleId;

    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @param array{
     *   ruleId: string,
     *   accountCode: string,
     *   partnerId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ruleId = $values['ruleId'];
        $this->accountCode = $values['accountCode'];
        $this->partnerId = $values['partnerId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
