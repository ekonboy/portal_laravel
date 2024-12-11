let theme = [];
let date = new Date().toLocaleDateString();

export default function Settings(defaultTheme){
    if(localStorage.getItem("dashwind-html-demo1")){
        let localData = JSON.parse(localStorage.getItem("dashwind-html-demo1"));
        if (localData.date !== date) {
            theme = defaultTheme;
        } else {
            theme = theme;
        }
    }else{
        localStorage.setItem("dashwind-html-demo1", JSON.stringify({ ...defaultTheme, date: date }));
    }

    function onPageLoad(){
        let themeData = JSON.parse(localStorage.getItem("dashwind-html-demo1"));
        if(themeData.skin === 'dark'){
            document.documentElement.classList.add('dark');
        }else{
            document.documentElement.classList.remove('dark');
        }
        if(themeData.direction === 'rtl'){
            document.body.setAttribute('dir', 'rtl');
        }else{
            document.body.setAttribute('dir', 'ltr');
        }
    }
    onPageLoad();


    const themeToggle = document.querySelectorAll('.theme-toggle');
    const directionToggle = document.querySelectorAll('.direction-toggle');

    // mode toggle
    themeToggle.forEach((item)=> {
        item.addEventListener('click', function(e){
            e.preventDefault();
            let themeData = JSON.parse(localStorage.getItem("dashwind-html-demo1"));
            if(themeData.skin !== 'dark'){
                localStorage.setItem("dashwind-html-demo1", JSON.stringify({ ...themeData, skin: 'dark', date: date }))
                document.documentElement.classList.add('dark');
            }else{
                localStorage.setItem("dashwind-html-demo1", JSON.stringify({ ...themeData, skin: 'light', date: date }))
                document.documentElement.classList.remove('dark');
            }
        })
    })
    // direction toggle
    directionToggle.forEach((item)=> {
        item.addEventListener('click', function(e){
            e.preventDefault();
            let themeData = JSON.parse(localStorage.getItem("dashwind-html-demo1"));
            if(themeData.direction !== 'rtl'){
                localStorage.setItem("dashwind-html-demo1", JSON.stringify({ ...themeData, direction: 'rtl', date: date }))
                document.body.setAttribute('dir', 'rtl');
            }else{
                localStorage.setItem("dashwind-html-demo1", JSON.stringify({ ...themeData, direction: 'ltr', date: date }))
                document.body.setAttribute('dir', 'ltr');
            }
        })
    })
}