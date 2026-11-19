<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class MandatesAuddisExportBankRequest extends JsonSerializableType
{
    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var ?array<string> $mandateIds
     */
    #[JsonProperty('mandateIds'), ArrayType(['string'])]
    public ?array $mandateIds;

    /**
     * @var ?DateTime $processingDate
     */
    #[JsonProperty('processingDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $processingDate;

    /**
     * @param array{
     *   bankAccountId: string,
     *   mandateIds?: ?array<string>,
     *   processingDate?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bankAccountId = $values['bankAccountId'];
        $this->mandateIds = $values['mandateIds'] ?? null;
        $this->processingDate = $values['processingDate'] ?? null;
    }
}
