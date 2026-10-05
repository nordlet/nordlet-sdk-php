<?php

namespace Nordlet\Bank\Types;

enum SettlementsGetBankResponseStatus: string
{
    case Imported = "imported";
    case Posted = "posted";
}
