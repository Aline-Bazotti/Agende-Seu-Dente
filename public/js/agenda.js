var solution = event.conferenceData.conferenceSolution;

var content = document.getElementById("content");
var text = document.createTextNode("Join " + solution.name);
var icon = document.createElement("img");
icon.src = solution.iconUri;

content.appendChild(icon);
content.appendChild(text);

var eventPatch = {
    conferenceData: {
        createRequest: {requestId: "7qxalsvy0e"}
    }
};

gapi.client.calendar.events.patch({
    calendarId: "primary",
    eventId: "7cbh8rpc10lrc0ckih9tafss99",
    resource: eventPatch,
    sendNotifications: true,
    conferenceDataVersion: 1
}).execute(function(event) {
    console.log("Conference created for event: %s", event.htmlLink);
});

//INTERAÇÃO COM O USUÁRIO, AGENDA NO FRONT
$('.categories-wrap > .fa').click(function() {
    $(this).toggleClass('fa-angle-double-down fa-angle-double-right');
    $('.header .fa').toggleClass('fa-caret-down fa-caret-right');;
    $('.questions').slideToggle();
});

$('.toggle').click(function() {
    var thisQuestion = $(this).parent().parent().find('.questions');

    $(this).toggleClass('fa-caret-down fa-caret-right');
    thisQuestion.slideToggle();
});


$('.conditional-question').on('change', '.header-question', function () {
    $('.conditional-question .questions').slideToggle();
})

