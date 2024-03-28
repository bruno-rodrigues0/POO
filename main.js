let root = document.querySelector("#root")
let target = document.querySelector(".target")

class Caneta{

    cor = null
    modelo = null
    tampada = null

    constructor(cor, modelo, tampada){
        this.cor = cor ?? "Azul"
        this.modelo = modelo ?? "Bic Cristal"
        this.tampada = tampada ?? true
        
    }

}

let c1 = new Caneta("Preta")

target.innerHTML += JSON.stringify(c1)

