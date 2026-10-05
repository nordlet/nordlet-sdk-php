<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\AccountsUpdateLedgerRequestTranslationsValue;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Core\Types\Union;

class AccountsUpdateLedgerRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<string, ?AccountsUpdateLedgerRequestTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => new Union(AccountsUpdateLedgerRequestTranslationsValue::class, 'null')])]
    public ?array $translations;

    /**
     * @var ?string $parentId
     */
    #[JsonProperty('parentId')]
    public ?string $parentId;

    /**
     * @var ?bool $isPostable
     */
    #[JsonProperty('isPostable')]
    public ?bool $isPostable;

    /**
     * @param array{
     *   id: string,
     *   name?: ?string,
     *   translations?: ?array<string, ?AccountsUpdateLedgerRequestTranslationsValue>,
     *   parentId?: ?string,
     *   isPostable?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'] ?? null;
        $this->translations = $values['translations'] ?? null;
        $this->parentId = $values['parentId'] ?? null;
        $this->isPostable = $values['isPostable'] ?? null;
    }
}
