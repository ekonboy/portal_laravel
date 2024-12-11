import {getParents} from "../function";

export default function CurrentLink(selector, parent, submenu, base, active){
    let elm = document.querySelectorAll(selector);
    let currentURL = document.location.href,
    removeHash = currentURL.substring(0, (currentURL.indexOf("#") == -1) ? currentURL.length : currentURL.indexOf("#")),
    removeQuery = removeHash.substring(0, (removeHash.indexOf("?") == -1) ? removeHash.length : removeHash.indexOf("?")),
    fileName = removeQuery;
    
    elm.forEach(function(item){
      var selfLink = item.getAttribute('href').split('../').slice(-1);
      if (fileName.match(selfLink)) {
        let parents = getParents(item,`.${base}`, parent);
        parents.forEach(parentElemets =>{
          parentElemets.classList.add(...active);
          let subItem = parentElemets.querySelector(`.${submenu}`);
          subItem !== null && (subItem.style.display = "block")
          parentElemets.scrollIntoView({ behavior: "smooth", block: "start",inline: "nearest"});
        })
      } else {
        item.parentElement.classList.remove(...active);
      }
    })
}