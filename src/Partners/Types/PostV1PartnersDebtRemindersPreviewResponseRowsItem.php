<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1PartnersDebtRemindersPreviewResponseRowsItem extends JsonSerializableType
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
     * @var value-of<PostV1PartnersDebtRemindersPreviewResponseRowsItemLocale> $locale
     */
    #[JsonProperty('locale')]
    public string $locale;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var array<PostV1PartnersDebtRemindersPreviewResponseRowsItemInvoicesItem> $invoices
     */
    #[JsonProperty('invoices'), ArrayType([PostV1PartnersDebtRemindersPreviewResponseRowsItemInvoicesItem::class])]
    public array $invoices;

    /**
     * @var string $totalDue
     */
    #[JsonProperty('totalDue')]
    public string $totalDue;

    /**
     * @var string $interestDue
     */
    #[JsonProperty('interestDue')]
    public string $interestDue;

    /**
     * @param array{
     *   partnerId: string,
     *   partnerName: string,
     *   email: string,
     *   locale: value-of<PostV1PartnersDebtRemindersPreviewResponseRowsItemLocale>,
     *   currency: string,
     *   invoices: array<PostV1PartnersDebtRemindersPreviewResponseRowsItemInvoicesItem>,
     *   totalDue: string,
     *   interestDue: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->partnerName = $values['partnerName'];
        $this->email = $values['email'];
        $this->locale = $values['locale'];
        $this->currency = $values['currency'];
        $this->invoices = $values['invoices'];
        $this->totalDue = $values['totalDue'];
        $this->interestDue = $values['interestDue'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
