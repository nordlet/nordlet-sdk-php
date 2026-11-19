<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\UsDeGrossReceiptsGetDeclarationsRequestActivity;

class UsDeGrossReceiptsGetDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var string $period
     */
    #[JsonProperty('period')]
    public string $period;

    /**
     * @var value-of<UsDeGrossReceiptsGetDeclarationsRequestActivity> $activity
     */
    #[JsonProperty('activity')]
    public string $activity;

    /**
     * @var ?string $excludedReceipts
     */
    #[JsonProperty('excludedReceipts')]
    public ?string $excludedReceipts;

    /**
     * @param array{
     *   period: string,
     *   activity: value-of<UsDeGrossReceiptsGetDeclarationsRequestActivity>,
     *   excludedReceipts?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->period = $values['period'];
        $this->activity = $values['activity'];
        $this->excludedReceipts = $values['excludedReceipts'] ?? null;
    }
}
