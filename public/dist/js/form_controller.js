$(document).ready(function(){
    // $("#submitForm").on("click",function(e){
        $("form#loginFormData").submit(function(e) {
        e.preventDefault()

        var formData  = new FormData(this);
        $(".error").hide();
        var email_id   = $("#email_id").val();
        var password = $("#password").val();
        var url = $("#loginFormData").attr("data");
        // alert(url);

    if (email_id == '') {
        $("#email_id").after('<span class="error text-danger"><em>Enter Email Id.</em></span>');
         $('html, body').animate({scrollTop:$('#email_id').position().top}, 'slow');
    } else if (password == '') {
        $("#password").after('<span class="error text-danger"><em>Enter Password.</em></span>');
         $('html, body').animate({scrollTop:$('#password').position().top}, 'slow');
    } else{
        //   alert('h');
          $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                     beforeSend: function () {
                    $('#loginButton098').attr('disabled', true);
                  },
                    success: function (data) {
                        $('#loginButton098').attr('disabled', false);
                        // var data = JSON.parse(data);
                        // alert(data);stringify
                        if(data.statuscode == '001'){
                            alert('success');
                        } else {
                            alert('wrong');
                        }
                        // $("#message").html(result);
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
        }
    });
});

// Insert Form Data---------------
$(document).ready(function(){
    // $("#submitForm").on("click",function(e){
        $("form#insertFormData").submit(function(e) {
        e.preventDefault();
         var formData  = new FormData(this);
        $(".error").hide();
        var url = $("#insertFormData").attr("data");
        //   alert('h');
        Swal.fire({
            position: 'center',
            text: 'Now loading....',
            showConfirmButton: false,
            allowEscapeKey: false,
            allowOutsideClick: false,
          })
          $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    beforeSend: function () {
                        $('#submit').attr('disabled', true);
                    },
                    success: function (data) {
                        $('#submit').attr('disabled', false);
                        // var data = JSON.stringify(data);
                        // alert(data);
                        var result = data;
                        if(result.statuscode == '001'){
                            Swal.fire({
                                  position: 'center',
                                  icon: 'success',
                                  title: 'Added!',
                                  text: result.message,
                                  showConfirmButton: false,
                                  timer: 2000
                                  })
                            // history.go(0);
                            setTimeout(function () { window.location.reload(); }, 2000);
                        } else if(result.statuscode == '005'){ // Barcode 
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Added!',
                                text: result.message,
                                showConfirmButton: false,
                                timer: 2000
                                }).then(function() {
                                    window.open(result.page+"/"+result.id, '_blank');
                                    location.reload();
                                });
                        } else if(result.statuscode == '006'){ // Generate Invoice 
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Added!',
                                text: result.message,
                                showConfirmButton: false,
                                timer: 2000
                                }).then(function() {
                                    window.open(result.page+"/"+result.id, '_blank');
                                    location.reload();
                                });
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Opps..',
                                text: result.message,
                                showConfirmButton: false,
                                timer: 3000
                                })
                        }
                        // $("#message").html(result);
                    },error: function(xhr, status, error) {
                        alert(error);
                      },

                    cache: false,
                    contentType: false,
                    processData: false
                });
    });
});

//Inserting Only Second Modal POP UP Data(members) for the roles and permissions
$(document).ready(function(){
    // $("#submitForm").on("click",function(e){
        $("form#insertSecondPopUpData").submit(function(e) {
        e.preventDefault();
         var formData  = new FormData(this);
        $(".error").hide();
        var url = $("#insertSecondPopUpData").attr("data");
        // alert(url);
        //   alert('h');
        Swal.fire({
            position: 'center',
            text: 'Now loading....',
            showConfirmButton: false,
            allowEscapeKey: false,
            allowOutsideClick: false,
          })
          $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    beforeSend: function () {
                        $('#submit2').attr('disabled', true);
                    },
                    success: function (data) {
                        $('#submit2').attr('disabled', false);
                        // var data = JSON.stringify(data);
                        // alert(data);
                        var result = data;
                        if(result.statuscode == '001'){
                            Swal.fire({
                                  position: 'center',
                                  icon: 'success',
                                  title: 'Added!',
                                  text: result.message,
                                  showConfirmButton: false,
                                  timer: 1500
                                  })
                            // history.go(0);
                            setTimeout(function () { $("#membersModel").modal('hide'); window.location.reload();  }, 1500);
                        }else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Opps..',
                                text: result.message,
                                showConfirmButton: false,
                                timer: 3000
                                })
                        }
                        // $("#message").html(result);
                    },

                    cache: false,
                    contentType: false,
                    processData: false
                });
    });
});


