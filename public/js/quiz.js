

quiz.certification = function() {

  var tracker = {
    currentQuestion: 1,
    usersAnswer: 0,
    currentAnswer: 1,
    answers: []
  };

  var answerOptions = document.querySelectorAll('.answerOptions input');
  var answerLables = document.querySelectorAll('.answerOptions label');
  var nextQuestion = document.querySelector('.button');
  var questionNumber = document.querySelector('#questionNumber');
  var question = document.querySelector('.question');


  quiz.storage.set('cert-tracker', tracker);

  function getNext() {
    // apply current question number
    questionNumber.innerHTML = tracker.currentQuestion;
    // apply question
    question.innerHTML = quiz.questions[tracker.currentQuestion-1].q
  }

  for (i = 0; i < answerOptions.length; ++i) {

    answerOptions[i].addEventListener("click", function(e) {
      tracker.currentAnswer = this.id.split("q").pop();
      quiz.storage.set('cert-tracker', tracker);
      console.log("Nope.");
    });
  }

  nextQuestion.addEventListener("click", function(e) {
    var $this = this;
    tracker.currentQuestion = tracker.currentQuestion + 1;
    tracker.answers.push(tracker.currentAnswer);
    quiz.storage.set('cert-tracker', tracker);
    this.disabled = true;
    setTimeout(function(){
      $this.disabled = false;
    }, 1000);
    getNext();

  });
  getNext();
};


/**
 * timer
 */

function startTimer(duration, display) {
  var timer = duration, minutes, seconds;
  setInterval(function () {
    minutes = parseInt(timer / 60, 10);
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.textContent = minutes + ":" + seconds;
    quiz.storage.set( 'cert-timer' , {
      'minutes': minutes,
      'seconds': seconds
    } );

    if (--timer < 0) {
      timer = duration;
    }



  }, 1000);
}

window.onload = function () {
  var mins = 60 * 45,
    display = document.querySelector('#time');
  startTimer(mins, display);
  document.querySelector('.max').insertAdjacentHTML('afterbegin',quiz.answers[0].id);
  quiz.certification();
};




