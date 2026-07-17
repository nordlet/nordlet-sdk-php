<?php

namespace Nordlet\Bank\Types;

enum PostV1BankTransactionsMatchResponseStatus: string
{
    case New_ = "new";
    case Matched = "matched";
}
