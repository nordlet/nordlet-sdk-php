<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbVatObligationsListDeclarationsRequestDeviceWindowSize extends JsonSerializableType
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
     * @param array{
     *   width: int,
     *   height: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->width = $values['width'];
        $this->height = $values['height'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
