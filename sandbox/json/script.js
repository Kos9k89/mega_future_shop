const xhr = new XMLHttpRequest();
xhr.open('GET', '/sandbox/json/handler.php');
xhr.send();

xhr.addEventListener('load', function () {
    // JSON.parse() - принимает json и возвращает js-массив объектов, для ajax-запроса
    const response = JSON.parse(xhr.response); //тоже самое что и responseText
    // console.log(JSON.parse(xhr.responseText));

    response.forEach((item) => {
        console.log(item.name, item.price);
    });
});