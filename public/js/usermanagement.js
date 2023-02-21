var checkothers=document.getElementById('othersall');
var checkservice=document.getElementById('service');
var checkviewbtn=document.getElementById('viewbuttons');


checkothers.onchange=function(){
    if(checkothers.checked==true)
    {
        console.log("hello check");
        console.log(checkservice);
        checkservice.setAttribute('checked','checked');
        checkviewbtn.setAttribute('checked','checked');
    }
    if(checkothers.checked==false)
    {
        checkservice.removeAttribute('checked','checked');
        checkviewbtn.removeAttribute('checked','checked');
    }
    
}

var checkuserall=document.getElementById('userall');
var checkviewuser=document.getElementById('viewuser');
var checkadduser=document.getElementById('adduser');
var checkedituser=document.getElementById('edituser');
var checkdeleteuser=document.getElementById('deleteuser');
console.log(checkuserall);
checkuserall.onchange=function(){
    if(checkuserall.checked==true)
    {
        checkviewuser.setAttribute('checked','checked');
        checkadduser.setAttribute('checked','checked');
        checkedituser.setAttribute('checked','checked');
        checkdeleteuser.setAttribute('checked','checked');
    }

    if(checkuserall.checked==false)
    {
        checkviewuser.removeAttribute('checked','checked');
        checkadduser.removeAttribute('checked','checked');
        checkedituser.removeAttribute('checked','checked');
        checkdeleteuser.removeAttribute('checked','checked');
    }
}


var checkroleall=document.getElementById('roleall');
var checkviewrole=document.getElementById('viewrole');
var checkaddrole=document.getElementById('addrole');
var checkeditrole=document.getElementById('editrole');
var checkdeleterole=document.getElementById('deleterole');

checkroleall.onchange=function()
{
    if(checkroleall.checked==true)
    {
        checkviewrole.setAttribute('checked','checked');
        checkaddrole.setAttribute('checked','checked');
        checkeditrole.setAttribute('checked','checked');
        checkdeleterole.setAttribute('checked','checked');
    }
    if(checkroleall.checked==false)
    {
        checkviewrole.removeAttribute('checked','checked');
        checkaddrole.removeAttribute('checked','checked');
        checkeditrole.removeAttribute('checked','checked');
        checkdeleterole.removeAttribute('checked','checked');
    }
}

