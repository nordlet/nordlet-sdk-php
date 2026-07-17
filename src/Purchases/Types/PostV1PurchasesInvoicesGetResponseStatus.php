<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesGetResponseStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
