<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesUnlockResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
