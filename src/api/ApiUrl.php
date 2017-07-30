<?php
/**
 * User: Jiawei
 * Date: 2017/7/29
 * Time: 10:06
 */

namespace JiaweiXS\WeApp\Api;

class ApiUrl{

	//get session_key and access_token by appid and secret
	const SESSION_KEY = 'https://api.weixin.qq.com/sns/jscode2session';
	const ACCESS_TOKEN = 'https://api.weixin.qq.com/cgi-bin/token';

	//get template from library
	const TEMPLATE_MSG_LIST_FORM_LIB = 'https://api.weixin.qq.com/cgi-bin/wxopen/template/library/list';
	const TEMPLATE_MSG_GET_FORM_LIB = 'https://api.weixin.qq.com/cgi-bin/wxopen/template/library/get';

	//manage the weapp's message template
	const TEMPLATE_MSG_ADD = 'https://api.weixin.qq.com/cgi-bin/wxopen/template/add';
	const TEMPLATE_MSG_LIST = 'https://api.weixin.qq.com/cgi-bin/wxopen/template/list';
	const TEMPLATE_MSG_DEL = 'https://api.weixin.qq.com/cgi-bin/wxopen/template/del';

	//send template message
	const TEMPLATE_MSG_SEND = 'https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send';

	//message in custom service
	const CUSTOM_MSG_SEND = 'https://api.weixin.qq.com/cgi-bin/message/custom/send';

	//get qrcode of weapp
	const GET_APP_CODE_A = 'https://api.weixin.qq.com/wxa/getwxacode';
	const GET_APP_CODE_B = 'http://api.weixin.qq.com/wxa/getwxacodeunlimit';
	const GET_QR_CODE_C = 'https://api.weixin.qq.com/cgi-bin/wxaapp/createwxaqrcode';

	//statistic
	const STATISTIC_ABOUT = 'https://api.weixin.qq.com/datacube/getweanalysisappiddailysummarytrend';
	const STATISTIC_VISIT_DAILY = 'https://api.weixin.qq.com/datacube/getweanalysisappiddailyvisittrend';
	const STATISTIC_VISIT_WEEKLY = 'https://api.weixin.qq.com/datacube/getweanalysisappidweeklyvisittrend';
	const STATISTIC_VISIT_MONTHLY = 'https://api.weixin.qq.com/datacube/getweanalysisappidmonthlyvisittrend';
	const STATISTIC_VISIT_DISTRIBUTION = 'https://api.weixin.qq.com/datacube/getweanalysisappidvisitdistribution';
	const STATISTIC_VISIT_RETAIN_DAILY = 'https://api.weixin.qq.com/datacube/getweanalysisappiddailyretaininfo';
	const STATISTIC_VISIT_RETAIN_WEEKLY = 'https://api.weixin.qq.com/datacube/getweanalysisappidweeklyretaininfo';
	const STATISTIC_VISIT_RETAIN_MONTHLY = 'https://api.weixin.qq.com/datacube/getweanalysisappidmonthlyretaininfo';
	const STATISTIC_VISIT_PAGE = 'https://api.weixin.qq.com/datacube/getweanalysisappidvisitpage';
	const STATISTIC_VISIT_USERS_FEATURE = 'https://api.weixin.qq.com/datacube/getweanalysisappiduserportrait';

}