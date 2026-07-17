<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerAccountsListRequestSortItemDir: string
{
    case Asc = "asc";
    case Desc = "desc";
}
