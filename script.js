// changing tabs in about me
var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents")

function opentab(tabname) {
    for (tablink of tablinks) {
        tablink.classList.remove("active-link");
    }
    for (tabcontent of tabcontents) {
        tabcontent.classList.remove("active-tab");
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab")
}

// siding open and close menu
var menu = document.getElementById("menu");

function openMenu() {
    menu.style.right = "0";
}

function closeMenu() {
    menu.style.right = "-200px";
}

// contact form submission
const scriptURL = 'https://script.google.com/macros/s/AKfycbwGmyTzfNbx4JZMQ80WJa-jB8uTBe6Rzp4St9GYCiQqJCLOZEvB59jULr3eeSJPuThbEw/exec'
const form = document.forms['submit-to-google-sheet']
const success = document.getElementById("success")

form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form) })
        .then(response => {
            success.innerHTML = "Thanks for your message, I'll reply to you soon :)"
            setTimeout(() => {
                success.innerHTML = ""
            }, 5000)
            form.reset();
        })
        .catch(error => console.error('Error!', error.message))
})