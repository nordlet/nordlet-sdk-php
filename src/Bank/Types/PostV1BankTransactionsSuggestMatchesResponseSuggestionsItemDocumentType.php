<?php

namespace Nordlet\Bank\Types;

enum PostV1BankTransactionsSuggestMatchesResponseSuggestionsItemDocumentType: string
{
    case SaleInvoice = "sale_invoice";
    case PurchaseInvoice = "purchase_invoice";
}
