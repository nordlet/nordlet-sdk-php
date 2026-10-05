<?php

namespace Nordlet\Declarations\Types;

enum AnnualAccountsGetDeclarationsResponseApprovalDistributionsItemKind: string
{
    case Dividend = "dividend";
    case InterimDividend = "interim_dividend";
    case Other = "other";
}
