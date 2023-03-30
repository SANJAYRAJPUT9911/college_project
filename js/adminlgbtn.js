
// admin logout 

$(document).ready(() => {
    $("#lgbtnn").click((event) => {
        // event.preventDefault();
        console.log('log out button ');

        $.ajax({
            url: "../html/logout.php",
            method: "POST",
            success: (data) => {
                if (data == 1) {
                      window.history.go(-1);            
                        }
                    }
                })
            })
})






