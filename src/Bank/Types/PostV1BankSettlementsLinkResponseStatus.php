<?php

namespace Nordlet\Bank\Types;

enum PostV1BankSettlementsLinkResponseStatus: string
{
    case Imported = "imported";
    case Posted = "posted";
}
