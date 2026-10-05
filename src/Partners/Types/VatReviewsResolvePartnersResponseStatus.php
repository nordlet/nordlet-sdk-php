<?php

namespace Nordlet\Partners\Types;

enum VatReviewsResolvePartnersResponseStatus: string
{
    case Open = "open";
    case Resolved = "resolved";
}
