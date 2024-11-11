// Function to generate the quiz
function generateQuiz(nomorQuiz) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/tampilkan-quiz-mb', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const data = JSON.parse(xhr.responseText);
            
            if (data.pertanyaan) {
                document.getElementById('question-container').innerText = data.pertanyaan[0]; 
                
                document.getElementById('option_a_label').innerText = data.option_a;
                document.getElementById('option_b_label').innerText = data.option_b;
                document.getElementById('option_c_label').innerText = data.option_c;
                document.getElementById('option_d_label').innerText = data.option_d;
            } else {
                alert('No more questions!');
            }
            document.querySelector('input[name="nomor_quiz"]').value = nomorQuiz;
        } else if (xhr.readyState === 4 && xhr.status !== 200) {
            alert('An error occurred. Please try again.');
        }
    };

    xhr.send(JSON.stringify({ nomorQuiz: nomorQuiz }));
}
  
function submitQuiz(answer) {
    const nomorQuiz = document.querySelector('input[name="nomor_quiz"]').value;
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/simpan-hasil', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let nomorQuizNext = parseInt(nomorQuiz) + 1;
            generateQuiz(nomorQuizNext);
        }
    };    
    xhr.send(JSON.stringify({ nomorQuiz: nomorQuiz, jawaban: answer }));
}

function goNext() {
    const nomorQuiz = parseInt(document.querySelector('input[name="nomor_quiz"]').value) + 1;
    generateQuiz(nomorQuiz);
}
function goPrev() {
    const nomorQuiz = parseInt(document.querySelector('input[name="nomor_quiz"]').value) - 1;
    if (nomorQuiz >= 0) {
        document.querySelector('input[name="nomor_quiz"]').value = nomorQuiz;
        generateQuiz(nomorQuiz);
    }
}

function toggleCheckbox(selected) {
    const checkboxSetuju = document.getElementById("option_a");
    const checkboxTidakSetuju = document.getElementById("option_b");
    const checkboxOptionC = document.getElementById("option_c");
    const checkboxOptionD = document.getElementById("option_d");

    if (selected === 'setuju') {
        if (checkboxSetuju.checked) {
            checkboxTidakSetuju.checked = false;
            checkboxOptionC.checked = false;
            checkboxOptionD.checked = false;
        }
    } else if (selected === 'tidak-setuju') {
        if (checkboxTidakSetuju.checked) {
            checkboxSetuju.checked = false;
            checkboxOptionC.checked = false;
            checkboxOptionD.checked = false;
        }
    } else if (selected === 'option_c') {
        if (checkboxOptionC.checked) {
            checkboxSetuju.checked = false;
            checkboxTidakSetuju.checked = false;
            checkboxOptionD.checked = false;
        }
    } else if (selected === 'option_d') {
        if (checkboxOptionD.checked) {
            checkboxSetuju.checked = false;
            checkboxTidakSetuju.checked = false;
            checkboxOptionC.checked = false;
        }
    }
}
generateQuiz(0);