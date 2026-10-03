<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerOwnersUpdateRequestPartnerLiability: string
{
    case General = "general";
    case Limited = "limited";
}
