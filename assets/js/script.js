const btn_mobile = document.querySelector('.btn_menu');
const menu_mobile = document.querySelector('nav.menu');
const close_menu = document.getElementById('close_menu'); 

btn_mobile.addEventListener('click', () => {

    menu_mobile.classList.toggle('open_menu_mobile');
   
});

close_menu.addEventListener('click', () => {

    menu_mobile.classList.remove('open_menu_mobile');
   
});

function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}

//function to verify if element is on screen
function isOnScreen(el){
    let rect = el.getBoundingClientRect();
    return rect.top > 0 && rect.bottom < window.innerHeight;
}

let count1 = 0;
let valor1 = 55;

let count2 = 0;
let valor2 = 10;

let count3 = 0;
let valor3 = 16;
      
let count4 = 0;
let valor4 = 20;
addEventListener('scroll', (e) => {

    if(isOnScreen(document.getElementById('count1'))){
        
        
        setInterval(function(){

            if(count1 <= valor1){
                document.getElementById('count1').innerText = ''+count1+'';
                count1 += 1;
            }
            
        } , 40);
    }  

    if(isOnScreen(document.getElementById('count2'))){
        
        setInterval(function(){

            if(count2 <= valor2){
                document.getElementById('count2').innerText = ''+count2+'';
                count2 += 1;
            }
            
        } , 200);
    }  


    if(isOnScreen(document.getElementById('count3'))){    
      
        setInterval(function(){

            if(count3 <= valor3){
                document.getElementById('count3').innerText = ''+count3+'';
                count3 += 1;
            }
            
        } , 100);
    }  

    if(isOnScreen(document.getElementById('count4'))){    
      
        setInterval(function(){

            if(count4 <= valor4){
                document.getElementById('count4').innerText = ''+count4+'';
                count4 += 1;
            }
            
        } , 150);
    }


    
});

$('nav.menu li a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('href'),
            targetOffset = $(id).offset().top;
            
    $('html, body').animate({ 
        scrollTop: targetOffset - 100
    }, 500);

    menu_mobile.classList.remove('open_menu_mobile');
});


$('.menu_footer ul li a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('href'),
            targetOffset = $(id).offset().top;
            
    $('html, body').animate({ 
        scrollTop: targetOffset - 100
    }, 500);
});


document.getElementById('sendForm').addEventListener('click', function (e){

    e.preventDefault();

    this.innerText = "Enviando...";

    let nameForm = document.getElementById('nomeFormOne').value;
    let telefoneForm = document.getElementById('telefoneFormOne').value;
    let emailForm = document.getElementById('emailFormOne').value;
    let areaForm = document.getElementById('areaFormOne').value;

    $.ajax({
        method: 'POST',
        url: 'https://formsubmit.co/ajax/faleconosco@marcosrdias.com.br',
        dataType: 'json',
        accepts: 'application/json',
        data: {
            _subject: document.getElementById('_subject').value,
            nome: nameForm,
            telefone: telefoneForm,
            email: emailForm,
            area_interesse: areaForm
        },
        success: (data) => {
            console.log(data);
            document.getElementById('return_form_one').innerText = "Agradecemos o Contato";
            setTimeout(function(){
                document.getElementById('return_form_one').innerText = "";
            }, 3000);
            this.innerText = "Enviar";

            document.getElementById('nomeFormOne').value = "";
            document.getElementById('telefoneFormOne').value = "";
            document.getElementById('emailFormOne').value = "";
            document.getElementById('areaFormOne').value = "";

            window.location.href = "https://institutomrd.marcosrdias.com.br/obrigado.php";

        },
        error: (err) => {
            console.log(err);
            document.getElementById('return_form_one').innerText = err;

            document.getElementById('nomeFormOne').value = "";
            document.getElementById('telefoneFormOne').value = "";
            document.getElementById('emailFormOne').value = "";
            document.getElementById('areaFormOne').value = "";
        }
        
    });
})

document.getElementById('sendForm2').addEventListener('click', function(e){

    e.preventDefault();

    this.innerText = "Enviando...";

    let nameForm = document.getElementById('nomeFormTwo').value;
    let telefoneForm = document.getElementById('telefoneFormTwo').value;
    let emailForm = document.getElementById('emailFormTwo').value;
    let areaForm = document.getElementById('areaFormTwo').value;

    $.ajax({
        method: 'POST',
        url: 'https://formsubmit.co/ajax/faleconosco@marcosrdias.com.br',
        dataType: 'json',
        accepts: 'application/json',
        data: {
            _subject: "Contato do site",
            nome: nameForm,
            telefone: telefoneForm,
            email: emailForm,
            area_atuacao: areaForm
        },
        success: (data) => {
            console.log(data);
            document.getElementById('return_form_two').innerText = "Agradecemos o Contato";
            setTimeout(function(){
                document.getElementById('return_form_two').innerText = "";
            }, 3000);
            this.innerText = "Enviar";

            document.getElementById('nomeFormTwo').value = "";
            document.getElementById('telefoneFormTwo').value = "";
            document.getElementById('emailFormTwo').value = "";
            document.getElementById('areaFormTwo').value = "";

            window.location.href = "https://institutomrd.marcosrdias.com.br/obrigado.php";

        },
        error: (err) => {
            console.log(err);
            document.getElementById('return_form_two').innerText = err;

            document.getElementById('nomeFormTwo').value = "";
            document.getElementById('telefoneFormTwo').value = "";
            document.getElementById('emailFormTwo').value = "";
            document.getElementById('areaFormTwo').value = "";
        }
    });
})



//======================== gallery =======================================
const our_gallery = document.querySelector('.our_gallery');//galeria de imagens
const imgs_gallery = document.querySelectorAll('.card_gallery img');//imagens da galeria
const our_gallery_modal = document.querySelector('.our_gallery_modal');
const close_modal_gallery = document.getElementById('close_modal_gallery');
const top_gallery = document.querySelector('.top_gallery');


imgs_gallery.forEach((item, index) => {

    item.addEventListener('click', () => {

        imgs_gallery.forEach((item) => {
            item.style.opacity = "0";
            item.style.display = "none";    

        });

        our_gallery.classList.add('our_gallery_modal');
        imgs_gallery[index].style.opacity = "1";
        imgs_gallery[index].style.display = "block";


        top_gallery.style.display = "block";

    });

});

close_modal_gallery.addEventListener('click', function(){

    our_gallery.classList.remove('our_gallery_modal');

    imgs_gallery.forEach((item) => {
        item.style.opacity = "1";
        item.style.display = "block";    

    });

    top_gallery.style.display = "none";

});

console.log(imgs_gallery.length);
//======================== gallery =======================================