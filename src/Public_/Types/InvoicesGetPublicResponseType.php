<?php

namespace Nordlet\Public_\Types;

enum InvoicesGetPublicResponseType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
    case Proforma = "proforma";
    case Advance = "advance";
}
