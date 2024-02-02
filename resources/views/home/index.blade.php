@extends('user.admin')
@section('content2')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Jesús Acuña</h1>
      <p>Soy <span class="typed" data-typed-items="Desarrollador de Software"></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/amancayjesus/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/sacame_el_trago/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Perfil</h2>
            <p>
              No busco una empresa que me asegure un salario el resto de mi vida, sino la oportunidad de demostrar al mundo que los jóvenes también tenemos posibilidades de crecer profesionalmente y dar lo mejor de nosotros mismos a las empresas que confiaron en nuestra capacidad.
              Estudiante, con conocimiento en desarrollo de software, base de datos y lenguajes de programación. Mi objetivo principal es crecer profesionalmente, por ende, busco oportunidades que me permitan aprendizaje. Caracterizado por la orientación al logro, capacidad de análisis, dinamismo, compromiso y proactividad.
            </p>
        </div>

        <div class="row">
          <div class="col-lg-4"><br>
          <img src="{{ asset('assets3/img/profile-img.jpg') }}" class="img-fluid oval-image" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content"><br><br>
            <h3>Junior &amp; Desarrollador Web.</h3><br><br>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nombre Completo:</strong> <span>Jesús Adrián Amancay Acuña</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Cumpleaños:</strong> <span>27 Noviembre 2002</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nacionalidad:</strong> <span>Peruana</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Celular:</strong> <span>+51 933 924 456</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span>Lima, Villa El Salvador</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Años:</strong> <span>21</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Grado:</strong> <span>Egresado</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Correo Electrónico:</strong> <span>amancayjesus136@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>DNI:</strong> <span>70922104</span></li>
                </ul>
              </div>
            </div>
          
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hechos</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
              <p>Proyectos</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-clock"></i>
              <span data-purecounter-start="0" data-purecounter-end="1540" data-purecounter-duration="1" class="purecounter"></span>
              <p>Horas de practicas</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter"></span>
              <p>Certificados</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="habilidades" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Habilidades</h2>
          <p>Profesional con 1 año de experiencia demostrada en diversas habilidades, aplicadas exitosamente en entornos laborales reales.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Angular <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">GitHub <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Java <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">C# <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">NodeJs <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">FireBase <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Word <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">PowerPoint <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Laravel <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Oracle <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">MySQL <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">MySQL Community Server <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Arduino/MicroPython <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">MongoDB <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Figma <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Excel <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Project <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Formación Academica</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">

            <h3 class="resume-title">Educación</h3>
            <div class="resume-item">
              <h4>Instituto Maria Elena Moyano (EGRESADO)</h4>
              <h5>Marzo 2021 - Diciembre 2023</h5>
              <p><em>ISMEM</em></p>
              <p>Lima, Villa El Salvador</p>
            </div>
            <div class="resume-item">
              <h4>Secundaria (CULMINADO)</h4>
              <h5>2015 - 2019</h5>
              <p><em>Fe y Alegría N° 17</em></p>
              <p>Lima, Villa El Salvador</p>
            </div>
            <div class="resume-item">
              <h4>Primaria (CULMINADO)</h4>
              <h5>2009 - 2014</h5>
              <p><em>Fe y Alegría N° 17</em></p>
              <p>Lima, Villa El Salvador</p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Historial Laboral</h3>
            <div class="resume-item">
              <h4>Vibra Digital SAC</h4>
              <h5>Julio 2023 - Presente</h5>
              <ul>
                <li>Desarrollador Web</li>
              </ul>
              <p><em>Av. la Paz 905-797, Miraflores 15074</em></p>
              
            </div>

            <div class="resume-item">
              <h4>PhenomenalB2B</h4>
              <h5>Abril 2023 - Junio 2023</h5>
              <ul>
                <li>Desarrollador Web</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Entel Postpago</h4>
              <h5>Enero 2023 - Marzo 2023</h5>
              <ul>
                <li>Técnico, atención cliente</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Euro Digital Clean S.A.C</h4>
              <h5>Marzo 2022 - Mayo 2022</h5>
              <ul>
                <li>Operario de limpieza</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Practicas</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="resume-item">
              <h4>Desarrollo de sistema</h4>
              <h5>Octubre 2023 - Diciembre 2023</h5>
              <p><em>Sunarp</em></p>
              <p>Lima</p>
            </div>

            <div class="resume-item">
              <h4>Consultas SQL</h4>
              <h5>Septiembre 2023 - Octubre 2023</h5>
              <p><em>Sodimac</em></p>
              <p>Lima, Atocongo</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="resume-item">
              <h4>Mantenimiento de Hardware y Software</h4>
              <h5>Mayo 2023 - Junio 2023</h5>
              <p><em>ISMEM</em></p>
              <p>Lima, Villa El Salvador</p>
            </div>

            <div class="resume-item">
              <h4>Mantenimiento de Hardware y Software</h4>
              <h5>Marzo 2023 - Abril 2023</h5>
              <p><em>Fe y Alegría N° 17</em></p>
              <p>Lima, Villa El Salvador</p>
            </div>
          </div>
      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Certificados</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-europe">europeo</li>
              <li data-filter=".filter-hp">hp</li>
              <li data-filter=".filter-banco">banco</li>
              <li data-filter=".filter-ismem">Ismem</li>
              <li data-filter=".filter-areandina">areandina</li>
              <li data-filter=".filter-capacitate">capacitate</li>
              <li data-filter=".filter-certiprof">certiprof</li>
              <li data-filter=".filter-platzi">platzi</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-europe">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets3/img/portfolio/1.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Agile Management</h4>
                <p>Instituto Europeo de Posgrado</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets3/img/portfolio/1.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-areandina">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets3/img/portfolio/certificado.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Transformación Digital</h4>
                <p>Areandina</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets3/img/portfolio/certificado.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ismem">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets3/img/portfolio/3.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ciberseguridad</h4>
                <p>ISMEM</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets3/img/portfolio/3.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-banco">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets3/img/portfolio/5.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Certificado de curso virtual</h4>
                <p>Mi banco</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets3/img/portfolio/5.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-capacitate">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets3/img/portfolio/6.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gobernanza TI</h4>
                <p>Capacitate para el empleo</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets3/img/portfolio/6.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-hp">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets3/img/portfolio/4.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Contratación Personal</h4>
                <p>HP</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets3/img/portfolio/4.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-certiprof">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets3/img/portfolio/8.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Transformación Digital</h4>
                <pI>Instituto Europeo de Posgrado</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets3/img/portfolio/8.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-europe">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets3/img/portfolio/9.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Scrum Foundation</h4>
                <p>CertiProf</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets3/img/portfolio/9.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-platzi">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets3/img/portfolio/7.png') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Marca Personal</h4>
                <p>Platzi</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets3/img/portfolio/7.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Proyectos</h2>
          <p>"Demostrada experiencia en la ejecución exitosa de proyectos, destacando mi habilidad para llevar a cabo iniciativas con impacto tangible y resultados concretos."</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <a href="https://github.com/Amancayjesus136/Conta-flex" style="text-decoration: none; color: inherit;">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  </svg>
                  <i class="bx bx-dollar-circle"></i>
                </div>
                <h4>ContaFlex</h4>
                <p>Sistema de calculo de IGV/ INCLUYE IGV, Reportes en Ecxel y Facturación</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <a href="https://github.com/Amancayjesus136/ceeri.github.io" style="text-decoration: none; color: inherit;">
              <div class="icon-box iconbox-orange">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  </svg>
                  <i class="bx bx-calendar-check"></i>
                </div>
                <h4>Ceeri</h4>
                <p>Sistema de reservas de citas, vista de usuario y administrador con roles y permisos</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="portfolio-links">
            <a href="{{ asset('assets3/img/portfolio/solicitar.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" style="text-decoration: none; color: inherit;">
              <div class="icon-box iconbox-pink">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  </svg>
                  <i class="bx bx-box"></i>
                </div>
                <h4>Economuebles</h4>
                <p>Sistema de stock y reportes en excel en WordPress (vista usuario) y sistema hecho en Laravel (vista administrador).</p>
              </div>
            </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="portfolio-links">
            <a href="{{ asset('assets3/img/portfolio/solicitar.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" style="text-decoration: none; color: inherit;">
              <div class="icon-box iconbox-yellow">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  </svg>
                  <i class="bx bx-calendar-plus"></i>
                </div>
                <h4>Sunarp</h4>
                <p>Sistema de eventos con roles y permisos, certificados en base el progreso del evento terminado.</p>
              </div>
            </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <a href="https://github.com/Amancayjesus136/ionic-practica" style="text-decoration: none; color: inherit;">
              <div class="icon-box iconbox-red">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  </svg>
                  <i class="bx bxl-android"></i>
                </div>
                <h4>Ionic</h4>
                <p>Desarrollo de sistema Android nativo, creación de eventos y asistencia en tiempo real.</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="portfolio-links">
            <a href="{{ asset('assets3/img/portfolio/solicitar.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" style="text-decoration: none; color: inherit;">
              <div class="icon-box iconbox-teal">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  </svg>
                  <i class="bx bx-car"></i>
                </div>
                <h4>Placas</h4>
                <p>Sistema de consultas de placas vehiculares y reportes en tiempo real.</p>
              </div>
            </a>
            </div>
          </div>
    </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Colegas Recomendados</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
              <a href="#" data-bs-toggle="modal" data-bs-target="#cesar"><img src="{{ asset('assets3/img/testimonials/cesar.jpg') }}" class="testimonial-img" alt=""></a>
              <h3>Cesar Aquino</h3>
                <h4>Senior &amp; Desarrollador de Software</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#hubert"><img src="{{ asset('assets3/img/portfolio/hubert.png') }}" class="testimonial-img" alt=""></a>
                <h3>Hubert Aquino</h3>
                <h4>Junior &amp; Desarrollador de Software</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#jordan"><img src="{{ asset('assets3/img/portfolio/jordan.png') }}" class="testimonial-img" alt=""></a>
                <h3>Jordan Potenciano</h3>
                <h4>Junior &amp; Desarrollador de Software</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#diego"><img src="{{ asset('assets3/img/portfolio/diego.png') }}" class="testimonial-img" alt=""></a>
                <h3>Diego Lerma</h3>
                <h4>Project Manager</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#abad"><img src="{{ asset('assets3/img/portfolio/abad.jpg') }}" class="testimonial-img" alt=""></a>
                <h3>Miguel Abad</h3>
                <h4>Project Manager</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


