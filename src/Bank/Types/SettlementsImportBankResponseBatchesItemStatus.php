<?php

namespace Nordlet\Bank\Types;

enum SettlementsImportBankResponseBatchesItemStatus: string
{
    case Imported = "imported";
    case Posted = "posted";
}
