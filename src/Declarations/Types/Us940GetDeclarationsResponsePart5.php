<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class Us940GetDeclarationsResponsePart5 extends JsonSerializableType
{
    /**
     * @var array<string> $line16
     */
    #[JsonProperty('line16'), ArrayType(['string'])]
    public array $line16;

    /**
     * @var string $line17
     */
    #[JsonProperty('line17')]
    public string $line17;

    /**
     * @param array{
     *   line16: array<string>,
     *   line17: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->line16 = $values['line16'];
        $this->line17 = $values['line17'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
