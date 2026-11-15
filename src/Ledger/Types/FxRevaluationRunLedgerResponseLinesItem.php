<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class FxRevaluationRunLedgerResponseLinesItem extends JsonSerializableType
{
    /**
     * @var value-of<FxRevaluationRunLedgerResponseLinesItemKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var string $amount Unrealised gain (positive) or loss (negative) of the line
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   kind: value-of<FxRevaluationRunLedgerResponseLinesItemKind>,
     *   currency: string,
     *   accountCode: string,
     *   amount: string,
     *   partnerId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->currency = $values['currency'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->accountCode = $values['accountCode'];
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
