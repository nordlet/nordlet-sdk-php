<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Agreements\Types\AgreementsPaymentScheduleSetAgreementsRequestRowsItem;
use Nordlet\Core\Types\ArrayType;

class AgreementsPaymentScheduleSetAgreementsRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var array<AgreementsPaymentScheduleSetAgreementsRequestRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([AgreementsPaymentScheduleSetAgreementsRequestRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   id: string,
     *   rows: array<AgreementsPaymentScheduleSetAgreementsRequestRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->rows = $values['rows'];
    }
}
