<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EmployeesFieldsHrResponseFieldsItem extends JsonSerializableType
{
    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var value-of<EmployeesFieldsHrResponseFieldsItemKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var ?array<string> $options
     */
    #[JsonProperty('options'), ArrayType(['string'])]
    public ?array $options;

    /**
     * @var ?int $maxLength
     */
    #[JsonProperty('maxLength')]
    public ?int $maxLength;

    /**
     * @param array{
     *   key: string,
     *   kind: value-of<EmployeesFieldsHrResponseFieldsItemKind>,
     *   options?: ?array<string>,
     *   maxLength?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->kind = $values['kind'];
        $this->options = $values['options'] ?? null;
        $this->maxLength = $values['maxLength'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
