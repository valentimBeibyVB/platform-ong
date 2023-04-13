'use strict'

const formRegisterUser = document.querySelector("#form-register-user");

formRegisterUser.addEventListener('submit', (e) => {
    e.preventDefault()
    const fd = new FormData(e.currentTarget)
    fetch('http://localhost/remar.ao/register-user.php', {
        method: 'POST',
        body: fd,
    })
        .then((response) => response.json())
        .then(data => {
            data.success
            alert(data.message)
        })
})

const formLogar = document.querySelector("#form-register-user");

formRegisterUser.addEventListener('submit', (e) => {
    e.preventDefault()
    const fd = new FormData(e.currentTarget)
    fetch('http://localhost/remar.ao/register-user.php', {
        method: 'POST',
        body: fd,
    })
        .then((response) => response.json())
        .then(data => {
            data.success
            alert(data.message)
        })
})