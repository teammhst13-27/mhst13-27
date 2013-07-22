/**
 * @Project NUKEVIET 3.x
 * @Author  VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2012 VINADES.,JSC. All rights reserved
 * @Createdate 3-13-2010 15:24
 */

var nv_aryDayName = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
var nv_aryDayNS = nv_aryDayNS = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
var nv_aryMonth = nv_aryMonth = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
var nv_aryMS = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
var nv_admlogout_confirm = new Array('Are you sure to logout from administrator account?', 'The entire login information has been deleted. You have been logout Administrator account successfully');
var nv_is_del_confirm = new Array('Are you sure to delete? If you accept,all data will be deleted. You could not restore them', 'Delete succesfully', 'Delete data faile for some unknown reason');
var nv_is_change_act_confirm = new Array('Are you sure to \'change\'?', 'Be \'Change\' successfully', ' \'Change\' fail');
var nv_is_empty_confirm = new Array('Are you sure to  be \'empty\'?', 'Be \'empty\' succesful', 'Be \'empty\' fail for some unknown reason');
var nv_is_recreate_confirm = new Array('Are you sure to \'repair\'?', 'Be \'Repair\' succesfully', '\'Repair\' fail for some unknown reason');
var nv_is_add_user_confirm = new Array('Are you sure to add new member into group?', '\'Add\' new member into group successfully', ' \'Add \' fail for some unknown reason');
var nv_is_exclude_user_confirm = new Array('Are you sure to exclude this member?', '\'Exclude\' member successfully', ' \'Exclude\  member fail for some unknown reason');

var nv_formatString = "dd.mm.yyyy";
var nv_gotoString = "Go To Current Month";
var nv_todayString = "Today is";
var nv_weekShortString = "Wk";
var nv_weekString = "calendar week";
var nv_scrollLeftMessage = "Click to scroll to previous month. Hold mouse button to scroll automatically.";
var nv_scrollRightMessage = "Click to scroll to next month. Hold mouse button to scroll automatically.";
var nv_selectMonthMessage = "Click to select a month.";
var nv_selectYearMessage = "Click to select a year.";
var nv_selectDateMessage = "Select [date] as date.";

var nv_loadingText = "Loading...";
var nv_loadingTitle = "Click to cancel";
var nv_focusTitle = "Click to bring to front";
var nv_fullExpandTitle = "Expand to actual size (f)";
var nv_restoreTitle = "Click to close image, click and drag to move. Use arrow keys for next and previous.";

var nv_error_login = "Error: You haven't fill your account or account information incorrect. Account include Latin characters, numbers, underscore. Max characters is [max], min characters is [min]";
var nv_error_password = "Error: You haven't fill your password or password information incorrect. Password include Latin characters, numbers, underscore. Max characters is [max], min characters is [min]";
var nv_error_email = "Error: You haven't fill your email address or email address incorrect.";
var nv_error_seccode = "Error: You haven't fill anti spam secure code or anti spam secure code you fill incorrect. Anti spam secure code is a sequense of number [num] characters display in image.";
var nv_login_failed = "Error: For some reasons, system doesn't accept your account. Try again.";
var nv_content_failed = "Error: For some reasons, system doesn't accept content Try again.";

//contact
var nv_fullname = "Full name entered is not valid.";
var nv_title = "Title not valid.";
var nv_content = "The content is not empty.";
var nv_code = "Capcha not valid.";

//ErrorMessage
var NVJL = [];
NVJL.errorRequest = "There was an error with the request.";
NVJL.errortimeout = "The request timed out.";
NVJL.errornotmodified = "The request was not modified but was not retrieved from the cache.";
NVJL.errorparseerror = "XML/Json format is bad.";
NVJL.error304 = "Not modified. The client requests a document that is already in its cache and the document has not been modified since it was cached. The client uses the cached copy of the document, instead of downloading it from the server.";
NVJL.error400 = "Bad Request. The request was invalid.";
NVJL.error401 = "Access denied.";
NVJL.error403 = "Forbidden. The request is understood, but it has been refused.";
NVJL.error404 = "Not Found. The URI requested is invalid or the resource requested does not exists.";
NVJL.error406 = "Not Acceptable. Client browser does not accept the MIME type of the requested page.";
NVJL.error500 = "Internal server error. You see this error message for a wide variety of server-side errors.";
NVJL.error502 = "Bad Gateway. Web server received an invalid response while acting as a gateway or proxy. You receive this error message when you try to run a CGI script that does not return a valid set of HTTP headers.";
NVJL.error503 = "Service Unavailable."; 