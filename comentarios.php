<style>
  :root{
    --bg:#235073;
    --card:#2f6a87;
    --card-2:#3f7f9c;
    --accent:#1fb0e0;
    --muted:rgba(255,255,255,0.85);
    --glass: rgba(255,255,255,0.06);
    --glass-2: rgba(255,255,255,0.04);
    --radius:18px;
    --pad:20px;
    --maxw:1200px;
  }

  /* Reset */
  *{box-sizing:border-box;margin:0;padding:0}
  .otro{
    font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    background: linear-gradient(180deg,var(--bg) 0%, #2b5d76 100%);
    color: white;
    -webkit-font-smoothing:antialiased;
    -moz-osx-font-smoothing:grayscale;
    padding:40px 16px;
  }

  .wrap{
    max-width:var(--maxw);
    margin:0 auto;
  }

  /* Header */
  .section-head{
    text-align:center;
    margin-bottom:28px;
  }
  .section-head h2{
    font-size:28px;
    letter-spacing:0.6px;
    margin-bottom:6px;
  }
  .section-head p{
    color:var(--muted);
    font-size:14px;
  }

  /* Grid layout */
  .grid{
    display:grid;
    gap:18px;
    grid-template-columns: 1fr;
  }

  /* Larger screens: multi-columns to mimic image layout */
  @media(min-width:800px){
    .grid{
      grid-template-columns: 1.4fr 1fr;
      align-items:start;
    }
  }
  @media(min-width:1100px){
    .grid{
      grid-template-columns: 1.6fr 1fr;
    }
  }

  /* Cards container (left column - stacked main) */
  .stack{
    display:grid;
    gap:18px;
  }

  .card{
    background: linear-gradient(180deg,var(--glass), var(--glass-2));
    border-radius:var(--radius);
    padding:18px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.03);
    border:1px solid rgba(255,255,255,0.06);
    backdrop-filter: blur(6px);
  }

  /* Large hero testimonial */
  .hero{
    display:grid;
    gap:14px;
    padding:28px;
    position:relative;
  }
  .hero .meta{
    display:flex;
    gap:16px;
    align-items:center;
  }
  .logo{
    width:72px;
    height:72px;
    border-radius:50%;
    background:white;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-shrink:0;
    overflow:hidden;
  }
  .logo img{width:100%;height:100%;object-fit:contain}
  .person{
    line-height:1;
  }
  .person h3{font-size:20px}
  .person small{display:block;color:var(--muted);font-size:13px;margin-top:6px}

  .rating{
    margin-left:auto;
    display:flex;
    gap:4px;
    align-items:center;
  }
  .rating .stars{
    display:inline-flex;
    gap:4px;
    padding-top: 1%;
  }
  .star{
    width:16px;height:16px;background:linear-gradient(180deg,#1fb0e0,#0b85ad);border-radius:3px;
    display:inline-block;
  }

  .quote{
    color:var(--muted);
    font-size:14px;
    margin-top:6px;
    line-height:1.55;
  }

  /* small cards row */
  .mini-row{
    display:grid;
    gap:14px;
    grid-template-columns: 1fr 1fr;
  }
  @media(max-width:560px){ .mini-row{grid-template-columns:1fr} }

  .mini{
    padding:14px;
    display:grid;
    gap:8px;
  }
  .mini .mini-head{display:flex;align-items:center;gap:10px}
  .mini .mini-head .logo{width:44px;height:44px}
  .mini p{color:var(--muted);font-size:13px}

  /* Second big card (Jaime) */
  .big{
    display:grid;
    gap:14px;
    padding:22px;
  }
  .tags{
    display:flex;
    gap:8px;
    flex-wrap:wrap;
    margin-top:8px;
  }
  .tag{
    background:linear-gradient(90deg,var(--accent), #0aaed8);
    padding:8px 12px;
    border-radius:999px;
    font-weight:600;
    font-size:13px;
    box-shadow:0 4px 10px rgba(0,0,0,0.15);
  }

  /* right column layout */
  .right-grid{
    display:grid;
    gap:18px;
    grid-template-columns:1fr;
  }

  .small-card{
    padding:14px;
  }

  /* footer testimonial (big full width) */
  .footer-card{
    margin-top:18px;
    padding:24px;
  }

  /* visual ellipsis dots like image */
  .dots{
    position:absolute;
    right:18px;
    top:12px;
    display:flex;
    gap:6px;
  }
  .dot{width:6px;height:6px;background:rgba(255,255,255,0.12);border-radius:50%}

  /* phone adjustments */
  @media(max-width:799px){
    .grid{grid-template-columns:1fr}
    .stack{order:2}
    .right-grid{order:1}
  }

  /* small text tweaks */
  .name{font-weight:700}
  .title{color:var(--muted);font-size:13px}
</style>
<div class="otro">
  <section id="testimonios" class="wrap" aria-label="Testimonios de clientes">
    <header class="section-head">
      <h2>Lo que dicen nuestros clientes</h2>
      <p>Testimonios auténticos de clientes que confiaron en nosotros para optimizar sus recursos humanos</p>
    </header>

    <div class="grid">
      <!-- LEFT: grandes testimonios / stacked -->
      <div class="stack">
        <!-- HERO TESTIMONIAL (Jodie) -->
        <article class="card hero" aria-labelledby="jodie-name">
          <div class="dots" aria-hidden="true">
            <span class="dot"></span><span class="dot"></span><span class="dot"></span>
          </div>

          <div class="meta">
            <div class="logo" aria-hidden="true">
              <!-- placeholder logo -->
              <img src="images/empresa/logoe1.png" alt="">
            </div>

            <div class="person">
              <h3 id="jodie-name">Jodie Fonseca</h3>
              <small class="title">Chief of Party | Directora - Progresa con Educación</small>
            </div>

            <div class="rating" aria-hidden="true">
              <div class="stars" role="img" aria-label="5 estrellas">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
          </div>

          <blockquote class="quote" cite="#">
            “SBP Outsourcing proporcionó apoyo de recursos humanos a Progresa con Educación en la forma de 57 facilitadores que llevaron a cabo actividades vitales con escuelas y comunidades como parte del proyecto. El papel de SBP era reclutar, contratar y proporcionar funciones diarias de recursos humanos para los facilitadores, incluido el pago de salarios y beneficios y el seguimiento del rendimiento. Desde mi perspectiva como directora del proyecto, SBP prestó estos servicios de forma fiable y con alta calidad, y fue un socio vital para RTI International/USAID”.
          </blockquote>
        </article>

        <!-- row of two mini cards -->
        <div class="mini-row">
          <article class="card mini">
            <div class="mini-head">
              <div class="logo" aria-hidden="true">
                <img src="images/empresa/logoe2.png" alt="">
              </div>
              <div>
                <div class="name">Kathya Marín</div>
                <div class="title">Jefe de Marca - Motomundo</div>
              </div>
            </div>
            <p>“Nuestra empresa contrató a SBP para la administración de personal tercerizado. Su excelente desempeño se destacó en la gestión completa de la nómina y todos los aspectos de la administracion de recursos humanos durante el periodo de nuestro contrato.”</p>
          </article>

          <article class="card mini">
            <div class="mini-head">
              <div class="logo" aria-hidden="true">
                <img src="images/empresa/logoe4.png" alt="">
              </div>
              <div>
                <div class="name">María Obando</div>
                <div class="title">Jefe Administrativo</div>
              </div>
            </div>
            <p>“Los Ejecutivos de Ventas y los Display proporcionados por su empresa demostraron un alto nivel de profesionalismo y eficiencia en la ejecución de sus tareas.
Expresar nuestra satisfacción por los servicios de Outsourcing proporcionados por su empresa”.</p>
          </article>
        </div>

        <!-- BIG second testimonial -->
        <article class="card big">
          <div class="meta" style="align-items:center;">
            <div class="logo" aria-hidden="true" style="width:64px;height:64px;">
              <img src="images/empresa/logoe3.png" alt="">
            </div>
            <div>
              <div class="name" style="font-size:20px">Jaime Gonzales</div>
              <div class="title">Gerente Regional</div>
            </div>
            <div class="rating" style="margin-left:auto;">
              <div class="stars" role="img" aria-label="5 estrellas">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
          </div>

          <p class="quote">“El principal beneficio que hemos obtenido al contratar sus servicios, ha sido la delegación de la parte operativa del área de Recursos Humanos, lo cual nos ha permitido enfocarnos en nuestro giro de negocio y disminuir riesgos en esa área a través de su asesoría laboral.”</p>

          <div class="tags" aria-hidden="true">
            <span class="tag">Honduras</span>
            <span class="tag">Panamá</span>
            <span class="tag">Guatemala</span>
            <span class="tag">El Salvador</span>
          </div>
        </article>

      </div>

      <!-- RIGHT: column with small cards -->
      <aside class="right-grid" aria-label="Más testimonios">
        <article class="card small-card">
          <div class="meta" style="align-items:center;">
            <div class="logo" aria-hidden="true" style="width:56px;height:56px;">
              <img src="images/empresa/logoe5.png" alt="">
            </div>
            <div style="margin-left:10px;">
              <div class="name">César Rivas</div>
              <div class="title">Gerente de Mercadeo y Ventas</div>
            </div>
            <div class="rating" style="margin-left:auto;">
              <div class="stars" role="img" aria-label="5 estrellas">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
          </div>
          <p class="quote">“Contratamos a SBP para la administración de nuestra nómina y personal tercerizado. Su gestión ha sido impecable y su desempeño excelente durante todo el tiempo que hemos trabajado juntos”.</p>
          <div class="tags" aria-hidden="true" style="margin-top:8px">
            <span class="tag" style="padding:6px 10px;font-size:12px">Honduras</span>
            <span class="tag" style="padding:6px 10px;font-size:12px">Nicaragua</span>
            <span class="tag" style="padding:6px 10px;font-size:12px">Guatemala</span>
          </div>
        </article>

        <article class="card small-card">
          <div class="meta" style="align-items:center;">
            <div class="logo" aria-hidden="true" style="width:56px;height:56px;">
              <img src="images/empresa/logoe6.png" alt="">
            </div>
            <div style="margin-left:10px;">
              <div class="name">Keidy Fuentes</div>
              <div class="title">Encargada Administrativa - Distribuidora</div>
            </div>
            <div class="rating" style="margin-left:auto;">
              <div class="stars" role="img" aria-label="5 estrellas">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
          </div>
          <p class="quote">“Los auxiliares de bodega proporcionados por su empresa demostraron un alto nivel de profesionalismo y eficiencia en la ejecución de sus tareas.
La puntualidad y compromiso del personal fueron fundamentales para el buen desarrollo de las operaciones diarias.
Apreciamos la disposición de respuesta ante nuestras necesidades y requerimientos específicos según la demanda proporcionada.
No dudaremos en recomendar sus servicios a otras compañías”.</p>
        </article>

        <!-- footer big testimonial -->
        <article class="card footer-card">
          <div class="meta" style="align-items:center;">
            <div class="logo" aria-hidden="true" style="width:64px;height:64px;">
              <img src="images/empresa/logoe7.png" alt="">
            </div>
            <div style="margin-left:12px;">
              <div class="name" style="font-size:18px">Ana Lemus</div>
              <div class="title">Trade Marketing Manager</div>
            </div>
            <div class="rating" style="margin-left:auto;">
              <div class="stars" role="img" aria-label="5 estrellas">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
          </div>

          <p class="quote" style="margin-top:10px">“SBP ha sido contratada por nuestra empresa para cumplir las funciones de administración de personal tercerizado, manejando la planilla y toda la administración relacionada al recurso humano, siendo su desempeño excelente durante el periodo contratado.”</p>

          <div class="tags" aria-hidden="true">
            <span class="tag">Honduras</span>
            <span class="tag">Panamá</span>
            <span class="tag">Guatemala</span>
          </div>
        </article>
      </aside>
    </div>
  </section>
</div>
