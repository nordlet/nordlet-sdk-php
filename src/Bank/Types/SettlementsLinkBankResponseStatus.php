<?php

namespace Nordlet\Bank\Types;

enum SettlementsLinkBankResponseStatus: string
{
    case Imported = "imported";
    case Posted = "posted";
}
