<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesCreateResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