//**************************** */ Insert and list the data on the same page..******************************* 
$(document).ready(function(){
    // $("#submitForm").on("click",function(e){
        $("form#insertSamePageListFormData").submit(function(e) {
        e.preventDefault();
         var formData  = new FormData(this);
        $(".error").hide();
        var url = $("#insertSamePageListFormData").attr("data");

        Swal.fire({
            position: 'center',
            text: 'Now loading....',
            showConfirmButton: false,
            allowEscapeKey: false,
            allowOutsideClick: false,
          })
          $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    beforeSend: function () {
                        $('#submit').attr('disabled', true);
                    },
                    success: function (data) {
                        $('#submit').attr('disabled', false);
                        var result = data;
                        if(result.statuscode == '001'){
                            Swal.fire({
                                  position: 'center',
                                  icon: 'success',
                                  title: 'Added!',
                                  text: result.message,
                                  showConfirmButton: false,
                                  timer: 2000
                                  })
                            load_data();
                            $('#insertSamePageListFormData').trigger("reset");
                            
                        }else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Opps..',
                                text: result.message,
                                showConfirmButton: false,
                                timer: 3000
                                })
                        }
                        // $("#message").html(result);
                    },

                    cache: false,
                    contentType: false,
                    processData: false
                });
    });
});
//**********************End of same page List form data***************** */

//----------------------Update Forms Data-----------------------------------

$(document).ready(function(){
    // $("#submitForm").on("click",function(e){
        $("form#updateFormData").submit(function(e) {
        e.preventDefault();
         var formData  = new FormData(this);
        $(".error").hide();
        var url = $("#updateFormData").attr("data");
        var redirect = $("#updateFormData").attr("redirect");
        // alert(redirect);
        // alert(url);
          $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    beforeSend: function () {
                        $('#submit').attr('disabled', true);
                    },
                    success: function (data) {
                        $('#submit').attr('disabled', false);
                        var result = data;
                        if(result.statuscode == '001'){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Updated!',
                                text: result.message,
                                showConfirmButton: false,
                                timer: 3000
                                })
                            // history.go(0);
                            setTimeout(function () { window.location.href = redirect ; }, 3000);
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Opps..',
                                text: result.message,
                                showConfirmButton: false,
                                timer: 3000
                                })
                        }
                        // $("#message").html(result);
                    },

                    cache: false,
                    contentType: false,
                    processData: false
                });
    });
});


// ----------------------Edit Modal Data ----------------------------


$(document).ready(function(){
    // $("#submitForm").on("click",function(e){
        $("form#updateModalFormData").submit(function(e) {
        e.preventDefault();
         var formData  = new FormData(this);

        $(".error").hide();
        var url = $("#updateModalFormData").attr("data");
        // alert(url);
          $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    beforeSend: function () {
                        $('#submit1').attr('disabled', true);
                    },
                    success: function(data) {
                        $('#submit1').attr('disabled', false);
                        // var data = JSON.stringify(data);
                        // alert(data);
                        var result = data;
                        if(result.statuscode == '001'){
                            Swal.fire({
                                  position: 'center',
                                  icon: 'success',
                                  title: 'Updated!',
                                  text: result.message,
                                  showConfirmButton: false,
                                  timer: 2000
                                  })
                                  setTimeout(function () { $('#editDataModel').modal('hide') }, 2000);
                                  load_data();
                                //   history.go(0); 
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Opps..',
                                text: result.message,
                                showConfirmButton: false,
                                timer: 2000
                                })
                        }
                        // $("#message").html(result);
                    },

                    cache: false,
                    contentType: false,
                    processData: false
                });
    });
});

