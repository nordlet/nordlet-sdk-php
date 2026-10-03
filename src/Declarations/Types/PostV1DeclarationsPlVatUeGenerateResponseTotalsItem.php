<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsPlVatUeGenerateResponseTotalsItem extends JsonSerializableType
{
    /**
     * @var value-of<PostV1DeclarationsPlVatUeGenerateResponseTotalsItemSection> $section
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
     *   section: value-of<PostV1DeclarationsPlVatUeGenerateResponseTotalsItemSection>,
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
