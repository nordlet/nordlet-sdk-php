<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsLtIntrastatObligationResponseThresholds extends JsonSerializableType
{
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
     *   arrivalsReporting: string,
     *   dispatchesReporting: string,
     *   arrivalsStatistical: string,
     *   dispatchesStatistical: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
