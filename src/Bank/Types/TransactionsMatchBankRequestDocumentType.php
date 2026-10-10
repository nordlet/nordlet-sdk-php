<?php

namespace Nordlet\Bank\Types;

enum TransactionsMatchBankRequestDocumentType: string
{
    case SaleInvoice = "sale_invoice";
    case PurchaseInvoice = "purchase_invoice";
    case PayrollRun = "payroll_run";
}
