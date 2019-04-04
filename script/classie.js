/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );


//header buttons
// $('.nav li').on('click', function () {

//   var scrollAnchor = $(this).attr('data-scroll'),
//     scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 28;

//   $('body,html').animate({
//     scrollTop: scrollPoint
//   }, 500);

//   return false;

// })
$(document).ready(function () {
  $(document).on("scroll", onScroll);
  $(".menu-item-19").click(() => $('html,body').animate({
      scrollTop: $("#content").offset().top
    },
    'slow'));

  $(".menu-item-23").click(() => $('html,body').animate({
      scrollTop: $("#speakers").offset().top
    },
    'slow'));

  $(".menu-item-24").click(() => $('html,body').animate({
      scrollTop: $("#sponsor").offset().top
    },
    'slow'));
    $(".menu-item-10").click(() => $('html,body').animate({
      scrollTop: $("#about").offset().top
    },
    'slow'));

  $(".menu-item-20").click(() => $('html,body').animate({
      scrollTop: $("#blog").offset().top
    },
    'slow'));
  $(".menu-item-30").click(() => $('html,body').animate({
        scrollTop: $("#contact").offset().top
      },
  'slow'));

})



// function onScroll(event) {
//   var scrollPos = $(document).scrollTop();
//   $('#csi-nav  > li > a').each(function () {
//     var currLink = $(this);
//     var refElement = $(currLink.attr("href"));
//     if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
//       $('#csi-nav > li > a').removeClass("active");
//       currLink.addClass("active");
//     } 
//   });
// }





    // function showError(container, errorMessage) {
    //   container.className = 'error';
    //   let msgElem = document.createElement('span');
    //   msgElem.className = "error-message";
    //   msgElem.innerHTML = errorMessage;
    //   container.appendChild(msgElem);
    // }

    // function formValidation(){
    //   // let firstName = document.querySelector(".first-name");
    //   // let lastName = document.querySelector(".last-name");
    //   // let email = document.querySelector(".email");
    //   // let mobile = document.querySelector(".mobile");
    //   // let company = document.querySelector(".company");
    //   // let position = document.querySelector(".position");
    //   let firstName = document.forms["modal-14"]["first_name"].value;
    //   let lastName = document.forms["modal-14"]["last_name"].value;
    //   let email = document.forms["modal-14"]["email"].value;
    //   let phone = document.forms["modal-14"]["phone"].value;
    //   let company = document.forms["modal-14"]["company"].value;
    //   let position = document.forms["modal-14"]["position"].value;
    //   let myForm = document.forms["modal-14"];
    //   let mdClose = document.querySelector(".md-close");

    //   if(firstName !== "" && lastName !== "" && email !== "" && phone !== "" && company !== "" && position !== ""){
    //      if(!firstName.match(/\d/) && !lastName.match(/\d/) && email.match(/[@\/]/) && phone.match(/\d/) && !phone.match(/[а-я А-Я a-z A-Z]/) && !company.match(/\d/) && !position.match(/\d/)) {
    //         [...mdClose].forEach((item) => {
    //           item.disabled = false;
    //         })           
    //      } else {
    //       [...mdClose].forEach((item) => {
    //         item.disabled = true;
    //       }) 
    //      }
    //   } 
    // }

    // let mdClose = document.querySelectorAll(".md-close");
    // [...mdClose].forEach((item) => {
    //   item.onclick = _ => formValidation();
    // })

    

    // !firstName.match(/\d/) && !lastName.match(/\d/) && email.match(/[@\/]/) && !phone.match(/\d/)

