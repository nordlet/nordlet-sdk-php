<?php

namespace Nordlet\Bank\Types;

enum PostV1BankTransactionsRecordRequestDocumentType: string
{
    case SaleInvoice = "sale_invoice";
    case PurchaseInvoice = "purchase_invoice";
}
