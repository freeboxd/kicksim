<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kicksim
 */

get_header(); ?>
	
			<div class="header-main">
				<div class="header-main--content container">
					<div class="header-main--left">
						<h1 class="header-main--lead">Vai viajar?</h1>
						<p class="header-main--text">Utilize nosso serviço de <u>roaming celular internacional grátis</u> e faça ligações do exterior sem o custo internacional	da sua operadora!</p>
						<button class="btn btn-blue">Saiba mais ⟶</button>
					</div>
					<div class="header-main--right">
						<img class="smartphone-showcase-image" src="<?php echo get_template_directory_uri() ?>/images/home/smartphone.png"/>
						<div class="download-icons">
							<a href="https://itunes.apple.com/br/app/kicksim-networks/id1044235975?mt=8">
								<img class="single-download-icon" src="<?php echo get_template_directory_uri() ?>/images/home/applestore.png">
							</a>
							<a href="https://play.google.com/store/apps/developer?id=Kick+SIM+Networks+Inc&hl=pt">
								<img class="single-download-icon" src="<?php echo get_template_directory_uri() ?>/images/home/googleplay.png">
							</a>
						</div>
					</div>
				</div> <!-- .header-main-content -->
			</div> <!-- .header-main -->
		<span class="right-cut"></span>
	</div>
</header><!-- #masthead -->

<div id="content" class="site-content">

	<div id="primary" class="content-area">
		<main id="main" role="main">
			<section id="o-que-e-o-kicksim" role="what-is-kicksim" class="content-section about-section">
				<div class="container">
					<h1 class="section-lead">O que é o KickSIM</h1>
					<div class="section-container">
						<div class="row steps-row">
							<div class="app-steps-left-col">
								<p class="app-steps-text">KickSIM é o novo serviço de roaming celular internacional grátis, que mantém seu número celular conectado no exterior através da nuvem sem necessidade de usar VoIP ou Wi-Fi público</p>
								<img class="app-steps-img" src="<?php echo get_template_directory_uri() ?>/images/home/step1-smartphone.png">
							</div>
							<div class="app-steps-right-col">
								<img class="app-steps-img" src="<?php echo get_template_directory_uri() ?>/images/home/step2-smartphone.png">
								<p class="app-steps-text">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
							</div>
						</div>
						<button class="btn btn-blue">Dúvidas frequentes</button>
					</div>
				</div>
			</section>
			<section id="como-usar" role="how-to-use" class="content-section how-to-section">
				<div class="container">
					<h1 class="section-lead"><span class="btn btn-header">Como usar</span></h1>
					<div class="container section-container">
						<div class="how-to-steps">
							<div class="how-to-step">
								<img class="how-to-steps-img" src="<?php echo get_template_directory_uri() ?>/images/home/how-to-step1.png" alt="Primeiro passo">
								<span class="how-to-step-title">Instale o KickSIM</span>
								<p class="how-to-step-text">Você encontrará o app na <a href="#">Apple Store</a> e no <a href="#">Google Play</a></p>
							</div>
							<div class="how-to-step">
								<img class="how-to-steps-img" src="<?php echo get_template_directory_uri() ?>/images/home/how-to-step2.png" alt="Segundo passo">
								<span class="how-to-step-title">Ative o roaming</span>
								<p class="how-to-step-text">Digite seu número de celular local e, em seguida, digite seu número celular internacional</p>
							</div>
							<div class="how-to-step">
								<img class="how-to-steps-img" src="<?php echo get_template_directory_uri() ?>/images/home/how-to-step3.png" alt="Terceiro passo">
								<span class="how-to-step-title">Pronto!</span>
								<p class="how-to-step-text">Clique em conectar, troque o chip e boa viagem!</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
