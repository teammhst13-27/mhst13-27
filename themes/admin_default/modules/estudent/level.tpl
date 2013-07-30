<!-- BEGIN: main -->
<a class="btn btn-mini btn-primary" href="{ADD_LINK}"><i class="icon-plus icon-white"></i>  {LANG.add_level}</a>
<form action="{FORM_ACTION}" method="post">
	<input name="save" type="hidden" value="1" />
	<table class="tab1">
    	<thead>
        	<td>{LANG.level_name}</td>
            <td style="width:150px">{LANG.status}</td>
			<td style="width:100px">{LANG.feature}</td>
        </thead>
        <!-- BEGIN: row -->
		<tbody class="{ROW.class}">
			<tr>
				<td style="width:150px"><strong>{ROW.level_name}</strong></td>
                <td>
                	<select id="change_status_{ROW.level_id}" onchange="nv_chang_status('{ROW.level_id}', 'level');">
                        <!-- BEGIN: status -->
                        <option value="{STATUS.key}"{STATUS.selected}>{STATUS.val}</option>
                        <!-- END: status -->
                    </select>
           		</td>
                <td>
                	<span class="edit_icon"><a href="{ROW.url_edit}">{GLANG.edit}</a></span> &nbsp;&nbsp; <span class="delete_icon"><a href="javascript:void(0);" onclick="nv_module_del({ROW.level_id}, 'level');">{GLANG.delete}</a></span>
                </td>
			</tr>
		</tbody>
        <!-- END: row -->
		<tfoot>
			<tr>
				<td colspan="3" align="center"><input type="submit" value="{LANG.save}"/></td>
			</tr>
		</tfoot>
	</table>
</form>
<!-- END: main -->