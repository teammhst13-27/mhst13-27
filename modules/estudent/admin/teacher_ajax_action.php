<?php

/**
 * @Project NUKEVIET 3.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2012 VINADES.,JSC. All rights reserved
 * @Createdate 2-10-2010 18:49
 */

if( ! defined( 'NV_IS_FILE_ADMIN' ) ) die( 'Stop!!!' );

$listid = $nv_Request->get_string( 'listid', 'post', '' );
$action = $nv_Request->get_string( 'action', 'post', '' );

if( !empty($listid) )
{
	if( $action == 'delete' )
	{		
		$sql = "DELETE FROM `" . NV_PREFIXLANG . "_" . $module_data . "_teacher` WHERE `teacher_id` IN (" . $listid . ")";
		if($db->sql_query( $sql ))
		{
			$contents = "OK_" . $lang['action_ok'];
		}
		else $contents = "NOT_" . $lang['action_not'];
	}
	elseif( $action == 'status' )
	{
		$sql = "SELECT `status` FROM `" . NV_PREFIXLANG . "_" . $module_data . "_teacher` WHERE `teacher_id`=" . intval($listid);
		$result = $db->sql_query( $sql );
		$numrows = $db->sql_numrows( $result );
		if( $numrows != 1 ) die( 'NO_' . $listid );
		
		$new_status = $nv_Request->get_bool( 'new_status', 'post' );
		$new_status = ( int )$new_status;
		
		$sql = "UPDATE `" . NV_PREFIXLANG . "_" . $module_data . "_teacher` SET `status`=" . $new_status . " WHERE `teacher_id`=" . intval($listid);
		$db->sql_query( $sql );
		if($db->sql_query( $sql ))
		{
			$contents = "OK_" . $lang['action_ok'];
			nv_del_moduleCache( $module_name );
		}
		else $contents = "NOT_" . $lang['action_not'];
	}
}
else $contents = "NOT_" . $lang['action_not'];

include ( NV_ROOTDIR . '/includes/header.php' );
echo $contents;
include ( NV_ROOTDIR . '/includes/footer.php' );

?>