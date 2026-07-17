<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerPostingRulesListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var string $defaultCode
     */
    #[JsonProperty('defaultCode')]
    public string $defaultCode;

    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var bool $overridden
     */
    #[JsonProperty('overridden')]
    public bool $overridden;

    /**
     * @param array{
     *   key: string,
     *   description: string,
     *   defaultCode: string,
     *   accountCode: string,
     *   overridden: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->description = $values['description'];
        $this->defaultCode = $values['defaultCode'];
        $this->accountCode = $values['accountCode'];
        $this->overridden = $values['overridden'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
