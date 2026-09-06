<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\PostV1LedgerAccountsCreateRequestTranslations;
use Nordlet\Ledger\Types\PostV1LedgerAccountsCreateRequestType;

class PostV1LedgerAccountsCreateRequest extends JsonSerializableType
{
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
     * @var ?PostV1LedgerAccountsCreateRequestTranslations $translations
     */
    #[JsonProperty('translations')]
    public ?PostV1LedgerAccountsCreateRequestTranslations $translations;

    /**
     * @var value-of<PostV1LedgerAccountsCreateRequestType> $type
     */
    #[JsonProperty('type')]
    public string $type;

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
     *   code: string,
     *   name: string,
     *   type: value-of<PostV1LedgerAccountsCreateRequestType>,
     *   translations?: ?PostV1LedgerAccountsCreateRequestTranslations,
     *   parentId?: ?string,
     *   isPostable?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->translations = $values['translations'] ?? null;
        $this->type = $values['type'];
        $this->parentId = $values['parentId'] ?? null;
        $this->isPostable = $values['isPostable'] ?? null;
    }
}
