<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AccountsApplyTemplateLedgerResponse extends JsonSerializableType
{
    /**
     * @var int $accounts
     */
    #[JsonProperty('accounts')]
    public int $accounts;

    /**
     * @param array{
     *   accounts: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accounts = $values['accounts'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
