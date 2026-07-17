<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsFinancialStatementsResponseEquityChangesItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $opening
     */
    #[JsonProperty('opening')]
    public string $opening;

    /**
     * @var string $increase
     */
    #[JsonProperty('increase')]
    public string $increase;

    /**
     * @var string $decrease
     */
    #[JsonProperty('decrease')]
    public string $decrease;

    /**
     * @var string $closing
     */
    #[JsonProperty('closing')]
    public string $closing;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   opening: string,
     *   increase: string,
     *   decrease: string,
     *   closing: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->opening = $values['opening'];
        $this->increase = $values['increase'];
        $this->decrease = $values['decrease'];
        $this->closing = $values['closing'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
