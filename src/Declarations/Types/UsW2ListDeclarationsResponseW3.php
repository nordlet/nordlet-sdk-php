<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsW2ListDeclarationsResponseW3 extends JsonSerializableType
{
    /**
     * @var float $boxC
     */
    #[JsonProperty('boxC')]
    public float $boxC;

    /**
     * @var ?string $boxE
     */
    #[JsonProperty('boxE')]
    public ?string $boxE;

    /**
     * @var string $boxF
     */
    #[JsonProperty('boxF')]
    public string $boxF;

    /**
     * @var string $box1
     */
    #[JsonProperty('box1')]
    public string $box1;

    /**
     * @var string $box2
     */
    #[JsonProperty('box2')]
    public string $box2;

    /**
     * @var string $box3
     */
    #[JsonProperty('box3')]
    public string $box3;

    /**
     * @var string $box4
     */
    #[JsonProperty('box4')]
    public string $box4;

    /**
     * @var string $box5
     */
    #[JsonProperty('box5')]
    public string $box5;

    /**
     * @var string $box6
     */
    #[JsonProperty('box6')]
    public string $box6;

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
     *   boxC: float,
     *   boxF: string,
     *   box1: string,
     *   box2: string,
     *   box3: string,
     *   box4: string,
     *   box5: string,
     *   box6: string,
     *   box16: string,
     *   box17: string,
     *   boxE?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->boxC = $values['boxC'];
        $this->boxE = $values['boxE'] ?? null;
        $this->boxF = $values['boxF'];
        $this->box1 = $values['box1'];
        $this->box2 = $values['box2'];
        $this->box3 = $values['box3'];
        $this->box4 = $values['box4'];
        $this->box5 = $values['box5'];
        $this->box6 = $values['box6'];
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
