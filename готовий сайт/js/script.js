//
/* check-box animation
======================================= */

$('.check-box input').change(function(){
    if ($(this).prop('checked'))
        $(this).parent().addClass('bounce animated');
    else
        $(this).parent().removeClass('bounce animated');
});

/* All Filters
======================================= */

$('.filters-btn').click(function(){
    $('.filters__list .check-box input').prop('checked', true);
});




/* animate
======================================= */
$('.go').click(function(){
    $('html, body').animate({scrollTop: document.documentElement.clientHeight}, 500);
});
$('.go_product').click(function(){
    $('html, body').animate({scrollTop: document.documentElement.clientHeight}, 500);
});



/* search
======================================= */

$('.filters__list .check-box input').change(function(){
    var categoryFilter = $(this).val();
    if($(this).is(':checked'))
        $(`[data-category=${categoryFilter}]`).css({display:'block'});
    else
        $(`[data-category=${categoryFilter}]`).css({display:'none'});
});



/* cart
======================================= */

var cart = {
    items: [],
    isSubmited: false,
    phone: '',
    total: 0,
    addPhone(phone){
        this.phone = phone;
    },
    addItem(data){
        this.items.push(data);
        this.renderHtml();

    },
    removeItem(id){
        this.items.splice(id, 1);
        this.renderHtml();
    },
    renderHtml(){
        
        var emptyCartTitle = $('.empty-cart'),
            cartItems = $('.cart-items'),
            makeOffer = $('.makeOffer');
        cartItems.children().remove();
        if(this.items.length > 0){
            
            emptyCartTitle.addClass('hidden');
            cartItems.append(`<tr>
                                <th>картинка</th>
                                <th>Розміри</th>
                                <th>опис</th>
                                <th>ціна</th>
                                <th>кількість</th>
                            </tr>`);
            
            this.items.forEach(function(item,id){
                cartItems.append(`<tr class="cart-item" data-id="${id}">
                                    <td><img src="${item.img} " alt="0.5"></td>
                                    <td>${item.type}</td>
                                    <td>${item.desc}</td>
                                    <td>${item.price} грн</td>
                                    <td>${item.count}</td>
                                    <td><button class="remove-item"><i class="fas fa-times"></i></button></td>
                                </tr>`);
            });              
        }
        
        else{
            emptyCartTitle.removeClass('hidden');
            
        }
           
    }
    
    

}
  


$('.add-to-cart').click(function(){
    var item = $(this).parent(),
        data = item.attr('data-cart-info');
    if(!item.attr('data-add')){
        item.attr('data-add', true);
        cart.addItem(JSON.parse(data));
    }
    
});
$('.cart').on('click','.remove-item',  function(){
    var item = $(this).parent().parent(),
        id = item.attr('data-id');
    item.removeAttr('data-add');
    cart.removeItem(id);
});



/* 
======================================= */

var inputs = document.querySelectorAll('.input-box,.text-box');

for (let i = 0; i < inputs.length; i++) {
    let input = inputs[i].querySelector('input,textarea');
    if (input.value !== "") inputs[i].classList.add('input-active');
    input.addEventListener('focus', () => {
        inputs[i].classList.add('input-active');
    });
    input.addEventListener('blur', () => {
        if (input.value === "") inputs[i].classList.remove('input-active');
    });
}



























