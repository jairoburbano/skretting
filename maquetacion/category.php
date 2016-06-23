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
    <h1 class="title title--main">Category</h1>
    <div class="categories">
        <div class="cat__icon">
            <svg><use xlink:href="#shape-icon-menu" /></svg>
            <svg><use xlink:href="#shape-icon-close" /></svg>
        </div><!-- /.cat__icon -->
        <div class="cat__filter">
            <div id="js-filter">
                <div class="filtros__content">
                    <p class="filtros__placeholder js-placeholder">Filtrar</p><!-- /.js-placeholder -->
                    <!--NOTE: Se agregan las categorias aqui por js-->
                </div><!-- /.filtros__content -->
            </div>
            <div class="cat-nav">
                <div class="cat__disable"></div><!-- /.cat__disable -->
                <div class="cat__back cat--disable">
                    <svg><use xlink:href="#shape-icon-arrow-back" /></svg>
                </div><!-- /.cat__back -->
                <div class="cat__next cat--disable">
                    <svg><use xlink:href="#shape-icon-arrow-next" /></svg>
                </div><!-- /.cat__next -->
            </div><!-- /.cat-nav -->
        </div><!-- /.cat__filter -->
        <div class="cat__menu">
                <div id="filters">
                    <div class="group">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                        <input type="checkbox" name="half" value=".item--half" id="half">
                        <label for="half">Large</label>
                    </div><!-- /.group -->
                    <div class="group">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                        <input type="checkbox" name="third" value=".item--third" id="third">
                        <label for="third">Medium</label>
                    </div><!-- /.group -->
                    <div class="group">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                        <input type="checkbox" name="fourth" value=".item--fourth" id="fourth">
                        <label for="fourth">Small</label>
                    </div><!-- /.group -->
                    <div class="group">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                        <input type="checkbox" name="otro" value=".otro2" id="otro2">
                        <label for="otro2">Otro2</label>
                    </div><!-- /.group -->
                    <div class="group">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                        <input type="checkbox" name="otro" value=".otro3" id="otro3">
                        <label for="otro3">Otro3</label>
                    </div><!-- /.group -->
                    <div class="group">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                        <input type="checkbox" name="otro" value=".otro4" id="otro4">
                        <label for="otro4">Otro4</label>
                    </div><!-- /.group -->
                    <div class="group">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                        <input type="checkbox" name="otro" value=".otro5" id="otro5">
                        <label for="otro5">Otro5</label>
                    </div><!-- /.group -->
                    <div class="group">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                        <input type="checkbox" name="otro" value=".otro6" id="otro6">
                        <label for="otro6">Otro6</label>
                    </div><!-- /.group -->
                    <div class="group">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                        <input type="checkbox" name="otro" value=".otro7" id="otro7">
                        <label for="otro7">Otro7</label>
                    </div><!-- /.group -->
                    <div class="group">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                        <input type="checkbox" name="otro" value=".otro8" id="otro8">
                        <label for="otro8">Otro8</label>
                    </div><!-- /.group -->
                </div><!-- /#filters -->
        </div><!-- /.cat__menu -->
    </div><!-- /.categories -->

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
    <div class="btn--flex btn--disable" title="Cargar Más">
        Cargar más
    </div>
</div><!-- /.btn--up -->
<?php include 'footer.php'; ?>