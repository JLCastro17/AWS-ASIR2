window.onload = function () {
    document.querySelector('.boton').addEventListener('click', function () {
        document.querySelector('.container').classList.toggle('visible');
    });
}