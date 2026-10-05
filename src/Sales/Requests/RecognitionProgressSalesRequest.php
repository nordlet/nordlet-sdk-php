<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class RecognitionProgressSalesRequest extends JsonSerializableType
{
    /**
     * @var string $invoiceLineId
     */
    #[JsonProperty('invoiceLineId')]
    public string $invoiceLineId;

    /**
     * @var string $percentComplete
     */
    #[JsonProperty('percentComplete')]
    public string $percentComplete;

    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @param array{
     *   invoiceLineId: string,
     *   percentComplete: string,
     *   date?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceLineId = $values['invoiceLineId'];
        $this->percentComplete = $values['percentComplete'];
        $this->date = $values['date'] ?? null;
    }
}
