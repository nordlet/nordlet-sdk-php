<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankSettlementsImportRequestProvider;

class PostV1BankSettlementsImportRequest extends JsonSerializableType
{
    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var ?value-of<PostV1BankSettlementsImportRequestProvider> $provider
     */
    #[JsonProperty('provider')]
    public ?string $provider;

    /**
     * @var string $content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @param array{
     *   bankAccountId: string,
     *   content: string,
     *   provider?: ?value-of<PostV1BankSettlementsImportRequestProvider>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bankAccountId = $values['bankAccountId'];
        $this->provider = $values['provider'] ?? null;
        $this->content = $values['content'];
    }
}
