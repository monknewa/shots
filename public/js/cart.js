
function addToCart(id, name, price) { // using parameters to get the data

    var productToCart = {
        id: parseInt(id), name: name, price: price, times: 1
    }; //get item from DOM

    var arrayOfProducts = [productToCart]; // add the item to array <init>

    if (localStorage.getItem('cart') === null) { //if there is no localstorage initialized, we create 'cart' storage
        localStorage.setItem('cart', JSON.stringify(arrayOfProducts)); // convert to JSON and store in localstorage
        alert(productToCart.name + ' has been added to cart');
    } else {
        // if localStorage exists
        var localProduct = JSON.parse(localStorage.getItem('cart'));

        if (checkExists(productToCart)) { // checking  if items exists in the localstorage
            //if exists  we  update its times attribute by +1
            for (var x in localProduct) {
                if (localProduct[x].id === productToCart.id) {
                    localProduct[x].times += 1;
                }
            }
            localStorage.setItem('cart', JSON.stringify(localProduct)); // and set the data to the localStorage

            alert(productToCart.name + ' \'s quantity has been updated');
        } else {
            // if the value doesnot exist we simply add it to the localStorage
            localProduct.push(productToCart);
            localStorage.setItem('cart', JSON.stringify(localProduct));

            alert(productToCart.name + ' has been added to cart');
        }
        window.location.reload();
    }
}

function checkExists(product) { // checking if selected item exists in the  localStorage
    var localcart = JSON.parse(localStorage.getItem('cart'));
    for (var x in localcart) {
        if (localcart[x].id === product.id)
            return true
    }
}

