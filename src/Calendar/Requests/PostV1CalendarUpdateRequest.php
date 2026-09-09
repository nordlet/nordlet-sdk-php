<?php

namespace Nordlet\Calendar\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CalendarUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var ?string $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?string $dueDate
     */
    #[JsonProperty('dueDate')]
    public ?string $dueDate;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?bool $done
     */
    #[JsonProperty('done')]
    public ?bool $done;

    /**
     * @param array{
     *   key: string,
     *   title?: ?string,
     *   dueDate?: ?string,
     *   notes?: ?string,
     *   done?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->title = $values['title'] ?? null;
        $this->dueDate = $values['dueDate'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->done = $values['done'] ?? null;
    }
}
