
function joinMemberValidation()
{
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;

    if(name == "" || name == null)
    {
        Swal.fire(
            'Nome is empty?',
            'Please entre your name?',
            'question'
          )
        return false;
    }
    else if(email == "" || email == null){
        Swal.fire(
            'Nome is empty?',
            'Please entre your name?',
            'question'
          )
        return false;
    }
    else if(phone == "" || phone == null){
        alert("Phone is empty");
        return false;
    }
    else if(address == "" || address == null){
        alert("Address is empty");
        return false;
    }
}

function feedbackValidation(){
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var feedback = document.getElementById("feedback").value;

    if(name == "" || name == null){
        Swal.fire(
            'Nome is empty?',
            'Please entre your name?',
            'question'
          )
        return false;
    }
    else if(phone == "" || phone == null)
    {
        alert("Phone is empty");
        return false;
    }
    else if(email == "" || email == null){
        alert("Email is Empty");
        return false;
    }
    else if(feedback  == "" || feedback == null){
        alert("Feedback is Empty");
        return false;
    }
}


function paymentValidation(){
    var name = document.getElementById("name").value;
    var amount = document.getElementById("amount").value;
    var date = document.getElementById("date").value;

    if(name == "" || name == null)
    {
        alert("You are not selected any name");
        return false;
    }
    else if(amount == "" || amount == null)
    {
        alert("Amount is Missing");
        return false;
    }
    else if(date == "" || date == null)
    {
        alert("Please Enter the date")
    }
}


function packageValidation(){
    var pack_name = document.getElementById("pack_name").value;
    var amount = document.getElementById("amount").value;
    var desc = document.getElementById("desc").value;

    if(pack_name == "" || pack_name == null){
        alert("Package name is empty");
        return false;
    }
    else if(amount == "" || amount == null){
        alert("Amount is empty");
        return false;
    }
    else if(desc == "" || desc == null){
        alert("Description is empty");
        return false;
    }
}

function noticeValidation(){
    var notice = document.getElementById("notice").value;

    if(notice == "" || notice == null){
        alert("Notice is missing");
        return false;
    }
}

function registrationmemberValidation(){

    var firstname = document.getElementById("firstname").value;
    var middlename = document.getElementById("middlename").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;
    var caddress = document.getElementById("caddress").value;
    var adhar = document.getElementById("adhar").value;

    if(firstname == "" || firstname == null){
        alert("Firstname is Missing");
        return false;
    }
    else if(middlename == "" || middlename == null){
        alert("Middle name is Missing");
        return false;
    }
    else if(lastname == "" || lastname == null){
        alert("Lastname is Missing");
        return false;
    }
    else if(email == "" || email == null){
        alert("Email is Missing");
        return false;
    }
    else if(phone == "" || phone == null){
        alert("Phone number is Missing");
        return false;
    }
    else if(address == "" || address == null){
        alert("Address is Missing");
        return false;
    }
    else if(caddress == "" || caddress == null){
        alert("Current Address is Missing");
        return false;
    }
    else if(adhar == "" || adhar == null){
        alert("Adhar Number is Missing");
        return false;
    }
}

function trainerValidation(){
    var firstname = document.getElementById("firstname").value;
    var middlename = document.getElementById("middlename").value;
    var lastname = document.getElementById("lastname").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value; 
    var experience = document.getElementById("experience").value;
    var address = document.getElementById("address").value;
    var adhar = document.getElementById("adhar").value;


    if(firstname == "" || firstname == null){
        alert("Firstname is Missing");
        return false;
    }
    else if(middlename == "" || middlename == null){
        alert("Middle name is Missing");
        return false;
    }
    else if(lastname == "" || lastname == null){
        alert("Lastname is Missing");
        return false;
    }
    else if(email == "" || email == null){
        alert("Email is Missing");
        return false;
    }
    else if(phone == "" || phone == null){
        alert("Phone number is Missing");
        return false;
    }
    else if(experience == "" || experience == null){
        alert("Exprience is Missing");
        return false;
    }
    else if(address == "" || address == null){
        alert("Address is Missing");
        return false;
    }
    else if(adhar == "" || adhar == null){
        alert("Adhar Number is Missing");
        return false;
    }



}