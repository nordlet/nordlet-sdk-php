<?php

namespace Nordlet\Consolidation\Types;

enum PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItemMatch: string
{
    case Mirrored = "mirrored";
    case MatchedByNumber = "matched_by_number";
    case Missing = "missing";
}
