<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsW2ListDeclarationsResponseFormsItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var ?string $boxA
     */
    #[JsonProperty('boxA')]
    public ?string $boxA;

    /**
     * @var UsW2ListDeclarationsResponseFormsItemBoxE $boxE
     */
    #[JsonProperty('boxE')]
    public UsW2ListDeclarationsResponseFormsItemBoxE $boxE;

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
     * @var array<UsW2ListDeclarationsResponseFormsItemStatesItem> $states
     */
    #[JsonProperty('states'), ArrayType([UsW2ListDeclarationsResponseFormsItemStatesItem::class])]
    public array $states;

    /**
     * @param array{
     *   employeeId: string,
     *   boxE: UsW2ListDeclarationsResponseFormsItemBoxE,
     *   box1: string,
     *   box2: string,
     *   box3: string,
     *   box4: string,
     *   box5: string,
     *   box6: string,
     *   states: array<UsW2ListDeclarationsResponseFormsItemStatesItem>,
     *   boxA?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->boxA = $values['boxA'] ?? null;
        $this->boxE = $values['boxE'];
        $this->box1 = $values['box1'];
        $this->box2 = $values['box2'];
        $this->box3 = $values['box3'];
        $this->box4 = $values['box4'];
        $this->box5 = $values['box5'];
        $this->box6 = $values['box6'];
        $this->states = $values['states'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
