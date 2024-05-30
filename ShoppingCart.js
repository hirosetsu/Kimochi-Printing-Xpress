let itemsStringify = localStorage.getItem('cartItems') || '[]';
let items = JSON.parse(itemsStringify);
for (let i = 0; i < items.length; i++) {
  const element = items[i];
    console.log(element)
    let idElement = document.getElementById('products-list');
    let elementDiv = document.createElement('div');
    elementDiv.classList = 'product'
    elementDiv.innerHTML = `

                        <img src="${element.name}">

                        <div class="product-info">

                            <h3 class="product-name">
                                
                                ${element.name}
                            
                            </h3>

                            <h4 class="product-price">
                                
                                Rs. 350
                            
                            </h4>

                            <h4 class="product-offer">
                                
                                50%
                            
                            </h4>

                            <p class="product-quantity">
                                
                                Qnt: 
                                
                                <input value="1" name="">
                            
                            </p>

                            <p class="product-remove">

                                <i class="fas fa-trash-alt"></i>

                                <span class="remove">
                                    
                                    Remove
                                
                                </span>

                            </p>

                        </div>

`

idElement.appendChild(elementDiv);
}