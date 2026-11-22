<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsIncomeTaxReturnGetDeclarationsResponsePage1Item extends JsonSerializableType
{
    /**
     * @var string $line
     */
    #[JsonProperty('line')]
    public string $line;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   line: string,
     *   label: string,
     *   amount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->line = $values['line'];
        $this->label = $values['label'];
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
