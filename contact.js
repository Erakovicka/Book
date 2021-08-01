const contactForm = document.getElementById("contactForm")
const successModal = document.querySelector(".successModal")
const box = document.querySelector(".successModal .box")
const message = document.querySelector(".successModal .box span")
const timer = 3000

contactForm.addEventListener("submit", formAction)


function errorMessage() {
    box.style.backgroundColor = "rgba(128, 0, 0, 0.9)"
    message.innerHTML = "Greska u slanju poruke."
    successModal.classList.add("active")
    setTimeout(() => {
        successModal.classList.remove("active")
    }, timer);
}

function successMessage() {
    box.style.backgroundColor = "rgba(0, 128, 0, 0.9)"
    message.innerHTML = "Poruka uspesno poslata."
    successModal.classList.add("active")
    setTimeout(() => {
        successModal.classList.remove("active")
    }, timer);
}


function formAction(e) {

    e.preventDefault()

    const body = {
        fullName: contactForm.fullName.value,
        phone: contactForm.phone.value,
        email: contactForm.email.value,
        message: contactForm.message.value
    }

    const { fullName, phone, email, message } = body

    if (fullName.length > 5, phone.length > 7, email.includes("@"), message.length > 20) {
        submitData()
    } else {
        alert("Forma nije validna.")
    }
    function submitData() {
        try {
            fetch("mailer.php?srb=1", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(body)
            })
                .then(res => res.json())
                .then(data => {
                    if (data.messageSent) {
                        successMessage()
                    } else {
                        errorMessage()
                    }

                })
                .catch(err => {
                    errorMessage()
                })
        } catch (error) {
            errorMessage()
        }

    }
}