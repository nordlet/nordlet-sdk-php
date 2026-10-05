<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class FeedsSyncBankRequest extends JsonSerializableType
{
    /**
     * @var string $connectionId
     */
    #[JsonProperty('connectionId')]
    public string $connectionId;

    /**
     * @var ?string $feedAccountId
     */
    #[JsonProperty('feedAccountId')]
    public ?string $feedAccountId;

    /**
     * @var ?DateTime $dateFrom
     */
    #[JsonProperty('dateFrom'), Date(Date::TYPE_DATE)]
    public ?DateTime $dateFrom;

    /**
     * @var ?DateTime $dateTo
     */
    #[JsonProperty('dateTo'), Date(Date::TYPE_DATE)]
    public ?DateTime $dateTo;

    /**
     * @param array{
     *   connectionId: string,
     *   feedAccountId?: ?string,
     *   dateFrom?: ?DateTime,
     *   dateTo?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->connectionId = $values['connectionId'];
        $this->feedAccountId = $values['feedAccountId'] ?? null;
        $this->dateFrom = $values['dateFrom'] ?? null;
        $this->dateTo = $values['dateTo'] ?? null;
    }
}
