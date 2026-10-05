<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Core\Types\Union;
use DateTime;
use Nordlet\Core\Types\Date;

class AccountsCreateLedgerResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<string, ?AccountsCreateLedgerResponseTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => new Union(AccountsCreateLedgerResponseTranslationsValue::class, 'null')])]
    public ?array $translations;

    /**
     * @var value-of<AccountsCreateLedgerResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $parentId
     */
    #[JsonProperty('parentId')]
    public ?string $parentId;

    /**
     * @var bool $isPostable
     */
    #[JsonProperty('isPostable')]
    public bool $isPostable;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   code: string,
     *   name: string,
     *   type: value-of<AccountsCreateLedgerResponseType>,
     *   isPostable: bool,
     *   createdAt: DateTime,
     *   translations?: ?array<string, ?AccountsCreateLedgerResponseTranslationsValue>,
     *   parentId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->translations = $values['translations'] ?? null;
        $this->type = $values['type'];
        $this->parentId = $values['parentId'] ?? null;
        $this->isPostable = $values['isPostable'];
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
