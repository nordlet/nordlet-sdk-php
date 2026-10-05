<?php

namespace Nordlet\Consolidation\Types;

enum IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemPaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
