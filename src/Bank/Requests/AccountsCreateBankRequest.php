<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\AccountsCreateBankRequestType;
use Nordlet\Bank\Types\AccountsCreateBankRequestPaymentFileSettings;

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
     * @var ?AccountsCreateBankRequestPaymentFileSettings $paymentFileSettings What the bank gave the company for payment files from this account: the Bacs service user number for a UK account, the ACH Immediate Origin and Company Identification for a US account
     */
    #[JsonProperty('paymentFileSettings')]
    public ?AccountsCreateBankRequestPaymentFileSettings $paymentFileSettings;

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
     *   bankCode?: ?string,
     *   bankAccountNumber?: ?string,
     *   paymentFileSettings?: ?AccountsCreateBankRequestPaymentFileSettings,
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
        $this->bankCode = $values['bankCode'] ?? null;
        $this->bankAccountNumber = $values['bankAccountNumber'] ?? null;
        $this->paymentFileSettings = $values['paymentFileSettings'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->accountCode = $values['accountCode'] ?? null;
        $this->documentRef = $values['documentRef'] ?? null;
    }
}
