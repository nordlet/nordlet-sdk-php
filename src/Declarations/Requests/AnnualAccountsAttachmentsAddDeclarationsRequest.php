<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\AnnualAccountsAttachmentsAddDeclarationsRequestKind;

class AnnualAccountsAttachmentsAddDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var value-of<AnnualAccountsAttachmentsAddDeclarationsRequestKind> $kind
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
     *   kind: value-of<AnnualAccountsAttachmentsAddDeclarationsRequestKind>,
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
