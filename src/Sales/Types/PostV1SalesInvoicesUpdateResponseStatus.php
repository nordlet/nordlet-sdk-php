<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesUpdateResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
