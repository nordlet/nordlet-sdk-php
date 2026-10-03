<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerStatementRowsListRequest extends JsonSerializableType
{
    /**
     * @var string $scheme
     */
    #[JsonProperty('scheme')]
    public string $scheme;

    /**
     * @var ?string $fromDate
     */
    #[JsonProperty('fromDate')]
    public ?string $fromDate;

    /**
     * @var ?string $toDate
     */
    #[JsonProperty('toDate')]
    public ?string $toDate;

    /**
     * @param array{
     *   scheme: string,
     *   fromDate?: ?string,
     *   toDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->scheme = $values['scheme'];
        $this->fromDate = $values['fromDate'] ?? null;
        $this->toDate = $values['toDate'] ?? null;
    }
}
