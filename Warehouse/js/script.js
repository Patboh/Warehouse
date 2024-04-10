const tabs = document.querySelectorAll('.boxbar .nav-item');

tabs.forEach((tab, index) => {
    tab.addEventListener('click', (e) => {
        tabs.forEach(tab => { tab.classList.remove('active') });
        tab.classList.add('active');
    })
});

const showPopup = document.querySelector('.show-popup');
const popupContainer = document.querySelector('.popup-container');
const closeBtn = document.querySelector('.cancle-btn');

showPopup.onclick = () => {
    popupContainer.classList.add('active');
}
closeBtn.onclick = () => {
    popupContainer.classList.remove('active');
}
$(document).ready(function () {
    $("#checkin-check").click(function () {
        $("form").submit();
        alert("Check in successfully")
    });
});
