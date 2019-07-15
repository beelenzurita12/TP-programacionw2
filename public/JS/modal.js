	document.getElementById("compra").addEventListener("click", handleBuyButton)

	function handleBuyButton(event){
		event.preventDefault();
	
		//modal
		let modal = document.createElement("div")
		modal.id = "modal"
		modal.className = "myModal"

		//ventana
		let ventana = document.createElement("form")
		ventana.className = "ventana"

		let formControl = document.createElement("div")

		let p = document.createElement("p")
		p.innerHTML = "<b>¿Cuantos productos desea comprar?</b>"

		let input = document.createElement("input")
		input.name = "cantidad"
		input.type = "number"

		let inputRadio = [
			"Entrega a domicilio",
			"Retiro en sucursal",
			"A acordar con el vendedor"
		]

		const pRadio = document.createElement("p")
		pRadio.innerHTML = "<b>¿Cómo desea recibir el producto?</b>"

		let divRadio = document.createElement("div")
		divRadio.className = "form-group"

		divRadio.appendChild(pRadio)

		for(let i = 0; i < inputRadio.length; i++){
			let div = document.createElement("div")
			div.className = "custom-control custom-radio"

			let input = document.createElement("input")
			input.type = "radio"
			input.name = "entrega"
			input.id = inputRadio[i]
			input.value = inputRadio[i]
			input.className = "custom-control-input"

			let label = document.createElement("label")
			label.className = "custom-control-label"
			label.htmlFor = inputRadio[i]
			label.innerHTML = inputRadio[i]

			div.appendChild(input)
			div.appendChild(label)

			divRadio.appendChild(div)
		}

		let buyButton = document.createElement("button")
		buyButton.innerHTML = "Comprar"
		buyButton.className = "btn btn-success"

		ventana.addEventListener("submit", handleBuyConfirmation)

		let cancelButton = document.createElement("button")
		cancelButton.innerHTML = "Cancelar"
		cancelButton.type = "button"
		cancelButton.className = "btn btn-danger"

		cancelButton.addEventListener("click", handleCancelButton)

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

	function handleBuyConfirmation(event){
		event.preventDefault()
		const form = event.target

		const cantidad = form.cantidad.value
		const entrega = form.entrega.value

		const hrefArr = window.location.href.split("/")
		const path = hrefArr[3]
		const urlRoot = `${window.location.origin}/${path}`
		const id = window.location.search.split("=")[1]

		window.location.replace(`${urlRoot}/compra/producto?id=${id}&cantidad=${cantidad}&entrega=${entrega}`)
	}

	function handleCancelButton(){
		const modal = document.getElementById("modal")

		modal.remove()
	}