<?php

namespace Nordlet\Consolidation\Types;

enum PostV1ConsolidationGroupsGetResponseMembersItemMethod: string
{
    case Full = "full";
    case Proportional = "proportional";
    case Equity = "equity";
}
