<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class DeReturnFactsSetDeclarationsResponseFactsDistributionsItem extends JsonSerializableType
{
    /**
     * @var DateTime $resolutionDate
     */
    #[JsonProperty('resolutionDate'), Date(Date::TYPE_DATE)]
    public DateTime $resolutionDate;

    /**
     * @var DateTime $paidOn
     */
    #[JsonProperty('paidOn'), Date(Date::TYPE_DATE)]
    public DateTime $paidOn;

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
     *   resolutionDate: DateTime,
     *   paidOn: DateTime,
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
