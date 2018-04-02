if (localStorage.getItem('cart') === null) {
    localStorage.setItem("cart", "[]");
} //  used to init localstorage which will be used for cart
fetchCart(); //get cart if the user quits session

/** For cart */
function addToCart(product) { // using parameters to get the data

    var productToCart = {
        id: parseInt(product.id),
        name: escapeHtml(product.name),
        price: product.price,
        times: 1,
        image: escapeHtml(product.image),
        quantity: product.quantity,
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
        fetchCart(); //update cart
    }
}

function escapeHtml(text) { // for escaping strings
    var map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, function (m) {
        return map[m];
    });
}

function checkExists(product) { // checking if selected item exists in the  localStorage
    var localcart = JSON.parse(localStorage.getItem('cart'));
    for (var x in localcart) {
        if (localcart[x].id === product.id)
            return true
    }
}

function toggleHide() { //toggling cart
    $(function () {
        $('.cart_overlay').slideToggle()
    });
}

function deleteFromCart(product) {
    let localCart = JSON.parse(localStorage.getItem("cart")); // get cart
    let productToDelete = _.find(localCart, {id: product.id});

    if (productToDelete === undefined) {
        alert(product.name + " does not exist in cart");
    } else {
        _.remove(localCart, {id: product.id}); // removing item where id equals product id
        localStorage.setItem('cart', JSON.stringify(localCart)); // update localstorage
        alert(productToDelete.name + " has been removed from cart");
        fetchCart(); //update cart
        checkOutRows(); // update checkout cart
    }
}

function fetchCart() {
    //fetching the cart and updating cart in DOM

    var cartProducts = JSON.parse(localStorage.getItem("cart"));
    var mainCart = document.getElementById("mainCart");
    var total = document.getElementById("totalItemsInCart");

    total.innerHTML = cartProducts.length;
    var string = '';
    if (cartProducts.length === 0) {
        mainCart.innerHTML = '<span style="padding:20px 50px">No items in cart</span>';
        document.getElementById("checkout_button").style.display = "none";
    } else {
        document.getElementById("checkout_button").style.display = "block";

        string = "<table id='cartTable' class='table'>" +
            "<thead>" +
            "<tr>" +
            "<th>Name</th>" +
            "<th>Price</th>" +
            "<th>Quantity</th>" +
            "<th></th>" +
            "</tr>" +
            "</thead>" +
            tableRows(cartProducts) +
            "</table>";

        mainCart.innerHTML = string;
    }

}

function tableRows(product) {
    var string = '';
    for (var x in product) {
        string += "<tr>" +
            "<td>" + product[x].name + "</td>" +
            "<td>" + product[x].price + "</td>" +
            "<td>" + product[x].times + "</td>" +
            "<td>" + "<button class='btn' onclick='deleteFromCart(" + JSON.stringify(product[x]) + ")' ><i class='fa fa-trash'></i></button>" + "</td>" +
            "</tr>"
    }
    return string;
}

/** For checkout */
function checkOutRows() {
    // same as fetch cart but for checkout table

    var cart = JSON.parse(localStorage.getItem("cart"));
    var string = '';
    var allTotal = 0;

    var tbody = document.getElementById("checkOutTbody");
    var tfoot = document.getElementById("total_price");

    if (cart.length === 0) {
        document.querySelector("#purchase").style.display = "none";

        string = ' <tr id="product_13_84_0_0" class="cart_item last_item address_0 even first_item">' +
            '                            <td class="cart_product" colspan="6">\n' +
            '                           <h1>No Items in cart</h1>\n' +
            '                            </td>\n' +
            '</tr>';
    } else {

        for (var x in cart) {

            var total = cart[x].price * cart[x].times;
            allTotal += total;

            string += '   <tr id="product_13_84_0_0" class="cart_item last_item address_0 even first_item">\n' +
                '                            <td class="cart_product">\n' +
                '                                <a href="/product/' + cart[x].name + '"><img\n' +
                '                                            src="' + cart[x].image + '"\n' +
                '                                            alt="' + cart[x].name + '" width="98" height="127"></a>\n' +
                '                            </td>\n' +
                '                            <td class="cart_description">\n' +
                '                                <p class="product-name"><a\n' +
                '                                            href="/product/' + cart[x].name + '">' + cart[x].name + '</a></p>\n' +
                '                            </td>\n' +
                '                            <td class="cart_unit" data-title="Unit price">\n' +
                '                                <ul class="price text-right" id="product_price_13_84_0">\n' +
                '                                    <li class="price">' + cart[x].price + '</li>\n' +
                '                                </ul>\n' +
                '                            </td>\n' +
                '                            <td class="cart_quantity text-center" data-title="Quantity">\n' +
                '\n' +
                '                                <input type="hidden" value="5" name="quantity_13_84_0_0_hidden">\n' +
                '                                <input size="2" type="number" autocomplete="off"\n' +
                '                                       id="quan_' + cart[x].id + '"\n' +
                '                                     oninput="quantityChange(' + cart[x].id + ')"                                                                 ' +
                '                                     onkeyup="quantityChange(' + cart[x].id + ')"                                                                 ' +
                '                                       class="cart_quantity_input form-control grey" value="' + cart[x].times + '" min="1"\n' +
                '                                       max="' + cart[x].quantity + '">\n' +
                '\n' +
                '                            </td>\n' +
                '                            <td class="cart_delete text-center" data-title="Delete">\n' +
                '                                <div>\n' +
                "                                   <a class=\"cart_quantity_delete\"  \n" +
                "                                   onclick='deleteFromCart(" + JSON.stringify(cart[x]) + ")'><i\n" +
                "                                               class=\"icon-trash\"></i></a>\n" +
                '                                </div>\n' +
                '                            </td>\n' +
                '                            <td class="cart_total" data-title="Total">\n' +
                '                                <span class="price" id="total_product_price_13_84_0"><i class="fa fa-rupee"></i> ' + total + '</span>\n' +
                '                            </td>\n' +
                '                        </tr>';

        }
    }
    tbody.innerHTML = string;
    allTotal = allTotal + (13 / 100) * allTotal;

    tfoot.innerHTML = '<i class="fa fa-rupee"></i>' + allTotal.toFixed(2);
    /*   */
}

function quantityChange(productid) {
    // when quantity in checkout table changes

    localcart = JSON.parse(localStorage.getItem('cart'));

    var quan = document.getElementById("quan_" + productid);
    var item = _.find(localcart, {id: productid});

    for (var x in localcart) {
        if (localcart[x].id === productid) {
            if (quan.value > item.quantity) {
                alert("Quantity exceeds stock");
                quan.value = item.quantity;
                localcart[x].times = item.quantity;
                return false;
            }
            if (quan.value < 1) {
                alert("Quantity cannot be less than 1")
                quan.value = 1;
                localcart[x].times = 1;
                return false;
            } else {
                localcart[x].times = quan.value;
            }
        }

    }
    localStorage.setItem("cart", JSON.stringify(localcart));

    fetchCart();
    checkOutRows()
}

function addAddress() {
    /** for delivery address valdation and purchasing the items */
    var location1 = escapeHtml(document.querySelector("#checkout_address").value);

    if (!(location1 === '' || location1 === null || location1 === undefined)) {
        if (confirm("Are you sure you want to make this purchase")) {
            $.ajax({
                type: "POST",
                url: "/checkout",
                data: {location: location1, products: JSON.parse(localStorage.getItem('cart'))},
                success: function (res) {
                    localStorage.clear();
                    alert("Order has been processed")
                    window.location.href = Laravel.url;
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }
    } else {
        alert("Please add a delivery address");
    }
}