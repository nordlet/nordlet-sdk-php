<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsCostCentersResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $costCenterId
     */
    #[JsonProperty('costCenterId')]
    public string $costCenterId;

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
     * @var string $income
     */
    #[JsonProperty('income')]
    public string $income;

    /**
     * @var string $expenses
     */
    #[JsonProperty('expenses')]
    public string $expenses;

    /**
     * @var string $result
     */
    #[JsonProperty('result')]
    public string $result;

    /**
     * @param array{
     *   costCenterId: string,
     *   code: string,
     *   name: string,
     *   income: string,
     *   expenses: string,
     *   result: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->costCenterId = $values['costCenterId'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->income = $values['income'];
        $this->expenses = $values['expenses'];
        $this->result = $values['result'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
