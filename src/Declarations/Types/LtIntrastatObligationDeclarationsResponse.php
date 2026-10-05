<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtIntrastatObligationDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var bool $isVatPayer
     */
    #[JsonProperty('isVatPayer')]
    public bool $isVatPayer;

    /**
     * @var array<string> $notes
     */
    #[JsonProperty('notes'), ArrayType(['string'])]
    public array $notes;

    /**
     * @var LtIntrastatObligationDeclarationsResponseThresholds $thresholds
     */
    #[JsonProperty('thresholds')]
    public LtIntrastatObligationDeclarationsResponseThresholds $thresholds;

    /**
     * @var LtIntrastatObligationDeclarationsResponseArrivals $arrivals
     */
    #[JsonProperty('arrivals')]
    public LtIntrastatObligationDeclarationsResponseArrivals $arrivals;

    /**
     * @var LtIntrastatObligationDeclarationsResponseDispatches $dispatches
     */
    #[JsonProperty('dispatches')]
    public LtIntrastatObligationDeclarationsResponseDispatches $dispatches;

    /**
     * @param array{
     *   year: int,
     *   isVatPayer: bool,
     *   notes: array<string>,
     *   thresholds: LtIntrastatObligationDeclarationsResponseThresholds,
     *   arrivals: LtIntrastatObligationDeclarationsResponseArrivals,
     *   dispatches: LtIntrastatObligationDeclarationsResponseDispatches,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->isVatPayer = $values['isVatPayer'];
        $this->notes = $values['notes'];
        $this->thresholds = $values['thresholds'];
        $this->arrivals = $values['arrivals'];
        $this->dispatches = $values['dispatches'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
