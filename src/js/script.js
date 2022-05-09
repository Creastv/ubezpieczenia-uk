const goToTop = document.querySelector("#go-to-top");

// Go to Top
goToTop.addEventListener("click", () => {
  document.documentElement.scrollTop = 0;
});

document.addEventListener("scroll", () => {
  if (window.pageYOffset >= 200) {
    goToTop.classList.add("go-to-to-active");
  } else {
    goToTop.classList.remove("go-to-to-active");
  }
});

$(document).ready(function () {
  $("#form").bootstrapValidator({
    container: "popover",
    message: "Pole wymagane!",
    //live: 'submitted',
    // feedbackIcons: {
    //   valid: "glyphicon glyphicon-ok",
    //   invalid: "glyphicon glyphicon-remove",
    //   validating: "glyphicon glyphicon-refresh"
    // },
    // err: {
    //   container: "tooltip"
    // },
    fields: {
      firstname: {
        message: "Pole wymagane!",
        validators: {
          notEmpty: {
            message: "Pole wymagane!"
          }
        }
      },
     usluga: {
        message: "Pole wymagane!",
        validators: {
          notEmpty: {
            message: "Pole wymagane!"
          }
        }
      },
      zgoda: {
        message: "Pole wymagane!",
        validators: {
          notEmpty: {
            message: "Pole wymagane!"
          }
        }
      },

      telefon: {
        message: "Pole wymagane!",
        validators: {
          notEmpty: {
            message: "Pole wymagane!"
          },
          digits: {
            // message: "Nieprawidłowy nr telefonu"
          },
          stringLength: {
            min: 9,
            max: 9,
            // message: "Wprowadź 9 cyfrowy nr telefonu"
          }
        }
      },
      email: {
        validators: {
          notEmpty: {
            message: "Pole wymagane!"
          },
          emailAddress: {
            message: "Nieprawidłowy adres e-mail"
          }
        }
      }
    }
  });
});


// document.querySelector(".zgoda-tooltiop").addEventListener("mouseover", function () {
//     document.querySelector(".zgoda-hidden").style.display = "block";
// });
// document.querySelector(".zgoda-tooltiop").addEventListener("mouseout", function () {
//     document.querySelector(".zgoda-hidden").style.display = "none";
// });