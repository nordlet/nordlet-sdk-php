<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerJournalTransactionsGetResponseStatus: string
{
    case Draft = "draft";
    case Posted = "posted";
}
