<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsFlsaRecordsListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $from
     */
    #[JsonProperty('from')]
    public string $from;

    /**
     * @var string $to
     */
    #[JsonProperty('to')]
    public string $to;

    /**
     * @var array<UsFlsaRecordsListDeclarationsResponseEmployeesItem> $employees
     */
    #[JsonProperty('employees'), ArrayType([UsFlsaRecordsListDeclarationsResponseEmployeesItem::class])]
    public array $employees;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   from: string,
     *   to: string,
     *   employees: array<UsFlsaRecordsListDeclarationsResponseEmployeesItem>,
     *   warnings: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->from = $values['from'];
        $this->to = $values['to'];
        $this->employees = $values['employees'];
        $this->warnings = $values['warnings'];
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
