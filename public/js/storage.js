var quiz = quiz || {};


'use strict';

quiz.cookie = (function() {

  return {

    // Set cookie
    set: function(key, value, days) {
      var expires;
      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = '; expires=' + date.toGMTString();
      } else {
        expires = '';
      }
      document.cookie = key + '=' + value + expires + '; path=/';
    },

    // Read cookie
    get: function(key) {
      var nameEQ = key + '=';
      var ca = document.cookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
          c = c.substring(1, c.length);
        }
        if (c.indexOf(nameEQ) === 0) {
          return c.substring(nameEQ.length, c.length);
        }
      }
      return null;
    },

    // Delete cookie
    del: function(key) {
      return quiz.cookie.set(key, '', -1);
    }
  };

}());


quiz.storage = (function() {

  // Local Storage Supported
  var storage = true;

  return {
    set: function(key, value) {
      if (storage) {
        localStorage.setItem(key, JSON.stringify(value));
      } else {
        quiz.cookie.set(key, JSON.stringify(value), 30);
      }
    },
    get: function(key) {
      if (storage) {
        if (JSON.parse(localStorage.getItem(key))) {
          return JSON.parse(localStorage.getItem(key));
        }
      } else {
        return JSON.parse(quiz.cookie.get(key));
      }
    },
    del: function(key) {
      if (storage) {
        localStorage.removeItem(key);
      } else {
        quiz.cookie.del(key);
      }
    }
  };
})();


quiz.sessionStorage = (function() {

  return {
    set: function(key, value) {
      if (Modernizr.sessionstorage) {
        sessionStorage.setItem(key, JSON.stringify(value));
      }
    },
    get: function(key) {
      if (Modernizr.sessionstorage) {
        return JSON.parse(sessionStorage.getItem(key));
      }
    },
    del: function(key) {
      if (Modernizr.sessionstorage) {
        sessionStorage.removeItem(key);
      }
    }
  };
})();
