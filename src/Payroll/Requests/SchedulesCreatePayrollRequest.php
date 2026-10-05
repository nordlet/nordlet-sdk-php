<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SchedulesCreatePayrollRequest extends JsonSerializableType
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
     * @var ?string $hoursPerWeek
     */
    #[JsonProperty('hoursPerWeek')]
    public ?string $hoursPerWeek;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   hoursPerWeek?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->hoursPerWeek = $values['hoursPerWeek'] ?? null;
    }
}
