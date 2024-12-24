let currentQuestionIndex = 0;
let minatBakatResults = {
    Realistic: 0,
    Investigative: 0,
    Artistic: 0,
    Social: 0,
    Enterprising: 0,
    Conventional: 0,
};

function fetchQuestions() {
    $.getJSON("/api/minatBakat/questions", (questionsData) => {
        questions = questionsData;
        displayQuestion();
    });
}

function displayQuestion() {
    if (currentQuestionIndex < questions.length) {
        const question = questions[currentQuestionIndex];
        $("#question").text(question.question);

        const options = question.options;

        $("#labelA").text(options.A.description);
        $("#labelB").text(options.B.description);
        $("#labelC").text(options.C.description);
        $("#labelD").text(options.D.description);

        $("#A").data("types", options.A.type);
        $("#B").data("types", options.B.type);
        $("#C").data("types", options.C.type);
        $("#D").data("types", options.D.type);
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
            minatBakatResults[answerOption.type] += 1;
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
    const minatBakatResults = calculateMinatBakat();
    $.post(
        "/api/minatBakat/results",
        { minatBakatResults, userId },
        (response) => {
            if (response.success) {
                alert(`Your Minat Bakat type is: ${minatBakatResults}`);
                window.location.href = "/profile/minat-bakat";
            }
        }
    );
}

function calculateMinatBakat() {
    const minatBakatTypeCounts = Object.entries(minatBakatResults);
    const sortedMinatBakatTypeCounts = [...minatBakatTypeCounts].sort(
        (a, b) => b[1] - a[1]
    );
    const topThreeMinatBakatTypes = sortedMinatBakatTypeCounts
        .slice(0, 3)
        .map(([type]) => type);
    return topThreeMinatBakatTypes;
}

$("#next-button").on("click", function () {
    recordAnswer();
});

fetchQuestions();
