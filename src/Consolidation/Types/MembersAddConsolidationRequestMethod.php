<?php

namespace Nordlet\Consolidation\Types;

enum MembersAddConsolidationRequestMethod: string
{
    case Full = "full";
    case Proportional = "proportional";
    case Equity = "equity";
}
