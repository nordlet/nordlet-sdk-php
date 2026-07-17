<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BankSettlementsPostResponseSummary extends JsonSerializableType
{
    /**
     * @var string $receivableApplied
     */
    #[JsonProperty('receivableApplied')]
    public string $receivableApplied;

    /**
     * @var string $commissionAmount
     */
    #[JsonProperty('commissionAmount')]
    public string $commissionAmount;

    /**
     * @var string $sellerAmount
     */
    #[JsonProperty('sellerAmount')]
    public string $sellerAmount;

    /**
     * @var string $feeAmount
     */
    #[JsonProperty('feeAmount')]
    public string $feeAmount;

    /**
     * @var string $suspenseAmount
     */
    #[JsonProperty('suspenseAmount')]
    public string $suspenseAmount;

    /**
     * @param array{
     *   receivableApplied: string,
     *   commissionAmount: string,
     *   sellerAmount: string,
     *   feeAmount: string,
     *   suspenseAmount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->receivableApplied = $values['receivableApplied'];
        $this->commissionAmount = $values['commissionAmount'];
        $this->sellerAmount = $values['sellerAmount'];
        $this->feeAmount = $values['feeAmount'];
        $this->suspenseAmount = $values['suspenseAmount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
