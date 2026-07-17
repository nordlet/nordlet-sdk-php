<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesUpdateResponseStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