<!-- Modal de cesar -->
<div class="modal fade" id="cesar" tabindex="-1" aria-labelledby="crearActividadLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearActividad">Redes sociales</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body redes-sociales">
            <a href="https://www.facebook.com/cesjam7"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.instagram.com/cesjam7/"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal de hubert -->

<!-- Modal de cesar -->
<div class="modal fade" id="hubert" tabindex="-1" aria-labelledby="crearActividadLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearActividad">Redes sociales</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body redes-sociales">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.instagram.com/hub.am6/"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal de hubert -->

<!-- Modal de jordan -->
<div class="modal fade" id="jordan" tabindex="-1" aria-labelledby="crearActividadLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearActividad">Redes sociales</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body redes-sociales">
            <a href="https://www.facebook.com/jordan.dnil"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.instagram.com/dn.l_jordan/"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal de jordan -->

<!-- Modal de diego -->
<div class="modal fade" id="diego" tabindex="-1" aria-labelledby="crearActividadLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearActividad">Redes sociales</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body redes-sociales">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.instagram.com/diego.vlg/"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal de diego -->

<!-- Modal de abad -->
<div class="modal fade" id="abad" tabindex="-1" aria-labelledby="crearActividadLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearActividad">Redes sociales</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body redes-sociales">
            <a href="https://www.facebook.com/miguel.abad.espinoza"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal de abad -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Dirección:</h4>
                <p>Grupo 1 Mz C lote 19, Ampliación Oasis</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Correo Electrónico:</h4>
                <p>amancayjesus136@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Teléfono:</h4>
                <p>+51 933 924 456</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mtlg-0">
            <form id="contactForm" action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
            @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Su nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Su correo electrónico" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="button" class="btn btn-primary" id="submitButton">Enviar mensaje</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 

</body>

</html>

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Mensaje enviado exitosamente!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        $('#submitButton').on('click', function () {
            $.ajax({
                type: 'POST',
                url: $('#contactForm').attr('action'),
                data: $('#contactForm').serialize(),
                success: function (response) {
                    // Abre el modal de éxito
                    $('#successModal').modal('show');

                    // Cierra el modal después de 2 segundos
                    setTimeout(function () {
                        $('#successModal').modal('hide');
                    }, 2000);

                    // Limpia los campos del formulario
                    $('#contactForm')[0].reset();
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
    });
</script>



@endsection