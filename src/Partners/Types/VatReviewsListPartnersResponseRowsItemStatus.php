<?php

namespace Nordlet\Partners\Types;

enum VatReviewsListPartnersResponseRowsItemStatus: string
{
    case Open = "open";
    case Resolved = "resolved";
}
