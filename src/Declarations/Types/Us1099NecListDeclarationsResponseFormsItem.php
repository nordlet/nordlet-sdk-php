<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class Us1099NecListDeclarationsResponseFormsItem extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<Us1099NecListDeclarationsResponseFormsItemNameType> $nameType
     */
    #[JsonProperty('nameType')]
    public string $nameType;

    /**
     * @var ?string $tinType
     */
    #[JsonProperty('tinType')]
    public ?string $tinType;

    /**
     * @var ?string $tin
     */
    #[JsonProperty('tin')]
    public ?string $tin;

    /**
     * @var ?string $taxClassification
     */
    #[JsonProperty('taxClassification')]
    public ?string $taxClassification;

    /**
     * @var string $box1
     */
    #[JsonProperty('box1')]
    public string $box1;

    /**
     * @param array{
     *   partnerId: string,
     *   name: string,
     *   nameType: value-of<Us1099NecListDeclarationsResponseFormsItemNameType>,
     *   box1: string,
     *   tinType?: ?string,
     *   tin?: ?string,
     *   taxClassification?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->name = $values['name'];
        $this->nameType = $values['nameType'];
        $this->tinType = $values['tinType'] ?? null;
        $this->tin = $values['tin'] ?? null;
        $this->taxClassification = $values['taxClassification'] ?? null;
        $this->box1 = $values['box1'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
