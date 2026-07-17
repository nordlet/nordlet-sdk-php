<?php

namespace Nordlet\Bank\Types;

enum PostV1BankTransactionsListResponseRowsItemStatus: string
{
    case New_ = "new";
    case Matched = "matched";
}
