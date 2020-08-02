// Отправка данных подписки на сервер без перезагрузки
document.querySelector('.subscription__form').addEventListener('submit', function (e) {
    e.preventDefault();
 
    let params = `${this.elements[0].name}=${this.elements[0].value}`;

    const xhr = new XMLHttpRequest();
    xhr.open('GET', `/handlers/handler_index.php?${params}`);
    xhr.send();
 
    xhr.addEventListener('load', function () {
        document.querySelector('.subscription__success').innerHTML = xhr.responseText;
    })

    this.reset();
 })