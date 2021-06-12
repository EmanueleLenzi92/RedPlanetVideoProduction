

function validateForm() {
  var name =  document.getElementById('name').value;
  if (name == "") {
      document.getElementById('status').innerHTML = "<p class='text-danger'>Devi inserire il nome</p>";
      return false;
  }
  var email =  document.getElementById('email').value;
  if (email == "") {
      document.getElementById('status').innerHTML = "<p class='text-danger'>Devi inserire la tua email</p>";
      return false;
  } else {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!re.test(email)){
          document.getElementById('status').innerHTML = "<p class='text-danger'>Email non valida</p>";
          return false;
      }
  }
  var subject =  document.getElementById('subject').value;
  if (subject == "") {
      document.getElementById('status').innerHTML = "<p class='text-danger'>Devi inserire un oggetto</p>";
      return false;
  }
  var message =  document.getElementById('message').value;
  if (message == "") {
      document.getElementById('status').innerHTML = "<p class='text-danger'>Devi inserire il messaggio</p>";
      return false;
  }
  document.getElementById('status').innerHTML = "Inviando...";
 
  //form corretto. spedisce con ajax
  
  formData = {
	'name'     : $('input[name=name]').val(),
	'email'    : $('input[name=email]').val(),
	'subject'  : $('input[name=subject]').val(),
	'message'  : $('textarea[name=message]').val()
	};


	$.ajax({
	url : "php/mail.php",
	type: "POST",
	data : formData,
	success: function(data, textStatus, jqXHR)
	{

	$('#status').html(data.message);
	if (data.code) //If mail was sent successfully, reset the form.
	$('#contact-form').closest('form').find("input[type=text], textarea").val("");
	},
	error: function (jqXHR, textStatus, errorThrown)
	{
	$('#status').text(jqXHR);
	}
	});

	  }
	  
