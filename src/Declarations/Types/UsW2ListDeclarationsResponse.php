<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsW2ListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var float $year
     */
    #[JsonProperty('year')]
    public float $year;

    /**
     * @var array<UsW2ListDeclarationsResponseFormsItem> $forms
     */
    #[JsonProperty('forms'), ArrayType([UsW2ListDeclarationsResponseFormsItem::class])]
    public array $forms;

    /**
     * @var UsW2ListDeclarationsResponseW3 $w3
     */
    #[JsonProperty('w3')]
    public UsW2ListDeclarationsResponseW3 $w3;

    /**
     * @param array{
     *   year: float,
     *   forms: array<UsW2ListDeclarationsResponseFormsItem>,
     *   w3: UsW2ListDeclarationsResponseW3,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->forms = $values['forms'];
        $this->w3 = $values['w3'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
