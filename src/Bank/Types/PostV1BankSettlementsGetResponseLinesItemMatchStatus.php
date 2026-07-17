<?php

namespace Nordlet\Bank\Types;

enum PostV1BankSettlementsGetResponseLinesItemMatchStatus: string
{
    case Unmatched = "unmatched";
    case Matched = "matched";
    case Manual = "manual";
}
