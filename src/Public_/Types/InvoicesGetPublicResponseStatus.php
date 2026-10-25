<?php

namespace Nordlet\Public_\Types;

enum InvoicesGetPublicResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
