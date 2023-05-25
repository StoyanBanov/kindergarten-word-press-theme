const navUl = document.querySelector('.navbar-nav  ')

if (sessionStorage.getItem('currentPageId'))
    document.getElementById(sessionStorage.getItem('currentPageId')).style.textDecoration = 'underline'
else navUl.children[0].querySelector('a').parentElement.style.textDecoration = 'underline'
navUl.addEventListener('click', e => {
    if (e.target.tagName != 'A') return
    sessionStorage.setItem('currentPageId', e.target.parentElement.id)
})