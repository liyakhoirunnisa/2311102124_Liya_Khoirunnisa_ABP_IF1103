$(document).ready(function () {
  // Liya Koirunnisa - 2311102124 - IF1103
  $("#shoutbutton").click(function () {
    $.ajax({
      type: "GET", // change to "POST" for POST request
      url: "reply.php",
      data: $("#form1").serialize(),
      success: function (rsp) {
        $("#data").append("<div>" + rsp + "</div>");
      },
      error: function (rsp) {
        alert("Error: " + rsp);
      },
    });
  });
});
