<?php

namespace Nordlet\Consolidation\Types;

enum PostV1ConsolidationReportResponseMembersItemMethod: string
{
    case Full = "full";
    case Proportional = "proportional";
    case Equity = "equity";
}
