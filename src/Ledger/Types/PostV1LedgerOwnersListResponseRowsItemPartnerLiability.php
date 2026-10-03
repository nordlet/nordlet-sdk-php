<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerOwnersListResponseRowsItemPartnerLiability: string
{
    case General = "general";
    case Limited = "limited";
}
