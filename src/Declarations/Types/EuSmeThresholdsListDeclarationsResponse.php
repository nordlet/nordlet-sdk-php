<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EuSmeThresholdsListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $nationalCapEur
     */
    #[JsonProperty('nationalCapEur')]
    public string $nationalCapEur;

    /**
     * @var string $unionTurnoverCapEur
     */
    #[JsonProperty('unionTurnoverCapEur')]
    public string $unionTurnoverCapEur;

    /**
     * @var array<EuSmeThresholdsListDeclarationsResponseThresholdsItem> $thresholds
     */
    #[JsonProperty('thresholds'), ArrayType([EuSmeThresholdsListDeclarationsResponseThresholdsItem::class])]
    public array $thresholds;

    /**
     * @param array{
     *   nationalCapEur: string,
     *   unionTurnoverCapEur: string,
     *   thresholds: array<EuSmeThresholdsListDeclarationsResponseThresholdsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->nationalCapEur = $values['nationalCapEur'];
        $this->unionTurnoverCapEur = $values['unionTurnoverCapEur'];
        $this->thresholds = $values['thresholds'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
