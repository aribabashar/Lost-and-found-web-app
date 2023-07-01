function showHidePasswordfn() {
    // The last span inside the button
    var showHideBtn = $(this);
  
    var showHideSpan = showHideBtn.children().next();
    var $pwd = showHideBtn.prev('input');
  
    // Toggle a classe called toggleShowHide to thee button
    $(showHideBtn).toggleClass('toggleShowHide');
    // If the button has the class toggleShowHide change the text of the last span inside it
    showHideSpan.text(showHideBtn.is('.toggleShowHide') ? 'Hide' : 'Show');
  
    if ($pwd.attr('type') === 'password') {
      $pwd.attr('type', 'text');
    } else {
      $pwd.attr('type', 'password');
    }
  }
  
  // On Click
  $('.js-showHidePassword').on('click', showHidePasswordfn);
  
  // On Enter Key
  $('.js-showHidePassword').keypress(function(e) {
    // the enter key code
    if (e.which === keyCodes.enter) {
      showHidePasswordfn();
    }
  });