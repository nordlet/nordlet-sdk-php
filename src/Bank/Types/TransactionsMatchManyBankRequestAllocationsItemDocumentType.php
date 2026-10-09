<?php

namespace Nordlet\Bank\Types;

enum TransactionsMatchManyBankRequestAllocationsItemDocumentType: string
{
    case SaleInvoice = "sale_invoice";
    case PurchaseInvoice = "purchase_invoice";
}
