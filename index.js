/*Nico*/

/*Boton top*/

const sub = document.getElementById("top")
sub.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
})


/*Cesta*/

//funcion para almacenar los datos para poder usarlos
function guardarAlmacenamientoLocal(llave, valor_a_guardar){
  localStorage.setItem(llave, JSON.stringify(valor_a_guardar))
}
function obtenerAlmacenamientoLocal(llave){
  const datos = JSON.parse(localStorage.getItem(llave))
  return datos
}
let productos = obtenerAlmacenamientoLocal('productos') || [];

//variables del html
const informacionCompra = document.getElementById('informacionCompra');
const contenedorCompra = document.getElementById('contenedorCompra');
const productosCompra = document.getElementById('productosCompra');
const carrito = document.getElementById('carrito');
const numero = document.getElementById("numero");
const total = document.getElementById('total');
const x = document.getElementById('x')
const header = document.querySelector("#header");
const contenedor = document.querySelector("#contenedor");
const body = document.querySelector("body");

let lista = []
let valortotal = 0

window.onload = function (){
  visualizarProductos();
  contenedorCompra.classList.add("none")
} 

function visualizarProductos() {
  contenedor.innerHTML = ""
  for (let i = 0; i < productos.length; i++) {
    if (productos[i].existencia > 0) {
      contenedor.innerHTML += `<div><img src="${productos[i].urlImagen}"><div class="informacion"><p>${productos[i].nombre}</p><p class="precio">${productos[i].valor}€</p><button onclick=comprar(${i})>Comprar</button></div></div>`
    }
      else {
      contenedor.innerHTML += `<div><img src="${productos[i].urlImagen}"><div class="informacion"><p>${productos[i].nombre}</p><p class="precio">${productos[i].valor}€</p><p class="soldOut">Sold Out</p></div></div>`
    }
  }
}

function comprar(indice)
{
  lista.push({ nombre: productos[indice].nombre, precio: productos[indice].valor })

  let van = true
  let i = 0
  while (van == true)
  {
    if (productos[i].nombre == productos[indice].nombre) 
    {
      productos[i].existencia -= 1
      if (productos[i].existencia == 0)
      {
        visualizarProductos()
      }
      van = false
    }
    guardarAlmacenamientoLocal("productos", productos)
        i += 1
  }
  numero.innerHTML = lista.length
  numero.classList.add("diseñoNumero")
  return lista
}

carrito.addEventListener("click", function(){
    body.style.overflow = "hidden"
    contenedorCompra.classList.remove('none')
    contenedorCompra.classList.add('contenedorCompra')
    informacionCompra.classList.add('informacionCompra')
    mostrarElemtrosLista()
})

function mostrarElemtrosLista() {
    productosCompra.innerHTML = ""
    valortotal = 0
    for (let i = 0; i < lista.length; i++){
        productosCompra.innerHTML += `<div><div class="img"><button onclick=eliminar(${i}) class="botonTrash"><img src="/img/trash.png"></button><p>${lista[i].nombre}</p></div><p> ${lista[i].precio}€</p></div>`
        valortotal += parseInt(lista[i].precio)
    }
    total.innerHTML = `<p>Valor Total</p> <p><span>${valortotal}€</span></p>`
}

function eliminar(indice){
    let van = true
    let i = 0
    while (van == true) {
        if (productos[i].nombre == lista[indice].nombre) {
            productos[i].existencia += 1
            lista.splice(indice, 1)
            van = false
        }
        i += 1
    }
    guardarAlmacenamientoLocal("productos", productos)

    numero.innerHTML = lista.length
    if (lista.length == 0){
        numero.classList.remove("diseñoNumero")
    }
    visualizarProductos()
    mostrarElemtrosLista()
}

x.addEventListener("click", function(){
    body.style.overflow = "auto"
    contenedorCompra.classList.add('none')
    contenedorCompra.classList.remove('contenedorCompra')
    informacionCompra.classList.remove('informacionCompra')
})


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
//Laura
        function iniciarAnimacion() {
            const numColumnas = 10;
            const distanciaColumnas = window.innerWidth / numColumnas;
            const columnas = Array.from({ length: numColumnas }, (_, i) => i);

            setInterval(() => {
                const columna = columnas.shift();
                columnas.push(columna);

                const flor = document.createElement('div');
                flor.className = 'contenedor-flor';
                flor.style.left = columna * distanciaColumnas + 'px';
                flor.style.animationDuration = Math.random() * 2 + 1 + 's';
                document.getElementById('lienzo').appendChild(flor);
                
                setTimeout(() => {
                    flor.remove();
                }, 3000);
            }, 500);
        }

        window.onload = iniciarAnimacion;
