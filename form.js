function handleSubmit()
{
        let name = document.getElementById("name").value;
        let roll = document.getElementById("roll").value;
        let email = document.getElementById("email").value;


        if(name==="")
        {
            alert("name is required");
            return false;
        }
        console.log("Name:", name);
        console.log("Roll no.", roll);
        console.log("email id", email);

        alert("Form submitted successfully!");

        return false;
}