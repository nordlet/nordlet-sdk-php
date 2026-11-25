<?php

namespace Nordlet\Review\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class QueueListReviewResponseItemsItem extends JsonSerializableType
{
    /**
     * @var value-of<QueueListReviewResponseItemsItemKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $id The id of the draft, bank transaction, partner or file, or the key of the filing
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var string $fix
     */
    #[JsonProperty('fix')]
    public string $fix;

    /**
     * @var ?string $code The warning code of a draft_warning
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @param array{
     *   kind: value-of<QueueListReviewResponseItemsItemKind>,
     *   id: string,
     *   message: string,
     *   fix: string,
     *   code?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->id = $values['id'];
        $this->message = $values['message'];
        $this->fix = $values['fix'];
        $this->code = $values['code'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
