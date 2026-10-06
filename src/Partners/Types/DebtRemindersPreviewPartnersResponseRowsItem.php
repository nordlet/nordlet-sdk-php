<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class DebtRemindersPreviewPartnersResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $partnerName
     */
    #[JsonProperty('partnerName')]
    public string $partnerName;

    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var value-of<DebtRemindersPreviewPartnersResponseRowsItemLocale> $locale
     */
    #[JsonProperty('locale')]
    public string $locale;

    /**
     * @var array<DebtRemindersPreviewPartnersResponseRowsItemInvoicesItem> $invoices
     */
    #[JsonProperty('invoices'), ArrayType([DebtRemindersPreviewPartnersResponseRowsItemInvoicesItem::class])]
    public array $invoices;

    /**
     * @var array<DebtRemindersPreviewPartnersResponseRowsItemTotalsItem> $totals
     */
    #[JsonProperty('totals'), ArrayType([DebtRemindersPreviewPartnersResponseRowsItemTotalsItem::class])]
    public array $totals;

    /**
     * @param array{
     *   partnerId: string,
     *   partnerName: string,
     *   email: string,
     *   locale: value-of<DebtRemindersPreviewPartnersResponseRowsItemLocale>,
     *   invoices: array<DebtRemindersPreviewPartnersResponseRowsItemInvoicesItem>,
     *   totals: array<DebtRemindersPreviewPartnersResponseRowsItemTotalsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->partnerName = $values['partnerName'];
        $this->email = $values['email'];
        $this->locale = $values['locale'];
        $this->invoices = $values['invoices'];
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
