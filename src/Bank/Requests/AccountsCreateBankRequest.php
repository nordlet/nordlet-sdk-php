<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\AccountsCreateBankRequestType;

class AccountsCreateBankRequest extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?value-of<AccountsCreateBankRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var ?string $accountCode
     */
    #[JsonProperty('accountCode')]
    public ?string $accountCode;

    /**
     * @var ?string $documentRef
     */
    #[JsonProperty('documentRef')]
    public ?string $documentRef;

    /**
     * @param array{
     *   name: string,
     *   type?: ?value-of<AccountsCreateBankRequestType>,
     *   iban?: ?string,
     *   currency?: ?string,
     *   accountCode?: ?string,
     *   documentRef?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->type = $values['type'] ?? null;
        $this->iban = $values['iban'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->accountCode = $values['accountCode'] ?? null;
        $this->documentRef = $values['documentRef'] ?? null;
    }
}
