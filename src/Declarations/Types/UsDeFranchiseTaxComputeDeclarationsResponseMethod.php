<?php

namespace Nordlet\Declarations\Types;

enum UsDeFranchiseTaxComputeDeclarationsResponseMethod: string
{
    case AuthorizedShares = "authorized-shares";
    case AssumedParValueCapital = "assumed-par-value-capital";
    case LargeCorporateFiler = "large-corporate-filer";
}
