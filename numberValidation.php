<script>  
function validate(){  
var num=document.myform.num.value;  
if (isNaN(num)){  
  document.getElementById("numloc").innerHTML="Enter Numeric value only";  
  return false;  
}else{  
  return true;  
  }  
}  
</script>  
<form name="myform" onsubmit="return validate()" >  
Number: <input type="text" name="num"><span id="numloc"></span><br/>  
<input type="submit" value="submit">  
</form>  