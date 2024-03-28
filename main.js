let root = document.querySelector("#root")

class Caneta{
    constructor(cor, modelo, tampada){
        this.cor = cor ?? "Azul"
        this.modelo = modelo ?? "Bic Cristal"
        this.tampada = tampada ?? true
    }
}