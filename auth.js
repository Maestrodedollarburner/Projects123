const fullname = document.querySelector('#fullname')
const email = document.querySelector('#email')
const staffId = document.querySelector('#staffID')
const password = document.querySelector('#password')
const submit = document.querySelector('.submit-btn')
const err = ''



submit.addEventListener('click',  async () => {
  //   console.log(password.value, phone.value, email.value, fullname.value);
  console.log({
    fullname: fullname.value,
    email: email.value,
    staffId: staffId.value,
    password: password.value,
  })
  try {
    const data = await fetch("http://localhost:5000/api/v1/auth/register", {
      method: "POST",
      body: JSON.stringify({
        fullname: fullname.value,
        email: email.value,
        staffId: staffId.value,
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
      fullname.value = "";
      staffId.value = "";
    } else {
      // localStorage.setItem("jwtToken", JSON.stringify(dd.token));
      // localStorage.setItem("user-email", JSON.stringify(dd.user.email));
      console.log(dd);
      fullname.value = "";
      email.value = "";
      staffId.value = "";
      password.value = "";
      window.location.replace("signin.html");
    }
  } catch (error) {
    console.log(error);
    fullname.value = "";
    email.value = "";
    staffId.value = "";
    password.value = "";
  }
})
