<?php

namespace Nordlet\Declarations\Types;

enum EuDigitalReportingListDeclarationsResponseTransactionsItemDocumentType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
