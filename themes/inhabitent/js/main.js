/**
 * main.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/Inhabitent Starter Theme/pull/136
 */
(function () {
    var searchButton = document.getElementById('search-button');
    var searchField = document.getElementById('search');

    searchButton.onclick = function() {
        searchField.classList.toggle('search-expanded');
        searchField.focus();
        searchField.setAttribute("value", "");
    };

   searchField.onblur = function() {
        searchField.classList.toggle('search-collapse');
        setTimeout(function(){
            //do what you need here
            searchField.classList.remove('search-expanded');
            searchField.classList.toggle('search-collapse');
            searchField.blur();
            searchField.setAttribute("value", "");
        }, 550);
        
   }
})();
