<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AgreementsPaymentScheduleSetAgreementsResponseTotals extends JsonSerializableType
{
    /**
     * @var string $principal
     */
    #[JsonProperty('principal')]
    public string $principal;

    /**
     * @var string $interest
     */
    #[JsonProperty('interest')]
    public string $interest;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @param array{
     *   principal: string,
     *   interest: string,
     *   total: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->principal = $values['principal'];
        $this->interest = $values['interest'];
        $this->total = $values['total'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
