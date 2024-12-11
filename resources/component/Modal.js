export default function Modal(el){
    const elm = document.querySelectorAll('.modal-toggle');
    elm.forEach(function(item){
        let dialog = document.querySelector(item.dataset.target),
            close = dialog?.querySelectorAll('.modal-close'),
            getAll = document.querySelectorAll('.modal');
        item.addEventListener("click", function(e){
            dialog.classList.add('show');
            document.body.classList.add('overflow-hidden');
            getAll.forEach(function(getItem){
                getItem !== dialog && getItem.classList.remove('show');
            })
        })
        close?.forEach(function(item){
            item.addEventListener("click", function(e){
                e.preventDefault();
                dialog.classList.remove('show');
                document.body.classList.remove('overflow-hidden');
            })
        })
    })
}