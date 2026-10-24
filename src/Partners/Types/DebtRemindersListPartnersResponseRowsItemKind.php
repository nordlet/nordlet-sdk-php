<?php

namespace Nordlet\Partners\Types;

enum DebtRemindersListPartnersResponseRowsItemKind: string
{
    case BeforeDue = "before_due";
    case Overdue = "overdue";
}
