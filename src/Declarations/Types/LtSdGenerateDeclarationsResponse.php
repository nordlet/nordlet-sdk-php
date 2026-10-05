<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class LtSdGenerateDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var value-of<LtSdGenerateDeclarationsResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

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
     * @var array<LtSdGenerateDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([LtSdGenerateDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var array<string> $notes
     */
    #[JsonProperty('notes'), ArrayType(['string'])]
    public array $notes;

    /**
     * @param array{
     *   type: value-of<LtSdGenerateDeclarationsResponseType>,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   rows: array<LtSdGenerateDeclarationsResponseRowsItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->rows = $values['rows'];
        $this->warnings = $values['warnings'];
        $this->notes = $values['notes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
