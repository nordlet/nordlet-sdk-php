<?php

namespace Nordlet\Bank\Types;

enum PostV1BankMandatesListResponseRowsItemStatus: string
{
    case Active = "active";
    case Cancelled = "cancelled";
    case Completed = "completed";
}
