<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class InvoicesReversePurchasesRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @param array{
     *   id: string,
     *   reason: string,
     *   date?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->reason = $values['reason'];
        $this->date = $values['date'] ?? null;
    }
}
