function changeBackgroundColor() {
    const colorPicker = document.getElementById('colorPicker');
    const selectedColor = colorPicker.value;
    document.body.style.backgroundColor = selectedColor;
}

function changeH1Color() {
    const colorPicker = document.getElementById('colorPicker');
    const selectedColor = colorPicker.value;
    const h1Elements = document.querySelectorAll('h1');
    h1Elements.forEach(h1 => {
        h1.style.color = selectedColor;
    });
}

function changeBothColors() {
    const colorPicker = document.getElementById('colorPicker');
    const selectedColor = colorPicker.value;
    document.body.style.backgroundColor = selectedColor;
    const h1Elements = document.querySelectorAll('h1');
    h1Elements.forEach(h1 => {
        h1.style.color = selectedColor;
    });
}