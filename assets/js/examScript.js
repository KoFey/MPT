let quests = [];

const wrong = new Audio("../../audio/wrong.mp3");
const correct = new Audio("../../audio/correct.mp3");

let dateStart;
let dateEnd;

const X = document.getElementById("x");
const Y = document.getElementById("y");
const answer = document.getElementById("answer_box");
const progress = document.getElementById("progress");
const nextbtn = document.getElementById("btn_next");
const btn_skip = document.getElementById("btn_skip");

let counter = 0;
let max = 15;

let ans;

getQuest();

function reset() {
    progress.innerHTML = "";
    answer.innerText = "";
    nextbtn.removeAttribute("disabled");
    btn_skip.removeAttribute("disabled", "");
    document.getElementById('maxQuests').innerText = "из " + max;
    document.getElementById('score').setAttribute('hidden',"");
    counter = 0;
    quests= [];
}

function getQuest() {
    reset();
    formDate = new FormData();
    formDate.set("max", max);
    fetch('/trainer/createExam', {
        method: 'POST',
        body: formDate,
    })
        .then(response => response.json())
        .then(data => {
            if (data && data.length > 0) {
                data.forEach(e => {
                    quests.push(e);
                    X.innerText = quests[counter][0];
                    Y.innerText = quests[counter][1];
                    ans = quests[counter]["sum"];
                })
            }
        }).then(() => {
        let preloaderEl = document.getElementById('preloader');
        preloaderEl.classList.add('d-none');
    });
}

document.addEventListener('keydown', function (event) {
    if (document.getElementById("exampleModal").getAttribute("aria-hidden") === null) {
        return;
    }
    const KEY = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    if (event.code == "Backspace") {
        answer.innerText = answer.innerText.slice(0, -1);
    } else for (i = 0; i < KEY.length; i++) {
        if (event.code === "Digit" + KEY[i]) {
            if (answer.innerText === "end") {
                return;
            }
            if (answer.innerText.length == ans.toString().length) {
                wrong.play();
            } else {
                answer.innerText += KEY[i];
            }
            break;
        }
    }
});

function generateInfo() {
    let table = document.getElementById('score');
    let time = document.getElementById('time');
    let percent = document.getElementById('percent');
    let count = document.getElementById('count');
    let spanTimer = document.getElementById('timer');
    let spanPercent = document.getElementById('spanPercent');
    let spanCount = document.getElementById('spanCount');

    let end = new Date(dateEnd - dateStart);

    counter = progress.getElementsByClassName('bg-success').length;
    let percents = Math.floor((counter * 100) / max);

    if (end.getSeconds() <= 100*1.25 && end.getMinutes() === 0) {
        spanTimer.classList.add("active");
    }
    if (counter > 8) {
        spanCount.classList.add("active");
    }
    if (percents === 100) {
        spanPercent.classList.add("active");
    }

    time.innerText = Math.floor((dateEnd - dateStart) / 1000) + " сек";

    count.innerText = counter

    percent.innerText = percents + "%";


    table.removeAttribute('hidden');


}

function next(skip = false) {
    counter++;
    if (counter === 1) {
        dateStart = new Date();
    }
    if (parseInt(answer.innerText) === ans && !skip) {
        progress.innerHTML += `<div class="progress-bar bg-success" role="progressbar" style="width: ` + 100 / max + `%" aria-valuenow="` + 100 / max + `" aria-valuemin="0" aria-valuemax="100"></div>`;
        correct.play();
    } else {
        progress.innerHTML += `<div class="progress-bar bg-danger" role="progressbar" style="width: ` + 100 / max + `%" aria-valuenow="` + 100 / max + `"
             aria-valuemin="0" aria-valuemax="100"></div>`;
        wrong.play();
    }
    if (counter >= max) {
        answer.innerText = "end";

        dateEnd = new Date();

        nextbtn.setAttribute("disabled", "");
        btn_skip.setAttribute("disabled", "");

        generateInfo();

    } else {
        X.innerText = quests[counter][0];
        Y.innerText = quests[counter][1];
        answer.innerText = "";
        ans = quests[counter]["sum"];
    }
}

function setting() {
    max = document.getElementById("formGroupCountInput").value;
    formDate = new FormData();
    formDate.set("countQuest", max);
    fetch('/trainer/setting', {
        method: 'POST',
        body: formDate,
    })
    getQuest();
}

function $_GET(key) {
    var p = window.location.search;
    p = p.match(new RegExp(key + '=([^&=]+)'));
    return p ? p[1] : false;
}
