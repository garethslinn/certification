

quiz.certification = function() {

var tracker;

  if (quiz.storage.get('cert-tracker')) {
    tracker = quiz.storage.get('cert-tracker');
  } else {
    tracker = {
      currentQuestion: 1,
      usersAnswer: 0,
      currentAnswer: 1,
      answers: []
    };
  }


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

    //quiz.answers
    for (i = 0; i < 4; ++i) {
      answerLables[i].innerHTML = quiz.answers[tracker.currentQuestion-1].ans[i];
    }
  }

  for (i = 0; i < answerOptions.length; ++i) {
    answerOptions[i].addEventListener("click", function(e) {
      tracker.currentAnswer = this.id.split("q").pop();
      quiz.storage.set('cert-tracker', tracker);
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

function outOfTime() {
  alert('Sorry you are out of time!!!, please take the test again');
  quiz.storage.del('cert-tracker');
  quiz.storage.del('cert-timer');

}

function startTimer(duration, display) {
  var timer = duration, minutes, seconds;
  if (quiz.storage.get('cert-timer')) {
    duration = parseInt(quiz.storage.get('cert-timer').minutes) * 60 + parseInt(quiz.storage.get('cert-timer').seconds);

    timer = duration, minutes, seconds;

  }
  var interval = setInterval(function () {

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

    if (timer === 0) {
      clearInterval(interval);
      outOfTime();
    }



  }, 1);
}

window.onload = function () {
  var mins = 60 * 45,
    display = document.querySelector('#time');
  startTimer(mins, display);
  document.querySelector('.max').insertAdjacentHTML('afterbegin',quiz.answers.length);
  quiz.certification();
};




