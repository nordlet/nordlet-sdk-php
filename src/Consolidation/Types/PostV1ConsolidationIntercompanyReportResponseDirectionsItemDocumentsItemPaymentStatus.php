<?php

namespace Nordlet\Consolidation\Types;

enum PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemPaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
