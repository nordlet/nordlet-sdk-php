<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsAnnualAccountsSetRequest extends JsonSerializableType
{
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
     * @var ?string $adoptionDate
     */
    #[JsonProperty('adoptionDate')]
    public ?string $adoptionDate;

    /**
     * @var string $dateOfPreparation
     */
    #[JsonProperty('dateOfPreparation')]
    public string $dateOfPreparation;

    /**
     * @var ?bool $audited
     */
    #[JsonProperty('audited')]
    public ?bool $audited;

    /**
     * @var ?bool $auditReportQualified
     */
    #[JsonProperty('auditReportQualified')]
    public ?bool $auditReportQualified;

    /**
     * @var ?bool $auditorNotElected
     */
    #[JsonProperty('auditorNotElected')]
    public ?bool $auditorNotElected;

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
     * @var ?string $auditorReportDate
     */
    #[JsonProperty('auditorReportDate')]
    public ?string $auditorReportDate;

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
     * @param array{
     *   year: int,
     *   adopted: bool,
     *   dateOfPreparation: string,
     *   adoptionDate?: ?string,
     *   audited?: ?bool,
     *   auditReportQualified?: ?bool,
     *   auditorNotElected?: ?bool,
     *   notesText?: ?string,
     *   managementReportText?: ?string,
     *   auditorReportText?: ?string,
     *   auditorReportDate?: ?string,
     *   resultToReserves?: ?string,
     *   resultToLossCompensation?: ?string,
     *   resultToRemainder?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->adopted = $values['adopted'];
        $this->adoptionDate = $values['adoptionDate'] ?? null;
        $this->dateOfPreparation = $values['dateOfPreparation'];
        $this->audited = $values['audited'] ?? null;
        $this->auditReportQualified = $values['auditReportQualified'] ?? null;
        $this->auditorNotElected = $values['auditorNotElected'] ?? null;
        $this->notesText = $values['notesText'] ?? null;
        $this->managementReportText = $values['managementReportText'] ?? null;
        $this->auditorReportText = $values['auditorReportText'] ?? null;
        $this->auditorReportDate = $values['auditorReportDate'] ?? null;
        $this->resultToReserves = $values['resultToReserves'] ?? null;
        $this->resultToLossCompensation = $values['resultToLossCompensation'] ?? null;
        $this->resultToRemainder = $values['resultToRemainder'] ?? null;
    }
}
