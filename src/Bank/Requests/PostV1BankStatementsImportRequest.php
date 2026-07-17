<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankStatementsImportRequestFormat;

class PostV1BankStatementsImportRequest extends JsonSerializableType
{
    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var ?value-of<PostV1BankStatementsImportRequestFormat> $format
     */
    #[JsonProperty('format')]
    public ?string $format;

    /**
     * @var string $content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @param array{
     *   bankAccountId: string,
     *   content: string,
     *   format?: ?value-of<PostV1BankStatementsImportRequestFormat>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bankAccountId = $values['bankAccountId'];
        $this->format = $values['format'] ?? null;
        $this->content = $values['content'];
    }
}
