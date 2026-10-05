<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class StatementRowsSchemesLedgerResponseRowsItemRowsItem extends JsonSerializableType
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
     * @var value-of<StatementRowsSchemesLedgerResponseRowsItemRowsItemStatement> $statement
     */
    #[JsonProperty('statement')]
    public string $statement;

    /**
     * @param array{
     *   code: string,
     *   label: string,
     *   statement: value-of<StatementRowsSchemesLedgerResponseRowsItemRowsItemStatement>,
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
