document.addEventListener('DOMContentLoaded', function(){

    const cartButtons = document.querySelectorAll('.add-cart')

    //LocalStorage

    function getCart(){
        return JSON.parse(localStorage.getItem('cart')) || {}
    }

    function setCart(cart){
        localStorage.setItem('cart', JSON.stringify(cart))
    }

    function addToCart(id){
        let cart = getCart()
        if (cart[id]){
            cart[id] += 1
        } else {
            cart[id] = 1
        }
        setCart(cart)
    }

    function removeCart(){
        setCart({})
    }

    // Cart

    async function addCart(id){
        await fetch('/cart/' + id)
    }

    cartButtons.forEach(button => {
        button.addEventListener('click', e => {
            e.preventDefault()
            const target = e.target

            const id = target.dataset.id
            addCart(id)
                .then()
        })
    })

})
