<?php
/**
 * Created by PhpStorm.
 * User: nig
 * Date: 20/09/17
 * Time: 08:35
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

    <article>
        <div class="article_title">
            <h3>
                <a href="eniac.php">
                    Metodologia automática para diagnóstico do glaucoma usando abordagem Deep Learning
                </a>
            </h3>
        </div>

        <div class="tags">
            <small>
                <a href="http://nicolovaligi.com/tag/deep-learning.html">deep learning</a>
            </small>
        </div>
    </article>

    <article>
        <div class="article_title">
            <h3>
                <a href="http://nicolovaligi.com/converting-deep-learning-model-caffe-keras.html">Converting a Deep learning model from Caffe to Keras</a>
            </h3>
        </div>

        <div class="tags">
            <small><a href="http://nicolovaligi.com/tag/deep-learning.html">deep learning</a></small>
            <small><a href="http://nicolovaligi.com/tag/keras.html">keras</a></small>
        </div>

    </article>

    <article>
        <div class="article_title">
            <h3><a href="http://nicolovaligi.com/car-speed-estimation-windshield-camera.html">Car speed estimation from a windshield camera</a></h3>
        </div>

        <div class="tags">
            &emsp;
            <small><a href="http://nicolovaligi.com/tag/computer-vision.html">computer vision</a></small>
            <small><a href="http://nicolovaligi.com/tag/self-driving-cars.html">self-driving cars</a></small>
        </div>
    </article>


    <footer>
        <div id="paginator">
            <a href="http://nicolovaligi.com/index2.html" class="button_accent">&larr; Older Posts</a>

        </div>
    </footer>

    <?php
    include "rodape.php";
    ?>


</main>
</body>

</html>
