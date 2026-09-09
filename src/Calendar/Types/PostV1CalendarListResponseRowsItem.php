<?php

namespace Nordlet\Calendar\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CalendarListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var ?string $id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var value-of<PostV1CalendarListResponseRowsItemKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var ?string $ruleKey
     */
    #[JsonProperty('ruleKey')]
    public ?string $ruleKey;

    /**
     * @var ?string $period
     */
    #[JsonProperty('period')]
    public ?string $period;

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
     * @var bool $done
     */
    #[JsonProperty('done')]
    public bool $done;

    /**
     * @var ?string $href
     */
    #[JsonProperty('href')]
    public ?string $href;

    /**
     * @param array{
     *   key: string,
     *   kind: value-of<PostV1CalendarListResponseRowsItemKind>,
     *   title: string,
     *   dueDate: string,
     *   done: bool,
     *   id?: ?string,
     *   ruleKey?: ?string,
     *   period?: ?string,
     *   notes?: ?string,
     *   href?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->id = $values['id'] ?? null;
        $this->kind = $values['kind'];
        $this->ruleKey = $values['ruleKey'] ?? null;
        $this->period = $values['period'] ?? null;
        $this->title = $values['title'];
        $this->dueDate = $values['dueDate'];
        $this->notes = $values['notes'] ?? null;
        $this->done = $values['done'];
        $this->href = $values['href'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
