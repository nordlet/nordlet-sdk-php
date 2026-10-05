<?php

namespace Nordlet\Calendar\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class CreateCalendarResponse extends JsonSerializableType
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
     * @var value-of<CreateCalendarResponseKind> $kind
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
     * @var DateTime $dueDate
     */
    #[JsonProperty('dueDate'), Date(Date::TYPE_DATE)]
    public DateTime $dueDate;

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
     * @var ?CreateCalendarResponseSubmission $submission
     */
    #[JsonProperty('submission')]
    public ?CreateCalendarResponseSubmission $submission;

    /**
     * @var array<CreateCalendarResponseSubmissionsItem> $submissions
     */
    #[JsonProperty('submissions'), ArrayType([CreateCalendarResponseSubmissionsItem::class])]
    public array $submissions;

    /**
     * @var bool $canSubmit
     */
    #[JsonProperty('canSubmit')]
    public bool $canSubmit;

    /**
     * @var bool $canAmend
     */
    #[JsonProperty('canAmend')]
    public bool $canAmend;

    /**
     * @var bool $canDownload
     */
    #[JsonProperty('canDownload')]
    public bool $canDownload;

    /**
     * @var bool $automated
     */
    #[JsonProperty('automated')]
    public bool $automated;

    /**
     * @param array{
     *   key: string,
     *   kind: value-of<CreateCalendarResponseKind>,
     *   title: string,
     *   dueDate: DateTime,
     *   done: bool,
     *   submissions: array<CreateCalendarResponseSubmissionsItem>,
     *   canSubmit: bool,
     *   canAmend: bool,
     *   canDownload: bool,
     *   automated: bool,
     *   id?: ?string,
     *   ruleKey?: ?string,
     *   period?: ?string,
     *   notes?: ?string,
     *   href?: ?string,
     *   submission?: ?CreateCalendarResponseSubmission,
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
        $this->submission = $values['submission'] ?? null;
        $this->submissions = $values['submissions'];
        $this->canSubmit = $values['canSubmit'];
        $this->canAmend = $values['canAmend'];
        $this->canDownload = $values['canDownload'];
        $this->automated = $values['automated'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
