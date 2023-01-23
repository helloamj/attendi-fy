function tools(){
    $(".innerhtml").load("tools.html");
    $('html, body').animate({ scrollTop: 0 }, 'fast');
}
function about(){
    $(".innerhtml").load("about.html");
    $('html, body').animate({ scrollTop: 0 }, 'fast');
}
function sugg(){
    $(".suggestionbox").load("suggestionbox.php");
}
function sugges(){
     $(".sb").load("suggestionbox.php");
     function suggest(){
     $("#suggestion_box").addClass("btn-dark");
     }
}
function chtbt(){
    $(".innerhtml").load("chatbot.html");
    $('html, body').animate({ scrollTop: 0 }, 'fast');
}