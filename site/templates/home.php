<?php snippet('header') ?>
<main class="content-wrapper">

  <!-- Hero with search form and categories -->
  <section class="position-relative pt-5 pb-md-3 pb-lg-4 pb-xl-5 mt-n1 mt-sm-0">
    <div class="container position-relative z-2 pt-md-4 pt-lg-5 pb-xxl-3">
      <div class="pt-sm-2 mx-auto" style="max-width: 820px">
        <h1 class="display-4 text-center mb-sm-4">Platzangebote für Schausteller finden</h1>
        <p class="fs-lg text-center pb-3 pb-sm-0 pb-lg-2 pb-xl-3 mb-4 mb-sm-5 mx-auto" style="max-width: 546px">Find great places to stay, eat, shop, or visit from our respected partners and local experts.</p>

        <!-- Search form -->
        <form class="position-relative z-3 p-2 mx-auto" style="max-width: 720px">
          <div class="position-relative d-flex flex-column flex-lg-row gap-2 z-1 p-1">
            <div class="d-flex flex-column flex-sm-row w-100 gap-2 gap-sm-3">
              <div class="position-relative w-100">
                <i class="fi-search position-absolute top-50 start-0 translate-middle-y fs-xl text-secondary-emphasis ms-2"></i>
                <input type="search" class="form-control form-control-lg form-icon-start border-0 rounded-0 pe-0" placeholder="What are you looking for?" required>
              </div>
              <hr class="d-sm-none m-0">
              <hr class="vr d-none d-sm-block my-2">
              <div class="position-relative w-100" style="max-width: 220px">
                <i class="fi-grid position-absolute top-50 start-0 translate-middle-y z-1 fs-xl text-secondary-emphasis ms-2"></i>
                <select class="form-select form-select-lg form-icon-start border-0" data-select='{
                      "classNames": {
                        "containerInner": ["form-select", "form-select-lg", "form-icon-start", "border-0"]
                      }
                    }' aria-label="Category select" required>
                  <option value="">Category</option>
                  <option value="Accommodation">Accommodation</option>
                  <option value="Shopping">Shopping</option>
                  <option value="Food & Drink">Food &amp; Drink</option>
                  <option value="Houston">Entertainment</option>
                  <option value="Phoenix">Health</option>
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary rounded-pill">Search</button>
          </div>
          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body border rounded-pill shadow d-none d-lg-block"></span>
          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body border rounded-5 shadow d-lg-none"></span>
        </form>

        <!-- Categories -->
        <div class="overflow-x-auto pb-3 pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xxl-3">
          <div class="d-flex justify-content-between text-nowrap pt-5">
            <article class="hover-effect-scale position-relative flex-shrink-0 text-center px-3">
              <div class="position-relative d-flex align-items-end justify-content-center text-primary mx-auto" style="width: 88px; height: 88px">
                <svg class="position-relative z-1" style="backface-visibility: hidden" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"><path d="M47.725 18.275L46.5 17.049V7.164c0-3.95-3.213-7.163-7.163-7.163-1.625 0-3.125.545-4.328 1.46-5.303-2.604-11.905-1.704-16.31 2.701-4.717 4.717-5.414 11.954-2.093 17.417l-5.371 5.371H8.966a.94.94 0 0 0-.937.938v1.72h-1.72a.94.94 0 0 0-.937.938v1.72h-1.72a.94.94 0 0 0-.937.938v1.72H.994a.94.94 0 0 0-.663.275l-.057.057c-.176.176-.275.414-.275.663v6.083a.94.94 0 0 0 .937.938h6.196a.94.94 0 0 0 .663-.275l10.341-10.341a.94.94 0 0 0 0-1.326.94.94 0 0 0-1.326 0L6.745 41.062h-4.87v-4.265h1.777a.94.94 0 0 0 .937-.937v-1.72h1.72a.94.94 0 0 0 .938-.937v-1.72h1.72a.94.94 0 0 0 .938-.937v-1.72h1.72a.94.94 0 0 0 .663-.275l5.415-5.415a14.38 14.38 0 0 0 .998 1.108c2.537 2.537 5.864 3.994 9.426 4.145v15.674c0 2.171 1.766 3.937 3.937 3.937h12c2.171 0 3.937-1.766 3.937-3.937V18.937a.94.94 0 0 0-.275-.663zM39.337 1.876c2.916 0 5.288 2.372 5.288 5.288v8.011l-1.686-1.686c-.008-.008-.017-.015-.026-.023-.175-3.387-1.552-6.723-4.133-9.304-.617-.616-1.276-1.164-1.969-1.643a5.26 5.26 0 0 1 2.526-.643zm-5.288 7.951v-2.07a2.26 2.26 0 0 1 1.34 2.07 2.26 2.26 0 0 1-.666 1.607c-.886.886-2.328.886-3.214 0s-.886-2.328 0-3.214c.198-.198.424-.349.665-.458v2.065a.94.94 0 0 0 .938.938.94.94 0 0 0 .937-.938zM28.74 26.521a12.29 12.29 0 0 1-8.715-3.604c-4.805-4.805-4.805-12.624 0-17.429 2.328-2.328 5.423-3.61 8.715-3.61a12.3 12.3 0 0 1 4.865.995 7.13 7.13 0 0 0-1.292 2.886c-.781.153-1.526.531-2.13 1.135-1.617 1.617-1.617 4.248 0 5.866.809.809 1.871 1.213 2.933 1.213s2.124-.404 2.933-1.213a4.12 4.12 0 0 0 1.215-2.933 4.12 4.12 0 0 0-1.215-2.933A4.12 4.12 0 0 0 34.22 5.83a5.27 5.27 0 0 1 1.075-2.07 12.42 12.42 0 0 1 2.161 1.728 12.24 12.24 0 0 1 3.61 8.715 12.24 12.24 0 0 1-3.61 8.715c-2.403 2.403-5.558 3.604-8.715 3.604zm17.385 17.541c0 1.137-.925 2.063-2.062 2.063h-12c-1.137 0-2.063-.925-2.063-2.062V28.346a14.09 14.09 0 0 0 8.78-4.103c2.307-2.306 3.651-5.216 4.036-8.225l3.308 3.308v24.736zM23.965 9.429a.94.94 0 0 0 0-1.326.94.94 0 0 0-1.326 0 8.64 8.64 0 0 0 0 12.198c.183.183.423.275.663.275s.48-.092.663-.275a.94.94 0 0 0 0-1.326 6.76 6.76 0 0 1 0-9.547zm2.982 11.291a.94.94 0 1 0-.257 1.84.94.94 0 0 0 .901-.68.94.94 0 0 0-.644-1.159zm15.1 20.342h-7.969a.94.94 0 0 0-.937.938.94.94 0 0 0 .938.938h7.969a.94.94 0 0 0 .938-.937.94.94 0 0 0-.937-.937zM20.542 28.591c-.174-.174-.416-.275-.663-.275s-.488.1-.663.275-.275.416-.275.663.1.488.275.663.416.275.663.275.488-.1.663-.275a.94.94 0 0 0 0-1.326z"/></svg>
                <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-primary-subtle rounded-circle" style="--fn-transform-scale: 1.1"></span>
              </div>
              <h3 class="h6 fw-normal pt-3 pt-sm-4 mb-0">
                <a class="hover-effect-underline stretched-link" href="listings-top-filters-city-guide.html">Accommodation</a>
              </h3>
            </article>
            <article class="hover-effect-scale position-relative flex-shrink-0 text-center px-3">
              <div class="position-relative d-flex align-items-end justify-content-center text-info mx-auto" style="width: 88px; height: 88px">
                <svg class="position-relative z-1" style="backface-visibility: hidden" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"><path d="M41.813 45.158l-.938-30c-.049-1.561-1.284-2.783-2.812-2.783h-4.219 0V9.844C33.845 4.416 29.429 0 24.001 0a9.86 9.86 0 0 0-9.844 9.844v2.531H9.938c-1.528 0-2.763 1.223-2.812 2.783l-.938 30a2.7 2.7 0 0 0 .774 1.977C7.495 47.685 8.237 48 9 48h30c.762 0 1.505-.315 2.038-.865a2.7 2.7 0 0 0 .774-1.977zM16.032 9.844a7.98 7.98 0 0 1 7.969-7.969 7.98 7.98 0 0 1 7.969 7.969v7.219a.94.94 0 0 1-.937.938.94.94 0 0 1-.937-.937v-7.22c0-3.36-2.734-6.094-6.094-6.094s-6.094 2.734-6.094 6.094v7.219a.94.94 0 0 1-.937.938.94.94 0 0 1-.937-.937v-7.22zm12.188 2.531h-8.437 0V9.844c0-2.326 1.893-4.219 4.219-4.219s4.219 1.893 4.219 4.219v2.531zM39.693 45.83a.97.97 0 0 1-.692.295h-30a.97.97 0 0 1-.691-.295.84.84 0 0 1-.246-.613l.03-.967h4.939a.94.94 0 0 0 .938-.937.94.94 0 0 0-.937-.937h-4.88l.849-27.158c.017-.542.429-.967.938-.967h4.219v2.813c0 1.551 1.262 2.812 2.813 2.812s2.813-1.262 2.813-2.812V14.25h8.437v2.813c0 1.551 1.262 2.812 2.813 2.812s2.813-1.262 2.813-2.812V14.25h0 4.219c.509 0 .921.425.938.967l.938 30a.84.84 0 0 1-.246.613zM24.59 25.678c-.386.385-.884.291-1.177 0a5.73 5.73 0 0 0-8.074 0c-1.557 1.552-2.057 3.581-1.446 5.867 1.293 4.835 7.255 9.709 9.866 10.406.079.021.161.032.242.032s.163-.011.242-.032c2.611-.697 8.572-5.571 9.866-10.406.612-2.286.112-4.315-1.446-5.867a5.73 5.73 0 0 0-8.074 0zm7.708 5.383c-1.088 4.067-6.163 8.222-8.296 9.002-2.134-.78-7.208-4.935-8.296-9.002-.441-1.647-.127-2.973.958-4.055a3.83 3.83 0 0 1 5.426 0 2.68 2.68 0 0 0 3.824 0 3.85 3.85 0 0 1 5.426 0c1.085 1.082 1.399 2.408.958 4.055zM17.25 42.375a.94.94 0 0 0-.937.938.94.94 0 0 0 .938.938h.001c.518 0 .937-.42.937-.937a.94.94 0 0 0-.938-.937z"/></svg>
                <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-info-subtle rounded-circle" style="--fn-transform-scale: 1.1"></span>
              </div>
              <h3 class="h6 fw-normal pt-3 pt-sm-4 mb-0">
                <a class="hover-effect-underline stretched-link" href="listings-side-filters-city-guide.html">Shopping</a>
              </h3>
            </article>
            <article class="hover-effect-scale position-relative flex-shrink-0 text-center px-3">
              <div class="position-relative d-flex align-items-end justify-content-center text-warning mx-auto" style="width: 88px; height: 88px">
                <svg class="position-relative z-1" style="backface-visibility: hidden" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"><path d="M33.219 26.232a.94.94 0 0 0 .937-.937.94.94 0 0 0-.937-.937.94.94 0 0 0-.938.938.94.94 0 0 0 .938.938zm9.325-.938a.94.94 0 0 0-.939-.939h-4.151a.94.94 0 0 0-.939.939.94.94 0 0 0 .939.939h3.186a16.69 16.69 0 0 1-16.639 15.725A16.69 16.69 0 0 1 7.362 26.234h21.624a.94.94 0 0 0 .939-.939.94.94 0 0 0-.939-.939h-3.343c.078-.545.282-.877.544-1.298.384-.618.861-1.388.861-2.816s-.477-2.198-.861-2.816c-.336-.542-.579-.933-.579-1.826s.243-1.284.579-1.826c.384-.618.861-1.388.861-2.816s-.477-2.198-.861-2.816c-.148-.239-.278-.45-.377-.686L40.737 9.81a.94.94 0 0 0 .146-1.867L25.732 5.54l.231-1.569L40.951 1.87a.94.94 0 0 0 .8-1.061.94.94 0 0 0-1.061-.8L14.077 3.742a.95.95 0 0 0-.808.966c.007 1.466.427 2.264.798 2.969.325.617.582 1.104.582 2.129 0 1.007-.263 1.465-.596 2.046-.376.657-.844 1.474-.844 2.98s.468 2.323.844 2.98c.333.581.595 1.04.595 2.046s-.263 1.465-.595 2.046c-.33.575-.73 1.274-.824 2.452H6.396a.94.94 0 0 0-.939.939c0 7.052 3.958 13.197 9.768 16.332v5.434a.94.94 0 0 0 .939.939h15.671a.94.94 0 0 0 .939-.939v-5.434c5.811-3.135 9.769-9.28 9.769-16.332zM23.73 6.315c0 1.428.477 2.198.861 2.816.336.542.579.933.579 1.826s-.243 1.284-.579 1.826c-.384.618-.861 1.388-.861 2.816s.477 2.198.861 2.816c.336.541.579.933.579 1.826s-.243 1.284-.579 1.826-.737 1.189-.837 2.288h-3.49c.079-.593.294-.953.552-1.383.381-.633.854-1.421.854-2.879s-.474-2.246-.854-2.879c-.327-.544-.585-.974-.585-1.911s.258-1.367.586-1.911c.381-.633.854-1.421.854-2.879s-.474-2.246-.854-2.879c-.327-.544-.586-.974-.586-1.911v-.947l3.794-.532-.295 2.071zm-8.046 10.563c-.333-.581-.595-1.04-.595-2.046s.263-1.465.596-2.046c.376-.657.844-1.474.844-2.98 0-1.489-.424-2.294-.799-3.005-.226-.428-.419-.795-.515-1.321l3.138-.44v.683c0 1.458.473 2.246.854 2.879.327.544.586.974.586 1.911s-.258 1.367-.586 1.911c-.381.633-.854 1.421-.854 2.879s.473 2.246.854 2.879c.327.544.585.974.585 1.911s-.258 1.367-.585 1.911c-.332.552-.734 1.222-.832 2.351h-3.257c.076-.66.299-1.05.567-1.518.376-.656.844-1.473.844-2.98s-.468-2.323-.844-2.98zm15.213 29.244H17.104v-3.614c2.133.858 4.46 1.331 6.896 1.331s4.763-.473 6.896-1.331v3.614zM15.916 28.755a.94.94 0 0 0-.939.939.94.94 0 0 0 .939.939h16.168a.94.94 0 0 0 .939-.939.94.94 0 0 0-.939-.939H15.916z"/></svg>
                <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-warning-subtle rounded-circle" style="--fn-transform-scale: 1.1"></span>
              </div>
              <h3 class="h6 fw-normal pt-3 pt-sm-4 mb-0">
                <a class="hover-effect-underline stretched-link" href="listings-side-filters-city-guide.html">Food &amp; Drink</a>
              </h3>
            </article>
            <article class="hover-effect-scale position-relative flex-shrink-0 text-center px-3">
              <div class="position-relative d-flex align-items-end justify-content-center text-success mx-auto" style="width: 88px; height: 88px">
                <svg class="position-relative z-1" style="backface-visibility: hidden" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"><path d="M37.236 10.494c-1.022-.278-2.063-.388-3.106-.328C33.845 4.51 29.387 0 23.947 0c-4.679 0-8.632 3.337-9.827 7.869a9.67 9.67 0 0 0-3.163.324 9.85 9.85 0 0 0-.937.307.94.94 0 0 0-.539 1.211c.143.373.498.602.875.602.112 0 .225-.02.336-.063a8.08 8.08 0 0 1 .758-.249 7.83 7.83 0 0 1 2.346-.272 11.39 11.39 0 0 0-.045 1.01c0 4.936 3.114 10.72 7.388 12.57l-.435 2.271c-1.022 2.065-2.488 3.447-4.139 3.898a5.01 5.01 0 0 1-1.461.17c-1.344-.041-2.558-.562-3.437-1.069-2.785-1.608-5.199-4.748-6.007-7.814-.506-1.92-.4-3.894.305-5.709a.94.94 0 0 0-.534-1.214.94.94 0 0 0-1.213.535c-.849 2.186-.977 4.56-.37 6.865.927 3.518 3.693 7.119 6.882 8.961 1.156.667 2.319 1.084 3.454 1.246l.266 3.884a.94.94 0 0 0 .935.874.94.94 0 0 0 .246-.033l1.802-.491c.768 1.632.952 3.234 1.129 4.789.191 1.672.371 3.252 1.223 4.753.172.304.49.475.816.475a.93.93 0 0 0 .462-.123.94.94 0 0 0 .352-1.278c-.663-1.169-.815-2.499-.991-4.04-.177-1.55-.373-3.274-1.159-5.076l1.43-.39c.268-.073.491-.262.606-.515s.113-.544-.008-.795l-1.685-3.512c.598-.474 1.153-1.051 1.653-1.72.021.002.042.003.063.003h1.871c.329 1.783.099 3.381-.127 4.932-.241 1.665-.469 3.238-.028 4.912.111.421.49.699.906.699a.93.93 0 0 0 .239-.031.94.94 0 0 0 .668-1.145c-.344-1.304-.152-2.63.071-4.165.223-1.543.472-3.257.173-5.201h.744c.494 1.626 1.466 3.038 2.734 4.034l-1.677 3.495c-.12.251-.123.542-.007.795a.94.94 0 0 0 .606.515l1.43.39c-.785 1.801-.982 3.525-1.159 5.076-.176 1.541-.327 2.871-.991 4.04a.94.94 0 0 0 .352 1.278.93.93 0 0 0 .462.122.94.94 0 0 0 .816-.475c.852-1.501 1.033-3.081 1.223-4.753.177-1.555.361-3.157 1.129-4.788l1.802.491a.94.94 0 0 0 1.182-.84l.266-3.883c.609-.087 1.229-.249 1.857-.486 3.807-1.436 7.374-5.525 8.479-9.721 1.506-5.717-1.684-11.571-7.111-13.05zm-18.12 22.788l-2.876.784-.177-2.585c.336-.04.668-.103.994-.191a6.69 6.69 0 0 0 .942-.336l1.117 2.329zm3.342-6.901l.487-2.546a6.68 6.68 0 0 0 1.001.076 6.75 6.75 0 0 0 1.001-.076l.487 2.545h-2.976zm6.616 9.2l1.116-2.325a6.95 6.95 0 0 0 .944.332 6.87 6.87 0 0 0 .994.192l-.177 2.585-2.876-.784zm13.458-12.515c-.947 3.596-4.097 7.227-7.328 8.445-.713.269-1.405.415-2.071.439a.62.62 0 0 0-.053.001 5.02 5.02 0 0 1-1.453-.171c-2.05-.558-3.675-2.383-4.141-4.648l-.731-3.818a8.33 8.33 0 0 0 .718-.351c.454-.249.619-.819.369-1.273a.94.94 0 0 0-1.273-.37 6.06 6.06 0 0 1-1.149.491 5.04 5.04 0 0 1-1.475.227c-2.025 0-4.132-1.344-5.781-3.689-1.591-2.262-2.542-5.106-2.542-7.607 0-4.889 3.734-8.866 8.323-8.866s8.323 3.977 8.323 8.866c0 1.667-.438 3.552-1.233 5.306-.214.472-.005 1.027.467 1.241s1.027.005 1.241-.467c.704-1.552 1.16-3.205 1.327-4.772.897-.07 1.793.014 2.672.254 4.438 1.209 7.035 6.038 5.79 10.763zM7.16 12.422a.94.94 0 0 0 .631-.244h0a.94.94 0 0 0 .063-1.324.94.94 0 0 0-1.324-.063.94.94 0 0 0-.063 1.324c.185.204.439.307.694.307zm23.347 6.518a.94.94 0 0 0-1.321.12h0a.94.94 0 0 0 .12 1.32c.175.146.388.217.599.217.269 0 .536-.115.721-.338.332-.398.278-.989-.12-1.32zM8.391 35.519h0c-.518 0-.937.42-.937.938a.94.94 0 0 0 .938.938.94.94 0 0 0 .938-.937.94.94 0 0 0-.937-.937zm6.469 5.907h-.001c-.518 0-.937.42-.937.938a.94.94 0 0 0 .938.938.94.94 0 0 0 .938-.937.94.94 0 0 0-.937-.937z"/></svg>
                <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-success-subtle rounded-circle" style="--fn-transform-scale: 1.1"></span>
              </div>
              <h3 class="h6 fw-normal pt-3 pt-sm-4 mb-0">
                <a class="hover-effect-underline stretched-link" href="listings-side-filters-city-guide.html">Entertainment</a>
              </h3>
            </article>
            <article class="hover-effect-scale position-relative flex-shrink-0 text-center px-3">
              <div class="position-relative d-flex align-items-end justify-content-center text-danger mx-auto" style="width: 88px; height: 88px">
                <svg class="position-relative z-1" style="backface-visibility: hidden" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"><path d="M26.217 14.325h-5.325a.94.94 0 0 0-.937.937v3.224h-3.229c-.518 0-.937.42-.937.937v5.318a.94.94 0 0 0 .937.937h3.229v3.224a.94.94 0 0 0 .937.937h5.325a.94.94 0 0 0 .937-.937v-3.224h3.226a.94.94 0 0 0 .937-.937v-5.318a.94.94 0 0 0-.937-.937h-3.226v-3.224a.94.94 0 0 0-.937-.937zm3.226 6.036v3.444h-3.226a.94.94 0 0 0-.937.937v3.224h-3.45v-3.224a.94.94 0 0 0-.937-.937h-3.229v-3.444h3.229a.94.94 0 0 0 .937-.937V16.2h3.45v3.224a.94.94 0 0 0 .937.937h3.226zm12.855 7.211l.648-.624.024-.024c5.513-5.705 5.513-14.987 0-20.692-2.318-2.398-5.501-3.642-8.962-3.5-3.31.135-6.509 1.495-9.008 3.83l-.178.166c-.518.484-1.053.984-1.27 1.079-.217-.094-.752-.594-1.27-1.079l-.177-.166c-2.499-2.335-5.699-3.695-9.008-3.83-3.462-.142-6.643 1.102-8.96 3.5-5.515 5.705-5.515 14.987 0 20.692.008.008.015.016.023.023l4.602 4.437c.182.175.416.263.651.263.246 0 .491-.096.675-.287a.94.94 0 0 0-.024-1.325l-4.59-4.426C.664 20.623.667 12.518 5.485 7.535c3.9-4.038 10.782-3.86 15.34.398l.176.165c1.098 1.027 1.703 1.592 2.55 1.592s1.452-.566 2.55-1.592l.177-.165c4.558-4.257 11.441-4.435 15.343-.397 4.815 4.982 4.818 13.087.012 18.075l-1.429 1.376c-.462-.072-.934-.109-1.416-.109-5.078 0-9.209 4.127-9.209 9.199 0 .368.022.731.065 1.088l-6.092 5.874-7.435-7.165a.94.94 0 0 0-1.326.025c-.359.373-.348.966.025 1.325l8.085 7.792c.181.175.416.262.65.262a.94.94 0 0 0 .651-.263l5.951-5.739c1.304 3.501 4.682 6.001 8.634 6.001a9.22 9.22 0 0 0 9.213-9.2c0-3.832-2.358-7.123-5.702-8.504zm-3.51 15.831a7.34 7.34 0 0 1-7.334-7.327 7.34 7.34 0 0 1 7.334-7.324 7.34 7.34 0 0 1 7.337 7.324c0 4.04-3.291 7.327-7.337 7.327zm.001-12.202a.94.94 0 0 0-.937.937v3.941a.94.94 0 0 0 .937.937.94.94 0 0 0 .937-.937v-3.941a.94.94 0 0 0-.937-.937zm0 7.871a.94.94 0 0 0-.937.937v.005c0 .518.42.935.937.935a.94.94 0 0 0 .937-.94.94.94 0 0 0-.937-.937zm-27.011-6.105a.94.94 0 0 0 0 1.326l.003.003a.93.93 0 0 0 .661.274c.24 0 .48-.092.663-.275a.94.94 0 0 0-.001-1.327.94.94 0 0 0-1.326 0z"/></svg>
                <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-danger-subtle rounded-circle" style="--fn-transform-scale: 1.1"></span>
              </div>
              <h3 class="h6 fw-normal pt-3 pt-sm-4 mb-0">
                <a class="hover-effect-underline stretched-link" href="listings-side-filters-city-guide.html">Health</a>
              </h3>
            </article>
          </div>
        </div>
      </div>
    </div>

    <!-- Background images -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden">
      <div class="position-absolute top-0 start-50 h-100 translate-middle-x d-flex align-items-start">
        <div class="d-xl-none" style="width: 2300px"></div>
        <div class="d-none d-xl-block d-xxl-none" style="width: 2340px"></div>
        <div class="d-none d-xxl-block" style="width: 2390px"></div>
        <div class="position-absolute" style="top: -212px; left: -130px; width: 865px">
          <div class="ratio ratio-1x1 bg-body-tertiary rounded-circle overflow-hidden">
            <img src="assets/img/home/city-guide/hero/01.jpg" alt="Image">
          </div>
          <span class="position-absolute top-50 translate-middle-y bg-success-subtle rounded-circle z-1" style="right: -27px; width: 60px; height: 60px; margin-top: 62px"></span>
          <span class="position-absolute top-50 translate-middle-y bg-primary rounded-circle z-1" style="right: 42px; width: 22px; height: 22px; margin-top: 25px"></span>
        </div>
        <div class="position-absolute bottom-0" style="right: 135px; width: 562px">
          <div class="ratio ratio-1x1 bg-body-tertiary rounded-circle overflow-hidden">
            <img src="assets/img/home/city-guide/hero/02.jpg" alt="Image">
          </div>
          <span class="position-absolute top-0 bg-primary rounded-circle z-1" style="left: 55px; width: 60px; height: 60px; margin-top: 55px"></span>
          <span class="position-absolute top-0 bg-success-subtle rounded-circle z-1" style="left: 40px; width: 21px; height: 21px; margin-top: 25px"></span>
        </div>
      </div>
    </div>
  </section>


  <!-- Popular accomodation -->
  <section class="overflow-hidden pt-2 pt-sm-3 pt-md-4 pt-lg-5 my-xxl-3">
    <div class="container position-relative py-5">
      <div class="row gx-5 gy-4 align-items-center">
        <div class="col-lg-4 h-100">
          <div class="card bg-light rounded-3 overflow-hidden h-100">
            <div class="row g-0 align-items-center">
              <div class="col-12">
                <div class="card-body px-5 py-5">
                  <h4 class="card-title">Die Plattform für Schausteller.</h4>
                  <p class="mb-0">Wir bieten dir eine Plattform um passende Platzangebote für dein:e Geschäft:e zu finden, dein:e Geschäft:e übersichtlich zu präsentieren oder um Kleinanzeigen für Schausteller zu schalten.</p>
                  <a href="" class="btn btn-outline-secondary mb-0 w-100 mt-4">Erfahre mehr über uns</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 h-100">
          <div class="card bg-light rounded-3 overflow-hidden h-100">
            <div class="row g-0 align-items-center">
              <div class="col-12">
                <div class="card-body px-5 py-5">
                  <h4 class="card-title">Auf welchem Volksfest oder Markt bist du zu finden?</h4>
                  <p class="mb-0">Erstelle für dein:e Geschäft:e eigene Seiten auf denen die Besucher alle Infos und jede kommende Veranstaltung von dir finden.</p>
                  <a href="" class="btn btn-outline-secondary mb-0 w-100 mt-4">Veranstaltungen durchsuchen</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 h-100">
          <div class="card bg-light rounded-3 overflow-hidden h-100">
            <div class="row g-0 align-items-center">
              <div class="col-12">
                <div class="card-body px-5 py-5">
                  <h4 class="card-title">Jetzt als Schausteller kostenlos eintragen.</h4>
                  <p class="mb-0">Dann erstelle dir ein <a href="/registrieren"><strong>kostenloses Konto</strong></a> auf dem Schaustellerplatz und trage dein:e Geschäft:e ein oder verkaufe etwas über Kleinanzeigen.</p>
                  <a href="" class="btn btn-primary mb-0 w-100 mt-4">Jetzt kostenlos eintragen</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-start justify-content-between gap-4 pb-3 mb-2 mb-sm-3 mb-lg-4">
        <h2 class="mb-0">Popular vacation spots</h2>
        <div class="nav">
          <a class="nav-link position-relative fs-base text-nowrap py-1 px-0" href="listings-top-filters-city-guide.html">
            <span class="hover-effect-underline stretched-link me-1">View all</span>
            <i class="fi-chevron-right fs-lg"></i>
          </a>
        </div>
      </div>

      <!-- Row of listings that turns into carousel on screens < 992px wide (lg breakpoint) -->
      <div class="swiper" data-swiper='{
            "slidesPerView": 1,
            "spaceBetween": 24,
            "autoHeight": true,
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true
            },
            "breakpoints": {
              "500": {
                "slidesPerView": 2
              },
              "992": {
                "slidesPerView": 3
              }
            }
          }'>
        <div class="swiper-wrapper">

          <!-- Listing -->
          <div class="swiper-slide">
            <article class="card hover-effect-scale hover-effect-opacity bg-transparent border-0">
              <div class="bg-body-tertiary rounded overflow-hidden">
                <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(280 / 416 * 100%)">
                  <img src="assets/img/listings/city-guide/v2/10.jpg" alt="Image">
                </div>
              </div>
              <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                  <i class="fi-heart animate-target fs-sm"></i>
                </button>
              </div>
              <div class="card-body pt-3 pb-2 px-0">
                <h3 class="h5 mb-0">
                  <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Pine Cottage</a>
                </h3>
              </div>
              <div class="card-footer d-flex align-items-center gap-3 bg-transparent border-0 p-0">
                <div class="d-flex align-items-center gap-1">
                  <i class="fi-star-filled text-warning"></i>
                  <span class="fs-sm text-secondary-emphasis">4.9</span>
                  <span class="fs-xs text-body-secondary align-self-end">(135)</span>
                </div>
                <div class="d-flex align-items-center gap-1 fs-sm">
                  <i class="fi-credit-card"></i>
                  $$$
                </div>
                <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                  <i class="fi-map-pin"></i>
                  <span class="text-truncate">0.8 km from center</span>
                </div>
              </div>
            </article>
          </div>

          <!-- Listing -->
          <div class="swiper-slide">
            <article class="card hover-effect-scale hover-effect-opacity bg-transparent border-0">
              <div class="bg-body-tertiary rounded overflow-hidden">
                <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(280 / 416 * 100%)">
                  <img src="assets/img/listings/city-guide/v2/02.jpg" alt="Image">
                </div>
              </div>
              <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                  <i class="fi-heart animate-target fs-sm"></i>
                </button>
              </div>
              <div class="card-body pt-3 pb-2 px-0">
                <h3 class="h5 mb-0">
                  <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Big Tree Cottage</a>
                </h3>
              </div>
              <div class="card-footer d-flex align-items-center gap-3 bg-transparent border-0 p-0">
                <div class="d-flex align-items-center gap-1">
                  <i class="fi-star-filled text-warning"></i>
                  <span class="fs-sm text-secondary-emphasis">4.5</span>
                  <span class="fs-xs text-body-secondary align-self-end">(73)</span>
                </div>
                <div class="d-flex align-items-center gap-1 fs-sm">
                  <i class="fi-credit-card"></i>
                  $$
                </div>
                <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                  <i class="fi-map-pin"></i>
                  <span class="text-truncate">2.4 km from center</span>
                </div>
              </div>
            </article>
          </div>

          <!-- Listing -->
          <div class="swiper-slide">
            <article class="card hover-effect-scale hover-effect-opacity bg-transparent border-0">
              <div class="bg-body-tertiary rounded overflow-hidden">
                <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(280 / 416 * 100%)">
                  <img src="assets/img/listings/city-guide/v2/12.jpg" alt="Image">
                </div>
              </div>
              <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                  <i class="fi-heart animate-target fs-sm"></i>
                </button>
              </div>
              <div class="card-body pt-3 pb-2 px-0">
                <h3 class="h5 mb-0">
                  <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Crystal Studio Apartment</a>
                </h3>
              </div>
              <div class="card-footer d-flex align-items-center gap-3 bg-transparent border-0 p-0">
                <div class="d-flex align-items-center gap-1">
                  <i class="fi-star-filled text-warning"></i>
                  <span class="fs-sm text-secondary-emphasis">4.7</span>
                  <span class="fs-xs text-body-secondary align-self-end">(26)</span>
                </div>
                <div class="d-flex align-items-center gap-1 fs-sm">
                  <i class="fi-credit-card"></i>
                  $$
                </div>
                <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                  <i class="fi-map-pin"></i>
                  <span class="text-truncate">1.3 km from center</span>
                </div>
              </div>
            </article>
          </div>
        </div>

        <!-- Pagination (Bullets) -->
        <div class="swiper-pagination position-static mt-3 mt-sm-4"></div>
      </div>

      <!-- Decoration -->
      <span class="position-absolute bg-success-subtle rounded-circle" style="top: -10px; left: -100px; width: 60px; height: 60px"></span>
      <span class="position-absolute bg-primary-subtle rounded-circle" style="top: -43px; left: -110px; width: 27px; height: 27px"></span>
    </div>
  </section>


  <!-- Top offers -->
  <section class="overflow-hidden pt-2 pt-sm-3 pt-md-4 pt-lg-5 my-xxl-3">
    <div class="container position-relative pb-5">
      <div class="d-flex align-items-start justify-content-between gap-4 pb-3 mb-2 mb-sm-3 mb-lg-4">
        <h2 class="mb-0">Top offers</h2>
        <div class="nav">
          <a class="nav-link position-relative fs-base text-nowrap py-1 px-0" href="#!">
            <span class="hover-effect-underline stretched-link me-1">View all</span>
            <i class="fi-chevron-right fs-lg"></i>
          </a>
        </div>
      </div>

      <!-- Row of cards that turns into carousel on screens < 992px wide (lg breakpoint) -->
      <div class="swiper" data-swiper='{
            "slidesPerView": 1,
            "spaceBetween": 24,
            "autoHeight": true,
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true
            },
            "breakpoints": {
              "500": {
                "slidesPerView": 2
              },
              "992": {
                "slidesPerView": 3
              }
            }
          }'>
        <div class="swiper-wrapper">

          <!-- Listing -->
          <div class="swiper-slide">
            <a class="hover-effect-scale d-flex rounded overflow-hidden" href="#!">
              <div class="ratio hover-effect-target bg-body-tertiary" style="--fn-aspect-ratio: calc(220 / 416 * 100%)">
                <img src="assets/img/home/city-guide/offers/01.jpg" alt="Image">
              </div>
            </a>
          </div>

          <!-- Listing -->
          <div class="swiper-slide">
            <a class="hover-effect-scale d-flex rounded overflow-hidden" href="#!">
              <div class="ratio hover-effect-target bg-body-tertiary" style="--fn-aspect-ratio: calc(220 / 416 * 100%)">
                <img src="assets/img/home/city-guide/offers/02.jpg" alt="Image">
              </div>
            </a>
          </div>

          <!-- Listing -->
          <div class="swiper-slide">
            <a class="hover-effect-scale d-flex rounded overflow-hidden" href="#!">
              <div class="ratio hover-effect-target bg-body-tertiary" style="--fn-aspect-ratio: calc(220 / 416 * 100%)">
                <img src="assets/img/home/city-guide/offers/03.jpg" alt="Image">
              </div>
            </a>
          </div>
        </div>

        <!-- Pagination (Bullets) -->
        <div class="swiper-pagination position-static mt-3 mt-sm-4"></div>
      </div>

      <!-- Decoration -->
      <span class="position-absolute bg-success-subtle rounded-circle" style="top: -10px; right: -100px; width: 60px; height: 60px"></span>
      <span class="position-absolute bg-primary-subtle rounded-circle" style="top: -30px; right: -130px; width: 27px; height: 27px"></span>
    </div>
  </section>


  <!-- Upcoming events -->
  <section class="pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 my-xxl-3">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between gap-4 pb-3 mb-1 mb-sm-2 mb-md-3">
        <h2 class="mb-0">Upcoming events in Barcelona</h2>

        <!-- Prev/next buttons -->
        <div class="d-flex gap-2">
          <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-start bg-body rounded-circle me-1" id="events-prev" aria-label="Prev">
            <i class="fi-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-end bg-body rounded-circle" id="events-next" aria-label="Next">
            <i class="fi-chevron-right fs-lg animate-target"></i>
          </button>
        </div>
      </div>
    </div>
    <div class="container-start position-relative py-3">
      <div class="position-relative my-3">

        <!-- Carousel -->
        <div class="swiper" data-swiper='{
              "slidesPerView": 1,
              "spaceBetween": 24,
              "loop": true,
              "navigation": {
                "prevEl": "#events-prev",
                "nextEl": "#events-next"
              },
              "breakpoints": {
                "500": {
                  "slidesPerView": 1
                },
                "992": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": "auto"
                }
              }
            }'>
          <div class="swiper-wrapper">

            <!-- Event -->
            <div class="swiper-slide" style="max-width: 966px" data-bs-theme="light">
              <article class="position-relative w-100 rounded overflow-hidden">
                <div class="ratio bg-body-tertiary rtl-flip" style="--fn-aspect-ratio: calc(520 / 966 * 100%)">
                  <img src="assets/img/home/city-guide/events/01.jpg" alt="Image">
                </div>
                <div class="position-absolute start-0 top-0 d-flex align-items-end w-100 h-100 p-xl-5">
                  <div class="p-2 p-sm-3 p-md-4 p-xl-3 m-3">
                    <ul class="list-inline fs-sm text-body mb-2">
                      <li class="d-flex align-items-center gap-1">
                        <i class="fi-calendar"></i>
                        Nov 15
                      </li>
                      <li class="d-flex align-items-center gap-1">
                        <i class="fi-clock"></i>
                        19:00
                      </li>
                    </ul>
                    <h3 class="pb-sm-2 pb-xl-3">Simon Blues Concert</h3>
                    <a class="btn btn-lg btn-primary rounded-pill d-none d-sm-inline-flex" href="#!">
                      Tickets from $60
                      <i class="fi-chevron-right fs-xl ms-1 me-n1"></i>
                    </a>
                    <a class="btn btn-primary rounded-pill d-sm-none" href="#!">
                      Tickets from $60
                      <i class="fi-chevron-right fs-base ms-1 me-n1"></i>
                    </a>
                  </div>
                </div>
              </article>
            </div>

            <!-- Event -->
            <div class="swiper-slide" style="max-width: 966px">
              <article class="position-relative w-100 rounded overflow-hidden" data-bs-theme="dark">
                <div class="ratio bg-body-tertiary rtl-flip" style="--fn-aspect-ratio: calc(520 / 966 * 100%)">
                  <img src="assets/img/home/city-guide/events/02.jpg" alt="Image">
                </div>
                <div class="position-absolute start-0 top-0 d-flex align-items-end w-100 h-100 p-xl-5">
                  <div class="p-2 p-sm-3 p-md-4 p-xl-3 m-3">
                    <ul class="list-inline fs-sm text-body mb-2">
                      <li class="d-flex align-items-center gap-1">
                        <i class="fi-calendar"></i>
                        Oct 28
                      </li>
                      <li class="d-flex align-items-center gap-1">
                        <i class="fi-clock"></i>
                        21:00
                      </li>
                    </ul>
                    <h3 class="pb-sm-2 pb-xl-3">The Concert in Palau Sant Jordi</h3>
                    <a class="btn btn-lg btn-primary rounded-pill d-none d-sm-inline-flex" href="#!">
                      Tickets from $45
                      <i class="fi-chevron-right fs-xl ms-1 me-n1"></i>
                    </a>
                    <a class="btn btn-primary rounded-pill d-sm-none" href="#!">
                      Tickets from $45
                      <i class="fi-chevron-right fs-base ms-1 me-n1"></i>
                    </a>
                  </div>
                </div>
              </article>
            </div>

            <!-- Event -->
            <div class="swiper-slide" style="max-width: 966px">
              <article class="position-relative w-100 rounded overflow-hidden" data-bs-theme="dark">
                <div class="ratio bg-body-tertiary rtl-flip" style="--fn-aspect-ratio: calc(520 / 966 * 100%)">
                  <img src="assets/img/home/city-guide/events/03.jpg" alt="Image">
                </div>
                <div class="position-absolute start-0 top-0 d-flex align-items-end w-100 h-100 p-xl-5">
                  <div class="p-2 p-sm-3 p-md-4 p-xl-3 m-3">
                    <ul class="list-inline fs-sm text-body mb-2">
                      <li class="d-flex align-items-center gap-1">
                        <i class="fi-calendar"></i>
                        Sep 7
                      </li>
                      <li class="d-flex align-items-center gap-1">
                        <i class="fi-clock"></i>
                        81:30
                      </li>
                    </ul>
                    <h3 class="pb-sm-2 pb-xl-3">Dance About Passion: Tango Show</h3>
                    <a class="btn btn-lg btn-primary rounded-pill d-none d-sm-inline-flex" href="#!">
                      Tickets from $50
                      <i class="fi-chevron-right fs-xl ms-1 me-n1"></i>
                    </a>
                    <a class="btn btn-primary rounded-pill d-sm-none" href="#!">
                      Tickets from $50
                      <i class="fi-chevron-right fs-base ms-1 me-n1"></i>
                    </a>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>

        <!-- Decorative border -->
        <div class="container position-absolute top-0" style="height: calc(100% + 64px); margin-top: -32px">
          <div class="position-relative h-100 mx-3">
            <div class="position-absolute top-0 start-0 w-100 h-100 border rounded"></div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- What's new section -->
  <section class="container position-relative pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 my-xxl-3">
    <h2 class="pb-2 pb-sm-3">What's new in Barcelona</h2>
    <div class="row align-items-start align-items-xl-center">

      <!-- Controlled image slider -->
      <div class="col-md-5 mb-4 mb-md-0 pb-1 pb-md-0">
        <div class="position-relative">
          <div class="ratio" style="--fn-aspect-ratio: calc(431 / 526 * 100%)"></div>
          <div class="swiper position-absolute top-0 start-0 w-100 h-100" id="images" data-swiper='{
                "allowTouchMove": false,
                "loop": true,
                "effect": "flip",
                "flipEffect": {
                  "slideShadows": false
                }
              }'>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="assets/img/home/city-guide/new/01.jpg" class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary rounded object-fit-cover" alt="Image">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/home/city-guide/new/02.jpg" class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary rounded object-fit-cover" alt="Image">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/home/city-guide/new/03.jpg" class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary rounded object-fit-cover" alt="Image">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Master content slider -->
      <div class="col-md-7 col-xl-6 offset-xl-1 ps-md-4 ps-lg-5 ps-xl-0">
        <div class="swiper" data-swiper='{
              "spaceBetween": 32,
              "loop": true,
              "speed": 400,
              "autoHeight": true,
              "controlSlider": "#images",
              "navigation": {
                "prevEl": "#new-prev",
                "nextEl": "#new-next"
              }
            }'>

          <!-- Slider nav: Prev/next buttons -->
          <div class="d-flex justify-content-start gap-2 pb-3 mb-2 mb-lg-3">
            <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1" id="new-prev" aria-label="Prev">
              <i class="fi-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button" class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle" id="new-next" aria-label="Next">
              <i class="fi-chevron-right fs-lg animate-target"></i>
            </button>
          </div>

          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide">
              <h3 class="h2">Jardinet D'Aribau Restaurant</h3>
              <div class="d-flex align-items-center gap-3 mb-3 mb-xl-4">
                <div class="d-flex align-items-center gap-1">
                  <i class="fi-star-filled text-warning"></i>
                  <span class="fs-sm text-secondary-emphasis">4.9</span>
                  <span class="fs-xs text-body-secondary align-self-end">(597)</span>
                </div>
                <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                  <i class="fi-credit-card"></i>
                  $60
                </div>
                <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                  <i class="fi-map-pin"></i>
                  <span class="text-truncate">0.3 km from center</span>
                </div>
              </div>
              <p class="pb-2 pb-xl-3">Experience authentic Mediterranean flavors at Jardinet D'Aribau, a charming restaurant in the heart of Barcelona. With a focus on quality and creativity, Jardinet D'Aribau offers a diverse menu that blends traditional Mediterranean cuisine with modern culinary techniques. Perfect for a memorable dining experience!</p>
              <a class="btn btn-lg btn-primary rounded-pill d-none d-sm-inline-flex" href="single-entry-city-guide.html">
                View more
                <i class="fi-chevron-right fs-xl ms-1 me-n1"></i>
              </a>
              <a class="btn btn-primary rounded-pill d-sm-none" href="single-entry-city-guide.html">
                View more
                <i class="fi-chevron-right fs-lg ms-1 me-n1"></i>
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <h3 class="h2">Barcelona Oceanarium</h3>
              <div class="d-flex align-items-center gap-3 mb-3 mb-xl-4">
                <div class="d-flex align-items-center gap-1">
                  <i class="fi-star-filled text-warning"></i>
                  <span class="fs-sm text-secondary-emphasis">4.7</span>
                  <span class="fs-xs text-body-secondary align-self-end">(8325)</span>
                </div>
                <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                  <i class="fi-credit-card"></i>
                  $40
                </div>
                <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                  <i class="fi-map-pin"></i>
                  <span class="text-truncate">1.8 km from center</span>
                </div>
              </div>
              <p class="pb-2 pb-xl-3">Enter a world of aquatic discovery at one of the biggest aquariums in Europe, featuring a five-million-liter main tank and thousands of sea creatures from all over the world. Marvel at the mesmerizing dance of stingrays, the graceful glide of sea turtles, and the vibrant colors of tropical fish.</p>
              <a class="btn btn-lg btn-primary rounded-pill d-none d-sm-inline-flex" href="single-entry-city-guide.html">
                View more
                <i class="fi-chevron-right fs-xl ms-1 me-n1"></i>
              </a>
              <a class="btn btn-primary rounded-pill d-sm-none" href="single-entry-city-guide.html">
                View more
                <i class="fi-chevron-right fs-lg ms-1 me-n1"></i>
              </a>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <h3 class="h2">VRFun Virtual Reality Park</h3>
              <div class="d-flex align-items-center gap-3 mb-3 mb-xl-4">
                <div class="d-flex align-items-center gap-1">
                  <i class="fi-star-filled text-warning"></i>
                  <span class="fs-sm text-secondary-emphasis">4.9</span>
                  <span class="fs-xs text-body-secondary align-self-end">(112)</span>
                </div>
                <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                  <i class="fi-credit-card"></i>
                  $25
                </div>
                <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                  <i class="fi-map-pin"></i>
                  <span class="text-truncate">2.1 km from center</span>
                </div>
              </div>
              <p class="pb-2 pb-xl-3">VRFun on International Drive is an immersive virtual reality park offering cutting-edge VR experiences for all ages. Guests can engage in thrilling multiplayer games, virtual roller coasters, and interactive adventures in a high-tech environment, making it a top attraction for futuristic fun and family entertainment.</p>
              <a class="btn btn-lg btn-primary rounded-pill d-none d-sm-inline-flex" href="single-entry-city-guide.html">
                View more
                <i class="fi-chevron-right fs-xl ms-1 me-n1"></i>
              </a>
              <a class="btn btn-primary rounded-pill d-sm-none" href="single-entry-city-guide.html">
                View more
                <i class="fi-chevron-right fs-lg ms-1 me-n1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Decorations -->
    <span class="position-absolute bg-primary-subtle rounded-circle z-n1 d-none d-sm-block" style="bottom: 32px; right: 190px; width: 60px; height: 60px"></span>
    <span class="position-absolute bg-success-subtle rounded-circle z-n1 d-none d-sm-block" style="bottom: 84px; right: 260px; width: 27px; height: 27px"></span>
  </section>


  <!-- Restaurants section -->
  <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 my-xxl-3">
    <div class="d-flex align-items-start justify-content-between gap-4 pb-3 mb-2 mb-sm-3 mb-lg-4">
      <h2 class="mb-0">Where to eat</h2>
      <div class="nav">
        <a class="nav-link position-relative fs-base text-nowrap py-1 px-0" href="listings-side-filters-city-guide.html">
          <span class="hover-effect-underline stretched-link me-1">View all</span>
          <i class="fi-chevron-right fs-lg"></i>
        </a>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 mb-sm-n1">

      <!-- Listing -->
      <div class="col d-flex flex-column mb-sm-1">
        <article class="hover-effect-scale position-relative d-inline-flex align-items-start">
          <div class="flex-shrink-0 bg-body-tertiary rounded overflow-hidden p-3 px-md-4">
            <div class="ratio hover-effect-target" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)">
              <img src="assets/img/home/city-guide/restaurants/01.png" alt="Image">
            </div>
          </div>
          <div class="min-w-0 pt-1 ps-3">
            <h3 class="h6 mb-1">
              <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Mado</a>
            </h3>
            <div class="d-flex align-items-center gap-1 mb-2">
              <i class="fi-star-filled text-warning"></i>
              <span class="fs-sm text-secondary-emphasis">4.7</span>
              <span class="fs-xs text-body-secondary align-self-end">(113)</span>
            </div>
            <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
              <li class="d-flex align-items-center gap-1 me-2">
                <i class="fi-credit-card"></i>
                $50
              </li>
              <li class="d-flex align-items-center gap-1 min-w-0">
                <i class="fi-map-pin"></i>
                <span class="text-truncate">2.5 km from center</span>
              </li>
            </ul>
          </div>
        </article>
      </div>

      <!-- Listing -->
      <div class="col d-flex flex-column mb-sm-1">
        <article class="hover-effect-scale position-relative d-inline-flex align-items-start">
          <div class="flex-shrink-0 bg-body-tertiary rounded overflow-hidden p-3 px-md-4">
            <div class="ratio hover-effect-target" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)">
              <img src="assets/img/home/city-guide/restaurants/02.png" alt="Image">
            </div>
          </div>
          <div class="min-w-0 pt-1 ps-3">
            <h3 class="h6 mb-1">
              <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Hard Rock Cafe</a>
            </h3>
            <div class="d-flex align-items-center gap-1 mb-2">
              <i class="fi-star-filled text-warning"></i>
              <span class="fs-sm text-secondary-emphasis">3.9</span>
              <span class="fs-xs text-body-secondary align-self-end">(18)</span>
            </div>
            <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
              <li class="d-flex align-items-center gap-1 me-2">
                <i class="fi-credit-card"></i>
                $45
              </li>
              <li class="d-flex align-items-center gap-1 min-w-0">
                <i class="fi-map-pin"></i>
                <span class="text-truncate">6.2 km from center</span>
              </li>
            </ul>
          </div>
        </article>
      </div>

      <!-- Listing -->
      <div class="col d-flex flex-column mb-sm-1">
        <article class="hover-effect-scale position-relative d-inline-flex align-items-start">
          <div class="flex-shrink-0 bg-body-tertiary rounded overflow-hidden p-3 px-md-4">
            <div class="ratio hover-effect-target" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)">
              <img src="assets/img/home/city-guide/restaurants/03-light.png" class="d-none-dark" alt="Image">
              <img src="assets/img/home/city-guide/restaurants/03-dark.png" class="d-none d-block-dark" alt="Image">
            </div>
          </div>
          <div class="min-w-0 pt-1 ps-3">
            <h3 class="h6 mb-1">
              <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Sbarro</a>
            </h3>
            <div class="d-flex align-items-center gap-1 mb-2">
              <i class="fi-star-filled text-warning"></i>
              <span class="fs-sm text-secondary-emphasis">4.8</span>
              <span class="fs-xs text-body-secondary align-self-end">(127)</span>
            </div>
            <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
              <li class="d-flex align-items-center gap-1 me-2">
                <i class="fi-credit-card"></i>
                $60
              </li>
              <li class="d-flex align-items-center gap-1 min-w-0">
                <i class="fi-map-pin"></i>
                <span class="text-truncate">5.7 km from center</span>
              </li>
            </ul>
          </div>
        </article>
      </div>

      <!-- Listing -->
      <div class="col d-flex flex-column mb-sm-1">
        <article class="hover-effect-scale position-relative d-inline-flex align-items-start">
          <div class="flex-shrink-0 bg-body-tertiary rounded overflow-hidden p-3 px-md-4">
            <div class="ratio hover-effect-target" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)">
              <img src="assets/img/home/city-guide/restaurants/04.png" alt="Image">
            </div>
          </div>
          <div class="min-w-0 pt-1 ps-3">
            <h3 class="h6 mb-1">
              <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">McDonald's</a>
            </h3>
            <div class="d-flex align-items-center gap-1 mb-2">
              <i class="fi-star-filled text-warning"></i>
              <span class="fs-sm text-secondary-emphasis">4.9</span>
              <span class="fs-xs text-body-secondary align-self-end">(836)</span>
            </div>
            <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
              <li class="d-flex align-items-center gap-1 me-2">
                <i class="fi-credit-card"></i>
                $25
              </li>
              <li class="d-flex align-items-center gap-1 min-w-0">
                <i class="fi-map-pin"></i>
                <span class="text-truncate">1.4 km from center</span>
              </li>
            </ul>
          </div>
        </article>
      </div>

      <!-- Listing -->
      <div class="col d-flex flex-column mb-sm-1">
        <article class="hover-effect-scale position-relative d-inline-flex align-items-start">
          <div class="flex-shrink-0 bg-body-tertiary rounded overflow-hidden p-3 px-md-4">
            <div class="ratio hover-effect-target" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)">
              <img src="assets/img/home/city-guide/restaurants/05-light.png" class="d-none-dark" alt="Image">
              <img src="assets/img/home/city-guide/restaurants/05-dark.png" class="d-none d-block-dark" alt="Image">
            </div>
          </div>
          <div class="min-w-0 pt-1 ps-3">
            <h3 class="h6 mb-1">
              <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Taco Bell</a>
            </h3>
            <div class="d-flex align-items-center gap-1 mb-2">
              <i class="fi-star-filled text-warning"></i>
              <span class="fs-sm text-secondary-emphasis">4.2</span>
              <span class="fs-xs text-body-secondary align-self-end">(73)</span>
            </div>
            <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
              <li class="d-flex align-items-center gap-1 me-2">
                <i class="fi-credit-card"></i>
                $20
              </li>
              <li class="d-flex align-items-center gap-1 min-w-0">
                <i class="fi-map-pin"></i>
                <span class="text-truncate">2.2 km from center</span>
              </li>
            </ul>
          </div>
        </article>
      </div>

      <!-- Listing -->
      <div class="col d-flex flex-column mb-sm-1">
        <article class="hover-effect-scale position-relative d-inline-flex align-items-start">
          <div class="flex-shrink-0 bg-body-tertiary rounded overflow-hidden p-3 px-md-4">
            <div class="ratio hover-effect-target" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)">
              <img src="assets/img/home/city-guide/restaurants/06.png" alt="Image">
            </div>
          </div>
          <div class="min-w-0 pt-1 ps-3">
            <h3 class="h6 mb-1">
              <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">El Pollo Loco</a>
            </h3>
            <div class="d-flex align-items-center gap-1 mb-2">
              <i class="fi-star-filled text-warning"></i>
              <span class="fs-sm text-secondary-emphasis">4.4</span>
              <span class="fs-xs text-body-secondary align-self-end">(275)</span>
            </div>
            <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
              <li class="d-flex align-items-center gap-1 me-2">
                <i class="fi-credit-card"></i>
                $35
              </li>
              <li class="d-flex align-items-center gap-1 min-w-0">
                <i class="fi-map-pin"></i>
                <span class="text-truncate">2.3 km from center</span>
              </li>
            </ul>
          </div>
        </article>
      </div>

      <!-- Listing -->
      <div class="col d-flex flex-column mb-sm-1">
        <article class="hover-effect-scale position-relative d-inline-flex align-items-start">
          <div class="flex-shrink-0 bg-body-tertiary rounded overflow-hidden p-3 px-md-4">
            <div class="ratio hover-effect-target" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)">
              <img src="assets/img/home/city-guide/restaurants/07.png" alt="Image">
            </div>
          </div>
          <div class="min-w-0 pt-1 ps-3">
            <h3 class="h6 mb-1">
              <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Jack Restaurant</a>
            </h3>
            <div class="d-flex align-items-center gap-1 mb-2">
              <i class="fi-star-filled text-warning"></i>
              <span class="fs-sm text-secondary-emphasis">4.9</span>
              <span class="fs-xs text-body-secondary align-self-end">(48)</span>
            </div>
            <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
              <li class="d-flex align-items-center gap-1 me-2">
                <i class="fi-credit-card"></i>
                $50
              </li>
              <li class="d-flex align-items-center gap-1 min-w-0">
                <i class="fi-map-pin"></i>
                <span class="text-truncate">1.3 km from center</span>
              </li>
            </ul>
          </div>
        </article>
      </div>

      <!-- Listing -->
      <div class="col d-flex flex-column mb-sm-1">
        <article class="hover-effect-scale position-relative d-inline-flex align-items-start">
          <div class="flex-shrink-0 bg-body-tertiary rounded overflow-hidden p-3 px-md-4">
            <div class="ratio hover-effect-target" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)">
              <img src="assets/img/home/city-guide/restaurants/08.png" alt="Image">
            </div>
          </div>
          <div class="min-w-0 pt-1 ps-3">
            <h3 class="h6 mb-1">
              <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">TacoTime</a>
            </h3>
            <div class="d-flex align-items-center gap-1 mb-2">
              <i class="fi-star-filled text-warning"></i>
              <span class="fs-sm text-secondary-emphasis">4.6</span>
              <span class="fs-xs text-body-secondary align-self-end">(179)</span>
            </div>
            <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
              <li class="d-flex align-items-center gap-1 me-2">
                <i class="fi-credit-card"></i>
                $25
              </li>
              <li class="d-flex align-items-center gap-1 min-w-0">
                <i class="fi-map-pin"></i>
                <span class="text-truncate">4.8 km from center</span>
              </li>
            </ul>
          </div>
        </article>
      </div>

      <!-- Listing -->
      <div class="col d-flex flex-column mb-sm-1">
        <article class="hover-effect-scale position-relative d-inline-flex align-items-start">
          <div class="flex-shrink-0 bg-body-tertiary rounded overflow-hidden p-3 px-md-4">
            <div class="ratio hover-effect-target" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)">
              <img src="assets/img/home/city-guide/restaurants/09.png" alt="Image">
            </div>
          </div>
          <div class="min-w-0 pt-1 ps-3">
            <h3 class="h6 mb-1">
              <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Domino's Pizza</a>
            </h3>
            <div class="d-flex align-items-center gap-1 mb-2">
              <i class="fi-star-filled text-warning"></i>
              <span class="fs-sm text-secondary-emphasis">4.5</span>
              <span class="fs-xs text-body-secondary align-self-end">(481)</span>
            </div>
            <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
              <li class="d-flex align-items-center gap-1 me-2">
                <i class="fi-credit-card"></i>
                $30
              </li>
              <li class="d-flex align-items-center gap-1 min-w-0">
                <i class="fi-map-pin"></i>
                <span class="text-truncate">1.7 km from center</span>
              </li>
            </ul>
          </div>
        </article>
      </div>
    </div>
  </section>


  <!-- Best of section -->
  <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 my-xxl-3">
    <div class="d-flex align-items-start justify-content-between gap-4 pb-3 mb-1 mb-sm-2 mb-md-3">
      <h2 class="mb-0">Best of Barcelona</h2>
      <div class="nav">
        <a class="nav-link position-relative fs-base text-nowrap py-1 px-0" href="listings-side-filters-city-guide.html">
          <span class="hover-effect-underline stretched-link me-1">View all</span>
          <i class="fi-chevron-right fs-lg"></i>
        </a>
      </div>
    </div>

    <div style="padding: 32px 0">
      <div class="position-relative">
        <div class="row position-relative z-1">

          <!-- Top restaurants -->
          <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-lg-0">
            <div class="bg-body-tertiary rounded p-4">
              <div class="p-xl-2">
                <h3 class="h5 pb-2 mb-0">Top restaurants</h3>
                <hr class="my-3 my-xl-4">
                <div class="vstack gap-4">

                  <!-- Listing -->
                  <article class="hover-effect-scale position-relative d-inline-flex align-items-start mt-1 mt-sm-2">
                    <div class="flex-shrink-0 rounded overflow-hidden p-3 px-md-4">
                      <div class="ratio hover-effect-target z-1" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)">
                        <img src="assets/img/home/city-guide/restaurants/03-light.png" class="d-none-dark" alt="Image">
                        <img src="assets/img/home/city-guide/restaurants/03-dark.png" class="d-none d-block-dark" alt="Image">
                      </div>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary d-none d-block-dark"></span>
                    </div>
                    <div class="min-w-0 pt-1 ps-3">
                      <h3 class="h6 mb-1">
                        <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Sbarro</a>
                      </h3>
                      <div class="d-flex align-items-center gap-1 mb-2">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.8</span>
                        <span class="fs-xs text-body-secondary align-self-end">(127)</span>
                      </div>
                      <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
                        <li class="d-flex align-items-center gap-1 me-2">
                          <i class="fi-credit-card"></i>
                          $60
                        </li>
                        <li class="d-flex align-items-center gap-1 min-w-0">
                          <i class="fi-map-pin"></i>
                          <span class="text-truncate">5.7 km from center</span>
                        </li>
                      </ul>
                    </div>
                  </article>

                  <!-- Listing -->
                  <article class="hover-effect-scale position-relative d-inline-flex align-items-start mt-1 mt-sm-2">
                    <div class="flex-shrink-0 rounded overflow-hidden p-3 px-md-4">
                      <div class="ratio hover-effect-target z-1" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)">
                        <img src="assets/img/home/city-guide/restaurants/01.png" alt="Image">
                      </div>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary d-none d-block-dark"></span>
                    </div>
                    <div class="min-w-0 pt-1 ps-3">
                      <h3 class="h6 mb-1">
                        <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Mado</a>
                      </h3>
                      <div class="d-flex align-items-center gap-1 mb-2">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.7</span>
                        <span class="fs-xs text-body-secondary align-self-end">(113)</span>
                      </div>
                      <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
                        <li class="d-flex align-items-center gap-1 me-2">
                          <i class="fi-credit-card"></i>
                          $50
                        </li>
                        <li class="d-flex align-items-center gap-1 min-w-0">
                          <i class="fi-map-pin"></i>
                          <span class="text-truncate">2.5 km from center</span>
                        </li>
                      </ul>
                    </div>
                  </article>

                  <!-- Listing -->
                  <article class="hover-effect-scale position-relative d-inline-flex align-items-start mt-1 mt-sm-2">
                    <div class="flex-shrink-0 rounded overflow-hidden p-3 px-md-4">
                      <div class="ratio hover-effect-target z-1" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)">
                        <img src="assets/img/home/city-guide/restaurants/08.png" alt="Image">
                      </div>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary d-none d-block-dark"></span>
                    </div>
                    <div class="min-w-0 pt-1 ps-3">
                      <h3 class="h6 mb-1">
                        <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">TacoTime</a>
                      </h3>
                      <div class="d-flex align-items-center gap-1 mb-2">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.6</span>
                        <span class="fs-xs text-body-secondary align-self-end">(179)</span>
                      </div>
                      <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
                        <li class="d-flex align-items-center gap-1 me-2">
                          <i class="fi-credit-card"></i>
                          $25
                        </li>
                        <li class="d-flex align-items-center gap-1 min-w-0">
                          <i class="fi-map-pin"></i>
                          <span class="text-truncate">4.8 km from center</span>
                        </li>
                      </ul>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>

          <!-- Places to visit -->
          <div class="col-md-6 col-lg-7 col-xl-8">
            <div class="position-relative bg-body-tertiary rounded overflow-hidden p-4">
              <div class="p-xl-2">
                <h3 class="h5 pb-2 mb-0">Places to visit</h3>
                <hr class="my-3 my-xl-4">
                <div class="vstack gap-4">

                  <!-- Listing -->
                  <article class="hover-effect-scale position-relative d-inline-flex align-items-start mt-1 mt-sm-2">
                    <div class="position-relative flex-shrink-0 rounded overflow-hidden p-3 px-md-4">
                      <div class="ratio" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)"></div>
                      <img src="assets/img/home/city-guide/places/01.jpg" class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover bg-body-secondary z-1" alt="Image">
                    </div>
                    <div class="min-w-0 pt-1 ps-3">
                      <h3 class="h6 mb-1">
                        <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Sagrada Familia</a>
                      </h3>
                      <div class="d-flex align-items-center gap-1 mb-2">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.8</span>
                        <span class="fs-xs text-body-secondary align-self-end">(12694)</span>
                      </div>
                      <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
                        <li class="d-flex align-items-center gap-1 me-2">
                          <i class="fi-credit-card"></i>
                          $30
                        </li>
                        <li class="d-flex align-items-center gap-1 min-w-0">
                          <i class="fi-map-pin"></i>
                          <span class="text-truncate">0.5 km from center</span>
                        </li>
                      </ul>
                    </div>
                  </article>

                  <!-- Listing -->
                  <article class="hover-effect-scale position-relative d-inline-flex align-items-start mt-1 mt-sm-2">
                    <div class="position-relative flex-shrink-0 rounded overflow-hidden p-3 px-md-4">
                      <div class="ratio" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)"></div>
                      <img src="assets/img/home/city-guide/places/02.jpg" class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover bg-body-secondary z-1" alt="Image">
                    </div>
                    <div class="min-w-0 pt-1 ps-3">
                      <h3 class="h6 mb-1">
                        <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Park Güell</a>
                      </h3>
                      <div class="d-flex align-items-center gap-1 mb-2">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.9</span>
                        <span class="fs-xs text-body-secondary align-self-end">(9328)</span>
                      </div>
                      <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
                        <li class="d-flex align-items-center gap-1 me-2">
                          <i class="fi-credit-card"></i>
                          $15
                        </li>
                        <li class="d-flex align-items-center gap-1 min-w-0">
                          <i class="fi-map-pin"></i>
                          <span class="text-truncate">0.7 km from center</span>
                        </li>
                      </ul>
                    </div>
                  </article>

                  <!-- Listing -->
                  <article class="hover-effect-scale position-relative d-inline-flex align-items-start mt-1 mt-sm-2">
                    <div class="position-relative flex-shrink-0 rounded overflow-hidden p-3 px-md-4">
                      <div class="ratio" style="width: 64px; --fn-aspect-ratio: calc(48 / 64 * 100%)"></div>
                      <img src="assets/img/home/city-guide/places/03.jpg" class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover bg-body-secondary z-1" alt="Image">
                    </div>
                    <div class="min-w-0 pt-1 ps-3">
                      <h3 class="h6 mb-1">
                        <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Camp Nou Tour</a>
                      </h3>
                      <div class="d-flex align-items-center gap-1 mb-2">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.7</span>
                        <span class="fs-xs text-body-secondary align-self-end">(6149)</span>
                      </div>
                      <ul class="list-inline flex-nowrap gap-2 fs-sm mb-0">
                        <li class="d-flex align-items-center gap-1 me-2">
                          <i class="fi-credit-card"></i>
                          $40
                        </li>
                        <li class="d-flex align-items-center gap-1 min-w-0">
                          <i class="fi-map-pin"></i>
                          <span class="text-truncate">5.2 km from center</span>
                        </li>
                      </ul>
                    </div>
                  </article>
                </div>
              </div>

              <!-- Photographer + decorations -->
              <div class="position-absolute end-0 bottom-0 z-1 d-none d-lg-block ps-5 ps-xl-0 me-n5 me-xl-n4 me-xxl-3" style="width: 388px">
                <span class="position-absolute bg-primary-subtle rounded-circle d-none d-xl-block" style="top: 165px; right: 270px; width: 72px; height: 72px"></span>
                <span class="position-absolute rounded-circle d-none d-xl-block" style="top: 150px; right: 346px; width: 25px; height: 25px; background-color: var(--fn-success-border-subtle)"></span>
                <img src="assets/img/home/city-guide/places/photographer.png" class="position-relative z-1 ps-5 ps-xl-0 ms-3 ms-xl-0" width="388" alt="Photographer">
              </div>
            </div>
          </div>
        </div>

        <!-- Decorative border -->
        <div class="position-absolute top-0 border rounded" style="width: calc(100% - 64px); height: calc(100% + 64px); margin: -32px 0 0 32px"></div>
      </div>
    </div>
  </section>


  <!-- Popular activities -->
  <section class="overflow-hidden pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 my-xxl-3">
    <div class="container position-relative">
      <div class="d-flex align-items-start justify-content-between gap-4 pb-3 mb-2 mb-sm-3 mb-lg-4">
        <h2 class="mb-0">Popular activities</h2>
        <div class="nav">
          <a class="nav-link position-relative fs-base text-nowrap py-1 px-0" href="listings-side-filters-city-guide.html">
            <span class="hover-effect-underline stretched-link me-1">View all</span>
            <i class="fi-chevron-right fs-lg"></i>
          </a>
        </div>
      </div>

      <!-- Row of listings that turns into carousel on screens < 1200px wide (xl breakpoint) -->
      <div class="swiper" data-swiper='{
            "slidesPerView": 1,
            "spaceBetween": 24,
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true
            },
            "breakpoints": {
              "500": {
                "slidesPerView": 2
              },
              "900": {
                "slidesPerView": 3
              },
              "1200": {
                "slidesPerView": 4
              }
            }
          }'>
        <div class="swiper-wrapper">

          <!-- Listing -->
          <div class="swiper-slide h-auto">
            <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
              <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                  <img src="assets/img/listings/city-guide/v1/01.jpg" alt="Image">
                </div>
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                  <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                    <i class="fi-heart animate-target fs-sm"></i>
                  </button>
                </div>
              </div>
              <div class="card-body pt-3 pb-2 px-3">
                <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                <h3 class="h5 pt-1 mb-2">
                  <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Barcelona National Zoo</a>
                </h3>
                <p class="fs-sm mb-0">Discover fascinating animals and a fun-filled adventure for the whole family.</p>
              </div>
              <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-1">
                    <i class="fi-star-filled text-warning"></i>
                    <span class="fs-sm text-secondary-emphasis">4.6</span>
                    <span class="fs-xs text-body-secondary align-self-end">(7523)</span>
                  </div>
                  <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                    <i class="fi-map-pin"></i>
                    <span class="text-truncate">3.2 km from center</span>
                  </div>
                </div>
                <div class="h6 pt-3 mb-0">$20</div>
              </div>
            </article>
          </div>

          <!-- Listing -->
          <div class="swiper-slide h-auto">
            <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
              <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                  <img src="assets/img/listings/city-guide/v1/02.jpg" alt="Image">
                </div>
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                  <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                    <i class="fi-heart animate-target fs-sm"></i>
                  </button>
                </div>
              </div>
              <div class="card-body pt-3 pb-2 px-3">
                <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                <h3 class="h5 pt-1 mb-2">
                  <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Mountain Lake Tour</a>
                </h3>
                <p class="fs-sm mb-0">Enjoy breathtaking views, fresh air, and a peaceful escape into the wilderness.</p>
              </div>
              <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-1">
                    <i class="fi-star-filled text-warning"></i>
                    <span class="fs-sm text-secondary-emphasis">4.5</span>
                    <span class="fs-xs text-body-secondary align-self-end">(214)</span>
                  </div>
                  <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                    <i class="fi-map-pin"></i>
                    <span class="text-truncate">13 km from center</span>
                  </div>
                </div>
                <div class="h6 pt-3 mb-0">$60</div>
              </div>
            </article>
          </div>

          <!-- Listing -->
          <div class="swiper-slide h-auto">
            <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
              <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                  <img src="assets/img/listings/city-guide/v1/03.jpg" alt="Image">
                </div>
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                  <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                    <i class="fi-heart animate-target fs-sm"></i>
                  </button>
                </div>
              </div>
              <div class="card-body pt-3 pb-2 px-3">
                <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                <h3 class="h5 pt-1 mb-2">
                  <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Jeep Tour with 4x4 Club</a>
                </h3>
                <p class="fs-sm mb-0">Explore the wild side of Barcelona in our reliable off-road 4x4 vehicle!</p>
              </div>
              <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-1">
                    <i class="fi-star-filled text-warning"></i>
                    <span class="fs-sm text-secondary-emphasis">4.7</span>
                    <span class="fs-xs text-body-secondary align-self-end">(185)</span>
                  </div>
                  <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                    <i class="fi-map-pin"></i>
                    <span class="text-truncate">9.8 km from center</span>
                  </div>
                </div>
                <div class="h6 pt-3 mb-0">$130</div>
              </div>
            </article>
          </div>

          <!-- Listing -->
          <div class="swiper-slide h-auto">
            <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
              <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                  <img src="assets/img/listings/city-guide/v1/07.jpg" alt="Image">
                </div>
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                  <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                    <i class="fi-heart animate-target fs-sm"></i>
                  </button>
                </div>
              </div>
              <div class="card-body pt-3 pb-2 px-3">
                <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                <h3 class="h5 pt-1 mb-2">
                  <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Art &amp; Design Museum</a>
                </h3>
                <p class="fs-sm mb-0">Europe's most extensive collection of modern and contemporary art.</p>
              </div>
              <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                <div class="d-flex align-items-center gap-3">
                  <div class="d-flex align-items-center gap-1">
                    <i class="fi-star-filled text-warning"></i>
                    <span class="fs-sm text-secondary-emphasis">4.9</span>
                    <span class="fs-xs text-body-secondary align-self-end">(2078)</span>
                  </div>
                  <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                    <i class="fi-map-pin"></i>
                    <span class="text-truncate">1.4 km from center</span>
                  </div>
                </div>
                <div class="h6 pt-3 mb-0">$15</div>
              </div>
            </article>
          </div>
        </div>

        <!-- Pagination (Bullets) -->
        <div class="swiper-pagination position-static mt-3 mt-sm-4"></div>
      </div>

      <!-- Decorations -->
      <span class="position-absolute bg-success-subtle rounded-circle z-n1 d-none d-sm-block" style="top: -48px; left: -136px; width: 98px; height: 98px"></span>
      <span class="position-absolute bg-warning-subtle rounded-circle z-n1 d-none d-sm-block" style="bottom: -48px; right: -136px; width: 98px; height: 98px"></span>
      <span class="position-absolute bg-success-subtle rounded-circle z-n1 d-none d-sm-block" style="bottom: 56px; right: -155px; width: 34px; height: 34px"></span>
    </div>
  </section>


  <!-- Mobile app CTA -->
  <section class="container py-2 py-sm-3 py-md-4 py-lg-5 my-xxl-3">
    <div class="position-relative d-flex flex-column flex-md-row align-items-center overflow-hidden mb-5">
      <div class="position-relative d-xl-flex align-items-center w-100 z-2 text-center text-md-start py-4 py-md-5 px-4 px-sm-5 ps-md-5 pe-md-0 pe-lg-5 pe-xl-0 mt-xl-4 ms-xxl-3 me-lg-5 me-xl-0">
        <div class="pt-3 pt-md-0 pt-xl-2 pe-xl-2 pe-xxl-0 me-xl-4 me-xxl-5">
          <h3 class="mb-2">Download Finder App</h3>
          <p class="mb-xl-0">Discover all your travel essentials and more with ease in the Finder app!</p>
        </div>
        <div class="d-flex flex-column flex-sm-row flex-shrink-0 justify-content-center justify-content-md-start gap-3 pt-xl-3 pe-xl-3 me-xxl-5">
          <a class="btn btn-market btn-lg" href="#!" aria-label="Download on App Store">
            <i class="fi-apple lead ms-n1 me-2"></i>
            <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="77" height="24" viewBox="0 0 77 24" fill="currentColor"><path d="M40.713 15.797c.701-.624 1.055-1.431 1.055-2.427 0-.806-.242-1.486-.733-2.032-.483-.546-1.232-1.02-2.255-1.423-.838-.324-1.418-.625-1.732-.901a1.41 1.41 0 0 1-.548-1.138 1.39 1.39 0 0 1 .475-1.059c.379-.316.91-.482 1.579-.482.854 0 1.611.182 2.288.538l.483-1.518c-.717-.372-1.619-.553-2.699-.553-1.216 0-2.191.308-2.924.917a2.94 2.94 0 0 0-1.103 2.356c0 1.463 1.039 2.577 3.142 3.344.765.277 1.313.577 1.643.901a1.63 1.63 0 0 1 .491 1.194c0 .53-.201.957-.604 1.273-.395.316-.959.474-1.675.474-.999 0-1.917-.245-2.755-.727l-.443 1.557c.773.482 1.796.727 3.077.727 1.386 0 2.465-.34 3.238-1.02zm-31.706.846h2.03L7.195 4.966H4.826L1 16.644h1.974l1.055-3.431h3.867l1.112 3.431zM6.558 8.729l1.007 3.044H4.367l.991-3.044.564-2.198h.04l.596 2.198zm13.122 6.997c.797-.83 1.192-1.961 1.192-3.392 0-1.289-.338-2.316-1.031-3.107-.677-.783-1.514-1.178-2.529-1.178-1.289 0-2.255.506-2.892 1.51h-.032l-.105-1.336h-1.675l.072 2.767v9.068h1.909v-4.42c.499.798 1.313 1.194 2.449 1.194 1.047 0 1.933-.364 2.642-1.107zm-1.313-5.353c.379.53.564 1.202.564 2.024 0 .893-.201 1.605-.604 2.15-.403.538-.959.814-1.675.814-.612 0-1.112-.213-1.49-.633s-.572-.941-.572-1.55v-1.407c0-.15.032-.34.089-.569a2.11 2.11 0 0 1 .749-1.202c.387-.3.814-.459 1.281-.459a1.96 1.96 0 0 1 1.659.83zm12.366 1.961c0 1.431-.395 2.562-1.192 3.392-.709.743-1.595 1.107-2.642 1.107-1.136 0-1.949-.395-2.449-1.194v4.42H22.54v-9.068l-.072-2.767h1.675l.105 1.336h.032c.636-1.004 1.603-1.51 2.892-1.51 1.015 0 1.853.395 2.529 1.178.693.791 1.031 1.818 1.031 3.107zm-1.941.063c0-.822-.185-1.494-.564-2.024a1.96 1.96 0 0 0-1.659-.83c-.467 0-.894.158-1.281.459-.379.308-.628.704-.749 1.202-.056.229-.089.419-.089.569v1.407c0 .609.193 1.131.572 1.55s.878.633 1.49.633c.717 0 1.281-.277 1.676-.814.411-.546.604-1.257.604-2.15zM48.083 9.63h-2.102v4.087c0 1.036.37 1.557 1.112 1.557.338 0 .62-.032.846-.087l.056 1.423c-.379.134-.87.206-1.482.206-.757 0-1.337-.229-1.764-.68s-.636-1.21-.636-2.269V9.623h-1.248V8.223h1.249V6.681l1.869-.553v2.095h2.102V9.63zm8.329 5.922c.749-.83 1.128-1.89 1.128-3.186 0-1.257-.362-2.285-1.096-3.075-.765-.822-1.78-1.233-3.037-1.233-1.305 0-2.344.419-3.117 1.249-.765.83-1.152 1.897-1.152 3.202 0 1.249.37 2.285 1.12 3.099s1.756 1.225 3.013 1.225c1.305 0 2.352-.427 3.142-1.281zm-1.353-5.131c.338.553.508 1.21.508 1.984s-.177 1.439-.524 2.008c-.419.68-.991 1.02-1.716 1.02-.741 0-1.321-.332-1.732-1.004-.338-.546-.508-1.21-.508-1.984 0-.799.161-1.471.508-2.024.395-.672.983-1.004 1.748-1.004.741 0 1.313.332 1.716 1.004zm8.683-.553c-.185-.032-.387-.047-.604-.047-.669 0-1.192.245-1.555.743-.314.435-.475.996-.475 1.66v4.419h-1.909v-5.771l-.056-2.649h1.659l.072 1.613h.056c.201-.553.516-1.004.951-1.336.427-.3.886-.451 1.377-.451a4.09 4.09 0 0 1 .475.032l.008 1.787zm8.451 3.012c.048-.229.072-.514.072-.846 0-1.051-.258-1.929-.765-2.656-.628-.901-1.571-1.352-2.803-1.352-1.257 0-2.255.451-2.997 1.352-.709.846-1.063 1.905-1.063 3.17 0 1.289.379 2.324 1.136 3.091s1.804 1.154 3.133 1.154c1.104 0 2.062-.174 2.876-.522l-.298-1.297c-.693.261-1.466.395-2.312.395-.765 0-1.386-.198-1.869-.585-.532-.435-.806-1.075-.83-1.905h5.719zm-2.119-2.767c.258.403.387.886.371 1.439l-3.963-.008c.056-.561.25-1.051.564-1.455a1.82 1.82 0 0 1 1.514-.759c.677 0 1.184.261 1.514.783z"/></svg>
          </a>
          <a class="btn btn-market btn-lg" href="#!" aria-label="Download on Google Play">
            <svg class="flex-shrink-0 ms-n1 me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M19.665 10.561l-3.251-1.878-3.329 3.329 3.328 3.329 3.263-1.884c.509-.309.812-.849.812-1.444s-.304-1.135-.823-1.451z" fill="#ffce00"/><path d="M13.085 12.011L4.018 2.879a1.71 1.71 0 0 0-.507 1.216v15.804a1.71 1.71 0 0 0 .507 1.217l9.067-9.105z" fill="#01daff"/><path d="M13.086 12.011l3.329-3.329.005-.005-4.46-2.568L6.08 2.654c-.529-.327-1.171-.338-1.712-.034a2.54 2.54 0 0 0-.349.259l9.067 9.132z" fill="#00f076"/><path d="M4.019 21.116c.113.101.225.18.349.259.27.146.552.225.834.225.304 0 .597-.09.867-.248l5.891-3.439 4.46-2.568-.005-.005-3.329-3.329-9.067 9.104z" fill="#f63448"/></svg>
            <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="77" height="24" viewBox="0 0 77 24" fill="currentColor"><path d="M24.575 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM16.11 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM6.007 10.681v1.704h3.914c-.091.947-.455 1.704-.91 2.177-.546.568-1.456 1.231-3.004 1.231-2.457 0-4.278-1.988-4.278-4.544s1.911-4.544 4.278-4.544c1.274 0 2.275.568 3.004 1.231l1.183-1.231C9.193 5.757 7.918 5 6.098 5 2.822 5 0 7.84 0 11.249s2.822 6.249 6.098 6.249c1.82 0 3.095-.568 4.187-1.799 1.092-1.136 1.456-2.745 1.456-3.976 0-.379 0-.757-.091-1.041H6.007zm41.322 1.325c-.364-.947-1.274-2.556-3.277-2.556s-3.641 1.61-3.641 4.071c0 2.272 1.638 4.071 3.823 4.071 1.729 0 2.822-1.136 3.186-1.799l-1.274-.947c-.455.663-1.001 1.136-1.911 1.136s-1.456-.379-1.911-1.231l5.188-2.272-.182-.473zm-5.279 1.326c0-1.515 1.183-2.367 2.002-2.367.637 0 1.274.379 1.456.852l-3.459 1.515zm-4.278 3.882h1.729V5.379h-1.729v11.834zm-2.73-6.911c-.455-.473-1.183-.947-2.093-.947-1.911 0-3.732 1.799-3.732 4.071s1.729 3.976 3.732 3.976c.91 0 1.638-.473 2.002-.947h.091v.568c0 1.515-.819 2.367-2.093 2.367-1.001 0-1.729-.757-1.911-1.42l-1.456.663C30.036 19.675 31.128 21 33.039 21c2.002 0 3.641-1.231 3.641-4.166V9.639h-1.638v.663zm-2.002 5.586c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.093 1.041 2.093 2.462-.91 2.462-2.093 2.462zM55.247 5.379h-4.096v11.834h1.729v-4.45h2.367c1.911 0 3.732-1.42 3.732-3.692s-1.82-3.692-3.732-3.692zm.091 5.681h-2.457V6.988h2.457c1.274 0 2.002 1.136 2.002 1.988-.091 1.041-.819 2.083-2.002 2.083zm10.467-1.704c-1.274 0-2.549.568-3.004 1.799l1.547.663c.364-.663.91-.852 1.547-.852.91 0 1.729.568 1.82 1.515v.095c-.273-.189-1.001-.473-1.729-.473-1.638 0-3.277.947-3.277 2.651 0 1.609 1.365 2.651 2.821 2.651 1.183 0 1.729-.568 2.184-1.136h.091v.947h1.638v-4.544c-.182-2.083-1.729-3.314-3.641-3.314zm-.182 6.533c-.546 0-1.365-.284-1.365-1.041 0-.947 1.001-1.231 1.82-1.231.728 0 1.092.189 1.547.379-.182 1.136-1.092 1.894-2.002 1.894zm9.557-6.249l-1.911 5.112h-.091l-2.002-5.112h-1.82l3.004 7.195-1.729 3.976h1.729L77 9.639h-1.82zm-15.291 7.574h1.729V5.379h-1.729v11.834z"/></svg>
          </a>
        </div>
      </div>
      <div class="ratio rtl-flip position-relative z-2 align-self-md-end me-md-n4 me-lg-n5 me-xxl-0" style="--fn-aspect-ratio: calc(233 / 466 * 100%); max-width: 466px">
        <img src="assets/img/home/city-guide/mobile-app.png" alt="Finder app">
      </div>
      <div class="bg-primary-subtle position-absolute bottom-0 start-0 w-100 rounded-4 d-none d-xl-block" style="height: calc(100% - 32px)"></div>
      <div class="bg-primary-subtle position-absolute bottom-0 start-0 w-100 h-100 rounded-4 d-xl-none"></div>
    </div>
  </section>
</main>
<?php snippet('footer') ?>
