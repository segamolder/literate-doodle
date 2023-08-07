<?php

namespace Enums;

enum SenderType: string
{
    case SMS = 'sms';
    case EMAIL = 'email';
    case TELEGRAM = 'telegram';
}
