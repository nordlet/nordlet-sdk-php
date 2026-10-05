<?php

namespace Nordlet\Assets\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AssetsDisposeAssetsResponseInputVatUseChangesItem extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $percent
     */
    #[JsonProperty('percent')]
    public string $percent;

    /**
     * @var value-of<AssetsDisposeAssetsResponseInputVatUseChangesItemReason> $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @param array{
     *   year: int,
     *   percent: string,
     *   reason: value-of<AssetsDisposeAssetsResponseInputVatUseChangesItemReason>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->percent = $values['percent'];
        $this->reason = $values['reason'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
