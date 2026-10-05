<?php

namespace Nordlet\Files\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Union;

class ListFilesRequestFilterItem extends JsonSerializableType
{
    /**
     * @var string $field
     */
    #[JsonProperty('field')]
    public string $field;

    /**
     * @var value-of<ListFilesRequestFilterItemOp> $op
     */
    #[JsonProperty('op')]
    public string $op;

    /**
     * @var (
     *    string
     *   |float
     *   |bool
     *   |array<(
     *    string
     *   |float
     * )>
     * ) $value
     */
    #[JsonProperty('value'), Union('string', 'float', 'bool', [new Union('string', 'float')])]
    public string|float|bool|array $value;

    /**
     * @param array{
     *   field: string,
     *   op: value-of<ListFilesRequestFilterItemOp>,
     *   value: (
     *    string
     *   |float
     *   |bool
     *   |array<(
     *    string
     *   |float
     * )>
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->field = $values['field'];
        $this->op = $values['op'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
