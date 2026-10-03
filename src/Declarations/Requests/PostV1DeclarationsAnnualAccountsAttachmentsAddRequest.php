<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsAnnualAccountsAttachmentsAddRequestKind;

class PostV1DeclarationsAnnualAccountsAttachmentsAddRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var value-of<PostV1DeclarationsAnnualAccountsAttachmentsAddRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var string $ref
     */
    #[JsonProperty('ref')]
    public string $ref;

    /**
     * @param array{
     *   year: int,
     *   kind: value-of<PostV1DeclarationsAnnualAccountsAttachmentsAddRequestKind>,
     *   ref: string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->kind = $values['kind'];
        $this->name = $values['name'] ?? null;
        $this->ref = $values['ref'];
    }
}
