<?php

namespace Nordlet\Bank\Types;

enum PostV1BankTransactionsListRequestSortItemDir: string
{
    case Asc = "asc";
    case Desc = "desc";
}
