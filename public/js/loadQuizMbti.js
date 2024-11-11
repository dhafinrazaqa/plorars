
function generateQuiz(nomorQuiz) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/tampilkan-quiz', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const data = JSON.parse(xhr.responseText);
            if(data.pertanyaan){
                document.getElementById('question-container').innerText = data.pertanyaan;
            }
            document.querySelector('input[name="nomor_quiz"]').value = nomorQuiz;
        } else if (xhr.readyState === 4 && xhr.status !== 200) {
            alert('An error occurred. Please try again.');
        }
    };

    xhr.send(JSON.stringify({ nomorQuiz : nomorQuiz }));
}

function submitQuiz(answer) {
    const nomorQuiz = document.querySelector('input[name="nomor_quiz"]').value;
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/simpan-hasil', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.querySelector('input[name="nomor_quiz"]').value = parseInt(nomorQuiz) + 1;
            generateQuiz(parseInt(nomorQuiz) + 1);
        }
    };

    xhr.send(JSON.stringify({ nomorQuiz: nomorQuiz, jawaban: answer }));
}

function goNext(){
    let nomorQuiz = parseInt(document.querySelector('input[name="nomor_quiz"]').value) + 1;
    generateQuiz(nomorQuiz);
}

function goPrev(){
    let nomorQuiz = parseInt(document.querySelector('input[name="nomor_quiz"]').value) - 1;
    if (nomorQuiz >= 0) {
        document.querySelector('input[name="nomor_quiz"]').value = nomorQuiz;
        generateQuiz(nomorQuiz);
    }
}



function toggleCheckbox(selected) {
    const checkboxSetuju = document.getElementById("option_a");
    const checkboxTidakSetuju = document.getElementById("option_b");

        if (selected === 'setuju') {
            if (checkboxSetuju.checked) {
                checkboxTidakSetuju.checked = false;
            }
        } else if (selected === 'tidak-setuju') {
            if (checkboxTidakSetuju.checked) {
                checkboxSetuju.checked = false;
            }
        }
    }

generateQuiz(0);