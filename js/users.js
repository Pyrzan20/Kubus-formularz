const users = document.querySelector('main.glowna>section>section>p#users');
const addUser = document.querySelector('main.glowna>section>section>i.fa-plus-circle');
const removeUser = document.querySelector("main.glowna>section>section>i.fa-minus-circle");
const oneUserIcon = document.querySelector("main>section>i.fa-user");
const twoUsersIcon = document.querySelector("main>section>i.fa-user-friends");
const threeUsersIcon = document.querySelector("main>section>i.fa-users");
const alarm = document.querySelector('aside.alert');
const closeAlarm = document.querySelector('aside.alert>button');
const alarmJQ = $(alarm);
const next = document.querySelector('main.glowna');

function changeIcon(value) {
    if (value == 1) {
        oneUserIcon.classList.add("active");
        twoUsersIcon.classList.remove('active');
        threeUsersIcon.classList.remove("active");
    } else if (value == 2) {
        oneUserIcon.classList.remove("active");
        twoUsersIcon.classList.add('active');
        threeUsersIcon.classList.remove("active");
    } else if (value == 3) {
        oneUserIcon.classList.remove("active");
        twoUsersIcon.classList.remove('active');
        threeUsersIcon.classList.add("active");
    }
}

addUser.addEventListener('click', function () {
    let usersValue = parseInt(users.innerText);
    usersValue += 1;

    if (usersValue < 4) {
        console.log(usersValue);

        changeIcon(usersValue);
        users.innerText = usersValue;
    } else if (usersValue >= 4) {
        alarm.classList.add("active");
        alarmJQ.animate({
            opacity: "1"
        }, 500);
    }
});

removeUser.addEventListener('click', function () {
    let usersValue = parseInt(users.innerText);

    if (usersValue > 1) {
        usersValue -= 1;
        changeIcon(usersValue);
        users.innerText = usersValue
    } else if (usersValue < 1) {
        alert("coś poszło nie tak")
    }
})

closeAlarm.addEventListener('click', function () {
    alarm.classList.remove("active");
})

next.addEventListener('click', function () {
    document.cookie = "zamowienia=" + users.innerText;
})