<?php

namespace Nordlet\Leads\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class NotesListLeadsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $leadId
     */
    #[JsonProperty('leadId')]
    public string $leadId;

    /**
     * @var string $body
     */
    #[JsonProperty('body')]
    public string $body;

    /**
     * @var ?string $authorId
     */
    #[JsonProperty('authorId')]
    public ?string $authorId;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   leadId: string,
     *   body: string,
     *   createdAt: DateTime,
     *   authorId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->leadId = $values['leadId'];
        $this->body = $values['body'];
        $this->authorId = $values['authorId'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
