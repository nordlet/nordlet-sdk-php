<?php

namespace Nordlet\Bank\Types;

enum TransactionsRecordBankRequestDocumentType: string
{
    case SaleInvoice = "sale_invoice";
    case PurchaseInvoice = "purchase_invoice";
}
