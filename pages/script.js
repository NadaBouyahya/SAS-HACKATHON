var words = ["text1", "text2", "text3", "text4", "text5"]
var levels = [
    { difficulty: "Easy", value: 25 },
    { difficulty: "Normal", value: 10 },
    { difficulty: "Hard", value: 5 }
]
var timer = levels[1].value;
var level_time = document.querySelector(".level_time");
var timer_count = document.querySelector(".timer");
var level_section = document.querySelector(".button_level");
var lost_message = document.querySelector(".message_lost");

var game_interface = document.querySelector("#game_interface");
var choose_level = document.querySelector(".choose_level");
var playing_lvl = document.querySelector("#playing_lvl");
var word_show = document.querySelector("#word_show");

var randomWord = "";

var pause = true;

// Timer count

function changeDifficulty(lev) {
    choose_level.style.display = "none";
    game_interface.style.display = "flex";
    playing_lvl.innerHTML = levels[lev].difficulty;
    level_time.innerHTML = levels[lev].value;
    timer = levels[lev].value;

    // console.log(defaultLev);
}
function startPlay() {
    pause = false;
    TypeWord();
    word_show.innerHTML = randomWord;
};

function CountTime() {
    if (pause == true) {
        return;
    }

    if (timer == 0) {
        game_interface.style.display = "none";
        lost_message.style.display = "block";
    }
    else {
        timer--;
        timer_count.innerHTML = timer;
    }

}

function TypeWord(){
    randomWord = words[Math.floor(Math.random() * words.length)]
    console.log(randomWord);
}

setInterval(CountTime, 1000);


