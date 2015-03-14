<?php
{?>
<html>
<style>
#form_gen
{

	text-align:center;
	line-height:30px;
}
ul{
	
}
li
{
	list-style-type:none;
	
}
#ftitle{
	width:100%;
}
#advansettings{
	display:none;
}
</style>

<body>
<div id="form_gen">
<form id="newform" name="myForm" method="GET" action="#" onsubmit="return validateForm()">

<fieldset>
<legend>
Make Your own Form
</legend>
<input type="text" name="formtitle" placeholder="Name of the form" id="ftitle" required="true" onblur="checkempty();"/><span id="frmtitle"></span>
<ul><li>Question Title*: <input type="text" name="name" placeholder="Name" title="Name of field" id="nm"  required="true"/><span id="qstntitle"></span></li></ul>
<ul><li>Type: <select name="listname" id="listid" >
<?php
$notypes=array("Text","Check Box","Dropdown","Radio Button","Paragraph");
$lp=0;
foreach ($notypes as $value){
		if($lp==0)
echo "<option selected='true' value=".$lp." >".$value."</br>";
else
	echo "<option  value=".$lp." >".$value."</br>";
$lp++;
}
?></li></ul>
</select>
<ul>Required: <input type="radio" name="reqd"  checked="true" value="1" >Yes</input>
 <input type="radio" name="reqd"   value="0" >No</input>
</ul>


<div id="simtext">

<ul>Auto Complete :
 <input type="radio" name="atcmp"   value="1" >Yes</input>
 <input type="radio" name="atcmp"   value="0" >No</input></br></ul>
 
 <input type="checkbox" id="ckbx" style="text-align:left;" onclick="showhide(this,'advansettings')">Advanced Settings</input>
 
 <div id="advansettings" >
 
 <ul><li><select name="advanname" id="advanid">
 <?php
		$advantypes=array("Greater Than","Greater Than Equal to","Less Than","Less Than Equal to","Equal to","Not equal to","Max","Min");
		$lp=0;
		foreach ($advantypes as $value)
		{		
			echo "<option value=".$lp." >".$value."</br>";
			$lp++;
		}
?>
</select>

<input type="text" name="advanvalue" >
<input type="text" name="advanerror" placeholder="Custom Error to Display">
</li></ul>
 </div >
</ul>
<input type="submit" value="Done">
</div>



</fieldset>
</form>
</div>
</body>


<script>
function showhide(boxname,divid) { 
var elem=document.getElementById(divid);

elem.style.display=boxname.checked?'block':'none';
};
function validateForm() {
    var x = document.forms["myForm"]["formtitle"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
		
    }
}
var elem=document.getElementById(listid);
elem.onchange=function(){
	var selectind=this.options[this.selectedIndex];
	alert("Value of elem is "+ selectind);
	var textinp=document.getElementById(simtext);
	textinp.style.display=(selectind==0)?'block':'none';
}
</script>
</html>
<?php
}
?>