<?php

namespace Nordlet\Bank\Types;

enum PostV1BankSettlementsUnlinkResponseStatus: string
{
    case Imported = "imported";
    case Posted = "posted";
}
