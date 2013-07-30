<?php

/**
 * @Project NUKEVIET 3.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2012 VINADES.,JSC. All rights reserved
 * @createdate 12/31/2009 2:29
 */

if( ! defined( 'NV_ADMIN' ) or ! defined( 'NV_MAINFILE' ) or ! defined( 'NV_IS_MODADMIN' ) ) die( 'Stop!!!' );

$submenu['teacher'] = $lang_module['teacher_management'];
$submenu['level'] = $lang_module['level_management'];
$submenu['subject'] = $lang_module['subject_management'];
$submenu['faculty'] = $lang_module['faculty_management'];

$my_head .= '<link rel="Stylesheet" href="' . NV_BASE_SITEURL . 'modules/' . $module_file . '/data/bootstrap/css/bootstrap.css" type="text/css" />
';

$allow_func = array( 'main', 'teacher', 'teacher_ajax_action', 'level', 'level_ajax_action', 'subject', 'subject_ajax_action', 'faculty', 'faculty_ajax_action' );

define( 'NV_IS_FILE_ADMIN', true );

$globalTax = array();

$globalTax['faculty'] = getFaculty();

function vnp_msg($msg)
{
	if( !empty( $msg ) )
	return '<div class="' . $msg['type'] . '">' . $msg['content'] . '</div>';
}

function getFaculty($faculty_id = NULL)
{
	global $db, $module_data;
	
	$_faculty = array();
	if( $faculty_id > 0 )
	{
		$sql = "SELECT * FROM `" . NV_PREFIXLANG . "_" . $module_data . "_faculty` WHERE `faculty_id`=" . intval($faculty_id);
	}
	else
	{
		$sql = "SELECT * FROM `" . NV_PREFIXLANG . "_" . $module_data . "_faculty`";
	}
	$result = nv_db_cache( $sql );

	foreach( $result as $row )
	{
		$_faculty[$row['faculty_id']] = $row;
	}
	return $_faculty;
}

function getTaxSelectBox( $termData, $name = NULL, $defaultValue = NULL, $selectID = NULL, $valueKey = NULL, $titleKey = NULL )
{
	global $globalTax, $lang_module;
	
	$selectBox = array();
	if( !empty( $termData ) )
	{
		//$xtpl = new XTemplate( "tax_select_box.tpl", NV_ROOTDIR . "/themes/" . $global_config['module_theme'] . "/modules/" . $module_file );
		//$xtpl->assign( 'LANG', $lang_module );
		//$xtpl->assign( 'GLANG', $lang_global );
		
		if( in_array($termData, array('faculty', 'subject', 'teacher', 'level')) )
		{
			$_t = $globalTax[$termData];
			$selectBox[] = '<option value="">' . $lang_module['select'] . '</option>';
			foreach( $_t as $taxData )
			{
				( $taxData[$termData . '_id'] == $defaultValue ) ? $slt = 'selected="selected"' : $slt = '';
				$selectBox[] = '<option ' . $slt . ' value="' . $taxData[$termData . '_id'] . '">' . $taxData[$termData . '_name'] . '</option>';
			}
		}
		else
		{
			foreach( $termData as $taxData )
			{
				( $taxData[$valueKey] == $defaultValue ) ? $slt = 'selected="selected"' : $slt = '';
				$selectBox[] = '<option ' . $slt . ' value="' . $taxData[$valueKey] . '">' . $taxData[$titleKey] . '</option>';
			}
		}
	}
	return '<select name="' . $name . '">' . implode( PHP_EOL, $selectBox ) . '</select>';
}

function p($data = array())
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
	die();
}

?>