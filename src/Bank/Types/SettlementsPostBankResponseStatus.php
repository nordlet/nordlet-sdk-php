<?php

namespace Nordlet\Bank\Types;

enum SettlementsPostBankResponseStatus: string
{
    case Imported = "imported";
    case Posted = "posted";
}
