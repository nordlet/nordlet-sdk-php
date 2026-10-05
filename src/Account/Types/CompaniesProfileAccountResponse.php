<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Core\Types\Union;

class CompaniesProfileAccountResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $vatCode
     */
    #[JsonProperty('vatCode')]
    public ?string $vatCode;

    /**
     * @var ?string $smeExemptionNumber
     */
    #[JsonProperty('smeExemptionNumber')]
    public ?string $smeExemptionNumber;

    /**
     * @var bool $isVatPayer
     */
    #[JsonProperty('isVatPayer')]
    public bool $isVatPayer;

    /**
     * @var bool $isSandbox
     */
    #[JsonProperty('isSandbox')]
    public bool $isSandbox;

    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $chartTemplate Chart of accounts template the company was seeded with
     */
    #[JsonProperty('chartTemplate')]
    public string $chartTemplate;

    /**
     * @var string $countryChartTemplate Chart of accounts template of the company country
     */
    #[JsonProperty('countryChartTemplate')]
    public string $countryChartTemplate;

    /**
     * @var string $baseCurrency
     */
    #[JsonProperty('baseCurrency')]
    public string $baseCurrency;

    /**
     * @var string $defaultInvoiceCurrency
     */
    #[JsonProperty('defaultInvoiceCurrency')]
    public string $defaultInvoiceCurrency;

    /**
     * @var value-of<CompaniesProfileAccountResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?CompaniesProfileAccountResponseAddress $address
     */
    #[JsonProperty('address')]
    public ?CompaniesProfileAccountResponseAddress $address;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var ?string $bankName
     */
    #[JsonProperty('bankName')]
    public ?string $bankName;

    /**
     * @var ?string $peppolId
     */
    #[JsonProperty('peppolId')]
    public ?string $peppolId;

    /**
     * @var ?string $sepaCreditorId
     */
    #[JsonProperty('sepaCreditorId')]
    public ?string $sepaCreditorId;

    /**
     * @var ?string $logoFileId
     */
    #[JsonProperty('logoFileId')]
    public ?string $logoFileId;

    /**
     * @var ?string $legalForm
     */
    #[JsonProperty('legalForm')]
    public ?string $legalForm;

    /**
     * @var ?string $registryName
     */
    #[JsonProperty('registryName')]
    public ?string $registryName;

    /**
     * @var ?string $incorporatedOn
     */
    #[JsonProperty('incorporatedOn')]
    public ?string $incorporatedOn;

    /**
     * @var ?string $shareCapital
     */
    #[JsonProperty('shareCapital')]
    public ?string $shareCapital;

    /**
     * @var ?value-of<CompaniesProfileAccountResponseAccountsKeptBy> $accountsKeptBy
     */
    #[JsonProperty('accountsKeptBy')]
    public ?string $accountsKeptBy;

    /**
     * @var ?value-of<CompaniesProfileAccountResponseVatPeriod> $vatPeriod
     */
    #[JsonProperty('vatPeriod')]
    public ?string $vatPeriod;

    /**
     * @var ?int $fiscalYearEndMonth
     */
    #[JsonProperty('fiscalYearEndMonth')]
    public ?int $fiscalYearEndMonth;

    /**
     * @var string $timeZone
     */
    #[JsonProperty('timeZone')]
    public string $timeZone;

    /**
     * @var ?array<string, ?string> $filingOptions
     */
    #[JsonProperty('filingOptions'), ArrayType(['string' => new Union('string', 'null')])]
    public ?array $filingOptions;

    /**
     * @var ?string $bookkeeperName
     */
    #[JsonProperty('bookkeeperName')]
    public ?string $bookkeeperName;

    /**
     * @var ?string $auditorName
     */
    #[JsonProperty('auditorName')]
    public ?string $auditorName;

    /**
     * @var ?string $auditorRegistrationNumber
     */
    #[JsonProperty('auditorRegistrationNumber')]
    public ?string $auditorRegistrationNumber;

    /**
     * @var bool $auditRequired
     */
    #[JsonProperty('auditRequired')]
    public bool $auditRequired;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   isVatPayer: bool,
     *   isSandbox: bool,
     *   countryCode: string,
     *   chartTemplate: string,
     *   countryChartTemplate: string,
     *   baseCurrency: string,
     *   defaultInvoiceCurrency: string,
     *   status: value-of<CompaniesProfileAccountResponseStatus>,
     *   timeZone: string,
     *   auditRequired: bool,
     *   code?: ?string,
     *   vatCode?: ?string,
     *   smeExemptionNumber?: ?string,
     *   address?: ?CompaniesProfileAccountResponseAddress,
     *   email?: ?string,
     *   phone?: ?string,
     *   iban?: ?string,
     *   bankName?: ?string,
     *   peppolId?: ?string,
     *   sepaCreditorId?: ?string,
     *   logoFileId?: ?string,
     *   legalForm?: ?string,
     *   registryName?: ?string,
     *   incorporatedOn?: ?string,
     *   shareCapital?: ?string,
     *   accountsKeptBy?: ?value-of<CompaniesProfileAccountResponseAccountsKeptBy>,
     *   vatPeriod?: ?value-of<CompaniesProfileAccountResponseVatPeriod>,
     *   fiscalYearEndMonth?: ?int,
     *   filingOptions?: ?array<string, ?string>,
     *   bookkeeperName?: ?string,
     *   auditorName?: ?string,
     *   auditorRegistrationNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->code = $values['code'] ?? null;
        $this->vatCode = $values['vatCode'] ?? null;
        $this->smeExemptionNumber = $values['smeExemptionNumber'] ?? null;
        $this->isVatPayer = $values['isVatPayer'];
        $this->isSandbox = $values['isSandbox'];
        $this->countryCode = $values['countryCode'];
        $this->chartTemplate = $values['chartTemplate'];
        $this->countryChartTemplate = $values['countryChartTemplate'];
        $this->baseCurrency = $values['baseCurrency'];
        $this->defaultInvoiceCurrency = $values['defaultInvoiceCurrency'];
        $this->status = $values['status'];
        $this->address = $values['address'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->iban = $values['iban'] ?? null;
        $this->bankName = $values['bankName'] ?? null;
        $this->peppolId = $values['peppolId'] ?? null;
        $this->sepaCreditorId = $values['sepaCreditorId'] ?? null;
        $this->logoFileId = $values['logoFileId'] ?? null;
        $this->legalForm = $values['legalForm'] ?? null;
        $this->registryName = $values['registryName'] ?? null;
        $this->incorporatedOn = $values['incorporatedOn'] ?? null;
        $this->shareCapital = $values['shareCapital'] ?? null;
        $this->accountsKeptBy = $values['accountsKeptBy'] ?? null;
        $this->vatPeriod = $values['vatPeriod'] ?? null;
        $this->fiscalYearEndMonth = $values['fiscalYearEndMonth'] ?? null;
        $this->timeZone = $values['timeZone'];
        $this->filingOptions = $values['filingOptions'] ?? null;
        $this->bookkeeperName = $values['bookkeeperName'] ?? null;
        $this->auditorName = $values['auditorName'] ?? null;
        $this->auditorRegistrationNumber = $values['auditorRegistrationNumber'] ?? null;
        $this->auditRequired = $values['auditRequired'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
