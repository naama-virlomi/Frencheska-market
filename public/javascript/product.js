function setModalProduct(productId) {
  console.log (`setModalProduct (${productId})`);
  //create xmlhttprequest
  const xhr = new XMLHttpRequest();
  //add event listener to build the result
  xhr.onload = function() {
    if (this.status == 200) {
      const modalContant = document.querySelector(".modal-content");
      if (modalContant) 
        modalContant.innerHTML = this.responseText;
        else modalContant.innerHTML=`<div class="error"> error </div>`;

        document.getElementById("show-modal").checked = true;

    }
  };
  //set where to get the data from
  xhr.open("GET", "product2.php?product="+productId, true);
  //send request
  xhr.send();
}
