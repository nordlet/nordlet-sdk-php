<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class VatDetailReportsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $documentId
     */
    #[JsonProperty('documentId')]
    public string $documentId;

    /**
     * @var string $documentNumber
     */
    #[JsonProperty('documentNumber')]
    public string $documentNumber;

    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @var string $partnerName
     */
    #[JsonProperty('partnerName')]
    public string $partnerName;

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
     * @param array{
     *   documentId: string,
     *   documentNumber: string,
     *   partnerName: string,
     *   vatRatePercent: string,
     *   net: string,
     *   vat: string,
     *   gross: string,
     *   date?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documentId = $values['documentId'];
        $this->documentNumber = $values['documentNumber'];
        $this->date = $values['date'] ?? null;
        $this->partnerName = $values['partnerName'];
        $this->vatRatePercent = $values['vatRatePercent'];
        $this->net = $values['net'];
        $this->vat = $values['vat'];
        $this->gross = $values['gross'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
