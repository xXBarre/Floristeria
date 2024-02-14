/*Nico*/
/*Cesta*/

document.addEventListener('click', function() {
  let boton = document.getElementsByClassName("comprar")
  console.log("Hola")
  }
)



/*Alba*/
document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".carousel");
    let currentIndex = 0;

    function nextSlide() {
        currentIndex = (currentIndex + 1) % (carousel.children.length);
        updateCarousel();
    }

    function updateCarousel() {
        const translateValue = -currentIndex * 100 + "%";
        carousel.style.transform = "translateX(" + translateValue + ")";
    }

    setInterval(nextSlide, 3000); // Cambiar de slide cada 3 segundos (ajustar según sea necesario)
});

/*Laura*/
document.addEventListener("DOMContentLoaded", function() {
  const slides = document.querySelectorAll('.slide');

  slides.forEach((slide, index) => {
    slide.addEventListener('click', function() {
      const currentSlide = document.querySelector('.active');
      const nextIndex = (index + 1) % slides.length;

      currentSlide.classList.remove('active');
      slides[nextIndex].classList.add('active');
    });
  });
});

/*Hugo*/
window.onload = function(){
  let signUp = document.getElementById("signUp");
  let signIn = document.getElementById("signIn");
  let nameInput = document.getElementById("nameInput");
  let confirmPasswordInput = document.getElementById("confirmPasswordInput");
  let title = document.getElementById("title");

        signIn.onclick = function() {
        nameInput.style.maxHeight = "0";
        confirmPasswordInput.style.maxHeight = "0";
        title.innerHTML = "Login";
        signUp.classList.add("disable");
        signIn.classList.remove("disable");
        }

        signUp.onclick = function() {
        nameInput.style.maxHeight = "60px";
        confirmPasswordInput.style.maxHeight = "60px";
        title.innerHTML = "Registro";
        signUp.classList.remove("disable");
        signIn.classList.add("disable");
        }
      }

      function validarFormulario() {
        // Obtener los valores del formulario
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

                // Verificar si la contraseña coincide con la confirmación de contraseña solo en la zona de registro
                if (password !== confirmPassword) {
                    alert("La contraseña y la confirmación de contraseña no coinciden, por favor inténtelo de nuevo");
                    return;
                }

                // Verificar si la contraseña contiene símbolos, números y letras
                var passwordPattern = /^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]+$/;
                if (!passwordPattern.test(password)) {
                    alert("La contraseña debe contener al menos una letra, un número y un símbolo");
                    return;
                }

                // Resto del código para enviar el formulario o realizar otras acciones
                alert("Formulario válido. Puedes realizar la acción deseada.");
            }