<?php

namespace Nordlet\Sales\Types;

enum PostV1OperationTypesUpdateResponseInvoiceType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
    case Proforma = "proforma";
    case Advance = "advance";
}
