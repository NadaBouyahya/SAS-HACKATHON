var words = ["text1", "text2", "text3", "text4", "text5"]
var levels = [25, 10, 5]
var timer = levels[1];
var timer_count = document.querySelector("#timer");
var level_section = document.querySelector(".button_level");
var lost_message = document.querySelector(".message_lost")

// Timer count

function changeDifficulty(lev) {
    timer = levels[lev];
    // console.log(defaultLev);
}
function CountTime() {
    if (timer == 0) {
        level_section.style.display="none";
        lost_message.style.display="block";
    }
    else {
        timer--;
        timer_count.innerHTML = timer;
    }
}

setInterval(CountTime, 1000);