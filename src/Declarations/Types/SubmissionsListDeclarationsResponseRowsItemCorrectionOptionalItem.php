<?php

namespace Nordlet\Declarations\Types;

enum SubmissionsListDeclarationsResponseRowsItemCorrectionOptionalItem: string
{
    case Reason = "reason";
    case ReasonCode = "reasonCode";
    case AuthorityReference = "authorityReference";
    case DiscoveredOn = "discoveredOn";
}
