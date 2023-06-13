const form = document.querySelector("form");
const eField = form.querySelector(".email");
const eInput = eField.querySelector("input");
const pField = form.querySelector(".password");
const pInput = pField.querySelector("input");

form.onsubmit = (e) => {
  e.preventDefault(); // Prevent form submitting

  // If email and password are blank, add shake class to indicate error
  (eInput.value == "") ? eField.classList.add("shake", "error") : checkEmail();
  (pInput.value == "") ? pField.classList.add("shake", "error") : checkPass();

  setTimeout(() => {
    // Remove shake class after 500ms
    eField.classList.remove("shake");
    pField.classList.remove("shake");
  }, 500);

  eInput.onkeyup = () => { checkEmail(); }; // Call checkEmail function on email input keyup
  pInput.onkeyup = () => { checkPass(); }; // Call checkPass function on password input keyup

  function checkEmail() {
    // Check email function
    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; // Pattern to validate email

    if (!eInput.value.match(pattern)) {
      // If pattern not matched, add error and remove valid class
      eField.classList.add("error");
      eField.classList.remove("valid");
      let errorTxt = eField.querySelector(".error-txt");

      // If email value is not empty, show "Enter a valid email address" else show "Email can't be blank"
      (eInput.value != "")
        ? (errorTxt.innerText = "Shkruaj nje email valide!")
        : (errorTxt.innerText = "Email nuk mund te jete bosh!");
    } else {
      // If pattern matched, remove error and add valid class
      eField.classList.remove("error");
      eField.classList.add("valid");
    }
  }

  function checkPass() {
    // Check password function
    if (pInput.value == "") {
      // If password is empty, add error and remove valid class
      pField.classList.add("error");
      pField.classList.remove("valid");
    } else {
      // If password is not empty, remove error and add valid class
      pField.classList.remove("error");
      pField.classList.add("valid");
    }
  }

  // If eField and pField don't contain error class, it means the user filled in the details properly
  if (!eField.classList.contains("error") && !pField.classList.contains("error")) {
    window.location.href = form.getAttribute("action"); // Redirect the user to the specified URL in the form's action attribute
  }
};

function goBack() {
  window.history.back();
}