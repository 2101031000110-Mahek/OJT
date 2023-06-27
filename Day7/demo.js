function demoExternalAlert()
{
    alert("External Alert.");
}
function demoExternalConfirm()
{
    if(confirm("Are You Sure..??")){
        alert("YESSS");
    }
    else{
        alert("NOOO");
    }
}
function demoExternalPrompt()
{
    var fName=prompt("Enter Firstname Here..");
    var lName=prompt("Enter Lastname Here..");
    alert(fName+" "+lName)
}