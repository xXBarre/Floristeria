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
    var name = document.getElementById("Nombre").value;
    var email = document.getElementById("Correo").value;
    var password = document.getElementById("Contraseña").value;
    var confirmPassword = document.getElementById("ContraseñaConf").value;

    // Verificar si el nombre de usuario está vacío
    if (name === "") {
        alert("El nombre de usuario no puede estar vacío");
        return false;
    }

    // Verificar si el correo electrónico es válido
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        alert("El correo electrónico no es válido");
        return false;
    }

    // Verificar si la contraseña coincide con la confirmación de contraseña
    if (password !== confirmPassword) {
        alert("La contraseña y la confirmación de contraseña no coinciden, por favor inténtelo de nuevo");
        return false;
    }

    // Verificar si la contraseña contiene símbolos, números y letras
    var passwordPattern = /^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]+$/;
    if (!passwordPattern.test(password)) {
        alert("La contraseña debe contener al menos una letra, un número y un símbolo");
        return false;
    }

    // Si todo está correcto, enviar el formulario
    return true;
}



//Laura
    // Lista de chistes de plantas
    var chistes = [
        "¿Qué le dice una hoja de lechuga a otra? ¡Vámonos que nos están cortando el rollo!",
        "¿Por qué las plantas no van al espacio? Porque necesitan un poco de tierra firme.",
        "¿Qué le dice un árbol a otro? ¡Qué barra más chévere!",
        "¿Cuál es la planta más divertida en el jardín? La risa-lis.",
        "¿Qué le dice una planta al sol? ¡Acércate un poco, eres la luz de mi vida!",
        "¿Cuál es el colmo de una planta carnívora? Ser vegetariana por necesidad.",
        "¿Por qué las plantas de interior siempre están en casa? Porque no tienen raíces sociales.",
        "¿Qué le dijo una planta a otra en una discusión? ¡No me pongas esa cara de ortiga!"
];

    // Función que muestra el chiste en el cuadro rosa
    function mostrarChiste(chiste) {
        var chisteBox = document.getElementById('chisteBox');
        chisteBox.textContent = chiste;
        chisteBox.style.display = 'block'; // Mostrar el cuadro de chistes
        setTimeout(function() {
            chisteBox.style.display = 'none'; // Ocultar el cuadro de chistes después de un tiempo
        }, 5000); // Ocultar después de 5 segundos
}

    // Cactus muestra un chiste
    function moverCactus() {
        var cactus = document.querySelector('.cactus');
        cactus.style.animation = 'sway 5s ease-in-out';
        setTimeout(function() {
            cactus.style.animation = '';
            // Selecciona un chiste aleatorio de la lista y lo muestra en el cuadro rosa
            var chisteAleatorio = chistes[Math.floor(Math.random() * chistes.length)];
            mostrarChiste(chisteAleatorio);
        }, 500);
    }


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

function verCarro() {
    let cesta = document.getElementById('Cesta')
    cesta.classList.remove("cesta");
    cesta.classList.add("vercesta");
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

//Mostrar el carro 
imgCarro.addEventListener('click', verCarro);

// Asociar evento al botón de vaciar carrito
document.getElementById('botonCarro').addEventListener('click', vaciarCarrito);

//Comprar
document.getElementById('botonCorro').addEventListener('click', comprar);

//Quienes somos

function mostrarInfo(elemento) {
  var infoOverlay = elemento.querySelector('.info-overlay');
  infoOverlay.style.opacity = '1';
  infoOverlay.style.transform = 'rotateY(0deg)';
}

function ocultarInfo(elemento) {
  var infoOverlay = elemento.querySelector('.info-overlay');
  infoOverlay.style.opacity = '0';
  infoOverlay.style.transform = 'rotateY(180deg)';
}
