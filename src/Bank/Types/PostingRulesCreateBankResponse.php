<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class PostingRulesCreateBankResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $counterpartyContains
     */
    #[JsonProperty('counterpartyContains')]
    public ?string $counterpartyContains;

    /**
     * @var ?string $descriptionContains
     */
    #[JsonProperty('descriptionContains')]
    public ?string $descriptionContains;

    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   accountCode: string,
     *   createdAt: DateTime,
     *   counterpartyContains?: ?string,
     *   descriptionContains?: ?string,
     *   partnerId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->counterpartyContains = $values['counterpartyContains'] ?? null;
        $this->descriptionContains = $values['descriptionContains'] ?? null;
        $this->accountCode = $values['accountCode'];
        $this->partnerId = $values['partnerId'] ?? null;
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
