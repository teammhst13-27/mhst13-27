<!-- BEGIN: main -->
<a href="javascript:SentMark({CLASS.class_id}); return false;" class="vnp-button">Xác nhận gửi điểm</a>
<table class="tab1">
	<caption>Nhập điểm cho lớp {CLASS.class_name} - {CLASS.year}</caption>
    <thead>
    	<tr>
            <td>{LANG.class_name}</td>
            <td>Điểm quá trình(mỗi điểm cách nhau dấu - )</td>
            <td>Điểm cuối kì</td>
      	</tr>
    </thead>
    <!-- BEGIN: loop -->
    <tbody class="{ROW.class}">
        <tr>
            <td style="width:150px"><strong>{ROW.student_name}</strong></td>
            <td style="width:150px">{ROW.time_mark}</strong></td>
            <td style="width:150px">{ROW.end_mark}</strong></td>
        </tr>
    </tbody>
    <!-- END: loop -->
    <tfoot>
        <tr>
            <td colspan="9" align="center"></td>
        </tr>
    </tfoot>
</table>
<center>
    <div class="pagination">
        <ul class="vnp-pagination">
        {PAGE_GEN}
        </ul>
    </div>
</center>
<style type="text/css">
#enter-mark select {
	max-width: 200px;
	width: 155px;
	color: #F00;
	font-weight: bold;
	line-height: 28px;
	height: 28px;
}
</style>
<!-- END: main -->