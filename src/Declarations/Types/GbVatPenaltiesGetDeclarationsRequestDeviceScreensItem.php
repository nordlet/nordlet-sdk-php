<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbVatPenaltiesGetDeclarationsRequestDeviceScreensItem extends JsonSerializableType
{
    /**
     * @var int $width
     */
    #[JsonProperty('width')]
    public int $width;

    /**
     * @var int $height
     */
    #[JsonProperty('height')]
    public int $height;

    /**
     * @var float $scalingFactor
     */
    #[JsonProperty('scalingFactor')]
    public float $scalingFactor;

    /**
     * @var int $colourDepth
     */
    #[JsonProperty('colourDepth')]
    public int $colourDepth;

    /**
     * @param array{
     *   width: int,
     *   height: int,
     *   scalingFactor: float,
     *   colourDepth: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->width = $values['width'];
        $this->height = $values['height'];
        $this->scalingFactor = $values['scalingFactor'];
        $this->colourDepth = $values['colourDepth'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
