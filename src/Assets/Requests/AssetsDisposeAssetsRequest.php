<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Assets\Types\AssetsDisposeAssetsRequestReason;

class AssetsDisposeAssetsRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var value-of<AssetsDisposeAssetsRequestReason> $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @var ?string $proceeds Sale price excluding VAT; 0 when scrapped or written off
     */
    #[JsonProperty('proceeds')]
    public ?string $proceeds;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   id: string,
     *   date: DateTime,
     *   reason: value-of<AssetsDisposeAssetsRequestReason>,
     *   proceeds?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->date = $values['date'];
        $this->reason = $values['reason'];
        $this->proceeds = $values['proceeds'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
