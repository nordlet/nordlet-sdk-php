<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PaymentTypesListPayrollResponse extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var ?string $defaultPaymentType
     */
    #[JsonProperty('defaultPaymentType')]
    public ?string $defaultPaymentType;

    /**
     * @var array<PaymentTypesListPayrollResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PaymentTypesListPayrollResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   countryCode: string,
     *   rows: array<PaymentTypesListPayrollResponseRowsItem>,
     *   defaultPaymentType?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->defaultPaymentType = $values['defaultPaymentType'] ?? null;
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
