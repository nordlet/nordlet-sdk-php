<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class AgreementsExpectedInvoicesAgreementsResponsePeriodsItemPurchaseInvoicesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $documentNumber
     */
    #[JsonProperty('documentNumber')]
    public string $documentNumber;

    /**
     * @var DateTime $documentDate
     */
    #[JsonProperty('documentDate'), Date(Date::TYPE_DATE)]
    public DateTime $documentDate;

    /**
     * @var value-of<AgreementsExpectedInvoicesAgreementsResponsePeriodsItemPurchaseInvoicesItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var value-of<AgreementsExpectedInvoicesAgreementsResponsePeriodsItemPurchaseInvoicesItemType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $netTotal
     */
    #[JsonProperty('netTotal')]
    public string $netTotal;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @param array{
     *   id: string,
     *   documentNumber: string,
     *   documentDate: DateTime,
     *   status: value-of<AgreementsExpectedInvoicesAgreementsResponsePeriodsItemPurchaseInvoicesItemStatus>,
     *   type: value-of<AgreementsExpectedInvoicesAgreementsResponsePeriodsItemPurchaseInvoicesItemType>,
     *   netTotal: string,
     *   currency: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->documentNumber = $values['documentNumber'];
        $this->documentDate = $values['documentDate'];
        $this->status = $values['status'];
        $this->type = $values['type'];
        $this->netTotal = $values['netTotal'];
        $this->currency = $values['currency'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
