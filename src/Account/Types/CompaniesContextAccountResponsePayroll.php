<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class CompaniesContextAccountResponsePayroll extends JsonSerializableType
{
    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var bool $engine
     */
    #[JsonProperty('engine')]
    public bool $engine;

    /**
     * @var array<CompaniesContextAccountResponsePayrollEmployeeFieldsItem> $employeeFields
     */
    #[JsonProperty('employeeFields'), ArrayType([CompaniesContextAccountResponsePayrollEmployeeFieldsItem::class])]
    public array $employeeFields;

    /**
     * @param array{
     *   country: string,
     *   engine: bool,
     *   employeeFields: array<CompaniesContextAccountResponsePayrollEmployeeFieldsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->country = $values['country'];
        $this->engine = $values['engine'];
        $this->employeeFields = $values['employeeFields'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
