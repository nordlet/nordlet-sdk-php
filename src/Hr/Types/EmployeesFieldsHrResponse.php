<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EmployeesFieldsHrResponse extends JsonSerializableType
{
    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var array<EmployeesFieldsHrResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([EmployeesFieldsHrResponseFieldsItem::class])]
    public array $fields;

    /**
     * @param array{
     *   country: string,
     *   fields: array<EmployeesFieldsHrResponseFieldsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->country = $values['country'];
        $this->fields = $values['fields'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
