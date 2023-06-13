require('./bootstrap');

console.log('Starbucks 2.0')

window.addEventListener('load', () => {
    const statusJaringan = document.getElementById('networkstatus')
    statusJaringan.innerHTML = ''

    const statusOnlineOffline = () => {
        statusJaringan.classList.remove('offline')
        statusJaringan.classList.remove('online')

        const kondisi = navigator.onLine
        if (!kondisi) {
            statusJaringan.innerHTML = 'You are offline, check your network connection'
            statusJaringan.classList.add('offline')
            statusJaringan.style.display = 'block'
            document.querySelector('.sign-in').style.visibility = 'hidden'
            return
        }
        statusJaringan.innerHTML = 'You are now online'
        statusJaringan.classList.add('online')
        document.querySelector('.sign-in').style.visibility = 'visible'

        setTimeout(() => {
            statusJaringan.style.display = 'none'
            console.log('setTimeout')
        }, 3000)
    }

    window.addEventListener('online', statusOnlineOffline)
    window.addEventListener('offline', statusOnlineOffline)
})
