<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\RecurringInvoicesCreateSalesRequestFrequency;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Sales\Types\RecurringInvoicesCreateSalesRequestLocale;

class RecurringInvoicesCreateSalesRequest extends JsonSerializableType
{
    /**
     * @var string $templateId
     */
    #[JsonProperty('templateId')]
    public string $templateId;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?value-of<RecurringInvoicesCreateSalesRequestFrequency> $frequency
     */
    #[JsonProperty('frequency')]
    public ?string $frequency;

    /**
     * @var ?int $interval
     */
    #[JsonProperty('interval')]
    public ?int $interval;

    /**
     * @var DateTime $startDate
     */
    #[JsonProperty('startDate'), Date(Date::TYPE_DATE)]
    public DateTime $startDate;

    /**
     * @var ?DateTime $endDate
     */
    #[JsonProperty('endDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $endDate;

    /**
     * @var ?value-of<RecurringInvoicesCreateSalesRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @var ?bool $autoIssue
     */
    #[JsonProperty('autoIssue')]
    public ?bool $autoIssue;

    /**
     * @var ?bool $autoSend
     */
    #[JsonProperty('autoSend')]
    public ?bool $autoSend;

    /**
     * @var ?string $sendTo
     */
    #[JsonProperty('sendTo')]
    public ?string $sendTo;

    /**
     * @param array{
     *   templateId: string,
     *   startDate: DateTime,
     *   partnerId?: ?string,
     *   frequency?: ?value-of<RecurringInvoicesCreateSalesRequestFrequency>,
     *   interval?: ?int,
     *   endDate?: ?DateTime,
     *   locale?: ?value-of<RecurringInvoicesCreateSalesRequestLocale>,
     *   autoIssue?: ?bool,
     *   autoSend?: ?bool,
     *   sendTo?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->templateId = $values['templateId'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->frequency = $values['frequency'] ?? null;
        $this->interval = $values['interval'] ?? null;
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'] ?? null;
        $this->locale = $values['locale'] ?? null;
        $this->autoIssue = $values['autoIssue'] ?? null;
        $this->autoSend = $values['autoSend'] ?? null;
        $this->sendTo = $values['sendTo'] ?? null;
    }
}
