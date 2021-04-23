
// Sign up agent
$('#submit_button').click(function(event){
    event.preventDefault()
    // var sName = $('#txtName').val()
    // var sEmail = $('#txtEmail').val()
    // var sLastName = $('#txtLastName').val()
    // var sPassword = $('#txtPassword').val()
    // console.log(sName, sEmail, sLastName, sPassword)
    $.ajax({
        url : "api-agent/api-signup-agent.php",
        method: "POST",
        data : $('form').serialize(), // create the form to be passed
        dataType:"JSON"
    })
    .done(function(response){
        if( response.status === 1 ){
            window.location='profile.php'
        }else{
            $('#error_message').text(response.message)
        }
        console.log(response)
    })
    .fail()

})