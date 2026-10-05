<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class BooksValidateMigrationRequestAccountsItem extends JsonSerializableType
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
     * @var value-of<BooksValidateMigrationRequestAccountsItemType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $parentCode
     */
    #[JsonProperty('parentCode')]
    public ?string $parentCode;

    /**
     * @var ?bool $isPostable
     */
    #[JsonProperty('isPostable')]
    public ?bool $isPostable;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   type: value-of<BooksValidateMigrationRequestAccountsItemType>,
     *   parentCode?: ?string,
     *   isPostable?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->type = $values['type'];
        $this->parentCode = $values['parentCode'] ?? null;
        $this->isPostable = $values['isPostable'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