// isNumber Validation

function isNumber(evt)
	{
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57)){
		return false;

		return true;
		 }
	}
    // -------------------Check box --------------------------------
    $('#checkbox').on('click',function(){
        if(this.checked){
            $('#barcode').show();
         }else{
            $('#barcode').hide();
         }
    });

    //update password script-------------------
    $(document).ready(function(){
        // $("#submitForm").on("click",function(e){
            $("form#updatePassword").submit(function(e) {
            e.preventDefault();
             var formData  = new FormData(this);
            $(".error").hide();
            var url = $("#updatePassword").attr("data");
            var redirect = $("#updatePassword").attr("redirect");
            // alert(redirect);
            // alert(url);
              $.ajax({
                        url: url,
                        type: 'POST',
                        data: formData,
                        beforeSend: function () {
                            $('#submit001').attr('disabled', true);
                        },
                        success: function (data) {
                            $('#submit001').attr('disabled', false);
                            var result = data;
                            if(result.statuscode == '001'){
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'Updated!',
                                    text: result.message,
                                    showConfirmButton: false,
                                    timer: 3000
                                    })
                                // history.go(0);
                                setTimeout(function () { window.location.href = redirect ; }, 3000);
                            } else {
                                Swal.fire({
                                    position: 'center',
                                    icon: 'error',
                                    title: 'Opps..',
                                    text: result.message,
                                    showConfirmButton: false,
                                    timer: 3000
                                    })
                            }
                            // $("#message").html(result);
                        },

                        cache: false,
                        contentType: false,
                        processData: false
                    });
        });
    });

     //-----------Add Cloths Fields while selecting Cloths from item select box----------------
     $(document).ready(function () {
        $('#item_id').change(function () {
            if (this.value == "1") {
                $('#clothInfo').show();
            } else {
                $('#clothInfo').hide();
            }
        });
    
    });
      //-----------Add Grocery Fields while selecting Grocery from item select box----------------
      $(document).ready(function () {
        $('#item_id').change(function () {           
            if (this.value == "2") {
                $('#groceryInfo').show();
            } else {
                $('#groceryInfo').hide();
            }
        });
    
    });

    // isFloat Validation
    function isFloatNumberKey(evt)
    {
       var charCode = (evt.which) ? evt.which : evt.keyCode;
       if (charCode != 46 && charCode > 31 
         && (charCode < 48 || charCode > 57))
          return false;

       return true;
}

// //Toggle button for div of give permissions
// function showDialog() {
//  var x = document.getElementById("showDialog");
//  if (x.style.display === "none") {
//      x.style.display = "block";
//    }else{
//      x.style.display = "none";
//     }
//  }

//----------------------Update Forms Data-----------------------------------

$(document).ready(function(){
    // $("#submitForm").on("click",function(e){
        $("form#submitPayment").submit(function(e) {
        e.preventDefault();
         var formData  = new FormData(this);
        $(".error").hide();
        var url = $("#submitPayment").attr("data");
        // alert(redirect);
        // alert(url);
          $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    beforeSend: function () {
                        $('#submit').attr('disabled', true);
                    },
                    success: function (data) {
                        $('#submit').attr('disabled', false);
                        var result = data;
                        if(result.statuscode == '001'){
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Successful!',
                                text: result.message,
                                showConfirmButton: false,
                                timer: 3000
                                })
                                setTimeout(function () { $('#paymentModal').modal('hide') }, 2000);
                                history.go(0);
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Opps..',
                                text: result.message,
                                showConfirmButton: false,
                                timer: 3000
                                })
                        }
                        // $("#message").html(result);
                    },

                    cache: false,
                    contentType: false,
                    processData: false
                });
    });
});
