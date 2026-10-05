<?php

namespace Nordlet\Declarations\Types;

enum AnnualAccountsDistributionsCreateDeclarationsResponseKind: string
{
    case Dividend = "dividend";
    case InterimDividend = "interim_dividend";
    case Other = "other";
}
