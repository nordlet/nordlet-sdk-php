<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbP11DItemsListDeclarationsResponseItemsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var float $taxYear
     */
    #[JsonProperty('taxYear')]
    public float $taxYear;

    /**
     * @var string $section
     */
    #[JsonProperty('section')]
    public string $section;

    /**
     * @var bool $class1A
     */
    #[JsonProperty('class1A')]
    public bool $class1A;

    /**
     * @var string $cashEquivalent
     */
    #[JsonProperty('cashEquivalent')]
    public string $cashEquivalent;

    /**
     * @var GbP11DItemsListDeclarationsResponseItemsItemItem $item
     */
    #[JsonProperty('item')]
    public GbP11DItemsListDeclarationsResponseItemsItemItem $item;

    /**
     * @param array{
     *   id: string,
     *   employeeId: string,
     *   taxYear: float,
     *   section: string,
     *   class1A: bool,
     *   cashEquivalent: string,
     *   item: GbP11DItemsListDeclarationsResponseItemsItemItem,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->employeeId = $values['employeeId'];
        $this->taxYear = $values['taxYear'];
        $this->section = $values['section'];
        $this->class1A = $values['class1A'];
        $this->cashEquivalent = $values['cashEquivalent'];
        $this->item = $values['item'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
