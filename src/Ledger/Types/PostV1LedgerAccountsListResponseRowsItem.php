<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Core\Types\Union;

class PostV1LedgerAccountsListResponseRowsItem extends JsonSerializableType
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
     * @var ?array<string, ?PostV1LedgerAccountsListResponseRowsItemTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => new Union(PostV1LedgerAccountsListResponseRowsItemTranslationsValue::class, 'null')])]
    public ?array $translations;

    /**
     * @var value-of<PostV1LedgerAccountsListResponseRowsItemType> $type
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
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   code: string,
     *   name: string,
     *   type: value-of<PostV1LedgerAccountsListResponseRowsItemType>,
     *   isPostable: bool,
     *   createdAt: string,
     *   translations?: ?array<string, ?PostV1LedgerAccountsListResponseRowsItemTranslationsValue>,
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
