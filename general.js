//$("#container").load("login1.php #container > *");

function errcheck(){
    var x=document.getElementById('username')[0].value;
    //var y=document.getElementById('password')[1].value;
    if (x=="")
    {
        document.getElementById('demo').innerHTML="Cannot be blank";
        
    }
    
}


    function gh() {
        $("send").click(function(){
        $("#container").load("login1.php #login");
    });
}
