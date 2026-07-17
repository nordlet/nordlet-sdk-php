<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reports\Types\PostV1ReportsFinancialStatementsRequestCategory;

class PostV1ReportsFinancialStatementsRequest extends JsonSerializableType
{
    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

    /**
     * @var ?value-of<PostV1ReportsFinancialStatementsRequestCategory> $category
     */
    #[JsonProperty('category')]
    public ?string $category;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   category?: ?value-of<PostV1ReportsFinancialStatementsRequestCategory>,
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
