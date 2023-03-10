<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ASSIGNED_TO_ID' => '??????????????????????????(????)-ID',
    'LBL_ASSIGNED_TO_NAME' => '??????????????????????????(????)',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '???????? ????????????????',
    'LBL_DATE_MODIFIED' => '???????? ??????????????????',
    'LBL_MODIFIED' => '????????????????',
    'LBL_MODIFIED_NAME' => '????????????????',
    'LBL_CREATED' => '??????????????',
    'LBL_DESCRIPTION' => '????????????????',
    'LBL_DELETED' => '??????????????',
    'LBL_NAME' => '????????????????',
    'LBL_SAVING' => '????????????????????...',
    'LBL_SAVED' => '??????????????????',
    'LBL_CREATED_USER' => '??????????????',
    'LBL_MODIFIED_USER' => '????????????????',
    'LBL_LIST_FORM_TITLE' => '?????????? ??????????????',
    'LBL_MODULE_NAME' => '?????????? ??????????????',
    'LBL_MODULE_TITLE' => '?????????? ??????????????',
    'LBL_DASHLET_DISABLED' => '????????????????: ?????????? ?????????????? ??????????????????, ?????????? ?????????????? ???? ?????????? ???????????????????????? ?? ??????????????',
    'LBL_RECORDS_DELETED' => '?????? ???????????? ?????????? ?????????????? ???????? ??????????????, ???????? ?????????? ?????????????? ????????????????, ?????????? ?????????????? ?????????? ???????????????????????? ?? ?????????????? ??????????????????????????.',
    'LBL_CONFIRM_DELETE_RECORDS' => '???? ?????????????????????????? ???????????? ?????????????? ?????? ???????????? ???? ?????????? ???????????????',
    'LBL_FLUSH_RECORDS' => '???????????????? ?????????? ??????????????',
    'LBL_ENABLE_FEED' => '???????????????? ?????????? ??????????????',
    'LBL_ENABLE_MODULE_LIST' => '???????????????? ?????? ?????????????????? ??????????????',
    'LBL_HOMEPAGE_TITLE' => '?????????? ??????????????',
    'LNK_NEW_RECORD' => '?????????????? ??????????????',
    'LNK_LIST' => '?????????? ??????????????',
    'LBL_SEARCH_FORM_TITLE' => '?????????? ??????????????',
    'LBL_HISTORY_SUBPANEL_TITLE' => '???????????????? ??????????????',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '??????????????????????',
    'LBL_NEW_FORM_TITLE' => '?????????? ??????????????',
    'LBL_ALL' => '??????',
    'LBL_USER_FEED' => '???????????????????????????????? ????????????',
    'LBL_ENABLE_USER_FEED' => '???????????????? ???????????????????????????????? ????????????',
    'LBL_TO' => '?????????????? ?????? ????????????',
    'LBL_IS' => ':',
    'LBL_DONE' => '????????????',
    'LBL_TITLE' => '??????????????????:',
    'LBL_ROWS' => '???????????????????? ??????????:',
    'LBL_CATEGORIES' => '???????????????????????????? ????????????:',
    'LBL_TIME_LAST_WEEK' => '???? ?????????????? ????????????',
    'LBL_TIME_WEEKS' => '????????????',
    'LBL_TIME_DAY' => '????????', // PR 6080
    'LBL_TIME_DAYS' => '????????',
    'LBL_TIME_YESTERDAY' => '??????????',
    'LBL_TIME_HOURS' => '??????.',
    'LBL_TIME_HOUR' => '??????',
    'LBL_TIME_MINUTES' => '??????.',
    'LBL_TIME_MINUTE' => '????????????',
    'LBL_TIME_SECONDS' => '??????.',
    'LBL_TIME_SECOND' => '??????????????',
    'LBL_TIME_AND' => '??',
    'LBL_TIME_AGO' => '??????????',
// Activity stream
    'CREATED_CONTACT' => '????????????(??) <b>??????????</b> {0}',
    'CREATED_OPPORTUNITY' => '????????????(??) <b>??????????</b> {0}',
    'CREATED_CASE' => '????????????(??) <b>??????????</b> {0}',
    'CREATED_LEAD' => '????????????(??) <b>??????????</b> {0}',
    'FOR' => '??????', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for opportunity
    'CLOSED_CASE' => '<b>????????????</b> {0} ',
    'CONVERTED_LEAD' => '<b>????????????????????????</b> {0}',
    'WON_OPPORTUNITY' => '<b>???????????? ?? ??????????????</b> {0}',
    'WITH' => '??',

    'LBL_LINK_TYPE_Link' => '????????????',
    'LBL_LINK_TYPE_Image' => '??????????????????????',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => '??????????????',
    'LBL_POST' => '????????????????????????',
    'LBL_AUTHENTICATE' => '?????????????????? ??',
    'LBL_AUTHENTICATION_PENDING' => '???? ??????, ?????????????????? ????????, ?????????????? ???????????? ???????????? ????????????????????????????. ???????????????? \'????????????????\' ?????? ???????????????? ?? ???????? ????????????????, ?????????? ?????????????????????????????????? ?????????????? ?????????????? ????????????, ?????? ???????????????? \'????\' ?????? ?????????????????????? ?????? ????????????????????????????.',
    'LBL_ADVANCED_SEARCH' => '?????????????????????? ????????????' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => '??????. ??????????????????',
    'LBL_HIDE_OPTIONS' => '???????????? ??????????????????',
    'LBL_VIEW' => '????????????????????',
    'LBL_POST_TITLE' => '???????????????????? ?????????????????? ?????????????????????????? ',
    'LBL_URL_LINK_TITLE' => '?????????? ?????????????? ?????? ???????????? ???? ??????????????????????',
);
