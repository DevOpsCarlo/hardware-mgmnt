const btnSubmit = document.querySelector(".btn-submit");
const inputError = document.querySelector(".input-error");

console.log(btnSubmit);

const checkInputValue = function (e) {
  const inputUser = document.querySelector(".input-user");
  const inputPassword = document.querySelector(".password");
  const isUserEmpty = inputUser.value.trim() === "";
  const isPasswordEmpty = inputPassword.value.trim() === "";
  let hasError = false;
  inputError.textContent = "";
  inputError.classList.add("hidden");

  if (isUserEmpty || isPasswordEmpty) {
    inputError.textContent = "Please fill all the fields*";
    inputError.classList.remove("hidden");

    hasError = true;
  }
  if (hasError) {
    e.preventDefault();
  }
};

btnSubmit.addEventListener("click", checkInputValue);
