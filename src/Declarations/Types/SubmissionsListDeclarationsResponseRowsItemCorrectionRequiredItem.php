<?php

namespace Nordlet\Declarations\Types;

enum SubmissionsListDeclarationsResponseRowsItemCorrectionRequiredItem: string
{
    case Reason = "reason";
    case ReasonCode = "reasonCode";
    case AuthorityReference = "authorityReference";
    case DiscoveredOn = "discoveredOn";
}
