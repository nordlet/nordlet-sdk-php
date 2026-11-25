<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class InvoicesProposeLinesPurchasesResponseLinesItem extends JsonSerializableType
{
    /**
     * @var ?string $accountCode
     */
    #[JsonProperty('accountCode')]
    public ?string $accountCode;

    /**
     * @var ?string $accountReason
     */
    #[JsonProperty('accountReason')]
    public ?string $accountReason;

    /**
     * @var ?string $vatClassifierCode
     */
    #[JsonProperty('vatClassifierCode')]
    public ?string $vatClassifierCode;

    /**
     * @var ?string $vatReason
     */
    #[JsonProperty('vatReason')]
    public ?string $vatReason;

    /**
     * @var array<string> $vatCandidates
     */
    #[JsonProperty('vatCandidates'), ArrayType(['string'])]
    public array $vatCandidates;

    /**
     * @param array{
     *   vatCandidates: array<string>,
     *   accountCode?: ?string,
     *   accountReason?: ?string,
     *   vatClassifierCode?: ?string,
     *   vatReason?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accountCode = $values['accountCode'] ?? null;
        $this->accountReason = $values['accountReason'] ?? null;
        $this->vatClassifierCode = $values['vatClassifierCode'] ?? null;
        $this->vatReason = $values['vatReason'] ?? null;
        $this->vatCandidates = $values['vatCandidates'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
