<?php

namespace Nordlet\Sales\Types;

enum InvoiceTemplatesCreateSalesRequestDocumentType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
