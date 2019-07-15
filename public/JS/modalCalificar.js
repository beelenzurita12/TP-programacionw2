// Modal Calificar //	
document.getElementById("calificar").addEventListener("click", handleCalificarButton)

function handleCalificarButton(event){
    event.preventDefault();

    //modal
    let modal = document.createElement("div")
    modal.id = "modal"
    modal.className = "myModal"

    //ventana
    let ventana = document.createElement("form")
    ventana.className = "ventana ventanaCalificar"

    let inputRadio = [
        "1",
        "2",
        "3",
        "4",
        "5"
    ]

    const pRadio = document.createElement("p")
    pRadio.innerHTML = "<b>Seleccione una opción para calificar al vendedor, teniendo en cuenta que va de 1 para 'Muy mal vendedor' a 5 para 'Muy buen vendedor'.</b>"

    let divRadio = document.createElement("div")
    divRadio.className = "form-group"
    divRadio.appendChild(pRadio)

    for(let i = 0; i < inputRadio.length; i++){
        let div = document.createElement("div")
        div.className = "form-check form-check-inline margin-radio"

        let input = document.createElement("input")
        input.type = "radio"
        input.name = "puntuacion"
        input.id = inputRadio[i]
        input.value = inputRadio[i]
        input.className = "form-check-input"

        let label = document.createElement("label")
        label.className = "form-check-label"
        label.htmlFor = inputRadio[i]
        label.innerHTML = inputRadio[i]

        div.appendChild(input)
        div.appendChild(label)

        divRadio.appendChild(div)
    }

    let formControl = document.createElement("div")
    formControl.className = "form-group"

    let p = document.createElement("p")
    p.innerHTML = "<b>Deja tu comentario</b>"

    let input = document.createElement("textarea")
    input.name = "comentario"
    input.className = "form-control"

    let buyButton = document.createElement("button")
    buyButton.innerHTML = "Calificar"
    buyButton.className = "btn btn-success"

    ventana.addEventListener("submit", handleCalificarConfirmation)

    let cancelButton = document.createElement("button")
    cancelButton.innerHTML = "Cancelar"
    cancelButton.type = "button"
    cancelButton.className = "btn btn-danger"

    cancelButton.addEventListener("click", handleCalificarCancelButton)

    formControl.display = "flex"
    formControl.flexWrap = "wrap"
    formControl.appendChild(p)
    formControl.appendChild(input)

    ventana.appendChild(formControl)
    ventana.appendChild(divRadio)
    ventana.appendChild(buyButton)
    ventana.appendChild(cancelButton)

    modal.appendChild(ventana)

    document.body.appendChild(modal)
}

function handleCalificarConfirmation(event){
    event.preventDefault()
    const form = event.target
    console.log("Estoy calificando")
    // const comentario = form.comentario.value
    // const puntuacion = form.puntuacion.value

}

function handleCalificarCancelButton(){
    const modal = document.getElementById("modal")

    modal.remove()
}