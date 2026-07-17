<?php

namespace Nordlet\Bank\Types;

enum PostV1BankSettlementsListResponseRowsItemStatus: string
{
    case Imported = "imported";
    case Posted = "posted";
}
