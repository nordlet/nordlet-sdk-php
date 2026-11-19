<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsW2ListDeclarationsResponseFormsItemStatesItem extends JsonSerializableType
{
    /**
     * @var UsW2ListDeclarationsResponseFormsItemStatesItemBox15 $box15
     */
    #[JsonProperty('box15')]
    public UsW2ListDeclarationsResponseFormsItemStatesItemBox15 $box15;

    /**
     * @var string $box16
     */
    #[JsonProperty('box16')]
    public string $box16;

    /**
     * @var string $box17
     */
    #[JsonProperty('box17')]
    public string $box17;

    /**
     * @param array{
     *   box15: UsW2ListDeclarationsResponseFormsItemStatesItemBox15,
     *   box16: string,
     *   box17: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->box15 = $values['box15'];
        $this->box16 = $values['box16'];
        $this->box17 = $values['box17'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
