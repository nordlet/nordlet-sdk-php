<?php

namespace Nordlet\Bank\Types;

enum PostV1BankSettlementsPostResponseStatus: string
{
    case Imported = "imported";
    case Posted = "posted";
}
