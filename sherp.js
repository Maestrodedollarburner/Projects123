const name = document.querySelector('#meterName')
const address = document.querySelector('#address')
const meterNum = document.querySelector('#meterNum')
const meterRead = document.querySelector('#meterReadings')
const err = ''
const saveBtn = document.querySelector('.save')


const overlay = document.querySelector('.overlay');
const clsBtn = document.querySelector('.cls-btn')
const confSelect = document.querySelector('#confirm');
const mNum = document.querySelector('.m-num');
const mRead = document.querySelector('.m-read');



// clsBtn.addEventListener('click', () => {
//     overlay.classList.remove('hidden')
// })

// if (confSelect.value === mNum.className) {
//     mNum.classList.add('hidden')
//     mRead.classList.remove('hidden')
// } else {
//     mRead.classList.add('hidden')
//     mNum.classList.remove('hidden')

// }

// confSelect.addEventListener('change', () => {
//     if (confSelect.value === mNum.className) {
//         mNum.classList.add('hidden')
//         mRead.classList.remove('hidden')
//     } else {
//         mRead.classList.add('hidden')
//         mNum.classList.remove('hidden')

//     }

// })

saveBtn.addEventListener('click', async() => {
    overlay.classList.add('hidden')
    const token = JSON.parse(localStorage.getItem("jwtToken"));
  try {
    const data = await fetch("http://localhost:5000/api/v1/auth/sherp", {
      method: "POST",
      body: JSON.stringify({
        name: name.value,
        address: address.value,
        meterNum: meterNum.value,
        meterRead: meterRead.value,
      
    }),
      headers: {
        "Content-Type": "application/json",
         "Authorization": `Bearer ${token}`
      },
    });
    const dd = await data.json();
    if (dd.msg) {
      err.textContent = dd.msg;
    //   email.value = "";
    //   password.value = "";
    } else {
    //   localStorage.setItem("jwtToken", JSON.stringify(dd.token));
    //   localStorage.setItem("user-email", JSON.stringify(dd.user.email));
      console.log(dd);
    //   password.value = "";
    //   email.value = "";
      window.location.replace("dashboard.html");
    }
  } catch (error) {
    console.log(error);
    // password.value = "";
    // email.value = ""    ;
  }
})

