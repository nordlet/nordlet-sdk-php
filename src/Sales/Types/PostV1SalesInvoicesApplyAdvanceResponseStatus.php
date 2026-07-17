<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesApplyAdvanceResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
