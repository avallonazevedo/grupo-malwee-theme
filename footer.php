<footer data-aos="fade-up">
    <div class="footer-column">
        <div id="logo-footer">
            <img src="<?php echo THEME_IMAGES . '/logo-malwee.svg' ?>" alt="Logo Grupo Malwee">
        </div>
        <!-- /#logo-footer -->
        <img class="brands" src="<?php echo THEME_IMAGES . '/brands.png' ?>" alt="Malwee Marcas">
    </div>
    <!-- /.footer-column -->

    <div class="footer-column">
        <h4>Grupo Malwee</h4>
        <nav class="footer-navigation">
           <ul>
               <li><a href="">Sobre</a></li>
               <li><a href="">História</a></li>
               <li><a href="">Posicionamento</a></li>
               <li><a href="">Unidades</a></li>
               <li><a href="">Premiações e Reconhecimento</a></li>
               <li><a href="">Associações</a></li>
               <li><a href="">Instituto</a></li>
           </ul>
        </nav>

        <h4>Pessoas</h4>
        <nav class="footer-navigation">
            <ul>
                <li><a href="">Valores</a></li>
                <li><a href="">Talentos & Oportunidades</a></li>
                <li><a href="">Cultura</a></li>
                <li><a href="">Programas</a></li>
                <li><a href="">Indicadores</a></li>
            </ul>
        </nav>
    </div>
    <!-- /.footer-column -->

    <div class="footer-column">
        <h4>Negócios</h4>
        <nav class="footer-navigation">
            <ul>
                <li><a href="">Seja um franqueado</a></li>
                <li><a href="">Faça negócios com o grupo</a></li>
                <li><a href="">Serviços para parceiros</a></li>
            </ul>
        </nav>

        <h4>Planeta</h4>
        <nav class="footer-navigation">
            <ul>
                <li><a href="">O impacto positivo Malwee</a></li>
                <li><a href="">Plano de sustentabilidade</a></li>
                <li><a href="">Parque Malwee</a></li>
                <li><a href="">Relatórios de sustentabilidade</a></li>
                <li><a href="">Índice da moda</a></li>
            </ul>
        </nav>
    </div>
    <!-- /.footer-column -->

    <div class="footer-column">
        <h4>Conecte-se</h4>
        <ul class="social-list">
	        <?php
	        $social = array(
		        'facebook' => 'https://facebook.com',
		        'instagram' => 'https://instagram.com',
		        'twitter' => 'https://twitter.com',
		        'youtube' => 'https://youtube.com',
		        'linkedin' => 'https://linkedin.com'
	        );
	        ?>
	        <?php foreach ($social as $key => $social_item): ?>
                <li>
                    <a href="<?php echo $social_item ;?>" title="Siga-nos no <?php echo $social_item; ?>">
                        <img src="<?php echo THEME_IMAGES . '/icons/' . $key ?>.svg" alt="<?php echo $social_item; ?>">
                    </a>
                </li>
	        <?php endforeach; ?>
        </ul>
        <!-- /.social-list -->

        <h4>Entre em Contato</h4>

        <address>
            Rua Bertha Weege, 200 -
            89260-900 - Jaraguá do Sul
            Santa Catarina
            <ul>
                <li><img src="<?php echo THEME_IMAGES . '/icons/phone.svg' ?>" alt="Icon Phone"> (47) 2107-7200</li>
                <li><img src="<?php echo THEME_IMAGES . '/icons/envelope.svg' ?>" alt="Icon Envelope">contato@grupomalwee.com.br</li>
            </ul>
        </address>
    </div>
    <!-- /.footer-column -->
</footer>

<section id="copyright">
    <span><?php echo date('Y') ?>. Grupo Malwee Ltda. Todos os direitos reservados</span>
    <a href="#0">Política de Privacidade</a>
    <a href="#0">Aviso de cookies</a>
    <a href="#0">Termos e condições</a>
    <a href="#0">Ajuda</a>
    <a href="#0">Outros sites</a>
</section>
<!-- /#copyright -->
</main>
<script src="https://cdn.jsdelivr.net/npm/universal-parallax@1.3.2/dist/universal-parallax.min.js"></script>
<script src="<?php echo THEME_ASSETS_DIST  . '/index.js?v=1' ?>"></script>
<?php wp_footer(); ?>
</body>
</html>