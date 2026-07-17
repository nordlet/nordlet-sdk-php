<?php

namespace Nordlet\Bank\Types;

enum PostV1BankSettlementsGetResponseStatus: string
{
    case Imported = "imported";
    case Posted = "posted";
}
