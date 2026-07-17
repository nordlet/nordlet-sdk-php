<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesGetResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
