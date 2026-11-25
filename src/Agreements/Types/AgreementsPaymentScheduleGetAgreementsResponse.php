<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class AgreementsPaymentScheduleGetAgreementsResponse extends JsonSerializableType
{
    /**
     * @var string $agreementId
     */
    #[JsonProperty('agreementId')]
    public string $agreementId;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?string $value
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @var array<AgreementsPaymentScheduleGetAgreementsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([AgreementsPaymentScheduleGetAgreementsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var AgreementsPaymentScheduleGetAgreementsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public AgreementsPaymentScheduleGetAgreementsResponseTotals $totals;

    /**
     * @param array{
     *   agreementId: string,
     *   currency: string,
     *   rows: array<AgreementsPaymentScheduleGetAgreementsResponseRowsItem>,
     *   totals: AgreementsPaymentScheduleGetAgreementsResponseTotals,
     *   value?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->agreementId = $values['agreementId'];
        $this->currency = $values['currency'];
        $this->value = $values['value'] ?? null;
        $this->rows = $values['rows'];
        $this->totals = $values['totals'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
