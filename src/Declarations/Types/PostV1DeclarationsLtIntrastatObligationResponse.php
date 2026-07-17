<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLtIntrastatObligationResponse extends JsonSerializableType
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
     * @var PostV1DeclarationsLtIntrastatObligationResponseThresholds $thresholds
     */
    #[JsonProperty('thresholds')]
    public PostV1DeclarationsLtIntrastatObligationResponseThresholds $thresholds;

    /**
     * @var PostV1DeclarationsLtIntrastatObligationResponseArrivals $arrivals
     */
    #[JsonProperty('arrivals')]
    public PostV1DeclarationsLtIntrastatObligationResponseArrivals $arrivals;

    /**
     * @var PostV1DeclarationsLtIntrastatObligationResponseDispatches $dispatches
     */
    #[JsonProperty('dispatches')]
    public PostV1DeclarationsLtIntrastatObligationResponseDispatches $dispatches;

    /**
     * @param array{
     *   year: int,
     *   isVatPayer: bool,
     *   notes: array<string>,
     *   thresholds: PostV1DeclarationsLtIntrastatObligationResponseThresholds,
     *   arrivals: PostV1DeclarationsLtIntrastatObligationResponseArrivals,
     *   dispatches: PostV1DeclarationsLtIntrastatObligationResponseDispatches,
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
