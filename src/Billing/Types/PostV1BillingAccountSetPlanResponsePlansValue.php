<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BillingAccountSetPlanResponsePlansValue extends JsonSerializableType
{
    /**
     * @var string $monthlyFeeEur
     */
    #[JsonProperty('monthlyFeeEur')]
    public string $monthlyFeeEur;

    /**
     * @var int $includedRequests
     */
    #[JsonProperty('includedRequests')]
    public int $includedRequests;

    /**
     * @var string $requestOverageEur
     */
    #[JsonProperty('requestOverageEur')]
    public string $requestOverageEur;

    /**
     * @var float $includedDatabaseBytes
     */
    #[JsonProperty('includedDatabaseBytes')]
    public float $includedDatabaseBytes;

    /**
     * @var float $includedFileBytes
     */
    #[JsonProperty('includedFileBytes')]
    public float $includedFileBytes;

    /**
     * @param array{
     *   monthlyFeeEur: string,
     *   includedRequests: int,
     *   requestOverageEur: string,
     *   includedDatabaseBytes: float,
     *   includedFileBytes: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->monthlyFeeEur = $values['monthlyFeeEur'];
        $this->includedRequests = $values['includedRequests'];
        $this->requestOverageEur = $values['requestOverageEur'];
        $this->includedDatabaseBytes = $values['includedDatabaseBytes'];
        $this->includedFileBytes = $values['includedFileBytes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
