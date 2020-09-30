//RUN WOW.JS
new WOW().init();
//GLOBAL
let products=[];
let cartItems=[];
let cart_n= document.getElementById("cart_n");
//DIVS
var shapedDIV = document.getElementById("shapedDIV");
var candyDIV = document.getElementById("candiesDIV");
var lolliDIV = document.getElementById("lolliDIV");
//INFORMATION
var SHAPED=[
    {name: 'Foiled Milk Chocolate Lady Bugs: 36-Piece',price:45},
    {name: 'Fort Knox Gold Foiled Milk Chocolate Coins in Gold Bar Gift Box',price:9.95},
    {name: 'Cadbury Screme Eggs Halloween Candy: 48-Piece Box',price:48},
    {name: 'Koppers Fruit Filled Hard Candy Sea Shells: Bag',price:29.80},
    {name: 'Albanese Candy Fruit Jell Slices - Watermelon: Box',price:29.50},
    {name: 'Trolli Sour Brite Crawlers Gummy Worms - Large',price:19.95}
];
var CANDY=[
    {name:'Arcor Strawberry Bon Bons Hard Candy: Bag',price:6.65},
    {name:'Cedrinca Fruit Flavored Hard Candy: Bag',price:4.65},
    {name:'Primrose Filled Assorted Fruit Bon Bons Candy: Bag',price:19.50}
];
var LOLLI=[
    {name:'Squiggly Pops Petite Swirl Lollipops - Rainbow Cherry: 24-Piece',price: 7.25},
    {name:'Beach Ball Lollipops: 12-Piece Box',price:5.95},
    {name:'Bobs Sweet Stripes Red and White Peppermint Candy Canes: 12-Piece Box',price:3.0},
];
//HTML
function HTMLshapedProduct(con){
    let URL= `./img/shapeds/shaped${con}.jpg`;
    let btn= `btnFruits${con}`;
    return `
        <div class="col-md-4 wow zoomIn data-wow-duration="10s" data-wow-offset="240" ">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top" style="height:16rem;" src="${URL}" alt="Card image cap">
            <div class="card-body">
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <p class="card-text">${SHAPED[con-1].name}</p>
                <p class="card-text">Price: $ ${SHAPED[con-1].price},00</p>
                <div class:"d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="cart2('${SHAPED[con-1].name}',
                        '${SHAPED[con-1].price}','${URL}','${con}','${btn}')" class="btn btn-sm btn-outline-secondary">
                        <a style="color:ingerit;" href="cart.php">Buy</a>
                        </button>
                        <button id="${btn}" type="button" onclick="cart('${SHAPED[con-1].name}',
                        '${SHAPED[con-1].price}','${URL}','${con}','${btn}')" class="btn btn-sm btn-outline-secondary">
                        <a style="color:inherit;" >Add to cart</a>
                        </button>
                    </div>
                    <small class="text-muted">Free Shipping</small>
                </div>
            </div>
            
            </div>
        </div>
    `;
}
function HTMLcandyProduct(con){
    let URL= `./img/candies/candy${con}.jpg`;
    let btn= `btnJuice${con}`;
    return `
        <div class="col-md-4 wow zoomIn data-wow-duration="10s" data-wow-offset="240" ">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top" style="height:16rem;" src="${URL}" alt="Card image cap">
            <div class="card-body">
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <p class="card-text">${CANDY[con-1].name}</p>
                <p class="card-text">Price: $ ${CANDY[con-1].price},00</p>
                <div class:"d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="cart2('${CANDY[con-1].name}','${CANDY[con-1].price}','${URL}','${btn}')" class="btn btn-sm btn-outline-secondary">
                        <a style="color:ingerit;" href="cart.php">Buy</a>
                        </button>
                        <button id="${btn}" type="button" onclick="cart('${CANDY[con-1].name}', '${CANDY[con-1].price}','${URL}','${btn}')" class="btn btn-sm btn-outline-secondary">
                        <a style="color:inherit;" >Add to cart</a>
                        </button>
                    </div>
                    <small class="text-muted">Free Shipping</small>
                </div>
            </div>
            
            </div>
        </div>
    `;
}
function HTMLlolliProduct(con){
    let URL= `./img/lollis/lolli${con}.jpg`;
    let btn= `btnSalad${con}`;
    return `
        <div class="col-md-4 wow zoomIn data-wow-duration="10s" data-wow-offset="240" ">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top" style="height:16rem;" src="${URL}" alt="Card image cap">
            <div class="card-body">
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <i style="color:orange;" class="fa fa-star"></i>
                <p class="card-text">${LOLLI[con-1].name}</p>
                <p class="card-text">Price: $ ${LOLLI[con-1].price},00</p>
                <div class:"d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="cart2('${LOLLI[con-1].name}',
                        '${LOLLI[con-1].price}','${URL}','${con}','${btn}')" class="btn btn-sm btn-outline-secondary">
                        <a style="color:ingerit;" href="cart.php">Buy</a>
                        </button>
                        <button id="${btn}" type="button" onclick="cart('${LOLLI[con-1].name}',
                        '${LOLLI[con-1].price}','${URL}','${con}','${btn}')" class="btn btn-sm btn-outline-secondary">
                        <a style="color:inherit;" >Add to cart</a>
                        </button>
                    </div>
                    <small class="text-muted">Free Shipping</small>
                </div>
            </div>
            
            </div>
        </div>
    `;
}

