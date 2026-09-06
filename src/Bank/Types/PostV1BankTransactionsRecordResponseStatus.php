<?php

namespace Nordlet\Bank\Types;

enum PostV1BankTransactionsRecordResponseStatus: string
{
    case New_ = "new";
    case Matched = "matched";
}
