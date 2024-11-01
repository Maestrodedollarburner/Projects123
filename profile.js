const logout = document.querySelector('.logout')
const profileName = document.querySelector('.profile-self')
const username = localStorage.getItem("username").split(`"`)[1];

logout.addEventListener('click', ()=>{
  localStorage.removeItem("jwtToken");
  localStorage.removeItem("user-email");
  window.location.replace("signin.html");
})
profileName.textContent = username
