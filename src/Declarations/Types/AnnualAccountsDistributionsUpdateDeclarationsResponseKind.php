<?php

namespace Nordlet\Declarations\Types;

enum AnnualAccountsDistributionsUpdateDeclarationsResponseKind: string
{
    case Dividend = "dividend";
    case InterimDividend = "interim_dividend";
    case Other = "other";
}
