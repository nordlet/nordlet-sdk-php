<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesRegisterResponseStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
