<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Declarations\Types\LtIvazAmendDeclarationsRequestCorrectionsItem;

class LtIvazAmendDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var array<string> $waybillIds
     */
    #[JsonProperty('waybillIds'), ArrayType(['string'])]
    public array $waybillIds;

    /**
     * @var ?bool $persist
     */
    #[JsonProperty('persist')]
    public ?bool $persist;

    /**
     * @var ?array<LtIvazAmendDeclarationsRequestCorrectionsItem> $corrections
     */
    #[JsonProperty('corrections'), ArrayType([LtIvazAmendDeclarationsRequestCorrectionsItem::class])]
    public ?array $corrections;

    /**
     * @param array{
     *   waybillIds: array<string>,
     *   persist?: ?bool,
     *   corrections?: ?array<LtIvazAmendDeclarationsRequestCorrectionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->waybillIds = $values['waybillIds'];
        $this->persist = $values['persist'] ?? null;
        $this->corrections = $values['corrections'] ?? null;
    }
}
