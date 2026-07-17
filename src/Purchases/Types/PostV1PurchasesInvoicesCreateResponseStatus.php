<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesCreateResponseStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
