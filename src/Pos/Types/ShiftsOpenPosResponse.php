<?php

namespace Nordlet\Pos\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ShiftsOpenPosResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $deviceId
     */
    #[JsonProperty('deviceId')]
    public string $deviceId;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var value-of<ShiftsOpenPosResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $openingCash
     */
    #[JsonProperty('openingCash')]
    public string $openingCash;

    /**
     * @var ?string $countedCash
     */
    #[JsonProperty('countedCash')]
    public ?string $countedCash;

    /**
     * @var int $receiptCount
     */
    #[JsonProperty('receiptCount')]
    public int $receiptCount;

    /**
     * @var ?string $reportId
     */
    #[JsonProperty('reportId')]
    public ?string $reportId;

    /**
     * @var DateTime $openedAt
     */
    #[JsonProperty('openedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $openedAt;

    /**
     * @var ?DateTime $closedAt
     */
    #[JsonProperty('closedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $closedAt;

    /**
     * @param array{
     *   id: string,
     *   deviceId: string,
     *   status: value-of<ShiftsOpenPosResponseStatus>,
     *   openingCash: string,
     *   receiptCount: int,
     *   openedAt: DateTime,
     *   warehouseId?: ?string,
     *   countedCash?: ?string,
     *   reportId?: ?string,
     *   closedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->deviceId = $values['deviceId'];
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->status = $values['status'];
        $this->openingCash = $values['openingCash'];
        $this->countedCash = $values['countedCash'] ?? null;
        $this->receiptCount = $values['receiptCount'];
        $this->reportId = $values['reportId'] ?? null;
        $this->openedAt = $values['openedAt'];
        $this->closedAt = $values['closedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
