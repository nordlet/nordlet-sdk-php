<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerPeriodsListResponseRowsItemStatus: string
{
    case Open = "open";
    case Locked = "locked";
}
