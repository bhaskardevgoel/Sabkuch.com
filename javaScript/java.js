function val_chk()
{
var l=document.login;
var name=l.txt_name.value;
var pass=l.password.value;
if(name=="" ||name=="null")
{
alert("Username Required");
return false;
}
else
{
name_len=name.length;
for(i=0;i<name_len;i++)
{
ascii_code=name.charCodeAt(i);
if((ascii_code>=65&&ascii_code<=90 || ascii_code==32) || (ascii_code>=97&&ascii_code<=122 || ascii_code==32))
{
}
else{
alert("please use only UPPERCASE and lowercase characters");
return false;
}
}
}
if(pass=="" ||pass=="null")
{
alert("Password Required");
return false;
}
else{
pass_len=pass.length;
if(pass_len<9)
{
alert("Error:Password must contain atleast 9 characters!");
return false;
}
else
{
return true;
}
}
}






function val_chk_signup()
{
var l=document.signup;
var name=l.txt_name1.value;
var pass=l.password1.value;
var pass_2=l.password_2.value;

if(name=="" || name=="null")
{
alert("Please fill name");
return false;
}
else
{
name_len=name.length;
for(i=0;i<name_len;i++)
{
ascii_code=name.charCodeAt(i);
if((ascii_code>=65&&ascii_code<=90 || ascii_code==32) || (ascii_code>=97&&ascii_code<=122 || ascii_code==32))
{

}
else{
alert("please use only UPPERCASE and lowercase characters for User");
return false;
}
}
}
if(pass=="" ||pass=="null")
{
alert("Password Required");
return false;
}
else if(pass!=pass_2)
{
alert("Please check your password");
return false;
}
else
{
pass_len=pass.length;
pass_len_2=pass_2.length;

if(pass_len<6)
{
alert("Error:Password must contain atleast 6 characters!");
return false;
}
}
}