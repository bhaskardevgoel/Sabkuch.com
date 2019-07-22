function con()
{
a=document.getElementById('pass').value;
b=document.getElementById('confirm_pass').value;
if(a==b)
{
document.getElementById('s').innerHTML="Password Matched";
document.getElementById('s').style.color="green";
}
else
{
document.getElementById('s').innerHTML="Password don't match";
document.getElementById('s').style.color="red";
}
}
