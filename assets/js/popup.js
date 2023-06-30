
// const eventPostContainers = document.querySelectorAll( '.col-lg-4, .news-grid, .news-grid1, .container-fluid, .post-details');
// let prevPopup;
// for (const eventPostContainer of eventPostContainers) {
//     const viewModalImageElement = eventPostContainer.querySelector(".view-modal");
//     const popup = eventPostContainer.querySelector(".popup");
//     const close = popup.querySelector(".close");
//     const field = popup.querySelector(".field");
//     const input = field.querySelector("input");
//     const copy = field.querySelector("button");
//     viewModalImageElement.onclick = () => {
//         popup.classList.add("show");
//         if (prevPopup && prevPopup !== popup) {
//       prevPopup.classList.remove("show");
//    }
//     prevPopup = popup;
// }
//     close.onclick = () => {
//         popup.classList.remove("show");
//     }
//  copy.onclick = () => {
//         input.select(); //select input value
//         if (document.execCommand("copy")) { //if the selected text copy
//             field.classList.add("active");
//             copy.innerText = "Copied";
//             setTimeout(() => {
//                 window.getSelection().removeAllRanges(); //remove selection from document
//                 field.classList.remove("active");
//                 copy.innerText = "Copy";
//             }, 3000);
//         }
//     }
// }


//  Opening All on click 

const eventPostContainers = document.getElementsByClassName("col-lg-4");
for (const eventPostContainer of eventPostContainers) {
    const viewModalImageElement = eventPostContainer.querySelector(".view-modal");
    const popup = eventPostContainer.querySelector(".popup");
    const close = popup.querySelector(".close");
    viewModalImageElement.onclick = () => {
        popup.classList.add("show");
    }
    close.onclick = () => {
        popup.classList.remove("show");
    }

}








































// const viewBtn = document.querySelectorAll(".view-modal"),
//     popup = document.querySelector(".popup"),
//     close = popup.querySelector(".close"),
//     field = popup.querySelector(".field"),
//     input = field.querySelector("input"),
//     copy = field.querySelector("button");
//     viewBtn.forEach((share) =>{
//         share.onclick = () => {
//             console.log("share clicked");
//             popup.classList.toggle("show");
//         }
//     } )
// close.onclick = () => {
//     viewBtn.click();
// }
// // copy.onclick = () => {
//     input.select(); //select input value
//     if (document.execCommand("copy")) { //if the selected text copy
//         field.classList.add("active");
//         copy.innerText = "Copied";
//         setTimeout(() => {
//             window.getSelection().removeAllRanges(); //remove selection from document
//             field.classList.remove("active");
//             copy.innerText = "Copy";
//         }, 3000);
//     }
// }













// const viewModalImageElement = document.querySelector(".view-modal"),
//     popup = document.querySelector(".popup"),
//     close = popup.querySelector(".close"),
//     field = popup.querySelector(".field"),
//     input = field.querySelector("input"),
//     copy = field.querySelector("button");

//     viewModalImageElement.onclick = () => {
//     console.log("viewModalImageElement clicked");
//     popup.classList.toggle("show");
// }
// close.onclick = () => {
//     viewModalImageElement.click();
// }

// copy.onclick = () => {
//     input.select(); //select input value
//     if (document.execCommand("copy")) { //if the selected text copy
//         field.classList.add("active");
//         copy.innerText = "Copied";
//         setTimeout(() => {
//             window.getSelection().removeAllRanges(); //remove selection from document
//             field.classList.remove("active");
//             copy.innerText = "Copy";
//         }, 3000);
//     }
// }

// let prevPopup;

// for (const eventPostContainer of eventPostContainers) {
//   viewModalImageElement.onclick = () => {
//     popup.classList.add("show");

//     if (prevPopup && prevPopup !== popup) {
//       prevPopup.classList.remove("show");
//     }
//     prevPopup = popup;
//   }  
// }
   
// const viewModalImageElement = eventPostContainer.getElementsByClassName(".view-modal")[0];
// const popup = eventPostContainer.getElementsByClassName(".popup")[0];
// const close = popup.getElementsByClassName(".close")[0];
// const field = popup.getElementsByClassName(".field")[0];
// const input = field.getElementsByClassName("input")[0];
// const copy = field.getElementsByClassName("button")[0];

