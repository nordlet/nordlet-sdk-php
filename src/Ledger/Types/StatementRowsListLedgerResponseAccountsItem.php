<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class StatementRowsListLedgerResponseAccountsItem extends JsonSerializableType
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
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $rowCode
     */
    #[JsonProperty('rowCode')]
    public ?string $rowCode;

    /**
     * @var ?value-of<StatementRowsListLedgerResponseAccountsItemSource> $source
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   type: string,
     *   amount: string,
     *   rowCode?: ?string,
     *   source?: ?value-of<StatementRowsListLedgerResponseAccountsItemSource>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->type = $values['type'];
        $this->rowCode = $values['rowCode'] ?? null;
        $this->source = $values['source'] ?? null;
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
