<?php

namespace Nordlet\Consolidation\Types;

enum IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
