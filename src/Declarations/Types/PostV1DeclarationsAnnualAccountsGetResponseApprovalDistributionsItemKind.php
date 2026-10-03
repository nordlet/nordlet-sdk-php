<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsAnnualAccountsGetResponseApprovalDistributionsItemKind: string
{
    case Dividend = "dividend";
    case InterimDividend = "interim_dividend";
    case Other = "other";
}
