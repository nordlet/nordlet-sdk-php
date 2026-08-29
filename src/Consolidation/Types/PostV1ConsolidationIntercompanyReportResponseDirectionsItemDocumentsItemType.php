<?php

namespace Nordlet\Consolidation\Types;

enum PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
