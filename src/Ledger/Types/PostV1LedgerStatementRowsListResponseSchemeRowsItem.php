<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerStatementRowsListResponseSchemeRowsItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var value-of<PostV1LedgerStatementRowsListResponseSchemeRowsItemStatement> $statement
     */
    #[JsonProperty('statement')]
    public string $statement;

    /**
     * @param array{
     *   code: string,
     *   label: string,
     *   statement: value-of<PostV1LedgerStatementRowsListResponseSchemeRowsItemStatement>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->label = $values['label'];
        $this->statement = $values['statement'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
