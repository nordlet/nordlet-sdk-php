<?php

namespace Nordlet\Bank\Types;

enum TransactionsSuggestMatchesBankResponseAllocationsItemDocumentType: string
{
    case SaleInvoice = "sale_invoice";
    case PurchaseInvoice = "purchase_invoice";
}
