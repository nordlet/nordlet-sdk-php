<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SchedulesCreatePayrollResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var string $hoursPerWeek
     */
    #[JsonProperty('hoursPerWeek')]
    public string $hoursPerWeek;

    /**
     * @param array{
     *   id: string,
     *   code: string,
     *   name: string,
     *   hoursPerWeek: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->hoursPerWeek = $values['hoursPerWeek'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
