<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLtIntrastatObligationResponseArrivals extends JsonSerializableType
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
     * @var array<PostV1DeclarationsLtIntrastatObligationResponseArrivalsMonthlyItem> $monthly
     */
    #[JsonProperty('monthly'), ArrayType([PostV1DeclarationsLtIntrastatObligationResponseArrivalsMonthlyItem::class])]
    public array $monthly;

    /**
     * @param array{
     *   previousYearValue: string,
     *   statisticalValueRequired: bool,
     *   monthly: array<PostV1DeclarationsLtIntrastatObligationResponseArrivalsMonthlyItem>,
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
