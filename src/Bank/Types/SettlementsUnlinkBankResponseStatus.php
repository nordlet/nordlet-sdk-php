<?php

namespace Nordlet\Bank\Types;

enum SettlementsUnlinkBankResponseStatus: string
{
    case Imported = "imported";
    case Posted = "posted";
}
