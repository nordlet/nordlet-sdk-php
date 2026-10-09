<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class InvoicesIssueSalesRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $series
     */
    #[JsonProperty('series')]
    public ?string $series;

    /**
     * @var ?DateTime $issueDate
     */
    #[JsonProperty('issueDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $issueDate;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var ?bool $returnToStock
     */
    #[JsonProperty('returnToStock')]
    public ?bool $returnToStock;

    /**
     * @param array{
     *   id: string,
     *   series?: ?string,
     *   issueDate?: ?DateTime,
     *   warehouseId?: ?string,
     *   returnToStock?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->series = $values['series'] ?? null;
        $this->issueDate = $values['issueDate'] ?? null;
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->returnToStock = $values['returnToStock'] ?? null;
    }
}
