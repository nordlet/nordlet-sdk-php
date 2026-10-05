<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PlVatUeGenerateDeclarationsResponseTotalsItem extends JsonSerializableType
{
    /**
     * @var value-of<PlVatUeGenerateDeclarationsResponseTotalsItemSection> $section
     */
    #[JsonProperty('section')]
    public string $section;

    /**
     * @var int $counterparties
     */
    #[JsonProperty('counterparties')]
    public int $counterparties;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   section: value-of<PlVatUeGenerateDeclarationsResponseTotalsItemSection>,
     *   counterparties: int,
     *   amount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->section = $values['section'];
        $this->counterparties = $values['counterparties'];
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
