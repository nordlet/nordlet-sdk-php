<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesListResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
