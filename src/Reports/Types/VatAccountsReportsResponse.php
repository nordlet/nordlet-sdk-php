<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class VatAccountsReportsResponse extends JsonSerializableType
{
    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

    /**
     * @var array<VatAccountsReportsResponseAccountsItem> $accounts
     */
    #[JsonProperty('accounts'), ArrayType([VatAccountsReportsResponseAccountsItem::class])]
    public array $accounts;

    /**
     * @var VatAccountsReportsResponseDocuments $documents
     */
    #[JsonProperty('documents')]
    public VatAccountsReportsResponseDocuments $documents;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   accounts: array<VatAccountsReportsResponseAccountsItem>,
     *   documents: VatAccountsReportsResponseDocuments,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->accounts = $values['accounts'];
        $this->documents = $values['documents'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
