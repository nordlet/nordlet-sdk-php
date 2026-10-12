<?php

namespace Nordlet\Sales\Types;

enum InvoiceTemplatesUpdateSalesRequestDocumentType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
