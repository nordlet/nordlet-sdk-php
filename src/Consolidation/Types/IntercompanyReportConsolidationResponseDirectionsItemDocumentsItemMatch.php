<?php

namespace Nordlet\Consolidation\Types;

enum IntercompanyReportConsolidationResponseDirectionsItemDocumentsItemMatch: string
{
    case Mirrored = "mirrored";
    case MatchedByNumber = "matched_by_number";
    case Missing = "missing";
}
