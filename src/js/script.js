const loginBtns = document.querySelectorAll('.login_btn')

const registerBtns = document.querySelectorAll('.register_btn')
const login_bg = document.querySelector('.login_bg')
const register_bg = document.querySelector('.register_bg')
const formCloses = document.querySelectorAll('.form-close')

loginBtns.forEach((loginBtn) => {
    loginBtn.onclick = ()=> {
        if (register_bg.classList.contains('active')) {
            register_bg.classList.remove('active')
        }
        login_bg.classList.toggle('active')
    }
})

registerBtns.forEach((registerBtn) => {
    registerBtn.onclick = ()=> {
        if (login_bg.classList.contains('active')) {
            login_bg.classList.remove('active')
        }
        register_bg.classList.toggle('active')
    }
})

formCloses.forEach((formClose) => {
    formClose.onclick = () => {
        formClose.parentElement.parentElement.classList.remove('active')
    }
})
