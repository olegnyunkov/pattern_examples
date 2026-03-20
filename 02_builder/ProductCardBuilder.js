class ProductCard {
    constructor() {
        this.photo = '';
        this.name = '';
        this.price = '';
    }
}

class ProductCardBuilder {
    constructor() {
        this.card = new ProductCard();
    }

    setPhoto(photo) {
        this.card.photo = photo;
        return this;
    }

    setName(name) {
        this.card.name = name;
        return this;
    }

    setPrice(price) {
        this.card.price = price;
        return this;
    }

    renderProductCard() {
        const productCardContainer = document.querySelector('.js-product-card')
        productCardContainer.querySelectorAll('span')[0].append(this.card.photo)
        productCardContainer.querySelectorAll('span')[1].append(this.card.name)
        productCardContainer.querySelectorAll('span')[2].append(this.card.price)
    }
}