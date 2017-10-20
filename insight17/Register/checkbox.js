function agreeFunction()
{
	var cb=document.getElementById('cbAgree');
	var s=document.getElementById('subForm');
	if(cb.checked)
	{
		s.disabled=false;
		document.getElementById('agreeError').innerHTML="";
	}
	else
	{
		s.disabled=true;
		document.getElementById('agreeError').innerHTML="*Please agree the t&c.";
	}
}

function misc()
{
	var x=document.getElementById("subDomain").value;
	if(x==="other")
		document.getElementById("inputMisc").style.display="block";
	else
		document.getElementById("inputMisc").style.display="none";
}