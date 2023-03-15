//    AJAX FOR CONTACT FORM TO SQL DATABASE 
// $(document).ready(function () {
//     $("#formsubmit").click((event) => {
//         event.preventDefault();

//         let cusname = $('#cusname').val();
//         let cusemail = $("#cusmail").val();
//         let cusphone = $("#cusphone").val();
//         let cuscomment = $("#cuscomment").val();


//         let mydata = { name: cusname, email: cusemail, phone: cusphone, comment: cuscomment };
//         $.ajax({
//             url: "./html/contactinfo.php",
//             method: "POST",
//             data: JSON.stringify(mydata),
//             success: (data) => {
//                 $("#contactform")[0].reset();

//             }
//         })


//     })
// })

// AJAX FOR SIGNUP FORM TO SQL DATABASE



$(document).ready(function () {
    $("#signupbtn").click(() => {
        let cusname = $('#inputname').val();
        let cusemail = $('#inputemail').val();
        let cuspass = $('#inputpassword').val();



        let mydata = { name: cusname, email: cusemail, pass: cuspass };
        $.ajax({
            url: "./html/signupconn.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: (data) => {
                $("#response").html('<small>' + data + '</small>')
                $("#signupform")[0].reset();

            }
        })


    })
})



//  keypress blur function to check email is valid or not

$(document).ready(() => {
    $('#inputemail').on('keypress blur ', () => {



        let cusname = $('#inputname').val();
        let cusemail = $('#inputemail').val();
        let cuspass = $('#inputpassword').val();

        let mydata = { name: cusname, email: cusemail, pass: cuspass };

        let regx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.(?:[a-zA-Z0-9-]+)*$/;

        if (regx.test(cusemail)) {

            $("#sameusr").html('<small style="color:green" >you can use this email</small>');
            $("#signupbtn").attr("disabled", false);

            $.ajax({
                url: "./html/signupconn.php",
                method: "POST",
                data: JSON.stringify(mydata),
                success: (data) => {

                    if (data > 0) {
                        $("#sameusr").html('<small style="color:red" >this email already exists ,please choose another mail</small>');

                    }
                    else {
                        $("#sameusr").html('<small style="color:green" >there you go !</small>');


                    }

                }
            })

        }

        else {
            $("#sameusr").html('<small style="color:red" >this not a valid email ,please fill properly</small>');
            $("#signupbtn").attr("disabled", true);
        }

    })
})






// AJAX FOR LOGIN FORM TO SQL DATABASE

$(document).ready(function () {
    $("#loginbtn").click(() => {
        let cusmail = $('#loginmail').val();
        let cuspass = $('#loginpass').val();



        let mydata = { cusemail: cusmail, pass: cuspass };
        // console.log( mydata);
        $.ajax({
            url: "./html/loginconn.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: (data) => {
                console.log(data)

                if (data == 0) {



                    $("#loginresponse").html('<small style="color:red">login failed ,username password is invalid</small>');
                    $("#loginform")[0].reset();

                }
                else if (data == 1) {
                    $("#loginspinner").addClass("spinner-border text-success");
                    $("#loginresponse").html('<small style="color:green" >login success</small>');
                    $("#loginform")[0].reset();
                    setTimeout(() => {
                        window.location.href = ("index.php");
                    }, 1000);


                }
                else {
                    null;
                }


            }
        })


    })
})


// ajax code for the admin login

$(document).ready(()=>{
    $("#adminloginbtn").click(()=>{
        let cusmail = $('#adminmail').val();
        let cuspass = $('#adminpassword').val();

        let mydata = { cusemail: cusmail, pass: cuspass };
        console.log(cusmail);

        $.ajax({
            url:"./html/adminlog.php",
            method:"post",
            data:JSON.stringify(mydata),
            success:(data)=>{
                if (data == 0) {



                    $("#loginresponse").html('<small style="color:red">login failed ,username password is invalid</small>');
                    $("#loginform")[0].reset();

                }
                else if (data == 1) {
                    $("#adminloginspinner").addClass("spinner-border text-success");
                    $("#adminloginresponse").html('<small style="color:green" >login success</small>');
                    $("#adminloginform")[0].reset();
                    setTimeout(() => {
                        window.location.href = ("./html/adminpage.php");
                    }, 1000);


                }
                else {
                    alert("please enter valid id , password");
                }
            }
        })


    })
})







// public logout session code
$(document).ready(() => {
    $("#logoutbtn").click(() => {

        $.ajax({
            url: "./html/logout.php",
            method: "POST",
            success: (data) => {
                if (data == 0) {
                    window.location.assign("./index.php");
                }
            }
        })
    })
})














