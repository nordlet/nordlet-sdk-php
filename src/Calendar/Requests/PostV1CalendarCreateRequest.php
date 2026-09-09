<?php

namespace Nordlet\Calendar\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CalendarCreateRequest extends JsonSerializableType
{
    /**
     * @var string $title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var string $dueDate
     */
    #[JsonProperty('dueDate')]
    public string $dueDate;

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
     *   title: string,
     *   dueDate: string,
     *   notes?: ?string,
     *   done?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->title = $values['title'];
        $this->dueDate = $values['dueDate'];
        $this->notes = $values['notes'] ?? null;
        $this->done = $values['done'] ?? null;
    }
}
