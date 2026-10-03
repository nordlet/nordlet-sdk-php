<?php

namespace Nordlet\Ledger\Types;

enum PostV1OfficersCreateResponseRole: string
{
    case Director = "director";
    case ManagingDirector = "managing_director";
    case BoardMember = "board_member";
    case BoardChair = "board_chair";
    case SupervisoryBoardMember = "supervisory_board_member";
    case Secretary = "secretary";
    case Representative = "representative";
    case Liquidator = "liquidator";
}
