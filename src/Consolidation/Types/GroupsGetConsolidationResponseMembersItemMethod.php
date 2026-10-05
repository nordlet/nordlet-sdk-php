<?php

namespace Nordlet\Consolidation\Types;

enum GroupsGetConsolidationResponseMembersItemMethod: string
{
    case Full = "full";
    case Proportional = "proportional";
    case Equity = "equity";
}
