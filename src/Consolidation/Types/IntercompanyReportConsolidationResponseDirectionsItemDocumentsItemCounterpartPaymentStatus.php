<?php

namespace Nordlet\Consolidation\Types;

enum IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemCounterpartPaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
