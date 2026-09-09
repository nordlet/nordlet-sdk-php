<?php

namespace Nordlet\Sales\Types;

enum PostV1DocumentSeriesCreateRequestDocumentType: string
{
    case SaleInvoice = "sale_invoice";
    case SaleCreditNote = "sale_credit_note";
    case SaleProforma = "sale_proforma";
    case SaleAdvance = "sale_advance";
}
