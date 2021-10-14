const menu_item = document.querySelectorAll('.menu-click');
const icon_rotate = document.querySelectorAll('.menu-click .icon-rotate');

for(let i = 0; i < menu_item.length; i++){
   menu_item[i].onclick = () => {
      icon_rotate[i].classList.toggle('spin');
   }
}