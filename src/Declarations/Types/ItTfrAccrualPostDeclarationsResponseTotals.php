<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ItTfrAccrualPostDeclarationsResponseTotals extends JsonSerializableType
{
    /**
     * @var string $kept
     */
    #[JsonProperty('kept')]
    public string $kept;

    /**
     * @var string $paidOut
     */
    #[JsonProperty('paidOut')]
    public string $paidOut;

    /**
     * @var string $accrual
     */
    #[JsonProperty('accrual')]
    public string $accrual;

    /**
     * @param array{
     *   kept: string,
     *   paidOut: string,
     *   accrual: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kept = $values['kept'];
        $this->paidOut = $values['paidOut'];
        $this->accrual = $values['accrual'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
