if ("mediaDevices" in navigator && "getUserMedia" in navigator.mediaDevices) {
  console.log("Let's get this party started");
  navigator.mediaDevices.getUserMedia({ video: true });
}
const API_KEY = "7a537c2ae08f73bd415d1d3b473a5802";
fetch(
  `https://api.openweathermap.org/data/2.5/weather?units=metric&q=Bacalar&appid=${API_KEY}`
)
  .then((response) => response.json())
  .then((data) => setWeatherData(data));

const setWeatherData = (data) => {
  const weatherData = {
    temp: data.main.temp,
  };
  temp = weatherData.temp;
  hour = new Date();
  document.getElementById("temp").innerHTML = temp.toFixed() + "°C";
};

var $hours = $("#hours");
var $minutes = $("#minutes");
function setHour() {
  var toDay = new Date().getTime();
  var factor = 1000 * 60 * 60 * 5;
  var date = new Date(toDay - factor);
  date = date.toISOString();
  date = date.split("T")[1].split(":");
  $hours.html(date[0]);
  $minutes.html(date[1]);
}
setHour();
setInterval(() => {
  setHour();
}, 1000 * 60);

var onSubmitForm = () => {};
$(function () {
  $.validator.methods.phone = function (value, element) {
    return this.optional(element) || /^\d{10}$/.test(value);
  };
  var rules = {
    rules: {
      PHONE: {
        required: true,
        phone: true,
      },
    },
    messages: {
      FNAME: "Se requiere un nombre",
      EMAIL: "Escriba una dirección de email valida",
      PHONE: "Escriba un teléfono valido de 10 dígitos",
    },
  };

  $("#contact-form").validate(rules);

  onSubmitForm = function (token) {
    if ($("#contact-form").valid()) $("#contact-form").trigger("submit");
  };

  var form = $("#contact-form");

  $(form).on("submit", function (e) {
    e.preventDefault();
    $("#alert-enviando").html(
      "<span id='alert-enviando' class='mx-2'>Enviando<img width='20px' src='public/assets/Rolling-1s-200px.gif' class='mx-2' ></span>"
    );
    var formData = $(e.currentTarget).serialize();

    $.ajax({
      type: "POST",
      url: "correo-inf-bebacalar.php",
      data: formData,
    })
      .done(function (response) {
        $(e.currentTarget)[0].reset();
        $("#alert-enviando").html(
          "<span id='alert-enviando' class='mx-2'>Enviando<img width='20px' src='public/assets/Rolling-1s-200px.gif' class='mx-2' ></span>"
        );
        setTimeout(() => {
          $("#alert-enviado").addClass("d-none");
        }, 5000);
        location.href = "pages/Message.php";

        $(form)[0].reset();
      })
      .fail(function (data) {
        location.href = "pages/Page_error.php";
      });
  });
});
