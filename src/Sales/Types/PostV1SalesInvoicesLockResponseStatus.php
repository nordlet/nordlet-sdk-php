<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesLockResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
