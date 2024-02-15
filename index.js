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


/*Nico*/

/*Boton top*/

const sub = document.getElementById("top")
sub.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
})

/*Carrito*/
// Array para almacenar los productos en el carrito
let carrito = [];
let imgCarro = document.getElementById('carrito')

// Función para agregar un producto al carrito
function agregarAlCarrito(nombre, precio) {
    const producto = { nombre, precio };
    carrito.push(producto);
    mostrarCarrito();
}

// Función para mostrar los productos en el carrito
function mostrarCarrito() {
    const productosContainer = document.getElementById('productos');
    productosContainer.innerHTML = '';

    carrito.forEach(producto => {
        const productoElement = document.createElement('div');
        productoElement.classList.add('producto');
        productoElement.innerHTML = `<span>${producto.nombre} - ${producto.precio} €</span>`;
        productosContainer.appendChild(productoElement);
    });
}

//Comprar
function comprar() {
    alert('Esta funcion aun no esta disponible por el momento, espera a que hagamos la practica de php.')
    carrito = [];
    location.reload();
}

// Función para vaciar el carrito
function vaciarCarrito() {
    carrito = [];
    mostrarCarrito();
}

// Asociar eventos a los botones de compra
document.querySelectorAll('.bcomprar').forEach((button, index) => {
    button.addEventListener('click', () => {
        const nombreProducto = document.querySelectorAll('.informacion h2')[index].textContent.trim();
        const precioProducto = document.querySelectorAll('.informacion .precio')[index].textContent.trim();
        const precioNumerico = parseFloat(precioProducto.replace('€', '').replace(',', '.'));
        agregarAlCarrito(nombreProducto, precioNumerico);
    });
});

// Asociar evento al botón de vaciar carrito
document.getElementById('botonCarro').addEventListener('click', vaciarCarrito);

//Comprar
document.getElementById('botonCorro').addEventListener('click', comprar);









  
    
/*
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
*/

/*Alba*/

let curIndex = 0;

function showLodedentro(index) {
    const lodedentro = document.querySelector('.lodedentros');
    const totalLodedentros = document.querySelectorAll('.lodedentro').length;

    if (index >= totalLodedentros) {
        curIndex = 0;
    } else if (index < 0) {
        curIndex = totalLodedentros - 1;
    } else {
        curIndex = index;
    }

    const translateValue = -curIndex * 100 + '%';
    lodedentro.style.transform = `translateX(${translateValue})`;
}

function prevLodedentro() {
    showLodedentro(curIndex - 1);
}

function nextLodedentro() {
    showLodedentro(curIndex + 1);
}

setInterval(nextLodedentro, 3000);