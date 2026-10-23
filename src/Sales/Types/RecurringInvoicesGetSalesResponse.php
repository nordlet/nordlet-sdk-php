<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class RecurringInvoicesGetSalesResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $templateId
     */
    #[JsonProperty('templateId')]
    public string $templateId;

    /**
     * @var ?string $templateName
     */
    #[JsonProperty('templateName')]
    public ?string $templateName;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var ?string $partnerName
     */
    #[JsonProperty('partnerName')]
    public ?string $partnerName;

    /**
     * @var value-of<RecurringInvoicesGetSalesResponseFrequency> $frequency
     */
    #[JsonProperty('frequency')]
    public string $frequency;

    /**
     * @var int $interval
     */
    #[JsonProperty('interval')]
    public int $interval;

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
     * @var DateTime $nextRunDate
     */
    #[JsonProperty('nextRunDate'), Date(Date::TYPE_DATE)]
    public DateTime $nextRunDate;

    /**
     * @var value-of<RecurringInvoicesGetSalesResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @var bool $autoIssue
     */
    #[JsonProperty('autoIssue')]
    public bool $autoIssue;

    /**
     * @var bool $autoSend
     */
    #[JsonProperty('autoSend')]
    public bool $autoSend;

    /**
     * @var ?string $sendTo
     */
    #[JsonProperty('sendTo')]
    public ?string $sendTo;

    /**
     * @var int $occurrences
     */
    #[JsonProperty('occurrences')]
    public int $occurrences;

    /**
     * @var ?DateTime $lastRunAt
     */
    #[JsonProperty('lastRunAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $lastRunAt;

    /**
     * @var ?string $lastInvoiceId
     */
    #[JsonProperty('lastInvoiceId')]
    public ?string $lastInvoiceId;

    /**
     * @var ?string $lastError
     */
    #[JsonProperty('lastError')]
    public ?string $lastError;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   templateId: string,
     *   partnerId: string,
     *   frequency: value-of<RecurringInvoicesGetSalesResponseFrequency>,
     *   interval: int,
     *   startDate: DateTime,
     *   nextRunDate: DateTime,
     *   status: value-of<RecurringInvoicesGetSalesResponseStatus>,
     *   autoIssue: bool,
     *   autoSend: bool,
     *   occurrences: int,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   templateName?: ?string,
     *   partnerName?: ?string,
     *   endDate?: ?DateTime,
     *   locale?: ?string,
     *   sendTo?: ?string,
     *   lastRunAt?: ?DateTime,
     *   lastInvoiceId?: ?string,
     *   lastError?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->templateId = $values['templateId'];
        $this->templateName = $values['templateName'] ?? null;
        $this->partnerId = $values['partnerId'];
        $this->partnerName = $values['partnerName'] ?? null;
        $this->frequency = $values['frequency'];
        $this->interval = $values['interval'];
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'] ?? null;
        $this->nextRunDate = $values['nextRunDate'];
        $this->status = $values['status'];
        $this->locale = $values['locale'] ?? null;
        $this->autoIssue = $values['autoIssue'];
        $this->autoSend = $values['autoSend'];
        $this->sendTo = $values['sendTo'] ?? null;
        $this->occurrences = $values['occurrences'];
        $this->lastRunAt = $values['lastRunAt'] ?? null;
        $this->lastInvoiceId = $values['lastInvoiceId'] ?? null;
        $this->lastError = $values['lastError'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
