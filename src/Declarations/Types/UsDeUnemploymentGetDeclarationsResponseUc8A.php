<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsDeUnemploymentGetDeclarationsResponseUc8A extends JsonSerializableType
{
    /**
     * @var array<UsDeUnemploymentGetDeclarationsResponseUc8APagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([UsDeUnemploymentGetDeclarationsResponseUc8APagesItem::class])]
    public array $pages;

    /**
     * @var string $line32
     */
    #[JsonProperty('line32')]
    public string $line32;

    /**
     * @var string $line33
     */
    #[JsonProperty('line33')]
    public string $line33;

    /**
     * @param array{
     *   pages: array<UsDeUnemploymentGetDeclarationsResponseUc8APagesItem>,
     *   line32: string,
     *   line33: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pages = $values['pages'];
        $this->line32 = $values['line32'];
        $this->line33 = $values['line33'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
