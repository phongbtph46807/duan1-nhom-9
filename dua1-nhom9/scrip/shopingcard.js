let iconcard = document.querySelector('.icon-card');
let closecard = document.querySelector('.close');
let listCardHTML = document.querySelector('.listCard');
let body = document.querySelector('body');
let listProductHTML = document.querySelector('.khung-container');
let iconcardspan = document.querySelector('.icon-card span');
let cart =[];
let produc =[];

iconcard.addEventListener('click',()=> {
    body.classList.toggle('showcard')
})
closecard.addEventListener('click',()=> {
    body.classList.toggle('showcard')
})

const addDataToHTML =()=>{
    listProductHTML.innerHTML='';
    if(listproduct.length > 0){
        listproduct.forEach(listproduct => {
            let newProduct =document.createElement('div');
            newProduct.classList.add('item');
            newProduct.dataset.id=listproduct.id;
            newProduct.innerHTML= `<img src="${listproduct.image}" alt="">
                                    <h2>${listproduct.name}</h2>
                                    <div class="price">${listproduct.price}</div>
                                    <button class="addCard">
                                       Thêm vào giỏ hàng
                                    </button>`;
            listProductHTML.appendChild(newProduct);
        });
    }
}
listProductHTML.addEventListener('click',(even)=>{
    let positionClick=even.target;
    if(positionClick.classList.contains('addCard')){
        let product_id = positionClick.parentElement.dataset.id;
        addTocard(product_id);
    }
})

const addTocard =(product_id) =>{
    let possitionThisProductCard = cart.findIndex((value) => value.product_id == product_id);
    if(cart.length<=0){
        cart=[{
            product_id:product_id,
            quantity:1
        }];
        // console.log(cart);
    }else if(possitionThisProductCard < 0){
        cart.push({
            product_id:product_id,
            quantity: 1
        });
    }else{
        cart[possitionThisProductCard].quantity =cart[possitionThisProductCard].quantity + 1;
    }
    console.log(cart);
}

const addCardtoHTML =()=>{
    listCardHTML.innerHTML='';
    let totalQuantity =0;
    if(cart.length >0){
        cart.forEach(cartt =>{ 
            let newItem = document.createElement('div');
            newItem.classList.add('item');
            listCardHTML.appendChild(newItem);// newItem.dataset.id=item.product_id;
            newItem.innerHTML=`<div class="image">
                <img src="img/xiaomi.png" alt="">
                </div>
                <div class="name">
                 iPhone
                </div>
                <div class="totalPrice">
                200$
                </div>
                <div class="quantity">
                <span class="minus"><</span>
                <span>1</span>
                <span class="plus">></span>
                </div>
                `;
            
        })
    }
}

const initApp =()=>{
    fetch('produc.json')
    .then(Response =>Response.json())
    .then(data =>{
        listproduct = data;
        addDataToHTML();
    })
}
initApp();