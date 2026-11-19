<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\BankAccountsUpdatePartnersRequestAccountType;

class BankAccountsUpdatePartnersRequest extends JsonSerializableType
{
    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var ?string $bankCode Sort code, routing number or other national bank code, for an account without an IBAN
     */
    #[JsonProperty('bankCode')]
    public ?string $bankCode;

    /**
     * @var ?string $bankAccountNumber Account number, for an account without an IBAN
     */
    #[JsonProperty('bankAccountNumber')]
    public ?string $bankAccountNumber;

    /**
     * @var ?value-of<BankAccountsUpdatePartnersRequestAccountType> $accountType Checking or savings account; a US ACH file needs it
     */
    #[JsonProperty('accountType')]
    public ?string $accountType;

    /**
     * @var ?string $bankName
     */
    #[JsonProperty('bankName')]
    public ?string $bankName;

    /**
     * @var ?string $bic
     */
    #[JsonProperty('bic')]
    public ?string $bic;

    /**
     * @var ?string $currency Defaults to the company's base currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var ?bool $isDefault
     */
    #[JsonProperty('isDefault')]
    public ?bool $isDefault;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @param array{
     *   id: string,
     *   iban?: ?string,
     *   bankCode?: ?string,
     *   bankAccountNumber?: ?string,
     *   accountType?: ?value-of<BankAccountsUpdatePartnersRequestAccountType>,
     *   bankName?: ?string,
     *   bic?: ?string,
     *   currency?: ?string,
     *   isDefault?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->iban = $values['iban'] ?? null;
        $this->bankCode = $values['bankCode'] ?? null;
        $this->bankAccountNumber = $values['bankAccountNumber'] ?? null;
        $this->accountType = $values['accountType'] ?? null;
        $this->bankName = $values['bankName'] ?? null;
        $this->bic = $values['bic'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->isDefault = $values['isDefault'] ?? null;
        $this->id = $values['id'];
    }
}
