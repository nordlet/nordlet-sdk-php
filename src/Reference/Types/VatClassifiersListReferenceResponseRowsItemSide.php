<?php

namespace Nordlet\Reference\Types;

enum VatClassifiersListReferenceResponseRowsItemSide: string
{
    case Sale = "sale";
    case Purchase = "purchase";
    case Both = "both";
}
