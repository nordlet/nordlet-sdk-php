<?php

namespace Nordlet\DocumentSeries\Types;

enum UpdateDocumentSeriesRequestDocumentType: string
{
    case SaleInvoice = "sale_invoice";
    case SaleCreditNote = "sale_credit_note";
    case SaleProforma = "sale_proforma";
    case SaleAdvance = "sale_advance";
}
