<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
    <style type="text/css">
        body, html {
    height: 100%;
    margin: 0;
    font: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.bg-image{
    background-image: url("F2.jpg");
    filter: blur(8px);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}

.bg-text{
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
    color: rgb(234, 228, 241);
    font-weight: bold;
    border: 3px solid rgb(234, 228, 241);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 80%;
    padding: 20px;
    text-align: center;
}

h1{
    font: 1.5em;
    text-align: center;
    text-transform: capitalize;
}

form{
    margin: 0 auto;
    width: 70%;
    padding: 1em;
    border: 1px solid rgb(234, 228, 241);
    border: 1em;
}

fieldset{
    border: 1px solid rgb(234, 228, 241);
    margin: 10px;
}

legend{
    font-weight: 700;
}

div + div{
    margin-top: 1em;
}

input, textarea{
    width: 200px;
    border: 1px solid rgb(234, 228, 241);
    
}

textarea{
    vertical-align: top;
    height: 12em;
    resize: vertical;
}

button{
    margin: .5em;
    font-size: 1em;
    text-transform: capitalize;
    background-color: rgb(234, 228, 241);
    color: rgb(17, 15, 15);
    border: none;
    padding: 5px;
    border-radius: 2px;
}

#submitbutton{
    display: flex;
    justify-content: center;
}
    </style>
    <script type="text/javascript">
        var $NameRegEx = /^([a-zA-Z ]{2,40})$/;
        var $EmailRegEx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b$/i;
        var $PhoneRegEx = /^([0-9]{10})$/;
        var $AddressRegEx = /^[#.0-9a-zA-Z\s,-]+$/;

        $(document).ready(function () {

            $("#Name").blur(function () {
                $("#NameValidation").empty();
                if ($(this).val() == "" || $(this).val() == null) {
                    $("#NameValidation").html("(*) Name required..!!");
                }
                else {
                    if (!$(this).val().match($NameRegEx)) {
                        $("#NameValidation").html("(*) Invalid name..!!");
                    }
                }
            });

            $("#Name").keypress(function (e) {
                $("#NameValidation").empty();
                var Flag = ((e.which >= 65 && e.which <= 90) || (e.which >= 97 && e.which <= 121));
                if (Flag == false) {
                    $("#NameValidation").html("Invalid Input..!!")
                }
            });

            $("#Phone").blur(function () {
                $("#PhoneValidation").empty();
                if ($(this).val() == "" || $(this).val() == null) {
                    $("#PhoneValidation").html("(*) Contact no. required..!!");
                }
                else {
                    if (!$(this).val().match($PhoneRegEx)) {
                        $("#PhoneValidation").html("(*) Invalid contact no..!!");
                    }
                }
            });

            $("#Phone").keypress(function (e) {
                $("#PhoneValidation").empty();
                var Flag = (e.which >= 48 && e.which <= 57);
                if (Flag == false) {
                    $("#PhoneValidation").html("Invalid Input..!!");
                }
                return Flag;
            });

            $("#Email").blur(function () {
                $("#EmailValidation").empty();
                if ($(this).val() == "" || $(this).val() == null) {
                    $("#EmailValidation").html("(*) Email id required..!!");
                }
                else {
                    if (!$(this).val().match($EmailRegEx)) {
                        $("#EmailValidation").html("(*) Invalid email id..!!");
                    }
                }
            });

            $("#Address").blur(function () {
                $("#AddressValidation").empty();
                if ($(this).val() == "" || $(this).val() == null) {
                    $("#AddressValidation").html("(*) Address required..!!");
                }
                else {
                    if (!$(this).val().match($AddressRegEx)) {
                        $("#AddressValidation").html("(*) Invalid Address..!!");
                    }
                }
            });

            $("#msg").blur(function () {
                $("#msgValidation").empty();
                if ($(this).val() == "" || $(this).val() == null) {
                    $("#msgValidation").html("(*) Message required..!!");
                }
                else {
                    if ($("#msg").val().length > 300) {
                        $("#msgValidation").html("(*) Invalid message..!!");
                    }
                }
            });

            var NameFlag = false, PhoneFlag = false, EmailFlag = false, AddressFlag = false, msgFlag = false;

            $("#Submit").submit(function () {
                $("#NameValidation").empty();
                if ($("#Name").val() == "" || $("#Name").val() == null) {
                    $("#NameValidation").html("(*) Name required..!!");
                    NameFlag = false;
                } else {
                    if (!$("#Name").val().match($NameRegEx)) {
                        $("#NameValidation").html("(*) Invalid name..!!");
                        NameFlag = false;
                    } else {
                        NameFlag = true;
                    }
                }

                $("#PhoneValidation").empty();
                if ($("#Phone").val() == "" || $("#Phone").val() == null) {
                    $("#PhoneValidation").html("(*) Contact no. required..!!");
                    PhoneFlag = false;
                } else {
                    if (!$("#Phone").val().match($PhoneRegEx)) {
                        $("#PhoneValidation").html("(*) Invalid contact no..!!");
                        PhoneFlag = false;
                    } else {
                        PhoneFlag = true;
                    }
                }

                $("#EmailValidation").empty();
                if ($("#Email").val() == "" || $("#Email").val() == null) {
                    $("#EmailValidation").html("(*) Email id required..!!");
                    EmailFlag = false;
                } else {
                    if (!$("#Email").val().match($EmailRegEx)) {
                        $("#EmailValidation").html("(*) Invalid email id..!!");
                        EmailFlag = false;
                    } else {
                        EmailFlag = true;
                    }
                }

                $("#AddressValidation").empty();
                if ($("#Address").val() == "" || $("#Address").val() == null) {
                    $("#AddressValidation").html("(*) Address required..!!");
                    AddressFlag = false;
                } else {
                    if (!$("#Address").val().match($AddressRegEx)) {
                        $("#AddressValidation").html("(*) Invalid Address..!!");
                        AddressFlag = false;
                    } else {
                        AddressFlag = true;
                    }
                }

                $("#msgValidation").empty();
                if ($("#msg").val() == "" || $("#msg").val() == null) {
                    $("#msgValidation").html("(*) Message required..!!");
                    msgFlag = false;
                } else {
                    if ($("#msg").val().length > 300) {
                        $("#msgValidation").html("(*) Invalid message..!!");
                        msgFlag = false;
                    } else {
                        msgFlag = true;
                    }
                }

                if (NameFlag && PhoneFlag && EmailFlag && AddressFlag && msgFlag) {
                    $("input,textarea").val("");
                    alert("Form Submitted Successfully..!!");
                } else {
                    alert("Invalid Input..!!");
                }

                return false; // Prevent form submission
            });;
        });
    </script>

</head>

<body>
    <div class="bg-image"></div>
    <div class="bg-text">
        <form id="feedbackForm" name="feedbackForm" method="post" action="Feedbackpost.php">
            <h1>Feedback Form</h1>
            <fieldset>
                <legend>Personal Information</legend>
                <table>
                    <tr>
                        <td>
                            <label for="Name">Name:</label>
                        </td>
                        <td><input type="text" id="Name" name="Name" placeholder="Enter Your Name">
                            <small id="NameValidation"></small>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="Address">Address:</label></td>
                        <td><input type="text" id="Address" name="Address" placeholder="Enter Your Address">
                            <small id="AddressValidation"></small>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email:</label></td>
                        <td><input type="text" id="Email" name="Email" placeholder="Enter Your Email here">
                            <small id="EmailValidation"></small>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="Phone">Phone Number:</label></td>
                        <td><input type="tel" id="Phone" name="Phone" placeholder="Enter Contact Number">
                            <small id="PhoneValidation"></small>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="Gender">Gender:</label></td>
                        <td>
                            <table>
                                <tr>
                                    <td><input type="radio" value="Male" name="Gender"></td>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" value="Female" name="Gender"></td>
                                    <td>Female</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" value="Other" name="Gender"></td>
                                    <td>Other</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="DOB">Date Of Birth</label></td>
                        <td><input type="date" id="DOB" name="DOB">
                            <small id="DOBValidation"></small>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <legend>Your Feedback</legend>
                <div>
                  <input type="text" id="msg" name="msg" placeholder="Message">  
                <!-- <textarea name="User_msg" id="msg" name="msg" cols="40" rows="8" placeholder="Enter Your Msg Here"></textarea> -->
                    <small id="msgValidation"></small>
                </div>
            </fieldset>
            <div class="form-group">
                <input type="Submit" id="Submit" name="Submit"/>
            </div>
        </form>
    </div>
</body>

</html>