<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class JournalTemplatesListLedgerResponseRowsItemLinesItem extends JsonSerializableType
{
    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var value-of<JournalTemplatesListLedgerResponseRowsItemLinesItemSide> $side
     */
    #[JsonProperty('side')]
    public string $side;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $costCenterId
     */
    #[JsonProperty('costCenterId')]
    public ?string $costCenterId;

    /**
     * @var ?string $projectId
     */
    #[JsonProperty('projectId')]
    public ?string $projectId;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @param array{
     *   accountCode: string,
     *   side: value-of<JournalTemplatesListLedgerResponseRowsItemLinesItemSide>,
     *   description?: ?string,
     *   costCenterId?: ?string,
     *   projectId?: ?string,
     *   partnerId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accountCode = $values['accountCode'];
        $this->side = $values['side'];
        $this->description = $values['description'] ?? null;
        $this->costCenterId = $values['costCenterId'] ?? null;
        $this->projectId = $values['projectId'] ?? null;
        $this->partnerId = $values['partnerId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
