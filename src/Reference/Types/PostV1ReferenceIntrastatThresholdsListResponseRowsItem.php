<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReferenceIntrastatThresholdsListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $arrivalsReporting
     */
    #[JsonProperty('arrivalsReporting')]
    public string $arrivalsReporting;

    /**
     * @var string $dispatchesReporting
     */
    #[JsonProperty('dispatchesReporting')]
    public string $dispatchesReporting;

    /**
     * @var string $arrivalsStatistical
     */
    #[JsonProperty('arrivalsStatistical')]
    public string $arrivalsStatistical;

    /**
     * @var string $dispatchesStatistical
     */
    #[JsonProperty('dispatchesStatistical')]
    public string $dispatchesStatistical;

    /**
     * @param array{
     *   year: int,
     *   arrivalsReporting: string,
     *   dispatchesReporting: string,
     *   arrivalsStatistical: string,
     *   dispatchesStatistical: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->arrivalsReporting = $values['arrivalsReporting'];
        $this->dispatchesReporting = $values['dispatchesReporting'];
        $this->arrivalsStatistical = $values['arrivalsStatistical'];
        $this->dispatchesStatistical = $values['dispatchesStatistical'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
