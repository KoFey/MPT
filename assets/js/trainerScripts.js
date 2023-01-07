const quests = [];
const trainerId = $_GET('trainer');

const X = document.getElementById("x");
const Y = document.getElementById("y");
const answer = document.getElementById("answer_box");

let counter = 0;
const max = 10;

let ans;

function getQuest() {
    if ($_GET('trainer') !== false) {
        fetch('/trainer/createQuest', {
            method: 'POST',
        })
            .then(response => response.json())
            .then(data => {
                if (data && data.length > 0) {
                    data.forEach(e => {
                        quests.push([e, e * trainerId]);
                        X.innerText = quests[counter][0];
                        Y.innerText = trainerId;
                        ans = quests[counter][1];
                    })
                }
            });
    }
}

getQuest();

document.addEventListener('keydown', function (event) {
    const KEY = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    console.log(1);
    for (i = 0; i < KEY.length; i++) {
        if (event.code === "Digit" + KEY[i]) {
            answer.innerText += KEY[i];
            break;
        }
    }
});

function next() {
    counter++;
    if (counter >= max) {
        answer.innerText = "end";
    } else {
        let rand = Math.floor(Math.random());
        if (rand) {
            X.innerText = trainerId;
            Y.innerText = quests[counter][0];
        } else {
            Y.innerText = trainerId;
            X.innerText = quests[counter][0];
        }
        answer.innerText = "";
        ans = quests[counter][1];
    }
}

function $_GET(key) {
    var p = window.location.search;
    p = p.match(new RegExp(key + '=([^&=]+)'));
    return p ? p[1] : false;
}