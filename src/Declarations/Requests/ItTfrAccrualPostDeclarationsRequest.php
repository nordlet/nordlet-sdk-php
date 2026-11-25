<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ItTfrAccrualPostDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var ?array<string> $includePaymentTypes
     */
    #[JsonProperty('includePaymentTypes'), ArrayType(['string'])]
    public ?array $includePaymentTypes;

    /**
     * @var string $expenseAccountCode
     */
    #[JsonProperty('expenseAccountCode')]
    public string $expenseAccountCode;

    /**
     * @var ?string $fundAccountCode
     */
    #[JsonProperty('fundAccountCode')]
    public ?string $fundAccountCode;

    /**
     * @var ?string $payableAccountCode
     */
    #[JsonProperty('payableAccountCode')]
    public ?string $payableAccountCode;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   expenseAccountCode: string,
     *   includePaymentTypes?: ?array<string>,
     *   fundAccountCode?: ?string,
     *   payableAccountCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->includePaymentTypes = $values['includePaymentTypes'] ?? null;
        $this->expenseAccountCode = $values['expenseAccountCode'];
        $this->fundAccountCode = $values['fundAccountCode'] ?? null;
        $this->payableAccountCode = $values['payableAccountCode'] ?? null;
    }
}
