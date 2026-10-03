<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsDeReturnFactsGetResponseFactsDistributionsItem extends JsonSerializableType
{
    /**
     * @var string $resolutionDate
     */
    #[JsonProperty('resolutionDate')]
    public string $resolutionDate;

    /**
     * @var string $paidOn
     */
    #[JsonProperty('paidOn')]
    public string $paidOn;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var string $certifiedReduction
     */
    #[JsonProperty('certifiedReduction')]
    public string $certifiedReduction;

    /**
     * @param array{
     *   resolutionDate: string,
     *   paidOn: string,
     *   amount: string,
     *   certifiedReduction: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->resolutionDate = $values['resolutionDate'];
        $this->paidOn = $values['paidOn'];
        $this->amount = $values['amount'];
        $this->certifiedReduction = $values['certifiedReduction'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
