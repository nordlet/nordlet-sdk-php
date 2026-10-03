<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerStatementRowsSetResponse extends JsonSerializableType
{
    /**
     * @var string $scheme
     */
    #[JsonProperty('scheme')]
    public string $scheme;

    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var ?string $rowCode
     */
    #[JsonProperty('rowCode')]
    public ?string $rowCode;

    /**
     * @param array{
     *   scheme: string,
     *   accountCode: string,
     *   rowCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->scheme = $values['scheme'];
        $this->accountCode = $values['accountCode'];
        $this->rowCode = $values['rowCode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
