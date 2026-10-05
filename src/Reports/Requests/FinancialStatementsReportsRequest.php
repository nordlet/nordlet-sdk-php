<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Reports\Types\FinancialStatementsReportsRequestCategory;

class FinancialStatementsReportsRequest extends JsonSerializableType
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
     * @var ?value-of<FinancialStatementsReportsRequestCategory> $category
     */
    #[JsonProperty('category')]
    public ?string $category;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   category?: ?value-of<FinancialStatementsReportsRequestCategory>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->category = $values['category'] ?? null;
    }
}
