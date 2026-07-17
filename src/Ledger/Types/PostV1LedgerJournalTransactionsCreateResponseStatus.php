<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerJournalTransactionsCreateResponseStatus: string
{
    case Draft = "draft";
    case Posted = "posted";
}
