/**
 * 2 класса
 * Catalog - будет заниматься задачами управления (бизнес-логика, получать данные из БД отдавать их)
 * Product - будет отрисовывать карточку товара в каталог
 */

class Catalog {  //создание классов в js
    constructor() {   //у любого класса есть конструктор//в нем можно созадавать перемнные, которые убудт доступны внути всего класса Catalog
        this.$catalog = document.querySelector('.catalog');
        this.products = []; //this это класс Catalog
        this.$loader = this.$catalog.querySelector('.loader');
        // this.$categoryId = this.$catalog.getAttribute('data-category-id'); //два варианта идентичны (получение атрибута)
        this.categoryId = this.$catalog.dataset.categoryId;
    }

    load() { //будет загружать данные по ajax //после загрузки будет вызывать метод render()
        this.showLoader(); //loader-показ
        
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `/handlers/handler_catalog.php?category_id=${this.categoryId}`);
        xhr.send();

        xhr.addEventListener('load', () => {
            const response = JSON.parse(xhr.response);
            // console.log(response);

            response.forEach((item) => {  //добавляем в массив экземпляр класса Product// имели объекты с помощью которых мы инициализировали класс Product
                // console.log(item);
                this.products.push(new Product(
                        item.id, 
                        item.img_url, 
                        item.name, 
                        item.description, 
                        item.price
                    )
                );
            });

            this.render();
        })
    }

    showLoader() {
        this.$loader.classList.add('show');
    }

    hideLoader() {
        this.$loader.classList.remove('show');
    }

    render() { //будет вызывать класс Product и отрисовывать карточку товара
        const $catalogList =  this.$catalog.querySelector('.catalog-list');
        this.products.forEach((item) => { //имеем уже инициализированный класс Product
            $catalogList.append(item.getElement()); //getElement - название произвольное, который будеи в классе Product
        });

        this.hideLoader(); //loader-скрыть
    }
}

class Product {
    constructor(id, img_url, name, description, price) {  //классы как функция, парметры которой передаются в constructor
        this.id = id;           //сохраняем в свойства класса Product
        this.img_url = img_url; //чтобы эти все элементы в скобках были долступнц в других местах класса мы их инициализируем
        this.name = name;       //this.id создаем свойcтво и кладем туда параметр id
        this.description = description;
        this.price = price;
    }

    getElement() { //будет возвращать верстку нашей карточки товара
        let $catalogItem = document.createElement('a');
        $catalogItem.href = `/product.php?id=${this.id}`
        $catalogItem.classList.add('catalog-item');
        $catalogItem.innerHTML = `
            <div class="catalog-item__img" style="background-image: url(${this.img_url})"></div>
            <div class="catalog-item__name">${this.name}</div>
            <div class="catalog-item__price">${this.price} руб.</div>
        `;
       
        return $catalogItem;
    }
}

const catalog = new Catalog(); //так мы создаем новый экземпляр класса и обращаемся как к объекту внизу

catalog.load(); //вызываем функцию load из класса, то есть загрузку данных при заходе на страницу
