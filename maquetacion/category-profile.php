<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		skretting
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="wrap">
    <div class="profile cat--profile">
        <div class="profile__container">
            <div class="profile__media">
                <img src="assets/author.jpg" title="titulo">
            </div><!-- /.profile__media -->
            <div class="profile__content">
                <div class="profile__title">
                    Aliquam Ac Dui Arcu
                </div><!-- /.profile__title -->
                <div class="profile__bajada">
                    Fusce fermentum pretium turpis
                </div><!-- /.profile__bajada -->
                <div class="profile__text">
                    In pretium tellus sed posuere consectetur. Mauris rhoncus justo non elit sollicitudin, a pellentesque odio faucibus. Aliquam nec dignissim turpis.
                </div><!-- /.profile__text -->
            </div><!-- /.profile__content -->
            <div class="profile__desc">
                Cuenta con más de 20 años de experiencia que le han permitido desempeñarse en distintas fases del proceso de producción de peces. Ingresó a Skretting en 2007 como Asistente Técnico, cargo en el que ha trabajado estrechamente con clientes para dar soporte en terreno e implementar de nuevas herramientas para el análisis de datos productivos, y en la implementación de estrategias de alimentación que han permitido mejorar tasas productivas. Además, ha apoyado en la apertura de nuevos mercados y es expositor permanente de NUtraining, herramienta de capacitación que aborda en forma integral el proceso de fabricación y manejo de alimento, formulación, inocuidad, control de calidad y cosecha, entre otros temas fundamentales para una óptima nutrición de peces.
            </div><!-- /.profile__desc -->
        </div><!-- /.profile__container -->
    </div><!-- /.profile -->

    <div class="btn--up btn--solid">
        <div class="btn--flex">
            <svg><use xlink:href="#shape-icon-arrow-down" /></svg>
            Columnas
        </div>
    </div><!-- /.btn--up -->

    <div class="container js-grid">
        <!--NOTE: No eliminar item--sizer-->
        <div class="item__sizer"></div><!-- /.item__sizer -->

        <!--NOTE: Fourth Item-->
        <div class="grid__item item--fourth">
            <a href="single.php" title="Titulo" class="grid__item__media">
                <img src="assets/acuicultura.jpg" alt="Titulo">
            </a>
            <div class="grid__item__meta">
                <p><a href="category.php" title="Titulo">Skretting en el mundo</a> </p>
                <span>|</span> 
                <p>
                    <a href="category.php" title="Titulo">
                        <span class="grid__icon">
                            <svg><use xlink:href="#shape-icon-video" /></svg>
                        </span> 
                        Columna 
                    </a>
                </p>
                <span>|</span> 
                <p>16 marzo 2016</p>
            </div><!-- /.grid__item__meta -->
            <a href="single.php" title="titulo" class="grid__item__title">Grumpy wizards make toxic brew for the evil Queen and Jack</a>
        </div><!-- /.grid__item item--fourth -->

        <!--NOTE: Third Item-->
        <div class="grid__item item--third">
            <a href="single.php" title="Titulo" class="grid__item__media">
                <img src="assets/productos.jpg" alt="Titulo">
            </a>
            <div class="grid__item__meta">
                <p><a href="category.php" title="Titulo">Skretting en el mundo</a> </p>
                <span>|</span> 
                <p>
                    <a href="category.php" title="Titulo">
                        <span class="grid__icon">
                            <svg><use xlink:href="#shape-icon-galeria" /></svg>
                        </span> 
                        Columna 
                    </a>
                </p>
                <span>|</span> 
                <p>16 marzo 2016</p>
            </div><!-- /.grid__item__meta -->
            <a href="single.php" title="titulo" class="grid__item__title">Grumpy wizards make toxic brew for the evil Queen and Jack</a>
        </div><!-- /.grid__item item--third -->

        <!--NOTE: Third Item-->
        <div class="grid__item item--third">
            <a href="single.php" title="Titulo" class="grid__item__media">
                <img src="assets/productos.jpg" alt="Titulo">
            </a>
            <div class="grid__item__meta">
                <p><a href="category.php" title="Titulo">Skretting en el mundo</a> </p>
                <span>|</span> 
                <p>
                    <a href="category.php" title="Titulo">
                        <span class="grid__icon">
                            <svg><use xlink:href="#shape-icon-galeria" /></svg>
                        </span> 
                        Columna 
                    </a>
                </p>
                <span>|</span> 
                <p>16 marzo 2016</p>
            </div><!-- /.grid__item__meta -->
            <a href="single.php" title="titulo" class="grid__item__title">Grumpy wizards make toxic brew for the evil Queen and Jack</a>
        </div><!-- /.grid__item item--third -->

        <!--NOTE: Half Item-->
        <div class="grid__item item--half">
            <a href="single.php" title="Titulo" class="grid__item__media">
                <img src="assets/food.jpg" alt="Titulo">
            </a>
            <div class="grid__item__meta">
                <p><a href="category.php" title="Titulo">Skretting en el mundo</a> </p>
                <span>|</span> 
                <p>
                    <a href="category.php" title="Titulo">
                        <span class="grid__icon">
                            <svg><use xlink:href="#shape-icon-columna" /></svg>
                        </span> 
                        Columna 
                    </a>
                </p>
                <span>|</span> 
                <p>16 marzo 2016</p>
            </div><!-- /.grid__item__meta -->
            <a href="single.php" title="titulo" class="grid__item__title">Grumpy wizards make toxic brew for the evil Queen and Jack</a>
        </div><!-- /.grid__item item--half -->

        <!--NOTE: Fourth Item-->
        <div class="grid__item item--fourth">
            <a href="single.php" title="Titulo" class="grid__item__media">
                <img src="assets/acuicultura.jpg" alt="Titulo">
            </a>
            <div class="grid__item__meta">
                <p><a href="category.php" title="Titulo">Skretting en el mundo</a> </p>
                <span>|</span> 
                <p>
                    <a href="category.php" title="Titulo">
                        <span class="grid__icon">
                            <svg><use xlink:href="#shape-icon-video" /></svg>
                        </span> 
                        Columna 
                    </a>
                </p>
                <span>|</span> 
                <p>16 marzo 2016</p>
            </div><!-- /.grid__item__meta -->
            <a href="single.php" title="titulo" class="grid__item__title">Grumpy wizards make toxic brew for the evil Queen and Jack</a>
        </div><!-- /.grid__item item--fourth -->

        <!--NOTE: Fourth Item-->
        <div class="grid__item item--fourth">
            <a href="single.php" title="Titulo" class="grid__item__media">
                <img src="assets/acuicultura.jpg" alt="Titulo">
            </a>
            <div class="grid__item__meta">
                <p><a href="category.php" title="Titulo">Skretting en el mundo</a> </p>
                <span>|</span> 
                <p>
                    <a href="category.php" title="Titulo">
                        <span class="grid__icon">
                            <svg><use xlink:href="#shape-icon-video" /></svg>
                        </span> 
                        Columna 
                    </a>
                </p>
                <span>|</span> 
                <p>16 marzo 2016</p>
            </div><!-- /.grid__item__meta -->
            <a href="single.php" title="titulo" class="grid__item__title">Grumpy wizards make toxic brew for the evil Queen and Jack</a>
        </div><!-- /.grid__item item--fourth -->

        <!--NOTE: Fourth Item-->
        <div class="grid__item item--fourth">
            <a href="single.php" title="Titulo" class="grid__item__media">
                <img src="assets/acuicultura.jpg" alt="Titulo">
            </a>
            <div class="grid__item__meta">
                <p><a href="category.php" title="Titulo">Skretting en el mundo</a> </p>
                <span>|</span> 
                <p>
                    <a href="category.php" title="Titulo">
                        <span class="grid__icon">
                            <svg><use xlink:href="#shape-icon-video" /></svg>
                        </span> 
                        Columna 
                    </a>
                </p>
                <span>|</span> 
                <p>16 marzo 2016</p>
            </div><!-- /.grid__item__meta -->
            <a href="single.php" title="titulo" class="grid__item__title">Grumpy wizards make toxic brew for the evil Queen and Jack</a>
        </div><!-- /.grid__item item--fourth -->

        <!--NOTE: Third Item-->
        <div class="grid__item item--third">
            <a href="single.php" title="Titulo" class="grid__item__media">
                <img src="assets/productos.jpg" alt="Titulo">
            </a>
            <div class="grid__item__meta">
                <p><a href="category.php" title="Titulo">Skretting en el mundo</a> </p>
                <span>|</span> 
                <p>
                    <a href="category.php" title="Titulo">
                        <span class="grid__icon">
                            <svg><use xlink:href="#shape-icon-galeria" /></svg>
                        </span> 
                        Columna 
                    </a>
                </p>
                <span>|</span> 
                <p>16 marzo 2016</p>
            </div><!-- /.grid__item__meta -->
            <a href="single.php" title="titulo" class="grid__item__title">Grumpy wizards make toxic brew for the evil Queen and Jack</a>
        </div><!-- /.grid__item item--third -->

        <!--NOTE: Fourth Item-->
        <div class="grid__item item--fourth">
            <a href="single.php" title="Titulo" class="grid__item__media">
                <img src="assets/acuicultura.jpg" alt="Titulo">
            </a>
            <div class="grid__item__meta">
                <p><a href="category.php" title="Titulo">Skretting en el mundo</a> </p>
                <span>|</span> 
                <p>
                    <a href="category.php" title="Titulo">
                        <span class="grid__icon">
                            <svg><use xlink:href="#shape-icon-video" /></svg>
                        </span> 
                        Columna 
                    </a>
                </p>
                <span>|</span> 
                <p>16 marzo 2016</p>
            </div><!-- /.grid__item__meta -->
            <a href="single.php" title="titulo" class="grid__item__title">Grumpy wizards make toxic brew for the evil Queen and Jack</a>
        </div><!-- /.grid__item item--fourth -->

        <!--NOTE: Half Item-->
        <div class="grid__item item--half">
            <a href="single.php" title="Titulo" class="grid__item__media">
                <img src="assets/food.jpg" alt="Titulo">
            </a>
            <div class="grid__item__meta">
                <p><a href="category.php" title="Titulo">Skretting en el mundo</a> </p>
                <span>|</span> 
                <p>
                    <a href="category.php" title="Titulo">
                        <span class="grid__icon">
                            <svg><use xlink:href="#shape-icon-columna" /></svg>
                        </span> 
                        Columna 
                    </a>
                </p>
                <span>|</span> 
                <p>16 marzo 2016</p>
            </div><!-- /.grid__item__meta -->
            <a href="single.php" title="titulo" class="grid__item__title">Grumpy wizards make toxic brew for the evil Queen and Jack</a>
        </div><!-- /.grid__item item--half -->

        <!--NOTE: Fourth Item-->
        <div class="grid__item item--fourth">
            <a href="single.php" title="Titulo" class="grid__item__media">
                <img src="assets/acuicultura.jpg" alt="Titulo">
            </a>
            <div class="grid__item__meta">
                <p><a href="category.php" title="Titulo">Skretting en el mundo</a> </p>
                <span>|</span> 
                <p>
                    <a href="category.php" title="Titulo">
                        <span class="grid__icon">
                            <svg><use xlink:href="#shape-icon-video" /></svg>
                        </span> 
                        Columna 
                    </a>
                </p>
                <span>|</span> 
                <p>16 marzo 2016</p>
            </div><!-- /.grid__item__meta -->
            <a href="single.php" title="titulo" class="grid__item__title">Grumpy wizards make toxic brew for the evil Queen and Jack</a>
        </div><!-- /.grid__item item--fourth -->

    </div><!-- /.container js-grid -->
</div><!-- /.wrap -->

<div class="btn--up">
    <div class="btn--flex" title="Cargar Más">
        Cargar más
    </div>
</div><!-- /.btn--up -->
<?php include 'footer.php'; ?>