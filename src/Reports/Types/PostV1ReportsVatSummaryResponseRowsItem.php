<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsVatSummaryResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public string $vatRatePercent;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @var string $vat
     */
    #[JsonProperty('vat')]
    public string $vat;

    /**
     * @var string $gross
     */
    #[JsonProperty('gross')]
    public string $gross;

    /**
     * @var int $documents
     */
    #[JsonProperty('documents')]
    public int $documents;

    /**
     * @param array{
     *   vatRatePercent: string,
     *   net: string,
     *   vat: string,
     *   gross: string,
     *   documents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->vatRatePercent = $values['vatRatePercent'];
        $this->net = $values['net'];
        $this->vat = $values['vat'];
        $this->gross = $values['gross'];
        $this->documents = $values['documents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