//Animation
function animation() {
    const toast=swal.mixin({
        toast:true,
        position:'top-end',
        showConfirmButton:false,
        timer:1000
    });
    toast({
        type:'success',
        title:'Added to shopping cart'
    });
}

//CART FUNCTIONS
function cart(name, price, url, con, btncart){
    let item={
        name:name,
        price:price,
        url:url
    }
    cartItems.push(item);
    let storage = JSON.parse(localStorage.getItem("cart"));
    if(storage==null){
        products.push(item);
        localStorage.setItem("cart",JSON.stringify(products));
    } else{
        products=JSON.parse(localStorage.getItem("cart"));
        products.push(item);
        localStorage.setItem("cart", JSON.stringify(products));
    }
    product= JSON.parse(localStorage.getItem("cart"));
    cart_n.innerHTML=`[${products.length}]`;
    document.getElementById(btncart).style.display="none";
    animation();
}
function cart2(name,price,url,con,btncart){
    let item={
        name:name, 
        price:price,
        url:url
    }
    cartItems.push(item);
    let storage = JSON.parse(localStorage.getItem("cart"));
    if(storage==null){
        products.push(item);
        localStorage.setItem("cart",JSON.stringify(products));
    } else{
        products=JSON.parse(localStorage.getItem("cart"));
        products.push(item);
        localStorage.setItem("cart", JSON.stringify(products));
    }
    product= JSON.parse(localStorage.getItem("cart"));
    cart_n.innerHTML=`[${products.length}]`;
    document.getElementById(btncart).style.display="none";
}

//RENDER
function render(){
    for (let index = 1; index <= 6; index++) {
        shapedDIV.innerHTML+= `${HTMLshapedProduct(index)}`; 
    }
    for (let index = 1; index <= 3; index++) {
        candyDIV.innerHTML+= `${HTMLcandyProduct(index)}`; 
        lolliDIV.innerHTML+= `${HTMLlolliProduct(index)}`; 
    }
    if( localStorage.getItem("cart")==null ){

    } else{
        products=JSON.parse(localStorage.getItem("cart"));
        cart_n.innerHTML=`[${products.length}]`;
    }
}

//Login
document.getElementById("formA").addEventListener("submit",(e)=>{
    e.preventDefault();
    let userLogin=document.getElementById("usera")
    let passLogin=document.getElementById("passworda");
    if (userLogin.value=="ADMIN" && passLogin.value=="123") {
        swal({
            title:'Welcome',
            html:'Access granted',
            type:'success'
        });
        setTimeout(()=>{
            loadPage();
        },3000);
    } 
    else{
        swal({
            title:'Error',
            html:'Access denied',
            type:'error'
        });
    }
    function loadPage() {
        window.location.href="./admin./admin.php";
    }
});

