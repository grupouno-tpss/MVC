let timer = 3000;

function tutorial() {
    // close 

    this.container('title_register', 'Este es el titulo para el formulario de registrarse');

    setTimeout(() => {
        this.close('title_register'); // elemento a eliminar de pantalla
        this.container('register_nombre', 'Aqui se ingresa el primer nombre'); // elemento para agregar o mostrar en pantalla
    }, timer);

    setTimeout(() => {
        this.close('register_nombre'); // elemento a eliminar de pantalla
        this.container('register_sNombre', 'Aqui se ingresa el segundo nombre'); // elemento para agregar o mostrar en pantalla
    }, timer * 2);

    setTimeout(() => {
        this.close('register_nombre'); // elemento a eliminar de pantalla
        this.container('register_sNombre', 'Aqui se ingresa el segundo nombre'); // elemento para agregar o mostrar en pantalla
    }, timer * 3);

    document.getElementById('btn_tutorial_close').addEventListener('click', () => {
        timer = 500;
    });
}


//NO TOCAR ABSOLUTAMENTE NADA

tutorial.prototype.close = (id) => {
    document.getElementById(id).removeAttribute('style', 'box-shadow');
    document.body.removeChild(document.getElementById('description'));
    document.body.removeChild(document.getElementById('btn_tutorial_close'));
}

tutorial.prototype.container = (id, text) => {
    timer;
    let button_close = document.createElement('button');
    button_close.id = 'btn_tutorial_close';
    button_close.setAttribute('style', 'position: fixed; top: 5px; color: white; font-weight: bold; margin: 15px;');

    button_close.innerHTML = "Acelerar";
    button_close.classList.add('btn');
    //button_close.classList.add('btn-secondary');
    document.body.appendChild(button_close);


    let element = document.getElementById(id);
    element.setAttribute('style', 'box-shadow: 0px 68px 0px 10500px rgba(0,0,0,0.70); position:fixed;');
    element.autofocus = true;

    // element positionn

    let position = element.getBoundingClientRect();

    scrollTo(0, position.top - 200);

    let h2 = document.createElement('div');
    h2.id = 'description';
    let top = position.top + 78;

    h2.setAttribute('style', 'position: fixed; top: ' + top + 'px; bottom: ' + position.bottom + 250 + 'px; font-size: 30px; width: 100%; text-align: center; color: white; font-weight: bold;');

    h2.innerHTML = text;

    document.body.appendChild(h2);

    //close 

    function close() {
        document.getElementById(id).removeAttribute('style', 'box-shadow');
        document.body.removeChild(h2);
        document.body.removeChild(button_close);
    }
}

let init_tutorial = new tutorial();

document.getElementById('init').addEventListener('click', () => {
    let init_tutorial_r = new tutorial();
});