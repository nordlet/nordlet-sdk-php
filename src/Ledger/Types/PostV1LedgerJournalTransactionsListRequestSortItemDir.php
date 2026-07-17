<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerJournalTransactionsListRequestSortItemDir: string
{
    case Asc = "asc";
    case Desc = "desc";
}
