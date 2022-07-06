<?php include('header.php') ?>
<style>
    .page_obrigado{
        height: 500px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
    }
    .page_obrigado h2{
        display: block;
        font-size: 3em;
        margin-bottom: 20px;
    }
    .page_obrigado p{
        font-size: 1.5em;
    }
    @media(max-width: 420px){
        .page_obrigado{
            height: 380px;
        }
        .page_obrigado h2{
            font-size: 2em;
        }
        .page_obrigado p{
            font-size: 1.2em;
        }
    }
</style>
<main>

    <header class="container page_obrigado">
        <h2 class="title-default">Obrigado</h2>
        <p class="desc-default">Juntos, podemos mudar<br>cada vez mais vidas.</p>
    </header>

</main>

<?php include('footer.php') ?>