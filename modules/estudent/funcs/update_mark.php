<?php

/**
 * @Project NUKEVIET 3.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2012 VINADES.,JSC. All rights reserved
 * @Createdate 2-10-2010 18:49
 */

//p($userData['type']);
if( ! defined( 'NV_IS_MOD_ESTUDENT' ) || $userData['type'] != 'teacher'  || !in_array($userData['teacher_type'], array(1,2,3)) ) die( 'Stop!!!' );

$std_id = $nv_Request->get_int( 'stdid', 'post,get', 0 );
$class_id = $nv_Request->get_int( 'class_id', 'post,get', 0 );
$value = $nv_Request->get_int( 'value', 'post,get', 0 );


$sql = "SELECT `student_id`, `faculty_id`, `year`, `study_result` FROM `" . NV_PREFIXLANG . "_" . $module_data . "_student` WHERE ( `class_ids`='" . $class_id . "' OR `class_ids` REGEXP '^" . $class_id . "\\\,' OR `class_ids` REGEXP '\\\," . $class_id . "\\\,' OR `class_ids` REGEXP '\\\," . $class_id . "\$') AND `student_id`=" . $std_id;

$result = $db->sql_query( $sql );

$stt = 'not';
	
if( $db->sql_numrows( $result ) > 0 )
{
	$student = $db->sql_fetchrow( $result );
	$std_result = $student['study_result'];
	if( empty($std_result)) $std_result = array();
	else $std_result = unserialize($std_result);
	$std_result[$class_id] = $value;
	$std_result = serialize($std_result);
	
	$sql = "UPDATE `" . NV_PREFIXLANG . "_" . $module_data . "_student` SET
	`study_result`=" . $db->dbescape($std_result) . "
	WHERE `student_id`=" . $student['student_id'];
	//die();
	
	if($db->sql_query( $sql ))
	{
		$sql = "UPDATE `" . NV_PREFIXLANG . "_" . $module_data . "_student_" . $student['faculty_id'] . "_" . $student['year'] . "` SET
	`study_result`=" . $db->dbescape($std_result) . "
	WHERE `student_id`=" . $student['student_id'];
		$result = $db->sql_query( $sql );
		$stt = 'ok_' . $student['student_id'];
	}
	else $stt = 'not';
}
/*
include ( NV_ROOTDIR . '/includes/header.php' );
echo nv_site_theme( '' );
include ( NV_ROOTDIR . '/includes/footer.php' );*/
echo $stt;
exit();

?>