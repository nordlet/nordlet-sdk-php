<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersVatReviewsListResponseRowsItemStatus: string
{
    case Open = "open";
    case Resolved = "resolved";
}
