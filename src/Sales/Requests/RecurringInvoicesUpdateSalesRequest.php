<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\RecurringInvoicesUpdateSalesRequestFrequency;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Sales\Types\RecurringInvoicesUpdateSalesRequestStatus;
use Nordlet\Sales\Types\RecurringInvoicesUpdateSalesRequestLocale;

class RecurringInvoicesUpdateSalesRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $templateId
     */
    #[JsonProperty('templateId')]
    public ?string $templateId;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?value-of<RecurringInvoicesUpdateSalesRequestFrequency> $frequency
     */
    #[JsonProperty('frequency')]
    public ?string $frequency;

    /**
     * @var ?int $interval
     */
    #[JsonProperty('interval')]
    public ?int $interval;

    /**
     * @var ?DateTime $startDate
     */
    #[JsonProperty('startDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $startDate;

    /**
     * @var ?DateTime $endDate
     */
    #[JsonProperty('endDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $endDate;

    /**
     * @var ?DateTime $nextRunDate
     */
    #[JsonProperty('nextRunDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $nextRunDate;

    /**
     * @var ?value-of<RecurringInvoicesUpdateSalesRequestStatus> $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?value-of<RecurringInvoicesUpdateSalesRequestLocale> $locale
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
     *   id: string,
     *   templateId?: ?string,
     *   partnerId?: ?string,
     *   frequency?: ?value-of<RecurringInvoicesUpdateSalesRequestFrequency>,
     *   interval?: ?int,
     *   startDate?: ?DateTime,
     *   endDate?: ?DateTime,
     *   nextRunDate?: ?DateTime,
     *   status?: ?value-of<RecurringInvoicesUpdateSalesRequestStatus>,
     *   locale?: ?value-of<RecurringInvoicesUpdateSalesRequestLocale>,
     *   autoIssue?: ?bool,
     *   autoSend?: ?bool,
     *   sendTo?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->templateId = $values['templateId'] ?? null;
        $this->partnerId = $values['partnerId'] ?? null;
        $this->frequency = $values['frequency'] ?? null;
        $this->interval = $values['interval'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->nextRunDate = $values['nextRunDate'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->locale = $values['locale'] ?? null;
        $this->autoIssue = $values['autoIssue'] ?? null;
        $this->autoSend = $values['autoSend'] ?? null;
        $this->sendTo = $values['sendTo'] ?? null;
    }
}
