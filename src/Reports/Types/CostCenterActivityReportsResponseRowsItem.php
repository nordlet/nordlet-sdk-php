<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class CostCenterActivityReportsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var string $accountName
     */
    #[JsonProperty('accountName')]
    public string $accountName;

    /**
     * @var string $debit
     */
    #[JsonProperty('debit')]
    public string $debit;

    /**
     * @var string $credit
     */
    #[JsonProperty('credit')]
    public string $credit;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @param array{
     *   accountCode: string,
     *   accountName: string,
     *   debit: string,
     *   credit: string,
     *   net: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accountCode = $values['accountCode'];
        $this->accountName = $values['accountName'];
        $this->debit = $values['debit'];
        $this->credit = $values['credit'];
        $this->net = $values['net'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
