let userBox = document.querySelector('.header .header-2 .user-box');    // find the element in Stylefor.css

document.querySelector('#user-btn').onclick = () =>{     //user-btn ID in header.php line no 43
   userBox.classList.toggle('active');      //show the user message
   navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .header-2 .navbar');    //stylesheet stylefor.css

document.querySelector('#menu-btn').onclick = () =>{     //header.php line no 41
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 60){      
      document.querySelector('.header .header-2').classList.add('active');
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}



let accountBox = document.querySelector('.account');

document.querySelector('#menu-btn').onclick = () =>{     //header.php line no 41
   accountBox.classList.toggle('active');
   navbar.classList.remove('active');
   
}

document.querySelector('#user-btn').onclick = () =>{     //header.php line no 43
   accountBox.classList.remove('active');
   navbar.classList.toggle('active');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   accountBox.classList.remove('active'); //event handler removes the class 'active' from both the userBox and navbar element
}

document.querySelector('#close-update').onclick = () =>{    //admin product page line no 164
   document.querySelector('.edit-product-form').style.display = 'none';   // hide the edit product form
   window.location.href = 'admin_products.php';       // go to admin product page
}