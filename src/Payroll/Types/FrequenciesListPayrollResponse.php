<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class FrequenciesListPayrollResponse extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var array<value-of<FrequenciesListPayrollResponseFrequenciesItem>> $frequencies
     */
    #[JsonProperty('frequencies'), ArrayType(['string'])]
    public array $frequencies;

    /**
     * @param array{
     *   countryCode: string,
     *   frequencies: array<value-of<FrequenciesListPayrollResponseFrequenciesItem>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->frequencies = $values['frequencies'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
