
let cart = new AngryCart({
    counter: '#cartCount',
    totalPrice: '#totalPrice',
});

function angryCPR() {
    let myCart = JSON.parse(localStorage.getItem(angryCartKey)), // "angryCartKey" - ключ корзины в localStorage (const)
        renderBlock = document.getElementById('cartPreview');

    /* Очищаем блок перед выводом */
    renderBlock.innerHTML = '';

    /* Выводим товары из корзины */
    Array.from(myCart).forEach( function(product) {
        renderBlock.insertAdjacentHTML('beforeEnd', `
		<div class="goods__basket__item">
		${product.data.title} <span class="goods__total__quantity"> ${product.quantity}</span> - <span>${product.data.price} руб</span>
			<button class="button button__micro" onclick="cart.removeFromCart(${product.product_id})">x</button>
		</div>
	`);
    });
}