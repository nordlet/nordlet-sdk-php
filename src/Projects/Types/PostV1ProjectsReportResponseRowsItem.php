<?php

namespace Nordlet\Projects\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProjectsReportResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $projectId
     */
    #[JsonProperty('projectId')]
    public string $projectId;

    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<PostV1ProjectsReportResponseRowsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $revenue
     */
    #[JsonProperty('revenue')]
    public string $revenue;

    /**
     * @var string $costs
     */
    #[JsonProperty('costs')]
    public string $costs;

    /**
     * @var string $profit
     */
    #[JsonProperty('profit')]
    public string $profit;

    /**
     * @var string $totalHours
     */
    #[JsonProperty('totalHours')]
    public string $totalHours;

    /**
     * @var string $billableHours
     */
    #[JsonProperty('billableHours')]
    public string $billableHours;

    /**
     * @var string $billedHours
     */
    #[JsonProperty('billedHours')]
    public string $billedHours;

    /**
     * @var string $unbilledHours
     */
    #[JsonProperty('unbilledHours')]
    public string $unbilledHours;

    /**
     * @var string $unbilledAmount
     */
    #[JsonProperty('unbilledAmount')]
    public string $unbilledAmount;

    /**
     * @param array{
     *   projectId: string,
     *   code: string,
     *   name: string,
     *   status: value-of<PostV1ProjectsReportResponseRowsItemStatus>,
     *   revenue: string,
     *   costs: string,
     *   profit: string,
     *   totalHours: string,
     *   billableHours: string,
     *   billedHours: string,
     *   unbilledHours: string,
     *   unbilledAmount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->projectId = $values['projectId'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->status = $values['status'];
        $this->revenue = $values['revenue'];
        $this->costs = $values['costs'];
        $this->profit = $values['profit'];
        $this->totalHours = $values['totalHours'];
        $this->billableHours = $values['billableHours'];
        $this->billedHours = $values['billedHours'];
        $this->unbilledHours = $values['unbilledHours'];
        $this->unbilledAmount = $values['unbilledAmount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
