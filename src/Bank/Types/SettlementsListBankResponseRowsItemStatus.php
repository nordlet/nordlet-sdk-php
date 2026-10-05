<?php

namespace Nordlet\Bank\Types;

enum SettlementsListBankResponseRowsItemStatus: string
{
    case Imported = "imported";
    case Posted = "posted";
}
