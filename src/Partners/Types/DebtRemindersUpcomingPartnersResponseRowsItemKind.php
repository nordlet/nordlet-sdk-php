<?php

namespace Nordlet\Partners\Types;

enum DebtRemindersUpcomingPartnersResponseRowsItemKind: string
{
    case BeforeDue = "before_due";
    case Overdue = "overdue";
}
