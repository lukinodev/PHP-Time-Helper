<?php
/**
 * Time helper
 *
 * PHP Helper for time operations in SECONDS.
 *
 * Please note that these values are approximate.
 * For example, ONE_MONTH wrongly assumes every month has 30 days
 * and ONE_YEAR does not take leap years into account.
 *
 * @package    time_helper
 * @copyright  Copyright (c) 2020 Lukino
 * @author     Lukino
 * @link       https://github.com/lukinodev
 * @version    1.0
 * @filesource
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

#
# Seconds
#
defined('SECOND')        OR define('SECOND',        1);
defined('ONE_SECOND')    OR define('ONE_SECOND',    1 * SECOND);
defined('TWO_SECONDS')   OR define('TWO_SECONDS',   2 * ONE_SECOND);
defined('THREE_SECONDS') OR define('THREE_SECONDS', 3 * ONE_SECOND);
defined('FOUR_SECONDS')  OR define('FOUR_SECONDS',  4 * ONE_SECOND);
defined('FIVE_SECONDS')  OR define('FIVE_SECONDS',  5 * ONE_SECOND);
defined('SIX_SECONDS')   OR define('SIX_SECONDS',   6 * ONE_SECOND);
defined('SEVEN_SECONDS') OR define('SEVEN_SECONDS', 7 * ONE_SECOND);
defined('EIGHT_SECONDS') OR define('EIGHT_SECONDS', 8 * ONE_SECOND);
defined('NINE_SECONDS')  OR define('NINE_SECONDS',  9 * ONE_SECOND);
defined('TEN_SECONDS')   OR define('TEN_SECONDS',   10 * ONE_SECOND);

#
# Minutes
#
defined('MINUTE')        OR define('MINUTE',        60 * ONE_SECOND);
defined('ONE_MINUTE')    OR define('ONE_MINUTE',    1 * MINUTE);
defined('TWO_MINUTES')   OR define('TWO_MINUTES',   2 * ONE_MINUTE);
defined('THREE_MINUTES') OR define('THREE_MINUTES', 3 * ONE_MINUTE);
defined('FOUR_MINUTES')  OR define('FOUR_MINUTES',  4 * ONE_MINUTE);
defined('FIVE_MINUTES')  OR define('FIVE_MINUTES',  5 * ONE_MINUTE);
defined('SIX_MINUTES')   OR define('SIX_MINUTES',   6 * ONE_MINUTE);
defined('SEVEN_MINUTES') OR define('SEVEN_MINUTES', 7 * ONE_MINUTE);
defined('EIGHT_MINUTES') OR define('EIGHT_MINUTES', 8 * ONE_MINUTE);
defined('NINE_MINUTES')  OR define('NINE_MINUTES',  9 * ONE_MINUTE);
defined('TEN_MINUTES')   OR define('TEN_MINUTES',   10 * ONE_MINUTE);

#
# Hours
#
defined('HOUR')          OR define('HOUR',        60 * ONE_MINUTE);
defined('ONE_HOUR')      OR define('ONE_HOUR',    1 * HOUR);
defined('TWO_HOURS')     OR define('TWO_HOURS',   2 * ONE_HOUR);
defined('THREE_HOURS')   OR define('THREE_HOURS', 3 * ONE_HOUR);
defined('FOUR_HOURS')    OR define('FOUR_HOURS',  4 * ONE_HOUR);
defined('FIVE_HOURS')    OR define('FIVE_HOURS',  5 * ONE_HOUR);
defined('SIX_HOURS')     OR define('SIX_HOURS',   6 * ONE_HOUR);
defined('SEVEN_HOURS')   OR define('SEVEN_HOURS', 7 * ONE_HOUR);
defined('EIGHT_HOURS')   OR define('EIGHT_HOURS', 8 * ONE_HOUR);
defined('NINE_HOURS')    OR define('NINE_HOURS',  9 * ONE_HOUR);
defined('TEN_HOURS')     OR define('TEN_HOURS',   10 * ONE_HOUR);

#
# Days
#
defined('DAY')           OR define('DAY',        TEN_HOURS + TEN_HOURS + FOUR_HOURS);
defined('ONE_DAY')       OR define('ONE_DAY',    1 * DAY);
defined('TWO_DAYS')      OR define('TWO_DAYS',   2 * ONE_DAY);
defined('THREE_DAYS')    OR define('THREE_DAYS', 3 * ONE_DAY);
defined('FOUR_DAYS')     OR define('FOUR_DAYS',  4 * ONE_DAY);
defined('FIVE_DAYS')     OR define('FIVE_DAYS',  5 * ONE_DAY);
defined('SIX_DAYS')      OR define('SIX_DAYS',   6 * ONE_DAY);
defined('SEVEN_DAYS')    OR define('SEVEN_DAYS', 7 * ONE_DAY);
defined('EIGHT_DAYS')    OR define('EIGHT_DAYS', 8 * ONE_DAY);
defined('NINE_DAYS')     OR define('NINE_DAYS',  9 * ONE_DAY);
defined('TEN_DAYS')      OR define('TEN_DAYS',   10 * ONE_DAY);

#
# Weeks
#
defined('WEEK')          OR define('WEEK',        SEVEN_DAYS);
defined('ONE_WEEK')      OR define('ONE_WEEK',    1 * WEEK);
defined('TWO_WEEKS')     OR define('TWO_WEEKS',   2 * ONE_WEEK);
defined('THREE_WEEKS')   OR define('THREE_WEEKS', 3 * ONE_WEEK);
defined('FOUR_WEEKS')    OR define('FOUR_WEEKS',  4 * ONE_WEEK);
defined('FIVE_WEEKS')    OR define('FIVE_WEEKS',  5 * ONE_WEEK);
defined('SIX_WEEKS')     OR define('SIX_WEEKS',   6 * ONE_WEEK);
defined('SEVEN_WEEKS')   OR define('SEVEN_WEEKS', 7 * ONE_WEEK);
defined('EIGHT_WEEKS')   OR define('EIGHT_WEEKS', 8 * ONE_WEEK);
defined('NINE_WEEKS')    OR define('NINE_WEEKS',  9 * ONE_WEEK);
defined('TEN_WEEKS')     OR define('TEN_WEEKS',   10 * ONE_WEEK);

#
# Months
#
defined('MONTH')         OR define('MONTH',        FOUR_WEEKS);
defined('ONE_MONTH')     OR define('ONE_MONTH',    1 * MONTH);
defined('TWO_MONTHS')    OR define('TWO_MONTHS',   2 * ONE_MONTH);
defined('THREE_MONTHS')  OR define('THREE_MONTHS', 3 * ONE_MONTH);
defined('FOUR_MONTHS')   OR define('FOUR_MONTHS',  4 * ONE_MONTH);
defined('FIVE_MONTHS')   OR define('FIVE_MONTHS',  5 * ONE_MONTH);
defined('SIX_MONTHS')    OR define('SIX_MONTHS',   6 * ONE_MONTH);
defined('SEVEN_MONTHS')  OR define('SEVEN_MONTHS', 7 * ONE_MONTH);
defined('EIGHT_MONTHS')  OR define('EIGHT_MONTHS', 8 * ONE_MONTH);
defined('NINE_MONTHS')   OR define('NINE_MONTHS',  9 * ONE_MONTH);
defined('TEN_MONTHS')    OR define('TEN_MONTHS',   10 * ONE_MONTH);

#
# Years
#
defined('YEAR')          OR define('YEAR',        TEN_MONTHS + TWO_MONTHS);
defined('ONE_YEAR')      OR define('ONE_YEAR',    1 * YEAR);
defined('TWO_YEARS')     OR define('TWO_YEARS',   2 * ONE_YEAR);
defined('THREE_YEARS')   OR define('THREE_YEARS', 3 * ONE_YEAR);
defined('FOUR_YEARS')    OR define('FOUR_YEARS',  4 * ONE_YEAR);
defined('FIVE_YEARS')    OR define('FIVE_YEARS',  5 * ONE_YEAR);
defined('SIX_YEARS')     OR define('SIX_YEARS',   6 * ONE_YEAR);
defined('SEVEN_YEARS')   OR define('SEVEN_YEARS', 7 * ONE_YEAR);
defined('EIGHT_YEARS')   OR define('EIGHT_YEARS', 8 * ONE_YEAR);
defined('NINE_YEARS')    OR define('NINE_YEARS',  9 * ONE_YEAR);
defined('TEN_YEARS')     OR define('TEN_YEARS',   10 * ONE_YEAR);

#
# Others
#
defined('DECADE')        OR define('DECADE',      TEN_YEARS);
defined('CENTURY')       OR define('CENTURY',     10 * TEN_YEARS); // 3 110 400 000 seconds
