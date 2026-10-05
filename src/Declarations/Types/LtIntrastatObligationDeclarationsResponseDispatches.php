<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtIntrastatObligationDeclarationsResponseDispatches extends JsonSerializableType
{
    /**
     * @var string $previousYearValue
     */
    #[JsonProperty('previousYearValue')]
    public string $previousYearValue;

    /**
     * @var ?int $obligatedFromMonth
     */
    #[JsonProperty('obligatedFromMonth')]
    public ?int $obligatedFromMonth;

    /**
     * @var bool $statisticalValueRequired
     */
    #[JsonProperty('statisticalValueRequired')]
    public bool $statisticalValueRequired;

    /**
     * @var array<LtIntrastatObligationDeclarationsResponseDispatchesMonthlyItem> $monthly
     */
    #[JsonProperty('monthly'), ArrayType([LtIntrastatObligationDeclarationsResponseDispatchesMonthlyItem::class])]
    public array $monthly;

    /**
     * @param array{
     *   previousYearValue: string,
     *   statisticalValueRequired: bool,
     *   monthly: array<LtIntrastatObligationDeclarationsResponseDispatchesMonthlyItem>,
     *   obligatedFromMonth?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->previousYearValue = $values['previousYearValue'];
        $this->obligatedFromMonth = $values['obligatedFromMonth'] ?? null;
        $this->statisticalValueRequired = $values['statisticalValueRequired'];
        $this->monthly = $values['monthly'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
