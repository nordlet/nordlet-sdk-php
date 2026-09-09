<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1OperationTypesCreateResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var ?value-of<PostV1OperationTypesCreateResponseInvoiceType> $invoiceType
     */
    #[JsonProperty('invoiceType')]
    public ?string $invoiceType;

    /**
     * @var ?string $payerPartnerId
     */
    #[JsonProperty('payerPartnerId')]
    public ?string $payerPartnerId;

    /**
     * @var ?string $debitAccountCode
     */
    #[JsonProperty('debitAccountCode')]
    public ?string $debitAccountCode;

    /**
     * @var ?string $creditAccountCode
     */
    #[JsonProperty('creditAccountCode')]
    public ?string $creditAccountCode;

    /**
     * @var ?string $vatAccountCode
     */
    #[JsonProperty('vatAccountCode')]
    public ?string $vatAccountCode;

    /**
     * @var ?string $expenseAccountCode
     */
    #[JsonProperty('expenseAccountCode')]
    public ?string $expenseAccountCode;

    /**
     * @var ?string $advanceAccountCode
     */
    #[JsonProperty('advanceAccountCode')]
    public ?string $advanceAccountCode;

    /**
     * @var ?string $incomeAccountCode
     */
    #[JsonProperty('incomeAccountCode')]
    public ?string $incomeAccountCode;

    /**
     * @var bool $isPurchase
     */
    #[JsonProperty('isPurchase')]
    public bool $isPurchase;

    /**
     * @var bool $isSale
     */
    #[JsonProperty('isSale')]
    public bool $isSale;

    /**
     * @var bool $isWriteOff
     */
    #[JsonProperty('isWriteOff')]
    public bool $isWriteOff;

    /**
     * @var bool $isInternalMovement
     */
    #[JsonProperty('isInternalMovement')]
    public bool $isInternalMovement;

    /**
     * @var bool $isPurchaseReturn
     */
    #[JsonProperty('isPurchaseReturn')]
    public bool $isPurchaseReturn;

    /**
     * @var bool $isSalesReturn
     */
    #[JsonProperty('isSalesReturn')]
    public bool $isSalesReturn;

    /**
     * @var bool $isConsignment
     */
    #[JsonProperty('isConsignment')]
    public bool $isConsignment;

    /**
     * @var bool $isProduction
     */
    #[JsonProperty('isProduction')]
    public bool $isProduction;

    /**
     * @var bool $isAssetIn
     */
    #[JsonProperty('isAssetIn')]
    public bool $isAssetIn;

    /**
     * @var bool $isAssetOut
     */
    #[JsonProperty('isAssetOut')]
    public bool $isAssetOut;

    /**
     * @var bool $isCashRegisterSale
     */
    #[JsonProperty('isCashRegisterSale')]
    public bool $isCashRegisterSale;

    /**
     * @var bool $includeInVatRegister
     */
    #[JsonProperty('includeInVatRegister')]
    public bool $includeInVatRegister;

    /**
     * @var bool $includeInSaft
     */
    #[JsonProperty('includeInSaft')]
    public bool $includeInSaft;

    /**
     * @var bool $isActive
     */
    #[JsonProperty('isActive')]
    public bool $isActive;

    /**
     * @var int $sortOrder
     */
    #[JsonProperty('sortOrder')]
    public int $sortOrder;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   code: string,
     *   name: string,
     *   isPurchase: bool,
     *   isSale: bool,
     *   isWriteOff: bool,
     *   isInternalMovement: bool,
     *   isPurchaseReturn: bool,
     *   isSalesReturn: bool,
     *   isConsignment: bool,
     *   isProduction: bool,
     *   isAssetIn: bool,
     *   isAssetOut: bool,
     *   isCashRegisterSale: bool,
     *   includeInVatRegister: bool,
     *   includeInSaft: bool,
     *   isActive: bool,
     *   sortOrder: int,
     *   createdAt: string,
     *   updatedAt: string,
     *   invoiceType?: ?value-of<PostV1OperationTypesCreateResponseInvoiceType>,
     *   payerPartnerId?: ?string,
     *   debitAccountCode?: ?string,
     *   creditAccountCode?: ?string,
     *   vatAccountCode?: ?string,
     *   expenseAccountCode?: ?string,
     *   advanceAccountCode?: ?string,
     *   incomeAccountCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->invoiceType = $values['invoiceType'] ?? null;
        $this->payerPartnerId = $values['payerPartnerId'] ?? null;
        $this->debitAccountCode = $values['debitAccountCode'] ?? null;
        $this->creditAccountCode = $values['creditAccountCode'] ?? null;
        $this->vatAccountCode = $values['vatAccountCode'] ?? null;
        $this->expenseAccountCode = $values['expenseAccountCode'] ?? null;
        $this->advanceAccountCode = $values['advanceAccountCode'] ?? null;
        $this->incomeAccountCode = $values['incomeAccountCode'] ?? null;
        $this->isPurchase = $values['isPurchase'];
        $this->isSale = $values['isSale'];
        $this->isWriteOff = $values['isWriteOff'];
        $this->isInternalMovement = $values['isInternalMovement'];
        $this->isPurchaseReturn = $values['isPurchaseReturn'];
        $this->isSalesReturn = $values['isSalesReturn'];
        $this->isConsignment = $values['isConsignment'];
        $this->isProduction = $values['isProduction'];
        $this->isAssetIn = $values['isAssetIn'];
        $this->isAssetOut = $values['isAssetOut'];
        $this->isCashRegisterSale = $values['isCashRegisterSale'];
        $this->includeInVatRegister = $values['includeInVatRegister'];
        $this->includeInSaft = $values['includeInSaft'];
        $this->isActive = $values['isActive'];
        $this->sortOrder = $values['sortOrder'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
