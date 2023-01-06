
let quests = new Array();
let trainerId = $_GET('trainer');
function getQuest() {
    if ($_GET('trainer')!= false) {

        fetch('/trainer/createQuest', {
            method: 'POST',
        })
            .then(response=> response.json())
            .then(data=> {
                console.log(data);
                data.forEach(e=>{
                    quests.push([e, e*trainerId]);
                })
            });
    }
}
getQuest();

let counter = 0;
let max = 10;
console.log(quests);
console.log(quests[0]);
document.getElementById("x").innerText = quests[counter][0];
document.getElementById("y").innerText = trainerId;
let ans = parseInt(document.getElementById("x").innerText)*parseInt(document.getElementById("y").innerText);
console.log(ans);



document.addEventListener('keydown', function(event) {
    const KEY = ["1","2","3","4","5","6","7","8","9","0"];
    let answer = document.getElementById("answer_box");
    for (i = 0;i<KEY.length;i++) {
        if (event.code == "Digit"+KEY[i]) {
            answer.innerText += KEY[i];
            if(parseInt(answer.innerText)==ans) {

            }
            break;
        }
    }
});


function $_GET(key) {
    var p = window.location.search;
    p = p.match(new RegExp(key + '=([^&=]+)'));
    return p ? p[1] : false;
}