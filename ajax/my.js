function a(str)
{
    var abc;
    if(window.XMLHttpRequest)
    {
        abc=new XMLHttpRequest();
    }
    else
    {
        abc=new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    var strurl = "getdata.php?country="+str;                                                          
    
    abc.open('GET',strurl,true);
    abc.send();
    
    abc.onreadystatechange=function()
    {
        if(abc.readyState==4)
        {
            document.getElementById('state').innerHTML=abc.responseText;
        }

    } 
    
}

function b(str)
{
    
    if(window.XMLHttpRequest)
    {
        abc=new XMLHttpRequest();
    }
    else
    {
        abc=new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    var strurl = "getdata.php?state="+str;
    
    abc.open('GET',strurl,true);
    abc.send();
    
    abc.onreadystatechange=function()
    {
        if(abc.readyState==4)
        {
            document.getElementById('city').innerHTML=abc.responseText;
        }

    } 
    
}



