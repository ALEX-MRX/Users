$(authorization);
function authorization() {
    $('#authorization').bind('click', function(event) {
        var login = $("#login").val(); 
        var password = $("#password").val(); 
        $.ajax({
            url: 'check.php',
            type: 'POST',
            data: {
                "login":login, 
                "password":password,
            },
        })
        .done(function() {
            var url = "index.php";
            $(location).attr('href',url);
        })
        
        
    });
}

$(register);
function register() {
    $('#register').bind('click', function(event) {
        var login = $("#login").val(); 
        var name  = $("#name").val(); 
        var password = $("#password").val(); 
        var email = $("#email").val(); 
        $.ajax({
            url: 'main.php',
            type: 'POST',
            data: {
                "login":login, 
                "name":name,
                "password":password,
                "email":email
            },
        })
        .done(function() {
            var url = "index.php";
            $(location).attr('href',url);
        })
        
        
    });
}

$(reestablish);
function reestablish() {
    $('#reestablish').bind('click', function(event) {
        var login = $("#login").val(); 
        var password = $("#password").val();
        $.ajax({
            url: 'reestablish.php',
            type: 'POST',
            data: {
                "login":login, 
                "password":password, 
            },
        })
        .done(function() {
            var url = "index.php";
            $(location).attr('href',url);
        })
        
        
    });
}

function but(element, id_users){
    var id_contact = $(element).parent().index();
    var content = $(element).parent()[0].childNodes[0].textContent;
    alert($(element).parent()[0].childNodes[2].textContent);
    
    $.ajax({
            url: 'contact.php',
            type: 'POST',
            data: {
                "id_contact":id_contact, 
                "id_users":id_users,
                "content":content
                
            },
        })
       
        console.log('id_contact - ', id_contact);
        console.log('id_users - ', id_users);
        console.log('content - ', content);
}