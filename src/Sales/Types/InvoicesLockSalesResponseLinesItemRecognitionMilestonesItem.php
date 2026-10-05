<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class InvoicesLockSalesResponseLinesItemRecognitionMilestonesItem extends JsonSerializableType
{
    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var ?DateTime $expectedDate
     */
    #[JsonProperty('expectedDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $expectedDate;

    /**
     * @var string $percent
     */
    #[JsonProperty('percent')]
    public string $percent;

    /**
     * @param array{
     *   description: string,
     *   percent: string,
     *   expectedDate?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->description = $values['description'];
        $this->expectedDate = $values['expectedDate'] ?? null;
        $this->percent = $values['percent'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
