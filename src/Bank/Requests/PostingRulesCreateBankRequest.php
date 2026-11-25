<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostingRulesCreateBankRequest extends JsonSerializableType
{
    /**
     * @var ?string $counterpartyContains
     */
    #[JsonProperty('counterpartyContains')]
    public ?string $counterpartyContains;

    /**
     * @var ?string $descriptionContains
     */
    #[JsonProperty('descriptionContains')]
    public ?string $descriptionContains;

    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @param array{
     *   accountCode: string,
     *   counterpartyContains?: ?string,
     *   descriptionContains?: ?string,
     *   partnerId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->counterpartyContains = $values['counterpartyContains'] ?? null;
        $this->descriptionContains = $values['descriptionContains'] ?? null;
        $this->accountCode = $values['accountCode'];
        $this->partnerId = $values['partnerId'] ?? null;
    }
}
