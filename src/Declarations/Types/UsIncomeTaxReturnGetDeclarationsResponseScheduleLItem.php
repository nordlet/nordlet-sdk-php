<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsIncomeTaxReturnGetDeclarationsResponseScheduleLItem extends JsonSerializableType
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
     * @var string $beginning
     */
    #[JsonProperty('beginning')]
    public string $beginning;

    /**
     * @var string $end
     */
    #[JsonProperty('end')]
    public string $end;

    /**
     * @param array{
     *   line: string,
     *   label: string,
     *   beginning: string,
     *   end: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->line = $values['line'];
        $this->label = $values['label'];
        $this->beginning = $values['beginning'];
        $this->end = $values['end'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
