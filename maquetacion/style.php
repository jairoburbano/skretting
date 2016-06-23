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
    <h1 class="style-title center">Hoja de estilos</h1>
    <div class="block--full colors">
        <h1 class="style-title">Colores</h1>
        <div class="color__item">
            <div class="color__box color--main"></div><!-- /.color__box color--main -->
            <p class="small">rgb(220,47,52)</p>
            <p class="small">Hex #dc2f34</p>
        </div><!-- /.color__item -->
        <div class="color__item">
            <div class="color__box color--darkmain"></div><!-- /.color__box color--main -->
            <p class="small">rgb(143,16,20)</p>
            <p class="small">Hex #8f1014</p>
        </div><!-- /.color__item -->
        <div class="color__item">
            <div class="color__box color--secundario"></div><!-- /.color__box color--main -->
            <p class="small">rgb(0,72,123)</p>
            <p class="small">Hex #00497b</p>
        </div><!-- /.color__item -->
        <div class="color__item">
            <div class="color__box color--principal"></div><!-- /.color__box color--main -->
            <p class="small">rgb(42,42,42)</p>
            <p class="small">Hex #2a2a2a</p>
        </div><!-- /.color__item -->
        <div class="color__item">
            <div class="color__box color--darkgray"></div><!-- /.color__box color--main -->
            <p class="small">rgb(64,64,64)</p>
            <p class="small">Hex #404040</p>
        </div><!-- /.color__item -->
        <div class="color__item">
            <div class="color__box color--gray"></div><!-- /.color__box color--main -->
            <p class="small">rgb(151,148,150)</p>
            <p class="small">Hex #979496</p>
        </div><!-- /.color__item -->
        <div class="color__item">
            <div class="color__box color--lightgray"></div><!-- /.color__box color--main -->
            <p class="small">rgb(230,230,230)</p>
            <p class="small">Hex #e6e6e6</p>
        </div><!-- /.color__item -->
        <div class="color__item">
            <div class="color__box color--disable"></div><!-- /.color__box color--main -->
            <p class="small">rgb(246,246,246)</p>
            <p class="small">Hex #f6f6f6</p>
        </div><!-- /.color__item -->
    </div><!-- /.block--full colors -->
    <div class="block--full tipografia">
        <h1 class="style-title">Tipografía</h1>
        <div class="tipos__item">
            <p class="font font--chivo">Grumpy wizards make toxic brew for the evil Queen and Jack</p>
            <p class="small">Chivo Regular | <a href="https://www.fontsquirrel.com/fonts/chivo" target="_blank" title="Chivo Font">Fontsquirrel.com</a></p>
        </div><!-- /.tipos__item -->
        <div class="tipos__item">
            <p class="font font--book">Grumpy wizards make toxic brew for the evil Queen and Jack</p>
            <p class="small">Franklin Gothic FS Demi | <a href="https://www.fontsquirrel.com/fonts/chivo" target="_blank" title="Franklin Gothic FS Demi">Fontsquirrel.com</a></p>
        </div><!-- /.tipos__item -->
        <div class="tipos__item">
            <p class="font font--demi">Grumpy wizards make toxic brew for the evil Queen and Jack</p>
            <p class="small">Franklin Gothic FS Book | <a href="https://www.fontsquirrel.com/fonts/chivo" target="_blank" title="Franklin Gothic FS Book">Fontsquirrel.com</a></p>
        </div><!-- /.tipos__item -->
    </div><!-- /.block--full tipografia -->
    <div class="block--full encabezados">
        <h1 class="style-title">Encabezados contenido</h1>
        <div class="box--flex">
            <div class="box--half">
                <div class="title__item">
                    <h1>H1: Grumpy wizards make toxic brew for the evil Queen and Jack</h1>
                    <p class="small">Chivo Regular 24px / 30px</p>
                </div><!-- /.title__item -->
                <div class="title__item">
                    <h2>H2: Grumpy wizards make toxic brew for the evil Queen and Jack</h2>
                    <p class="small">Chivo Regular 21px / 26px</p>
                </div><!-- /.title__item -->
                <div class="title__item">
                    <h3>H3: Grumpy wizards make toxic brew for the evil Queen and Jack</h3>
                    <p class="small">Chivo Regular 18px / 24px Uppercase</p>
                </div><!-- /.title__item -->
            </div><!-- /.box--half -->
            <div class="box--half">
                <div class="title__item">
                    <h4>H4: Grumpy wizards make toxic brew for the evil Queen and Jack</h4>
                    <p class="small">Chivo Regular 18px / 24px</p>
                </div><!-- /.title__item -->
                <div class="title__item">
                    <h5>H5: Grumpy wizards make toxic brew for the evil Queen and Jack</h5>
                    <p class="small">Franklin Gothic FS Demi 18px / 24px</p>
                </div><!-- /.title__item -->
                <div class="title__item">
                    <h6>H6: Grumpy wizards make toxic brew for the evil Queen and Jack</h6>
                    <p class="small">Franklin Gothic FS Demi 16px / 24px</p>
                </div><!-- /.title__item -->
            </div><!-- /.box--half -->
        </div><!-- /.box--flex -->
    </div><!-- /.block--full encabezados -->
    <div class="block--full">
        <div class="box--flex">
            <div class="box--half">
                <h1 class="style-title">Párrafo</h1><!-- /.style-title -->
                <p>
                    In tempus condimentum convallis. Nunc nec dolor blandit, auctor elit nec, sollicitudin lectus. Nunc placerat urna non sem vestibulum, a viverra massa mollis. Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
                </p>
                <p>
                    Nunc finibus lacus nec tempus venenatis. Fusce pulvinar tincidunt quam ut luctus. Proin in risus id est sollicitudin eleifend. Vivamus ut porttitor est. Vivamus et malesuada neque. Quisque consequat dictum posuere.
                </p>
                <p class="small">Franklin Gothic FS Book 16px / 24px</p><!-- /.small -->
            </div><!-- /.box--half -->
            <div class="box--half">
                <h1 class="style-title">Blockquote</h1><!-- /.style-title -->
                <div class="destacado">
                    <h2>Titulo</h2>
                    <p>
                        El uso de las líneas de dietas Supreme permite que los smolts alcancen rápidamente los consumos esperados post transferencia
                    </p>
                </div><!-- /.destacado -->
                <p class="small">Mismos estilos de texto, H1-H4, P, OL, UL...</p><!-- /.small -->
            </div><!-- /.box--half -->
        </div><!-- /.box--flex -->
    </div><!-- /.block--full -->
    <div class="block--full">
        <div class="box--flex content">
            <div class="box--half">
                <h1 class="style-title">Lista Ordenada</h1><!-- /.style-title -->
                <ol>
                    <li>
                        In tempus condimentum convallis. Nunc nec dolor blandit, auctor elit nec, sollicitudin lectus.
                    </li>
                    <li>
                        Nunc placerat urna non sem vestibulum, a viverra massa mollis. Vivamus ut
                    </li>
                    <li>
                        Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
                    </li>
                    <li>
                        Nunc finibus lacus nec tempus venenatis. Fusce pulvinar tincidunt quam ut luctus. Proin in risus id est sollicitudin eleifend.
                    </li>
                </ol>
                <p class="small">Chivo Regular 16px / 24px</p><!-- /.small -->
            </div><!-- /.box--half -->
            <div class="box--half">
                <h1 class="style-title">Lista No Ordenada</h1><!-- /.style-title -->
                <ul>
                    <li>
                        In tempus condimentum convallis. Nunc nec dolor blandit, auctor elit nec, sollicitudin lectus.
                    </li>
                    <li>
                        Nunc placerat urna non sem vestibulum, a viverra massa mollis. Vivamus ut
                    </li>
                    <li>
                        Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
                    </li>
                    <li>
                        Nunc finibus lacus nec tempus venenatis. Fusce pulvinar tincidunt quam ut luctus. Proin in risus id est sollicitudin eleifend.
                    </li>
                </ul>
                <p class="small">Bullet: Chivo Regular 16px / 24px</p><!-- /.small -->
            </div><!-- /.box--half -->
        </div><!-- /.box--flex -->
    </div><!-- /.block--full -->
    <div class="block--full">
        <div class="box--flex">
            <div class="box--half">
                <h1 class="style-title">Elementos Inline</h1><!-- /.style-title -->
                <div class="item content">
                    <p><a href="#" title="Link">Texto con link</a></p>
                    <p class="small">Normal / Hover</p><!-- /.small -->
                </div><!-- /.item -->
                <div class="item">
                    <p>Texto strong para <strong>mayor importancia</strong></p>
                    <p class="small">Franklin Gothic FS Demi</p><!-- /.small -->
                </div><!-- /.item -->
                <div class="item">
                    <p>Texto <strong> < b > para resaltar estilo</strong>, sin tener más importancia</p>
                    <p class="small">Franklin Gothic FS Demi</p><!-- /.small -->
                </div><!-- /.item -->
            </div><!-- /.box--half -->
            <div class="box--half">
                <h1 class="style-title">p.bajada</h1><!-- /.style-title -->
                <p class="bajada">
                    In tempus condimentum convallis. Nunc nec dolor blandit, auctor elit nec, sollicitudin lectus. Nunc placerat urna non sem vestibulum, a viverra massa mollis. Morbi metus felis, finibus vitae tempus id, mattis id turpis. Donec ac lorem nunc.
                </p><!-- /.bajada -->
                <p class="small">Chivo Regular 18px / 24px</p><!-- /.small -->
            </div><!-- /.box--half -->
        </div><!-- /.box--flex -->
    </div><!-- /.block--full -->
    <div class="block--full icons">
        <div class="box--flex flex--start">
            <svg><use xlink:href="#shape-icon-magnifier" /></svg>
            <svg><use xlink:href="#shape-icon-menu" /></svg>
            <svg><use xlink:href="#shape-icon-close" /></svg>
            <svg><use xlink:href="#shape-icon-arrow-back" /></svg>
            <svg><use xlink:href="#shape-icon-arrow-next" /></svg>
            <svg><use xlink:href="#shape-icon-arrow-up" /></svg>
            <svg><use xlink:href="#shape-icon-columna" /></svg>
            <svg><use xlink:href="#shape-icon-galeria" /></svg>
            <svg><use xlink:href="#shape-icon-video" /></svg>
            <svg><use xlink:href="#shape-icon-facebook" /></svg>
            <svg><use xlink:href="#shape-icon-twitter" /></svg>
            <svg><use xlink:href="#shape-icon-linkedin" /></svg>
            <svg><use xlink:href="#shape-icon-gplus" /></svg>
            <svg><use xlink:href="#shape-icon-letter" /></svg>
            <svg><use xlink:href="#shape-icon-phone" /></svg>
            <svg><use xlink:href="#shape-icon-place" /></svg>
        </div><!-- /.box--flex flex--start -->
    </div><!-- /.block--full -->
    <div class="block--full form">
        <div class="box--flex">
            <div class="box--half">
                <h1 class="style-title">Campos</h1><!-- /.style-title -->
                <form class="example-form">
                    <div class="input-group group">
                        <label for="nickname">Nombre Campo <span>*</span></label>
                        <input type="text" id="nickname" name="nickname">
                    </div><!-- /.input-group -->
                    <div class="input-group group focusin">
                        <label for="lastname">Nombre Campo</label>
                        <input type="text" id="lastname" name="lastname">
                    </div><!-- /.input-group -->
                    <div class="input-group group error">
                        <label for="wrong">Nombre Campo <span>*</span></label>
                        <input type="text" id="wrong" name="wrong">
                        <p class="error">Feedback validación</p><!-- /.error -->
                    </div><!-- /.input-group -->
                    <div class="textarea-group group">
                        <label for="texto">Nombre Campo</label>
                        <textarea id="texto" name="texto"></textarea>
                    </div><!-- /.textarea-group -->
                    <div class="send-group">
                        <p><span>*</span>Campos obligatorios</p>
                        <input type="submit" value="Enviar">
                    </div><!-- /.send-group -->
                </form>
            </div><!-- /.box--half -->
            <div class="box--half">
                <h1 class="style-title">Mensajes</h1><!-- /.style-title -->
                <div class="message">
                    <p>
                        Mensaje éxito formulario
                    </p>
                </div><!-- /.message -->
                <div class="message msg-error">
                    <p>
                        Mensaje error formulario
                    </p>
                </div><!-- /.message -->
            </div><!-- /.box--half -->
        </div><!-- /.box--flex -->
    </div><!-- /.block--full form -->
    <div class="block--full">
        <h1 class="style-title">Items</h1><!-- /.style-title -->
        <div class="container js-grid">
            <!--NOTE: No eliminar item--sizer-->
            <div class="item__sizer"></div><!-- /.item__sizer -->

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

            <!--NOTE: Related Item-->
            <div class="grid__item item--related">
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
            </div><!-- /.grid__item item--related -->
            
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
    </div><!-- /.block--full -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>