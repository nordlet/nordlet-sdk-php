<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class AgreementsPaymentScheduleSetAgreementsResponse extends JsonSerializableType
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
     * @var array<AgreementsPaymentScheduleSetAgreementsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([AgreementsPaymentScheduleSetAgreementsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var AgreementsPaymentScheduleSetAgreementsResponseTotals $totals
     */
    #[JsonProperty('totals')]
    public AgreementsPaymentScheduleSetAgreementsResponseTotals $totals;

    /**
     * @param array{
     *   agreementId: string,
     *   currency: string,
     *   rows: array<AgreementsPaymentScheduleSetAgreementsResponseRowsItem>,
     *   totals: AgreementsPaymentScheduleSetAgreementsResponseTotals,
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
