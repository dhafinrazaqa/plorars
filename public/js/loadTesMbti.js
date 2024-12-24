let currentQuestionIndex = 0;
let mbtiResults = { E: 0, I: 0, S: 0, N: 0, T: 0, F: 0, J: 0, P: 0 };

function fetchQuestions() {
    $.getJSON("/api/mbti/questions", (questionsData) => {
        questions = questionsData;
        displayQuestion();
    });
}

function displayQuestion() {
    if (currentQuestionIndex < questions.length) {
        const question = questions[currentQuestionIndex];
        $("#question").text(question.question);

        // Dynamically generate the radio buttons based on options
        const options = question.options;
        $("#agree").data("points", options.A.point);
        $("#disagree").data("points", options.B.point);
    } else {
        submitResults();
    }
}

function recordAnswer() {
    const selectedAnswer = $('input[name="answer"]:checked').val();

    if (selectedAnswer) {
        const currentQuestion = questions[currentQuestionIndex];
        const answerOption = currentQuestion.options[selectedAnswer];

        if (answerOption) {
            mbtiResults[answerOption.type] += answerOption.point;
            currentQuestionIndex++;
            displayQuestion();
        } else {
            alert("Invalid question or answer");
        }
    } else {
        alert("Please select an option before moving to the next question");
    }
}

function submitResults() {
    const userId = $("#user-id").text();
    const mbtiResults = calculateMBTI();
    $.post("/api/mbti/results", { mbtiResults, userId }, (response) => {
        if (response.success) {
            alert(`Your MBTI type is: ${mbtiResults}`);
            window.location.href = "/profile/mbti";
        }
    });
}

function calculateMBTI() {
    return (
        (mbtiResults.E > mbtiResults.I ? "E" : "I") +
        (mbtiResults.S > mbtiResults.N ? "S" : "N") +
        (mbtiResults.T > mbtiResults.F ? "T" : "F") +
        (mbtiResults.J > mbtiResults.P ? "J" : "P")
    );
}

$("#next-button").on("click", function () {
    recordAnswer();
});

fetchQuestions();
