<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsEuSmeThresholdsListResponse extends JsonSerializableType
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
     * @var array<PostV1DeclarationsEuSmeThresholdsListResponseThresholdsItem> $thresholds
     */
    #[JsonProperty('thresholds'), ArrayType([PostV1DeclarationsEuSmeThresholdsListResponseThresholdsItem::class])]
    public array $thresholds;

    /**
     * @param array{
     *   nationalCapEur: string,
     *   unionTurnoverCapEur: string,
     *   thresholds: array<PostV1DeclarationsEuSmeThresholdsListResponseThresholdsItem>,
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
