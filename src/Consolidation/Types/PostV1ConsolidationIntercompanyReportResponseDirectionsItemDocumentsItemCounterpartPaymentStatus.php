<?php

namespace Nordlet\Consolidation\Types;

enum PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemCounterpartPaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
