<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class UsIncomeTaxReturnGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var value-of<UsIncomeTaxReturnGetDeclarationsResponseForm> $form
     */
    #[JsonProperty('form')]
    public string $form;

    /**
     * @var string $scheme
     */
    #[JsonProperty('scheme')]
    public string $scheme;

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
     * @var array<UsIncomeTaxReturnGetDeclarationsResponsePage1Item> $page1
     */
    #[JsonProperty('page1'), ArrayType([UsIncomeTaxReturnGetDeclarationsResponsePage1Item::class])]
    public array $page1;

    /**
     * @var array<UsIncomeTaxReturnGetDeclarationsResponseScheduleLItem> $scheduleL
     */
    #[JsonProperty('scheduleL'), ArrayType([UsIncomeTaxReturnGetDeclarationsResponseScheduleLItem::class])]
    public array $scheduleL;

    /**
     * @var array<UsIncomeTaxReturnGetDeclarationsResponseOtherLinesItem> $otherLines
     */
    #[JsonProperty('otherLines'), ArrayType([UsIncomeTaxReturnGetDeclarationsResponseOtherLinesItem::class])]
    public array $otherLines;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   form: value-of<UsIncomeTaxReturnGetDeclarationsResponseForm>,
     *   scheme: string,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   page1: array<UsIncomeTaxReturnGetDeclarationsResponsePage1Item>,
     *   scheduleL: array<UsIncomeTaxReturnGetDeclarationsResponseScheduleLItem>,
     *   otherLines: array<UsIncomeTaxReturnGetDeclarationsResponseOtherLinesItem>,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->form = $values['form'];
        $this->scheme = $values['scheme'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->page1 = $values['page1'];
        $this->scheduleL = $values['scheduleL'];
        $this->otherLines = $values['otherLines'];
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
