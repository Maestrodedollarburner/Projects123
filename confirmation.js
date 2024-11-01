
const meterNum = document.querySelector('#meter')
const meterName = document.querySelector('#meter-name')
const meterAddress = document.querySelector('#meter-address')
const meterReading = document.querySelector('#meter-readings')
const meterNumber = document.querySelector('#meter-num')
const saveBtn = document.querySelector('.save')
const updateBtn = document.querySelector('.save-edit')
const err = ''
const token = localStorage.getItem('jwtToken')
const overlay = document.querySelector('.overlay')
const cls = document.querySelector('.cls-btn')
const oName = document.querySelector('.overlay-name')
const logout = document.querySelector('.logout')
const oRead = document.querySelector('.overlay-read')
const oNum = document.querySelector('.overlay-num')
const editConf = document.querySelector('.conf-edit-form')
const pop = document.querySelector('.pop-win')
const editBtn = document.querySelector('.edit-btn')
const cancelBtn = document.querySelector('.cancel-btn')
const oAddress = document.querySelector('.overlay-address')
if (!token) {
  window.location.replace("signin.html");
}
let dd;
cls.addEventListener('click', () => overlay.classList.remove('show'))
saveBtn.addEventListener('click', async () => {
  saveBtn.classList.add('show')


  try {
    const data = await fetch(`http://localhost:5000/api/v1/sherp/${meterNum.value}`);
     dd = await data.json();
    console.log(dd)
    overlay.classList.add('show')
    oName.textContent = `Meter Name: ${dd.sherp.name}`
    oAddress.textContent = `Meter Address: ${dd.sherp.address}`
    oRead.textContent = `Meter Readings: ${dd.sherp.meterRead}`
    oNum.textContent = `Meter Number: ${dd.sherp.meterNum}`
    
    if (dd.msg) {
      err.textContent = dd.msg;

    } else {

      console.log(dd);
      saveBtn.classList.remove('show')

      // window.location.replace("dashboard.html");
    }
  } catch (error) {
    console.log(error);
    saveBtn.classList.remove('show')

  }

})

logout.addEventListener('click', ()=>{
  localStorage.removeItem("jwtToken");
  localStorage.removeItem("user-email");
  window.location.replace("signin.html");
})


editBtn.addEventListener('click', ()=> {
    editConf.classList.add('show')
    pop.classList.add('hide')
    meterName.value = dd.sherp.name
    meterAddress.value = dd.sherp.address
    meterNumber.value = dd.sherp.meterNum
    meterReading.value = dd.sherp.meterRead
    console.log(dd)
})
cancelBtn.addEventListener('click', ()=> {
    editConf.classList.remove('show')

    pop.classList.remove('hide')

})

updateBtn.addEventListener('click', async () => {
    try {
        const data = await fetch(`http://localhost:5000/api/v1/sherp/${meterNum.value}`, {
            method: "PATCH",
            body: JSON.stringify({
                name: meterName.value,
                address: meterAddress.value,
                meterNum: meterNumber.value,
                meterRead: meterReading.value,
            }),
           
          }); 
    
             const dd = await data.json();
        console.log(dd)
        overlay.classList.add('show')
        oName.textContent = `Meter Name: ${dd.sherp.name}`
        oAddress.textContent = `Meter Address: ${dd.sherp.address}`
        oRead.textContent = `Meter Readings: ${dd.sherp.meterRead}`
        oNum.textContent = `Meter Number: ${dd.sherp.meterNum}`
        
        if (dd.msg) {
          err.textContent = dd.msg;
    
        } else {
    
          console.log(dd);
          saveBtn.classList.remove('show')
    
          // window.location.replace("dashboard.html");
        }
      } catch (error) {
        console.log(error);
        saveBtn.classList.remove('show')
    
      }
    
      
})