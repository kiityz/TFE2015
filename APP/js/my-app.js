// Initialize app and store it to myApp variable for futher access to its methods
var myApp = new Framework7();
 
// We need to use custom DOM library, let's save it to $$ variable:
var $$ = Dom7;
 
// Add view
var mainView = myApp.addView('.view-main', {
  // Because we want to use dynamic navbar, we need to enable it for this view:
  dynamicNavbar: true
});
 
// Now we need to run the code that will be executed only for About page.
 
// Option 1. Using page callback for page (for "about" page in this case) (recommended way):
myApp.onPageInit('about', function (page) {
  // Do something here for "about" page
    myApp.alert('Here comes About page1');

  
})


myApp.onPageInit('message', function (page) {
})
myApp.onPageInit('messagein', function (page) {
})
myApp.onPageInit('profil', function (page) {
})
myApp.onPageInit('profil-2', function (page) {
})
myApp.onPageInit('login', function (page) {
})
myApp.onPageInit('inscription', function (page) {
})
myApp.onPageInit('user_connected', function (page) {
})
myApp.onPageInit('message-nhu', function (page) {
})




// PORTFOLIO

var myPhotoBrowserStandalone = myApp.photoBrowser({
    photos : [
        'http://lorempixel.com/1024/1024/sports/1/',
        'http://lorempixel.com/1024/1024/sports/2/',
        'http://lorempixel.com/1024/1024/sports/3/',
    ]
});

