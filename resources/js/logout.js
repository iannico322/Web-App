function logOut() {
    let text = "Are you sure you want to logout?";

    if (confirm(text) == true) {

        window.location.href = 'index.php';
     
    
    } else {
        text = "You canceled!";
    }
    document.getElementById("demo").innerHTML = text;
}