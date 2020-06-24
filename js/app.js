$(document).ready(function(){
    let scroll_link = $('.scroll');
   
     //smooth scrolling -----------------------
     scroll_link.click(function(e){
         e.preventDefault();
         let url = $('body').find($(this).attr('href')).offset().top;
         $('html, body').animate({
           scrollTop : url
         },1200);
         $(this).parent().addClass('active');
         $(this).parent().siblings().removeClass('active');
         return false;	
      });
   });

  
   // Adding scroll class to list items
  const liItems = document.querySelectorAll('li a');
  
  const subItemClassAdder = (nodeList, newClass) => {
   const liArr = Array.from(nodeList);
   for(let i = 0; i < liArr.length; i++){
     if(liArr[i].getAttribute('href').includes('#')){
     liArr[i].className += ` ${newClass}`;
    }  
   }
    console.log(liArr);
  return liArr;
  }
  
  subItemClassAdder(liItems, 'scroll');

  // Comments Styles
const commentsButton = document.querySelector('.form-submit #submit');
if(commentsButton){
  commentsButton.className = 'btn btn-danger';
}

const inputTextArea = document.querySelector('.comment-form-comment textarea');
if(inputTextArea){
  inputTextArea.className = 'form-control';
  inputTextArea.setAttribute('placeholder', 'Ingresa aquí tu comentario*');
}

const newComments = document.querySelector('#commentform');
if(newComments
  && newComments.querySelector('.comment-form-author label')
  && newComments.querySelector('.comment-form-author input')
  && newComments.querySelector('.comment-form-email label')
  && newComments.querySelector('.comment-form-email input')
  && newComments.querySelector('.comment-form-url label')
  && newComments.querySelector('.comment-form-url input')
  ){

  newComments.querySelector('.comment-form-author label').className = 'd-none';
  newComments.querySelector('.comment-form-author input').className = 'form-control';
  newComments.querySelector('.comment-form-author input').setAttribute('placeholder', 'Nombre*');

  newComments.querySelector('.comment-form-email label').className = 'd-none';
  newComments.querySelector('.comment-form-email input').className = 'form-control';
  newComments.querySelector('.comment-form-email input').setAttribute('placeholder', 'Email*');

  newComments.querySelector('.comment-form-url label').className = 'd-none';
  newComments.querySelector('.comment-form-url input').className = 'form-control';
  newComments.querySelector('.comment-form-url input').setAttribute('placeholder', 'Sitio web');

}

const editCommentsButton = document.querySelectorAll('.comment-edit-link');
if(editCommentsButton){
  editCommentsButton.forEach(boton => {
    boton.className = 'btn btn-outline-danger btn-sm'
  })
}

const replyCommentsButton = document.querySelectorAll('.comment-reply-link');
if(replyCommentsButton){
  replyCommentsButton.forEach(boton => {
    boton.className = 'btn btn-outline-danger btn-sm'
  })
}


// render category images

//Creating anchor elements array

const categories = document.querySelectorAll('.cat-item a');

const itemLi = Array.from(categories);

const catHtml = document.querySelectorAll('.cat-link');

const itemCat = Array.from(catHtml);

//asigning href

const catFiltered = itemLi.filter(item => {
return item.innerHTML != 'Uncategorized';
});

const catHref = catFiltered.map(item => {
  return item.getAttribute('href');
})

const asignHref = itemCat.forEach((item, index) =>{
 item.setAttribute('href', catHref[index])
});












