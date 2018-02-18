<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
    </style>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css">
<!-- jQuery library -->
<script src="jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="bootstrap.min.js"></script>

<body>
<table border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            Name:&nbsp;
        </td>
        <td>
            <textarea rows="10" cols="50" type="text" id="txtName" class="form-control"  readonly="readonly"></textarea>
        </td>
        <td>
            <input type="button" style="margin-left:20px;" class="btn btn-primary" value="Check" onclick="SelectName()" />
        </td>
    </tr>
</table>
<script type="text/javascript">
    var popup;
    function SelectName() {
        popup = window.open("humantobotnotes.php", "Popup", "width=1300,height=300");
        popup.focus();
        return false
    }
</script>
</body>
</html>
