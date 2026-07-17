<?php

namespace Nordlet\Bank\Types;

enum PostV1BankSettlementsImportResponseBatchesItemStatus: string
{
    case Imported = "imported";
    case Posted = "posted";
}
