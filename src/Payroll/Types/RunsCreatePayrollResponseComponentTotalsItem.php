<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class RunsCreatePayrollResponseComponentTotalsItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var value-of<RunsCreatePayrollResponseComponentTotalsItemKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?string $rate
     */
    #[JsonProperty('rate')]
    public ?string $rate;

    /**
     * @var ?string $base
     */
    #[JsonProperty('base')]
    public ?string $base;

    /**
     * @param array{
     *   code: string,
     *   kind: value-of<RunsCreatePayrollResponseComponentTotalsItemKind>,
     *   amount: string,
     *   rate?: ?string,
     *   base?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->kind = $values['kind'];
        $this->amount = $values['amount'];
        $this->rate = $values['rate'] ?? null;
        $this->base = $values['base'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
