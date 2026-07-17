<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerJournalTransactionsListResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Posted = "posted";
}
