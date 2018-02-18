<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery Add / Remove Table Rows Dynamically</title>
</head>
<style>
    .table
    {
        border:2px solid black;
    }
</style>
<body>
<?php
/*if(isset($_POST['submit1']))
{
	echo "<pre>";
	print_r($_POST);
	
}
*/
?>


<div class="container-fluid">
    <div class="table-responsive">
<form action='#' id='' name='' method='POST'>
    <table class='table'>
        <thead class='thead-light'>
        <tr>
            <th>S.No</th>

            <th>TN</th>
            <th>OLD RECORD</th>
            <th>FROM RECORD</th>
            <th>OUT RECORD</th>
            <th>ORDER CRRECTION</th>
            <th>MSS RECORD</th>
        </tr>
        </thead>
        <tbody>


        <tr><td>1</td>
            <td><textarea  name='txt_tn' id='txt_tn1' class="form-control" placeholder='TN' rows='4' cols='25'></textarea></td>
            <td><textarea  name='txt_oldrecord' class="form-control" id='txt_oldrecord1' placeholder='OLD RECORD' rows='4' cols='25'></textarea></td>
            <td><textarea  name='txt_fromrecord' class="form-control" id='txt_fromrecord1' placeholder='FROM RECORD' rows='4' cols='25'></textarea></td>
            <td><textarea  name='txt_outrecord' class="form-control" id='txt_outrecord1' placeholder='OUT RECORD' rows='4' cols='25'></textarea></td>
            <td>
                <select name='txt_ordercorrection' class="txt_ordercorrection form-control"  id="txt_ordercorrection1" data-value="1" >
                    <option value='TN'>TN</option>
                    <option value='OLD RECORD'>OLD RECORD</option>
                    <option value='FROM RECORD'>FROM RECORD</option>
                    <option value='OUT RECORD'>OUT RECORD</option>
                    <option value='ORDER CRRECTION'>ORDER CORRECTION</option>
                </select>&nbsp;&nbsp;
                <input type='text' id='txt_orsunvalue1' class="form-control" name='txt_orsunvalue' style='display:none;'><input type='button' id='submit' name='submit' value='Add' class="add_ocval" data-value="1">
                <textarea  name='txt_mssrecord' id='txt_mssrecord1' class="form-control" placeholder='ORDER CORRECTION' rows='2' cols='25'></textarea></td>

            <td><textarea  name='txt_mssrecordmain' id='txt_mssrecordmain1' class="form-control" placeholder='MSS RECORD' rows='4' cols='25'></textarea></td></tr>
        </tbody>

    </table>

    <!---<button type="button" class="delete-row">Delete Row</button>--->


    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="add-row btn btn-info" value="Add Row">
    <input type='hidden' id='txt_id' name='txt_id' value='1'>
    <input type='button' id='submit1' name='submit1' class="btn btn-success" value='Submit' onclick="SetName();">
</form>
    </div></div>
</body>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css">

<!-- jQuery library -->
<script src="jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="bootstrap.min.js"></script>
<!--<script src="jquery-1.12.4.min.js"></script>
<link href="js/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>-->
<script type="text/javascript">
    $(document).ready(function(){

        $(".add-row").click(function(){

            var txtid = $("#txt_id").val();

            var sdg=parseInt(txtid)+1;

            var markup = "<tr><td>"+sdg+"</td><td><textarea  class=\"form-control\" name='txt_tn"+sdg+"' id='txt_tn"+sdg+"' placeholder='TN' rows='4' cols='25'></textarea></td><td><textarea  name='txt_oldrecord"+sdg+"' id='txt_oldrecord"+sdg+"' class=\"form-control\" placeholder='OLD RECORD' rows='4' cols='25'></textarea></td><td><textarea  name='txt_fromrecord"+sdg+"' class=\"form-control\" id='txt_fromrecord"+sdg+"' placeholder='FROM RECORD' rows='4' cols='25'></textarea></td><td><textarea  name='txt_outrecord"+sdg+"'  class=\"form-control\" id='txt_outrecord"+sdg+"' placeholder='OUT RECORD' rows='4' cols='25'></textarea></td><td><select name='txt_ordercorrection'  class='txt_ordercorrection form-control' id='txt_ordercorrection"+sdg+"' data-value="+sdg+" ><option value='TN'>TN</option><option value='OLD RECORD'>OLD RECORD</option><option value='FROM RECORD'>FROM RECORD</option><option value='OUT RECORD'>OUT RECORD</option><option value='ORDER CRRECTION'>ORDER CRRECTION</option></select><input type='text' class='form-control' id='txt_orsunvalue"+sdg+"' name='txt_orsunvalue' style='display:none;'><input type='button' id='submit' name='submit' value='Add' class='add_ocval' data-value="+sdg+" ><textarea  name='txt_mssrecord' id='txt_mssrecord"+sdg+"' placeholder='ORDER CRRECTION' rows='4' cols='25'></textarea></td><td><textarea  name='txt_mssrecordmain"+sdg+"' id='txt_mssrecordmain"+sdg+"' placeholder='MSS RECORD' rows='4' cols='25'></textarea></td></tr>";

            $("table tbody").append(markup);
            $("#txt_id").val(sdg);
        });


        $(document).on('change','.txt_ordercorrection',function(){
            var val = $(this).val();
            var row_val = $(this).attr('data-value');
            if(val == 'ORDER CRRECTION')
            {
                $("#txt_orsunvalue"+row_val).show();
            }
            else
            {
                $("#txt_orsunvalue"+row_val).val('');
                $("#txt_orsunvalue"+row_val).hide();
            }
        });
        $(document).on('click','.add_ocval',function(){
            var row_val = $(this).attr('data-value');
            var txt_OC = $("#txt_ordercorrection"+row_val).val();
            var txt_orsunvalue = $("#txt_orsunvalue"+row_val).val();
            var txt_area = $("#txt_mssrecord"+row_val).val();
            if(txt_OC == 'ORDER CRRECTION')
            {
                var set_txt = txt_OC+'-'+txt_orsunvalue
                var txt_display = (txt_area != '')?txt_area+','+set_txt:set_txt;
            }
            else
            {
                var txt_display = (txt_area != '')?txt_area+','+txt_OC:txt_OC;
            }
            $("#txt_mssrecord"+row_val).val(txt_display);
        })


    });
</script>
<script type="text/javascript">
    function SetName() {
        var str='';
        var nxtline='~~';
        var count=$(".table tbody tr").length;

        for (i=1;i<=count;i++)
        {
            if(i==count)
            {
                nxtline='';
            }
            str +=$("#txt_tn"+i).val()+"||"+$("#txt_oldrecord"+i).val()+"||"+$("#txt_fromrecord"+i).val()+"||"+$("#txt_outrecord"+i).val()+"||"+$("#txt_mssrecord"+i).val()+"||"+$("#txt_mssrecordmain"+i).val()+nxtline;
        }
        //return false;
        /* var rowcount=document.getElementById('txt_id').value;
        if(rowcount==1)
        {
            var rowcount=document.getElementById('txt_tn').value;
            var rowcount=document.getElementById('txt_oldrecord').value;
            var rowcount=document.getElementById('txt_fromrecord').value;
            var rowcount=document.getElementById('txt_outrecord').value;
            var rowcount=document.getElementById('txt_orsunvalue').value;
            var rowcount=document.getElementById('txt_id').value;
        } */
        if (window.opener != null && !window.opener.closed) {

            var txtName = window.opener.document.getElementById("txtName");
            txtName.value =  str;;
        }
        window.close();
    }
</script>
</html>                            