<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Certification </title>
        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/main.css">



    </head>
    <body>

    <div class="quiz">

        <h1>Title</h1>

        <div class="quiz-container">
            <div class="questionCount">Question <span id="questionNumber">1</span> of <span class="max"></span> <span id="time" class="timer"></span></div>
            <h2 class="question">Question</h2>
            <ul class="answerOptions">
                <li class="answerOption">
                    <input type="radio" class="radioCustomButton" checked name="radioGroup" id="q1" value="">
                    <label class="radioCustomLabel" for="q1">q1</label>
                </li>
                <li class="answerOption">
                    <input type="radio" class="radioCustomButton" name="radioGroup" id="q2" value="">
                    <label class="radioCustomLabel" for="q2">q2</label>
                </li>
                <li class="answerOption">
                    <input type="radio" class="radioCustomButton" name="radioGroup" id="q3" value="">
                    <label class="radioCustomLabel" for="q3">q3</label>
                </li>
                <li class="answerOption">
                    <input type="radio" class="radioCustomButton" name="radioGroup" id="q4" value="">
                    <label class="radioCustomLabel" for="q4">q4</label>
                </li>

            </ul>

        </div>
        <button id="submit" class="button">Next</button>

        <script src="js/storage.js"></script>
        <script src="js/questions.js"></script>
        <script src="js/answers.js"></script>
        <script src="js/quiz.js"></script>

    </body>
</html>
