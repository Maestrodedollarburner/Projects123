const email = document.querySelector('#email')
const password = document.querySelector('#password')
const err = ''
const logInBtn = document.querySelector('.log-in-btn')

logInBtn.addEventListener('click', async() => {
  try {
    const data = await fetch("http://localhost:5000/api/v1/auth/login", {
      method: "POST",
      body: JSON.stringify({
        email: email.value,
        password: password.value,
      }),
      headers: {
        "Content-Type": "application/json",
      },
    });
    const dd = await data.json();
    if (dd.msg) {
      err.textContent = dd.msg;
      email.value = "";
      password.value = "";
    } else {
      localStorage.setItem("jwtToken", JSON.stringify(dd.token));
      localStorage.setItem("user-email", JSON.stringify(dd.user.email));
      console.log(dd);
      password.value = "";
      email.value = "";
      window.location.replace("dashboard.html");
    }
  } catch (error) {
    console.log(error);
    password.value = "";
    email.value = ""    ;
  }
})

