<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class AnnualAccountsGetDeclarationsResponseApproval extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var bool $adopted
     */
    #[JsonProperty('adopted')]
    public bool $adopted;

    /**
     * @var ?DateTime $adoptionDate
     */
    #[JsonProperty('adoptionDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $adoptionDate;

    /**
     * @var string $dateOfPreparation
     */
    #[JsonProperty('dateOfPreparation')]
    public string $dateOfPreparation;

    /**
     * @var bool $audited
     */
    #[JsonProperty('audited')]
    public bool $audited;

    /**
     * @var ?bool $auditReportQualified
     */
    #[JsonProperty('auditReportQualified')]
    public ?bool $auditReportQualified;

    /**
     * @var bool $auditorNotElected
     */
    #[JsonProperty('auditorNotElected')]
    public bool $auditorNotElected;

    /**
     * @var ?string $notesText
     */
    #[JsonProperty('notesText')]
    public ?string $notesText;

    /**
     * @var ?string $managementReportText
     */
    #[JsonProperty('managementReportText')]
    public ?string $managementReportText;

    /**
     * @var ?string $auditorReportText
     */
    #[JsonProperty('auditorReportText')]
    public ?string $auditorReportText;

    /**
     * @var ?DateTime $auditorReportDate
     */
    #[JsonProperty('auditorReportDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $auditorReportDate;

    /**
     * @var ?string $resultToReserves
     */
    #[JsonProperty('resultToReserves')]
    public ?string $resultToReserves;

    /**
     * @var ?string $resultToLossCompensation
     */
    #[JsonProperty('resultToLossCompensation')]
    public ?string $resultToLossCompensation;

    /**
     * @var ?string $resultToRemainder
     */
    #[JsonProperty('resultToRemainder')]
    public ?string $resultToRemainder;

    /**
     * @var array<AnnualAccountsGetDeclarationsResponseApprovalSignaturesItem> $signatures
     */
    #[JsonProperty('signatures'), ArrayType([AnnualAccountsGetDeclarationsResponseApprovalSignaturesItem::class])]
    public array $signatures;

    /**
     * @var array<AnnualAccountsGetDeclarationsResponseApprovalDistributionsItem> $distributions
     */
    #[JsonProperty('distributions'), ArrayType([AnnualAccountsGetDeclarationsResponseApprovalDistributionsItem::class])]
    public array $distributions;

    /**
     * @var array<AnnualAccountsGetDeclarationsResponseApprovalAttachmentsItem> $attachments
     */
    #[JsonProperty('attachments'), ArrayType([AnnualAccountsGetDeclarationsResponseApprovalAttachmentsItem::class])]
    public array $attachments;

    /**
     * @param array{
     *   id: string,
     *   year: int,
     *   adopted: bool,
     *   dateOfPreparation: string,
     *   audited: bool,
     *   auditorNotElected: bool,
     *   signatures: array<AnnualAccountsGetDeclarationsResponseApprovalSignaturesItem>,
     *   distributions: array<AnnualAccountsGetDeclarationsResponseApprovalDistributionsItem>,
     *   attachments: array<AnnualAccountsGetDeclarationsResponseApprovalAttachmentsItem>,
     *   adoptionDate?: ?DateTime,
     *   auditReportQualified?: ?bool,
     *   notesText?: ?string,
     *   managementReportText?: ?string,
     *   auditorReportText?: ?string,
     *   auditorReportDate?: ?DateTime,
     *   resultToReserves?: ?string,
     *   resultToLossCompensation?: ?string,
     *   resultToRemainder?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->year = $values['year'];
        $this->adopted = $values['adopted'];
        $this->adoptionDate = $values['adoptionDate'] ?? null;
        $this->dateOfPreparation = $values['dateOfPreparation'];
        $this->audited = $values['audited'];
        $this->auditReportQualified = $values['auditReportQualified'] ?? null;
        $this->auditorNotElected = $values['auditorNotElected'];
        $this->notesText = $values['notesText'] ?? null;
        $this->managementReportText = $values['managementReportText'] ?? null;
        $this->auditorReportText = $values['auditorReportText'] ?? null;
        $this->auditorReportDate = $values['auditorReportDate'] ?? null;
        $this->resultToReserves = $values['resultToReserves'] ?? null;
        $this->resultToLossCompensation = $values['resultToLossCompensation'] ?? null;
        $this->resultToRemainder = $values['resultToRemainder'] ?? null;
        $this->signatures = $values['signatures'];
        $this->distributions = $values['distributions'];
        $this->attachments = $values['attachments'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
