<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class VatAccountsReportsResponseAccountsItem extends JsonSerializableType
{
    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var array<value-of<VatAccountsReportsResponseAccountsItemRulesItem>> $rules
     */
    #[JsonProperty('rules'), ArrayType(['string'])]
    public array $rules;

    /**
     * @var value-of<VatAccountsReportsResponseAccountsItemSide> $side
     */
    #[JsonProperty('side')]
    public string $side;

    /**
     * @var string $posted
     */
    #[JsonProperty('posted')]
    public string $posted;

    /**
     * @var string $expected
     */
    #[JsonProperty('expected')]
    public string $expected;

    /**
     * @var string $difference
     */
    #[JsonProperty('difference')]
    public string $difference;

    /**
     * @var string $settlements
     */
    #[JsonProperty('settlements')]
    public string $settlements;

    /**
     * @var array<VatAccountsReportsResponseAccountsItemByDocumentTypeItem> $byDocumentType
     */
    #[JsonProperty('byDocumentType'), ArrayType([VatAccountsReportsResponseAccountsItemByDocumentTypeItem::class])]
    public array $byDocumentType;

    /**
     * @param array{
     *   accountCode: string,
     *   rules: array<value-of<VatAccountsReportsResponseAccountsItemRulesItem>>,
     *   side: value-of<VatAccountsReportsResponseAccountsItemSide>,
     *   posted: string,
     *   expected: string,
     *   difference: string,
     *   settlements: string,
     *   byDocumentType: array<VatAccountsReportsResponseAccountsItemByDocumentTypeItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accountCode = $values['accountCode'];
        $this->rules = $values['rules'];
        $this->side = $values['side'];
        $this->posted = $values['posted'];
        $this->expected = $values['expected'];
        $this->difference = $values['difference'];
        $this->settlements = $values['settlements'];
        $this->byDocumentType = $values['byDocumentType'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
