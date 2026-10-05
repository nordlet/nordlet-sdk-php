<?php

namespace Nordlet\Consolidation\Types;

enum ReportConsolidationResponseMembersItemMethod: string
{
    case Full = "full";
    case Proportional = "proportional";
    case Equity = "equity";
}
