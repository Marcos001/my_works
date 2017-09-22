<?php
/**
 * Created by PhpStorm.
 * User: nig
 * Date: 20/09/17
 * Time: 12:46
 */

session_start();

include "cabecalho.php";
?>


<body>

<?php
include "perfil.php"
?>

<main>

    <?php
    include "header_tags.php"
    ?>

    <!-- conteudo do paper do eniac -->

    <article>

        <div class="article_title">
            <h1><a href="">
                    Metodologia automática para diagnóstico do glaucoma usando abordagem Deep Learning
                </a>
            </h1>
        </div>

        <div class="article_text">

            <p>
                <strong>Abstract.</strong> O Glaucoma é uma doença assintomática causada por lesão do nervo
                óptico em decorrência do aumento elevado da pressão intra-ocular. Com o
                diagnóstico precoce, as chances de controlar sua progressão são maiores. O
                glaucoma é um grande problema na saúde mundial como causa de cegueira,
                perdendo apenas para a catarata. Este trabalho apresenta o desenvolvimento
                de um método para a detecção automática do glaucoma em imagens da retina
                utilizando uma abordagem de aprendizado profundo. A metodologia utilizada
                no trabalho foi aquisição de imagens, treinamento da rede neural convolucio-
                nal para detecção do disco óptico, extração dos vasos sanguı́neos e extração
                de caracterı́ticas baseadas na textura. Por fim, foi realizada a classificação
                utilizando redes neurais convolucionais alcançando uma acurácia de 98.5%.
            </p>

            <h2>1. Introdução</h2>

            <p>
                O glaucoma é uma doença crônica assintomática que devido ao aumento da Pressão Intra-
                Ocular (PIO) elevada, causa dano ao nervo óptico levando a perda periférica irreversı́vel
                ou total da visão [Lamani et al. 2014, Yadav et al. 2014]. O nervo óptico é a parte do
                olho que transmite a informação visual da retina até o cérebro. Com o nervo óptico lesio-
                nado, causa um maior alargamento da escavação ou Copo Óptico-(CO), se comparado ao
                alargamento do Disco Óptico-(DO).
            </p>

            <p>
                O glaucoma não possui cura e quanto mais cedo o paciente for diagnosticado, menor são as chances de sofrer com os efeitos da doença, uma vez que, o tratameno
                precoce retardará a evolução da mesma. [Agarwal et al. 2015]. O glaucoma está entreas principais causas de cegueira do mundo, atingindo aproximadamente 66,8 milhões de
                pessoas, e estimando que 10% desta população torna-se cega de ambos os olhos devido
                a esta doença, sendo um grande problema na saúde mundial ficando atrás apenas para
                catarata [Yin et al. 2012].
            </p>


        </div>

        <!-- data e categoria de postagem -->

        <div class="article_meta">
            <p>Posted on: Sat 10 December 2016</p>
            <p>Category: <a href="http://nicolovaligi.com/category/2016-12-10-segmentation-models.html">2016-12-10-segmentation models</a>
                &ndash; Tags:
                <a href="http://nicolovaligi.com/tag/deep-learning.html">deep learning</a>    </p>
        </div>


    </article>


    <!-- fim do conteudo -->

</main>
</body>

</html>

