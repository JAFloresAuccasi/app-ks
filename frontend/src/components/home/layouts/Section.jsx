import { Link } from "react-router-dom";
export default function SectionApp() {
    return (
    <div>
      <section className="wrapper bg-gradient-primary">
        <div className="container pt-10 pt-md-14">
          <div className="row gx-2 gy-10 align-items-center">
            <div className="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay={600} data-disabled="true">
              <h1 className="display-1 mb-5 mx-md-10 mx-lg-0" data-cue="slideInDown" data-group="page-title" data-delay={600} data-show="true" style={{ animationName: "slideInDown", animationDuration: "700ms", animationTimingFunction: "ease", animationDelay: "600ms", animationDirection: "normal", animationFillMode: "both",}}>Create a powerful but effortless website for <br />
                <span className="typer text-primary text-nowrap" data-delay={100} data-delim=":" data-words="your business.:your portfolio.:your startup.:digital marketing.">your b</span>
                <span className="cursor text-primary" data-owner="typer" style={{ transition: "all 0.1s ease 0s", opacity: 1 }}>|</span>
              </h1>
              <p
                className="lead fs-23 mb-7"
                data-cue="slideInDown"
                data-group="page-title"
                data-delay={600}
                data-show="true"
                style={{
                  animationName: "slideInDown",
                  animationDuration: "700ms",
                  animationTimingFunction: "ease",
                  animationDelay: "900ms",
                  animationDirection: "normal",
                  animationFillMode: "both",
                }}
              >
                Build your website in minutes with the help of countless amazing
                features of Sandbox.
              </p>
              <div
                className="d-flex justify-content-center justify-content-lg-start mb-4"
                data-cues="slideInDown"
                data-group="page-title-buttons"
                data-delay={900}
                data-cue="slideInDown"
                data-disabled="true"
                data-show="true"
                style={{
                  animationName: "slideInDown",
                  animationDuration: "700ms",
                  animationTimingFunction: "ease",
                  animationDelay: "900ms",
                  animationDirection: "normal",
                  animationFillMode: "both",
                }}
              >
                <span
                  data-cue="slideInDown"
                  data-group="page-title-buttons"
                  data-delay={900}
                  data-show="true"
                  style={{
                    animationName: "slideInDown",
                    animationDuration: "700ms",
                    animationTimingFunction: "ease",
                    animationDelay: "1200ms",
                    animationDirection: "normal",
                    animationFillMode: "both",
                  }}
                >
                  <a
                    className="btn btn-lg btn-primary rounded-pill me-2 scroll"
                    href="#demos"
                  >
                    Check Demos
                  </a>
                </span>
              </div>
            </div>
            <div className="col-lg-6 ms-auto position-relative">
              <div className="row g-4">
                <div
                  className="col-4 d-flex flex-column ms-auto"
                  data-cues="fadeIn"
                  data-group="col-start"
                  data-delay={900}
                  data-disabled="true"
                >
                  <div
                    className="ms-auto mt-6"
                    data-cue="fadeIn"
                    data-group="col-start"
                    data-delay={900}
                    data-show="true"
                    style={{
                      animationName: "fadeIn",
                      animationDuration: "700ms",
                      animationTimingFunction: "ease",
                      animationDelay: "900ms",
                      animationDirection: "normal",
                      animationFillMode: "both",
                    }}
                  >
                    <img
                      className="img-fluid rounded shadow-lg"
                      src="../public/img/demos/vc1.jpg"
                      srcSet="img/demos/vc1@2x.jpg 2x"
                      alt=""
                    />
                  </div>
                  <div
                    className="ms-auto mt-4"
                    data-cue="fadeIn"
                    data-group="col-start"
                    data-delay={900}
                    data-show="true"
                    style={{
                      animationName: "fadeIn",
                      animationDuration: "700ms",
                      animationTimingFunction: "ease",
                      animationDelay: "1200ms",
                      animationDirection: "normal",
                      animationFillMode: "both",
                    }}
                  >
                    <img
                      className="img-fluid rounded shadow-lg"
                      src="../public/img/demos/vc2.jpg"
                      srcSet="img/demos/vc2@2x.jpg 2x"
                      alt=""
                    />
                  </div>
                  <div
                    className="ms-auto mt-4"
                    data-cue="fadeIn"
                    data-group="col-start"
                    data-delay={900}
                    data-show="true"
                    style={{
                      animationName: "fadeIn",
                      animationDuration: "700ms",
                      animationTimingFunction: "ease",
                      animationDelay: "1500ms",
                      animationDirection: "normal",
                      animationFillMode: "both",
                    }}
                  >
                    <img
                      className="img-fluid rounded shadow-lg"
                      src="../public/img/demos/vc3.jpg"
                      srcSet="img/demos/vc3@2x.jpg 2x"
                      alt=""
                    />
                  </div>
                </div>
                <div
                  className="col-4"
                  data-cues="fadeIn"
                  data-group="col-middle"
                  data-disabled="true"
                >
                  <div
                    data-cue="fadeIn"
                    data-group="col-middle"
                    data-show="true"
                    style={{
                      animationName: "fadeIn",
                      animationDuration: "700ms",
                      animationTimingFunction: "ease",
                      animationDelay: "0ms",
                      animationDirection: "normal",
                      animationFillMode: "both",
                    }}
                  >
                    <img
                      className="w-100 img-fluid rounded shadow-lg"
                      src="../public/img/demos/vc4.jpg"
                      srcSet="img/demos/vc4@2x.jpg 2x"
                      alt=""
                    />
                  </div>
                  <div
                    data-cue="fadeIn"
                    data-group="col-middle"
                    data-show="true"
                    style={{
                      animationName: "fadeIn",
                      animationDuration: "700ms",
                      animationTimingFunction: "ease",
                      animationDelay: "300ms",
                      animationDirection: "normal",
                      animationFillMode: "both",
                    }}
                  >
                    <img
                      className="w-100 img-fluid rounded shadow-lg mt-4"
                      src="../public/img/demos/vc5.jpg"
                      srcSet="img/demos/vc5@2x.jpg 2x"
                      alt=""
                    />
                  </div>
                  <div
                    data-cue="fadeIn"
                    data-group="col-middle"
                    data-show="true"
                    style={{
                      animationName: "fadeIn",
                      animationDuration: "700ms",
                      animationTimingFunction: "ease",
                      animationDelay: "600ms",
                      animationDirection: "normal",
                      animationFillMode: "both",
                    }}
                  >
                    <img
                      className="w-100 img-fluid rounded shadow-lg mt-4"
                      src="../public/img/demos/vc6.jpg"
                      srcSet="img/demos/vc6@2x.jpg 2x"
                      alt=""
                    />
                  </div>
                </div>
                <div
                  className="col-4 d-flex flex-column"
                  data-cues="fadeIn"
                  data-group="col-end"
                  data-delay={900}
                  data-disabled="true"
                >
                  <div
                    className="mt-8"
                    data-cue="fadeIn"
                    data-group="col-end"
                    data-delay={900}
                    data-show="true"
                    style={{
                      animationName: "fadeIn",
                      animationDuration: "700ms",
                      animationTimingFunction: "ease",
                      animationDelay: "900ms",
                      animationDirection: "normal",
                      animationFillMode: "both",
                    }}
                  >
                    <img
                      className="img-fluid rounded shadow-lg"
                      src="../public/img/demos/vc7.jpg"
                      srcSet="img/demos/vc7@2x.jpg 2x"
                      alt=""
                    />
                  </div>
                  <div
                    className="mt-4 mb-10"
                    data-cue="fadeIn"
                    data-group="col-end"
                    data-delay={900}
                    data-show="true"
                    style={{
                      animationName: "fadeIn",
                      animationDuration: "700ms",
                      animationTimingFunction: "ease",
                      animationDelay: "1200ms",
                      animationDirection: "normal",
                      animationFillMode: "both",
                    }}
                  >
                    <img
                      className="img-fluid rounded shadow-lg"
                      src="../public/img/demos/vc8.jpg"
                      srcSet="img/demos/vc8@2x.jpg 2x"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <div
                className="position-relative mt-n20 mb-20"
                data-cue="fadeIn"
                data-delay={1800}
                data-show="true"
                style={{
                  animationName: "fadeIn",
                  animationDuration: "700ms",
                  animationTimingFunction: "ease",
                  animationDelay: "1800ms",
                  animationDirection: "normal",
                  animationFillMode: "both",
                }}
              >
                <div
                  className="btn btn-circle btn-yellow disabled ripple position-absolute counter-wrapper flex-column d-none d-md-flex"
                  style={{
                    bottom: 0,
                    right: "-8%",
                    width: "120px",
                    height: "120px",
                  }}
                >
                  <h3 className="text-white mt-n1 mb-0">su</h3>
                  <p className="fs-14">Precio de descuento</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
};
